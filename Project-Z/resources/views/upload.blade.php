<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/gtinoco/curs2021/tr_ds_gt/TR_ds_gt/Project-Z/public"> 
                <img style="height:100px;width:100px;" src="{{URL::asset('images/logo_Project-Z.png')}}" >
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ url('perfil/image/'.Auth::user()->id) }}" enctype="multipart/form-data">
            @csrf

            <div class="mt-4">
                <x-label for="file" :value="__('Foto de perfi')" />
                <x-input id="file" class="block mt-1 w-full" type="file" name="file"/>
            </div>
            <br>
            <x-button style="background: #9D00B3" class="">
                    {{ __('Subir imagen') }}
            </x-button>
        </form>
    </x-auth-card>
</x-guest-layout>
