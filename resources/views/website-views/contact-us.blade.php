@extends('layouts.website-layout')

@section('styles')
    <link rel="stylesheet" href="assets/css/websiteCss/contact-us.css">
@endsection

@section('title', 'Contact Us')

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
                        <a class="nav-link" href="calendar">Calendar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="contact-us">Contact Us</a>
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


    <section class="m-auto">
        <div class="container py-5 py-xl-6">
            <div class="hr-line mb-2 m-auto"></div>
            <h1 class="header-text text-center">Keep In Touch</h1>
            <p class="sm-text text-center">Welcome to our Website. We are glad to have you around.</p>

            <div class="container m-auto text-center p-1">
                <div class="row container m-auto contact-div d-flex align-items-center">
                    <div class="col-sm my-2 rounded-border-left">
                        <div class="row container p-2 d-flex align-items-center">
                            <div class="col-4 contact-icon blue-bg-w d-flex justify-content-center align-items-center">
                                <i class="bi bi-telephone-inbound"></i>
                            </div>
                            <div class="col-8 ms-3 my-auto text-start">
                                <span class="contact-text">Phone Number</span>
                                <br>
                                <span class="contact-val">050 555 5555</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm my-2 border-center">
                        <div class="row container p-2 d-flex align-items-center">
                            <div class="col-4 contact-icon red-bg-w d-flex justify-content-center align-items-center">
                                <i class="bi bi-envelope"></i>
                            </div>
                            <div class="col-8 ms-3 my-auto text-start">
                                <span class="contact-text">Email</span>
                                <br>
                                <span class="contact-val">info@meli.edu.sa</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm my-2 rounded-border-right">
                        <div class="row container p-2 d-flex align-items-center">
                            <div class="col-4 contact-icon blue-bg-w d-flex justify-content-center align-items-center">
                                <i class="bi bi-geo-alt"></i>
                            </div>
                            <div class="col-8 ms-3 my-auto text-start">
                                <span class="contact-text">Address</span>
                                <br>
                                <span class="contact-val">Dammam</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="m-auto section-style">
        <div class="container py-5 contact-form-div">
            <div class="container bg-white rounded-2 contact-form-div-white">
                <form action="">
                    @csrf
                    <div class="row mb-3">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="fname">
                            <label for="fname" class="ms-2"><span class="bg-transparent"><i
                                        class="bi bi-person"></i></span> First Name</label>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="lname">
                            <label for="lname" class="ms-2"><span class="bg-transparent"><i
                                        class="bi bi-person"></i></span> Last Name</label>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="email">
                            <label for="email" class="ms-2"><span class="bg-transparent"><i
                                        class="bi bi-envelope"></i></span> Email</label>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="phoneNum">
                            <label for="phoneNum" class="ms-2"><span class="bg-transparent"><i
                                        class="bi bi-telephone"></i></span> Phone Number</label>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="form-floating">
                            <textarea class="form-control" id="comments" style="height: 100px"></textarea>
                            <label for="comments" class="ms-2"><span class="bg-transparent"><i
                                        class="bi bi-chat-left-dots"></i></span> Your Message</label>
                        </div>
                    </div>
                    <div class="form-check mt-3">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label label-text" for="flexCheckDefault">
                            I agree to <a href="" class="red-link">Terms of Services</a> and <a href=""
                                class="red-link">Privacy Policy</a>
                        </label>
                    </div>
                    <div class="container text-center">
                        <button class="btn send-btn text-center mt-5 mx-auto" type="button">Send Now</button>
                    </div>
                </form>
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
    {{-- <script src="assets/js/website/home.js"></script> --}}
@endsection
@endsection
