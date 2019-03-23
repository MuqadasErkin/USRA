<?php

namespace App\Http\Controllers;



use App\Person;
use App\Pd_village;
use App\Location;

use App\Province;
use App\Distret;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Auth;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('welcome');
    }

    public function showperson()
    {
        $person = DB::table('person')->paginate(10);

        return view('person.person', ['persons' => $person]);

        return view ('');



    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function distrect(){

        $province_id = Input::get('province_id');
        $distrects = Distret::where('province_id', '=' , $province_id)->orderByRaw('name')->get();
        return response()->json($distrects);
         
     }

     

     public function location(){
        $district_id = Input::get('district_id');
        $locations = Location::where('district_id', '=' , $district_id)->orderByRaw('name')->get();
        return response()->json($locations);

     }

    public function create(Request $request)
    {

        $statuss = DB::select('select * from status ');
        $ethnicity  = DB::select('select * from ethnicity ');
        $language  = DB::select('select * from language ');
        $province  = DB::select('select * from province ');
        $district  = DB::select('select * from district ');
       
        $location  = DB::select('select * from location ');
        $education  = DB::select('select * from education ');
        $job  = DB::select('select * from job ');
        $economy  = DB::select('select * from economy ');
        $survey=DB::select('select * from survey  ');
        $question=DB::select('select * from question  ');
        $option_1=DB::select('SELECT * FROM `option` WHERE question_id=1  ');
        $option_2=DB::select('SELECT * FROM `option` WHERE question_id=2');
        $option_3=DB::select('SELECT * FROM `option` WHERE question_id=3');
         
        
    $provinces=Province::all();

        return view('person.addperson')->with('statuss',$statuss)->with('ethnicity',$ethnicity)->with('language',$language)
        ->with('province',$province)->with('district',$district)->with('location',$location)
        ->with('education',$education)->with('job',$job)->with('economy',$economy)
        ->with('survey',$survey)->with('question',$question)->with('provinces',$provinces)
        ->with('option_1',$option_1)->with('option_2',$option_2)->with('option_3',$option_3);

        

        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        // $request->validate([
        //     'phone_num' => 'required',
        //     'age'=>'required',

            

        // ]);

        $u= Auth::user()->name ;
        
        
        DB::insert('insert into person (phone_num, name,sure_name,age,gender,status_id,ethnicity_id,language_id,location_id,education_id,job_id,economy_id,user) values (?,?,?,?,?,?,?,?,?,?,?,?,?)',
         [$request->input('phone_num'), 
         $request->input('name'),
         $request->input('sure_name'),
         $request->input('age'),
         $request->input('gender'),
         $request->input('status'),
         $request->input('ethnicity'),
         $request->input('language'),
         $request->input('location'),
         $request->input('education'),
         $request->input('job'),
         $request->input('economy'),
        $u ,]);
        

        
        

      
        $dataarr=array(

            array('person_phone_num'=>$request->input('phone_num'),'survey_id'=>1,'question_id'=>1,'option_id'=>$request->input('option_1')),
            array('person_phone_num'=>$request->input('phone_num'),'survey_id'=>1,'question_id'=>2,'option_id'=>$request->input('option_2')),
            array('person_phone_num'=>$request->input('phone_num'),'survey_id'=>1,'question_id'=>3,'option_id'=>$request->input('option_3')),
            
        );
        


      //  $path=$request->input('phone_num').'.mp3';
        $r=DB::table('person_response_survey')->insert($dataarr);
       $v= DB::insert('insert into  voice_records (phone_num, survey_id,file_path) values (?,?,?)',
        [$request->input('phone_num'),
        1,
        ($request->input('phone_num').'.mp3'),
        
        ]);
        

        
         if ($r ) {
             return redirect()->route('showperson')->with('success','succesfully Added !');
          }

            // dd($stu);
            // dd($survey);
     }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function show(Person $person)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request , Person $person)
    {

        $statuss = DB::select('select * from status ');
        $ethnicity  = DB::select('select * from ethnicity ');
        $language  = DB::select('select * from language ');
        $province  = DB::select('select * from province ');
        $district  = DB::select('select * from district ');
       
        $location  = DB::select('select * from location ');
        $education  = DB::select('select * from education ');
        $job  = DB::select('select * from job ');
        $economy  = DB::select('select * from economy ');
        $survey=DB::select('select * from survey  ');
        $question=DB::select('select * from question  ');
        $option=DB::select('select * from option  ');

        $person=Person::find($person->phone_num);
         return view('person.edit')->with('person',$person)->with('statuss',$statuss)->with('ethnicity',$ethnicity)->with('language',$language)
         ->with('province',$province)->with('district',$district)->with('location',$location)
         ->with('education',$education)->with('job',$job)->with('economy',$economy)
         ->with('survey',$survey)->with('question',$question)->with('option',$option);;
     
        
     
     // dd($person->all());
     
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

     $per=Person::findOrfail($request->phone_num);
     $per->update('$request->all');
       

        
    // $person->name=$request->name;
         
    //     $person->sure_name=$request->sure_name;
    //     $person->gender=$request->gender;
    //     $person->age=$request->age;
    //     $person->education_id=$request->education_id;
    //     $person->economy_id=$request->economy_id;
    //     $person->job_id=$request->job_id;
        
    //     $person->location_id=$request->location_id;
    //     $person->status_id=$request->status_id;
    //     $person->ethnicity_id=$request->ethnicity_id;
    //     $person->language_id=$request->language_id;
        
        
        
    //    //  $persons->save();
        
        
       

        
    //      if ($person->save())
    //      {
     
    //        return redirect()->route('showperson')->with('success','succesfully Updated !');     }

        // dd($persons->name);
       
      //  dd($persons->all());

    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function destroy(Person $person)
    {
        //
    }
}
