<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <a class="border-b-2 border-indigo-400">{{ __('ABOUT US') }}</a>
        </h2>
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

        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" data-auto-replace-svg></script>

    </header>
    <div class="row max-w-7xl mx-auto sm:px-6 lg:px-8">

        <div class=" col-md-12 col-xs-12 overflow-hidden sm:rounded-lg">

            <div class=" p-6 border-gray-200">

                <div class="admin-box">

                    <div class="logro col-md-12">

                        <div class="row">
                        
                            <img class="images col-md-6 col-lg-6 col-xl-6" src="{{URL::asset('images/logo_Project-Z.png')}}">
                            <div  class="box col-md-6 col-lg-5 col-xl-5">
                                <h2 class="titulo">¿Quienes somos?</h2>
                                <h5 class="name">Somos un par de amigos que tienen pasión por los videojuegos</h5>
                                <p class="name">Decidimos adentrarnos en este fastastico mundo empezando por hacer un videojuego y una página web relacionada, y este es el resultado</p>
                                <div class="row name">
                                    <div class="col-md-12">
                                        <a>Nuestras redes sociales: </a>
                                    </div>
                                    
                                    <div class="redes-box col-3 col-md-2">
                                        <a href="https://www.instagram.com/"><img class="redes" src="{{URL::asset('images/social-media/inst-logo.png')}}" alt="Instagram"></a>
                                    </div>

                                    <div class="redes-box col-3 col-md-2">
                                        <a href="https://twitter.com/"><img class="redes" src="{{URL::asset('images/social-media/twitter_logo.png')}}" alt="Twitter"></a>
                                    </div>
                                    
                                    
                                </div>
                            </div>                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer page-footer font-small blue">

        <div class="footer-name footer-copyright text-center py-3">
            &copy; Copyright 2021, Proyect-Z
        </div>

    </footer>   
    <style>
    
        .title{
            margin-left: 10px;
            margin-right: 10px
        }
        
        .titulo{
            font-weight: bold;
            color: white !important;
            margin-top:30px; 
        }

        .name{
            font-weight: bold;
            color: white !important;
            margin-top:30px;
        }

        .admin-box{
            padding: 20px 20px 20px 20px;
            margin-bottom: 30px;
        }

        .logro {
            background-color: rgba(87,1,91,0.7);
            border: 2px solid white;
            padding: 10px 40px 30px 40px;
            margin-bottom: 30px;
            box-shadow: 5px 5px 5px #404040;

        }

        .footer{
            background-color: rgba(87,1,91,0.7);
            border: 2px solid white;
            box-shadow: 5px 5px 5px #404040;
             
        }

        .footer-name{
            font-weight: bold;
            color: white !important;   
        }

        .redes{
            width: 30px;
            height: 30px;
            
        }

        .redes-box{
            margin-top:10px;
        }

        @media (max-width: 770px) and (min-width:767px){
            .redes-box{
                padding-right: 0px;
                
            }
        }

        @media (min-width: 766px){
            .box{
                border-left:2px solid #C4C4C4
            }
        }

        @media (max-width: 766px){
            .titulo{
                font-size: 30px;
                text-align: center;
            }

            .box{
                border-top:2px solid #C4C4C4;
            }

            .redes-box{
                padding-right: 0px;
                
            }

        }

        @media (min-width: 770px){
            .box{
                padding-top:30px;
            }

        }
        
        @media (max-width: 320px){
            .titulo{
                font-size: 24px;
                text-align: center;
            }
        }

        @media (max-width: 360px){
            .titulo{
                font-size: 29px;
                text-align: center;
            }
        }

        @media (max-width:850px) and (min-width:768px){
            .images{
                height:80%;
                width:80%;
                margin-top: 120px;
            }
        }

        @media (max-width:321px) and (min-width:319px){
            .titulo{
                font-size: 24px;
                text-align: left;
            }
            .redes-box{
                padding-right: 0px;
                
            }
        }

        @media (max-width:280px){
            .titulo{
                font-size: 15px;
                text-align: left;
            }

            .name{
                font-size: 10px;

            }

            .redes-box{
                padding: 0px;

            }
        }


    </style>
</x-app-layout>
