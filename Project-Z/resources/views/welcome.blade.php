<x-app-layout>
    <x-slot name="header">
        <div class="row">
            <h1 class="titulo col-md-12 ">{{ __('PROYECT-Z') }}</h1>
        </div>
        
    </x-slot>
    <header>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>    
    </header>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="fondo col-md-12 col-xs-12 bg-white overflow-hidden sm:rounded-lg">
            <div class="fondo p-6 bg-white border-b border-gray-200">
                <div class="admin-box">
                    <div clas="content-container">
                        <div class="caja">
                            <img class="img" style="border-radius:5px;" src="images/fondo.jpg"  alt="Los Angeles" width="100%" height="100%">
                            <div class="row-box row justify-content-around">
                                <div class="col-md-12">
                                    <div class="text col-md-12">
                                        <a class="name1">¿TE ATREVES?</a></br></br>
                                        <a class="name2">¡¡ REESCRIBE LA HISTORIA !!</a>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</x-app-layout>

    <style>
        body{   
            background-color: #C4C4C4;
            font-family: Nunito, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
            margin:0px 0px 0px 0px;
        }

        /* Add a black background color to the top navigation */
        .navbar {
        background-color: #9D00B3;
        overflow: hidden;
        padding:0px 16px 0px 16px !important;
        }

        /* Style the links inside the navigation bar */
        .navbar a {
            float: right;
            color: white;
            text-align: center;
            text-decoration: none;
            font-size: 17px;
            font-weight: bold;
        
        }

        /* Change the color of links on hover */
        .navbar a:hover {
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

        .fondo{
            background-color: transparent !important;
        }

        .login-continer{
            float:right;
        }

        .logo{
            float:left;
            height:63px;
            width:63px;
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

        .login{
            padding-top: 20px;
            padding-bottom: 20px;

        }

        .register{
            padding-top: 20px;
            padding-bottom: 20px;
        }

        .content-container{
            margin-left:30%;
        }

        .container1{
            border-top: 2px solid white;

            background-color: black;
            padding-left: 10px;
            background-color: rgba(135, 135, 135, 0.8) !important; 
        }

        .admin-box{
            background-color: white;
            border: 1px solid #D3D3D3;
            border-radius: 5px;
            padding: 10px;
            box-shadow: 5px 5px 5px grey;

        }

        .titulo{
            text-align:center;
            color: rgba(157,0,179,1);
            font-family: "Arial Black", sans-serif;
            letter-spacing: -1px;
            text-shadow: 2px 0 0 white, -2px 0 0 white, 0 2px 0 white, 0 -2px 0 white, 1px 1px white, -1px -1px 0 white, 1px -1px 0 white, -1px 1px 0 white;
            background-color:  #D3D3D3;
            border: 1px solid #D3D3D3;
            border-radius: 10px;
            box-shadow: 0px 5px 5px grey;

        }

        .row-box{
            margin:30px 0px 20px 0px;              
        }

        .info-container{
            background-color: rgba(157,0,179,0.7);
            border: 2px solid #D3D3D3;
            border-radius: 5px;
            padding: 10px 10px 10px 15px;
            margin-bottom: 30px;
            box-shadow: 5px 5px 5px grey;

        }

        .name1{
            font-weight: bold;
            color: white !important;
            text-align: center;
            font-size:50px;
        }

        .name2{
            font-weight: bold;
            color: white !important;
            text-align: center;
            font-size:70px;
        }

        .text{
            position: absolute;
            top:-280px;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        .caja{
            position: relative;
            text-align: center;
        }

        @media (max-width: 375px) {
            .name1{
                font-weight: bold;
                color: transparent !important;
                text-align: center;
            }

            .name2{
                font-weight: bold;
                color: transparent !important;
                text-align: center;
            }
        }

        


    </style>

</html>
