
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
                    <form method="POST" action="{{route('update',$person->phone_num)}}">
                            <input type="hidden" name="_method" value="PUT">
                            {{ csrf_field() }}
                            

                            <div class="form-row">
                              <div class="form-group col-md-3">
                                <label > Phone Number</label>
                                <input type="numbers" class="form-control"  value="{{$person->phone_num}}" name="phone_num" placeholder="Phone Number">
                              </div>
                              <div class="form-group col-md-3">
                                <label > Name</label>
                                <input type="text" class="form-control" value="{{$person->name}}" name="name" placeholder="Name">
                              </div>
                              <div class="form-group col-md-3">
                                    <label >Sure Name</label>
                                    <input type="text" class="form-control" value="{{$person->sure_name}}" name="sure_name" placeholder="Sure Name">
                                  </div>
                                  <div class="form-group col-md-3">
                                        <label >Age</label>
                                        <input type="number" class="form-control" value="{{$person->age}}" name="age" placeholder="Age">
                                      </div>
                            </div>
                            <div class="form-row">
                                    <div class="form-group col-md-3">
                                      <label >Gender</label>
                                      <select  name="gender"  class="form-control">
                                            <option selected>{{$person->gender}}</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            
                                          
                                    </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                      <label >Status</label>
                                      <select name="status_id" class="form-control">
                                          {{
                                     $sta_id=$person->status_id
                                          
                                        
                                            
                                            }}
                                            {{$sta_value=''}}
                                            
                                            @foreach ($statuss as $item)
                                                @if($item->id==$sta_id){
                                                    {{$sta_value=$item->category}};
                                                }
                                                @endif
                                            <option value="{{$item->id}}">{{$item->category}}</option>
                                            @endforeach
                                            <option value="{{$person->status_id}}" selected>{{$sta_value}}</option>

                                            
                                          
                                    </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                            <label >Ethnicity</label>
                                            <select name="ethnicity_id" class="form-control">
                                                  <option selected>Open this select menu</option>
                                                  @foreach ($ethnicity as $item)
                                                
                                            <option value="{{$item->id}}">{{$item->category}}</option>
                                            @endforeach
                                                  
                                                  
                                                
                                          </select>
                                          </div>
                                          <div class="form-group col-md-3">
                                                <label >language_id</label>
                                                <select name="language_id" class="form-control">
                                                        <option selected>Open this select menu</option>
                                                        @foreach ($language as $item)
                                                      
                                                  <option value="{{$item->id}}">{{$item->category}}</option>
                                                  @endforeach
                                                </select>
                                              </div>
                                            </div>
                            
                            <div class="form-row">
                                    <div class="form-group col-md-3">
                                            <label >Province_id</label>
                                            <select name="province_id" class="form-control">
                                                    <option selected>Open this select menu</option>
                                                    @foreach ($province as $item)
                                                  
                                              <option value="{{$item->id}}">{{$item->name}}</option>
                                              @endforeach
                                            </select>
                                          </div>
                              <div class="form-group col-md-3">
                                <label >City/Distrect</label>
                                <select name="district_id" class="form-control">
                                        <option selected>Open this select menu</option>
                                        @foreach ($district as $item)
                                      
                                  <option value="{{$item->id}}">{{$item->name}}</option>
                                  @endforeach
                                </select>
                              </div>
                              
                                  <div class="form-group col-md-3">
                                        <label >Location</label>
                                        <select name="location_id" class="form-control">
                                                <option selected>Open this select menu</option>
                                                @foreach ($location as $item)
                                              
                                          <option value="{{$item->id}}">{{$item->name}}</option>
                                          @endforeach
                                        </select>
                                      </div>
                            </div>
                            
                            <div class="form-row">
                                    <div class="form-group col-md-3">
                                            <label >Education</label>
                                            <select name="education_id" class="form-control">
                                                    <option selected>Open this select menu</option>
                                                    @foreach ($education as $item)
                                                  
                                              <option value="{{$item->id}}">{{$item->level}}</option>
                                              @endforeach
                                            </select>
                                          </div>
                              <div class="form-group col-md-3">
                                <label >Job</label>
                                <select name="job_id" class="form-control">
                                        <option selected>Open this select menu</option>
                                        @foreach ($job as $item)
                                      
                                  <option value="{{$item->id}}">{{$item->category}}</option>
                                  @endforeach
                                </select>
                              </div>
                              <div class="form-group col-md-3">
                                    <label > Economy</label>
                                    <select name="economy_id" class="form-control">
                                            <option selected>Open this select menu</option>
                                            @foreach ($economy as $item)
                                          
                                      <option value="{{$item->id}}">{{$item->rang}}</option>
                                      @endforeach
                                    </select>
                                  </div>
                                  
                            </div>
                            <br>
                            <a href="{{route('showperson')}}" class="btn btn-primary col-1"> back</a>
                            <button type="submit" class="btn btn-primary col-1">Update</button>
                            
                          </form>
                          
                    




                    
                </div>
            </div>
        </div> 

        
    </div>
</div>
@endsection
