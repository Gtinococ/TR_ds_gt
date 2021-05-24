<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <a class="border-b-2 border-indigo-400">{{ __('ARMAS') }}</a>
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

                @foreach($weapons as $weapon)
                    <div class="logro col-md-12">
                        <h3 class="name">{{$weapon->name}}</h3>

                        <div class="container-img">
                            <img class="imagen" src="{{$weapon->img}}">
                        </div>  

                        <div class="container-desc">
                            <label style="color:white;font-weight: bold;" >Daño: </label> <a class="container-text">{{$weapon->damage}}</a><br>
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
            padding: 20px 20px 20px 20px;
            margin-bottom: 30px;
        }

        .fondo{
            background-color: transparent !important;
        }

        .logro {
            background-color: rgba(87,1,91,0.7);
            border: 2px solid white;
            padding: 10px 20px 20px 20px;
            margin-bottom: 30px;
            box-shadow: 5px 5px 5px #404040; 

        }


        .name{
            font-weight: bold;
            color: white !important;
        }

        .container-img{
            margin: 10px 10px 0px 0px;
            background-color: rgba(255,255,255, 0.2) !important;
        }

        .container-desc{
            background-color: white;
            margin: 10px 10px 0px 0px;
            padding-top: 10px;
            padding-left:10px;
            color:white;
            background-color: rgba(135, 135, 135, 0.5) !important; 
        }

        .container-text{
            padding-left: 5px;
            padding-right: 10px;
            color:black;
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


    </style>
</x-app-layout>
