@extends('layouts.website-layout')

@section('styles')
    <link rel="stylesheet" href="assets/css/websiteCss/calendar.css">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                headerToolbar: {
                    left: 'prev,next',
                    center: 'title',
                    right: 'dayGridMonth,dayGridWeek,dayGridDay' // user can switch between the two
                },
                titleFormat: {
                    year: 'numeric',
                    month: 'long'
                },
                height: 650,
                navLinks: false,
                events: [{
                        id: 'a',
                        title: 'CERTIFICATE IN PROCUREMENT AND SUPPLY OPERATIONS - CIPS',
                        start: '2023-07-13',
                        end: '2023-07-23',
                    },
                    {
                        id: 'a',
                        title: 'CERTIFICATE IN PROCUREMENT AND SUPPLY OPERATIONS - CIPS',
                        start: '2023-07-13',
                    }
                ]
            });
            calendar.render();
        });
    </script>
@endsection

@section('title', 'Calendar')

@section('body')
    <nav class="navbar navbar-expand-lg navbar-style">
        <div class="container-fluid">
            <a class="navbar-brand ms-5" href="home">
                <img src="assets\images\red-icon.png" alt="Logo" width="100" class="d-inline-block align-text-top">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex justify-content-center nav-items">
                    <li class="nav-item">
                        <a class="nav-link" href="home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="calendar">Calendar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact-us">Contact Us</a>
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


    @php
        $urlSegments = request()->segments(); // Get the URL segments
        $breadcrumbUrl = ''; // Variable to store the breadcrumb URL
        $breadcrumbItems = []; // Array to store breadcrumb items
    @endphp

    {{-- Add the initial "Home" breadcrumb --}}
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bc-nav">
            <li class="breadcrumb-item my-auto ps-5"><a href="home">Home</a></li>

            @foreach ($urlSegments as $index => $segment)
                @php
                    $segmentDisplay = str_replace('-', ' ', ucwords($segment)); // Replace hyphens with spaces and capitalize each word
                    $breadcrumbUrl .= '/' . $segment; // Append each segment to the URL
                    
                    if ($index === count($urlSegments) - 1) {
                        $breadcrumbItems[] = '<li class="breadcrumb-item active my-auto" aria-current="page">' . $segmentDisplay . '</li>';
                    } else {
                        $breadcrumbItems[] = '<li class="breadcrumb-item"><a href="' . url($breadcrumbUrl) . '">' . $segmentDisplay . '</a></li>';
                    }
                @endphp
            @endforeach



            @foreach ($breadcrumbItems as $breadcrumbItem)
                {!! $breadcrumbItem !!}
            @endforeach
        </ol>
    </nav>

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

    <section class="m-auto">
        <div class="container-fluid grid-background py-5 py-xl-6">
            <div class="container py-5 py-xl-6 bg-light">
                <div id='calendar'></div>
            </div>
        </div>
    </section>


    <section class="m-auto section-style">
        <div class="container py-5 py-xl-6 px-5 text-center">
            <div class="container py-5 py-xl-6 px-5 text-center q-div">
                <div class="container">
                    <h1 class="q-title">Have questions or need assistance?</h1>
                    <p class="mt-5 q-sm-text"> Contact our dedicated team at MELI for personalized guidance and support. We
                        are here to help you
                        make
                        informed decisions about your logistics education journey. Reach out to us today and take the first
                        step
                        towards unlocking your potential in the world of logistics</p>
                    <button class="btn q-btn text-center mt-5" type="button">Contact
                        Us</button>
                </div>
            </div>
        </div>
    </section>

    <div class="fluid-container gradient-bg">
        <div class="container">
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-3">
                <div class="col-lg-4 d-flex align-items-center">
                    <img src="assets\images\red-icon.png" alt="" class="img-fluid" style="max-width: 100px">
                </div>

                <div class="nav col-lg-4 justify-content-end">
                    <span class="mb-3 mb-lg-0 text-muted">Privacy Policy</span>
                </div>
            </footer>
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-3">
                <div class="col-lg-4 d-flex align-items-center">
                    <span class="mb-3 mb-lg-0 text-muted">© MELI all rights reserved.</span>
                </div>


                <ul class="nav col-lg-4 justify-content-end list-unstyled d-flex">
                    <li class="ms-3">
                        <button class="footer-icon"><i class="bi bi-twitter"></i></button>
                    </li>
                    <li class="ms-3">
                        <button class="footer-icon"><i class="bi bi-instagram"></i></button>
                    </li>
                    <li class="ms-3">
                        <button class="footer-icon"><i class="bi bi-facebook"></i></button>
                    </li>
                    <li class="ms-3">
                        <button class="footer-icon"><i class="bi bi-youtube"></i></button>
                    </li>
                </ul>

            </footer>
        </div>
    </div>


@section('scripts')
    <script>
        document.addEventListener("click", function(event) {
            // If the target of the event is not inside '.navbar-collapse'
            if (!event.target.closest(".navbar-collapse")) {
                // Collapse all '.navbar-collapse' elements
                var navbarCollapses = document.querySelectorAll(".navbar-collapse");
                navbarCollapses.forEach(function(navbarCollapse) {
                    navbarCollapse.classList.remove("show");
                });
            }
        });

        var header = document.getElementById("progFilter");
        var btns = header.getElementsByClassName("prog-filter");
        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function() {
                var current = document.getElementsByClassName("active-filter");
                if (current.length > 0) {
                    current[0].className = current[0].className.replace(
                        " active-filter",
                        ""
                    );
                }
                this.className += " active-filter";
            });
        }
        // filter section
        filterSelection("all");

        function filterSelection(c) {
            var x, i;
            x = document.getElementsByClassName("card-filter");
            if (c == "all") c = "";
            for (i = 0; i < x.length; i++) {
                w3RemoveClass(x[i], "show");
                if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
            }
        }

        function w3AddClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
                if (arr1.indexOf(arr2[i]) == -1) {
                    element.className += " " + arr2[i];
                }
            }
        }

        function w3RemoveClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
                while (arr1.indexOf(arr2[i]) > -1) {
                    arr1.splice(arr1.indexOf(arr2[i]), 1);
                }
            }
            element.className = arr1.join(" ");
        }

        // Add active class to the current button (highlight it)
        var btnContainer = document.getElementById("progFilter");
        var btns = btnContainer.getElementsByClassName("prog-filter");
        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function() {
                var current = document.getElementsByClassName("active-filter");
                current[0].className = current[0].className.replace(
                    " active-filter",
                    ""
                );
                this.className += " active-filter";
            });
        }

        // Add active class to the current button (highlight it)
        var btnContainer = document.getElementById("dropdownProgFilter");
        var btns = btnContainer.getElementsByClassName("dropdown-menu-item");
        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function() {
                var current = document.getElementsByClassName("active-filter");
                current[0].className = current[0].className.replace(
                    " active-filter",
                    ""
                );
                this.className += " active-filter";
            });
        }
    </script>
@endsection
@endsection
