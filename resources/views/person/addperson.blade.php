
@extends('layouts.masterlayout')

@section('content')
<div class="container ">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card border border-primary">
                 

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    

                    <h2>Add Person Information</h2>
                        <br>
                    <form method="POST" action="{{route('store')}}">
                            @csrf
                            <div class="form-row">

                          
                               
                              <div class="form-group col-md-3">
                                <label > Phone Number</label>
                                <input type="numbers" class="form-control" name="phone_num" placeholder="Phone Number">
                              </div>
                              
                             
                            
                              
                                  
                            </div>

                            <div class="form-row " >

                          
                              
                               
                                <div class="form-group col-md-1">
                                  <br>
                                  
                                    <label >Gender           </label>
                                  </div>
                                <div class="form-group col-md-2 ">
                                  
                                    
                                        
                                 
                    
                                  <br>
                                  <div class="custom-control custom-radio custom-control-inline">
                                     
                                      <input type="radio" id="customRadioInline1" name="gender" class="custom-control-input " value="Male">
                                      <label class="custom-control-label" for="customRadioInline1">Male</label>
                                      
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="customRadioInline2" name="gender" class="custom-control-input" value="Female">
                                        <label class="custom-control-label" for="customRadioInline2">Female</label>
                                    </div>
                                    
                                    
                                
                              </div>
                              
                                
                                    
                              </div>
                            <div class="form-row">
                                    <div class="form-group col-md-3">
                                      
                                        <label >Age</label>
                                        <input type="number" class="form-control border border-info" name="age" placeholder="Age">
                                      
                                    </div>
                                    <div class="form-group col-md-3">
                                      <label >Status</label>
                                      <select name="status" class="form-control border border-info">
                                            <option selected>Open this select menu</option>
                                            @foreach ($statuss as $item)
                                                
                                            <option value="{{$item->id}}">{{$item->category}}</option>
                                            @endforeach

                                            
                                          
                                    </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                            <label >Ethnicity</label>
                                            <select name="ethnicity" class="form-control">
                                                  <option selected>Open this select menu</option>
                                                  @foreach ($ethnicity as $item)
                                                
                                            <option value="{{$item->id}}">{{$item->category}}</option>
                                            @endforeach
                                                  
                                                  
                                                
                                          </select>
                                          </div>
                                          <div class="form-group col-md-3">
                                                <label >Language</label>
                                                <select name="language" class="form-control">
                                                        <option selected>Open this select menu</option>
                                                        @foreach ($language as $item)
                                                      
                                                  <option value="{{$item->id}}">{{$item->category}}</option>
                                                  @endforeach
                                                </select>
                                              </div>
                                            </div>
                            
                            <div class="form-row">
                                    <div class="form-group col-md-3">
                                            <label >Province</label>
                                            <select name="province" class="form-control" id="province">
                                                    <option selected>Open this select menu</option>
                                                    @foreach ($provinces as $item)
                                                  
                                              <option value="{{$item->id}}">{{$item->name}}</option>

                                              
                                              @endforeach

                                              //////
                                              
                                            </select>
                                          </div>
                              <div class="form-group col-md-3">
                                <label >City/District</label>
                                <select name="district" class="form-control" id="district">
                                        <option selected>Open this select menu</option>
                                        {{-- @foreach ($district as $item)
                                      
                                  <option value="{{$item->id}}">{{$item->name}}</option>
                                  @endforeach --}}
                                </select>
                              </div>
                             
                                  <div class="form-group col-md-3">
                                        <label >Location</label>
                                        <select name="location" class="form-control" id="location">
                                                <option selected>Open this select menu</option>
                                                {{-- @foreach ($location as $item)
                                              
                                          <option value="{{$item->id}}">{{$item->name}}</option>
                                          @endforeach --}}
                                        </select>
                                      </div>
                                      
                            </div>
                            
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label >Education</label>
                                    <select name="education" class="form-control">
                                            <option selected>Open this select menu</option>
                                            @foreach ($education as $item)
                                          
                                      <option value="{{$item->id}}">{{$item->level}}</option>
                                      @endforeach
                                    </select>
                                  </div>
                                    
                              <div class="form-group col-md-3">
                                <label >Job</label>
                                <select name="job" class="form-control">
                                        <option selected>Open this select menu</option>
                                        @foreach ($job as $item)
                                      
                                  <option value="{{$item->id}}">{{$item->category}}</option>
                                  @endforeach
                                </select>
                              </div>
                              <div class="form-group col-md-3">
                                    <label > Economy</label>
                                    <select name="economy" class="form-control">
                                            <option selected>Open this select menu</option>
                                            @foreach ($economy as $item)
                                          
                                      <option value="{{$item->id}}">{{$item->rang}}</option>
                                      @endforeach
                                    </select>
                                  </div>
                                  
                            </div>
                            <dev >
                            <hr class="border-top border-primary">
                            </dev>
                            <div class="form-row">
                              
                                    {{-- <div class="form-group col-md-12">
                                            <label >Survey</label>
                                            <select name="survey_id" class="form-control">
                                                    
                                                    @foreach ($survey as $item)
                                                  
                                              <option value="{{$item->id}}" selected>{{$item->name}}</option>
                                              @endforeach
                                            </select>
                                          </div> --}}
                              <div class="form-group col-md-6">
                                <label >Question 1:</label>

                              <br>
                                
                                        
                                        @foreach ($question as $item)
                                        @if($item->id==1)
                                          
                                            <label class="">{{$item->text}}</label>
                                            
                                        
                                        @endif
                                      
                                  
                                  @endforeach
                               
                              </div>
                              <div class="form-group col-md-6">
                                    <label > Options </label>
                                    <select name="option_1" class="form-control">
                                            <option selected>Open this select menu</option>
                                            @foreach ($option_1 as $item)
                                          
                                      <option value="{{$item->id}}">{{$item->text}}</option>
                                      @endforeach
                                    </select>
                                  </div>
                              <div class="form-group col-md-6">
                                  <label >Question 2:</label>

                                  <br>
                                    
                                            
                                            @foreach ($question as $item)
                                            @if($item->id==2)
                                              
                                                <label class="">{{$item->text}}</label>
                                                
                                            
                                            @endif
                                          
                                      
                                      @endforeach
                                  </div>
                              <div class="form-group col-md-6">
                                    <label > Options</label>
                                    <select name="option_2" class="form-control">
                                            <option selected value="20">Open this select menu</option>
                                            @foreach ($option_2 as $item)
                                          
                                      <option value="{{$item->id}}">{{$item->text}}</option>
                                      @endforeach
                                    </select>
                                  </div>
                                  <div class="form-group col-md-6">
                                      <label >Question 3:</label>

                                      <br>
                                        
                                                
                                                @foreach ($question as $item)
                                                @if($item->id==3)
                                                  
                                                    <label class="">{{$item->text}}</label>
                                                    
                                                
                                                @endif
                                              
                                          
                                          @endforeach
                                      </div>
                                  <div class="form-group col-md-6">
                                        <label > Options</label>
                                        <select name="option_3" class="form-control">
                                                <option selected value="20">Open this select menu</option>
                                                @foreach ($option_3 as $item)
                                              
                                          <option value="{{$item->id}}">{{$item->text}}</option>
                                          @endforeach
                                        </select>
                                      </div>
                                      

                            </div>

                            <br>
                            
                                <dev class="col-md-10 offset-md-12">
                                    <a href="{{route('showperson')}}" class="btn btn-primary col-1"> back</a>
                                    <button type="submit" class="btn btn-primary col-1">Submit</button>
                                
                            </dev>
                            
                            
                           
                          </form>
                          
                    




                    
                </div>
            </div>
        </div> 

            <script type="text/javascript">

                $('#province').on('change',function(e){
                    console.log(e);
                    var province_id =e.target.value;
                    $.get('/survey/public/home/addperson/json-district?province_id=' + province_id,function(data){
                console.log(data)
                $('#district').empty();
                $('#district').append('<option value="0" disable="true" selected="true">===select===</option>');
                
                $.each(data,function(index,disobj){
                    $('#district').append('<option value="'+ disobj.id +'">'+disobj.name+'</option>');
                });
                });
             });


             $('#district').on('change',function(e){
                console.log(e);
                var district_id =e.target.value;
                $.get('/survey/public/home/addperson/json-location?district_id=' + district_id,function(data){
            console.log(data)
            $('#location').empty();
            $('#location').append('<option value="0" disable="true" selected="true">===select===</option>');
            
            $.each(data,function(index,disobj){
                $('#location').append('<option value="'+ disobj.id +'">'+disobj.name+'</option>');
            });
            });
         });


        

            </script>
        
    </div>
</div>
@endsection
