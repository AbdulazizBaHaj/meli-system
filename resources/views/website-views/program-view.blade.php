@extends('layouts.website-layout')

@section('styles')
    <link rel="stylesheet" href="{{ URL::asset('assets/css/websiteCss/program.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/websiteCss/_navbar.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/websiteCss/_footer.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/websiteCss/_breadcrumb.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/websiteCss/_contact-box.css') }}">
@endsection

@section('title', 'Program view')

@section('body')

    @include('website-views._navbar')

    @include('website-views._breadcrumb')


    <section>
        <div class="fluid-container prog-cards-section py-5 py-xl-6">
            <div class="row container m-auto">
                <div class="col-lg-9 p-3 my-3">
                    <h1 class="prog-h mb-5">ID - Supply Chain Management</h1>

                    <div class="row container m-auto text-center">
                        <div class="col-md my-2 h-auto">
                            <span class="rating-text align-bottom"><span><i class="bi bi-star-fill star-rating"></i>
                                    4.9</span></span><br>
                            <span class="review-text">(139 review)</span>
                        </div>
                        <div class="col-md my-2 h-auto">
                            <span class="card-col-title align-bottom"><span><i class="bi bi-calendar3"></i> Course
                                    Date</span></span><br>
                            <span class="card-col-val align-top">31.07.2023</span>
                        </div>
                        <div class="col-md my-2 h-auto">
                            <span class="card-col-title align-bottom"><span><i class="bi bi-clock"></i>
                                    Duration</span></span><br>
                            <span class="card-col-val align-top">2 Months</span>
                        </div>
                        <div class="col-md my-2 h-auto">
                            <span class="card-col-title align-bottom"><span><i class="bi bi-translate"></i>
                                    Language</span></span><br>
                            <span class="card-col-val align-top">English</span>
                        </div>
                    </div>

                    <div class="fluid-container my-3">
                        <img src="{{ URL::asset('assets/images/websiteImg/prog-view-img.png') }}" class="img-fluid">
                    </div>

                    <div class="fluid-container my-5 p-3">
                        <h3 class="title-h3 mb-3">About the Program</h3>

                        <p class="paragraph-div">The content of the module covers four main themes. These are: what is a
                            supply chain and supply
                            chain planning, why it is important in any business, how the supply chain operates and the
                            principles for supply chain improvement. Where appropriate, the global/regional nature of the
                            supply chain will be emphasized.</p>
                    </div>

                    <div class="fluid-container my-5 p-3">
                        <h3 class="title-h3 mb-3">Who Should Attend this Program</h3>

                        <p class="paragraph-div">Those have prior knowledge of logistics and transport operations and an
                            awareness of the
                            integrated nature of supply chain activities, ideally through their own work experience and/or
                            knowledge gained from studying the International Introductory Certificate and Certificate level
                            courses.</p>
                    </div>

                    <div class="fluid-container my-5 p-3">

                        <h1 class="accordion-h">Course Table of Content</h1>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Accordion Item #1
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab perspiciatis odio
                                        voluptatibus dolor maxime, assumenda amet velit dignissimos quae accusantium
                                        inventore quas, necessitatibus enim laboriosam consequuntur? Perspiciatis incidunt
                                        impedit cupiditate.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Accordion Item #2
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab perspiciatis odio
                                        voluptatibus dolor maxime, assumenda amet velit dignissimos quae accusantium
                                        inventore quas, necessitatibus enim laboriosam consequuntur? Perspiciatis incidunt
                                        impedit cupiditate.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Accordion Item #3
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab perspiciatis odio
                                        voluptatibus dolor maxime, assumenda amet velit dignissimos quae accusantium
                                        inventore quas, necessitatibus enim laboriosam consequuntur? Perspiciatis incidunt
                                        impedit cupiditate.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 my-3">
                    <div class="container my-3 filter-col px-3 py-3">
                        <div class="row mb-2">
                            <span class="content-text"><span class="content-icon"><i class="bi bi-check-circle"></i></span>
                                Supply Chain Improvement</span>
                        </div>
                        <div class="row mb-2">
                            <span class="content-text"><span class="content-icon"><i class="bi bi-check-circle"></i></span>
                                Supply Chain Operations</span>
                        </div>
                        <div class="row mb-2">
                            <span class="content-text"><span class="content-icon"><i class="bi bi-check-circle"></i></span>
                                Supply Chain Planning</span>
                        </div>
                        <div class="row mb-2">
                            <span class="content-text"><span class="content-icon"><i class="bi bi-check-circle"></i></span>
                                The Supply Chain</span>
                        </div>

                        <hr>
                        <span class="prog-price">$180.00</span>

                        <div class="container text-center">
                            <button class="btn btn-light enroll-btn text-center mt-2" type="button">Enroll Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="m-auto section-style">
        @include('website-views._contact-box')
    </section>

    @include('website-views._footer')
@endsection
