<x-app-layout>
    <x-slot name="header">
        <div class="row">
            <h1 class="titulo col-md-12 ">{{ __('PROJECT-Z') }}</h1>
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
    <div class="row max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="col-md-12 col-xs-12 overflow-hidden sm:rounded-lg"> 
            <div class="p-6 border-gray-200">
                <div class="admin-box">
                    <div class="logro">
                        <div class="row">

                            <div class="col-md-6">
                                <img class="images" src="{{URL::asset('images/logo_Project-Z.png')}}">
                            </div>                        
                            <div class="name col-md-6">
                                <div class="contenido">
                                    <h3 class="title" >BIENVENIDOS !!</h3>
                                    <p>¿Te gustaría navegar por nuestra página web y poder jugar a Project-Z?</p>
                                    <p> <a href="login">Inicia sesión</a>  y podrás continuar</p>                            
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <style>
    

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

        .logro {
            background-color: rgba(87,1,91,0.7);
            border: 2px solid white;
            padding: 10px 20px 0px 20px;
            margin-bottom: 10px;
            box-shadow: 5px 5px 5px #404040; 

        }
      
        .admin-box{
            padding: 20px 20px 20px 20px;
            margin-bottom: 30px;
        }

        .title{
            font-weight: bold;
            color: #4CAF50;

        }
        
        .contenido{
            margin-top: 60px;
        }

        .text{
            position: absolute;
            top:-280px;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        @media (max-width:2560px) and (min-width:769px){
            .images{
                height:80%;
                width:80%;
                margin-top: 30px;
                margin-left:30px

            }
            .name{
                border-left: 2px solid white;
                margin-bottom: 10px;
                font-weight: bold;
                color: white !important;
                text-align: center;
            }

        }

        @media (max-width:768px) and (min-width:426px){
            .images{
                height:80%;
                width:80%;
                margin-top: 30px;
                margin-left:30px

            }
            .name{
                border-left: 2px solid white;
                margin-bottom: 10px;
                font-weight: bold;
                color: white !important;
                text-align: center;            
            }

            .contenido{
                margin-top: 30px;
            }   

        }


        @media (max-width:425px) and (min-width:361px){
            .images{
                height:80%;
                width:80%;
                margin-top: 30px;
                margin-left:22px

            }
            .name{
                border-top: 2px solid white;
                margin-bottom: 10px;
                font-weight: bold;
                color: white !important;
                text-align: center;            
            }

            .contenido{
                margin-top: 30px;
            }   

        }

        @media (max-width:360px) and (min-width:322px){
            .images{
                height:80%;
                width:80%;
                margin-top: 20px;
                margin-left:18px

            }
            .name{
                border-top: 2px solid white;
                margin-bottom: 10px;
                font-weight: bold;
                color: white !important;
                text-align: center;            
            }

            .contenido{
                margin-top: 30px;
            }   
            .title{
                font-size: 25px
            }

        }

        @media (max-width:321px) and (min-width:100px){
            .images{
                height:80%;
                width:80%;
                margin-top: 10px;
                margin-left:15px

            }
            .name{
                border-top: 2px solid white;
                margin-bottom: 10px;
                font-weight: bold;
                color: white !important;
                text-align: center;            
            }

            .contenido{
                margin-top: 30px;
            }   

            .title{
                font-size: 20px
            }

        }



    </style>
</x-app-layout>
