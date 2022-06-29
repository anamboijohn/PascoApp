<x-guest-layout>
    <x-slot name='head'>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/Invader.css') }}">
    </x-slot>
    <x-auth-card>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="head" style="font-size:12px">
                Log In & INVADE!
            </div>


            <!-- Email Address -->
            <div class="form-outline mb-4" style="position: relative">
                <x-label for="email" :value="__('Email')" />

                <x-input placeholder='email' id="email" class="block mt-1 w-full" type="email" name="email"
                    :value="old('email')" required autofocus />
                <i class="fa-solid fa-envelope fa-lg" aria-hidden="true"id="user"></i>
            </div>

            <!-- Password -->
            <div class="form-outline mb-3" style="position: relative">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" type="password" name="password" required autocomplete="current-password"
                    placeholder="      Password" />
                <i class="fa fa-eye-slash fa-lg" id="pwd" onclick="myFunction(this);"></i>
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox"
                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 mr-6"
                        name="remember">
                    <span class="ml-2 text-md-start text-gray-600">{{ __('Remember me') }}</span>
                </label>
                @if (Route::has('password.request'))
                    <a class="link-danger" id="forgot" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>


            <div class="flex items-center justify-end mt-4">
                <x-button id="login">
                    {{ __('Log in') }}
                </x-button>

            </div>
            <p class="small fw-bold mt-2 pt-1 mb-0" style="text-align:center;">Don't have an account?
                <a href="/register" class="link-danger" id="Sign">Sign Up</a>
            </p>

            <div class="divider d-flex align-items-center my-4">
                <p class="text-center fw-bold mx-3 mb-0" style="color:grey;">Or</p>
            </div>

            <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start"
                style="transform:translateX(3vw);">
                <p class="lead fw-normal mb-0 me-3" style="font-family:Poppins;">Sign in with</p>
                <button type="button" class="btn btn btn-floating mx-1">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                </button>

                <button type="button" class="btn btn btn-floating mx-1">
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </button>

                <button type="button" class="btn btn btn-floating mx-1">
                    <a href="#"><i class="fab fa-google"></i></a>
                </button>
            </div>
        </form>
    </x-auth-card>
    <script src="{{ asset('js/eye_toggler.js') }}" defer></script>
</x-guest-layout>
