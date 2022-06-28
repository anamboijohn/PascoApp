<x-headers :head="asset('css/shs.css')">
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-5">
                <h5 class="text-uppercase mb-3" style="letter-spacing: 5px;font-family:poppins;color:orangered;">Programmes</h5>
                <h1 >Explore  Programmes</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="{{asset('Img/Image7.png')}}" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href={{ route('subjects', ['programme'=>'Arts']) }}>
                            <h4 class="text-white font-weight-medium">General Arts</h4>
                            <span><button class="btn btn-lg btn-outline-light">Let's Invade</button></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="{{asset('Img/Image21.jpg')}}" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href={{ route('subjects', ['programme'=>'Science']) }}>
                            <h4 class="text-white font-weight-medium">General  Science</h4>
                            <span><button class="btn btn-lg btn-outline-light">Let's Invade</button></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="{{asset('Img/Image11.jpg')}}" style="width:100%"alt="">
                        <a class="cat-overlay text-white text-decoration-none" href={{ route('subjects', ['programme'=>'Agric']) }}>
                            <h4 class="text-white font-weight-medium">Agricultural Science</h4>
                            <span><button class="btn btn-lg btn-outline-light">Let's Invade</button></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="{{asset('Img/Image18.jpg')}}" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href={{ route('subjects', ['programme'=>'Business']) }}>
                            <h4 class="text-white font-weight-medium">Business</h4>
                            <span><button class="btn btn-lg btn-outline-light">Let's Invade</button></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="{{asset('Img/Image15.jpg')}}" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href={{ route('subjects', ['programme'=>'VA']) }}>
                            <h4 class="text-white font-weight-medium">Visual Arts</h4>
                            <span><button class="btn btn-lg btn-outline-light">Let's Invade</button></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="{{asset('Img/Image20.jpg')}}" style="width:100%;" alt="" >
                        <a class="cat-overlay text-white text-decoration-none" href={{ route('subjects', ['programme'=>'HE']) }}>
                            <h4 class="text-white font-weight-medium">Home Economics</h4>
                            <span><button class="btn btn-lg btn-outline-light">Let's Invade</button></span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-headers>
