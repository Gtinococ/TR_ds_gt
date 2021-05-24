<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <a class="title" href="{{ url('/juego') }}">{{_('JUEGO')}}</a>
            <a class="title border-b-2 border-indigo-400">{{ __('MAPAS') }}</a>
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
                    @foreach ($mapas as $mapa)
                        <div class="logro col-md-12">
                            <h3 class="name">{{$mapa->name}}</h3>
                            <div class="row">
                                <div class="imagen-box col-md-5 col-11">
                                    <img class="imagen" src="../{{$mapa->img}}" alt="{{$mapa->name}}"> 
                                </div>
                                <div class="description col-md-6 col-11">
                                    <a>{{ $mapa->description }}</a><br>
                                </div>
                            </div>
                        </div>
                    @endforeach
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

        .footer{
            background-color: rgba(87,1,91,0.7);
            border: 2px solid white;
            box-shadow: 5px 5px 5px #404040;
            
        }

        .footer-name{
            font-weight: bold;
            color: white !important;   
        }
    
        .logro {
            background-color: rgba(87,1,91,0.7);
            border: 2px solid white;
            padding: 10px 20px 30px 20px;
            margin-bottom: 30px;
            box-shadow: 5px 5px 5px #404040;

        }

        .name{
            font-weight: bold;
            color: white !important;
        }

        .container-desc{
            border: 2px solid #D3D3D3;
            border-radius: 5px;
            background-color: white;
            padding-left: 10px;
            background-color: rgba(243, 244, 246, var(--tw-bg-opacity)) !important; 
        }

        .img{
            float: left;
        }


        .admin-box{
            padding: 20px 20px 20px 20px;
            margin-bottom: 30px;
        }


        .title{
            margin-left: 10px;
            margin-right: 10px
        }

        .fondo{
            background-image: url("{{URL::asset('images/textura/texture.png')}}");
        }

        .description{
            margin-left: 10px;
            padding: 8px 15px 8px 15px;
            background-color: white;
            color:white;
            background-color: rgba(135, 135, 135, 0.5) !important; 
        }

        .imagen{
            min-height: 100%;
            min-width: 100%;
        }

        .imagen-box{
            margin-left:10px;
        }

        .logro {
            background-color: rgba(87,1,91,0.7);
            border: 2px solid white;
            padding: 10px 20px 20px 20px;
            margin-bottom: 30px;
            box-shadow: 5px 5px 5px #404040; 

        }

        main{

            background-color: transparent !important;            
            background-repeat: repeat;
            background-color:black;
        }

        @media (max-width: 540px) and (min-width: 500px){
            .description{
                margin: 10px 15px 10px 10px;
            }

            .imagen-box{
                margin-left: 0px;
                padding-left: 9px;
            }
        }

        @media (max-width: 425px) and (min-width: 361px){
            .description{
                margin: 10px 15px 10px 10px;
                font-size: 14px;
            }

            .imagen-box{
                margin-left: 0px;
                padding-left: 9px;
            }
        }

        @media (max-width: 360px) and (min-width: 319px){
            .description{
                margin: 10px 8px 10px 8px;
            }

            .imagen-box{
                margin-left: 0px;
                padding-left: 9px;
            }
        }

        @media (max-width: 280px) and (min-width: 270px){
            .description{
                margin: 10px 15px 10px 8px;
                font-size: 10px;
            }

            .imagen-box{
                margin-left: 0px;
                padding-left: 9px;
            }
        }

        @media (min-width: 300px) and (max-width: 764px){
            .logro{
                padding-bottom: 8px;
            }
        }


</x-app-layout>