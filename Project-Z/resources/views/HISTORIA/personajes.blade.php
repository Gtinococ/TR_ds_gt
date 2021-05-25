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
        <div class="fondo col-md-12 col-xs-12  overflow-hidden sm:rounded-lg">
            <div class="fondo p-6 border-gray-200">
                <div class="admin-box">
                    @foreach($personajes as $personaje)
                        <div class="logro col-md-12">
                            <h3 class="name">{{$personaje->name}}</h3>
                            <div class="row">
                                <div class="container-img col-md-4 col-lg-3">
                                    <img class="imagen" src="../{{$personaje->img}}" alt="{{$personaje->name}}"> 
                                </div>

                                <div class="description col-md-11 col-lg-8">
                                    <p>{{$personaje->description}}</p>
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
            &copy; Copyright 2021, Project-Z
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
        .title{
            margin-left: 10px;
            margin-right: 10px
        }
        .admin-box{
            padding: 20px 20px 20px 20px;
            margin-bottom: 30px;
        }

        .fondo{

        }

        .logro {
            background-color: rgba(87,1,91,0.7);
            border: 2px solid white;
            padding: 10px 20px 17px 20px;
            margin-bottom: 30px;
            box-shadow: 5px 5px 5px #404040;

        }

        .container-img{
            margin: 10px 10px 0px 10px;
            background-color: rgba(255,255,255, 0.2) !important;
        }

        .name{
            font-weight: bold;
            color: white !important;
        }

        .description{
            background-color: white;
            margin: 10px 10px 0px 10px;
            padding-top: 10px;
            color:white;
            background-color: rgba(135, 135, 135, 0.5) !important; 
        }

        .imagen{
            min-height: 100%;
            min-width: 100%;
            
        }
        
        main{

            background-image: url("{{URL::asset('images/textura/texture.png')}}");
            background-repeat: repeat;
            background-color:black;
        }

        @media (min-width: ) and (max-width:){
            .container-img{
                
            }
        }


    </style>
</x-app-layout>