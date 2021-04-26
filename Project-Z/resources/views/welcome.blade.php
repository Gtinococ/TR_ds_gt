<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <title>Proyect Z</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            body{
                background-color: #C4C4C4;
                font-family: 'Nunito', sans-serif;
                margin:0px 0px 0px 0px;
            }

            /* Add a black background color to the top navigation */
            .topnav {
            background-color: #9D00B3;
            overflow: hidden;
            }

            /* Style the links inside the navigation bar */
            .topnav a {
            float: left;
            color: white;
            text-align: center;
            padding: 25px 25px;
            text-decoration: none;
            font-size: 17px;
            font-weight: bold;
            
            }

            /* Change the color of links on hover */
            .topnav a:hover {
            background-color: #4CAF50;
            color: black;
            }

            /* Add a color to the active/current link */
            .topnav a.active {
            background-color: #4CAF50;
            color: white;
            }

            .login-continer{
                float:right;
            }

            .logo{
                float:left;
            }

        </style>
    </head>
    <body>
        <div class="container-fluid topnav">
            <div class="row">
                <img class="col-md-1 col-sm-3 col-3 logo" src="images/logo_Project-Z.png" heidth="70px" width="70px">
                <div class="offset-md-8 col-md-3 col-sm-9 col-9  login-continer">
                    @if (Route::has('login'))
                        <div class="row login">
                            @auth
                                <a href="{{ url('/dashboard') }}" class=" text-sm text-gray-700 underline">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="col-md-6 col-sm-6 col-6  text-sm text-gray-700 underline">Log in</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="col-md-6 col-sm-6 col-6 text-sm text-gray-700 underline">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                </div>
            </div>
            
        </div>
        
    </body>
</html>
