<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/gtinoco/curs2021/tr_ds_gt/TR_ds_gt/Project-Z/public"> 
                <img style="height:100px;width:100px;" src="{{URL::asset('images/logo_Project-Z.png')}}">
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <form method="POST" action="{{ url('juego/update-logro/'.$logro->id) }}">
            @csrf
            <input type="hidden" name="id" value="{{$logro->id}}"> 
            <div>
                <x-label for="name" :value="__('Nombre')" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{$logro->name}}" required autofocus />
            </div>

                        
            <div class="mt-4">
                <x-label for="description" :value="__('Definición del logro')" />
                <x-input id="description" class="block mt-1 w-full" type="text" name="description" value="{{$logro->description}}" required />
            </div>

            <div class="mt-4">
                <x-label for="dificulty" :value="__('Dificultad del logro')" />
                <x-input id="dificulty" class="block mt-1 w-full" type="number" name="dificulty" min="1" max="3" value="{{$logro->dificulty}}" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button style="background: #9D00B3" class="ml-4">
                    {{ __('Editar') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
