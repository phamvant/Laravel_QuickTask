<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <img src="{{ asset('bower_components/demo_template/argon') }}/img/brand/logo_transparent.png" alt="" class="logo_signup_form">
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <a href="{{ route('lang',['lang' => 'vi']) }}">VI |</a>

            <a href="{{ route('lang',['lang' => 'en' ]) }}">EN</a>
            <br>
            <br>

            <!-- Name -->
            <div>
                <x-label for="username" :value="__('Username')" class="label-bold"/>

                <x-input id="username" class="block mt-1 w-full input_signup" type="text" name="username" :value="old('first_name')" required autofocus placeholder="Username"/>
            </div>
            <br>

            <!-- FirstName -->
            <div>
                <x-label for="first_name" :value="__('First name')" class="label-bold"/>

                <x-input id="first_name" class="block mt-1 w-full input_signup" type="text" name="first_name" :value="old('first_name')" required autofocus placeholder="First name"/>
            </div>
            <br>

            <!-- LastName -->
            <div>
                <x-label for="last_name" :value="__('Last name')" class="label-bold"/>

                <x-input id="last_name" class="block mt-1 w-full input_signup" type="text" name="last_name" :value="old('last_name')" required autofocus placeholder="Last name"/>
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" class="label-bold"/>

                <x-input id="email" class="block mt-1 w-full input_signup" type="email" name="email" :value="old('email')" required placeholder="Email"/>
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" class="label-bold"/>

                <x-input id="password" class="block mt-1 w-full input_signup"
                                type="password"
                                name="password"
                                required autocomplete="new-password" 
                                placeholder="Password"
                                style
                                />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" class="label-bold"/>

                <x-input id="password_confirmation" class="block mt-1 w-full input_signup"
                                type="password"
                                name="password_confirmation" required 
                                placeholder="Re-enter password"
                                />
            </div>

            <div class="flex items-center justify-end mt-4 updateLoginDiv">
                

                <x-button class="ml-4 updateButtonLogin">
                    {{ __('Register') }}
                </x-button>
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Login?') }}
                </a>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
