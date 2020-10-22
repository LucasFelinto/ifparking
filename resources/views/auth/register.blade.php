<link rel="stylesheet" href={{ asset('css/typography.css') }}>

<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <h1 class="primary-title">Criar conta</h1>
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label value="{{ __('Nome') }}" />
                <x-jet-input class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label value="{{ __('Email') }}" />
                <x-jet-input class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div>
                <x-jet-label value="{{ __('Cpf') }}" />
                <x-jet-input class="block mt-1 w-full" maxlength="11" type="text" name="cpf" :value="old('cpf')" required autofocus autocomplete="cpf" />
            </div>

            <div>
                <x-jet-label value="{{ __('Telefone') }}" />
                <x-jet-input class="block mt-1 w-full" type="text" name="telephone" :value="old('telephone')" autocomplete="telephone" />
            </div>

            <div>
                <x-jet-label value="{{ __('Registro') }}" />
                <x-jet-input class="block mt-1 w-full" type="text" name="registration" :value="old('registration')" autocomplete="registration" />
            </div>

            <div class="mt-4">
                <x-jet-label value="{{ __('Senha') }}" />
                <x-jet-input class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label value="{{ __('Confirmar senha') }}" />
                <x-jet-input class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Já está registrado?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
