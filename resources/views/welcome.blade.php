<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <script src="/js/bootstrap.min.js"></script>
    <script src="/../../public/js/jquery.min.js"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>Welcome</title>

    </head>
    <body>
        <dev class="container  ">

                <div class="jumbotron center ">
                        <h1 class="display-4">Welcome to Survey Management System!</h1>
                        <p class="lead">Hi ! this is the Survey Management System</p>
                        <hr class="my-4">
                        <p>for login plz click to login button or create new acount from register button</p>
                        


            
                @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                         
                            <a class="btn btn-primary btn-lg" href="{{route('home')}}" role="button">Home</a>
                        @else
                          
                            <a class="btn btn-primary btn-lg" href="{{ route('login') }}" role="button">Login</a>
                            @if (Route::has('register'))
                               
                               <a class="btn btn-primary btn-lg" href="{{ route('register') }}" role="button">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif


                
            </div>
               
            </div>

        </dev>
            
    </body>
</html>
