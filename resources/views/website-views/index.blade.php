@extends('layouts.website-layout')

@section('styles')
    <link rel="stylesheet" href="assets/css/websiteCss/home.css">
@endsection

@section('title', 'Home')

@section('body')
    <nav class="navbar navbar-expand-lg navbar-style">
        <div class="container-fluid">
            <a class="navbar-brand ms-5" href="#">
                <img src="assets/images/websiteImg/meli-white-vector.png" alt="Logo" width="100"
                    class="d-inline-block align-text-top">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex justify-content-center nav-items">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#ff">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#ff">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#ff">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#ff">Home</a>
                    </li>
                </ul>
                <button class="btn btn-light login-btn text-center me-2" type="button"><i
                        class="bi bi-box-arrow-in-right lgin-icon"></i> Login</button>
                <button class="btn btn-light text-center me-5 lang-btn" type="button">Ar</button>
            </div>
        </div>
    </nav>

    {{-- Jumbatron --}}
    <section>
        <div class="container-fluid p-5 grid-background">
            <div class="container p-5">
                <div class="container">
                    <div class="row">
                        <div class="col-8">
                            <h1 class="hero-text">Discover <span class="red-span">MELI's</span> Comprehensive <span
                                    class="red-span">Training Programs</span></h1>
                        </div>
                        <div class="col m-auto d-flex justify-content-end">
                            <button class="btn btn-light discover-btn text-center me-2" type="button">Discover Now <i
                                    class="bi bi-box-arrow-up-right lgin-icon"></i></button>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-5">
                    <img src="assets/images/websiteImg/jumbtronimg.png" alt="" class="m-auto img-fluid">
                </div>
            </div>
        </div>
    </section>

    {{-- Our Partners --}}
    <section>
        <div class="container text-center py-5 py-xl-6 px-5">
            <div class="hr-line mb-3"></div>
            <div class="row">
                <div class="col-md-5">
                    <p class="partner-text">Our Trusted Partners and our proud investors around the globe</p>
                </div>
                <div class="col-md p-1">
                    <img src="assets/images/websiteImg/partner-IOSCM.png" alt="" class="img-fluid m-auto">
                </div>
                <div class="col-md p-1">
                    <img src="assets/images/websiteImg/partner-FHM.png" alt="" class="img-fluid m-auto">
                </div>
                <div class="col-md p-1">
                    <img src="assets/images/websiteImg/partner-JLONTBS.png" alt="" class="img-fluid m-auto">
                </div>
                <div class="col-md p-1">
                    <img src="assets/images/websiteImg/partner-HR.png" alt="" class="img-fluid m-auto">
                </div>
            </div>
        </div>
    </section>

    {{-- MELI Featurs --}}
    <section>
        <div class="container text-center py-5 py-xl-6 px-5">
            <div class="row m-auto">
                <div class="col-md m-1">
                    <div class="card rounded-0" style="max-width: 350px;">
                        <div class="row g-0">
                            <div class="col-md-3 p-1">
                                <div class="m-auto feat-icon-white-red d-flex justify-content-center align-items-center"><i
                                        class="bi bi-globe"></i></div>
                            </div>
                            <div class="col-md p-2">
                                <div class="card-body">
                                    <h5 class="card-title-css m-auto">National Programs</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md m-1">
                    <div class="card rounded-0" style="max-width: 350px;">
                        <div class="row g-0">
                            <div class="col-md-3 p-1">
                                <div class="m-auto feat-icon-red-blue d-flex justify-content-center align-items-center"><i
                                        class="bi bi-clipboard2"></i></div>
                            </div>
                            <div class="col-md p-2">
                                <div class="card-body">
                                    <h5 class="card-title-css m-auto">International Programs</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md m-1">
                    <div class="card rounded-0" style="max-width: 350px;">
                        <div class="row g-0">
                            <div class="col-md-3 p-1">
                                <div class="m-auto feat-icon-white-red d-flex justify-content-center align-items-center"><i
                                        class="bi bi-currency-exchange"></i></div>
                            </div>
                            <div class="col-md p-2">
                                <div class="card-body">
                                    <h5 class="card-title-css m-auto">Funded Programs</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row m-auto mt-5">
                <div class="col-md m-1">
                    <div class="card rounded-0" style="max-width: 350px;">
                        <div class="row g-0">
                            <div class="col-md-3 p-1">
                                <div class="m-auto feat-icon-red-blue d-flex justify-content-center align-items-center"><i
                                        class="bi bi-headset-vr"></i></div>
                            </div>
                            <div class="col-md p-2">
                                <div class="card-body">
                                    <h5 class="card-title-css m-auto">Virtual Reality</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md m-1">
                    <div class="card rounded-0" style="max-width: 350px;">
                        <div class="row g-0">
                            <div class="col-md-3 p-1">
                                <div class="m-auto feat-icon-white-red d-flex justify-content-center align-items-center"><i
                                        class="bi bi-person-workspace"></i></div>
                            </div>
                            <div class="col-md p-2">
                                <div class="card-body">
                                    <h5 class="card-title-css m-auto">Online Programs</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md m-1">
                    <div class="card rounded-0" style="max-width: 350px;">
                        <div class="row g-0">
                            <div class="col-md-3 p-1">
                                <div class="m-auto feat-icon-red-blue d-flex justify-content-center align-items-center"><i
                                        class="bi bi-calendar3"></i></div>
                            </div>
                            <div class="col-md p-2">
                                <div class="card-body">
                                    <h5 class="card-title-css m-auto">Training Calendar</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <script>
        document.addEventListener('click', function(event) {
            // If the target of the event is not inside '.navbar-collapse'
            if (!event.target.closest('.navbar-collapse')) {
                // Collapse all '.navbar-collapse' elements
                var navbarCollapses = document.querySelectorAll('.navbar-collapse');
                navbarCollapses.forEach(function(navbarCollapse) {
                    navbarCollapse.classList.remove('show');
                });
            }
        });
    </script>

@endsection
