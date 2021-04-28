<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
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

            .bg-image {
                /* The image used */

                /* Add the blur effect */
                filter: blur(3px);
                -webkit-filter: blur(3px);

                /* Full height */
                height: 500px;
                width:100%;

                /* Center and scale the image nicely */
                background-repeat:no-repeat;
                background-position:center;
            }

            #fondo{
                border:5px solid black;
            }

            .login-continer{
                float:right;
            }

            .logo{
                float:left;
            }

            .carousel-inner{
                height:500px;
            }

            .carousel-item{
                margin-left: auto;
                margin-right: auto;


            }

            #carouselExampleControls .d-block{
                height:100%;
                width:100%;
                margin: auto auto auto auto;

            }

            #carousel-border{
                height:525px;
                width:1000px;
                margin-top: 100px;
                margin-left: auto;
                margin-right: auto;
                position: absolute;
                top: 40px; left: 13%;
                border:5px solid white;
                

            }

            #carouselExampleControls{
                background-color: rgba(0,0,0, 1);
                margin-top:12px;
                
            }

            .body-container{
                background-color:grey;
                height:525px;
                
            }

            .info-container{
                height:525px;
                border:1px solid white;
                border-top:none;
                border-bottom:none;
            }

            .info{
                margin-top:100px;
                margin-bottom:100px;
                border:2px solid white;


            }

            .cr-container{
                background-color:rgba(159, 0, 179, 1);
                font-weight: bold;
            }

        </style>
    </head>
    <body>
        <div class="container-fluid topnav">
            <div class="row">
                <img class="col-md-1 col-sm-3 col-3 logo" src="images/logo_Project-Z.png" >
                <div class="offset-md-8 col-md-3 col-sm-9 col-9 login-continer">
                
                    @if (Route::has('login'))
                        <div class="row login">
                            @auth
                                <a href="{{ url('/dashboard') }}" class=" text-sm text-gray-700 underline">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="col-md-6 col-sm-6 col-6 text-sm text-gray-700 underline">Log in</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="col-md-6 col-sm-6 col-6 text-sm text-gray-700 underline">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <img id="fondo" class="bg-image" src="images/fondo.jpg" alt="Fondo">
        <div class="body-container container-flex">
            <div class="info-container row container offset-md-1 col-md-10 offset-md-1">
                <div class="info offset-md-1 col-md-10 offset-md-1 ">
                </div>
            </div>
        </div>
        <div id="carousel-border" class="border">
            <div id="carouselExampleControls" class="carousel slide row " data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner ">
                    <div class="carousel-item active">
                    <img class="d-block" src="images/fondo.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block" src="images/fondo.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block" src="images/fondo.jpg" alt="Third slide">
                    </div>
                </div>    
            </div>
        </div>
        <footer class="text-center text-lg-start">
            <!-- Grid container -->
            <div class="container p-4">
                <!--Grid row-->
                <div class="row">
                <!--Grid column-->
                    <div class="col-lg-6 col-md-12 mb-6 mb-md-0">
                        <h5 class="text-uppercase">Contact Us</h5>

                        <p>
                        Contact: projectz.contact@gmail.com
                        </br>
                        Tel: 666 666 666
                        </p>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-6 col-md-12 mb-6 mb-md-0">
                        <h5 class="text-uppercase">Social Media</h5>

                        <ul class="list-unstyled mb-0">
                        <li>
                            <a href="#!" class="text-dark">Link 1</a>
                        </li>
                        <li>
                            <a href="#!" class="text-dark">Link 2</a>
                        </li>
                        </ul>
                    </div>
                <!--Grid column-->

                <!--Grid column-->
                </div>
                <!--Grid row-->
            </div>
            <!-- Grid container -->

            <!-- Copyright -->
            <div class="cr-container p-3 text-light">
                © 2020 Copyright:
                <a class="text-light">Prozectz.com</a>
            </div>
            <!-- Copyright -->
        </footer>
    </body>
</html>
