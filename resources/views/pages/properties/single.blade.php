@extends('frontend.layouts.apps')

@push('styles')

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Property Detail</title>

    <!-- lightbox -->

    <link href="{{ asset('zameen/assets/css/stylepopup.css ') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('zameen/assets/css/lightgallery-bundle.css ') }}" />
</head>
@endpush
@section('content')
<!-- Banner-section -->
<section>
    <div class="wrapper-for-all mb-md-4 mb-3">
      <div class="custom-container">
        <div class="d-flex flex-row gap-2 py-4 justify-content-between align-items-center">
          <div class="d-flex flex-column gap-2  justify-content-between ">
          <p class="md-text">{{ $property->title }}</p>
                <a href="#">
                    <img src="{{ asset('zameen/assets/images/location.png ') }}" width="17px" height="22px">
                    <span class="show-on-map">Show on map</span>
                </a>
            </div>
          <a href="#" class="Save-search-button d-flex align-items-center gap-2">
            Home Loan</a>
        </div>
        <div class="row">
          <div class="col-12 col-md-6 col-lg-8">
          @if(!$property->gallery->isEmpty())
            <div id="carouselExample" class="carousel slide prop-detail-slider">
              <div class="carousel-inner">
            
                <div class="carousel-item active ">
                @foreach($property->gallery as $gallery)
                <img src="{{Storage::url('property/gallery/'.$gallery->name)}}" />
                  @endforeach

                  <div class="bottom-data d-flex flex-row justify-content-between align-items-center">
                    <div class="bg-light-black d-flex flex-row gap-1 align-items-center">
                      <span class="view-count-white">11</span>
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" class="white-svg">
                        <path fill="none" d="M0 0h16v16H0z"></path>
                        <g fill="#fff" data-name="Icon ionic-ios-camera">
                          <path d="M9.8 8.24a2.08 2.08 0 1 1-2.08-2.09 2.08 2.08 0 0 1 2.08 2.1z"></path>
                          <path
                            d="M13.57 4.06H11.6a.59.59 0 0 1-.44-.2c-1.03-1.15-1.4-1.54-1.83-1.54h-3.1c-.43 0-.84.4-1.88 1.55a.58.58 0 0 1-.43.2h-.14v-.3a.3.3 0 0 0-.29-.29h-.94c-.16 0-.3.13-.3.58H2A1.18 1.18 0 0 0 .77 5.18v6.37a1.25 1.25 0 0 0 1.21 1.2h11.6a1.16 1.16 0 0 0 1.1-1.2V5.17a1.08 1.08 0 0 0-1.1-1.1zm-5.7 7.26a3.1 3.1 0 1 1 2.95-2.95 3.1 3.1 0 0 1-2.95 2.95zm3.33-5.16a.47.47 0 1 1 .47-.47.47.47 0 0 1-.47.47z">
                          </path>
                        </g>
                      </svg>
                    </div>
                    <div class="bg-light-black d-flex flex-row gap-1 align-items-center">
                      <svg xmlns="http://www.w3.org/2000/svg" class="white-svg" viewBox="0 0 9 13"
                        style="width: 0.9rem; height: 0.8rem">
                        <path fill="#FFF"
                          d="M4.5 0C2 0 0 2 0 4.4 0 7.8 4.5 13 4.5 13S9 7.8 9 4.4C9 2 7 0 4.5 0zm0 6.3c-1.1 0-1.9-.9-1.9-1.9a2 2 0 0 1 1.9-1.9c1.1 0 1.9.8 1.9 1.9 0 1-.8 1.9-1.9 1.9z">
                        </path>
                      </svg>
                      <svg xmlns="http://www.w3.org/2000/svg" class="white-svg" viewBox="0 0 13 12"
                        style="width: 0.9rem; height: 1.2rem">
                        <path fill="#FFF"
                          d="M9.7 2V0L13 3.3 9.7 6.6V4.3c-3.9.5-5.8 4.8-5.8 4.8 0-3.6 2.5-6.7 5.8-7.1zm1.2 9.2H.8V2.5H7a12 12 0 0 1 2-.8H.4c-.2 0-.4.2-.4.4v9.5c0 .3.2.4.4.4h10.9c.2 0 .4-.2.4-.4V5.2l-.8.8v5.2z">
                        </path>
                      </svg>
                      <svg xmlns="http://www.w3.org/2000/svg" overflow="visible" viewBox="0 0 20 18.4" class="white-svg"
                        style="width: 0.9rem; height: 0.8rem">
                        <path
                          d="M10 18.4L8.6 17C3.4 12.4 0 9.3 0 5.5A5.5 5.5 0 0 1 5.5 0 6 6 0 0 1 10 2a6 6 0 0 1 4.5-2A5.5 5.5 0 0 1 20 5.5c0 3.8-3.4 6.9-8.6 11.5z">
                        </path>
                      </svg>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="assets/images/properties.jpg" class="d-block w-100" alt="...">
                  <div class="bottom-data d-flex flex-row justify-content-between align-items-center">
                    <div class="bg-light-black d-flex flex-row gap-1 align-items-center">
                      <span class="view-count-white">11</span>
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" class="white-svg">
                        <path fill="none" d="M0 0h16v16H0z"></path>
                        <g fill="#fff" data-name="Icon ionic-ios-camera">
                          <path d="M9.8 8.24a2.08 2.08 0 1 1-2.08-2.09 2.08 2.08 0 0 1 2.08 2.1z"></path>
                          <path
                            d="M13.57 4.06H11.6a.59.59 0 0 1-.44-.2c-1.03-1.15-1.4-1.54-1.83-1.54h-3.1c-.43 0-.84.4-1.88 1.55a.58.58 0 0 1-.43.2h-.14v-.3a.3.3 0 0 0-.29-.29h-.94c-.16 0-.3.13-.3.58H2A1.18 1.18 0 0 0 .77 5.18v6.37a1.25 1.25 0 0 0 1.21 1.2h11.6a1.16 1.16 0 0 0 1.1-1.2V5.17a1.08 1.08 0 0 0-1.1-1.1zm-5.7 7.26a3.1 3.1 0 1 1 2.95-2.95 3.1 3.1 0 0 1-2.95 2.95zm3.33-5.16a.47.47 0 1 1 .47-.47.47.47 0 0 1-.47.47z">
                          </path>
                        </g>
                      </svg>
                    </div>
                   
                    <div class="bg-light-black d-flex flex-row gap-1 align-items-center">
                      <svg xmlns="http://www.w3.org/2000/svg" class="white-svg" viewBox="0 0 9 13"
                        style="width: 0.9rem; height: 0.8rem">
                        <path fill="#FFF"
                          d="M4.5 0C2 0 0 2 0 4.4 0 7.8 4.5 13 4.5 13S9 7.8 9 4.4C9 2 7 0 4.5 0zm0 6.3c-1.1 0-1.9-.9-1.9-1.9a2 2 0 0 1 1.9-1.9c1.1 0 1.9.8 1.9 1.9 0 1-.8 1.9-1.9 1.9z">
                        </path>
                      </svg>
                      <svg xmlns="http://www.w3.org/2000/svg" class="white-svg" viewBox="0 0 13 12"
                        style="width: 0.9rem; height: 1.2rem">
                        <path fill="#FFF"
                          d="M9.7 2V0L13 3.3 9.7 6.6V4.3c-3.9.5-5.8 4.8-5.8 4.8 0-3.6 2.5-6.7 5.8-7.1zm1.2 9.2H.8V2.5H7a12 12 0 0 1 2-.8H.4c-.2 0-.4.2-.4.4v9.5c0 .3.2.4.4.4h10.9c.2 0 .4-.2.4-.4V5.2l-.8.8v5.2z">
                        </path>
                      </svg>
                      <svg xmlns="http://www.w3.org/2000/svg" overflow="visible" viewBox="0 0 20 18.4" class="white-svg"
                        style="width: 0.9rem; height: 0.8rem">
                        <path
                          d="M10 18.4L8.6 17C3.4 12.4 0 9.3 0 5.5A5.5 5.5 0 0 1 5.5 0 6 6 0 0 1 10 2a6 6 0 0 1 4.5-2A5.5 5.5 0 0 1 20 5.5c0 3.8-3.4 6.9-8.6 11.5z">
                        </path>
                      </svg>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="assets/images/properties.jpg" class="d-block w-100" alt="...">
                  <div class="bottom-data d-flex flex-row justify-content-between align-items-center">
                    <div class="bg-light-black d-flex flex-row gap-1 align-items-center">
                      <span class="view-count-white">11</span>
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" class="white-svg">
                        <path fill="none" d="M0 0h16v16H0z"></path>
                        <g fill="#fff" data-name="Icon ionic-ios-camera">
                          <path d="M9.8 8.24a2.08 2.08 0 1 1-2.08-2.09 2.08 2.08 0 0 1 2.08 2.1z"></path>
                          <path
                            d="M13.57 4.06H11.6a.59.59 0 0 1-.44-.2c-1.03-1.15-1.4-1.54-1.83-1.54h-3.1c-.43 0-.84.4-1.88 1.55a.58.58 0 0 1-.43.2h-.14v-.3a.3.3 0 0 0-.29-.29h-.94c-.16 0-.3.13-.3.58H2A1.18 1.18 0 0 0 .77 5.18v6.37a1.25 1.25 0 0 0 1.21 1.2h11.6a1.16 1.16 0 0 0 1.1-1.2V5.17a1.08 1.08 0 0 0-1.1-1.1zm-5.7 7.26a3.1 3.1 0 1 1 2.95-2.95 3.1 3.1 0 0 1-2.95 2.95zm3.33-5.16a.47.47 0 1 1 .47-.47.47.47 0 0 1-.47.47z">
                          </path>
                        </g>
                      </svg>
                    </div>
                    <div class="bg-light-black d-flex flex-row gap-1 align-items-center">
                      <svg xmlns="http://www.w3.org/2000/svg" class="white-svg" viewBox="0 0 9 13"
                        style="width: 0.9rem; height: 0.8rem">
                        <path fill="#FFF"
                          d="M4.5 0C2 0 0 2 0 4.4 0 7.8 4.5 13 4.5 13S9 7.8 9 4.4C9 2 7 0 4.5 0zm0 6.3c-1.1 0-1.9-.9-1.9-1.9a2 2 0 0 1 1.9-1.9c1.1 0 1.9.8 1.9 1.9 0 1-.8 1.9-1.9 1.9z">
                        </path>
                      </svg>
                      <svg xmlns="http://www.w3.org/2000/svg" class="white-svg" viewBox="0 0 13 12"
                        style="width: 0.9rem; height: 1.2rem">
                        <path fill="#FFF"
                          d="M9.7 2V0L13 3.3 9.7 6.6V4.3c-3.9.5-5.8 4.8-5.8 4.8 0-3.6 2.5-6.7 5.8-7.1zm1.2 9.2H.8V2.5H7a12 12 0 0 1 2-.8H.4c-.2 0-.4.2-.4.4v9.5c0 .3.2.4.4.4h10.9c.2 0 .4-.2.4-.4V5.2l-.8.8v5.2z">
                        </path>
                      </svg>
                      <svg xmlns="http://www.w3.org/2000/svg" overflow="visible" viewBox="0 0 20 18.4" class="white-svg"
                        style="width: 0.9rem; height: 0.8rem">
                        <path
                          d="M10 18.4L8.6 17C3.4 12.4 0 9.3 0 5.5A5.5 5.5 0 0 1 5.5 0 6 6 0 0 1 10 2a6 6 0 0 1 4.5-2A5.5 5.5 0 0 1 20 5.5c0 3.8-3.4 6.9-8.6 11.5z">
                        </path>
                      </svg>
                    </div>
                  </div>
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            @elseif(!empty( $property->location_latitude))
                        <iframe width="100%" height="500" frameborder="0" scrolling="no" marginheight="0"
                            marginwidth="0" loading="lazy"
                            src="https://maps.google.com/maps?q={{ $property->address }},{{ $property->location_latitude }},{{ $property->location_longitude }}&z=15&output=embed">
                        </iframe>

                        @elseif (!empty($property->image))
                        <div class="lg-img">
                            <img src="{{Storage::url('property/'.$property->image)}}">
                        </div>
                        @else
                        <div class="lg-img">
                            <img src="{{ asset('zameen/assets/images/signup-bg.png') }}">
                        </div>
                        @endif
            <div class="d-flex flex-row gap-5 my-4">
              <div class="d-flex flex-column gap-2 align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="svg-custom">
                  <g fill="none">
                    <path d="M0 0h24v24H0z"></path>
                    <g data-name="Icon awesome-bed">
                      <path
                        d="M8.4 11.8a2 2 0 1 0-2-2 2 2 0 0 0 2 2zm8.8-3.2h-5.6a.4.4 0 0 0-.4.4v3.6H5.6V7.4a.4.4 0 0 0-.4-.4h-.8a.4.4 0 0 0-.4.4v8.8a.4.4 0 0 0 .4.4h.8a.4.4 0 0 0 .4-.4V15h12.8v1.2a.4.4 0 0 0 .4.4h.8a.4.4 0 0 0 .4-.4v-4.8a2.8 2.8 0 0 0-2.8-2.8z">
                      </path>
                      <path fill="#000"
                        d="M13.2 10.6V13H18v-1.6a.8.8 0 0 0-.8-.8h-4M4.4 7h.8c.22 0 .4.18.4.4v5.2h5.6V9c0-.22.18-.4.4-.4h5.6a2.8 2.8 0 0 1 2.8 2.8v4.8a.4.4 0 0 1-.4.4h-.8a.4.4 0 0 1-.4-.4V15H5.6v1.2a.4.4 0 0 1-.4.4h-.8a.4.4 0 0 1-.4-.4V7.4c0-.22.18-.4.4-.4zm4 .8a2 2 0 1 1 0 4 2 2 0 0 1 0-4z">
                      </path>
                    </g>
                  </g>
                </svg>
                <span class="font-weight-500">{{ $property->bedroom }}</span>
              </div>
              <div class="d-flex flex-column gap-2 align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="svg-custom">
                  <g fill="none">
                    <g data-name="Icon awesome-bath">
                      <path
                        d="M19.25 12H6.5V7.5a1 1 0 0 1 1.84-.54 2.12 2.12 0 0 0 .22 2.6.38.38 0 0 0 0 .5l.37.37a.38.38 0 0 0 .53 0l2.97-2.98a.38.38 0 0 0 0-.52l-.36-.36a.38.38 0 0 0-.5-.01 2.12 2.12 0 0 0-2.02-.48A2.5 2.5 0 0 0 5 7.5V12h-.25a.75.75 0 0 0-.75.75v.5a.75.75 0 0 0 .75.75H5v1a3 3 0 0 0 1 2.24v1a.75.75 0 0 0 .75.76h.5a.75.75 0 0 0 .75-.75V18h8v.25a.75.75 0 0 0 .75.75h.5a.75.75 0 0 0 .75-.75v-1.01A3 3 0 0 0 19 15v-1h.25a.75.75 0 0 0 .75-.75v-.5a.75.75 0 0 0-.75-.75z">
                      </path>
                      <path fill="#000"
                        d="M7 14v1c0 .4.2.63.33.75l.29.25h8.76l.3-.25A1 1 0 0 0 17 15v-1H7m.5-9c.85 0 1.6.43 2.05 1.08a2.12 2.12 0 0 1 2 .48.37.37 0 0 1 .52 0l.36.37c.14.14.14.38 0 .53l-2.97 2.97a.38.38 0 0 1-.53 0l-.36-.36a.37.37 0 0 1 0-.5 2.12 2.12 0 0 1-.23-2.6 1 1 0 0 0-1.84.54v4.5h12.75c.4 0 .75.34.75.75v.5c0 .41-.34.75-.75.75H19v1a3 3 0 0 1-1 2.24v1c0 .42-.34.76-.75.76h-.5a.75.75 0 0 1-.75-.75v-.25H8v.25c0 .41-.34.75-.75.75h-.5a.75.75 0 0 1-.75-.76v-1.01A3 3 0 0 1 5 15v-1h-.25a.75.75 0 0 1-.75-.75v-.5c0-.4.34-.75.75-.75H5V7.5A2.5 2.5 0 0 1 7.5 5z">
                      </path>
                    </g>
                    <path d="M0 0h24v24H0z"></path>
                  </g>
                </svg>
                <span class="font-weight-500">{{ $property->bathroom }}</span>
              </div>
              <div class="d-flex flex-column gap-2 align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="svg-custom">
                  <path
                    d="M10.4 16.83L9.53 16 8.1 17.4 8 6.57l1.5 1.56.9-.95L7.23 4l-3.2 3.17.9.95 1.5-1.56.12 10.85-1.6-1.51-.92.93L7.22 20zm8.8 2.37a.8.8 0 0 0 .8-.8V5.6a.8.8 0 0 0-.8-.8h-4.8a.8.8 0 0 0-.8.8v12.8a.8.8 0 0 0 .8.8zm-.8-1.6h-3.2V16h1.6v-1.6h-1.6v-1.6h1.6v-1.6h-1.6V9.6h1.6V8h-1.6V6.4h3.2z">
                  </path>
                </svg>
                <span class="font-weight-500">702 sqft</span>
              </div>
            </div>
            <!-- sticky-navbar -->
            <div class="ba2c32de">
              <div class="">
                <div class="_23b128fb d-flex flex-row gap-2 flex-wrap" aria-label="Nav bar"><button class="_147317c5 active">Overview</button><button
                    class="_147317c5">Location &amp; Nearby</button><button class="_147317c5">Home
                    Finance</button><button class="_147317c5">Price Index</button><button
                    class="_147317c5">Trends</button>
                  <div class="_846c3783" style="display: none;">
                    <div class="f16e6e5e"><button class="efdddcd4"><svg xmlns="http://www.w3.org/2000/svg"
                          overflow="visible" viewBox="0 0 20 18.4" class="_51b1c3d3">
                          <path
                            d="M10 18.4L8.6 17C3.4 12.4 0 9.3 0 5.5A5.5 5.5 0 0 1 5.5 0 6 6 0 0 1 10 2a6 6 0 0 1 4.5-2A5.5 5.5 0 0 1 20 5.5c0 3.8-3.4 6.9-8.6 11.5z">
                          </path>
                        </svg></button></div><button class="_5b77d672 da62f2ae _147a2131" type="button"
                      aria-label="Call"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        viewBox="0 0 16 16" fill="#fff" class="_40c10793">
                        <path
                          d="M13.3 10.3A7.6 7.6 0 0 1 11 10a.7.7 0 0 0-.7.1l-1 1.4a10.1 10.1 0 0 1-4.6-4.6L6 5.7A.7.7 0 0 0 6 5a7.4 7.4 0 0 1-.3-2.3A.7.7 0 0 0 5 2H2.8c-.4 0-.8.2-.8.7A11.4 11.4 0 0 0 13.3 14a.7.7 0 0 0 .7-.8V11a.7.7 0 0 0-.7-.6z">
                        </path>
                      </svg>Call</button>
                  </div>
                </div>
              </div>
            </div>
            <p class="md-text py-3">Overview</p>
            <h3 class="sm-text ">Detail</h3>
            <div class="row">
              <div class="col-12 col-lg-6">
                <table class="table w-100 table-striped my-3">
                  <tbody>
                    <tr>
                      <td >Type</td>
                      <td>House</td>
                    </tr>
                    <tr>
                      <td >Price</td>
                      <td>Price: {{ $property->price }}</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="col-12 col-lg-6">
                <table class="table w-100 table-striped my-3">
                  <tbody>
                    <tr>
                      <td >Type</td>
                      <td>House</td>
                    </tr>
                    <tr>
                      <td >Price</td>
                      <td>Price: {{ $property->price }}</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <article>
                <div class="custom-container">
                  <div class="artical-wrapper d-flex flex-column gap-2">
                    <h3>Description</h3>
                    <p>
                    {!! $property->description !!}
                    </p>
                  
                  </div>
                </div>
            
            </article>
          </div>
          <div class="col-12 col-md-6 col-lg-4">
          <form action="{{ route('property.message') }}" method="post" method="POST" class="detail-form">
                            @csrf
                            <input type="hidden" name="agent_id" value="{{ $property->user->id }}">
                            <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                            <input type="hidden" name="property_id" value="{{ $property->id }}">
                            <div class="detail-form-inner">
                                <span class="create-head text-start d-inline-block pb-2">Contact with Agent</span>
                                <div class="d-flex flex-row gap-2 my-4">
                                    <button
                                        onclick="callwithagent('{{ $property->random_id }}','{{ $property->title }}','{{ $property->user->phone_number }}','{{ $property->user->mobile_number }}','{{ $property->user->name }}','{{ $property->user->username }}')"
                                        class="_5b77d672 da62f2ae _8d1154ff call btn" type="button" aria-label="Call"
                                        data-bs-toggle="modal" data-bs-target="#callexampleModal"
                                        style="background-color: #041E42; color: white;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 16 16" fill="#fff" class="_40c10793" aria-label="Send email">
                                            <path
                                                d="M13.3 10.3A7.6 7.6 0 0 1 11 10a.7.7 0 0 0-.7.1l-1 1.4a10.1 10.1 0 0 1-4.6-4.6L6 5.7A.7.7 0 0 0 6 5a7.4 7.4 0 0 1-.3-2.3A.7.7 0 0 0 5 2H2.8c-.4 0-.8.2-.8.7A11.4 11.4 0 0 0 13.3 14a.7.7 0 0 0 .7-.8V11a.7.7 0 0 0-.7-.6z">
                                            </path>
                                        </svg>&nbsp;CALL
                                    </button>

                                    <button
                                        onclick="emailwithagent('{{ $property->random_id }}','{{ $property->title }}','{{ $property->user->phone_number }}','{{ $property->user->mobile_number }}','{{ $property->user->name }}','{{ $property->user->username }}','{{ $property->agent_id }}','{{ $property->id }}')"
                                        class="_85d9f2e2 a8197536 a8375d37 send-email" aria-label="Send email"
                                        data-bs-toggle="modal" data-bs-target="#modalabcd"
                                        style="background-color: #041E42;">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="e6b01fef">
                                            <path fill="#6CACE3"
                                                d="M28.7 5.3H3.3A3.3 3.3 0 0 0 0 8.6v14.8c0 1.8 1.4 3.3 3.3 3.3h25.4c1.8 0 3.3-1.4 3.3-3.3V8.7c0-1.9-1.4-3.3-3.3-3.4zm-17 12l-8 6.6c-.3.1-.6.1-1-.2-.2-.3 0-.7.2-1l8-6.6c.3-.3.7-.1 1 .1.2.4.1.8-.2 1zm17.5 6.4c-.3.2-.6.3-1 0l-8-6.6c-.2-.1-.2-.5 0-.8 0-.3.6-.3.8 0l8 6.6c.4.1.4.5.2.8zm0-14.5l-11 7.5c-.6.4-1.4.6-2 .7-.9 0-1.6-.3-2.2-.7L3 9.2c-.4-.2-.4-.6-.2-.9.2-.3.6-.4 1-.2l10.8 7.5c.8.5 1.9.5 2.7 0l11-7.5c.2-.3.6-.1.8 0 .3.4.3.8 0 1z">
                                            </path>
                                        </svg>
                                    </button>
                                    <!-- whatsapp backend Api -->
                                    @php
                                    $propertyTitle = $property->title;
                                    $propertyLink = route('property.show', [$property->slug, $property->random_id]);
                                    $agentnumber = $property->user->phone_number;
                                    $whatsappMessage = 'Check out this property: ' . urlencode($propertyTitle) . ' ' .
                                    urlencode($propertyLink);
                                    $whatsappLink = 'https://api.whatsapp.com/send?phone=' . $agentnumber . '&text=' .
                                    $whatsappMessage;
                                    @endphp
                                    <button class="_5b77d672 da62f2ae _8d1154ff call btn" type="button"
                                        style="background-color: #041E42; color: white;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 16 16" fill="#fff" class="_40c10793">
                                            <path
                                                d="M13.3 10.3A7.6 7.6 0 0 1 11 10a.7.7 0 0 0-.7.1l-1 1.4a10.1 10.1 0 0 1-4.6-4.6L6 5.7A.7.7 0 0 0 6 5a7.4 7.4 0 0 1-.3-2.3A.7.7 0 0 0 5 2H2.8c-.4 0-.8.2-.8.7A11.4 11.4 0 0 0 13.3 14a.7.7 0 0 0 .7-.8V11a.7.7 0 0 0-.7-.6z">
                                            </path>
                                        </svg>
                                        <a href="{{ $whatsappLink }}" class="whatsapp-link">
                                            <span>Whatsapp</span>
                                        </a>
                                </div>
                                <div class="d-flex flex-column gap-2">
                                    <div class="_2b36c787 contactFormName _45ca5e6b" tabindex="-1"><span
                                            class="_56bd145a">NAME*</span>
                                        <div><input id="" class="_24a2ee1a" name="name" value="" type="h"
                                                placeholder="Enter your Name here"></div>
                                    </div>
                                    <div class="_2b36c787 contactFormName _45ca5e6b" tabindex="-1"><span
                                            class="_56bd145a">EMAIL*</span>
                                        <div><input id="contactFormName" class="_24a2ee1a" name="name" value=""
                                                type="email" placeholder="Enter your Email here"></div>
                                    </div>
                                    <div class="_2b36c787 contactFormName _45ca5e6b" tabindex="-1"><span
                                            class="_56bd145a">PHONE*</span>
                                        <div><input id="contactFormName" class="_24a2ee1a" name="name" value=""
                                                type="number" placeholder="Enter your Phone Number here"></div>
                                    </div>
                                    <div class="_2b36c787 contactFormName _45ca5e6b" tabindex="-1"><span
                                            class="_56bd145a">MESSAGE*</span>
                                        <div><textarea id="contactFormName" class="_24a2ee1a" name="name" value=""
                                                type="text" cols="3" placeholder="Your Message"></textarea></div>
                                    </div>
                                </div>
                                <div class="d-flex flex-row gap-2 align-items-center my-3">
                                    <span class="prop-count">
                                        I'm a :
                                    </span>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios"
                                            id="exampleRadios1" value="option1" checked>
                                        <label class="form-check-label prop-count" for="exampleRadios1">
                                            Default radio
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios"
                                            id="exampleRadios2" value="option1" checked>
                                        <label class="form-check-label prop-count" for="exampleRadios2">
                                            Default radio
                                        </label>
                                    </div>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label prop-count" for="flexCheckDefault">
                                        Keep me informed about similar properties.
                                    </label>
                                </div>
                                <input type="submit" name="" id="" value="SEND MESSAGE"
                                    class="submmit m-0 rounded-2 mt-3">
                            </div>

                        </form>
            <article class="mt-5">
            <div class="artical-wrapper d-flex flex-column gap-2">
              <h3>USEFUL LINKS</h3>
              <div class="d-flex flex-column gap-2 usefull-links">
                <a href="#">Property for sale in Lahore</a>
                <a href="#">1 Kanal Houses for sale in DHA Defence</a>
                <a href="#">Property for sale in Lahore</a>
                <a href="#">1 Kanal Houses for sale in DHA Defence</a>
                <a href="#">Property for sale in Lahore</a>
                <a href="#">1 Kanal Houses for sale in DHA Defence</a>
              </div>
            
            </div>
          </article>
