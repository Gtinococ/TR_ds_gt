<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/gtinoco/curs2021/tr_ds_gt/TR_ds_gt/Project-Z/public"> 
                <img style="height:100px;width:100px;" src="{{URL::asset('images/logo_Project-Z.png')}}">
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <form method="POST" action="{{ url('noticias/new-noticia/') }}">
            @csrf
            <div>
                <x-label for="name" :value="__('Titulo')" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name"  required autofocus />
            </div>

                        
            <div class="mt-4">
                <x-label for="description" :value="__('Descripción')" />
                <textarea id="description" class="block mt-1 w-full" type="text" name="description" rows="10"></textarea>
            </div>

            <div class="mt-4">
                <x-label for="writer" :value="__('Escrito por')" />
                <x-input id="writer" class="block mt-1 w-full" type="text" name="writer"  required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button style="background: #9D00B3" class="ml-4">
                    {{ __('Añadir') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
