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
    <div class="py-12">
        <div class="row max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="col-md-12 col-xs-12 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-gray-200">
                    <h3>Datos personales</h3>
                    <div class="user-profile">
                        <a class="datos" >Nombre: {{ Auth::user()->name }}</a> <br>
                        <a class="datos" >Correo: {{ Auth::user()->email }}</a> <br>
                        @if (Auth::user()->is_admin == 1)
                            <a class="datos" >Rol: Administrador</a> <br>
                        @endif
                    </div>
                    @if( Auth::user()->is_admin == 1)
                    <h3>Administrar usuarios</h3>
                        @if(Auth::user()->count())
                            <div class="admin-box">
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
                                            <a class="datos" >Correo: {{$user->email}}</a> 
                                            <br>
                                            @if($user->is_admin)
                                                <a class="datos">No puedes eliminar a otros administradores</a>
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
                        @endif
                        </div>  
                    @endif
                    <h3>Tus logros</h3>
                    <div class="admin-box">
                        

                            @foreach ($logros as $logro)
                            <div class="admin-role">
                                @if($logro->dificulty == 1)
                                    <div class=" col-md-1 dificulty">
                                        <a>Fácil</a><br>
                                    </div>
                                    <div class="offset-md-11"></div>

                                @elseif($logro->dificulty == 2)
                                    <div class=" col-md-1 dificulty">
                                        <a>Mediano</a><br>
                                    </div>
                                    <div class="offset-md-11"></div>

                                @elseif($logro->dificulty == 3)
                                    <div class=" col-md-1 dificulty">
                                        <a>Difícil</a><br>
                                    </div>
                                    <div class="offset-md-11"></div>

                                @endif
                                <div class="logro col-md-12">

                                    <div class="">
                                        <img style="height:63px;width:63px;" src="{{URL::asset('images/logo_Project-Z.png')}}">
                                    </div>  
                                    <div class="" >
                                        <a class="name">{{ $logro->name }}</a><br>
                                        
                                        <div class="container-desc">
                                            <a class="description ">{{ $logro->description }}</a><br>
                                        </div>
                                    </div> 
                                    
                                </div>
                              </div>  
                            @endforeach
                        
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-xs-12 box-logout">
               <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <p>
                        <x-button class="button-logout" :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                            {{ __('Cerrar sesión') }}
                        </x-button> 
                    </p> 
                </form> 
               
                <x-button class="button-logout eliminar-user">
                    <a style="color:white" href="{{ 'perfil/edit/'.Auth::user()->id}}">
                        {{ __('Editar perfil') }}
                    </a>
                </x-button>
                    
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
            background-color: #C4C4C4;
            border: 1px solid #D3D3D3;
            border-radius: 5px;
            box-shadow: 5px 5px 5px grey;
            font-weight: bold;

        }

        .datos{
            margin-left: 13px;
        }

        .admin-role{
            background-color: white ;
            border: 1px solid #D3D3D3;
            border-radius: 5px;
            padding: 10px 10px 10px 10px;
            box-shadow: 5px 5px 5px grey;
            font-weight: bold;
            margin: 10px 8px 25px 8px;

        }

        .admin-box{
            background-color: #C4C4C4;
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
        

    
    
    </style>
</x-app-layout>