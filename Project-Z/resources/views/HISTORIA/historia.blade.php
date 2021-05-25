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

        <div class="col-md-12 col-xs-12 overflow-hidden sm:rounded-lg">

            <div class="p-6 border-gray-200">

                <div class="admin-box">

                    <div class="logro col-md-12">
                        <div class="row">
                            <h3 class="name offset-md-5 col-md-4 offset-1 col-11">Project-Z</h3>
                        </div>
                        
                        <div class="description">
                            <p class="col-md-12">
                                Project Z esta basado en el año 2023 después de una pandemia mundial de Virus Necroa, la cual después de todas sus variantes muto a un variante zombi que inicio su propagación en España, mas concretamente en Vilanova i la Geltru, donde se detectaron los primeros casos de esta variante.
                            </p>
                            <p class="col-md-12">
                                En principio esta variante fue considerada como una simple mutación que solo afectaba a una muy baja cantidad de la población, pero al ver que sus síntomas eran el aumento del apetito por la carne humana y el aumento considerable de la agresividad, ademas de que la transmisión principal era mediante la sangre, se encendieron las alarmas, y los gobiernos optaron por utilizar los ejércitos como medida de contención principal, ya que se dieron cuenta de que las autoridades locales o nacionales no podían hacer frente a lo que se les echaba encima.
                            </p>
                            <p class="col-md-12">
                                La decisión de los ejércitos fue crear un pelotón con los mejores soldados del mundo, y iniciar la operación llamada “Project Z” la cual consistía en la exterminacion de estos nuevos especímenes llamados Jambos-Z. 
                            </p>                    
                        </div>

                    </div>
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

        .caja{
            background-color: transparent !important;
        }

        .header{
            margin-bottom:100px;
        }

        .logro {
            background-color: rgba(87,1,91,0.7);
            border: 2px solid white;
            padding: 10px 20px 20px 20px;
            margin-bottom: 30px;
            box-shadow: 5px 5px 5px #404040;

        }

        .titulo{
            font-weight: bold;
            color: white !important;
            margin-top:30px; 
        }

        .name{
            font-weight: bold;
            color: white !important;
        }

        .description{
            background-color: white;
            padding-top: 10px;
            padding-bottom:10px;
            margin: 0px 40px 20px 40px;
            color:white;
            background-color: rgba(135, 135, 135, 0.5) !important; 
        }

        @media (max-width: 760px) and (min-width: 760px){
            .footer{
                margin-top:200px;
            }
        }

        @media (max-width: 1025px) and (min-width: 765px){
            .footer{
                margin-top:535px;
            }
        }

        @media (max-width: 1800px) and (min-width: 1400px){
            .footer{
                margin-top:264px;
            }
        }

        @media (max-width: 2600px) and (min-width: 1800px){
            .footer{
                margin-top:320px;            
            }
        }

        
        @media (max-width: 1440px) and (min-width: 1024px){
            .footer{
                margin-top: 200px;
            }
        }

        @media (max-width: 768px) and (min-width: 319px){
            .description{
                margin: 10px 0px 10px 0px;
                font-size: 14px;
            }


            .name{
                margin-left: 0px;
                margin-top:5px;
            }
        }

        @media (max-width: 280px){
            .description{
                margin: 10px 0px 10px 0px;
                font-size: 10px;
            }


            .name{
                margin-left: 0px;
                margin-top:5px;
                font-size: 20px;
            }
        }

    </style>  
</x-app-layout>