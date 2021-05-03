<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <a class="border-b-2 border-indigo-400">{{ __('HISTORIA') }}</a>
            <a class="title" href="{{ url('/historia/personajes') }}">{{_('PERSONAJES')}}</a>
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
                    <h1 id="font" class="col-12 offset-lg-5 offset-2 col-lg-7 col-md-10">Project-Z</h1>
                    <p class="offset-md-2 col-md-8 offset-md-2">
                        Project Z esta basado en el año 2023 después de una pandemia mundial de Virus Necroa, la cual después de todas sus variantes muto a un variante zombi que inicio su propagación en España, mas concretamente en Vilanova i la Geltru, donde se detectaron los primeros casos de esta variante.
                    </p>
                    <p class="offset-md-2 col-md-8 offset-md-2">
                        En principio esta variante fue considerada como una simple mutación que solo afectaba a una muy baja cantidad de la población, pero al ver que sus síntomas eran el aumento del apetito por la carne humana y el aumento considerable de la agresividad, ademas de que la transmisión principal era mediante la sangre, se encendieron las alarmas, y los gobiernos optaron por utilizar los ejércitos como medida de contención principal, ya que se dieron cuenta de que las autoridades locales o nacionales no podían hacer frente a lo que se les echaba encima.
                    </p>
                    <p class="offset-md-2 col-md-8 offset-md-2">
                        La decisión de los ejércitos fue crear un pelotón con los mejores soldados del mundo, y iniciar la operación llamada “Project Z” la cual consistía en la exterminacion de estos nuevos especímenes llamados Jambos-Z. 
                    </p>
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

        .header{
            margin-bottom:100px;
        }

    </style>  
</x-app-layout>