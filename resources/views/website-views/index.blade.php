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
                <a href="{{ url('/login') }}">
                <button class="btn btn-light login-btn text-center me-2" type="button"><i
                        class="bi bi-box-arrow-in-right lgin-icon"></i> Login</button></a>
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
    <section class="m-auto section-style">
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
    <section class="m-auto section-style">
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

    {{-- What We Do --}}
    <section class="m-auto section-style">
        <div class="container py-5 py-xl-6 px-5">
            <div class="row no-gutter">
                {{-- Text Half --}}
                <div class="col-md-6 p-0 m-0">
                    <div class="wwd d-flex align-items-center text-div">
                        <div class="container">
                            <div class="container text-half">
                                <div class="hr-line mb-3"></div>
                                <h1 class="header-text">WHAT WE DO</h1>
                                <p class="sm-text">MELI acquires the latest skills, knowledge and expertise through its
                                    partnerships with some of the world's best logistics educational providers, to offer the
                                    participants a variety of educational and training programs that would suit their
                                    training needs. By adapting the "learning by doing" methodology as one of the basic
                                    approaches applied in the programs, MELI assures that graduates will be equipped with
                                    strong tools enabling them to contribute to the success of their organizations.</p>
                                <button class="btn btn-light discover-btn text-center me-2 mt-5" type="button">Contact
                                    Us</button>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Img Half --}}
                <div class="col-md-6 d-none d-md-flex justify-content-center align-items-center bg-image image">
                    <div class="d-flex align-items-center">
                        <div class="container">
                            <img src="assets/images/websiteImg/graphic-whatwedo.png" alt=""
                                class="center-vector img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Our Top Programs  --}}
    <section class="m-auto section-style">
        <div class="container py-5 py-xl-6 px-5">
            <div class="hr-line-blue mb-2 m-auto"></div>
            <h1 class="header-text text-center">Our Top Programs</h1>

            <div class="container mt-5 mb-2">
                <div class="row" id="progFilter">
                    <div class="col-md prog-filter active">
                        Cat
                    </div>
                    <div class="col-md prog-filter">
                        Cat
                    </div>
                    <div class="col-md prog-filter">
                        Cat
                    </div>
                    <div class="col-md prog-filter">
                        Cat
                    </div>
                    <div class="col-md prog-filter">
                        Cat
                    </div>
                    <div class="col-md prog-filter">
                        Cat
                    </div>
                    <div class="col-md prog-filter">
                        Cat
                    </div>
                    <div class="col-md prog-filter">
                        Cat
                    </div>
                </div>
                <div>
                    <div class="dropdown-center text-center" id="dropdownProgFilter">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Programs Catagories
                        </a>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Cat 1</a></li>
                            <li><a class="dropdown-item" href="#">Cat 2</a></li>
                            <li><a class="dropdown-item" href="#">Cat 3</a></li>
                        </ul>
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

        var header = document.getElementById("progFilter");
        var btns = header.getElementsByClassName("prog-filter");
        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function() {
                var current = document.getElementsByClassName("active");
                if (current.length > 0) {
                    current[0].className = current[0].className.replace(" active", "");
                }
                this.className += " active";
            });
        }
    </script>

@endsection
