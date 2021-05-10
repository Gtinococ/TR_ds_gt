<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <a class="title" href="{{ url('/historia') }}">{{_('HISTORIA')}}</a>
            <a class="title border-b-2 border-indigo-400">{{ __('PERSONAJES') }}</a>
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
    <div class="coso row max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="fondo col-md-12 col-xs-12 bg-white overflow-hidden sm:rounded-lg">
            <div class="fondo p-6 bg-white border-gray-200">
                <div class="admin-box">
                    @foreach($personajes as $personaje)
                        <div class="logro col-md-12">
                            <h3 class="name">{{$personaje->name}}</h3>
                            <div class="row">
                                <div class="container-img col-md-3">
                                    <img class="imagen" src="../{{$personaje->img}}" alt="{{$personaje->name}}"> 
                                </div>

                                <div class="description col-md-8">
                                    <p>{{$personaje->description}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
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
            background: #4CAF50;
            border: 2px solid #00FF0A;
            border-radius: 2px;
            padding: 10px;
            margin-bottom: 30px;
        }

        .fondo{
            background-color: transparent !important;
        }

        .logro {
            background-color: rgba(87,1,91,0.9);
            border: 3px solid #00FF0A;
            border-radius: 5px;
            padding: 10px 10px 10px 15px;
            margin-bottom: 30px;
            box-shadow: 5px 5px 5px #404040;

        }

        .container-img{
            border: 2px solid #D3D3D3;
            border-radius: 5px;
            background-color: white;
            margin: 10px 10px 0px 10px;
            background-color: rgba(243, 244, 246, var(--tw-bg-opacity)) !important;
            border: 2px solid #00FF0A;
        }

        .name{
            font-weight: bold;
            color: white !important;
        }

        .description{
            border-radius: 5px;
            background-color: white;
            margin: 10px 10px 0px 10px;
            padding-top: 10px;
            color:black;
            border: 2px solid white;
            border-radius: 3px;
            background-color: rgba(135, 135, 135, 0.8) !important; 
        }

        .imagen{
            min-height: 100%;
            min-width: 100%;
            
        }
        
        main{

            background: rgba(159, 0, 179, 1);
        }
        


    </style>
</x-app-layout>