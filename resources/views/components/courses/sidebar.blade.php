<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse"
style="background: #e3dedee9; color:white; font-size: 1.5rem">
<div class="position-sticky pt-3">
    <ul class="nav flex-column">
        <li style="height:140px">
            <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="{{ route('profile') }}"
                style="height: 50px; z-index:5;">
                <div class="row container">
                    <div class="col-4 ml-1">
                        <img src="{{ '/storage/' . Auth::user()->avatar }}"
                            style="height: 50px; border-radius:50%; width: 50px; z-index:99"
                            alt="No Profile Image" class="img-fluid my-5" />
                    </div>
                    <div class="col mt-5 ml-0">
                        Welcome Back <br>{{ Auth::user()->userName }}
                    </div>
                </div>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href={{ route('levels') }}>
                <i class="fa fa-address-book" aria-hidden="true"></i>
                Level
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('pasco.showAll') }}">
                <i class="fa fa-book" aria-hidden="true"></i>
                Pasco

            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('record.showAll', ['user' => Auth::user()->id]) }}">
                <i class="fa fa-archive" aria-hidden="true"> Reports</i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('profile') }}">
                <i class="fa fa-user" aria-hidden="true"> Profile</i>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('leaderboard') }}" class="nav-link">
                <i class="fa fa-trophy" aria-hidden="true"></i>  Leaderboard
            </a>
        </li>
    </ul>
</div>
</nav>
