<x-courses.profile.profilehead/>
<body>
    <section class="vh-50" style="background-color: #f4f5f7;">
        <center>
            <h2>Profile</h2> <a href="{{ route('dashboard') }}" class="btn btn-light"><i class="fa fa-backward fa-lg"
                    aria-hidden="true"> </i> <i class="fa fa-dashboard fa-lg" aria-hidden="true"> Dashboard</i></a>
        </center>
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-lg-6 mb-4 mb-lg-0">
                    <div class="card mb-3" style="border-radius: .5rem;">
                        <div class="row g-0">
                            <div class="col-md-4 gradient-custom text-center text-black"
                                style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                                <img src="{{ 'storage/' . Auth::user()->avatar }}" alt=""
                                    style="height: 15vh;
                                border-radius:50%;
                                width: 15vh"
                                    alt="Avatar" class="img-fluid my-5" />
                                <h5>Username</h5>
                                <h6>{{ Auth::user()->userName }}</h6>
                                <x-modalbutton target="editUserName" />

                                <x-modal modalId="editUserName" title="Edit UserName" type="UserName" id="UserName"
                                    labelId='UserName' label="UserName" :action="route('userNameEdit', ['user' => Auth::user()->id])" name='userName' />
                                <br>
                                <h5>Country</h5>
                                <p>{{ Auth::user()->country }}</p>
                                <x-modalbutton target="editCountry" />

                                <x-modal modalId="editCountry" title="Edit Country" type="Country" id="country"
                                    labelId='country' label="Country" :action="route('countryEdit', ['user' => Auth::user()->id])" name='country' />
                            </div>
                            <div class="col-md-8">
                                <div class="card-body p-4">
                                    <h6>Information</h6>
                                    <hr class="mt-0 mb-4">
                                    <div class="row pt-1">
                                        <div class="col-6 mb-3">
                                            <h6>Email</h6>
                                            <p class="text-muted">{{ Auth::user()->email }}</p>
                                            <!-- Button trigger modal -->
                                            <x-modalbutton target="editEmail" />

                                            <x-modal modalId="editEmail" title="Edit Email" type="email"
                                                id="email" labelId='email' label="Email" :action="route('emailEdit', ['user' => Auth::user()->id])"
                                                name='email' />
                                        </div>
                                        <div class="col-6 mb-3">
                                            <h6>Phone</h6>
                                            <p class="text-muted">{{ Auth::user()->phone }}</p>
                                            <x-modalbutton target="editPhone" />

                                            <x-modal modalId="editPhone" title="Edit Phone" type="tel"
                                                id="tel" labelId='tel' label="Tel" :action="route('phoneEdit', ['user' => Auth::user()->id])"
                                                name='tel' />
                                        </div>
                                    </div>
                                    <h6>Location</h6>
                                    <hr class="mt-0 mb-4">
                                    <div class="row pt-1">
                                        <div class="col-6 mb-3">
                                            <h6>School</h6>
                                            <p class="text-muted">{{ Auth::user()->school }}</p>

                                            <x-modalbutton target="editSchool" />

                                            <x-modal modalId="editSchool" title="Edit School" type="text"
                                                id="school" labelId='school' label="School" :action="route('schoolEdit', ['user' => Auth::user()->id])"
                                                name='school' />
                                        </div>
                                        <div class="col-6 mb-3">
                                            <h6>Region/State</h6>
                                            <p class="text-muted">{{ Auth::user()->region }}</p>

                                            <x-modalbutton target="editRegion" />

                                            <x-modal modalId="editRegion" title="Edit Region/State" type="text"
                                                id="region" labelId='region' label="Region/State" :action="route('regionEdit', ['user' => Auth::user()->id])"
                                                name='region' />
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-start">
                                        <a href="#!"><i class="fa fa-facebook-f fa-lg me-3"></i></a>
                                        <a href="#!"><i class="fa fa-twitter fa-lg me-3"></i></a>
                                        <a href="#!"><i class="fa fa-instagram fa-lg"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Alerts -->
        <button type="button" id="message" class="btn btn-danger m-1" style="" hidden>show alert</button>
        @if (session('status'))
            <div id="error">
                <x-alert>
                    {{ session('status') }}
                </x-alert>
            </div>
        @endif
    </section>
    <section>
        <center>
            <h4>Change profile image:</h4>
        </center>
        <div class="row" style="display: flex; justify-content: center">
            <div class="col-sm-3" style="height: 15vh">
                <img src="{{ 'storage/' . Auth::user()->avatar }}" alt="No Profile Image"
                    style="height: 100%; background:url('img/image1.jpg');
                                                                               border-radius:50%;
                                                                               width: 15vh" />
            </div>
            <div class="col-sm-3">
                <form action="{{ route('store.image') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-outline mb-4">
                        Upload profile image:
                        <input type="file" id="avatar" name="avatar" class="form-control" />
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary">Upload</button>
                    </div>
                </form>
    </section>
    </div>
    </div>
    <x-courses.profile.profileFooter/>
</body>

</html>
