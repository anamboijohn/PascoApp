<x-guest-layout>
    <x-slot name='head'>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/signUp.css') }}">
    </x-slot>
    <x-auth-card>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="head">
                <h6 style="font-family:Poppins;">WANNA JOIN INVADERS?</h6>
                <h1 style="font-family:Poppins;">SIGN UP</h1>
            </div>

            <!-- Name -->
            <div class="form-outline mb-4">
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" type="text" name="name" :value="old('name')" placeholder='          Name'
                    required autofocus />
                <i class="fa fa-user fa-lg" aria-hidden="true"id="user"></i>
            </div>

            <!-- Email Address -->
            <div class="form-outline mb-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" placeholder='          www.example@gmail.com' type="email" name="email"
                    :value="old('email')" required />
                <i class="fa-solid fa-envelope" aria-hidden="true" id="email1"></i>
            </div>

            <!-- Password -->
            <div class="form-outline mb-3">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" placeholder='          Create Password' type="password" name="password" required
                    autocomplete="new-password" />
                <i class="fa fa-eye-slash fa-lg" id="pwd" onclick="myFunction(this);"></i>
            </div>

            <!-- Confirm Password -->
            <div class="form-outline mb-3">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full" placeholder='          Confirm Password'
                    type="password" name="password_confirmation" required />
            </div>

            <div class="text-center text-lg-start mt-4 pt-2">

                <x-button id="login">
                    {{ __('Register') }}
                </x-button>

                <div class="divider d-flex align-items-center my-4">
                    <p class="text-center fw-bold mx-3 mb-0" style="color: grey">Or</p>
                    <p class="small fw-bold mt-2 pt-1 mb-0" style="text-align: center">
                        <a class="link-danger" id="Login" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>
                    </p>
                </div>


            </div>
        </form>
        <script src="{{ asset('js/eye_toggler.js') }}" defer></script>
    </x-auth-card>
</x-guest-layout>
