<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <a class="title border-b-2 border-indigo-400">{{ __('JUEGO') }}</a>
            <a class="title" href="{{ url('/juego/mapas') }}">{{_('MAPAS')}}</a>
            <a class="title" href="{{ url('/juego/logros') }}">{{_('LOGROS')}}</a>
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
    </header>
    <div class="row max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="col-md-12 col-xs-12 overflow-hidden sm:rounded-lg">
            <div class="p-6 border-gray-200">
                <div class="admin-box">
                    <div class="logro">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item">
                                <img class="imagen d-block w-100" src="images/maps/map-4.png" alt="First slide">
                            </div>

                            <div class="carousel-item active">
                                <img class="imagen d-block w-100" src="images/maps/map-playing.png" alt="Second slide">
                            </div>

                            <div class="carousel-item">
                                <img class="imagen d-block w-100" src="images/maps/map1.png" alt="Third slide">
                            </div>
                        </div>

                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>

                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                        </div>
                        <a href="http://dawjavi.insjoaquimmir.cat/gtinoco/curs2021/tr_ds_gt/TR_ds_gt/Proyect-Z-game/linux/Project-Z-linux/Project-Z.x86_64" class="descargar-juego btn btn-warning offset-2 col-8 offset-2 offset-sm-4 col-sm-4 offset-sm-4 offset-md-4 col-md-4 offset-md-4">DESCARGAR JUEGO LINUX</a> 
                        <a href="http://dawjavi.insjoaquimmir.cat/gtinoco/curs2021/tr_ds_gt/TR_ds_gt/Proyect-Z-game/windows/Project-Z-windows/Project-Z%2086/Project-Z.exe" class="descargar-juego btn btn-warning offset-2 col-8 offset-2 offset-sm-4 col-sm-4 offset-sm-4 offset-md-4 col-md-4 offset-md-4">DESCARGAR JUEGO WINDOWS</a> 
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    
    <footer class="footer page-footer font-small blue">

        <div class="footer-name footer-copyright text-center py-3">
            &copy; Copyright 2021, Project-Z
        </div>

    </footer>  
    <style>

        .footer{
            margin-top:50px;
            background-color: rgba(87,1,91,0.7);
            border: 2px solid white;
            box-shadow: 5px 5px 5px #404040;
            
        }

        .footer-name{
            font-weight: bold;
            color: white !important;   
        }
        
        .title{
            margin-left: 10px;
            margin-right: 10px
        }

        .admin-box{
            padding: 20px 20px 20px 20px;
            margin-bottom: 30px;
        }

        .descargar-juego{
            border: 1px solid #D3D3D3;
            border-radius: 5px;
            padding: 10px 10px 10px 10px;
            font-weight: bold;
            margin-top: 30px;
        }



        .imagen{

            border-radius:3px;
            border: 2px solid #D3D3D3;
  
        }

        .imagen-logo{
            width:900px;
            height:500px;
            padding-left: 200px;
            padding-right: 200px;
            border-radius:3px;
        }
        main{
            background-repeat: repeat;
            background-color:black;
            background-color: transparent !important;
        }

        .logro {
            background-color: rgba(87,1,91,0.7);
            border: 2px solid white;
            padding: 30px 20px 20px 20px;
            margin-bottom: 30px;
            box-shadow: 5px 5px 5px #404040; 

        }



        @media (max-width: 420px) and (min-width: 400px){
            .footer{
                margin-top:200px;
            }
        }

        @media (max-width: 380px) and (min-width: 370px){
            .footer{
                margin-top:200px;
            }
        }

        @media (max-width: 770px) and (min-width: 760px){
            .footer{
                margin-top:280px;
            }
        }

        @media (max-width: 1200px) and (min-width: 1000px){
            .footer{
                margin-top:500px;
            }
        }

        @media (max-width: 2600px) and (min-width: 1440px){
            .footer{
                margin-top:100px;
            }
        }

    

        
    </style>
</x-app-layout>
