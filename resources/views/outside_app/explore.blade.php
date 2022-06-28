<x-headers :head="asset('css/headers.css')">
    <div class="row">
        <div class="col-md-12 col-lg-6 col-xl-4 offset-xl-1">
            <div class="heading">
                <p>Choose Your <span style=" color:orangered;">
                        Path</span></p>
            </div>
        </div>
        <div class="col-md-12 col-lg-6 col-xl-4 offset-xl-1">
            <div class="button row ml-5 d-flex justify-content-center">

                <div class="first col-md-5">
                    <a href={{ route('jhs') }}>
                        <button class="btn btn-lg btn-outline-light mr-5" id="first">
                            <h3>
                                Junior High School
                            </h3>
                            <p>
                                Candidates who choose this path are quizzed and exposed to bece past questions.<br>
                                This covers all aspect of reading and calculation based subjects.<br>
                            </p>
                        </button>
                    </a>
                </div>
                <div class="second col-md-5">
                    <a href={{ route('shs') }}>
                        <button class="btn btn-lg btn-outline-light mr-5" id="second">
                            <h3>
                                Senior High School
                            </h3>
                            <p>
                                Candidates who choose this path are quizzed and exposed to wassce past questions.<br>
                                This covers each of the 6 courses offered in Senior High<br>
                            </p>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-headers>
