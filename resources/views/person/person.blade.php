
@extends('layouts.masterlayout')

@section('content')
<div class="container   ">

        <dev class="container">

                @if(session()->has('success'))
              
              
              
                    <div class="alert alert-success alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      <strong>{{session()->get('success')}}</strong>
              </div>
              @endif
              
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card border border-primary">
                 

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="navbar  ">
                            <a href="{{route('addperson')}}"class="btn btn-primary my-2 my-sm-0">Add Person</a>
                            <form class="form-inline">
                              <input class="form-control btn--outline-primary mr-sm-2 border-primary" type="search" placeholder="Search" aria-label="Search">
                              <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
                            </form>
                        </div>

                        

                        <table class="table container ">
                                <thead class="thead-dark">
                                  <tr >                                      <tr >                                      <tr >
                                    <th scope="col">#</th>
                                    <th scope="col">Person Number</th>
                                    <th scope="col">Name</th>
                
                                    <th scope="col">Sure Name</th>
                                    <th scope="col">location</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">Age</th>
                                    <th scope="col"> action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                {{$x=1}}
                                  @foreach ($persons as $person)
                
                                    <tr >
                                        <td>{{$x++}}</td>
                                        <td>{{$person->phone_num}}</td>
                                        <td>{{$person->name}}</td>
                                        <td>{{$person->sure_name}}</td>
                                        <td>{{$person->location_id}}</td>
                                        <td>{{$person->gender}}</td>
                                        <td>{{$person->age}} </td>
                                        <td colspan="2" >
                                        
                                        <a href="#" class="btn btn-primary ">View</a>
                                        <a href="{{route('edit',$person->phone_num)}}" class="btn btn-warning ">Edit</a>
                
                                        <form style="display: inline-block" method="POST" action="#">
                                          {{@csrf_field()}}
                                          <input type="hidden" name="_method" value="DELETE">
                                          <button type="submit" class="btn btn-secondary">Delete</a>
                
                                        </form>
                
                
                                        </td>
                
                
                                    </tr>
                
                                  @endforeach
                
                                </tbody>
                              </table>
                            
                
                              <div class="container ">{{$persons->links()}}</div>
                              </div>


                    



                    
                </div>
            </div>
        </div> 

        
    </div>
</div>
@endsection
