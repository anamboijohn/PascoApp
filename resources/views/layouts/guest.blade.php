<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'PascoApp') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('dist/css/bootstrap.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('dist/js/bootstrap.js') }}"></script>
        {{ $head }}

    </head>
    <body>
        <header>
            <!-- NAVBAR -->
            <div class="navbar navbar-expand-lg navbar-light">
                <div class="navbar-brand">
                        <a href="/">
                            <x-application-logo />
                        </a>
                </div>
                <!-- NAVBAR TOGGLER -->
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="toggle">
                 <span class="navbar-toggler-icon">

                 </span>
                </button>
                <!-- NAV ITEMS -->
                <div class="collapse navbar-collapse" id="navbar">
                  <ul class="navbar-nav ms-auto">
                  <li class="nav-item ml-10">
                      <a href={{ route('explore') }} class="nav-link">&nbsp;&nbsp;&nbsp;&nbsp;Explore</a>
                  </li>
                 </ul>
              </div>
            </div>
        </header>
        <div >
            {{-- class="font-sans text-gray-900 antialiased" --}}
            {{ $slot }}
        </div>
    </body>
</html>