</div>
</div>



@include('frontend.partials.modelsjs')
@include('frontend.partials.models')


</section>
<div class="my-4">
    <p class="md-text">Similar Houses by Home Real Estate & Builders</p>
</div>
<ul class="properties-cards">
    <!-- super-hot -->
    <li class="prop-card-child super-hot">
        <div id="propcardsliderhot" class="carousel slide pointer-event" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item">
                    <div class="image-wrapper position-relative">
                        <figure class="m-0">
                            <img src=" {{ asset('zameen/assets/images/cover-photo.png') }}" />
                        </figure>
                        <div class="top-data d-flex flex-row justify-content-between align-items-center">
                            <label class="super-hot-label">super hot</label>
                            <label class="titanium">Titanium</label>
                        </div>
                        <div class="bottom-data d-flex flex-row justify-content-between align-items-center">
                            <div class="bg-light-black d-flex flex-row gap-1 align-items-center">
                                <span class="view-count-white">11</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" class="white-svg">
                                    <path fill="none" d="M0 0h16v16H0z"></path>
                                    <g fill="#fff" data-name="Icon ionic-ios-camera">
                                        <path d="M9.8 8.24a2.08 2.08 0 1 1-2.08-2.09 2.08 2.08 0 0 1 2.08 2.1z"></path>
                                        <path
                                            d="M13.57 4.06H11.6a.59.59 0 0 1-.44-.2c-1.03-1.15-1.4-1.54-1.83-1.54h-3.1c-.43 0-.84.4-1.88 1.55a.58.58 0 0 1-.43.2h-.14v-.3a.3.3 0 0 0-.29-.29h-.94c-.16 0-.3.13-.3.58H2A1.18 1.18 0 0 0 .77 5.18v6.37a1.25 1.25 0 0 0 1.21 1.2h11.6a1.16 1.16 0 0 0 1.1-1.2V5.17a1.08 1.08 0 0 0-1.1-1.1zm-5.7 7.26a3.1 3.1 0 1 1 2.95-2.95 3.1 3.1 0 0 1-2.95 2.95zm3.33-5.16a.47.47 0 1 1 .47-.47.47.47 0 0 1-.47.47z">
                                        </path>
                                    </g>
                                </svg>
                            </div>
                            <div class="bg-light-black d-flex flex-row gap-1 align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="white-svg" viewBox="0 0 9 13"
                                    style="width: 0.9rem; height: 0.8rem">
                                    <path fill="#FFF"
                                        d="M4.5 0C2 0 0 2 0 4.4 0 7.8 4.5 13 4.5 13S9 7.8 9 4.4C9 2 7 0 4.5 0zm0 6.3c-1.1 0-1.9-.9-1.9-1.9a2 2 0 0 1 1.9-1.9c1.1 0 1.9.8 1.9 1.9 0 1-.8 1.9-1.9 1.9z">
                                    </path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="white-svg" viewBox="0 0 13 12"
                                    style="width: 0.9rem; height: 1.2rem">
                                    <path fill="#FFF"
                                        d="M9.7 2V0L13 3.3 9.7 6.6V4.3c-3.9.5-5.8 4.8-5.8 4.8 0-3.6 2.5-6.7 5.8-7.1zm1.2 9.2H.8V2.5H7a12 12 0 0 1 2-.8H.4c-.2 0-.4.2-.4.4v9.5c0 .3.2.4.4.4h10.9c.2 0 .4-.2.4-.4V5.2l-.8.8v5.2z">
                                    </path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" overflow="visible" viewBox="0 0 20 18.4"
                                    class="white-svg" style="width: 0.9rem; height: 0.8rem">
                                    <path
                                        d="M10 18.4L8.6 17C3.4 12.4 0 9.3 0 5.5A5.5 5.5 0 0 1 5.5 0 6 6 0 0 1 10 2a6 6 0 0 1 4.5-2A5.5 5.5 0 0 1 20 5.5c0 3.8-3.4 6.9-8.6 11.5z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <!-- slider -->
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="image-wrapper position-relative">
                        <figure class="m-0">

                            <img src=" {{ asset('zameen/assets/images/signup-bg.png') }}" />
                        </figure>
                        <div class="top-data d-flex flex-row justify-content-between align-items-center">
                            <label class="super-hot-label">super hot</label>
                            <label class="titanium">Titanium</label>
                        </div>
                        <div class="bottom-data d-flex flex-row justify-content-between align-items-center">
                            <div class="bg-light-black d-flex flex-row gap-1 align-items-center">
                                <span class="view-count-white">11</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" class="white-svg">
                                    <path fill="none" d="M0 0h16v16H0z"></path>
                                    <g fill="#fff" data-name="Icon ionic-ios-camera">
                                        <path d="M9.8 8.24a2.08 2.08 0 1 1-2.08-2.09 2.08 2.08 0 0 1 2.08 2.1z"></path>
                                        <path
                                            d="M13.57 4.06H11.6a.59.59 0 0 1-.44-.2c-1.03-1.15-1.4-1.54-1.83-1.54h-3.1c-.43 0-.84.4-1.88 1.55a.58.58 0 0 1-.43.2h-.14v-.3a.3.3 0 0 0-.29-.29h-.94c-.16 0-.3.13-.3.58H2A1.18 1.18 0 0 0 .77 5.18v6.37a1.25 1.25 0 0 0 1.21 1.2h11.6a1.16 1.16 0 0 0 1.1-1.2V5.17a1.08 1.08 0 0 0-1.1-1.1zm-5.7 7.26a3.1 3.1 0 1 1 2.95-2.95 3.1 3.1 0 0 1-2.95 2.95zm3.33-5.16a.47.47 0 1 1 .47-.47.47.47 0 0 1-.47.47z">
                                        </path>
                                    </g>
                                </svg>
                            </div>
                            <div class="bg-light-black d-flex flex-row gap-1 align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="white-svg" viewBox="0 0 9 13"
                                    style="width: 0.9rem; height: 0.8rem">
                                    <path fill="#FFF"
                                        d="M4.5 0C2 0 0 2 0 4.4 0 7.8 4.5 13 4.5 13S9 7.8 9 4.4C9 2 7 0 4.5 0zm0 6.3c-1.1 0-1.9-.9-1.9-1.9a2 2 0 0 1 1.9-1.9c1.1 0 1.9.8 1.9 1.9 0 1-.8 1.9-1.9 1.9z">
                                    </path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="white-svg" viewBox="0 0 13 12"
                                    style="width: 0.9rem; height: 1.2rem">
                                    <path fill="#FFF"
                                        d="M9.7 2V0L13 3.3 9.7 6.6V4.3c-3.9.5-5.8 4.8-5.8 4.8 0-3.6 2.5-6.7 5.8-7.1zm1.2 9.2H.8V2.5H7a12 12 0 0 1 2-.8H.4c-.2 0-.4.2-.4.4v9.5c0 .3.2.4.4.4h10.9c.2 0 .4-.2.4-.4V5.2l-.8.8v5.2z">
                                    </path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" overflow="visible" viewBox="0 0 20 18.4"
                                    class="white-svg" style="width: 0.9rem; height: 0.8rem">
                                    <path
                                        d="M10 18.4L8.6 17C3.4 12.4 0 9.3 0 5.5A5.5 5.5 0 0 1 5.5 0 6 6 0 0 1 10 2a6 6 0 0 1 4.5-2A5.5 5.5 0 0 1 20 5.5c0 3.8-3.4 6.9-8.6 11.5z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <!-- slider -->
                    </div>
                </div>
                <div class="carousel-item active">
                    <div class="image-wrapper position-relative">
                        <img src=" {{ asset('zameen/assets/images/blog-placeholder.png') }}" />
                        </figure>
                        <div class="top-data d-flex flex-row justify-content-between align-items-center">
                            <label class="super-hot-label">super hot</label>
                            <label class="titanium">Titanium</label>
                        </div>
                        <div class="bottom-data d-flex flex-row justify-content-between align-items-center">
                            <div class="bg-light-black d-flex flex-row gap-1 align-items-center">
                                <span class="view-count-white">11</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" class="white-svg">
                                    <path fill="none" d="M0 0h16v16H0z"></path>
                                    <g fill="#fff" data-name="Icon ionic-ios-camera">
                                        <path d="M9.8 8.24a2.08 2.08 0 1 1-2.08-2.09 2.08 2.08 0 0 1 2.08 2.1z"></path>
                                        <path
                                            d="M13.57 4.06H11.6a.59.59 0 0 1-.44-.2c-1.03-1.15-1.4-1.54-1.83-1.54h-3.1c-.43 0-.84.4-1.88 1.55a.58.58 0 0 1-.43.2h-.14v-.3a.3.3 0 0 0-.29-.29h-.94c-.16 0-.3.13-.3.58H2A1.18 1.18 0 0 0 .77 5.18v6.37a1.25 1.25 0 0 0 1.21 1.2h11.6a1.16 1.16 0 0 0 1.1-1.2V5.17a1.08 1.08 0 0 0-1.1-1.1zm-5.7 7.26a3.1 3.1 0 1 1 2.95-2.95 3.1 3.1 0 0 1-2.95 2.95zm3.33-5.16a.47.47 0 1 1 .47-.47.47.47 0 0 1-.47.47z">
                                        </path>
                                    </g>
                                </svg>
                            </div>
                            <div class="bg-light-black d-flex flex-row gap-1 align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="white-svg" viewBox="0 0 9 13"
                                    style="width: 0.9rem; height: 0.8rem">
                                    <path fill="#FFF"
                                        d="M4.5 0C2 0 0 2 0 4.4 0 7.8 4.5 13 4.5 13S9 7.8 9 4.4C9 2 7 0 4.5 0zm0 6.3c-1.1 0-1.9-.9-1.9-1.9a2 2 0 0 1 1.9-1.9c1.1 0 1.9.8 1.9 1.9 0 1-.8 1.9-1.9 1.9z">
                                    </path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="white-svg" viewBox="0 0 13 12"
                                    style="width: 0.9rem; height: 1.2rem">
                                    <path fill="#FFF"
                                        d="M9.7 2V0L13 3.3 9.7 6.6V4.3c-3.9.5-5.8 4.8-5.8 4.8 0-3.6 2.5-6.7 5.8-7.1zm1.2 9.2H.8V2.5H7a12 12 0 0 1 2-.8H.4c-.2 0-.4.2-.4.4v9.5c0 .3.2.4.4.4h10.9c.2 0 .4-.2.4-.4V5.2l-.8.8v5.2z">
                                    </path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" overflow="visible" viewBox="0 0 20 18.4"
                                    class="white-svg" style="width: 0.9rem; height: 0.8rem">
                                    <path
                                        d="M10 18.4L8.6 17C3.4 12.4 0 9.3 0 5.5A5.5 5.5 0 0 1 5.5 0 6 6 0 0 1 10 2a6 6 0 0 1 4.5-2A5.5 5.5 0 0 1 20 5.5c0 3.8-3.4 6.9-8.6 11.5z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <!-- slider -->
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev min-slider" type="button" data-bs-target="#propcardsliderhot"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" class="slider-svg back"
                        viewBox="0 0 32 32">
                        <path
                            d="M7.55 3.36c-.8-.8-.7-2.1.1-2.8.8-.7 2-.7 2.7 0l14 14c.8.8.8 2 0 2.8l-14 14c-.8.8-2 .8-2.8.1-.8-.8-.8-2-.1-2.8l.1-.1 12.6-12.5-12.6-12.7z">
                        </path>
                    </svg>
                </span>
                <span class="visually-hidden"> </span>
            </button>
            <button class="carousel-control-next min-slider" type="button" data-bs-target="#propcardsliderhot"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" class="slider-svg"
                        viewBox="0 0 32 32">
                        <path
                            d="M7.55 3.36c-.8-.8-.7-2.1.1-2.8.8-.7 2-.7 2.7 0l14 14c.8.8.8 2 0 2.8l-14 14c-.8.8-2 .8-2.8.1-.8-.8-.8-2-.1-2.8l.1-.1 12.6-12.5-12.6-12.7z">
                        </path>
                    </svg>
                </span>
                <span class="visually-hidden"> </span>
            </button>
        </div>
        <div class="card-body-custom">
            <div class="d-flex flex-row justify-content-between gap-2">
                <span class="prop-count">Added: 33 minutes ago</span>
                <div class="d-flex flex-row gap-1 align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="c1a24809" viewBox="0 0 32 32"
                        style="width: 1rem; height: 1rem">
                        <g fill="#C32C2B">
                            <path
                                d="M6.4 27.4h-.2l-.1-.3c-3-3.8-3.5-8.4-1.6-13.6-.6-1-1-2-1.1-3.2l-.2-.3-.3.1c-2.6 4.3-4.8 10.6-.5 16 1.8 1.8 4.3 3 6.9 3.3a8 8 0 0 1-2.9-2z">
                            </path>
                            <path
                                d="M15.6 29.6c-3.1.1-6.1-1-8.3-3.3-4.3-5.4-2.1-11.7.5-16h.4c.1 0 .2 0 .2.2.1 1.7.8 3.2 2 4.4.4-1.4 1.1-2.8 2-4 1.8-2.3 2.5-5.2 2-8l.2-.4h.1l.2.1.5.6c1.2 1.4 2.3 3 3.2 4.5.9 2 1.5 3.8 1.8 6 .7-.6 1.3-1.3 1.7-2 .3-1 .3-2-.1-3l.1-.4h.4a16 16 0 0 1 4.9 11.8 10 10 0 0 1-6.8 9c-1.7.3-3.3.5-5 .5zm-.9-13.8c-.8.8-1.5 1.8-2.1 2.8a9.1 9.1 0 0 0-1.4 4.2c0 3.6 2 6.2 4.6 6.2 1.4 0 2.8-.6 3.7-1.7 1-1 1.4-2.7 1.2-4.2-.4-1.6-1.1-3.2-2.2-4.5-.2.6-.5 1.1-.9 1.5l-.6.5h-.1c-.5 0-.9-.3-1.3-.7a5.8 5.8 0 0 1-.9-4z">
                            </path>
                            <path
                                d="M31.9 18a15 15 0 0 0-4.8-9.8h-.4c-.1.1-.2.2-.1.3.3 1 .4 2 .1 3l-.1.1c1 2 1.7 4.1 1.9 6.3.6 4.7-1.8 9.4-6 11.6.9 0 1.8-.3 2.7-.6C29 27.5 31.7 24 32 20l-.1-2z">
                            </path>
                        </g>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" aria-label="Trusted badge"
                        style="width: 1rem; height: 1rem">
                        <g fill="#34A048">
                            <path
                                d="M25.3 16.8V6.5l-5-1.3-4.1-1h-.3l-4 1c-1.8.3-3.5.8-5.3 1.2V17c-.1 2.1.7 4.2 2 5.8 2 2.3 4.5 4.1 7.2 5.2 2.5-1 4.7-2.5 6.6-4.4 2-1.7 3-4.2 2.9-6.7zm-3.2-4.4l-2.5 3.2-4 5.2c-.8 1-1.3 1-2.1 0L9.9 16a1 1 0 0 1 0-1.5c.4-.4 1.1-.3 1.5.1l2.6 2.3.6.5.3-.5 5.6-5.5.7-.5c.4 0 .9.1 1.1.5.1.2.1.7-.2 1.1z">
                            </path>
                            <path
                                d="M29.1 16.8V5a2 2 0 0 0-1.7-2.2l-6-1.5L16.8.1h-1.7l-4.5 1.1-6.1 1.5C3.5 3 2.7 4 2.8 5v11.9c-.1 3 1 6 2.9 8.2a25 25 0 0 0 9.3 6.7l.9.2c.3 0 .7 0 1-.2a24 24 0 0 0 8.4-5.7c2.6-2.3 4-5.7 3.8-9.2zm-4.8 8.5c-2.3 2.3-5 4.1-7.9 5.3-.2.1-.5.1-.8 0a22 22 0 0 1-8.8-6.3c-1.8-2-2.7-4.7-2.6-7.4V5c0-.5.1-.8.6-.9l10.6-2.6h1C20 2.4 23.5 3.2 27 4c.5.1.6.4.6.8v11.8c.3 3.4-1 6.5-3.3 8.7z">
                            </path>
                        </g>
                    </svg>
                </div>
            </div>
            <div class="d-flex flex-column gap-1 my-3">
                <p class="prop-price-text"><span>PKR</span> 1.48 Crore</p>
                <p class="prop-price-text line-clamp-one">
                    Park View City, Lahore
                </p>
            </div>
            <div class="d-flex flex-row gap-2">
                <div class="d-flex flex-row gap-1 align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="svg-custom">
                        <g fill="none">
                            <path d="M0 0h24v24H0z"></path>
                            <g data-name="Icon awesome-bed">
                                <path
                                    d="M8.4 11.8a2 2 0 1 0-2-2 2 2 0 0 0 2 2zm8.8-3.2h-5.6a.4.4 0 0 0-.4.4v3.6H5.6V7.4a.4.4 0 0 0-.4-.4h-.8a.4.4 0 0 0-.4.4v8.8a.4.4 0 0 0 .4.4h.8a.4.4 0 0 0 .4-.4V15h12.8v1.2a.4.4 0 0 0 .4.4h.8a.4.4 0 0 0 .4-.4v-4.8a2.8 2.8 0 0 0-2.8-2.8z">
                                </path>
                                <path fill="#000"
                                    d="M13.2 10.6V13H18v-1.6a.8.8 0 0 0-.8-.8h-4M4.4 7h.8c.22 0 .4.18.4.4v5.2h5.6V9c0-.22.18-.4.4-.4h5.6a2.8 2.8 0 0 1 2.8 2.8v4.8a.4.4 0 0 1-.4.4h-.8a.4.4 0 0 1-.4-.4V15H5.6v1.2a.4.4 0 0 1-.4.4h-.8a.4.4 0 0 1-.4-.4V7.4c0-.22.18-.4.4-.4zm4 .8a2 2 0 1 1 0 4 2 2 0 0 1 0-4z">
                                </path>
                            </g>
                        </g>
                    </svg>
                    <span class="font-weight-500">3</span>

                </div>
                <div class="d-flex flex-row gap-1 align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="svg-custom">
                        <g fill="none">
                            <g data-name="Icon awesome-bath">
                                <path
                                    d="M19.25 12H6.5V7.5a1 1 0 0 1 1.84-.54 2.12 2.12 0 0 0 .22 2.6.38.38 0 0 0 0 .5l.37.37a.38.38 0 0 0 .53 0l2.97-2.98a.38.38 0 0 0 0-.52l-.36-.36a.38.38 0 0 0-.5-.01 2.12 2.12 0 0 0-2.02-.48A2.5 2.5 0 0 0 5 7.5V12h-.25a.75.75 0 0 0-.75.75v.5a.75.75 0 0 0 .75.75H5v1a3 3 0 0 0 1 2.24v1a.75.75 0 0 0 .75.76h.5a.75.75 0 0 0 .75-.75V18h8v.25a.75.75 0 0 0 .75.75h.5a.75.75 0 0 0 .75-.75v-1.01A3 3 0 0 0 19 15v-1h.25a.75.75 0 0 0 .75-.75v-.5a.75.75 0 0 0-.75-.75z">
                                </path>
                                <path fill="#000"
                                    d="M7 14v1c0 .4.2.63.33.75l.29.25h8.76l.3-.25A1 1 0 0 0 17 15v-1H7m.5-9c.85 0 1.6.43 2.05 1.08a2.12 2.12 0 0 1 2 .48.37.37 0 0 1 .52 0l.36.37c.14.14.14.38 0 .53l-2.97 2.97a.38.38 0 0 1-.53 0l-.36-.36a.37.37 0 0 1 0-.5 2.12 2.12 0 0 1-.23-2.6 1 1 0 0 0-1.84.54v4.5h12.75c.4 0 .75.34.75.75v.5c0 .41-.34.75-.75.75H19v1a3 3 0 0 1-1 2.24v1c0 .42-.34.76-.75.76h-.5a.75.75 0 0 1-.75-.75v-.25H8v.25c0 .41-.34.75-.75.75h-.5a.75.75 0 0 1-.75-.76v-1.01A3 3 0 0 1 5 15v-1h-.25a.75.75 0 0 1-.75-.75v-.5c0-.4.34-.75.75-.75H5V7.5A2.5 2.5 0 0 1 7.5 5z">
                                </path>
                            </g>
                            <path d="M0 0h24v24H0z"></path>
                        </g>
                    </svg>
                    <span class="font-weight-500">4</span>
                </div>
                <div class="d-flex flex-row gap-1 align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="svg-custom">
                        <path
                            d="M10.4 16.83L9.53 16 8.1 17.4 8 6.57l1.5 1.56.9-.95L7.23 4l-3.2 3.17.9.95 1.5-1.56.12 10.85-1.6-1.51-.92.93L7.22 20zm8.8 2.37a.8.8 0 0 0 .8-.8V5.6a.8.8 0 0 0-.8-.8h-4.8a.8.8 0 0 0-.8.8v12.8a.8.8 0 0 0 .8.8zm-.8-1.6h-3.2V16h1.6v-1.6h-1.6v-1.6h1.6v-1.6h-1.6V9.6h1.6V8h-1.6V6.4h3.2z">
                        </path>
                    </svg>
                    <span class="font-weight-500">Marla</span>
                </div>
            </div>
            <div class="mt-2">
                <p class="prop-price-text line-clamp-one font-weight-400 font-size-14 detial-text-top">
                    Park View City, Lahore
                </p>
                <div class="detail-text flex-row align-items-center">
                    <div class="cf36e19e">
                        <span class="b779b320">Lake City Lahore Covered over an a</span>
                    </div>
                    ...<a href="#" class="_6e9f9ae0 d-inline-block">more</a>
                </div>
            </div>
            <div class="d-flex justify-content-between gap-1">
                <div class="card-btns d-flex flex-row gap-2 align-items-end mt-1">
                    <button class="email-msg-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" style="height: 1.1rem; width: 1rem">
                            <path fill="#041E42"
                                d="M28.7 5.3H3.3A3.3 3.3 0 0 0 0 8.6v14.8c0 1.8 1.4 3.3 3.3 3.3h25.4c1.8 0 3.3-1.4 3.3-3.3V8.7c0-1.9-1.4-3.3-3.3-3.4zm-17 12l-8 6.6c-.3.1-.6.1-1-.2-.2-.3 0-.7.2-1l8-6.6c.3-.3.7-.1 1 .1.2.4.1.8-.2 1zm17.5 6.4c-.3.2-.6.3-1 0l-8-6.6c-.2-.1-.2-.5 0-.8 0-.3.6-.3.8 0l8 6.6c.4.1.4.5.2.8zm0-14.5l-11 7.5c-.6.4-1.4.6-2 .7-.9 0-1.6-.3-2.2-.7L3 9.2c-.4-.2-.4-.6-.2-.9.2-.3.6-.4 1-.2l10.8 7.5c.8.5 1.9.5 2.7 0l11-7.5c.2-.3.6-.1.8 0 .3.4.3.8 0 1z">
                            </path>
                        </svg>
                    </button>
                    <button class="email-msg-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" data-name="Group 5" viewBox="0 0 20 20"
                            style="height: 1.3rem; width: 1.3rem">
                            <path fill="none" d="M0 0h20v20H0z"></path>
                            <path fill="#041E42"
                                d="M10 3.6a6.4 6.4 0 0 0-5.18 10.15l-.8 2.38 2.46-.79A6.4 6.4 0 1 0 10 3.6z"></path>
                            <path fill="#fafafa"
                                d="M13.83 12.72a1.86 1.86 0 0 1-1.3.93c-.34.08-.79.13-2.3-.5a8.26 8.26 0 0 1-3.27-2.9 3.79 3.79 0 0 1-.78-2 2.12 2.12 0 0 1 .67-1.61.95.95 0 0 1 .67-.24h.22c.2.02.3.03.42.34l.6 1.43a.4.4 0 0 1 .02.35 1.14 1.14 0 0 1-.21.3c-.1.12-.2.2-.29.32-.09.1-.19.22-.08.42a5.87 5.87 0 0 0 1.07 1.33 4.83 4.83 0 0 0 1.54.96.41.41 0 0 0 .47-.08 8 8 0 0 0 .51-.68.37.37 0 0 1 .47-.15c.18.07 1.12.53 1.32.63s.32.14.36.23a1.66 1.66 0 0 1-.11.92z">
                            </path>
                        </svg>
                    </button>
                    <button class="call-btn d-flex flex-row align-items-center gap-md-2 gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="#fff"
                            class="_40c10793">
                            <path
                                d="M13.3 10.3A7.6 7.6 0 0 1 11 10a.7.7 0 0 0-.7.1l-1 1.4a10.1 10.1 0 0 1-4.6-4.6L6 5.7A.7.7 0 0 0 6 5a7.4 7.4 0 0 1-.3-2.3A.7.7 0 0 0 5 2H2.8c-.4 0-.8.2-.8.7A11.4 11.4 0 0 0 13.3 14a.7.7 0 0 0 .7-.8V11a.7.7 0 0 0-.7-.6z">
                            </path>
                        </svg>
                        <span>CALL</span>
                    </button>
                </div>
                <div class="hover-prop">
                    <img src="zameen/assets/images/real-estate-small.jpg" class="before-hover">
                    <div class="after-hover">
                        <div class="d-flex flex-column gap-1">
                            <img src="assets/images/real-estate-small.jpg" class="before-hover">
                            <span class="muted-text">Registerd Since : 2023</span>
                            <p class="font-weight-500 line-clamp-one">
                                2024 Propeties for sale
                            </p>
                            <p class="font-weight-500 line-clamp-one">
                                0 Propeties for Rent
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </li>
    <!-- hot -->
    <li class="prop-card-child hot">
        <div class="image-wrapper position-relative">
            <figure class="m-0">
                <img src=" {{ asset('zameen/assets/images/cover-photo.png') }}" alt="" srcset="">
            </figure>
            <div class="top-data d-flex flex-row justify-content-between align-items-center">
                <label class="hot-label">hot</label>
                <label class="titanium">Titanium</label>
            </div>
            <div class="bottom-data d-flex flex-row justify-content-between align-items-center">
                <div class="bg-light-black d-flex flex-row gap-1 align-items-center">
                    <span class="view-count-white">11</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" class="white-svg">
                        <path fill="none" d="M0 0h16v16H0z"></path>
                        <g fill="#fff" data-name="Icon ionic-ios-camera">
                            <path d="M9.8 8.24a2.08 2.08 0 1 1-2.08-2.09 2.08 2.08 0 0 1 2.08 2.1z"></path>
                            <path
                                d="M13.57 4.06H11.6a.59.59 0 0 1-.44-.2c-1.03-1.15-1.4-1.54-1.83-1.54h-3.1c-.43 0-.84.4-1.88 1.55a.58.58 0 0 1-.43.2h-.14v-.3a.3.3 0 0 0-.29-.29h-.94c-.16 0-.3.13-.3.58H2A1.18 1.18 0 0 0 .77 5.18v6.37a1.25 1.25 0 0 0 1.21 1.2h11.6a1.16 1.16 0 0 0 1.1-1.2V5.17a1.08 1.08 0 0 0-1.1-1.1zm-5.7 7.26a3.1 3.1 0 1 1 2.95-2.95 3.1 3.1 0 0 1-2.95 2.95zm3.33-5.16a.47.47 0 1 1 .47-.47.47.47 0 0 1-.47.47z">
                            </path>
                        </g>
                    </svg>
                </div>
                <div class="bg-light-black d-flex flex-row gap-1 align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="white-svg" viewBox="0 0 9 13"
                        style="width: 0.9rem; height: 0.8rem">
                        <path fill="#FFF"
                            d="M4.5 0C2 0 0 2 0 4.4 0 7.8 4.5 13 4.5 13S9 7.8 9 4.4C9 2 7 0 4.5 0zm0 6.3c-1.1 0-1.9-.9-1.9-1.9a2 2 0 0 1 1.9-1.9c1.1 0 1.9.8 1.9 1.9 0 1-.8 1.9-1.9 1.9z">
                        </path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="white-svg" viewBox="0 0 13 12"
                        style="width: 0.9rem; height: 1.2rem">
                        <path fill="#FFF"
                            d="M9.7 2V0L13 3.3 9.7 6.6V4.3c-3.9.5-5.8 4.8-5.8 4.8 0-3.6 2.5-6.7 5.8-7.1zm1.2 9.2H.8V2.5H7a12 12 0 0 1 2-.8H.4c-.2 0-.4.2-.4.4v9.5c0 .3.2.4.4.4h10.9c.2 0 .4-.2.4-.4V5.2l-.8.8v5.2z">
                        </path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" overflow="visible" viewBox="0 0 20 18.4" class="white-svg"
                        style="width: 0.9rem; height: 0.8rem">
                        <path
                            d="M10 18.4L8.6 17C3.4 12.4 0 9.3 0 5.5A5.5 5.5 0 0 1 5.5 0 6 6 0 0 1 10 2a6 6 0 0 1 4.5-2A5.5 5.5 0 0 1 20 5.5c0 3.8-3.4 6.9-8.6 11.5z">
                        </path>
                    </svg>
                </div>
            </div>
        </div>
        <div class="card-body-custom">
            <div class="d-flex flex-row justify-content-between gap-2">
                <span class="prop-count">Added: 33 minutes ago</span>
                <div class="d-flex flex-row gap-1 align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="c1a24809"
                        style="width: 1rem; height: 1rem">
                        <path fill="#C22B2A"
                            d="M11.1 0c.8 2.3.6 4.9-.3 7.1-1.1 2-2.3 4-3.8 5.8a16.3 16.3 0 0 0-2.8 7.4c.1 6.5 5.4 11.8 12 11.7 3 .2 5.9-.9 8.1-2.9 1.8-1.8 3-4.2 3.3-6.8.6-4.2-.5-8.5-2.9-11.9.1 1.3 0 2.6-.4 3.8a5.3 5.3 0 0 1-3.6 3.4 4 4 0 0 1-4.1-1.3 5.5 5.5 0 0 1-.5-5.4c.7-1.7.7-3.6.1-5.3a8.6 8.6 0 0 0-2.6-3.7A9.2 9.2 0 0 0 11.1 0z">
                        </path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" aria-label="Trusted badge"
                        style="width: 1rem; height: 1rem">
                        <g fill="#34A048">
                            <path
                                d="M25.3 16.8V6.5l-5-1.3-4.1-1h-.3l-4 1c-1.8.3-3.5.8-5.3 1.2V17c-.1 2.1.7 4.2 2 5.8 2 2.3 4.5 4.1 7.2 5.2 2.5-1 4.7-2.5 6.6-4.4 2-1.7 3-4.2 2.9-6.7zm-3.2-4.4l-2.5 3.2-4 5.2c-.8 1-1.3 1-2.1 0L9.9 16a1 1 0 0 1 0-1.5c.4-.4 1.1-.3 1.5.1l2.6 2.3.6.5.3-.5 5.6-5.5.7-.5c.4 0 .9.1 1.1.5.1.2.1.7-.2 1.1z">
                            </path>
                            <path
                                d="M29.1 16.8V5a2 2 0 0 0-1.7-2.2l-6-1.5L16.8.1h-1.7l-4.5 1.1-6.1 1.5C3.5 3 2.7 4 2.8 5v11.9c-.1 3 1 6 2.9 8.2a25 25 0 0 0 9.3 6.7l.9.2c.3 0 .7 0 1-.2a24 24 0 0 0 8.4-5.7c2.6-2.3 4-5.7 3.8-9.2zm-4.8 8.5c-2.3 2.3-5 4.1-7.9 5.3-.2.1-.5.1-.8 0a22 22 0 0 1-8.8-6.3c-1.8-2-2.7-4.7-2.6-7.4V5c0-.5.1-.8.6-.9l10.6-2.6h1C20 2.4 23.5 3.2 27 4c.5.1.6.4.6.8v11.8c.3 3.4-1 6.5-3.3 8.7z">
                            </path>
                        </g>
                    </svg>
                </div>
            </div>
            <div class="d-flex flex-column gap-1 my-3">
                <p class="prop-price-text"><span>PKR</span> 1.48 Crore</p>
                <p class="prop-price-text line-clamp-one">
                    Park View City, Lahore
                </p>
            </div>
            <div class="d-flex flex-row gap-2">
                <div class="d-flex flex-row gap-1 align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="svg-custom">
                        <g fill="none">
                            <path d="M0 0h24v24H0z"></path>
                            <g data-name="Icon awesome-bed">
                                <path
                                    d="M8.4 11.8a2 2 0 1 0-2-2 2 2 0 0 0 2 2zm8.8-3.2h-5.6a.4.4 0 0 0-.4.4v3.6H5.6V7.4a.4.4 0 0 0-.4-.4h-.8a.4.4 0 0 0-.4.4v8.8a.4.4 0 0 0 .4.4h.8a.4.4 0 0 0 .4-.4V15h12.8v1.2a.4.4 0 0 0 .4.4h.8a.4.4 0 0 0 .4-.4v-4.8a2.8 2.8 0 0 0-2.8-2.8z">
                                </path>
                                <path fill="#000"
                                    d="M13.2 10.6V13H18v-1.6a.8.8 0 0 0-.8-.8h-4M4.4 7h.8c.22 0 .4.18.4.4v5.2h5.6V9c0-.22.18-.4.4-.4h5.6a2.8 2.8 0 0 1 2.8 2.8v4.8a.4.4 0 0 1-.4.4h-.8a.4.4 0 0 1-.4-.4V15H5.6v1.2a.4.4 0 0 1-.4.4h-.8a.4.4 0 0 1-.4-.4V7.4c0-.22.18-.4.4-.4zm4 .8a2 2 0 1 1 0 4 2 2 0 0 1 0-4z">
                                </path>
                            </g>
                        </g>
                    </svg>
                    <span class="font-weight-500">3</span>
                </div>
                <div class="d-flex flex-row gap-1 align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="svg-custom">
                        <g fill="none">
                            <g data-name="Icon awesome-bath">
                                <path
                                    d="M19.25 12H6.5V7.5a1 1 0 0 1 1.84-.54 2.12 2.12 0 0 0 .22 2.6.38.38 0 0 0 0 .5l.37.37a.38.38 0 0 0 .53 0l2.97-2.98a.38.38 0 0 0 0-.52l-.36-.36a.38.38 0 0 0-.5-.01 2.12 2.12 0 0 0-2.02-.48A2.5 2.5 0 0 0 5 7.5V12h-.25a.75.75 0 0 0-.75.75v.5a.75.75 0 0 0 .75.75H5v1a3 3 0 0 0 1 2.24v1a.75.75 0 0 0 .75.76h.5a.75.75 0 0 0 .75-.75V18h8v.25a.75.75 0 0 0 .75.75h.5a.75.75 0 0 0 .75-.75v-1.01A3 3 0 0 0 19 15v-1h.25a.75.75 0 0 0 .75-.75v-.5a.75.75 0 0 0-.75-.75z">
                                </path>
                                <path fill="#000"
                                    d="M7 14v1c0 .4.2.63.33.75l.29.25h8.76l.3-.25A1 1 0 0 0 17 15v-1H7m.5-9c.85 0 1.6.43 2.05 1.08a2.12 2.12 0 0 1 2 .48.37.37 0 0 1 .52 0l.36.37c.14.14.14.38 0 .53l-2.97 2.97a.38.38 0 0 1-.53 0l-.36-.36a.37.37 0 0 1 0-.5 2.12 2.12 0 0 1-.23-2.6 1 1 0 0 0-1.84.54v4.5h12.75c.4 0 .75.34.75.75v.5c0 .41-.34.75-.75.75H19v1a3 3 0 0 1-1 2.24v1c0 .42-.34.76-.75.76h-.5a.75.75 0 0 1-.75-.75v-.25H8v.25c0 .41-.34.75-.75.75h-.5a.75.75 0 0 1-.75-.76v-1.01A3 3 0 0 1 5 15v-1h-.25a.75.75 0 0 1-.75-.75v-.5c0-.4.34-.75.75-.75H5V7.5A2.5 2.5 0 0 1 7.5 5z">
                                </path>
                            </g>
                            <path d="M0 0h24v24H0z"></path>
                        </g>
                    </svg>
                    <span class="font-weight-500">4</span>
                </div>
                <div class="d-flex flex-row gap-1 align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="svg-custom">
                        <path
                            d="M10.4 16.83L9.53 16 8.1 17.4 8 6.57l1.5 1.56.9-.95L7.23 4l-3.2 3.17.9.95 1.5-1.56.12 10.85-1.6-1.51-.92.93L7.22 20zm8.8 2.37a.8.8 0 0 0 .8-.8V5.6a.8.8 0 0 0-.8-.8h-4.8a.8.8 0 0 0-.8.8v12.8a.8.8 0 0 0 .8.8zm-.8-1.6h-3.2V16h1.6v-1.6h-1.6v-1.6h1.6v-1.6h-1.6V9.6h1.6V8h-1.6V6.4h3.2z">
                        </path>
                    </svg>
                    <span class="font-weight-500">Marla</span>
                </div>
            </div>
            <div class="mt-2">
                <p class="prop-price-text line-clamp-one font-weight-400 font-size-14 detial-text-top">
                    Park View City, Lahore
                </p>
                <div class="detail-text flex-row align-items-center">
                    <div class="cf36e19e">
                        <span class="b779b320">Lake City Lahore Covered over an a</span>
                    </div>
                    ...<a href="#" class="_6e9f9ae0 d-inline-block">more</a>
                </div>
            </div>
            <div class="d-flex justify-content-between gap-1">
                <div class="card-btns d-flex flex-row gap-2 align-items-end mt-1">
                    <button class="email-msg-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" style="height: 1.1rem; width: 1rem">
                            <path fill="#041E42"
                                d="M28.7 5.3H3.3A3.3 3.3 0 0 0 0 8.6v14.8c0 1.8 1.4 3.3 3.3 3.3h25.4c1.8 0 3.3-1.4 3.3-3.3V8.7c0-1.9-1.4-3.3-3.3-3.4zm-17 12l-8 6.6c-.3.1-.6.1-1-.2-.2-.3 0-.7.2-1l8-6.6c.3-.3.7-.1 1 .1.2.4.1.8-.2 1zm17.5 6.4c-.3.2-.6.3-1 0l-8-6.6c-.2-.1-.2-.5 0-.8 0-.3.6-.3.8 0l8 6.6c.4.1.4.5.2.8zm0-14.5l-11 7.5c-.6.4-1.4.6-2 .7-.9 0-1.6-.3-2.2-.7L3 9.2c-.4-.2-.4-.6-.2-.9.2-.3.6-.4 1-.2l10.8 7.5c.8.5 1.9.5 2.7 0l11-7.5c.2-.3.6-.1.8 0 .3.4.3.8 0 1z">
                            </path>
                        </svg>
                    </button>
                    <button class="email-msg-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" data-name="Group 5" viewBox="0 0 20 20"
                            style="height: 1.3rem; width: 1.3rem">
                            <path fill="none" d="M0 0h20v20H0z"></path>
                            <path fill="#041E42"
                                d="M10 3.6a6.4 6.4 0 0 0-5.18 10.15l-.8 2.38 2.46-.79A6.4 6.4 0 1 0 10 3.6z"></path>
                            <path fill="#fafafa"
                                d="M13.83 12.72a1.86 1.86 0 0 1-1.3.93c-.34.08-.79.13-2.3-.5a8.26 8.26 0 0 1-3.27-2.9 3.79 3.79 0 0 1-.78-2 2.12 2.12 0 0 1 .67-1.61.95.95 0 0 1 .67-.24h.22c.2.02.3.03.42.34l.6 1.43a.4.4 0 0 1 .02.35 1.14 1.14 0 0 1-.21.3c-.1.12-.2.2-.29.32-.09.1-.19.22-.08.42a5.87 5.87 0 0 0 1.07 1.33 4.83 4.83 0 0 0 1.54.96.41.41 0 0 0 .47-.08 8 8 0 0 0 .51-.68.37.37 0 0 1 .47-.15c.18.07 1.12.53 1.32.63s.32.14.36.23a1.66 1.66 0 0 1-.11.92z">
                            </path>
                        </svg>
                    </button>
                    <button class="call-btn d-flex flex-row align-items-center gap-md-2 gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="#fff"
                            class="_40c10793">
                            <path
                                d="M13.3 10.3A7.6 7.6 0 0 1 11 10a.7.7 0 0 0-.7.1l-1 1.4a10.1 10.1 0 0 1-4.6-4.6L6 5.7A.7.7 0 0 0 6 5a7.4 7.4 0 0 1-.3-2.3A.7.7 0 0 0 5 2H2.8c-.4 0-.8.2-.8.7A11.4 11.4 0 0 0 13.3 14a.7.7 0 0 0 .7-.8V11a.7.7 0 0 0-.7-.6z">
                            </path>
                        </svg>
                        <span>CALL</span>
                    </button>
                </div>
                <div class="hover-prop">
                    <img src="assets/images/real-estate-small.jpg" class="before-hover">
                    <div class="after-hover">
                        <div class="d-flex flex-column gap-1">
                            <img src="assets/images/real-estate-small.jpg" class="before-hover">
                            <span class="muted-text">Registerd Since : 2023</span>
                            <p class="font-weight-500 line-clamp-one">
                                2024 Propeties for sale
                            </p>
                            <p class="font-weight-500 line-clamp-one">
                                0 Propeties for Rent
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </li>
    <!-- hot -->
    <li class="prop-card-child hot">
        <div class="image-wrapper position-relative">
            <figure class="m-0">
                <img src=" {{ asset('zameen/assets/images/signup-bg.png') }}" alt="" srcset="">
            </figure>
            <div class="top-data d-flex flex-row justify-content-between align-items-center">
                <label class="hot-label">hot</label>
                <label class="titanium">Titanium</label>
            </div>
            <div class="bottom-data d-flex flex-row justify-content-between align-items-center">
                <div class="bg-light-black d-flex flex-row gap-1 align-items-center">
                    <span class="view-count-white">11</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" class="white-svg">
                        <path fill="none" d="M0 0h16v16H0z"></path>
                        <g fill="#fff" data-name="Icon ionic-ios-camera">
                            <path d="M9.8 8.24a2.08 2.08 0 1 1-2.08-2.09 2.08 2.08 0 0 1 2.08 2.1z"></path>
                            <path
                                d="M13.57 4.06H11.6a.59.59 0 0 1-.44-.2c-1.03-1.15-1.4-1.54-1.83-1.54h-3.1c-.43 0-.84.4-1.88 1.55a.58.58 0 0 1-.43.2h-.14v-.3a.3.3 0 0 0-.29-.29h-.94c-.16 0-.3.13-.3.58H2A1.18 1.18 0 0 0 .77 5.18v6.37a1.25 1.25 0 0 0 1.21 1.2h11.6a1.16 1.16 0 0 0 1.1-1.2V5.17a1.08 1.08 0 0 0-1.1-1.1zm-5.7 7.26a3.1 3.1 0 1 1 2.95-2.95 3.1 3.1 0 0 1-2.95 2.95zm3.33-5.16a.47.47 0 1 1 .47-.47.47.47 0 0 1-.47.47z">
                            </path>
                        </g>
                    </svg>
                </div>
                <div class="bg-light-black d-flex flex-row gap-1 align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="white-svg" viewBox="0 0 9 13"
                        style="width: 0.9rem; height: 0.8rem">
                        <path fill="#FFF"
                            d="M4.5 0C2 0 0 2 0 4.4 0 7.8 4.5 13 4.5 13S9 7.8 9 4.4C9 2 7 0 4.5 0zm0 6.3c-1.1 0-1.9-.9-1.9-1.9a2 2 0 0 1 1.9-1.9c1.1 0 1.9.8 1.9 1.9 0 1-.8 1.9-1.9 1.9z">
                        </path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="white-svg" viewBox="0 0 13 12"
                        style="width: 0.9rem; height: 1.2rem">
                        <path fill="#FFF"
                            d="M9.7 2V0L13 3.3 9.7 6.6V4.3c-3.9.5-5.8 4.8-5.8 4.8 0-3.6 2.5-6.7 5.8-7.1zm1.2 9.2H.8V2.5H7a12 12 0 0 1 2-.8H.4c-.2 0-.4.2-.4.4v9.5c0 .3.2.4.4.4h10.9c.2 0 .4-.2.4-.4V5.2l-.8.8v5.2z">
                        </path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" overflow="visible" viewBox="0 0 20 18.4" class="white-svg"
                        style="width: 0.9rem; height: 0.8rem">
                        <path
                            d="M10 18.4L8.6 17C3.4 12.4 0 9.3 0 5.5A5.5 5.5 0 0 1 5.5 0 6 6 0 0 1 10 2a6 6 0 0 1 4.5-2A5.5 5.5 0 0 1 20 5.5c0 3.8-3.4 6.9-8.6 11.5z">
                        </path>
                    </svg>
                </div>
            </div>
        </div>
        <div class="card-body-custom">
            <div class="d-flex flex-row justify-content-between gap-2">
                <span class="prop-count">Added: 33 minutes ago</span>
                <div class="d-flex flex-row gap-1 align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="c1a24809"
                        style="width: 1rem; height: 1rem">
                        <path fill="#C22B2A"
                            d="M11.1 0c.8 2.3.6 4.9-.3 7.1-1.1 2-2.3 4-3.8 5.8a16.3 16.3 0 0 0-2.8 7.4c.1 6.5 5.4 11.8 12 11.7 3 .2 5.9-.9 8.1-2.9 1.8-1.8 3-4.2 3.3-6.8.6-4.2-.5-8.5-2.9-11.9.1 1.3 0 2.6-.4 3.8a5.3 5.3 0 0 1-3.6 3.4 4 4 0 0 1-4.1-1.3 5.5 5.5 0 0 1-.5-5.4c.7-1.7.7-3.6.1-5.3a8.6 8.6 0 0 0-2.6-3.7A9.2 9.2 0 0 0 11.1 0z">
                        </path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" aria-label="Trusted badge"
                        style="width: 1rem; height: 1rem">
                        <g fill="#34A048">
                            <path
                                d="M25.3 16.8V6.5l-5-1.3-4.1-1h-.3l-4 1c-1.8.3-3.5.8-5.3 1.2V17c-.1 2.1.7 4.2 2 5.8 2 2.3 4.5 4.1 7.2 5.2 2.5-1 4.7-2.5 6.6-4.4 2-1.7 3-4.2 2.9-6.7zm-3.2-4.4l-2.5 3.2-4 5.2c-.8 1-1.3 1-2.1 0L9.9 16a1 1 0 0 1 0-1.5c.4-.4 1.1-.3 1.5.1l2.6 2.3.6.5.3-.5 5.6-5.5.7-.5c.4 0 .9.1 1.1.5.1.2.1.7-.2 1.1z">
                            </path>
                            <path
                                d="M29.1 16.8V5a2 2 0 0 0-1.7-2.2l-6-1.5L16.8.1h-1.7l-4.5 1.1-6.1 1.5C3.5 3 2.7 4 2.8 5v11.9c-.1 3 1 6 2.9 8.2a25 25 0 0 0 9.3 6.7l.9.2c.3 0 .7 0 1-.2a24 24 0 0 0 8.4-5.7c2.6-2.3 4-5.7 3.8-9.2zm-4.8 8.5c-2.3 2.3-5 4.1-7.9 5.3-.2.1-.5.1-.8 0a22 22 0 0 1-8.8-6.3c-1.8-2-2.7-4.7-2.6-7.4V5c0-.5.1-.8.6-.9l10.6-2.6h1C20 2.4 23.5 3.2 27 4c.5.1.6.4.6.8v11.8c.3 3.4-1 6.5-3.3 8.7z">
                            </path>
                        </g>
                    </svg>
                </div>
            </div>
            <div class="d-flex flex-column gap-1 my-3">
                <p class="prop-price-text"><span>PKR</span> 1.48 Crore</p>
                <p class="prop-price-text line-clamp-one">
                    Park View City, Lahore
                </p>
            </div>
            <div class="d-flex flex-row gap-2">
                <div class="d-flex flex-row gap-1 align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="svg-custom">
                        <g fill="none">
                            <path d="M0 0h24v24H0z"></path>
                            <g data-name="Icon awesome-bed">
                                <path
                                    d="M8.4 11.8a2 2 0 1 0-2-2 2 2 0 0 0 2 2zm8.8-3.2h-5.6a.4.4 0 0 0-.4.4v3.6H5.6V7.4a.4.4 0 0 0-.4-.4h-.8a.4.4 0 0 0-.4.4v8.8a.4.4 0 0 0 .4.4h.8a.4.4 0 0 0 .4-.4V15h12.8v1.2a.4.4 0 0 0 .4.4h.8a.4.4 0 0 0 .4-.4v-4.8a2.8 2.8 0 0 0-2.8-2.8z">
                                </path>
                                <path fill="#000"
                                    d="M13.2 10.6V13H18v-1.6a.8.8 0 0 0-.8-.8h-4M4.4 7h.8c.22 0 .4.18.4.4v5.2h5.6V9c0-.22.18-.4.4-.4h5.6a2.8 2.8 0 0 1 2.8 2.8v4.8a.4.4 0 0 1-.4.4h-.8a.4.4 0 0 1-.4-.4V15H5.6v1.2a.4.4 0 0 1-.4.4h-.8a.4.4 0 0 1-.4-.4V7.4c0-.22.18-.4.4-.4zm4 .8a2 2 0 1 1 0 4 2 2 0 0 1 0-4z">
                                </path>
                            </g>
                        </g>
                    </svg>
                    <span class="font-weight-500">3</span>
                </div>
                <div class="d-flex flex-row gap-1 align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="svg-custom">
                        <g fill="none">
                            <g data-name="Icon awesome-bath">
                                <path
                                    d="M19.25 12H6.5V7.5a1 1 0 0 1 1.84-.54 2.12 2.12 0 0 0 .22 2.6.38.38 0 0 0 0 .5l.37.37a.38.38 0 0 0 .53 0l2.97-2.98a.38.38 0 0 0 0-.52l-.36-.36a.38.38 0 0 0-.5-.01 2.12 2.12 0 0 0-2.02-.48A2.5 2.5 0 0 0 5 7.5V12h-.25a.75.75 0 0 0-.75.75v.5a.75.75 0 0 0 .75.75H5v1a3 3 0 0 0 1 2.24v1a.75.75 0 0 0 .75.76h.5a.75.75 0 0 0 .75-.75V18h8v.25a.75.75 0 0 0 .75.75h.5a.75.75 0 0 0 .75-.75v-1.01A3 3 0 0 0 19 15v-1h.25a.75.75 0 0 0 .75-.75v-.5a.75.75 0 0 0-.75-.75z">
                                </path>
                                <path fill="#000"
                                    d="M7 14v1c0 .4.2.63.33.75l.29.25h8.76l.3-.25A1 1 0 0 0 17 15v-1H7m.5-9c.85 0 1.6.43 2.05 1.08a2.12 2.12 0 0 1 2 .48.37.37 0 0 1 .52 0l.36.37c.14.14.14.38 0 .53l-2.97 2.97a.38.38 0 0 1-.53 0l-.36-.36a.37.37 0 0 1 0-.5 2.12 2.12 0 0 1-.23-2.6 1 1 0 0 0-1.84.54v4.5h12.75c.4 0 .75.34.75.75v.5c0 .41-.34.75-.75.75H19v1a3 3 0 0 1-1 2.24v1c0 .42-.34.76-.75.76h-.5a.75.75 0 0 1-.75-.75v-.25H8v.25c0 .41-.34.75-.75.75h-.5a.75.75 0 0 1-.75-.76v-1.01A3 3 0 0 1 5 15v-1h-.25a.75.75 0 0 1-.75-.75v-.5c0-.4.34-.75.75-.75H5V7.5A2.5 2.5 0 0 1 7.5 5z">
                                </path>
                            </g>
                            <path d="M0 0h24v24H0z"></path>
                        </g>
                    </svg>
                    <span class="font-weight-500">4</span>
                </div>
                <div class="d-flex flex-row gap-1 align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="svg-custom">
                        <path
                            d="M10.4 16.83L9.53 16 8.1 17.4 8 6.57l1.5 1.56.9-.95L7.23 4l-3.2 3.17.9.95 1.5-1.56.12 10.85-1.6-1.51-.92.93L7.22 20zm8.8 2.37a.8.8 0 0 0 .8-.8V5.6a.8.8 0 0 0-.8-.8h-4.8a.8.8 0 0 0-.8.8v12.8a.8.8 0 0 0 .8.8zm-.8-1.6h-3.2V16h1.6v-1.6h-1.6v-1.6h1.6v-1.6h-1.6V9.6h1.6V8h-1.6V6.4h3.2z">
                        </path>
                    </svg>
                    <span class="font-weight-500">Marla</span>
                </div>
            </div>
            <div class="mt-2">
                <p class="prop-price-text line-clamp-one font-weight-400 font-size-14 detial-text-top">
                    Park View City, Lahore
                </p>
                <div class="detail-text flex-row align-items-center">
                    <div class="cf36e19e">
                        <span class="b779b320">Lake City Lahore Covered over an a</span>
                    </div>
                    ...<a href="#" class="_6e9f9ae0 d-inline-block">more</a>
                </div>
            </div>
            <div class="d-flex justify-content-between gap-1">
                <div class="card-btns d-flex flex-row gap-2 align-items-end mt-1">
                    <button class="email-msg-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" style="height: 1.1rem; width: 1rem">
                            <path fill="#041E42"
                                d="M28.7 5.3H3.3A3.3 3.3 0 0 0 0 8.6v14.8c0 1.8 1.4 3.3 3.3 3.3h25.4c1.8 0 3.3-1.4 3.3-3.3V8.7c0-1.9-1.4-3.3-3.3-3.4zm-17 12l-8 6.6c-.3.1-.6.1-1-.2-.2-.3 0-.7.2-1l8-6.6c.3-.3.7-.1 1 .1.2.4.1.8-.2 1zm17.5 6.4c-.3.2-.6.3-1 0l-8-6.6c-.2-.1-.2-.5 0-.8 0-.3.6-.3.8 0l8 6.6c.4.1.4.5.2.8zm0-14.5l-11 7.5c-.6.4-1.4.6-2 .7-.9 0-1.6-.3-2.2-.7L3 9.2c-.4-.2-.4-.6-.2-.9.2-.3.6-.4 1-.2l10.8 7.5c.8.5 1.9.5 2.7 0l11-7.5c.2-.3.6-.1.8 0 .3.4.3.8 0 1z">
                            </path>
                        </svg>
                    </button>
                    <button class="email-msg-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" data-name="Group 5" viewBox="0 0 20 20"
                            style="height: 1.3rem; width: 1.3rem">
                            <path fill="none" d="M0 0h20v20H0z"></path>
                            <path fill="#041E42"
                                d="M10 3.6a6.4 6.4 0 0 0-5.18 10.15l-.8 2.38 2.46-.79A6.4 6.4 0 1 0 10 3.6z"></path>
                            <path fill="#fafafa"
                                d="M13.83 12.72a1.86 1.86 0 0 1-1.3.93c-.34.08-.79.13-2.3-.5a8.26 8.26 0 0 1-3.27-2.9 3.79 3.79 0 0 1-.78-2 2.12 2.12 0 0 1 .67-1.61.95.95 0 0 1 .67-.24h.22c.2.02.3.03.42.34l.6 1.43a.4.4 0 0 1 .02.35 1.14 1.14 0 0 1-.21.3c-.1.12-.2.2-.29.32-.09.1-.19.22-.08.42a5.87 5.87 0 0 0 1.07 1.33 4.83 4.83 0 0 0 1.54.96.41.41 0 0 0 .47-.08 8 8 0 0 0 .51-.68.37.37 0 0 1 .47-.15c.18.07 1.12.53 1.32.63s.32.14.36.23a1.66 1.66 0 0 1-.11.92z">
                            </path>
                        </svg>
                    </button>
                    <button class="call-btn d-flex flex-row align-items-center gap-md-2 gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="#fff"
                            class="_40c10793">
                            <path
                                d="M13.3 10.3A7.6 7.6 0 0 1 11 10a.7.7 0 0 0-.7.1l-1 1.4a10.1 10.1 0 0 1-4.6-4.6L6 5.7A.7.7 0 0 0 6 5a7.4 7.4 0 0 1-.3-2.3A.7.7 0 0 0 5 2H2.8c-.4 0-.8.2-.8.7A11.4 11.4 0 0 0 13.3 14a.7.7 0 0 0 .7-.8V11a.7.7 0 0 0-.7-.6z">
                            </path>
                        </svg>
                        <span>CALL</span>
                    </button>
                </div>
                <div class="hover-prop">
                    <img src="assets/images/real-estate-small.jpg" class="before-hover">
                    <div class="after-hover">
                        <div class="d-flex flex-column gap-1">
                            <img src="assets/images/real-estate-small.jpg" class="before-hover">
                            <span class="muted-text">Registerd Since : 2023</span>
                            <p class="font-weight-500 line-clamp-one">
                                2024 Propeties for sale
                            </p>
                            <p class="font-weight-500 line-clamp-one">
                                0 Propeties for Rent
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </li>
    <!-- feature -->
    <li class="prop-card-child featured">
        <div class="image-wrapper position-relative">
            <figure class="m-0">
                <img src="assets/images/properties.jpg" alt="" srcset="">
            </figure>
            <div class="top-data d-flex flex-row justify-content-between align-items-center">
                <label class="feature-label">Feature</label>
                <label class="titanium">Titanium</label>
            </div>
            <div class="bottom-data d-flex flex-row justify-content-between align-items-center">
                <div class="bg-light-black d-flex flex-row gap-1 align-items-center">
                    <span class="view-count-white">11</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" class="white-svg">
                        <path fill="none" d="M0 0h16v16H0z"></path>
                        <g fill="#fff" data-name="Icon ionic-ios-camera">
                            <path d="M9.8 8.24a2.08 2.08 0 1 1-2.08-2.09 2.08 2.08 0 0 1 2.08 2.1z"></path>
                            <path
                                d="M13.57 4.06H11.6a.59.59 0 0 1-.44-.2c-1.03-1.15-1.4-1.54-1.83-1.54h-3.1c-.43 0-.84.4-1.88 1.55a.58.58 0 0 1-.43.2h-.14v-.3a.3.3 0 0 0-.29-.29h-.94c-.16 0-.3.13-.3.58H2A1.18 1.18 0 0 0 .77 5.18v6.37a1.25 1.25 0 0 0 1.21 1.2h11.6a1.16 1.16 0 0 0 1.1-1.2V5.17a1.08 1.08 0 0 0-1.1-1.1zm-5.7 7.26a3.1 3.1 0 1 1 2.95-2.95 3.1 3.1 0 0 1-2.95 2.95zm3.33-5.16a.47.47 0 1 1 .47-.47.47.47 0 0 1-.47.47z">
                            </path>
                        </g>
                    </svg>
                </div>
                <div class="bg-light-black d-flex flex-row gap-1 align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="white-svg" viewBox="0 0 9 13"
                        style="width: 0.9rem; height: 0.8rem">
                        <path fill="#FFF"
                            d="M4.5 0C2 0 0 2 0 4.4 0 7.8 4.5 13 4.5 13S9 7.8 9 4.4C9 2 7 0 4.5 0zm0 6.3c-1.1 0-1.9-.9-1.9-1.9a2 2 0 0 1 1.9-1.9c1.1 0 1.9.8 1.9 1.9 0 1-.8 1.9-1.9 1.9z">
                        </path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="white-svg" viewBox="0 0 13 12"
                        style="width: 0.9rem; height: 1.2rem">
                        <path fill="#FFF"
                            d="M9.7 2V0L13 3.3 9.7 6.6V4.3c-3.9.5-5.8 4.8-5.8 4.8 0-3.6 2.5-6.7 5.8-7.1zm1.2 9.2H.8V2.5H7a12 12 0 0 1 2-.8H.4c-.2 0-.4.2-.4.4v9.5c0 .3.2.4.4.4h10.9c.2 0 .4-.2.4-.4V5.2l-.8.8v5.2z">
                        </path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" overflow="visible" viewBox="0 0 20 18.4" class="white-svg"
                        style="width: 0.9rem; height: 0.8rem">
                        <path
                            d="M10 18.4L8.6 17C3.4 12.4 0 9.3 0 5.5A5.5 5.5 0 0 1 5.5 0 6 6 0 0 1 10 2a6 6 0 0 1 4.5-2A5.5 5.5 0 0 1 20 5.5c0 3.8-3.4 6.9-8.6 11.5z">
                        </path>
                    </svg>
                </div>
            </div>
        </div>
        <div class="card-body-custom">
            <div class="d-flex flex-row justify-content-between gap-2">
                <span class="prop-count">Added: 33 minutes ago</span>
                <div class="d-flex flex-row gap-1 align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16"
                        height="16" id="light">
                        <defs>
                            <linearGradient id="b">
                                <stop offset="0" stop-color="#485960"></stop>
                                <stop offset="1" stop-color="#3d4e55"></stop>
                            </linearGradient>
                            <linearGradient id="c">
                                <stop offset="0" stop-color="#fcd635"></stop>
                                <stop offset="1" stop-color="#f7a928"></stop>
                            </linearGradient>
                            <linearGradient id="f" x1="128.2" x2="129.2" y1="1180.362" y2="1180.362"
                                gradientUnits="userSpaceOnUse" xlink:href="#a"></linearGradient>
                            <linearGradient id="a">
                                <stop offset="0" stop-color="#cad1d8"></stop>
                                <stop offset="1" stop-color="#babdc1"></stop>
                            </linearGradient>
                            <linearGradient id="g" x1="129.8" x2="130.8" y1="1180.362" y2="1180.362"
                                gradientUnits="userSpaceOnUse" xlink:href="#a"></linearGradient>
                            <linearGradient id="h" x1="127.5" x2="131.5" y1="1178.362" y2="1178.362"
                                gradientUnits="userSpaceOnUse" xlink:href="#b"></linearGradient>
                            <linearGradient id="e" x1="124.5" x2="134.5" y1="137" y2="137"
                                gradientUnits="userSpaceOnUse" xlink:href="#c"></linearGradient>
                            <linearGradient id="i" x1="127" x2="132" y1="1177.862" y2="1177.862"
                                gradientUnits="userSpaceOnUse" xlink:href="#a"></linearGradient>
                            <linearGradient id="j" x1="127" x2="132" y1="1178.862" y2="1178.862"
                                gradientUnits="userSpaceOnUse" xlink:href="#a"></linearGradient>
                            <linearGradient id="k" x1="127" x2="132" y1="1176.862" y2="1176.862"
                                gradientUnits="userSpaceOnUse" xlink:href="#a"></linearGradient>
                            <linearGradient id="l" x1="125.5" x2="130.007" y1="1169.615" y2="1169.615"
                                gradientUnits="userSpaceOnUse" xlink:href="#d"></linearGradient>
                            <linearGradient id="d">
                                <stop offset="0" stop-color="#f6a320"></stop>
                                <stop offset="1" stop-color="#f47e1f"></stop>
                            </linearGradient>
                        </defs>
                        <g fill-rule="evenodd" color="#000" transform="translate(-121.5 -1164.862)">
                            <path fill="url(#e)" style="
                            isolation: auto;
                            mix-blend-mode: normal;
                            solid-color: #000;
                            solid-opacity: 1;
                          " d="M129.5 130a5 5 0 0 0-5 5 5 5 0 0 0 3 4.58v3.92c0 .277.223.5.5.5h3c.277 0 .5-.223.5-.5v-3.924a5 5 0 0 0 3-4.576 5 5 0 0 0-5-5z"
                                overflow="visible" transform="translate(0 1036.362)"></path>
                            <circle style="
                            isolation: auto;
                            mix-blend-mode: normal;
                            solid-color: #000;
                            solid-opacity: 1;
                          " cx="128.7" cy="1180.362" r=".5" fill="url(#f)" overflow="visible"></circle>
                            <circle cx="130.3" cy="1180.362" r=".5" fill="url(#g)" overflow="visible" style="
                            isolation: auto;
                            mix-blend-mode: normal;
                            solid-color: #000;
                            solid-opacity: 1;
                          "></circle>
                            <rect width="4" height="3" x="127.5" y="1177.362" fill="url(#h)" overflow="visible" rx=".5"
                                ry=".5" style="
                            isolation: auto;
                            mix-blend-mode: normal;
                            solid-color: #000;
                            solid-opacity: 1;
                          "></rect>
                            <rect width="5" height="1" x="127" y="1177.362" fill="url(#i)" style="
                            isolation: auto;
                            mix-blend-mode: normal;
                            solid-color: #000;
                            solid-opacity: 1;
                          " overflow="visible" rx=".417" ry=".5"></rect>
                            <rect width="5" height="1" x="127" y="1178.362" fill="url(#j)" overflow="visible" rx=".417"
                                ry=".5" style="
                            isolation: auto;
                            mix-blend-mode: normal;
                            solid-color: #000;
                            solid-opacity: 1;
                          "></rect>
                            <rect width="5" height="1" x="127" y="1176.362" fill="url(#k)" overflow="visible" rx=".417"
                                ry=".5" style="
                            isolation: auto;
                            mix-blend-mode: normal;
                            solid-color: #000;
                            solid-opacity: 1;
                          "></rect>
                            <path fill="url(#l)" style="
                            line-height: normal;
                            text-indent: 0;
                            text-align: start;
                            text-decoration-line: none;
                            text-decoration-style: solid;
                            text-decoration-color: #000;
                            text-transform: none;
                            block-progression: tb;
                            white-space: normal;
                            isolation: auto;
                            mix-blend-mode: normal;
                            solid-color: #000;
                            solid-opacity: 1;
                          " d="M129.5 1167.361c-2.203 0-4 1.797-4 4a.5.5 0 1 0 1 0c0-1.662 1.337-3 3-3a.5.5 0 1 0 0-1z"
                                font-family="sans-serif" font-weight="400" overflow="visible"></path>
                        </g>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" aria-label="Trusted badge"
                        style="width: 1rem; height: 1rem">
                        <g fill="#34A048">
                            <path
                                d="M25.3 16.8V6.5l-5-1.3-4.1-1h-.3l-4 1c-1.8.3-3.5.8-5.3 1.2V17c-.1 2.1.7 4.2 2 5.8 2 2.3 4.5 4.1 7.2 5.2 2.5-1 4.7-2.5 6.6-4.4 2-1.7 3-4.2 2.9-6.7zm-3.2-4.4l-2.5 3.2-4 5.2c-.8 1-1.3 1-2.1 0L9.9 16a1 1 0 0 1 0-1.5c.4-.4 1.1-.3 1.5.1l2.6 2.3.6.5.3-.5 5.6-5.5.7-.5c.4 0 .9.1 1.1.5.1.2.1.7-.2 1.1z">
                            </path>
                            <path
                                d="M29.1 16.8V5a2 2 0 0 0-1.7-2.2l-6-1.5L16.8.1h-1.7l-4.5 1.1-6.1 1.5C3.5 3 2.7 4 2.8 5v11.9c-.1 3 1 6 2.9 8.2a25 25 0 0 0 9.3 6.7l.9.2c.3 0 .7 0 1-.2a24 24 0 0 0 8.4-5.7c2.6-2.3 4-5.7 3.8-9.2zm-4.8 8.5c-2.3 2.3-5 4.1-7.9 5.3-.2.1-.5.1-.8 0a22 22 0 0 1-8.8-6.3c-1.8-2-2.7-4.7-2.6-7.4V5c0-.5.1-.8.6-.9l10.6-2.6h1C20 2.4 23.5 3.2 27 4c.5.1.6.4.6.8v11.8c.3 3.4-1 6.5-3.3 8.7z">
                            </path>
                        </g>
                    </svg>
                </div>
            </div>
            <div class="d-flex flex-column gap-1 my-3">
                <p class="prop-price-text"><span>PKR</span> 1.48 Crore</p>
                <p class="prop-price-text line-clamp-one">
                    Park View City, Lahore
                </p>
            </div>
            <div class="d-flex flex-row gap-2">
                <div class="d-flex flex-row gap-1 align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="svg-custom">
                        <g fill="none">
                            <path d="M0 0h24v24H0z"></path>
                            <g data-name="Icon awesome-bed">
                                <path
                                    d="M8.4 11.8a2 2 0 1 0-2-2 2 2 0 0 0 2 2zm8.8-3.2h-5.6a.4.4 0 0 0-.4.4v3.6H5.6V7.4a.4.4 0 0 0-.4-.4h-.8a.4.4 0 0 0-.4.4v8.8a.4.4 0 0 0 .4.4h.8a.4.4 0 0 0 .4-.4V15h12.8v1.2a.4.4 0 0 0 .4.4h.8a.4.4 0 0 0 .4-.4v-4.8a2.8 2.8 0 0 0-2.8-2.8z">
                                </path>
                                <path fill="#000"
                                    d="M13.2 10.6V13H18v-1.6a.8.8 0 0 0-.8-.8h-4M4.4 7h.8c.22 0 .4.18.4.4v5.2h5.6V9c0-.22.18-.4.4-.4h5.6a2.8 2.8 0 0 1 2.8 2.8v4.8a.4.4 0 0 1-.4.4h-.8a.4.4 0 0 1-.4-.4V15H5.6v1.2a.4.4 0 0 1-.4.4h-.8a.4.4 0 0 1-.4-.4V7.4c0-.22.18-.4.4-.4zm4 .8a2 2 0 1 1 0 4 2 2 0 0 1 0-4z">
                                </path>
                            </g>
                        </g>
                    </svg>
                    <span class="font-weight-500">3</span>
                </div>
                <div class="d-flex flex-row gap-1 align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="svg-custom">
                        <g fill="none">
                            <g data-name="Icon awesome-bath">
                                <path
                                    d="M19.25 12H6.5V7.5a1 1 0 0 1 1.84-.54 2.12 2.12 0 0 0 .22 2.6.38.38 0 0 0 0 .5l.37.37a.38.38 0 0 0 .53 0l2.97-2.98a.38.38 0 0 0 0-.52l-.36-.36a.38.38 0 0 0-.5-.01 2.12 2.12 0 0 0-2.02-.48A2.5 2.5 0 0 0 5 7.5V12h-.25a.75.75 0 0 0-.75.75v.5a.75.75 0 0 0 .75.75H5v1a3 3 0 0 0 1 2.24v1a.75.75 0 0 0 .75.76h.5a.75.75 0 0 0 .75-.75V18h8v.25a.75.75 0 0 0 .75.75h.5a.75.75 0 0 0 .75-.75v-1.01A3 3 0 0 0 19 15v-1h.25a.75.75 0 0 0 .75-.75v-.5a.75.75 0 0 0-.75-.75z">
                                </path>
                                <path fill="#000"
                                    d="M7 14v1c0 .4.2.63.33.75l.29.25h8.76l.3-.25A1 1 0 0 0 17 15v-1H7m.5-9c.85 0 1.6.43 2.05 1.08a2.12 2.12 0 0 1 2 .48.37.37 0 0 1 .52 0l.36.37c.14.14.14.38 0 .53l-2.97 2.97a.38.38 0 0 1-.53 0l-.36-.36a.37.37 0 0 1 0-.5 2.12 2.12 0 0 1-.23-2.6 1 1 0 0 0-1.84.54v4.5h12.75c.4 0 .75.34.75.75v.5c0 .41-.34.75-.75.75H19v1a3 3 0 0 1-1 2.24v1c0 .42-.34.76-.75.76h-.5a.75.75 0 0 1-.75-.75v-.25H8v.25c0 .41-.34.75-.75.75h-.5a.75.75 0 0 1-.75-.76v-1.01A3 3 0 0 1 5 15v-1h-.25a.75.75 0 0 1-.75-.75v-.5c0-.4.34-.75.75-.75H5V7.5A2.5 2.5 0 0 1 7.5 5z">
                                </path>
                            </g>
                            <path d="M0 0h24v24H0z"></path>
                        </g>
                    </svg>
                    <span class="font-weight-500">4</span>
                </div>
                <div class="d-flex flex-row gap-1 align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="svg-custom">
                        <path
                            d="M10.4 16.83L9.53 16 8.1 17.4 8 6.57l1.5 1.56.9-.95L7.23 4l-3.2 3.17.9.95 1.5-1.56.12 10.85-1.6-1.51-.92.93L7.22 20zm8.8 2.37a.8.8 0 0 0 .8-.8V5.6a.8.8 0 0 0-.8-.8h-4.8a.8.8 0 0 0-.8.8v12.8a.8.8 0 0 0 .8.8zm-.8-1.6h-3.2V16h1.6v-1.6h-1.6v-1.6h1.6v-1.6h-1.6V9.6h1.6V8h-1.6V6.4h3.2z">
                        </path>
                    </svg>
                    <span class="font-weight-500">Marla</span>
                </div>
            </div>
            <div class="mt-2">
                <p class="prop-price-text line-clamp-one font-weight-400 font-size-14 detial-text-top">
                    Park View City, Lahore
                </p>
                <div class="detail-text flex-row align-items-center">
                    <div class="cf36e19e">
                        <span class="b779b320">Lake City Lahore Covered over an a</span>
                    </div>
                    ...<a href="#" class="_6e9f9ae0 d-inline-block">more</a>
                </div>
            </div>
            <div class="d-flex justify-content-between gap-1">
                <div class="card-btns d-flex flex-row gap-2 align-items-end mt-1">
                    <button class="email-msg-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" style="height: 1.1rem; width: 1rem">
                            <path fill="#041E42"
                                d="M28.7 5.3H3.3A3.3 3.3 0 0 0 0 8.6v14.8c0 1.8 1.4 3.3 3.3 3.3h25.4c1.8 0 3.3-1.4 3.3-3.3V8.7c0-1.9-1.4-3.3-3.3-3.4zm-17 12l-8 6.6c-.3.1-.6.1-1-.2-.2-.3 0-.7.2-1l8-6.6c.3-.3.7-.1 1 .1.2.4.1.8-.2 1zm17.5 6.4c-.3.2-.6.3-1 0l-8-6.6c-.2-.1-.2-.5 0-.8 0-.3.6-.3.8 0l8 6.6c.4.1.4.5.2.8zm0-14.5l-11 7.5c-.6.4-1.4.6-2 .7-.9 0-1.6-.3-2.2-.7L3 9.2c-.4-.2-.4-.6-.2-.9.2-.3.6-.4 1-.2l10.8 7.5c.8.5 1.9.5 2.7 0l11-7.5c.2-.3.6-.1.8 0 .3.4.3.8 0 1z">
                            </path>
                        </svg>
                    </button>
                    <button class="email-msg-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" data-name="Group 5" viewBox="0 0 20 20"
                            style="height: 1.3rem; width: 1.3rem">
                            <path fill="none" d="M0 0h20v20H0z"></path>
                            <path fill="#041E42"
                                d="M10 3.6a6.4 6.4 0 0 0-5.18 10.15l-.8 2.38 2.46-.79A6.4 6.4 0 1 0 10 3.6z"></path>
                            <path fill="#fafafa"
                                d="M13.83 12.72a1.86 1.86 0 0 1-1.3.93c-.34.08-.79.13-2.3-.5a8.26 8.26 0 0 1-3.27-2.9 3.79 3.79 0 0 1-.78-2 2.12 2.12 0 0 1 .67-1.61.95.95 0 0 1 .67-.24h.22c.2.02.3.03.42.34l.6 1.43a.4.4 0 0 1 .02.35 1.14 1.14 0 0 1-.21.3c-.1.12-.2.2-.29.32-.09.1-.19.22-.08.42a5.87 5.87 0 0 0 1.07 1.33 4.83 4.83 0 0 0 1.54.96.41.41 0 0 0 .47-.08 8 8 0 0 0 .51-.68.37.37 0 0 1 .47-.15c.18.07 1.12.53 1.32.63s.32.14.36.23a1.66 1.66 0 0 1-.11.92z">
                            </path>
                        </svg>
                    </button>
                    <button class="call-btn d-flex flex-row align-items-center gap-md-2 gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="#fff"
                            class="_40c10793">
                            <path
                                d="M13.3 10.3A7.6 7.6 0 0 1 11 10a.7.7 0 0 0-.7.1l-1 1.4a10.1 10.1 0 0 1-4.6-4.6L6 5.7A.7.7 0 0 0 6 5a7.4 7.4 0 0 1-.3-2.3A.7.7 0 0 0 5 2H2.8c-.4 0-.8.2-.8.7A11.4 11.4 0 0 0 13.3 14a.7.7 0 0 0 .7-.8V11a.7.7 0 0 0-.7-.6z">
                            </path>
                        </svg>
                        <span>CALL</span>
                    </button>
                </div>
                <div class="hover-prop">
                    <img src="assets/images/real-estate-small.jpg" class="before-hover">
                    <div class="after-hover">
                        <div class="d-flex flex-column gap-1">
                            <img src="assets/images/real-estate-small.jpg" class="before-hover">
                            <span class="muted-text">Registerd Since : 2023</span>
                            <p class="font-weight-500 line-clamp-one">
                                2024 Propeties for sale
                            </p>
                            <p class="font-weight-500 line-clamp-one">
                                0 Propeties for Rent
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </li>
    <!-- normal -->
    <li class="prop-card-child normal">
        <div class="image-wrapper position-relative">
            <figure class="m-0">
                <img src="assets/images/properties.jpg" alt="" srcset="">
            </figure>
            <div class="top-data d-flex flex-row justify-content-end">
                <label class="titanium">Titanium</label>
            </div>
            <div class="bottom-data d-flex flex-row justify-content-between align-items-center">
                <div class="bg-light-black d-flex flex-row gap-1 align-items-center">
                    <span class="view-count-white">11</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" class="white-svg">
                        <path fill="none" d="M0 0h16v16H0z"></path>
                        <g fill="#fff" data-name="Icon ionic-ios-camera">
                            <path d="M9.8 8.24a2.08 2.08 0 1 1-2.08-2.09 2.08 2.08 0 0 1 2.08 2.1z"></path>
                            <path
                                d="M13.57 4.06H11.6a.59.59 0 0 1-.44-.2c-1.03-1.15-1.4-1.54-1.83-1.54h-3.1c-.43 0-.84.4-1.88 1.55a.58.58 0 0 1-.43.2h-.14v-.3a.3.3 0 0 0-.29-.29h-.94c-.16 0-.3.13-.3.58H2A1.18 1.18 0 0 0 .77 5.18v6.37a1.25 1.25 0 0 0 1.21 1.2h11.6a1.16 1.16 0 0 0 1.1-1.2V5.17a1.08 1.08 0 0 0-1.1-1.1zm-5.7 7.26a3.1 3.1 0 1 1 2.95-2.95 3.1 3.1 0 0 1-2.95 2.95zm3.33-5.16a.47.47 0 1 1 .47-.47.47.47 0 0 1-.47.47z">
                            </path>
                        </g>
                    </svg>
                </div>
                <div class="bg-light-black d-flex flex-row gap-1 align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="white-svg" viewBox="0 0 9 13"
                        style="width: 0.9rem; height: 0.8rem">
                        <path fill="#FFF"
                            d="M4.5 0C2 0 0 2 0 4.4 0 7.8 4.5 13 4.5 13S9 7.8 9 4.4C9 2 7 0 4.5 0zm0 6.3c-1.1 0-1.9-.9-1.9-1.9a2 2 0 0 1 1.9-1.9c1.1 0 1.9.8 1.9 1.9 0 1-.8 1.9-1.9 1.9z">
                        </path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="white-svg" viewBox="0 0 13 12"
                        style="width: 0.9rem; height: 1.2rem">
                        <path fill="#FFF"
                            d="M9.7 2V0L13 3.3 9.7 6.6V4.3c-3.9.5-5.8 4.8-5.8 4.8 0-3.6 2.5-6.7 5.8-7.1zm1.2 9.2H.8V2.5H7a12 12 0 0 1 2-.8H.4c-.2 0-.4.2-.4.4v9.5c0 .3.2.4.4.4h10.9c.2 0 .4-.2.4-.4V5.2l-.8.8v5.2z">
                        </path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" overflow="visible" viewBox="0 0 20 18.4" class="white-svg"
                        style="width: 0.9rem; height: 0.8rem">
                        <path
                            d="M10 18.4L8.6 17C3.4 12.4 0 9.3 0 5.5A5.5 5.5 0 0 1 5.5 0 6 6 0 0 1 10 2a6 6 0 0 1 4.5-2A5.5 5.5 0 0 1 20 5.5c0 3.8-3.4 6.9-8.6 11.5z">
                        </path>
                    </svg>
                </div>
            </div>
        </div>
        <div class="card-body-custom">
            <div class="d-flex flex-row justify-content-between gap-2">
                <span class="prop-count">Added: 33 minutes ago</span>
                <div class="d-flex flex-row gap-1 align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" aria-label="Trusted badge"
                        style="width: 1rem; height: 1rem">
                        <g fill="#34A048">
                            <path
                                d="M25.3 16.8V6.5l-5-1.3-4.1-1h-.3l-4 1c-1.8.3-3.5.8-5.3 1.2V17c-.1 2.1.7 4.2 2 5.8 2 2.3 4.5 4.1 7.2 5.2 2.5-1 4.7-2.5 6.6-4.4 2-1.7 3-4.2 2.9-6.7zm-3.2-4.4l-2.5 3.2-4 5.2c-.8 1-1.3 1-2.1 0L9.9 16a1 1 0 0 1 0-1.5c.4-.4 1.1-.3 1.5.1l2.6 2.3.6.5.3-.5 5.6-5.5.7-.5c.4 0 .9.1 1.1.5.1.2.1.7-.2 1.1z">
                            </path>
                            <path
                                d="M29.1 16.8V5a2 2 0 0 0-1.7-2.2l-6-1.5L16.8.1h-1.7l-4.5 1.1-6.1 1.5C3.5 3 2.7 4 2.8 5v11.9c-.1 3 1 6 2.9 8.2a25 25 0 0 0 9.3 6.7l.9.2c.3 0 .7 0 1-.2a24 24 0 0 0 8.4-5.7c2.6-2.3 4-5.7 3.8-9.2zm-4.8 8.5c-2.3 2.3-5 4.1-7.9 5.3-.2.1-.5.1-.8 0a22 22 0 0 1-8.8-6.3c-1.8-2-2.7-4.7-2.6-7.4V5c0-.5.1-.8.6-.9l10.6-2.6h1C20 2.4 23.5 3.2 27 4c.5.1.6.4.6.8v11.8c.3 3.4-1 6.5-3.3 8.7z">
                            </path>
                        </g>
                    </svg>
                </div>
            </div>
            <div class="d-flex flex-column gap-1 my-3">
                <p class="prop-price-text"><span>PKR</span> 1.48 Crore</p>
                <p class="prop-price-text line-clamp-one">
                    Park View City, Lahore
                </p>
            </div>
            <div class="d-flex flex-row gap-2">
                <div class="d-flex flex-row gap-1 align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="svg-custom">
                        <g fill="none">
                            <path d="M0 0h24v24H0z"></path>
                            <g data-name="Icon awesome-bed">
                                <path
                                    d="M8.4 11.8a2 2 0 1 0-2-2 2 2 0 0 0 2 2zm8.8-3.2h-5.6a.4.4 0 0 0-.4.4v3.6H5.6V7.4a.4.4 0 0 0-.4-.4h-.8a.4.4 0 0 0-.4.4v8.8a.4.4 0 0 0 .4.4h.8a.4.4 0 0 0 .4-.4V15h12.8v1.2a.4.4 0 0 0 .4.4h.8a.4.4 0 0 0 .4-.4v-4.8a2.8 2.8 0 0 0-2.8-2.8z">
                                </path>
                                <path fill="#000"
                                    d="M13.2 10.6V13H18v-1.6a.8.8 0 0 0-.8-.8h-4M4.4 7h.8c.22 0 .4.18.4.4v5.2h5.6V9c0-.22.18-.4.4-.4h5.6a2.8 2.8 0 0 1 2.8 2.8v4.8a.4.4 0 0 1-.4.4h-.8a.4.4 0 0 1-.4-.4V15H5.6v1.2a.4.4 0 0 1-.4.4h-.8a.4.4 0 0 1-.4-.4V7.4c0-.22.18-.4.4-.4zm4 .8a2 2 0 1 1 0 4 2 2 0 0 1 0-4z">
                                </path>
                            </g>
                        </g>
                    </svg>
                    <span class="font-weight-500">3</span>
                </div>
                <div class="d-flex flex-row gap-1 align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="svg-custom">
                        <g fill="none">
                            <g data-name="Icon awesome-bath">
                                <path
                                    d="M19.25 12H6.5V7.5a1 1 0 0 1 1.84-.54 2.12 2.12 0 0 0 .22 2.6.38.38 0 0 0 0 .5l.37.37a.38.38 0 0 0 .53 0l2.97-2.98a.38.38 0 0 0 0-.52l-.36-.36a.38.38 0 0 0-.5-.01 2.12 2.12 0 0 0-2.02-.48A2.5 2.5 0 0 0 5 7.5V12h-.25a.75.75 0 0 0-.75.75v.5a.75.75 0 0 0 .75.75H5v1a3 3 0 0 0 1 2.24v1a.75.75 0 0 0 .75.76h.5a.75.75 0 0 0 .75-.75V18h8v.25a.75.75 0 0 0 .75.75h.5a.75.75 0 0 0 .75-.75v-1.01A3 3 0 0 0 19 15v-1h.25a.75.75 0 0 0 .75-.75v-.5a.75.75 0 0 0-.75-.75z">
                                </path>
                                <path fill="#000"
                                    d="M7 14v1c0 .4.2.63.33.75l.29.25h8.76l.3-.25A1 1 0 0 0 17 15v-1H7m.5-9c.85 0 1.6.43 2.05 1.08a2.12 2.12 0 0 1 2 .48.37.37 0 0 1 .52 0l.36.37c.14.14.14.38 0 .53l-2.97 2.97a.38.38 0 0 1-.53 0l-.36-.36a.37.37 0 0 1 0-.5 2.12 2.12 0 0 1-.23-2.6 1 1 0 0 0-1.84.54v4.5h12.75c.4 0 .75.34.75.75v.5c0 .41-.34.75-.75.75H19v1a3 3 0 0 1-1 2.24v1c0 .42-.34.76-.75.76h-.5a.75.75 0 0 1-.75-.75v-.25H8v.25c0 .41-.34.75-.75.75h-.5a.75.75 0 0 1-.75-.76v-1.01A3 3 0 0 1 5 15v-1h-.25a.75.75 0 0 1-.75-.75v-.5c0-.4.34-.75.75-.75H5V7.5A2.5 2.5 0 0 1 7.5 5z">
                                </path>
                            </g>
                            <path d="M0 0h24v24H0z"></path>
                        </g>
                    </svg>
                    <span class="font-weight-500">4</span>
                </div>
                <div class="d-flex flex-row gap-1 align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="svg-custom">
                        <path
                            d="M10.4 16.83L9.53 16 8.1 17.4 8 6.57l1.5 1.56.9-.95L7.23 4l-3.2 3.17.9.95 1.5-1.56.12 10.85-1.6-1.51-.92.93L7.22 20zm8.8 2.37a.8.8 0 0 0 .8-.8V5.6a.8.8 0 0 0-.8-.8h-4.8a.8.8 0 0 0-.8.8v12.8a.8.8 0 0 0 .8.8zm-.8-1.6h-3.2V16h1.6v-1.6h-1.6v-1.6h1.6v-1.6h-1.6V9.6h1.6V8h-1.6V6.4h3.2z">
                        </path>
                    </svg>
                    <span class="font-weight-500">Marla</span>
                </div>
            </div>
            <div class="mt-2">
                <p class="prop-price-text line-clamp-one font-weight-400 font-size-14 detial-text-top">
                    Park View City, Lahore
                </p>
                <div class="detail-text flex-row align-items-center">
                    <div class="cf36e19e">
                        <span class="b779b320">Lake City Lahore Covered over an a</span>
                    </div>
                    ...<a href="#" class="_6e9f9ae0 d-inline-block">more</a>
                </div>
            </div>
            <div class="d-flex justify-content-between gap-1">
                <div class="card-btns d-flex flex-row gap-2 align-items-end mt-1">
                    <button class="email-msg-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" style="height: 1.1rem; width: 1rem">
                            <path fill="#041E42"
                                d="M28.7 5.3H3.3A3.3 3.3 0 0 0 0 8.6v14.8c0 1.8 1.4 3.3 3.3 3.3h25.4c1.8 0 3.3-1.4 3.3-3.3V8.7c0-1.9-1.4-3.3-3.3-3.4zm-17 12l-8 6.6c-.3.1-.6.1-1-.2-.2-.3 0-.7.2-1l8-6.6c.3-.3.7-.1 1 .1.2.4.1.8-.2 1zm17.5 6.4c-.3.2-.6.3-1 0l-8-6.6c-.2-.1-.2-.5 0-.8 0-.3.6-.3.8 0l8 6.6c.4.1.4.5.2.8zm0-14.5l-11 7.5c-.6.4-1.4.6-2 .7-.9 0-1.6-.3-2.2-.7L3 9.2c-.4-.2-.4-.6-.2-.9.2-.3.6-.4 1-.2l10.8 7.5c.8.5 1.9.5 2.7 0l11-7.5c.2-.3.6-.1.8 0 .3.4.3.8 0 1z">
                            </path>
                        </svg>
                    </button>
                    <button class="email-msg-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" data-name="Group 5" viewBox="0 0 20 20"
                            style="height: 1.3rem; width: 1.3rem">
                            <path fill="none" d="M0 0h20v20H0z"></path>
                            <path fill="#041E42"
                                d="M10 3.6a6.4 6.4 0 0 0-5.18 10.15l-.8 2.38 2.46-.79A6.4 6.4 0 1 0 10 3.6z"></path>
                            <path fill="#fafafa"
                                d="M13.83 12.72a1.86 1.86 0 0 1-1.3.93c-.34.08-.79.13-2.3-.5a8.26 8.26 0 0 1-3.27-2.9 3.79 3.79 0 0 1-.78-2 2.12 2.12 0 0 1 .67-1.61.95.95 0 0 1 .67-.24h.22c.2.02.3.03.42.34l.6 1.43a.4.4 0 0 1 .02.35 1.14 1.14 0 0 1-.21.3c-.1.12-.2.2-.29.32-.09.1-.19.22-.08.42a5.87 5.87 0 0 0 1.07 1.33 4.83 4.83 0 0 0 1.54.96.41.41 0 0 0 .47-.08 8 8 0 0 0 .51-.68.37.37 0 0 1 .47-.15c.18.07 1.12.53 1.32.63s.32.14.36.23a1.66 1.66 0 0 1-.11.92z">
                            </path>
                        </svg>
                    </button>
                    <button class="call-btn d-flex flex-row align-items-center gap-md-2 gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="#fff"
                            class="_40c10793">
                            <path
                                d="M13.3 10.3A7.6 7.6 0 0 1 11 10a.7.7 0 0 0-.7.1l-1 1.4a10.1 10.1 0 0 1-4.6-4.6L6 5.7A.7.7 0 0 0 6 5a7.4 7.4 0 0 1-.3-2.3A.7.7 0 0 0 5 2H2.8c-.4 0-.8.2-.8.7A11.4 11.4 0 0 0 13.3 14a.7.7 0 0 0 .7-.8V11a.7.7 0 0 0-.7-.6z">
                            </path>
                        </svg>
                        <span>CALL</span>
                    </button>
                </div>
                <div class="hover-prop">
                    <img src="assets/images/real-estate-small.jpg" class="before-hover">
                    <div class="after-hover">
                        <div class="d-flex flex-column gap-1">
                            <img src="assets/images/real-estate-small.jpg" class="before-hover">
                            <span class="muted-text">Registerd Since : 2023</span>
                            <p class="font-weight-500 line-clamp-one">
                                2024 Propeties for sale
                            </p>
                            <p class="font-weight-500 line-clamp-one">
                                0 Propeties for Rent
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </li>
    <!-- super-hot -->
    <li class="prop-card-child super-hot">
        <div id="propcardslider" class="carousel slide pointer-event" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item">
                    <div class="image-wrapper position-relative">
                        <figure class="m-0">
                            <img src="assets/images/screencapture-file-C-Users-Touch-Desktop-zameen-index-html-2023-12-23-19_31_15.png"
                                alt="" srcset="">
                        </figure>
                        <div class="top-data d-flex flex-row justify-content-between align-items-center">
                            <label class="super-hot-label">super hot</label>
                            <label class="titanium">Titanium</label>
                        </div>
                        <div class="bottom-data d-flex flex-row justify-content-between align-items-center">
                            <div class="bg-light-black d-flex flex-row gap-1 align-items-center">
                                <span class="view-count-white">11</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" class="white-svg">
                                    <path fill="none" d="M0 0h16v16H0z"></path>
                                    <g fill="#fff" data-name="Icon ionic-ios-camera">
                                        <path d="M9.8 8.24a2.08 2.08 0 1 1-2.08-2.09 2.08 2.08 0 0 1 2.08 2.1z"></path>
                                        <path
                                            d="M13.57 4.06H11.6a.59.59 0 0 1-.44-.2c-1.03-1.15-1.4-1.54-1.83-1.54h-3.1c-.43 0-.84.4-1.88 1.55a.58.58 0 0 1-.43.2h-.14v-.3a.3.3 0 0 0-.29-.29h-.94c-.16 0-.3.13-.3.58H2A1.18 1.18 0 0 0 .77 5.18v6.37a1.25 1.25 0 0 0 1.21 1.2h11.6a1.16 1.16 0 0 0 1.1-1.2V5.17a1.08 1.08 0 0 0-1.1-1.1zm-5.7 7.26a3.1 3.1 0 1 1 2.95-2.95 3.1 3.1 0 0 1-2.95 2.95zm3.33-5.16a.47.47 0 1 1 .47-.47.47.47 0 0 1-.47.47z">
                                        </path>
                                    </g>
                                </svg>
                            </div>
                            <div class="bg-light-black d-flex flex-row gap-1 align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="white-svg" viewBox="0 0 9 13"
                                    style="width: 0.9rem; height: 0.8rem">
                                    <path fill="#FFF"
                                        d="M4.5 0C2 0 0 2 0 4.4 0 7.8 4.5 13 4.5 13S9 7.8 9 4.4C9 2 7 0 4.5 0zm0 6.3c-1.1 0-1.9-.9-1.9-1.9a2 2 0 0 1 1.9-1.9c1.1 0 1.9.8 1.9 1.9 0 1-.8 1.9-1.9 1.9z">
                                    </path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="white-svg" viewBox="0 0 13 12"
                                    style="width: 0.9rem; height: 1.2rem">
                                    <path fill="#FFF"
                                        d="M9.7 2V0L13 3.3 9.7 6.6V4.3c-3.9.5-5.8 4.8-5.8 4.8 0-3.6 2.5-6.7 5.8-7.1zm1.2 9.2H.8V2.5H7a12 12 0 0 1 2-.8H.4c-.2 0-.4.2-.4.4v9.5c0 .3.2.4.4.4h10.9c.2 0 .4-.2.4-.4V5.2l-.8.8v5.2z">
                                    </path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" overflow="visible" viewBox="0 0 20 18.4"
                                    class="white-svg" style="width: 0.9rem; height: 0.8rem">
                                    <path
                                        d="M10 18.4L8.6 17C3.4 12.4 0 9.3 0 5.5A5.5 5.5 0 0 1 5.5 0 6 6 0 0 1 10 2a6 6 0 0 1 4.5-2A5.5 5.5 0 0 1 20 5.5c0 3.8-3.4 6.9-8.6 11.5z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <!-- slider -->
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="image-wrapper position-relative">
                        <figure class="m-0">
                            <img src="assets/images/screencapture-file-C-Users-Touch-Desktop-zameen-index-html-2023-12-23-19_31_15.png"
                                alt="" srcset="">
                        </figure>
                        <div class="top-data d-flex flex-row justify-content-between align-items-center">
                            <label class="super-hot-label">super hot</label>
                            <label class="titanium">Titanium</label>
                        </div>
                        <div class="bottom-data d-flex flex-row justify-content-between align-items-center">
                            <div class="bg-light-black d-flex flex-row gap-1 align-items-center">
                                <span class="view-count-white">11</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" class="white-svg">
                                    <path fill="none" d="M0 0h16v16H0z"></path>
                                    <g fill="#fff" data-name="Icon ionic-ios-camera">
                                        <path d="M9.8 8.24a2.08 2.08 0 1 1-2.08-2.09 2.08 2.08 0 0 1 2.08 2.1z"></path>
                                        <path
                                            d="M13.57 4.06H11.6a.59.59 0 0 1-.44-.2c-1.03-1.15-1.4-1.54-1.83-1.54h-3.1c-.43 0-.84.4-1.88 1.55a.58.58 0 0 1-.43.2h-.14v-.3a.3.3 0 0 0-.29-.29h-.94c-.16 0-.3.13-.3.58H2A1.18 1.18 0 0 0 .77 5.18v6.37a1.25 1.25 0 0 0 1.21 1.2h11.6a1.16 1.16 0 0 0 1.1-1.2V5.17a1.08 1.08 0 0 0-1.1-1.1zm-5.7 7.26a3.1 3.1 0 1 1 2.95-2.95 3.1 3.1 0 0 1-2.95 2.95zm3.33-5.16a.47.47 0 1 1 .47-.47.47.47 0 0 1-.47.47z">
                                        </path>
                                    </g>
                                </svg>
                            </div>
                            <div class="bg-light-black d-flex flex-row gap-1 align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="white-svg" viewBox="0 0 9 13"
                                    style="width: 0.9rem; height: 0.8rem">
                                    <path fill="#FFF"
                                        d="M4.5 0C2 0 0 2 0 4.4 0 7.8 4.5 13 4.5 13S9 7.8 9 4.4C9 2 7 0 4.5 0zm0 6.3c-1.1 0-1.9-.9-1.9-1.9a2 2 0 0 1 1.9-1.9c1.1 0 1.9.8 1.9 1.9 0 1-.8 1.9-1.9 1.9z">
                                    </path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="white-svg" viewBox="0 0 13 12"
                                    style="width: 0.9rem; height: 1.2rem">
                                    <path fill="#FFF"
                                        d="M9.7 2V0L13 3.3 9.7 6.6V4.3c-3.9.5-5.8 4.8-5.8 4.8 0-3.6 2.5-6.7 5.8-7.1zm1.2 9.2H.8V2.5H7a12 12 0 0 1 2-.8H.4c-.2 0-.4.2-.4.4v9.5c0 .3.2.4.4.4h10.9c.2 0 .4-.2.4-.4V5.2l-.8.8v5.2z">
                                    </path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" overflow="visible" viewBox="0 0 20 18.4"
                                    class="white-svg" style="width: 0.9rem; height: 0.8rem">
                                    <path
                                        d="M10 18.4L8.6 17C3.4 12.4 0 9.3 0 5.5A5.5 5.5 0 0 1 5.5 0 6 6 0 0 1 10 2a6 6 0 0 1 4.5-2A5.5 5.5 0 0 1 20 5.5c0 3.8-3.4 6.9-8.6 11.5z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <!-- slider -->
                    </div>
                </div>
                <div class="carousel-item active">
                    <div class="image-wrapper position-relative">
                        <figure class="m-0">
                            <img src="assets/images/screencapture-file-C-Users-Touch-Desktop-zameen-index-html-2023-12-23-19_31_15.png"
                                alt="" srcset="">
                        </figure>
                        <div class="top-data d-flex flex-row justify-content-between align-items-center">
                            <label class="super-hot-label">super hot</label>
                            <label class="titanium">Titanium</label>
                        </div>
                        <div class="bottom-data d-flex flex-row justify-content-between align-items-center">
                            <div class="bg-light-black d-flex flex-row gap-1 align-items-center">
                                <span class="view-count-white">11</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" class="white-svg">
                                    <path fill="none" d="M0 0h16v16H0z"></path>
                                    <g fill="#fff" data-name="Icon ionic-ios-camera">
                                        <path d="M9.8 8.24a2.08 2.08 0 1 1-2.08-2.09 2.08 2.08 0 0 1 2.08 2.1z"></path>
                                        <path
                                            d="M13.57 4.06H11.6a.59.59 0 0 1-.44-.2c-1.03-1.15-1.4-1.54-1.83-1.54h-3.1c-.43 0-.84.4-1.88 1.55a.58.58 0 0 1-.43.2h-.14v-.3a.3.3 0 0 0-.29-.29h-.94c-.16 0-.3.13-.3.58H2A1.18 1.18 0 0 0 .77 5.18v6.37a1.25 1.25 0 0 0 1.21 1.2h11.6a1.16 1.16 0 0 0 1.1-1.2V5.17a1.08 1.08 0 0 0-1.1-1.1zm-5.7 7.26a3.1 3.1 0 1 1 2.95-2.95 3.1 3.1 0 0 1-2.95 2.95zm3.33-5.16a.47.47 0 1 1 .47-.47.47.47 0 0 1-.47.47z">
                                        </path>
                                    </g>
                                </svg>
                            </div>
                            <div class="bg-light-black d-flex flex-row gap-1 align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="white-svg" viewBox="0 0 9 13"
                                    style="width: 0.9rem; height: 0.8rem">
                                    <path fill="#FFF"
                                        d="M4.5 0C2 0 0 2 0 4.4 0 7.8 4.5 13 4.5 13S9 7.8 9 4.4C9 2 7 0 4.5 0zm0 6.3c-1.1 0-1.9-.9-1.9-1.9a2 2 0 0 1 1.9-1.9c1.1 0 1.9.8 1.9 1.9 0 1-.8 1.9-1.9 1.9z">
                                    </path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="white-svg" viewBox="0 0 13 12"
                                    style="width: 0.9rem; height: 1.2rem">
                                    <path fill="#FFF"
                                        d="M9.7 2V0L13 3.3 9.7 6.6V4.3c-3.9.5-5.8 4.8-5.8 4.8 0-3.6 2.5-6.7 5.8-7.1zm1.2 9.2H.8V2.5H7a12 12 0 0 1 2-.8H.4c-.2 0-.4.2-.4.4v9.5c0 .3.2.4.4.4h10.9c.2 0 .4-.2.4-.4V5.2l-.8.8v5.2z">
                                    </path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" overflow="visible" viewBox="0 0 20 18.4"
                                    class="white-svg" style="width: 0.9rem; height: 0.8rem">
                                    <path
                                        d="M10 18.4L8.6 17C3.4 12.4 0 9.3 0 5.5A5.5 5.5 0 0 1 5.5 0 6 6 0 0 1 10 2a6 6 0 0 1 4.5-2A5.5 5.5 0 0 1 20 5.5c0 3.8-3.4 6.9-8.6 11.5z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <!-- slider -->
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev min-slider" type="button" data-bs-target="#propcardslider"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" class="slider-svg back"
                        viewBox="0 0 32 32">
                        <path
                            d="M7.55 3.36c-.8-.8-.7-2.1.1-2.8.8-.7 2-.7 2.7 0l14 14c.8.8.8 2 0 2.8l-14 14c-.8.8-2 .8-2.8.1-.8-.8-.8-2-.1-2.8l.1-.1 12.6-12.5-12.6-12.7z">
                        </path>
                    </svg>
                </span>
                <span class="visually-hidden"> </span>
            </button>
            <button class="carousel-control-next min-slider" type="button" data-bs-target="#propcardslider"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" class="slider-svg"
                        viewBox="0 0 32 32">
                        <path
                            d="M7.55 3.36c-.8-.8-.7-2.1.1-2.8.8-.7 2-.7 2.7 0l14 14c.8.8.8 2 0 2.8l-14 14c-.8.8-2 .8-2.8.1-.8-.8-.8-2-.1-2.8l.1-.1 12.6-12.5-12.6-12.7z">
                        </path>
                    </svg>
                </span>
                <span class="visually-hidden"> </span>
            </button>
        </div>
        <div class="card-body-custom">
            <div class="d-flex flex-row justify-content-between gap-2">
                <span class="prop-count">Added: 33 minutes ago</span>
                <div class="d-flex flex-row gap-1 align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="c1a24809" viewBox="0 0 32 32"
                        style="width: 1rem; height: 1rem">
                        <g fill="#C32C2B">
                            <path
                                d="M6.4 27.4h-.2l-.1-.3c-3-3.8-3.5-8.4-1.6-13.6-.6-1-1-2-1.1-3.2l-.2-.3-.3.1c-2.6 4.3-4.8 10.6-.5 16 1.8 1.8 4.3 3 6.9 3.3a8 8 0 0 1-2.9-2z">
                            </path>
                            <path
                                d="M15.6 29.6c-3.1.1-6.1-1-8.3-3.3-4.3-5.4-2.1-11.7.5-16h.4c.1 0 .2 0 .2.2.1 1.7.8 3.2 2 4.4.4-1.4 1.1-2.8 2-4 1.8-2.3 2.5-5.2 2-8l.2-.4h.1l.2.1.5.6c1.2 1.4 2.3 3 3.2 4.5.9 2 1.5 3.8 1.8 6 .7-.6 1.3-1.3 1.7-2 .3-1 .3-2-.1-3l.1-.4h.4a16 16 0 0 1 4.9 11.8 10 10 0 0 1-6.8 9c-1.7.3-3.3.5-5 .5zm-.9-13.8c-.8.8-1.5 1.8-2.1 2.8a9.1 9.1 0 0 0-1.4 4.2c0 3.6 2 6.2 4.6 6.2 1.4 0 2.8-.6 3.7-1.7 1-1 1.4-2.7 1.2-4.2-.4-1.6-1.1-3.2-2.2-4.5-.2.6-.5 1.1-.9 1.5l-.6.5h-.1c-.5 0-.9-.3-1.3-.7a5.8 5.8 0 0 1-.9-4z">
                            </path>
                            <path
                                d="M31.9 18a15 15 0 0 0-4.8-9.8h-.4c-.1.1-.2.2-.1.3.3 1 .4 2 .1 3l-.1.1c1 2 1.7 4.1 1.9 6.3.6 4.7-1.8 9.4-6 11.6.9 0 1.8-.3 2.7-.6C29 27.5 31.7 24 32 20l-.1-2z">
                            </path>
                        </g>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" aria-label="Trusted badge"
                        style="width: 1rem; height: 1rem">
                        <g fill="#34A048">
                            <path
                                d="M25.3 16.8V6.5l-5-1.3-4.1-1h-.3l-4 1c-1.8.3-3.5.8-5.3 1.2V17c-.1 2.1.7 4.2 2 5.8 2 2.3 4.5 4.1 7.2 5.2 2.5-1 4.7-2.5 6.6-4.4 2-1.7 3-4.2 2.9-6.7zm-3.2-4.4l-2.5 3.2-4 5.2c-.8 1-1.3 1-2.1 0L9.9 16a1 1 0 0 1 0-1.5c.4-.4 1.1-.3 1.5.1l2.6 2.3.6.5.3-.5 5.6-5.5.7-.5c.4 0 .9.1 1.1.5.1.2.1.7-.2 1.1z">
                            </path>
                            <path
                                d="M29.1 16.8V5a2 2 0 0 0-1.7-2.2l-6-1.5L16.8.1h-1.7l-4.5 1.1-6.1 1.5C3.5 3 2.7 4 2.8 5v11.9c-.1 3 1 6 2.9 8.2a25 25 0 0 0 9.3 6.7l.9.2c.3 0 .7 0 1-.2a24 24 0 0 0 8.4-5.7c2.6-2.3 4-5.7 3.8-9.2zm-4.8 8.5c-2.3 2.3-5 4.1-7.9 5.3-.2.1-.5.1-.8 0a22 22 0 0 1-8.8-6.3c-1.8-2-2.7-4.7-2.6-7.4V5c0-.5.1-.8.6-.9l10.6-2.6h1C20 2.4 23.5 3.2 27 4c.5.1.6.4.6.8v11.8c.3 3.4-1 6.5-3.3 8.7z">
                            </path>
                        </g>
                    </svg>
                </div>
            </div>
            <div class="d-flex flex-column gap-1 my-3">
                <p class="prop-price-text"><span>PKR</span> 1.48 Crore</p>
                <p class="prop-price-text line-clamp-one">
                    Park View City, Lahore
                </p>
            </div>
            <div class="d-flex flex-row gap-2">
                <div class="d-flex flex-row gap-1 align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="svg-custom">
                        <g fill="none">
                            <path d="M0 0h24v24H0z"></path>
                            <g data-name="Icon awesome-bed">
                                <path
                                    d="M8.4 11.8a2 2 0 1 0-2-2 2 2 0 0 0 2 2zm8.8-3.2h-5.6a.4.4 0 0 0-.4.4v3.6H5.6V7.4a.4.4 0 0 0-.4-.4h-.8a.4.4 0 0 0-.4.4v8.8a.4.4 0 0 0 .4.4h.8a.4.4 0 0 0 .4-.4V15h12.8v1.2a.4.4 0 0 0 .4.4h.8a.4.4 0 0 0 .4-.4v-4.8a2.8 2.8 0 0 0-2.8-2.8z">
                                </path>
                                <path fill="#000"
                                    d="M13.2 10.6V13H18v-1.6a.8.8 0 0 0-.8-.8h-4M4.4 7h.8c.22 0 .4.18.4.4v5.2h5.6V9c0-.22.18-.4.4-.4h5.6a2.8 2.8 0 0 1 2.8 2.8v4.8a.4.4 0 0 1-.4.4h-.8a.4.4 0 0 1-.4-.4V15H5.6v1.2a.4.4 0 0 1-.4.4h-.8a.4.4 0 0 1-.4-.4V7.4c0-.22.18-.4.4-.4zm4 .8a2 2 0 1 1 0 4 2 2 0 0 1 0-4z">
                                </path>
                            </g>
                        </g>
                    </svg>
                    <span class="font-weight-500">3</span>
                </div>
                <div class="d-flex flex-row gap-1 align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="svg-custom">
                        <g fill="none">
                            <g data-name="Icon awesome-bath">
                                <path
                                    d="M19.25 12H6.5V7.5a1 1 0 0 1 1.84-.54 2.12 2.12 0 0 0 .22 2.6.38.38 0 0 0 0 .5l.37.37a.38.38 0 0 0 .53 0l2.97-2.98a.38.38 0 0 0 0-.52l-.36-.36a.38.38 0 0 0-.5-.01 2.12 2.12 0 0 0-2.02-.48A2.5 2.5 0 0 0 5 7.5V12h-.25a.75.75 0 0 0-.75.75v.5a.75.75 0 0 0 .75.75H5v1a3 3 0 0 0 1 2.24v1a.75.75 0 0 0 .75.76h.5a.75.75 0 0 0 .75-.75V18h8v.25a.75.75 0 0 0 .75.75h.5a.75.75 0 0 0 .75-.75v-1.01A3 3 0 0 0 19 15v-1h.25a.75.75 0 0 0 .75-.75v-.5a.75.75 0 0 0-.75-.75z">
                                </path>
                                <path fill="#000"
                                    d="M7 14v1c0 .4.2.63.33.75l.29.25h8.76l.3-.25A1 1 0 0 0 17 15v-1H7m.5-9c.85 0 1.6.43 2.05 1.08a2.12 2.12 0 0 1 2 .48.37.37 0 0 1 .52 0l.36.37c.14.14.14.38 0 .53l-2.97 2.97a.38.38 0 0 1-.53 0l-.36-.36a.37.37 0 0 1 0-.5 2.12 2.12 0 0 1-.23-2.6 1 1 0 0 0-1.84.54v4.5h12.75c.4 0 .75.34.75.75v.5c0 .41-.34.75-.75.75H19v1a3 3 0 0 1-1 2.24v1c0 .42-.34.76-.75.76h-.5a.75.75 0 0 1-.75-.75v-.25H8v.25c0 .41-.34.75-.75.75h-.5a.75.75 0 0 1-.75-.76v-1.01A3 3 0 0 1 5 15v-1h-.25a.75.75 0 0 1-.75-.75v-.5c0-.4.34-.75.75-.75H5V7.5A2.5 2.5 0 0 1 7.5 5z">
                                </path>
                            </g>
                            <path d="M0 0h24v24H0z"></path>
                        </g>
                    </svg>
                    <span class="font-weight-500">4</span>
                </div>
                <div class="d-flex flex-row gap-1 align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="svg-custom">
                        <path
                            d="M10.4 16.83L9.53 16 8.1 17.4 8 6.57l1.5 1.56.9-.95L7.23 4l-3.2 3.17.9.95 1.5-1.56.12 10.85-1.6-1.51-.92.93L7.22 20zm8.8 2.37a.8.8 0 0 0 .8-.8V5.6a.8.8 0 0 0-.8-.8h-4.8a.8.8 0 0 0-.8.8v12.8a.8.8 0 0 0 .8.8zm-.8-1.6h-3.2V16h1.6v-1.6h-1.6v-1.6h1.6v-1.6h-1.6V9.6h1.6V8h-1.6V6.4h3.2z">
                        </path>
                    </svg>
                    <span class="font-weight-500">Marla</span>
                </div>
            </div>
            <div class="mt-2">
                <p class="prop-price-text line-clamp-one font-weight-400 font-size-14 detial-text-top">
                    Park View City, Lahore
                </p>
                <div class="detail-text flex-row align-items-center">
                    <div class="cf36e19e">
                        <span class="b779b320">Lake City Lahore Covered over an a</span>
                    </div>
                    ...<a href="#" class="_6e9f9ae0 d-inline-block">more</a>
                </div>
            </div>
            <div class="d-flex justify-content-between gap-1">
                <div class="card-btns d-flex flex-row gap-2 align-items-end mt-1">
                    <button class="email-msg-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" style="height: 1.1rem; width: 1rem">
                            <path fill="#041E42"
                                d="M28.7 5.3H3.3A3.3 3.3 0 0 0 0 8.6v14.8c0 1.8 1.4 3.3 3.3 3.3h25.4c1.8 0 3.3-1.4 3.3-3.3V8.7c0-1.9-1.4-3.3-3.3-3.4zm-17 12l-8 6.6c-.3.1-.6.1-1-.2-.2-.3 0-.7.2-1l8-6.6c.3-.3.7-.1 1 .1.2.4.1.8-.2 1zm17.5 6.4c-.3.2-.6.3-1 0l-8-6.6c-.2-.1-.2-.5 0-.8 0-.3.6-.3.8 0l8 6.6c.4.1.4.5.2.8zm0-14.5l-11 7.5c-.6.4-1.4.6-2 .7-.9 0-1.6-.3-2.2-.7L3 9.2c-.4-.2-.4-.6-.2-.9.2-.3.6-.4 1-.2l10.8 7.5c.8.5 1.9.5 2.7 0l11-7.5c.2-.3.6-.1.8 0 .3.4.3.8 0 1z">
                            </path>
                        </svg>
                    </button>
                    <button class="email-msg-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" data-name="Group 5" viewBox="0 0 20 20"
                            style="height: 1.3rem; width: 1.3rem">
                            <path fill="none" d="M0 0h20v20H0z"></path>
                            <path fill="#041E42"
                                d="M10 3.6a6.4 6.4 0 0 0-5.18 10.15l-.8 2.38 2.46-.79A6.4 6.4 0 1 0 10 3.6z"></path>
                            <path fill="#fafafa"
                                d="M13.83 12.72a1.86 1.86 0 0 1-1.3.93c-.34.08-.79.13-2.3-.5a8.26 8.26 0 0 1-3.27-2.9 3.79 3.79 0 0 1-.78-2 2.12 2.12 0 0 1 .67-1.61.95.95 0 0 1 .67-.24h.22c.2.02.3.03.42.34l.6 1.43a.4.4 0 0 1 .02.35 1.14 1.14 0 0 1-.21.3c-.1.12-.2.2-.29.32-.09.1-.19.22-.08.42a5.87 5.87 0 0 0 1.07 1.33 4.83 4.83 0 0 0 1.54.96.41.41 0 0 0 .47-.08 8 8 0 0 0 .51-.68.37.37 0 0 1 .47-.15c.18.07 1.12.53 1.32.63s.32.14.36.23a1.66 1.66 0 0 1-.11.92z">
                            </path>
                        </svg>
                    </button>
                    <button class="call-btn d-flex flex-row align-items-center gap-md-2 gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="#fff"
                            class="_40c10793">
                            <path
                                d="M13.3 10.3A7.6 7.6 0 0 1 11 10a.7.7 0 0 0-.7.1l-1 1.4a10.1 10.1 0 0 1-4.6-4.6L6 5.7A.7.7 0 0 0 6 5a7.4 7.4 0 0 1-.3-2.3A.7.7 0 0 0 5 2H2.8c-.4 0-.8.2-.8.7A11.4 11.4 0 0 0 13.3 14a.7.7 0 0 0 .7-.8V11a.7.7 0 0 0-.7-.6z">
                            </path>
                        </svg>
                        <span>CALL</span>
                    </button>
                </div>
                <div class="hover-prop">
                    <img src="assets/images/real-estate-small.jpg" class="before-hover">
                    <div class="after-hover">
                        <div class="d-flex flex-column gap-1">
                            <img src="assets/images/real-estate-small.jpg" class="before-hover">
                            <span class="muted-text">Registerd Since : 2023</span>
                            <p class="font-weight-500 line-clamp-one">
                                2024 Propeties for sale
                            </p>
                            <p class="font-weight-500 line-clamp-one">
                                0 Propeties for Rent
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </li>
</ul>
</div>
</div>
</section>



<!-- Grand-famlily-section -->



<div id="street-view-container">
    <button id="closehandler" class="d-flex align-items-center"><svg width="20" height="20" viewBox="0 0 20 20"
            fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1.7002 18.2999L18.0802 1.91992M1.7002 1.91992L18.0802 18.2999" stroke="#6CACE3" stroke-width="3"
                stroke-linecap="round" stroke-linejoin="round" />
        </svg>
    </button>
    <div id="cutommap">
    </div>
    <div id="pano"></div>
</div>


@endsection

@push('scripts')

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"
    integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script>
var swiper = new Swiper(".mySwiperreviewsim", {
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

<!-- light box -->
<script src="{{ asset('zameen/assets/js/lightgallery.umd.js') }}"></script>
<script src="{{ asset('zameen/assets/js/lg-autoplay.umd.js') }}"></script>
<script src="{{ asset('zameen/assets/js/lg-thumbnail.umd.js') }}"></script>
<script src="https://api-maps.yandex.ru/2.1/?apikey=39260d20-1d00-4a63-a31e-10bfbc19bc05&lang=en_US"
    type="text/javascript"></script>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBRLaJEjRudGCuEi1_pqC4n3hpVHIyJJZA&callback=initMap">
</script>
<script>
// video controls
let video = document.querySelectorAll('.video');
let video_play = document.querySelectorAll('.play');
let video_pause = document.querySelectorAll('.pause');

video_pause.forEach(btn => {
    btn.style.cssText = `display:none`;
});

console.log(video_play, video_pause);
video_play.forEach((btn, i) => {
    btn.addEventListener('click', () => {
        video[i].play();
        btn.style.cssText = `display:none`;
        video_pause[i].style.cssText = `display:block`;
    })
});

video_pause.forEach((btn, i) => {
    btn.addEventListener('click', () => {
        video[i].pause();
        btn.style.cssText = `display:none`
        video_play[i].style.cssText = `display:block`
    })
});

lightGallery(document.getElementById('lightgallery'), {
    plugins: [lgAutoplay, lgThumbnail],
});


function initialize() {
    const fenway = {
        lat: 42.345573,
        lng: -71.098326
    };
    const map = new google.maps.Map(document.getElementById("cutommap"), {
        center: fenway,
        zoom: 14,
    });
    const panorama = new google.maps.StreetViewPanorama(
        document.getElementById("pano"), {
            position: fenway,
            pov: {
                heading: 34,
                pitch: 10,
            },
        }
    );

    map.setStreetView(panorama);
}
window.initialize = initialize;

const maphandler = document.getElementById("streetviewget");
maphandler.addEventListener("click", () => {
    document.getElementById("street-view-container").style.display = "block";
});
const clshandler = document.getElementById("closehandler")
clshandler.addEventListener("click", () => {
    document.getElementById("street-view-container").style.display = "none";
})
//  seemore and lesstext
const seediscription = document.querySelector(".see-more-btn");
seediscription.addEventListener("click", () => {
    if (seediscription.classList.contains("collapsed")) {
        seediscription.innerHTML = "See full description";
    } else {
        seediscription.innerHTML = "See less description";
    }
});
</script>
<script>
$(function() {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // RATING
    $("#rateYo").rateYo({
            rating: <?php echo json_encode($rating); ?>,
            halfStar: true,
            starWidth: "26px"
        })
        .on("rateyo.set", function(e, data) {

            var rating = data.rating;
            var property_id = <?php echo json_encode($property->id); ?>;
            var user_id = <?php echo json_encode( auth()->id() ); ?>;

            $.post("{{ route('property.rating') }}", {
                rating: rating,
                property_id: property_id,
                user_id: user_id
            }, function(data) {
                if (data.rating.rating) {
                    M.toast({
                        html: 'Rating: ' + data.rating.rating + ' added successfully.',
                        classes: 'green darken-4'
                    })
                }
            });
        });


    // COMMENT
    $(document).on('click', '#commentreplay', function(e) {
        e.preventDefault();

        var commentid = $(this).data('commentid');

        $('#procomment-' + commentid).empty().append(
            `<div class="comment-box">
                    <form action="{{ route('property.comment',$property->id) }}" method="POST">
                        @csrf
                        <input type="hidden" name="parent" value="1">
                        <input type="hidden" name="parent_id" value="` + commentid + `">
                        
                        <textarea name="body" class="box" placeholder="Leave a comment"></textarea>
                        <input type="submit" class="btn indigo" value="Comment">
                    </form>
                </div>`
        );
    });

    // MESSAGE
    $(document).on('submit', '.agent-message-box', function(e) {
        e.preventDefault();

        var data = $(this).serialize();
        var url = "{{ route('property.message') }}";
        var btn = $('#msgsubmitbtn');

        $.ajax({
            type: 'POST',
            url: url,
            data: data,
            beforeSend: function() {
                $(btn).addClass('disabled');
                $(btn).empty().append(
                    'LOADING...<i class="material-icons left">rotate_right</i>');
            },
            success: function(data) {
                if (data.message) {
                    M.toast({
                        html: data.message,
                        classes: 'green darken-4'
                    })
                }
            },
            error: function(xhr) {
                M.toast({
                    html: xhr.statusText,
                    classes: 'red darken-4'
                })
            },
            complete: function() {
                $('form.agent-message-box')[0].reset();
                $(btn).removeClass('disabled');
                $(btn).empty().append('SEND<i class="material-icons left">send</i>');
            },
            dataType: 'json'
        });

    })
})
</script>





@endpush