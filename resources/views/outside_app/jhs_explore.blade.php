<x-headers :head="asset('css/jhs.css')">
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-5">
                <h5 class="text text-uppercase mb-3" style="letter-spacing: 5px;font-family:poppins;color:orangered;">
                    Subjects</h5>
                <h1>Explore Subjects</h1>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="{{ asset('img/Image16.jpg') }}" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href={{ route('pascos', ['subject'=>'Math']) }}>
                            <h4 class="text-white font-weight-medium">Mathematics</h4>
                            <span><button class="btn btn-lg btn-outline-light">Let's Invade</button></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="{{ asset('img/Image21.jpg') }}" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href={{ route('pascos', ['subject'=>'IS']) }}>
                            <h4 class="text-white font-weight-medium">Intergrated Science</h4>
                            <span><button class="btn btn-lg btn-outline-light">Let's Invade</button></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="{{ asset('img/course-2.jpg') }}" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href={{ route('pascos', ['subject'=>'Eng']) }}>
                            <h4 class="text-white font-weight-medium">English</h4>
                            <span><button class="btn btn-lg btn-outline-light">Let's Invade</button></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="{{ asset('img/Image13.jpg') }}" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href={{ route('pascos', ['subject'=>'Soc']) }}>
                            <h4 class="text-white font-weight-medium">Social Studies</h4>
                            <span><button class="btn btn-lg btn-outline-light">Let's Invade</button></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid"  src="{{ asset('img/cat-1.jpg') }}" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href={{ route('pascos', ['subject'=>'ICT']) }}>
                            <h4 class="text-white font-weight-medium">IT</h4>
                            <span><button class="btn btn-lg btn-outline-light">Let's Invade</button></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="{{ asset('img/Image20.jpg') }}" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href={{ route('pascos', ['subject'=>'BDT']) }}>
                            <h4 class="text-white font-weight-medium">Home Economics</h4>
                            <span><button class="btn btn-lg btn-outline-light">Let's Invade</button></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="{{ asset('img/Image14.jpg') }}" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href={{ route('pascos', ['subject'=>'BDT']) }}>
                            <h4 class="text-white font-weight-medium">Techinal Drawing</h4>
                            <span><button class="btn btn-lg btn-outline-light">Let's Invade</button></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="{{ asset('img/Image19.jpg') }}" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href={{ route('pascos', ['subject'=>'Fre']) }}>
                            <h4 class="text-white font-weight-medium">French</h4>
                            <span><button class="btn btn-lg btn-outline-light">Let's Invade</button></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-headers>
