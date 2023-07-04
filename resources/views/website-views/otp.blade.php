@extends('layouts.website-layout')

@section('styles')
    <link rel="stylesheet" href="assets/css/websiteCss/website.css">
@endsection

@section('title', 'OTP')

@section('body')
    <div class="container-fluid">
        <div class="row no-gutter">

            {{-- form half --}}
            <div class="col-md-6 p-0 m-0">
                <div class="login d-flex align-items-center form-div">
                    <div class="container">
                        <form action="" class="needs-validation" novalidate>
                            <div class="container text-half">
                                <div class="hr-line mb-3"></div>
                                <h1 class="header-text">OTP</h1>
                                <p class="sm-text">Please enter the OTP we sent you on your phone number +966 **** ****.
                                </p>
                            </div>
                            <div class="container white-form-div d-flex flex-column">
                                <p class="label-text mb-3">Enter Code 📱</p>
                                <div class="input-group input-group-lg otp-div">
                                    <input type="text" class="form-control text-center otp-input" id="otpCode"
                                        maxlength="5" required />
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                        Code must be 5 digits.
                                    </div>
                                </div>

                                <p class="label-text mt-5 text-center">Didn't receive OTP? <a href="" class="text-link">Resend</a></p>

                                <div class="mt-auto text-center">
                                    <button class="btn btn-danger btn-style" type="submit">Submit</button>
                                    <p class="sm-text-rights mt-3">© MELI All rights reserved.</p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            {{-- img half --}}
            <div class="col-md-6 d-none d-md-flex justify-content-center align-items-center bg-image image">
                <div class="d-flex align-items-center">
                    <div class="container">
                        <img src="assets/images/websiteImg/meli-white-vector.png" alt="" class="center-vector">
                    </div>
                </div>
            </div>
        </div>
    </div>

@section('scripts')
    <script src="assets/js/website/otp-page.js"></script>
@endsection
@endsection
