<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    New car
                </div>
                 <div class="links">
                    <a href="{{ url('/') }}">My car</a>
                </div>
                <div class="form">
                    <form method="POST" action="/add-new-car">
                        {{ csrf_field() }}
                        <label for="company_name">Company name</label>
                         <input type="text" name="company_name" id="company_name"><br>
                        <label for="model_name">Model name</label>
                         <input type="text" name="model_name" id="model_name"><br>
                        <label for="year">Year of production</label>
                         <input type="number" name="year" id="year"><br>
                        <label for="fuel_type">Fuel type</label>
                         <input type="text" name="fuel_type" id="fuel_type"><br>
                        <label for="engine">Engine type</label>
                         <input type="number" max="16" min="0.8" step="0.1" name="engine" id="engine"><br>
                        
                        <input type="submit"> Add new car
                    </form>
                    
                </div>
               
            </div>
        </div>
    </body>
</html>
