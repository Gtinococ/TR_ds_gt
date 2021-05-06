<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <a class="title" href="{{ url('/historia') }}">{{_('HISTORIA')}}</a>
            <a class="border-b-2 border-indigo-400">{{ __('PERSONAJES') }}</a>
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
        <div class="fondo col-md-12 col-xs-12 bg-white overflow-hidden sm:rounded-lg">
            <div class="fondo p-6 bg-white border-gray-200">
                <div class="admin-box">
                    @foreach($personajes as $personaje)
                        <div class="logro col-md-12">
                            <h3 class="name">{{$personaje->name}}</h3>
                            <div class="row">
                                <div class="container-img col-md-5">
                                    <img src="../{{$personaje->img}}" alt="{{$personaje->name}}"> 
                                </div>

                                <div class="description col-md-6">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
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
            background-color: white;
            border: 1px solid #D3D3D3;
            border-radius: 5px;
            padding: 10px;
            box-shadow: 5px 5px 5px grey;
            margin-bottom: 30px;
        }

        .fondo{
            background-color: transparent !important;
        }

        .logro {
            background-color: rgba(157,0,179,0.7);
            border: 2px solid #D3D3D3;
            border-radius: 5px;
            padding: 10px 10px 10px 15px;
            margin-bottom: 30px;
            box-shadow: 5px 5px 5px grey;

        }

        .container-img{
            border: 2px solid #D3D3D3;
            border-radius: 5px;
            background-color: white;
            margin: 10px 10px 0px 10px;
            background-color: rgba(243, 244, 246, var(--tw-bg-opacity)) !important; 
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

    </style>
</x-app-layout>