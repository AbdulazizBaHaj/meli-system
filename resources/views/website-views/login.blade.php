@extends('layouts.website-layout')

@section('styles')
    <link rel="stylesheet" href="assets/css/websiteCss/website.css">
@endsection

@section('title', 'Login')

@section('body')
    <div class="container-fluid">
        <div class="row no-gutter">

            {{-- form half --}}
            <div class="col-md-6 p-0 m-0">
                <div class="login d-flex align-items-center form-div">
                    <div class="container">
                        <div class="container text-half">
                            <div class="hr-line mb-3"></div>
                            <h1 class="header-text">Access Your Account</h1>
                            <p class="sm-text">Provide your mobile number and use OTP to login into your account securely.
                            </p>
                        </div>
                        <div class="container white-form-div d-flex flex-column">
                            <p for="" class="label-text mb-3">Let’s Start Now 🔥</p>
                            <div class="input-group mb-3">
                                <span class="input-group-text border border-end-0 bg-transparent"><i
                                        class="bi bi-telephone"></i></span>
                                <span class="input-group-text border border-start-0 border-end-0 bg-transparent">+966</span>
                                <input type="text" class="form-control" placeholder="Phone Number">
                            </div>
                            <div class="mt-auto text-center">
                                <button class="btn btn-primary btn-style" type="button">Login</button>
                                <p class="sm-text-rights mt-3">© MELI All rights reserved.</p>
                            </div>
                        </div>
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
@endsection
