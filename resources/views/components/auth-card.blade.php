{{-- <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100"> --}}
<div>

    {{-- <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg"> --}}
    {{-- <div>
        {{ $slot }}
    </div> --}}

    <main>
        <section class="vh-100">
            <div class="container-fluid h-custom">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-md-9 col-lg-6 col-xl-5" id="banner">
                        <!-- <img src="Image2.jpg" id="img"
                   alt="Sample image"> -->
                    </div>
                    <div class="col-md-12 col-lg-6 col-xl-4 offset-xl-1">
                        {{ $slot }}
                    </div>
                </div>
            </div>
            <div
                class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg"id="footer">
                <!-- Copyright -->
                <div class="mb-3 mb-md-0 text-black pt-5" id="copyright">
                    Copyright ©Invaders 2022. All rights reserved.
                </div>
                <!-- Right -->
            </div>
        </section>
    </main>
</div>
