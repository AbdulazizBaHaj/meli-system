@extends('layouts.website-layout')

@section('styles')
    <link rel="stylesheet" href="assets/css/websiteCss/program.css">
    <link rel="stylesheet" href="assets/css/websiteCss/_navbar.css">
    <link rel="stylesheet" href="assets/css/websiteCss/_footer.css">
    <link rel="stylesheet" href="assets/css/websiteCss/_breadcrumb.css">
    <link rel="stylesheet" href="assets/css/websiteCss/_contact-box.css">
@endsection

@section('title', 'Programs')

@section('body')

    @include('website-views._navbar')

    @include('website-views._breadcrumb')


    <section class="m-auto section-style">
        @include('website-views._contact-box')
    </section>

    @include('website-views._footer')


@section('scripts')
    {{-- <script src="assets\js\website\program.js"></script> --}}
@endsection
@endsection
