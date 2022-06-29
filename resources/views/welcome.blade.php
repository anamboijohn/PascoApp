<!DOCTYPE html>
<html lang="en">
    <!-- HEAD -->
<head>
    <!-- META -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- LINKS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="{{ asset('css/Invaders.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital@1&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="{{ asset('dist/css/bootstrap.css') }}">
    <script src="{{ asset('dist/js/bootstrap.js') }}"></script>
    <!--TITLE -->
    <title>Invaders</title>
</head>
<!-- BODY -->
<body>
          <!-- HEADER -->
          <header>
            <!-- NAVBAR -->
            <div class="navbar navbar-expand-lg navbar-dark">
              <div class="navbar-brand">
                <span style="color: orangered; font-size: 4rem">I</span>nvaders
              </div>
              <!-- NAVBAR TOGGLER -->
              <button
                type="button"
                class="navbar-toggler"
                data-bs-toggle="collapse"
                data-bs-target="#navbar"
                aria-controls="toggle"
              >
                <span class="navbar-toggler-icon"> </span>
              </button>
              <!-- NAV ITEMS -->
              <div class="collapse navbar-collapse" id="navbar" style="font-size: 2rem">
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                    <a
                      href={{ route('explore') }}
                      class="nav-link"
                      >Explore</a
                    >
                  </li>
                  <li class="nav-item">
                    <a
                      href={{ route('register') }}
                      class="nav-link"
                      >Join Us</a
                    >
                  </li>
                </ul>
              </div>
            </div>
          </header>
          <div class="container">
            <div class="row">
              <div class="col-12 col-s-12">
                <!-- MAIN -->
                <main>
                  <article>
                    <h1>Invaders</h1>
                    <p>
                      Invaders is a site which provides you up to date past
                      questions.<br />
                      We provide candidates with past question for both Junior High
                      and Senior High School,<br />
                      With interesting and interactive sessions which track your
                      progress.<br />
                      Now
                      <span style="color: orangered; font-style: italic"
                        >let's Invade.</span
                      >
                    </p>
                  </article>
                  <div class="button">
                    <a
                      href={{ route('login') }}
                    >
                      <button class="btn btn-lg btn-outline-light">Login</button>
                    </a>
                    <a
                      href={{ route('register') }}
                    >
                      <button class="btn btn-lg btn-outline-light">Sign Up</button>
                    </a>
                  </div>
                </main>
              </div>
            </div>
          </div>
          <!-- FOOTER -->
          <div class="footer">
            <div class="container">
              <footer>
                <article>
                  <p>Copyright © 2022 Invaders All rights reserved</p>
                  <ul>
                    <li>
                      <a href="#">Terms of use</a>
                    </li>
                    <li>
                      <a href="#">Privacy Policy</a>
                    </li>
                    <li>
                      <a href="#">Cookie Notice</a>
                    </li>
                  </ul>
                </article>
              </footer>
            </div>
          </div>
</body>
</html>
