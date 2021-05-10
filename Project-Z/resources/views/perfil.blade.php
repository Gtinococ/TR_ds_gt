<x-app-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('PERFIL') }}
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
                    <h3>Datos personales</h3>
                    <div class="user-profile">
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
                                        <a class="datos" >Nombre: {{ Auth::user()->name }}</a> <br>
                                        <a class="datos" >Correo: {{ Auth::user()->email }}</a> <br>
                                        <a class="datos" >Rol: Administrador</a> <br>
                                    @endif
                                </div> 
                            @else
                               
                                <div class="description-noadmin col-12 col-md-5 col-lg-3">
                                    <a class="datos" >Nombre: {{ Auth::user()->name }}</a> <br>
                                    <a class="datos" >Correo: {{ Auth::user()->email }}</a> <br>                                
                                </div>
                   
                            @endif          
                                              
                            <div class="col-md-5 col-lg-7 col-xs-12 row box-logout">
                                <div class="row">
                                    <form class="col-md-12 col-lg-4 col-sm-4" method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <p>
                                            <x-button style="background-color:rgba(255, 0, 0, 0.7);" class="button-logout" :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                                                {{ __('Cerrar sesión') }}
                                            </x-button> 
                                        </p> 
                                    </form> 
                                    <p class="col-md-12 col-lg-4  col-sm-4">
                                        <x-button class="button-logout eliminar-user">
                                            <a style="color:white" href="{{ 'perfil/upload/'.Auth::user()->id}}">
                                                {{ __('Foto de perfil') }}
                                            </a>
                                        </x-button>                
                                    </p>

                                    <p class="col-md-12 col-lg-4 col-sm-4">
                                        <x-button class="button-logout eliminar-user">
                                            <a style="color:white" href="{{ 'perfil/edit/'.Auth::user()->id}}">
                                                {{ __('Editar perfil') }}
                                            </a>
                                        </x-button>                
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3>Tus logros</h3>
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
                    <h3>Administrar usuarios</h3>
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
                                    <div class="admin-role">
                                        <div>
                                            <a class="datos" >Id: {{$user->id}}</a><br>
                                            <a class="datos" >Nombre: {{$user->name}}</a> <br>
                                            <a class="datos" >Correo: {{$user->email}}</a> <br>
                                            <a class="datos" >Creación: {{$user->created_at}}</a> <br>
                                            <a class="datos" >Última modificación: {{$user->updated_at}}</a>
                                            <br>
                                            @if($user->is_admin)
                                                <a style="color:black;" class="datos">No puedes eliminar a otros usuarios que tengan el rol de administradores</a>
                                            @else
                                                <x-button class="button-eliminar eliminar-user">
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
    <style>
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
            background-color: white;
            border: 1px solid #D3D3D3;
            border-radius: 5px;
            padding: 10px;
            box-shadow: 5px 5px 5px grey;
            margin-bottom: 30px;
        }

        
        .logro {
            background-color: rgba(157,0,179,0.7);
            border: 2px solid #D3D3D3;
            border-radius: 5px;
            padding: 10px 10px 10px 15px;
            margin-bottom: 10px;
            box-shadow: 5px 5px 5px grey;

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

        .dificulty{
            font-weight: bold;
            color: white !important;
            background-color: rgba(157,0,179,0.7);
            border: 2px solid #D3D3D3;
            border-radius: 5px;
            padding: 5px 5px 5px 5px;
            text-align: center;
            
        }
        .fondo{
            background-color: transparent !important;
        }

        .description{
            padding-right:10px;
        }

        .description-noadmin{
            margin-top:12px;
            padding-right:10px;
        }
    </style>
</x-app-layout>