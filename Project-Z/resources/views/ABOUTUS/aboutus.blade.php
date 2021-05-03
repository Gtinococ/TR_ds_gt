<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <a class="border-b-2 border-indigo-400">{{ __('ABOUT US') }}</a>
        </h2>
    </x-slot>
    <header>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </header>
    <div class="row max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="fondo col-md-12 col-xs-12 bg-white overflow-hidden sm:rounded-lg">
            <div class="fondo p-6 bg-white border-gray-200">
                <div class="admin-box">
                    
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
    </style>
</x-app-layout>
