@extends('layouts.website-layout')

@section('styles')
    <link rel="stylesheet" href="{{ URL::asset('assets/css/websiteCss/admission-apply.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/websiteCss/_navbar.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/websiteCss/_footer.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/websiteCss/_breadcrumb.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/websiteCss/_contact-box.css') }}">
@endsection

@section('title', 'Admission Apply')

@section('body')

    @include('website-views._navbar')

    @include('website-views._breadcrumb')

    <section>
        <form action="">
            @csrf
            <div class="fluid-container prog-cards-section py-5 py-xl-6">
                <div class="row container m-auto">
                    <div class="col-lg-8 p-3 my-3">
                        <div class="container row py-5 py-xl-6 m-auto card-col">
                            <div class="row fluid-container">
                                <div class="col">
                                    <h3 class="step-h">General Information</h3>
                                    <p class="px-1 step-sub-text">Please fill with your details</p>
                                </div>
                                <div class="col d-flex justify-content-end m-auto step-text">
                                    Step 1 of 3
                                </div>
                            </div>

                            <div class="row fluid-container m-auto">
                                <div class="col-md mx-2 my-1">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="fullName">
                                        <label for="fullName"><span class="bg-transparent"><i
                                                    class="bi bi-person"></i></span>
                                            Full Name</label>
                                    </div>
                                </div>
                                <div class="col-md mx-2 my-1">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="city">
                                        <label for="city"><span class="bg-transparent"><i
                                                    class="bi bi-geo-alt"></i></span>
                                            City</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="container row py-5 py-xl-6 m-auto mt-5 card-col">
                            <div class="row fluid-container">
                                <div class="col">
                                    <h3 class="step-h">Contact Information</h3>
                                    <p class="px-1 step-sub-text">Please fill with your details</p>
                                </div>
                                <div class="col d-flex justify-content-end m-auto step-text">
                                    Step 2 of 3
                                </div>
                            </div>

                            <div class="row fluid-container m-auto">
                                <div class="col-md mx-2 my-1">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="email">
                                        <label for="email"><span class="bg-transparent"><i
                                                    class="bi bi-envelope"></i></span>
                                            Email</label>
                                    </div>
                                </div>
                                <div class="col-md mx-2 my-1">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="phoneNum">
                                        <label for="phoneNum"><span class="bg-transparent"><i
                                                    class="bi bi-telephone"></i></span> Phone Number</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="container row py-5 py-xl-6 m-auto mt-5 card-col">
                            <div class="row fluid-container">
                                <div class="col">
                                    <h3 class="step-h">Preferences</h3>
                                    <p class="px-1 step-sub-text">Please fill with your details</p>
                                </div>
                                <div class="col d-flex justify-content-end m-auto step-text">
                                    Step 3 of 3
                                </div>
                            </div>

                            <div class="row fluid-container m-auto">
                                <div class="col-md mx-2 my-1">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="email">
                                        <label for="email"><span class="bg-transparent"><i
                                                    class="bi bi-envelope"></i></span>
                                            Email</label>
                                    </div>
                                </div>
                                <div class="col-md mx-2 my-1">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="phoneNum">
                                        <label for="phoneNum"><span class="bg-transparent"><i
                                                    class="bi bi-telephone"></i></span> Phone Number</label>
                                    </div>
                                </div>
                                <div class="row fluid-container m-auto">
                                    <div class="col-md mx-2 my-1 p-0">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Leave a comment here" id="message" style="height: 100px"></textarea>
                                            <label for="message"><span class="bg-transparent"><i
                                                        class="bi bi-chat-left-dots"></i></span> Your Message</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row fluid-container m-auto">
                                    <div class="col-md mx-2 my-1 p-0">
                                        <div class="form-check mt-3">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label label-text" for="flexCheckDefault">
                                                I agree to <a href="" class="red-link">Terms of Services</a> and <a
                                                    href="" class="red-link">Privacy Policy</a>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="container text-center">
                                <button class="btn send-btn text-center mt-5 mx-auto" type="submit">Send Now</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 my-3">
                        <div class="container my-3 card-col px-3 py-3">
                            <div class="row">
                                <div class="col">
                                    <img src="\assets\images\websiteImg\prog-01.png" alt="" class="img-fluid">
                                </div>
                                <div class="col">
                                    <p class="prog-h">ID - Supply Chain Management</p>
                                    <div class="fluid-container">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <i class="bi bi-star-fill star-rating d-inline"></i>
                                                <i class="bi bi-star-fill star-rating d-inline"></i>
                                                <i class="bi bi-star-fill star-rating d-inline"></i>
                                                <i class="bi bi-star-fill star-rating d-inline"></i>
                                                <i class="bi bi-star star-rating d-inline"></i>
                                            </div>
                                        </div>
                                        <p class="d-inline review-text">(139 review)</p>

                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row text-center">
                                <div class="col card-date d-flex justify-content-start my-auto text-center">
                                    <span><i class="bi bi-calendar3"></i></span>&nbsp;Course Date
                                    <br>
                                    09.07.2023
                                </div>
                                <div class="col d-flex justify-content-end my-auto text-center">
                                    <span class="prog-price">$180.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>

    {{-- <section class="m-auto section-style">
        <div class="container py-5 py-xl-6 m-auto">
            <div class="container row bg-light py-5 py-xl-6 m-auto">
                <div class="row fluid-container">
                    <div class="col"> 
                        <h3 class="step-h">General Information</h3>
                        <p class="px-1 step-sub-text">Please fill with your details</p>
                    </div>
                    <div class="col d-flex justify-content-end m-auto step-text">
                        Step 1 of 3
                    </div>
                </div>

                <div class="row fluid-container">

                </div>
            </div>
        </div>
    </section> --}}



    <section class="m-auto section-style">
        @include('website-views._contact-box')
    </section>

    @include('website-views._footer')
@endsection
