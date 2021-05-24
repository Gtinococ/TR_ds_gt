<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <a class="title" href="{{ url('/juego') }}">{{_('JUEGO')}}</a>
            <a class="title" href="{{ url('/juego/mapas') }}">{{_('MAPAS')}}</a>
            <a class="title border-b-2 border-indigo-400">{{ __('LOGROS') }}</a>
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
                    @foreach ($logros as $logro)
                        @if($logro->dificulty == 1)
                            <div class=" col-md-1 dificulty">
                                <a>Fácil</a><br>
                            </div>
                            <div class="offset-md-11"></div>

                        
                        @elseif($logro->dificulty == 2)
                            <div class=" col-md-1 dificulty">
                                <a>Difícl</a><br>
                            </div>
                            <div class="offset-md-11"></div>

                        @elseif($logro->dificulty == 3)
                            <div class=" col-md-1 dificulty">
                                <a>Imposible</a><br>
                            </div>
                            <div class="offset-md-11"></div>

                        @endif
                        <div class="logro col-md-12">

                            <div class="container-img">
                                <img style="height:63px;width:63px;" src="../{{$logro->img}}">
                            </div>  
                            <div>
                                <a class="name">{{ $logro->name }}</a><br>
                                <div class="container-desc">
                                    <a class="description ">{{ $logro->description }}</a><br>
                                </div>
                                
                                @if(Auth::user()->is_admin == 1)
                                    <div class="caja">
                                        <div class="row">
                                            <p class="col-md-12 col-lg-12">
                                                <x-button>
                                                    <a style="color:white" href="{{ 'edit-logro/'.$logro->id}}">
                                                        {{ __('Editar logro') }}
                                                    </a>
                                                </x-button>                
                                            </p>

                                            <p class="col-md-12 col-lg-12">
                                                <x-button>
                                                    <a style="color:white" href="{{ 'logros/'.$logro->id}}">
                                                        {{ __('Borrar logro') }}
                                                    </a>
                                                </x-button>                
                                            </p>
                                        </div>
                                    </div>
                                @endif 
                            </div> 
                            
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <style>

        .logro {
            background-color: rgba(87,1,91,0.7);
            border: 2px solid white;
            padding: 30px 40px 10px 40px;
            margin-bottom: 30px;
            box-shadow: 5px 5px 5px #404040;

        }

        .dificulty{
            background-color: rgba(87,1,91,0.7);
            border: 2px solid white;
            margin-bottom: 10px;
            color:white;
            box-shadow: 5px 5px 5px #404040;
            
        }

        .name{
            font-weight: bold;
            color: white !important;
            
        }

        .container-desc{
            background-color: white;
            margin: 10px 0px 0px 0px;
            padding: 5px 0px 5px 10px;
            color:white;
            background-color: rgba(135, 135, 135, 0.5) !important; ; 
        }

        .img{
            float: left;
        }
        
        .fondo{
            background-color: transparent !important;
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
            padding: 20px 20px 20px 20px;
            margin-bottom: 30px;
        }
 
        .title{
            margin-left: 10px;
            margin-right: 10px
        }

        .caja{
            margin-top:17px;
        }

        main{

            background-image: url("{{URL::asset('images/textura/texture.png')}}");
            background-repeat: repeat;
            background-color:black;
        }

    </style>
</x-app-layout>