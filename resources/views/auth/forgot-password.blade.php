<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <img src="{{ asset('bower_components/demo_template/argon') }}/img/brand/logo_transparent.png" alt="" class="logo_login_form">
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600 center_div_fp">
            {{ __('Forget Password') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
               

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus placeholder="Email"/>
            </div>

            <div class="flex items-center justify-end mt-4 updateButtonLogin">
                <x-button>
                    {{ __('Email Password Reset Link') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
