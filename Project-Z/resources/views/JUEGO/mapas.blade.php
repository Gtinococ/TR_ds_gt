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
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="fondo col-md-12 col-xs-12 bg-white overflow-hidden sm:rounded-lg">
            <div class="fondo p-6 bg-white border-b border-gray-200">
                <div class="admin-box">
                    @foreach ($mapas as $mapa)
                        <div class="mapa col-md-12">
                            <div class="" >
                                <h3 class="name">{{ $mapa->name }}</h3><br>
                                
                                <div  class="container-desc">
                                    <img style="height:400px;width:700px;border-radius:5px;margin:10px;" src="{{{URL::asset('images/fondo.jpg')}}}">
                                </div> <br>
                                
                                <div class="container-desc">
                                    <a class="description ">{{ $mapa->description }}</a><br>
                                </div>
                            </div> 
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    
    <style>
 
        .mapa {
            background-color: rgba(157,0,179,0.7);
            border: 2px solid #D3D3D3;
            border-radius: 5px;
            padding: 10px 10px 10px 15px;
            margin-bottom: 30px;
            box-shadow: 5px 5px 5px grey;

        }

        .dificulty{
            font-weight: bold;
            color: white !important;
            background-color: #9D00B3;
            border: 2px solid #D3D3D3;
            border-radius: 5px;
            padding: 5px 5px 5px 5px;
            text-align: center;
            
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

      
        .admin-role{
            background-color: #C4C4C4 ;
            border: 1px solid #D3D3D3;
            border-radius: 5px;
            padding: 10px 10px 10px 10px;
            box-shadow: 5px 5px 5px grey;
            margin: 10px 8px 25px 8px;
        }

        .admin-box{
            background-color: white;
            border: 1px solid #D3D3D3;
            border-radius: 5px;
            padding: 10px;
            box-shadow: 5px 5px 5px grey;
            margin-bottom: 30px;
        }

        .title{
            margin-left: 10px;
            margin-right: 10px
        }

        .fondo{
            background-color: transparent !important;
        }
</x-app-layout>