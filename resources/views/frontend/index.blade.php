@extends('frontend.layouts.apps')


@push('styles')

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Zameen world || index</title>
        <!-- Link Swiper's CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />

    </head>
@endpush

@section('content')
    <!-- Banner-Section -->
    <section>
        <div class="bg-banner d-flex justify-content-center align-items-center flex-column">
            <div class="text-section text-center banner-text mt-3">
                <h1>Simplify Your Home Search</h1>
            </div>
            <div class="banner-search mt-3">
                <div class="links">
                    <a href="#" class="active buy-opt">Buy</a>
                    <a href="#" class="sell-opt" data-bs-toggle="modal" data-bs-target="#exampleModal">Sell</a>
                </div>
                <div class="search-container d-flex align-items-center flex-row position-relative">
                    <!-- <input type="text" class="form-control" list="programmingLanguages"
                                                    placeholder="City, Neighborhood, Address, School, ZIP, Agent, MLS #" > -->
                    <input type="text" id="searchtxt" class="form-control" list="programmingLanguages"
                        placeholder="City, Neighborhood, Address, School, ZIP, Agent, MLS #">
                    <button type="button" class="mx-2 btn-contain-normal mt-md-0 mt-2">Search</button>
                    <ul class="list-dropdown">
                        <li class="location-header"><img src="{{ asset('zameen/assets/images/loc-header.png') }}"><span>11
                                Locations</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="custom-padding">
        <div class="agent-support ">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-lg-6 position-relative">
                        <div class="bg-img">
                            <img src="{{ asset('zameen/assets/images/agent-bg.png') }}">
                            <div class="card agent-card">
                                <div class="px-2">
                                    <div class="row my-3">
                                        <div class="col-3 d-flex justify-content-center">
                                            <img src="{{ asset('zameen/assets/images/agent.png') }}" alt=""
                                                style="height: 64px !important;width:64px !important;">
                                        </div>
                                        <div class="align-items-center col-9 d-flex">
                                            <div>
                                                <p class="title pb-1">Agents support</p>
                                                <p class="sub-title">Free tools to collaborate your search with your agent.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card deal-card">
                                <div>
                                    <div class="row my-4">
                                        <div class="col-12 mt-2">
                                            <p class="title pb-1">Find the best deal</p>
                                            <p class="sub-title">All of your transaction information in your online account,
                                                accessible
                                                anytime</p>
                                        </div>
                                        <div class="col-12">
                                            <img src="{{ asset('zameen/assets/images/deal.png') }}" alt=""
                                                class="deal-img">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 position-relative d-flex flex-column justify-content-center mt-3">
                        <div class="">
                            <ul class="nav nav-tabs buy-sell" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                        data-bs-target="#home" type="button" role="tab" aria-controls="home"
                                        aria-selected="true">Sell With Zameen</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                                        type="button" role="tab" aria-controls="profile" aria-selected="false">Buy With
                                        Zameen</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel"
                                    aria-labelledby="home-tab">
                                    <p class="intro-headig my-4">Learn how we sell <br>propertise faster for higher<br>
                                        prices </p>
                                    <p class="intro-description">"Learn How We Sell Properties Faster for Higher Prices"
                                        Each listing is different. We maximize each listing's exposure to the market, and
                                        make it simple for
                                        buyers to understand what your property is, alleviating unneeded friction in the
                                        buying process."
                                    </p>
                                    <a type="button"
                                        class="btn-contain-normal d-flex flex-row gap-2 align-items-center a-btn mx-lg-0 mx-auto">See
                                        more
                                        <img src="{{ asset('zameen/assets/images/vector-r.png') }}"></a>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <p class="intro-headig my-4">Learn how we Buy <br>propertise faster for higher<br>
                                        prices </p>
                                    <p class="intro-description">"Use our free one of a kind custom tools to organize your
                                        search. Just
                                        clicking a heart on a property isn't enough anymore."</p>
                                    <a type="button"
                                        class="btn-contain-normal d-flex flex-row gap-2 align-items-center a-btn mx-lg-0 mx-auto">See
                                        more
                                        <img src="{{ asset('zameen/assets/images/vector-r.png') }}"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- propertioes-tolove -->
    </section>


    <section class="custom-padding">
        <div class="wrapper">
            <div class="inner-text custom-margin">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-8 text-lg-start text-center">
                            <p class="intro-headig properties">Properties to Love</p>
                            <p class="prop-desc">Some of our picked properties near you location.</p>
                        </div>
                        <div
                            class="col-xl-4 text-center d-flex justify-content-center justify-content-lg-evenly align-items-center">
                            <button type="button" class="btn-contain-normal btn-lg">Browse more properties</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- propety Super Hot -->
            <section class="all-p">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 position-relative rewslider">
                            <div class="swiper mySwiperreviewsuperhot mt-3">
                                <div class="swiper-wrapper">
                                    @foreach ($superhot as $property)
                                        <div class="swiper-slide">
                                            <div class="single-cards-slider">
                                                <a
                                                    href="{{ route('property.show', [$property->slug, $property->random_id]) }}">
                                                    <div class="img-wraper">
                                                        @if (!empty($property->image))
                                                            <img src="{{ Storage::url('property/' . $property->image) }}">
                                                        @elseif(!empty($property->location_latitude))
                                                            <iframe width="100%" height="400" frameborder="0"
                                                                scrolling="no" marginheight="0" marginwidth="0"
                                                                loading="lazy"
                                                                src="https://maps.google.com/maps?q={{ $property->address }},{{ $property->location_latitude }},{{ $property->location_longitude }}&z=15&output=embed">
                                                            </iframe>
                                                        @else
                                                            <img src="{{ asset('zameen/house.png') }}">
                                                        @endif
                                                        <div class="badge-review d-flex flex-row justify-content-between px-3 align-items-start position-absolute flex-nowrap w-100 "
                                                            style="margin-top: -3%">
                                                            <div><span class="badge-for-all"
                                                                    style="color:rgb(202, 26, 26) ">{{ $property->purpose }}
                                                                    for {{ $property->type }}</span></div>
                                                        </div>
                                                    </div>
                                                    <div class="card-text-warrper">
                                                        <div class="tag-img">
                                                            <img
                                                                src=" {{ asset('zameen/assets/images/superhott.jpeg') }}">
                                                        </div>
                                                        <div
                                                            class="heart-sec d-flex flex-row justify-content-between mt-3 align-items-center">

                                                            <h3>Rs {{ formatPrice($property->price) }}</h3>
                                                            <img src=" {{ asset('zameen/assets/images/favorited.png') }}">
                                                        </div>


                                                        <div class="plan-text-sec d-flex flex-column gap-1">
                                                            <h3 class="line-clamp-one">{{ $property->title }} </h3>
                                                            <p class="line-clamp-one">{{ ucfirst($property->address) }}
                                                            </p>
                                                        </div>
                                                        <hr />
                                                </a>
                                                <hr />
                                                <div class="icons-section">
                                                    <div class="d-flex flex-row justify-content-between my-2">
                                                        <div class="d-flex flex-row gap-1 align-items-center">
                                                            <div>
                                                                <img src=" {{ asset('zameen/assets/images/bed.png') }}" />
                                                            </div>
                                                            <p>
                                                                @if (!empty($property->bedroom))
                                                                    {{ $property->bedroom }}
                                                                @else
                                                                    --
                                                                @endif
                                                                Beds
                                                            </p>
                                                        </div>
                                                        <div class="d-flex flex-row gap-1 align-items-center">
                                                            <div>
                                                                <img
                                                                    src=" {{ asset('zameen/assets/images/bath.png') }}" />
                                                            </div>
                                                            <p>
                                                                @if (!empty($property->bathroom))
                                                                    {{ $property->bathroom }}
                                                                @else
                                                                    --
                                                                @endif
                                                                Bathrooms
                                                            </p>
                                                        </div>
                                                        <div class="d-flex flex-row gap-1 align-items-center">
                                                            <div>
                                                                <img
                                                                    src=" {{ asset('zameen/assets/images/SquareMeters.png') }}" />
                                                            </div>
                                                            <p>{{ $property->area }} {{ $property->unit }}</p>
                                                        </div>

                                                    </div>
                                                    <div class="card-body d-flex flex-row gap-2 algin-items-center">
                                                         @include('frontend.partials.action') 
                                 
                                                        @include('frontend.partials.whatsapp')
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                     </div>
                                @endforeach

                            </div>

                        </div>
                        {{-- <div class="swiper-button-next"><img src=" {{ asset('zameen/assets/images/next.png') }}"
                                    height="40px"></div>
                            <div class="swiper-button-prev"><img src=" {{ asset('zameen/assets/images/pre.png') }}"
                                    height="40px"></div> --}}
                    </div>
                </div>
        </div>
    </section>
    <!-- propertioes-Hot -->
    <section class="all-p">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 position-relative rewslider">
                    <div class="swiper mySwiperreviewhot mt-3">
                        <div class="swiper-wrapper">
                            @foreach ($hot as $property)
                            <div class="swiper-slide">
                                <div class="single-cards-slider">
                                    <a
                                        href="{{ route('property.show', [$property->slug, $property->random_id]) }}">
                                        <div class="img-wraper">
                                            @if (!empty($property->image))
                                                <img src="{{ Storage::url('property/' . $property->image) }}">
                                            @elseif(!empty($property->location_latitude))
                                                <iframe width="100%" height="400" frameborder="0"
                                                    scrolling="no" marginheight="0" marginwidth="0"
                                                    loading="lazy"
                                                    src="https://maps.google.com/maps?q={{ $property->address }},{{ $property->location_latitude }},{{ $property->location_longitude }}&z=15&output=embed">
                                                </iframe>
                                            @else
                                                <img src="{{ asset('zameen/house.png') }}">
                                            @endif
                                            <div class="badge-review d-flex flex-row justify-content-between px-3 align-items-start position-absolute flex-nowrap w-100 "
                                                style="margin-top: -3%">
                                                <div><span class="badge-for-all"
                                                        style="color:rgb(202, 26, 26)">{{ $property->purpose }}
                                                        for {{ $property->type }}</span></div>
                                            </div>
                                        </div>
                                        <div class="card-text-warrper">
                                            <div class="tag-img">
                                                <img
                                                    src=" {{ asset('zameen/assets/images/hot.jpeg') }}">
                                            </div>
                                            <div
                                                class="heart-sec d-flex flex-row justify-content-between mt-3 align-items-center">

                                                <h3>Rs {{ formatPrice($property->price) }}</h3>
                                                <img src=" {{ asset('zameen/assets/images/favorited.png') }}">
                                            </div>


                                            <div class="plan-text-sec d-flex flex-column gap-1">
                                                <h3 class="line-clamp-one">{{ $property->title }} </h3>
                                                <p class="line-clamp-one">{{ ucfirst($property->address) }}
                                                </p>
                                            </div>
                                            <hr />
                                    </a>
                                    <hr />
                                    <div class="icons-section">
                                        <div class="d-flex flex-row justify-content-between my-2">
                                            <div class="d-flex flex-row gap-1 align-items-center">
                                                <div>
                                                    <img src=" {{ asset('zameen/assets/images/bed.png') }}" />
                                                </div>
                                                <p>
                                                    @if (!empty($property->bedroom))
                                                        {{ $property->bedroom }}
                                                    @else
                                                        --
                                                    @endif
                                                    Beds
                                                </p>
                                            </div>
                                            <div class="d-flex flex-row gap-1 align-items-center">
                                                <div>
                                                    <img
                                                        src=" {{ asset('zameen/assets/images/bath.png') }}" />
                                                </div>
                                                <p>
                                                    @if (!empty($property->bathroom))
                                                        {{ $property->bathroom }}
                                                    @else
                                                        --
                                                    @endif
                                                    Bathrooms
                                                </p>
                                            </div>
                                            <div class="d-flex flex-row gap-1 align-items-center">
                                                <div>
                                                    <img
                                                        src=" {{ asset('zameen/assets/images/SquareMeters.png') }}" />
                                                </div>
                                                <p>{{ $property->area }} {{ $property->unit }}</p>
                                            </div>

                                        </div>
                                        <div class="card-body d-flex flex-row gap-2 algin-items-center">
                                             @include('frontend.partials.action') 
                     
                                            @include('frontend.partials.whatsapp')
                                        </div>
                                    </div>
                                </div>

                            </div>
                         </div>
                            @endforeach

                        </div>

                    </div>

                    {{-- <div class="swiper-button-next"><img src=" {{ asset('zameen/assets/images/next.png') }}"
                                    height="40px"></div>
                            <div class="swiper-button-prev"><img src=" {{ asset('zameen/assets/images/pre.png') }}"
                                    height="40px"></div> --}}
                </div>
            </div>
        </div>
    </section>
    <!-- propertioes-Featured -->
    <section class="all-p">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 position-relative rewslider">
                    <div class="swiper mySwiperreviewfeatured mt-3">
                        <div class="swiper-wrapper">
                            @foreach ($featured as $property)
                            <div class="swiper-slide">
                                <div class="single-cards-slider">
                                    <a
                                        href="{{ route('property.show', [$property->slug, $property->random_id]) }}">
                                        <div class="img-wraper">
                                            @if (!empty($property->image))
                                                <img src="{{ Storage::url('property/' . $property->image) }}">
                                            @elseif(!empty($property->location_latitude))
                                                <iframe width="100%" height="400" frameborder="0"
                                                    scrolling="no" marginheight="0" marginwidth="0"
                                                    loading="lazy"
                                                    src="https://maps.google.com/maps?q={{ $property->address }},{{ $property->location_latitude }},{{ $property->location_longitude }}&z=15&output=embed">
                                                </iframe>
                                            @else
                                                <img src="{{ asset('zameen/house.png') }}">
                                            @endif
                                            <div class="badge-review d-flex flex-row justify-content-between px-3 align-items-start position-absolute flex-nowrap w-100 "
                                                style="margin-top: -3%">
                                                <div><span class="badge-for-all"
                                                        style="color:rgb(202, 26, 26) ">{{ $property->purpose }}
                                                        for {{ $property->type }}</span></div>
                                            </div>
                                        </div>
                                        <div class="card-text-warrper">
                                            <div class="tag-img">
                                                <img
                                                    src=" {{ asset('zameen/assets/images/featured.jpeg') }}">
                                            </div>
                                            <div
                                                class="heart-sec d-flex flex-row justify-content-between mt-3 align-items-center">

                                                <h3>Rs {{ formatPrice($property->price) }}</h3>
                                                <img src=" {{ asset('zameen/assets/images/favorited.png') }}">
                                            </div>


                                            <div class="plan-text-sec d-flex flex-column gap-1">
                                                <h3 class="line-clamp-one">{{ $property->title }} </h3>
                                                <p class="line-clamp-one">{{ ucfirst($property->address) }}
                                                </p>
                                            </div>
                                            <hr />
                                    </a>
                                    <hr />
                                    <div class="icons-section">
                                        <div class="d-flex flex-row justify-content-between my-2">
                                            <div class="d-flex flex-row gap-1 align-items-center">
                                                <div>
                                                    <img src=" {{ asset('zameen/assets/images/bed.png') }}" />
                                                </div>
                                                <p>
                                                    @if (!empty($property->bedroom))
                                                        {{ $property->bedroom }}
                                                    @else
                                                        --
                                                    @endif
                                                    Beds
                                                </p>
                                            </div>
                                            <div class="d-flex flex-row gap-1 align-items-center">
                                                <div>
                                                    <img
                                                        src=" {{ asset('zameen/assets/images/bath.png') }}" />
                                                </div>
                                                <p>
                                                    @if (!empty($property->bathroom))
                                                        {{ $property->bathroom }}
                                                    @else
                                                        --
                                                    @endif
                                                    Bathrooms
                                                </p>
                                            </div>
                                            <div class="d-flex flex-row gap-1 align-items-center">
                                                <div>
                                                    <img
                                                        src=" {{ asset('zameen/assets/images/SquareMeters.png') }}" />
                                                </div>
                                                <p>{{ $property->area }} {{ $property->unit }}</p>
                                            </div>

                                        </div>
                                        <div class="card-body d-flex flex-row gap-2 algin-items-center">
                                             @include('frontend.partials.action') 
                     
                                            @include('frontend.partials.whatsapp')
                                        </div>
                                    </div>
                                </div>

                            </div>
                         </div>
                            @endforeach

                        </div>

                    </div>

                    {{-- <div class="swiper-button-next"><img src=" {{ asset('zameen/assets/images/next.png') }}"
                                height="40px"></div>
                        <div class="swiper-button-prev"><img src=" {{ asset('zameen/assets/images/pre.png') }}"
                                height="40px"></div> --}}
                </div>
            </div>
        </div>
    </section>
    </div>

    </section>
    <!-- Mobile wrapper -->
    <section class="custom-padding ">
        <div class="mobile-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="d-flex flex-column gap-2">
                            <p class="intro-headig">Mobile Apps Coming Soon</p>
                            <p class="prop-desc">See your home board, follow along with your agent on showings<br> and see
                                all details
                                of
                                your transactions</p>
                        </div>
                        <div class="d-flex flex-column flex-md-row gap-1 gap-md-5 text-md-start text-center">
                            <div><img src="{{ asset('zameen/assets/images/playstore.svg') }}"></div>
                            <div><img src="{{ asset('zameen/assets/images/appstore.svg') }}"></div>
                        </div>
                    </div>
                    {{-- <div class="col-md-4 position-relative">
                        <div class="mobile-3d">
                            <img src="assets/images/">
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>

    @include('frontend.partials.models') 

   
@endsection


@push('scripts')
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    @include('frontend.partials.modelsjs') 

    <script>
        var swiper = new Swiper(".mySwiperreviewsuperhot", {
            spaceBetween: 10,
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                type: "fraction",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                640: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 15,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
            },
        });
    </script>


    <script>
        var swiper = new Swiper(".mySwiperreviewhot", {
            spaceBetween: 10,
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                type: "fraction",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next-a",
                prevEl: ".swiper-button-prev-b",
            },
            breakpoints: {
                640: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 15,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
            },
        });
    </script>

    <script>
        var swiper = new Swiper(".mySwiperreviewfeatured", {
            spaceBetween: 10,
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                type: "fraction",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next-a",
                prevEl: ".swiper-button-prev-b",
            },
            breakpoints: {
                640: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 15,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
            },
        });
    </script>
@endpush
