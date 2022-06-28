<x-guest-layout>
    <x-slot name='head'>
        <link rel="stylesheet" href="{{ asset('css/password_rest.css') }}">
    </x-slot>
    <x-slot name="logo">
        <a href="/">
            <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
        </a>
    </x-slot>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <div class="container-fluid">
        <div class="row">

            <b><div class="mb-4 h5" style="margin-left: auto; max-width: 50vw;">
                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
            </div></b>
            <div class="col-md-5 col-lg-5 col-xl-5">
                <form method="POST" action="{{ route('password.email') }}" id="form">
                    @csrf
                    <!-- Email input -->
                    <div class="form-outline mb-2 text-light fs-4">
                        <x-label for="email" :value="__('Email')" />
                            <input
                            type="email"
                            name="email"
                            id="email"
                            class="form-control form-control-lg text-sm-center"
                            :value="old('email')" required autofocus
                            placeholder="   invadetheinvaders@gmail.com"
                          />
                          <i
                            class="fa fa-envelope fa-lg text-dark"
                            aria-hidden="true"
                            id="mail"
                          ></i>
                    </div>
                    <!-- Checkbox -->
                    <div class="form-check" id="btn">
                        <div class="flex items-center justify-end mt-4">
                            <a class="btn btn-lg btn-light" href="{{ route('login') }}">
                                <i class="fa fa-backward" aria-hidden="true"></i>
                                Go Back
                            </a>
                            <x-button class="btn btn-lg btn-outline-light">
                                {{ __('Email Password Reset Link') }}
                            </x-button>
                        </div>

                    </div>
                </form>
            </div>
        </div>

    </div>
</x-guest-layout>


{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Email Password Reset Link') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}
