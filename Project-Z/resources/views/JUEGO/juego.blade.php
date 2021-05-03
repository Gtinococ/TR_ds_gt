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
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="fondo col-md-12 col-xs-12 bg-white overflow-hidden sm:rounded-lg">
            <div class="fondo p-6 bg-white border-b border-gray-200">
                <div class="admin-box">
                    <div id="demo" class="carousel slide" data-ride="carousel">

                    <ul class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                        <li data-target="#demo" data-slide-to="1"></li>
                        <li data-target="#demo" data-slide-to="2"></li>
                    </ul>

                    <div class="carousel-box container carousel-inner">
                        <div class="carousel-item active">
                            <img style="border-radius:5px;" src="images/fondo.jpg"  alt="Los Angeles" width="1100" height="500">
                        </div>

                        <div class="carousel-item">
                            <img style="border-radius:5px;" src="images/fondo.jpg" alt="Chicago" width="1100" height="500">
                        </div>

                        <div class="carousel-item">
                            <img style="border-radius:5px;" src="images/fondo.jpg" alt="New York" width="1100" height="500">
                        </div>
                    </div>

                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                    
                    </div>
                    <button type="button" class="descargar-juego btn btn-warning offset-2 col-8 offset-2 offset-sm-4 col-sm-4 offset-sm-4 offset-md-4 col-md-4 offset-md-4">DESCARGAR JUEGO</button>
                </div>
            </div>
        </div>
    </div>
    
    <style>
        .title{
            margin-left: 10px;
            margin-right: 10px
        }

        .admin-box{
            background-color: white;
            border: 1px solid #D3D3D3;
            border-radius: 5px;
            padding: 10px;
            box-shadow: 5px 5px 5px grey;
            margin-bottom: 30px;
        }
        .descargar-juego{
            border: 1px solid #D3D3D3;
            border-radius: 5px;
            padding: 10px 10px 10px 10px;
            font-weight: bold;
            margin-top: 10px;
        }

        .fondo{
            background-color: transparent !important;
        }

        
        
    </style>
</x-app-layout>
