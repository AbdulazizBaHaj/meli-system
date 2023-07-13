@extends('layouts.website-layout')

@section('styles')
    <link rel="stylesheet" href="assets/css/websiteCss/contact-us.css">
    <link rel="stylesheet" href="assets/css/websiteCss/_navbar.css">
    <link rel="stylesheet" href="assets/css/websiteCss/_footer.css">
    <link rel="stylesheet" href="assets/css/websiteCss/_breadcrumb.css">
@endsection

@section('title', 'Contact Us')

@section('body')
    @include('website-views._navbar')

    @include('website-views._breadcrumb')

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

    @include('website-views._footer')

@section('scripts')
    {{-- <script src="assets/js/website/home.js"></script> --}}
@endsection
@endsection
