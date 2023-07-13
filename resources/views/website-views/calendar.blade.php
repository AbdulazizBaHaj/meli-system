@extends('layouts.website-layout')

@section('styles')
    <link rel="stylesheet" href="assets/css/websiteCss/calendar.css">
    <link rel="stylesheet" href="assets/css/websiteCss/_navbar.css">
    <link rel="stylesheet" href="assets/css/websiteCss/_footer.css">
    <link rel="stylesheet" href="assets/css/websiteCss/_breadcrumb.css">
    <link rel="stylesheet" href="assets/css/websiteCss/_contact-box.css">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script>
@endsection

@section('title', 'Calendar')

@section('body')
    @include('website-views._navbar')

    @include('website-views._breadcrumb')

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
                                            <button class="btn btn-light enroll-btn text-center mt-2" type="button">Enroll
                                                Now</button>
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
        @include('website-views._contact-box')
    </section>

    @include('website-views._footer')


@section('scripts')
    <script src="assets\js\website\calendar.js"></script>
@endsection
@endsection
