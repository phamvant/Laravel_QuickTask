<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <!-- <x-application-logo class="w-20 h-20 fill-current text-gray-500" /> -->
                <!-- <img src="" alt=""> -->
                <img src="{{ asset('bower_components/demo_template/argon') }}/img/brand/logo_transparent.png" alt="" class="logo_login_form">
            </a>
        </x-slot>
        <a href="{{ route('lang',['lang' => 'vi']) }}">VI |</a>

        <a href="{{ route('lang',['lang' => 'en' ]) }}">EN</a>
        <br>
        <br>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email Address')" class="label-bold" />

                <x-input id="email" class="block mt-1 w-full input-margin-more" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')"  class="label-bold"/>

                <x-input id="password" class="block mt-1 w-full input-margin-more"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember" >
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4 update_more_loginbutton updateLoginDiv">
                

                <x-button class="ml-3 updateButtonLogin">
                    {{ __('Log in') }}
                </x-button>
                
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 fgpw" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
