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

    <section>
        <div class="container">
            <div class="row fluid-container">
                <div class="col-3 p-2 filter-col">
                    <div class="row mb-3">
                        <div class="col d-flex justify-content-start my-auto filter-text-h">
                            Filter
                        </div>
                        <div class="col d-flex justify-content-end my-auto filter-text-sm">
                            clear
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-group mb-3">
                            <span class="input-group-text bg-light border border-end-0" id="basic-addon1"><i
                                    class="bi bi-search"></i></span>
                            <input type="text" class="form-control border border-start-0 bg-light" placeholder="Search"
                                aria-label="search" aria-describedby="basic-addon1">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="cat-title mx-3">
                            Programs
                        </div>
                        <div>
                            <ul class="list-group list-group-flush">
                                @for ($i = 1; $i <= 6; $i++)
                                    <li class="list-group-item cat-item">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheck{{ $i }}">
                                            <label class="form-check-label" for="flexCheck{{ $i }}">
                                                Default checkbox <span class="cat-item-num">(6)</span>
                                            </label>
                                        </div>
                                    </li>
                                @endfor
                            </ul>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="cat-title mx-3">
                            Categories
                        </div>
                        <div>
                            <ul class="list-group list-group-flush">
                                @for ($i = 1; $i <= 6; $i++)
                                    <li class="list-group-item cat-item">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheck{{ $i }}">
                                            <label class="form-check-label" for="flexCheck{{ $i }}">
                                                Default checkbox <span class="cat-item-num">(6)</span>
                                            </label>
                                        </div>
                                    </li>
                                @endfor
                            </ul>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="cat-title mx-3">
                            Price
                        </div>
                        <div class="text-center">
                            <input type="range" class="form-range mx-auto" id="priceRange">

                            <div class="row w-75 mx-auto price-text">
                                <div class="col-1 d-flex justify-content-start">
                                    <span id="priceVal"></span>
                                </div>
                                <div class="col d-flex justify-content-end">
                                    max: $100.00
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="cat-title mx-3">
                            Dates
                        </div>
                        <div>
                            <ul class="list-group list-group-flush">
                                @for ($i = 1; $i <= 3; $i++)
                                    <li class="list-group-item cat-item">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheck{{ $i }}">
                                            <label class="form-check-label" for="flexCheck{{ $i }}">
                                                Default checkbox <span class="cat-item-num">(6)</span>
                                            </label>
                                        </div>
                                    </li>
                                @endfor
                            </ul>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="cat-title mx-3">
                            Location
                        </div>
                        <div>
                            <ul class="list-group list-group-flush">
                                @for ($i = 1; $i <= 3; $i++)
                                    <li class="list-group-item cat-item">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheck{{ $i }}">
                                            <label class="form-check-label" for="flexCheck{{ $i }}">
                                                Default checkbox <span class="cat-item-num">(6)</span>
                                            </label>
                                        </div>
                                    </li>
                                @endfor
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-9">
                    2
                </div>
            </div>
        </div>
    </section>


    <section class="m-auto section-style">
        @include('website-views._contact-box')
    </section>

    @include('website-views._footer')


@section('scripts')
    {{-- <script src="assets\js\website\program.js"></script> --}}

    <script>
        var slider = document.getElementById("priceRange");
        var output = document.getElementById("priceVal");
        output.innerHTML = slider.value;

        slider.oninput = function() {
            output.innerHTML = this.value;
        }
    </script>
@endsection
@endsection
