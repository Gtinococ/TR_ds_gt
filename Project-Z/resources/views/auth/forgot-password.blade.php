<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/gtinoco/curs2021/tr_ds_gt/TR_ds_gt/Project-Z/public">
                <img style="height:100px;width:100px;" src="images/logo_Project-Z.png" >
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Si has olvidado tu contraseña no te preocupes, introduce tu correo electronico y se te enviará un link donde podrás restablecer tu contraseña.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Correo electrónico')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button style="background: #9D00B3">
                    {{ __('Restaura tu contraseña') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
