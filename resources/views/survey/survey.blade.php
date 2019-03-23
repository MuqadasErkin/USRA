
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
                        <h1>Survey</h1>
                        <p>This is the Main page .</p>
                    
                </div>
            </div>
        </div> 

        
    </div>
</div>
@endsection
