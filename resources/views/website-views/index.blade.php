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
                    <div class="col-md prog-filter active-filter" onclick="filterSelection('all')">
                        All
                    </div>
                    <div class="col-md prog-filter" onclick="filterSelection('ff')">
                        No
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
                        <a class="btn btn-secondary dropdown-toggle" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Programs Catagories
                        </a>

                        <ul class="dropdown-menu">
                            <li class="dropdown-menu-item" onclick="filterSelection('all')">Cat 1</li>
                            <li class="dropdown-menu-item" onclick="filterSelection('hh')">Cat 2</li>
                            <li class="dropdown-menu-item">Cat 3</li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="fluid-container mt-3">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-touch="true">
                    <div class="carousel-inner">
                        @php $cardCount = 0; @endphp

                        @for ($i = 0; $i < 10; $i++)
                            @if ($cardCount % 3 === 0)
                                <div class="carousel-item{{ $cardCount === 0 ? ' active' : '' }}">
                                    <div class="row row-cols-1 row-cols-md-3 g-4">
                            @endif

                            <div class="col card-filter">
                                <div class="card h-100">
                                    <img src="assets\images\websiteImg\prog-01.png" class="card-img-top m-auto img-fluid"
                                        alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title card-h5 text-uppercase">CERTIFICATE IN PROCUREMENT AND SUPPLY
                                            OPERATIONS -
                                            CIPS</h5>
                                        <div class="fluid-container mt-2 mb-2">
                                            <div class="row">
                                                <div class="col-sm-8">
                                                    <i class="bi bi-star-fill star-rating d-inline"></i>
                                                    <i class="bi bi-star-fill star-rating d-inline"></i>
                                                    <i class="bi bi-star-fill star-rating d-inline"></i>
                                                    <i class="bi bi-star-fill star-rating d-inline"></i>
                                                    <i class="bi bi-star star-rating d-inline"></i>
                                                    <p class="d-inline review-text">(139 review)</p>
                                                </div>
                                                <div class="col-sm-4 text-end rating-text">
                                                    4.9
                                                </div>
                                            </div>
                                        </div>
                                        <div class="container text-center">
                                            <div class="row">
                                                <div class="col-lg h-auto">
                                                    <span class="card-col-title align-bottom"><span><i
                                                                class="bi bi-calendar3"></i> Course Date</span></span><br>
                                                    <span class="card-col-val align-top">31.07.2023</span>
                                                </div>
                                                <div class="col-lg h-auto">
                                                    <span class="card-col-title align-bottom"><span><i
                                                                class="bi bi-clock"></i> Duration</span></span><br>
                                                    <span class="card-col-val align-top">2 Months</span>
                                                </div>
                                                <div class="col-lg h-auto">
                                                    <span class="card-col-title align-bottom"><span><i
                                                                class="bi bi-translate"></i> Language</span></span><br>
                                                    <span class="card-col-val align-top">English</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="container text-center">
                                            <button class="btn btn-light enroll-btn text-center mt-2"
                                                type="button">Enroll Now</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @php $cardCount++; @endphp
                            @if ($cardCount % 3 === 0 || $i === 9)
                    </div>
                </div>
                @endif
                @endfor
            </div>
        </div>

        <div class="container mt-3">
            <div class="row">
                <div class="col text-center">
                    <button class="btn btn-light next-btn text-center me-2" type="button"
                        data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <i class="bi bi-caret-left"></i>
                    </button>

                    <button class="btn btn-light next-btn text-center me-2" type="button"
                        data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <i class="bi bi-caret-right"></i>
                    </button>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>

    {{-- Portal Scrion --}}
    <section class="m-auto">
        <div class="container-fluid p-5 grid-background">
            <div class="container">
                <h1 class="header-text text-center">Who is <span class="red-span">MELI</span></h1>
            </div>
            <div class="container-sm who-text mt-3 mb-3">
                <p class="sm-text m-auto">
                    Middle East Logistics Institute (MELI), established in Saudi Arabia in 2010, envisions being the
                    leading-edge academic institute in the region. MELI seeks to build globally competitive logistics
                    capacities to the business community in the Kingdom of Saudi Arabia through developing and improving
                    both the awareness and logistics skills of young professionals, practitioners, managers and executives,
                    providing them with specialized training in Logistics and Supply Chain Management and obtaining levels
                    of professional certifications in the field of logistics.
                </p>
            </div>
            <div class="container text-center mt-5">
                <div class="row">
                    <div class="col-md" style="position: relative;">
                        <img src="assets/images/websiteImg/instructor-portal.png"
                            class="m-auto img-fluid mb-5 rounded overlay-img">
                        <div class="overlay-text w-100 m-auto">
                            <p class="text-uppercase overlay-h">FOR INSTRUCTORS</p>
                            <button class="btn btn-danger overlay-btn text-center" type="button">Go To Instructors
                                Portal</button>
                        </div>
                    </div>
                    <div class="col-md" style="position: relative;">
                        <img src="assets/images/websiteImg/student-portal.png"
                            class="m-auto img-fluid mb-5 rounded overlay-img">
                        <div class="overlay-text w-100 m-auto">
                            <p class="text-uppercase overlay-h">FOR STUDENTS</p>
                            <button class="btn btn-danger overlay-btn text-center" type="button">Go To Students
                                Portal</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Getway Section --}}
    <section class="m-auto">
        <div class="fluid-container py-5 py-xl-6">
            <div class="row no-gutter justify-content-end w-100 m-0">
                {{-- Text Half --}}
                <div class="col-md-5 p-0 m-0">
                    <div class="wwd d-flex align-items-center text-div">
                        <div class="container">
                            <div class="container text-half p-3">
                                <h1 class="header-text"><span class="red-span">Your Gateway</span> to Excellence in
                                    Logistics Education</h1>
                                <div class="row mt-5">
                                    <div class="col-md text-center border-end-count">
                                        <p class="m-auto">
                                            <span id="course-num" class="gateway-num counting-animation">+</span><span
                                                id="course-value" class="gateway-num counting-animation">0</span>
                                            <br>
                                            <span class="text-uppercase gateway-text">Course</span>
                                        </p>
                                    </div>
                                    <div class="col-md text-center border-end-count">
                                        <p class="m-auto">
                                            <span id="student-num" class="gateway-num counting-animation">+</span><span
                                                id="student-value" class="gateway-num counting-animation">0</span>
                                            <br>
                                            <span class="text-uppercase gateway-text">Student</span>
                                        </p>
                                    </div>
                                    <div class="col-md text-center">
                                        <p class="m-auto">
                                            <span id="instructor-num" class="gateway-num counting-animation">+</span><span
                                                id="instructor-value" class="gateway-num counting-animation">0</span>
                                            <br>
                                            <span class="text-uppercase gateway-text">Instructor</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Img Half --}}
                <div class="col-md-6 d-none d-md-flex justify-content-end align-items-end bg-image image p-0 m-0">
                    <div class="d-flex align-items-end p-0 m-0">
                        <div class="container p-0 m-0">
                            <img src="assets/images/websiteImg/gateway-img.png" alt="" class="img-fluid m-0 p-0">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@section('scripts')
    <script src="assets/js/website/home.js"></script>
@endsection
@endsection
