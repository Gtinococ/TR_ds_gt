<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/gtinoco/curs2021/tr_ds_gt/TR_ds_gt/Project-Z/public"> 
                <img style="height:100px;width:100px;" src="{{URL::asset('images/logo_Project-Z.png')}}">
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <form method="POST" action="{{ url('perfil/update/'.$user->id) }}">
            @csrf
            <input type="hidden" name="id" value="{{$user->id}}"> 
            <div>
                <x-label for="name" :value="__('Nombre')" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{$user->name}}" required autofocus />
            </div>

                        
            <div class="mt-4">
                <x-label for="email" :value="__('Correo electrónico')" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{$user->email}}" required />
            </div>

            <div class="mt-4">
                <x-label for="password" :value="__('Contraseña')" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirmar contraseña')" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button style="background: #9D00B3" class="ml-4">
                    {{ __('Editar') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
