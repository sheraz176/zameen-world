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
                                                <div class="img-wraper">
                                                    @if (!empty($property->image))
                                                    <img src="{{ Storage::url('property/' . $property->image) }}">
                                                    @else
                                                    <img src="{{ asset('zameen/house.png') }}">
                                                    @endif
                                                </div>
                                                <div class="card-text-warrper">
                                                    <div class="tag-img">
                                                        <img src=" {{ asset('zameen/assets/images/superhott.jpeg') }}">
                                                    </div>
                                                    <div
                                                        class="heart-sec d-flex flex-row justify-content-between mt-3 align-items-center">
                                                        <h3>PKR {{ $property->price }}</h3>
                                                        <img src=" {{ asset('zameen/assets/images/favorited.png') }}">
                                                    </div>
                                                    <a href="{{ route('property.show', $property->slug) }}">
                                                        <div class="plan-text-sec d-flex flex-column gap-1 fixed-text">
                                                            <h3> {{ $property->title }} </h3>
                                                            <p>{{ ucfirst($property->city) }}</p>
                                                        </div>
                                                    </a>
                                                    <hr />
                                                    <div class="icons-section">
                                                        <div class="d-flex flex-row justify-content-between my-2">
                                                            <div class="d-flex flex-row gap-1 align-items-center">
                                                                <div>
                                                                    <img
                                                                        src=" {{ asset('zameen/assets/images/bed.png') }}" />
                                                                </div>
                                                                <p>{{ $property->bedroom }} Beds</p>
                                                            </div>
                                                            <div class="d-flex flex-row gap-1 align-items-center">
                                                                <div>
                                                                    <img
                                                                        src=" {{ asset('zameen/assets/images/bath.png') }}" />
                                                                </div>
                                                                <p>{{ $property->bathroom }} Bathrooms</p>
                                                            </div>
                                                            <div class="d-flex flex-row gap-1 align-items-center">
                                                                <div>
                                                                    <img
                                                                        src=" {{ asset('zameen/assets/images/SquareMeters.png') }}" />
                                                                </div>
                                                                <p>{{ $property->area }} marla</p>
                                                            </div>
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
                                                <div class="img-wraper">
                                                    @if (!empty($property->image))
                                                    <img src="{{ Storage::url('property/' . $property->image) }}">
                                                    @else
                                                    <img src="{{ asset('zameen/house.png') }}">
                                                    @endif
                                                </div>
                                                <div class="card-text-warrper">
                                                    <div class="tag-img">
                                                        <img src=" {{ asset('zameen/assets/images/hot.jpeg') }}">
                                                    </div>
                                                    <div
                                                        class="heart-sec d-flex flex-row justify-content-between mt-3 align-items-center">
                                                        <h3>PKR {{ $property->price }}</h3>
                                                        <img src=" {{ asset('zameen/assets/images/favorited.png') }}">
                                                    </div>
                                                    <a href="{{ route('property.show', $property->slug) }}">
                                                        <div class="plan-text-sec d-flex flex-column gap-1 fixed-text">
                                                            <h3> {{ $property->title }} </h3>
                                                            <p>{{ ucfirst($property->city) }}</p>
                                                        </div>
                                                    </a>
                                                    <hr />
                                                    <div class="icons-section">
                                                        <div class="d-flex flex-row justify-content-between my-2">
                                                            <div class="d-flex flex-row gap-1 align-items-center">
                                                                <div>
                                                                    <img
                                                                        src=" {{ asset('zameen/assets/images/bed.png') }}" />
                                                                </div>
                                                                <p>{{ $property->bedroom }} Beds</p>
                                                            </div>
                                                            <div class="d-flex flex-row gap-1 align-items-center">
                                                                <div>
                                                                    <img
                                                                        src=" {{ asset('zameen/assets/images/bath.png') }}" />
                                                                </div>
                                                                <p>{{ $property->bathroom }} Bathrooms</p>
                                                            </div>
                                                            <div class="d-flex flex-row gap-1 align-items-center">
                                                                <div>
                                                                    <img
                                                                        src=" {{ asset('zameen/assets/images/SquareMeters.png') }}" />
                                                                </div>
                                                                <p>{{ $property->area }} marla</p>
                                                            </div>
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
                                            <div class="img-wraper">
                                                @if (!empty($property->image))
                                                <img src="{{ Storage::url('property/' . $property->image) }}">
                                                @else
                                                <img src="{{ asset('zameen/house.png') }}">
                                                @endif
                                            </div>
                                            <div class="card-text-warrper">
                                                <div class="tag-img">
                                                    <img src=" {{ asset('zameen/assets/images/featured.jpeg') }}">
                                                </div>
                                                <div
                                                    class="heart-sec d-flex flex-row justify-content-between mt-3 align-items-center">
                                                    <h3>PKR {{ $property->price }}</h3>
                                                    <img src=" {{ asset('zameen/assets/images/favorited.png') }}">
                                                </div>
                                                <a href="{{ route('property.show', $property->slug) }}">
                                                    <div class="plan-text-sec d-flex flex-column gap-1 fixed-text">
                                                        <h3> {{ $property->title }} </h3>
                                                        <p>{{ ucfirst($property->city) }}</p>
                                                    </div>
                                                </a>
                                                <hr />
                                                <div class="icons-section">
                                                    <div class="d-flex flex-row justify-content-between my-2">
                                                        <div class="d-flex flex-row gap-1 align-items-center">
                                                            <div>
                                                                <img
                                                                    src=" {{ asset('zameen/assets/images/bed.png') }}" />
                                                            </div>
                                                            <p>{{ $property->bedroom }} Beds</p>
                                                        </div>
                                                        <div class="d-flex flex-row gap-1 align-items-center">
                                                            <div>
                                                                <img
                                                                    src=" {{ asset('zameen/assets/images/bath.png') }}" />
                                                            </div>
                                                            <p>{{ $property->bathroom }} Bathrooms</p>
                                                        </div>
                                                        <div class="d-flex flex-row gap-1 align-items-center">
                                                            <div>
                                                                <img
                                                                    src=" {{ asset('zameen/assets/images/SquareMeters.png') }}" />
                                                            </div>
                                                            <p>{{ $property->area }} marla</p>
                                                        </div>
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



    <!-- email Modal -->
    <div class="modal fade" id="modalabcd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header py-2">
                    <h1 class="modal-title text-center flex-data" id="exampleModalLabel">Contact Agent</h1>
                    <button type="button" class="eae3ed68 dd4997fd" data-bs-dismiss="modal" aria-label="Close"><svg
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11 11" class="d570522f">
                            <title>Group</title>
                            <g id="Symbols">
                                <g id="iconCloseGrey" transform="translate(1)">
                                    <g id="Group">
                                        <path id="Path-3" class="st0" d="M-.5.5l10 10"></path>
                                        <path id="Path-3-Copy" class="st0" d="M9.5.5l-10 10"></path>
                                    </g>
                                </g>
                            </g>
                        </svg></button>
                </div>
                <div class="modal-body px-0">
                    <div class="_7c2f0053 _21a52b51 ">
                        <div class="_21a52b51">
                            <div class="_8a6934a7"><a
                                    href="/Profile/Lahore-AA_Marketing_Real_Estate_&amp;_Developers-174852-1.html">

                                    <img role="presentation" src=https://media.zameen.com/thumbnails/57556597-240x180.jpeg
                                        class=fad5cad0 alt=AA Marketing Real Estate & Developers title=AA Marketing Real
                                        Estate & Developers aria-label="Fallback listing photo" />

                                </a></div>
                            <span aria-label="Agency name" class="dd491f44 mt-2">AA Marketing Real Estate &amp;
                                Developers</span>
                        </div>
                        <div class="_6838d75c dd491f44 "><span>Agent:&nbsp;</span><span aria-label="Agent name"
                                class="_55e4cba0 fw-bold">Ijaz
                                Arshad Awan</span></div>
                        <div class="fdd1da9d dd491f44 ">Zameen - ID45312272</div>
                    </div>
                    <form action="">
                        <div class="d-flex flex-column gap-2 px-4 py-3">

                            <button class="_5b77d672 da62f2ae _8d1154ff call w-100 py-3" type="button"
                                aria-label="Call"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    viewBox="0 0 16 16" fill="#fff" class="_40c10793">
                                    <path
                                        d="M13.3 10.3A7.6 7.6 0 0 1 11 10a.7.7 0 0 0-.7.1l-1 1.4a10.1 10.1 0 0 1-4.6-4.6L6 5.7A.7.7 0 0 0 6 5a7.4 7.4 0 0 1-.3-2.3A.7.7 0 0 0 5 2H2.8c-.4 0-.8.2-.8.7A11.4 11.4 0 0 0 13.3 14a.7.7 0 0 0 .7-.8V11a.7.7 0 0 0-.7-.6z">
                                    </path>
                                </svg>&nbsp;Call</button>
                            <span class="_91cb2aa5">
                                <div class="_2b36c787 contactFormName b0f40a2e _45ca5e6b" tabindex="-1"><span
                                        class="_56bd145a">Name*</span>
                                    <div><input id="contactFormName" class="_24a2ee1a" name="name"></div>
                                </div>
                            </span>
                            <span class="_91cb2aa5">
                                <div class="_2b36c787 contactFormEmail b0f40a2e" tabindex="-1"><span
                                        class="_56bd145a">Email*</span>
                                    <div><input id="contactFormEmail" class="_24a2ee1a" name="email" value="">
                                    </div>
                                </div>
                            </span>
                            <span class="_91cb2aa5">
                                <div class="_2b36c787 contactFormEmail b0f40a2e" tabindex="-1"><span
                                        class="_56bd145a">PHONE*</span>
                                    <div><input id="contactFormEmail" class="_24a2ee1a" name="email" value="">
                                    </div>
                                </div>
                            </span>
                            <span class="_91cb2aa5">
                                <div class="_2b36c787 d144906e contactFormMessage b0f40a2e" tabindex="-1"><span
                                        class="_56bd145a">Message*</span>
                                    <textarea id="contactFormMessage" class="c9bb2bf9" name="message">I would like to inquire about your property Zameen - ID44640044. Please contact me at your earliest convenience.</textarea>
                                </div>
                            </span>
                            <div class="b36afaa8 d-flex algin-items-center gap-2"><span class="_073aa1bb">I am a:</span>
                                <div class="_08e2b88c d-flex algin-items-center gap-2">
                                    <label class="d5179a23  d-flex algin-items-center gap-1">
                                        <input type="radio" class="_70854eb7" name="userType" label="Buyer/Tenant"
                                            value="Buyer/Tenant" checked="">
                                        <span class="e0e619ea">Buyer/Tenant</span></label>
                                    <label class="d5179a23 d-flex algin-items-center gap-1">
                                        <input type="radio" class="_70854eb7" name="userType" label="Agent"
                                            value="Agent"><span class="e0e619ea">Agent</span></label>
                                    <label class="d5179a23 d-flex algin-items-center gap-1"><input type="radio"
                                            class="_70854eb7" name="userType" label="Other" value="Other"><span
                                            class="e0e619ea">Other</span></label>
                                </div>
                            </div>
                            <label class="_39d2b593 d-flex algin-items-center gap-1"><input type="checkbox"
                                    class="bed23f9f" name="keepMeInformed" value="" checked=""><span
                                    class="_66c1cbc2">Keep me informed about similar properties.</span></label>
                            <button class="_85d9f2e2 a8197536 a8375d37 send-email py-3" aria-label="Send email"
                                data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="e6b01fef">
                                    <path fill="#28B16E"
                                        d="M28.7 5.3H3.3A3.3 3.3 0 0 0 0 8.6v14.8c0 1.8 1.4 3.3 3.3 3.3h25.4c1.8 0 3.3-1.4 3.3-3.3V8.7c0-1.9-1.4-3.3-3.3-3.4zm-17 12l-8 6.6c-.3.1-.6.1-1-.2-.2-.3 0-.7.2-1l8-6.6c.3-.3.7-.1 1 .1.2.4.1.8-.2 1zm17.5 6.4c-.3.2-.6.3-1 0l-8-6.6c-.2-.1-.2-.5 0-.8 0-.3.6-.3.8 0l8 6.6c.4.1.4.5.2.8zm0-14.5l-11 7.5c-.6.4-1.4.6-2 .7-.9 0-1.6-.3-2.2-.7L3 9.2c-.4-.2-.4-.6-.2-.9.2-.3.6-.4 1-.2l10.8 7.5c.8.5 1.9.5 2.7 0l11-7.5c.2-.3.6-.1.8 0 .3.4.3.8 0 1z">
                                    </path>
                                </svg>
                                Send Email
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- call Modal -->
    <div class="modal fade" id="callexampleModal" tabindex="-1" aria-labelledby="callexampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header py-2">
                    <h1 class="modal-title text-center flex-data" id="callexampleModalLabel">Contact Us</h1>
                    <button type="button" class="eae3ed68 dd4997fd" data-bs-dismiss="modal" aria-label="Close"><svg
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11 11" class="d570522f">
                            <title>Group</title>
                            <g id="Symbols">
                                <g id="iconCloseGrey" transform="translate(1)">
                                    <g id="Group">
                                        <path id="Path-3" class="st0" d="M-.5.5l10 10"></path>
                                        <path id="Path-3-Copy" class="st0" d="M9.5.5l-10 10"></path>
                                    </g>
                                </g>
                            </g>
                        </svg></button>
                </div>
                <div class="modal-body px-4">
                    <div class="d-flex flex-column gap-1 text-center">
                        <span aria-label="Agent Name" class="f2186d94">Arif Danish</span>
                        <span aria-label="Agency Name" class="f2186d94">Syed Brothers (PVT) LTD</span>
                    </div>
                    <table class="f1b2ae85">
                        <tbody>
                            <tr class="ee306758">
                                <td><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 387.2 387.2" class="fa706c8a">
                                        <path
                                            d="M304.8 10.84v-.04A36.64 36.64 0 0 0 278.84 0H108.32A36.84 36.84 0 0 0 71.6 36.72v313.72c0 9.75 3.9 19.09 10.8 25.96a36.64 36.64 0 0 0 25.92 10.8h170.56a36.64 36.64 0 0 0 25.92-10.8 36.64 36.64 0 0 0 10.8-25.92V36.76a36.64 36.64 0 0 0-10.8-25.92zM193.6 362.28a9.92 9.92 0 1 1 0-19.84 9.92 9.92 0 0 1 0 19.84zM286.44 300a24 24 0 0 1-24 24H124.72a24 24 0 0 1-24-24V66.2a24 24 0 0 1 24-24h137.76a24 24 0 0 1 24 24l-.04 233.8z">
                                        </path>
                                    </svg></td>
                                <td class="ee1fcc1c">
                                    <div class="_50388868">mobile</div><a href="tel:+92-3334312693" class="_3bb2d41a"
                                        aria-label="Listing phone number"><span dir="ltr">+92-3334312693</span></a>
                                </td>
                                <td>
                                    <div class="_709887b9"><svg xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 469.333 469.333" class="_08fcfbf0">
                                            <path d="M330.67 0h-256A42.65 42.65 0 0 0 32 42.67v298.66h42.67V42.67h256V0z">
                                            </path>
                                            <path
                                                d="M394.67 85.33H160A42.66 42.66 0 0 0 117.33 128v298.67A42.66 42.66 0 0 0 160 469.33h234.67a42.66 42.66 0 0 0 42.66-42.66V128a42.66 42.66 0 0 0-42.66-42.67zm0 341.34H160V128h234.67v298.67z">
                                            </path>
                                        </svg>Copy</div>
                                </td>
                            </tr>
                            <tr class="ee306758">
                                <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        viewBox="0 0 16 16" class="fa706c8a">
                                        <path
                                            d="M13.3 10.3A7.6 7.6 0 0 1 11 10a.7.7 0 0 0-.7.1l-1 1.4a10.1 10.1 0 0 1-4.6-4.6L6 5.7A.7.7 0 0 0 6 5a7.4 7.4 0 0 1-.3-2.3A.7.7 0 0 0 5 2H2.8c-.4 0-.8.2-.8.7A11.4 11.4 0 0 0 13.3 14a.7.7 0 0 0 .7-.8V11a.7.7 0 0 0-.7-.6z">
                                        </path>
                                    </svg></td>
                                <td class="ee1fcc1c">
                                    <div class="_50388868">phone</div><a href="tel:+92-3229457902" class="_3bb2d41a"
                                        aria-label="Listing phone number"><span dir="ltr">+92-3229457902</span></a>
                                </td>
                                <td>
                                    <div class="_709887b9"><svg xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 469.333 469.333" class="_08fcfbf0">
                                            <path d="M330.67 0h-256A42.65 42.65 0 0 0 32 42.67v298.66h42.67V42.67h256V0z">
                                            </path>
                                            <path
                                                d="M394.67 85.33H160A42.66 42.66 0 0 0 117.33 128v298.67A42.66 42.66 0 0 0 160 469.33h234.67a42.66 42.66 0 0 0 42.66-42.66V128a42.66 42.66 0 0 0-42.66-42.67zm0 341.34H160V128h234.67v298.67z">
                                            </path>
                                        </svg>Copy</div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <span aria-label="Agency name" class="dd491f44 mt-2 text-center">AA Marketing Real Estate &amp;
                        Developers</span>
                    <div class="_6838d75c dd491f44 text-center"><span>Agent:&nbsp;</span><span aria-label="Agent name"
                            class="_55e4cba0 fw-bold">Ijaz
                            Arshad Awan</span></div>
                    <span aria-label="Agency name " class="dd491f44 text-center">AA Marketing Real Estate &amp;
                        Developers</span>
                    <div class="_16494b5b">
                        <div class="_6aab7f8f">Do you want more options? Finding the right property for you is easier
                            with notifications.</div>
                        <div class="f5e4f016">
                            <button class="eda28aeb  f4adafa3">I want to be
                                notified</button>
                            <button class="ae7192e1">Maybe Later</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('scripts')
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  
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
