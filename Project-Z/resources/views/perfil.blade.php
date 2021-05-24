<x-app-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <a class="title border-b-2 border-indigo-400">{{ __('PERFIL') }}</a>
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
                    <h3 class="name">Datos personales</h3>
                        <div class="logro-2">
                            <div class="row">
                                <div class="container-img col-12 col-md-2 col-lg-2">
                                    @if(Auth::user()->img)
                                        <img style="height:63px;width:63px;margin-top:7px;margin-left:7p;border-radius:3px;" src="{{Auth::user()->img}}">
                                    @else
                                        <svg style="margin-top:7px;margin-left:7px;" class=" w-16 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                        </svg>
                                    @endif
                                </div>
                                @if (Auth::user()->is_admin == 1)
                                <div class="description col-12 col-md-5 col-lg-3">
                                
                                    @if (Auth::user()->is_admin == 1)
                                        <a class="name" >Nombre: {{ Auth::user()->name }}</a> <br>
                                        <a class="name" >Correo: {{ Auth::user()->email }}</a> <br>
                                        <a class="name" >Rol: Administrador</a> <br>
                                    @endif
                                </div> 
                                @else
                                <div class="description-noadmin col-12 col-md-5 col-lg-3">
                                    <a class="name" >Nombre: {{ Auth::user()->name }}</a> <br>
                                    <a class="name" >Correo: {{ Auth::user()->email }}</a> <br>                                
                                </div>
                                @endif          
                                                
                                <div class="col-md-5 col-lg-7 col-xs-12 row box-logout">
                                    <div class="row">
                                        <form class="col-md-12 col-lg-4 col-sm-4" method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <p class="boton-perfil">
                                                <x-button>
                                                    <a style="color:white" :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                                                        {{ __('Cerrar sesión') }}
                                                    </a>
                                                </x-button> 
                                            </p> 
                                        </form> 
                                        <p class="boton-perfil col-md-12 col-lg-4  col-sm-4">
                                            <x-button>
                                                <a style="color:white" href="{{ 'perfil/upload/'.Auth::user()->id}}">
                                                    {{ __('Foto de perfil') }}
                                                </a>
                                            </x-button>                
                                        </p>

                                        <p class="boton-perfil col-md-12 col-lg-4 col-sm-4">
                                            <x-button>
                                                <a style="color:white" href="{{ 'perfil/edit/'.Auth::user()->id}}">
                                                    {{ __('Editar perfil') }}
                                                </a>
                                            </x-button>                
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <h3 class="name">Tus logros</h3>
                        @php
                            $id = Auth::user()->id;
                            $logros = false;
                        @endphp
                        @foreach (Auth::user()->myAchievements($id) as $logro)
                            @php
                                $logros = true;
                            @endphp
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
                                    <img style="height:63px;width:63px;" src="{{$logro->img}}">
                                </div>  
                                <div class="" >
                                    <a class="name">{{ $logro->name }}</a><br>
                                    <div class="container-desc">
                                        <a class="description ">{{ $logro->description }}</a><br>
                                    </div>
                                </div> 
                                
                            </div>
                        @endforeach
                        @if($logros == false)
                        <div class="logro col-md-12">

                        <h1 style="color:white;">Juega para conseguir logros</h1>

                        </div>
                        @endif  
                        <br>                   
                    @if( Auth::user()->is_admin == 1)
                    <h3 class="name">Administrar usuarios</h3>
                        @if(Auth::user()->count())
                            <div class="">
                            @php
                                $usuarios=false;
                            @endphp
                            @foreach ($users as $user)
                                @if ( Auth::user()->id != $user->id )
                                @php
                                    $usuarios=true;
                                @endphp
                                    <div class="logro">
                                        <div style="margin-bottom:25px;">
                                            <a class="name" >Id: {{$user->id}}</a><br>
                                            <a class="name" >Nombre: {{$user->name}}</a> <br>
                                            <a class="name" >Correo: {{$user->email}}</a> <br>
                                            <a class="name" >Creación: {{$user->created_at}}</a> <br>
                                            <a class="name" >Última modificación: {{$user->updated_at}}</a> <br>
                                            
                                            @if($user->is_admin)
                                                <a class="admin">No puedes eliminar a otros administradores</a>
                                            @else
                                                <x-button style="margin-top:10px;">
                                                    <a style="color:white" href="{{ 'perfil/'.$user->id}}">
                                                        {{ __('Eliminar usuario') }}
                                                    </a>
                                                </x-button>
                                            @endif
                                        </div> 
                                    </div>
                                    
                                @endif
                            @endforeach
                            
                            @if($usuarios==false)
                                <div class="admin-role">
                                    <a>No hay usuarios que adminsitrar</a>
                                </div>
                            @endif
                            </div>  
                        @endif
                        
                    @endif
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


        .button-logout{
            background: #9D00B3;
            margin-left: 12px !important;
            padding-left: 16px !important;
            padding-right: 16px !important;
        }
        
        .button-eliminar{
            background: #9D00B3;
            margin-left: 12px !important;
            padding-left: 16px !important;
            padding-right: 16px !important;
        }

        .eliminar-user{
            margin-top:2px;
        }

        .logro {
            background-color: rgba(87,1,91,0.7);
            border: 2px solid white;
            padding: 10px 20px 20px 20px;
            margin-bottom: 30px;
            box-shadow: 5px 5px 5px #404040; 

        }

        .logro-2{
            background-color: rgba(87,1,91,0.7);
            border: 2px solid white;
            padding: 10px 20px 20px 20px;
            margin-bottom: 30px;
            box-shadow: 5px 5px 5px #404040; 

        }

        .box-logout{
            margin-top:10px;
        }

        .user-profile{
            margin-bottom: 30px;
            padding: 10px 10px 10px 28px;
            background-color: rgba(157,0,179,0.7);
            border: 1px solid #D3D3D3;
            border-radius: 5px;
            box-shadow: 5px 5px 5px grey;
            font-weight: bold;
            color:white;
        }

        .datos{
            margin-left: 13px;
        }

        .no-admin{
            margin-top:5px !important;
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


        .admin-box{
            padding: 20px 20px 20px 20px;
            margin-bottom: 30px;
        }

        
        .logro {
            background-color: rgba(87,1,91,0.7);
            border: 2px solid white;
            padding: 30px 40px 10px 40px;
            margin-bottom: 30px;
            box-shadow: 5px 5px 5px #404040;

        }

        .name{
            font-weight: bold;
            color: white !important;
            
        }

        .container-desc{
            background-color: white;
            margin: 10px 0px 16px 0px;
            padding: 5px 0px 5px 10px;
            color:white;
            background-color: rgba(135, 135, 135, 0.5) !important; ; 
        }

        .img{
            float: left;
        }

        .dificulty{
            background-color: rgba(87,1,91,0.7);
            border: 2px solid white;
            margin-bottom: 10px;
            color:white;
            box-shadow: 5px 5px 5px #404040;
            
        }
        .fondo{
            background-color: transparent !important;
        }

        main{
            background-image: url("{{URL::asset('images/textura/texture.png')}}");
            background-repeat: repeat;
            background-color:black;
        }
        

        .description-noadmin{
            margin-top:12px;
            padding-right:10px;
        }

        .admin{
            font-weight: bold;
            color: #FF4A4A !important;

        }
        
        @media (max-width: 585px)  {
            .boton-perfil{
                margin-left: 15px;
            }            
        }
    </style>
</x-app-layout>