<x-guest-layout>
    <x-slot name='head'>
        <link rel="stylesheet" href="{{ asset('css/password_rest.css') }}">
    </x-slot>
    <x-slot name="logo">
        <a href="/">
            <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
        </a>
    </x-slot>

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5 col-lg-5 col-xl-5" id="wrapper">
                <form method="POST" action="{{ route('password.update') }}" id="form">
                    @csrf

                    <!-- Password Reset Token -->
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

                    <!-- Email input -->
                    <div class="form-outline mb-2 text-light fs-4">
                        <x-label for="email" :value="__('Email')" />
                        <x-input id="email" class="text-center" type="email" name="email" :value="old('email', $request->email)"
                            required autofocus />
                    </div>

                    <!-- Password -->
                    <div class="form-outline mb-2">
                        <x-label for="password" :value="__('Password')" />

                        <x-input id="password" class="text-center" type="password" name="password" required />
                    </div>


                    <!-- Confirm Password -->
                    <div>
                        <x-label for="password_confirmation" :value="__('Confirm Password')" />

                        <x-input id="password_confirmation" class="text-center" type="password"
                            name="password_confirmation" required />
                    </div>

                    <!--Submit -->
                    <div class="form-check" id="btn">
                        <x-button class="btn btn-lg btn-outline-primary" style="margin-top:2rem">
                            {{ __('Reset Password') }}
                        </x-button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- <form method="POST" action="{{ route('password.update') }}">
            @csrf
/////////////////////////////////////////////////////////////////////////////////////////////////
            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">
/////////////////////////////////////////////////////////////////////////////////////////////////
            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />
            </div>
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required />
            </div>
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                    type="password"
                                    name="password_confirmation" required />
            </div>
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Reset Password') }}
                </x-button>
            </div>
        </form> --}}
</x-guest-layout>
