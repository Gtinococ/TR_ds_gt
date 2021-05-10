<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <a class="border-b-2 border-indigo-400">{{ __('NOTICIAS') }}</a>
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
            <div class="fondo p-6 bg-white border-gray-200">
                <div class="admin-box">
                    @php
                        $news = false;
                    @endphp

                    @foreach ($noticias as $noticia)
                        @php
                            $news = true;
                        @endphp
                        <div class="logro col-md-12">
                            <h3 class="name">{{$noticia->name}}</h3>
                            <div class="row">
                                <div class="description col-md-11 col-sm-11 col-11">
                                    <a>{{ $noticia->description }}</a><br><br>
                                    <a>Escrito por: {{ $noticia->writer }}</a><br>
                                </div> 
                            </div>

                            @if(Auth::user()->is_admin == 1)
                            <div class="caja">
                                <div class="row">
                                    <p class="col-md-12 col-lg-2">
                                        <x-button class="button-logout eliminar-user">
                                            <a style="color:white" href="{{ route('create.noticia') }}">
                                                {{ __('Añadir noticia') }}
                                            </a>
                                        </x-button>                
                                    </p>

                                    <p class="col-md-12 col-lg-2">
                                        <x-button class="button-logout eliminar-user">
                                            <a style="color:white" href="{{ 'noticias/edit-noticia/'.$noticia->id}}">
                                                {{ __('Editar noticia') }}
                                            </a>
                                        </x-button>                
                                    </p>

                                    <p class="col-md-12 col-lg-2">
                                        <x-button class="button-logout eliminar-user">
                                            <a style="color:white" href="{{ 'noticias/'.$noticia->id}}">
                                                {{ __('Borrar noticia') }}
                                            </a>
                                        </x-button>                
                                    </p>
                                </div>
                            </div>
                            @endif 
                            
                        </div>

                    @endforeach

                    @if($news == false)
                        <div class="admin-role">
                            <h1>No hay noticias disponibles</h1>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <style>

        .title{
            margin-left: 10px;
            margin-right: 10px
        }

        .caja{
            margin-top:17px;
        }

        .name{
            font-weight: bold;
            color: white !important;
        }

        .admin-box{
            background-color: white;
            border: 1px solid #D3D3D3;
            border-radius: 5px;
            padding: 10px;
            box-shadow: 5px 5px 5px grey;
            margin-bottom: 30px;
        }
        .admin-role{
            background-color: rgba(157,0,179,0.7);
            border: 1px solid #D3D3D3;
            color:white;
            border-radius: 5px;
            padding: 10px 10px 10px 10px;
            box-shadow: 5px 5px 5px grey;
            font-weight: bold;
            margin: 10px 8px 25px 8px;

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

        .description{
            border-radius: 5px;
            margin-top:10px;
            margin-left: 10px;
            margin-right: 10px;
            padding-left: 10px;
            padding-top: 5px;
            color:black;
            border: 2px solid white;
            border-radius: 3px;
            background-color: rgba(135, 135, 135, 0.8) !important; 
        }

        @media (min-width: 330px) and (max-width: 360px){
            .description{
                margin-left: 8px;
            }
            .name{
                font-size: 22px;
            }
        }

        @media (max-width: 321px){
            .description{
                margin-left: 7px;
            }

            .name{
                font-size: 18px;
            }
        }

        @media (max-width: 375px) and (min-width: 370px){
            .description{
                margin-left: 10px;
            }

            .name{
                font-size: 23px;
            }
        }

        @media (max-width: 415px) and (min-width: 410px){
            .description{
                margin-left: 10px;
            }

            .name{
                font-size: 27px;
            }
        }
    </style>
</x-app-layout>
