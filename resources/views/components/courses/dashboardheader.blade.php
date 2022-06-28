<header class="navbar navbar-dark sticky-top flex-md-nowrap p-0 shadow bg-light" style="height: 6vh">
    {{-- <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Invaders</a> --}}
    <button class="bg-dark navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-nav" style="display: flex; flex-direction:row; width:100vw;" id="navhead">
        <div class="nav-item mx-5">
            <li class="nav-link ml-5 text-dark">Invaders</li>
        </div>
        <div class="nav-item text-nowrap">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a class="nav-link px-3 text-dark" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                this.closest('form').submit();">
                    {{ __('Log Out') }}
                </a>
            </form>
        </div>
    </div>
</header>
