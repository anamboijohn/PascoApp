<!DOCTYPE html>
<html lang="en">

<head>
    <!-- META -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- LINKS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="dist/css/bootstrap.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href = {{ $head }} >
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital@1&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- SCRIPT -->
    <script src={{ asset('dist/js/bootstrap.bundle.js') }} defer></script>
    <!--TITLE -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous" defer>
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous" defer>
    </script>

    <title> Explore</title>
</head>

<body>
    <header>
        <!-- NAVBAR -->
        <div class="navbar navbar-expand-lg navbar-dark">
            <div class="navbar-brand">
                <a href="/">
                    <x-application-logo />
                </a>
            </div>
            <!-- NAVBAR TOGGLER -->
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar"
                aria-controls="toggle">
                <span class="navbar-toggler-icon">

                </span>
            </button>
            <!-- NAV ITEMS -->
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav ms-auto pl-5" >
                    <li class="nav-item">
                        <a href="/login"
                            class="nav-link links" >Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="/register"
                            class="nav-link links">Sign Up</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <main>
      {{ $slot }}
    </main>
</body>
