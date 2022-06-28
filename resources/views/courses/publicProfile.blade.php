<x-courses.profile.profilehead/>
<div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100" style="z-index:100">
        <div class="col col-lg-6 mb-4 mb-lg-0">
            <div class="card mb-3" style="border-radius: .5rem;">
                <div class="row g-0">
                    <div class="col-md-4 gradient-custom text-center text-black"
                        style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                        <img src="{{ asset('storage/' . $user->avatar) }}" alt=""
                            style="height: 15vh;
                        border-radius:50%;
                        width: 15vh"
                            alt="Avatar" class="img-fluid my-5" />
                        <h5>Username</h5>
                        <h6>{{ $user->userName }}</h6>
                        <br>
                        <h5>Country</h5>
                        <p>{{ $user->country }}</p>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body p-4">
                            <h6>Information</h6>
                            <hr class="mt-0 mb-4">
                            <div class="row pt-1">
                                <div class="col-6 mb-3">
                                    <h6>Email</h6>
                                    <p class="text-muted">{{ $user->email }}</p>
                                </div>
                                <div class="col-6 mb-3">
                                    <h6>Phone</h6>
                                    <p class="text-muted">{{ $user->phone }}</p>
                                </div>
                            </div>
                            <h6>Location</h6>
                            <hr class="mt-0 mb-4">
                            <div class="row pt-1">
                                <div class="col-6 mb-3">
                                    <h6>School</h6>
                                    <p class="text-muted">{{ $user->school }}</p>
                                </div>
                                <div class="col-6 mb-3">
                                    <h6>Region/State</h6>
                                    <p class="text-muted">{{ $user->region }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div id="back">
            <a href="{{ route('leaderboard') }}" class="btn btn-outline-warning" style="z-index: inherit">Return Back</a>
        </div>
</div>
<div id="cover"></div>
<style>
    #cover{
        position:absolute;
        top:0;
        background: rgba(0, 0, 0, 0.224);
        height: 150vh;
        width: 100vw;
        z-index: 98;
    }
    #back{
        position: absolute;
        z-index: 1000;
    }
    body{
        background-image: url("{{ asset('img/Image18.jpg') }}");
        background-position: center;
        background-size: 300vh;
        background-repeat: no-repeat;
    }
</style>
<x-courses.profile.profileFooter/>
