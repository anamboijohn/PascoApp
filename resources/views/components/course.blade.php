<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Invaders PascoApp</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"/>




    <!-- Bootstrap core CSS -->
    <link href="{{ asset('dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{ asset('dist/js/bootstrap.min.js') }}"></script>

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>

</head>

<body>

    <div class="container py-3" style="background-color: #f2f1ef; z-index: 99">
        <header>
            <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom  container-fluid" style="background: #eae9e6">
                <a href="{{ route('profile') }}" class="d-flex align-items-center text-dark text-decoration-none">
                    <img src="{{'/storage/'. Auth::user()->avatar }}"
                    style="height: 50px; border-radius:50%; width: 50px; z-index:99; background:url('img/image1.jpg');" alt="Avatar" class="img-fluid my-5"  />
                    <span class="fs-4">{{ Auth::user()->name }}</span>
                </a>

                <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
                    <a class="me-3 py-2 text-dark text-decoration-none" href="{{ route('dashboard') }}">Dashboard</a>
                    <a class="me-3 py-2 text-dark text-decoration-none" href="{{ route('pasco.showAll') }}">My Courses</a>
                    <a class="py-2 text-dark text-decoration-none" href="{{ route('record.showAll', ['user'=>Auth::user()->id]) }}">My Progress</a>
                </nav>
            </div>

            <div class="p-3 pb-md-4 mx-auto text-center">
                <h1 class="display-4 fw-normal">{{ $title }}</h1>
                <p class="fs-5 text-muted">{{ $message }}</p>
            </div>
        </header>

        <main>
            <div class="row mb-3">
                   {{ $slot }}
            </div>
        </main>

    </div>
</body>

</html>

