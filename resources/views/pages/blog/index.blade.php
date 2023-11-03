@extends('frontend.layouts.apps')

@push('styles')
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blogs</title>

  </head>
@endpush

@section('content')
<!-- blogs-header -->
<section class="all-p">
    <div class="container-fluid px-4">
      <div class="row">
        <div class="col-12">
          <p class="intro-headig d-lg-inline-block d-none border-bottom pb-1 mt-5">Blogs</p>
          <!-- <div class="blog-banner-wrapper position-relative">
            <div>
              <img class="big-img" src="assets/images/blog-big.png">
            </div>
            <div class="blog-overlay">
              <p class="mb-2">10 Pros and Cons of living in Michigan</p>
              <span>Michigan is known as the Great Lake State for a reason. Residents can enjoy the natural
                lakeside attractions year-round, with four of the Great Lakes bordering Michigan.</span>
            </div>
          </div> -->
        </div>
        <div class="col-12 col-lg-6">
          <!-- <p class="intro-headig mt-5 mb-4">What’s New</p>
          <div class="row">
            <div class="col-md-6 mb-lg-0 mb-3">
              <div class="small-wrapper position-relative">
                <img src="assets/images/blog-sm-1.png">
                <div class="blog-overlay-small">
                  <p class="mb-2">15 Unique things to do in Arlington:</p>
                  <span>Visit Arlington’s four-acre Quincy park is a sensory-rich
                    environment for everyone.</span>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="small-wrapper position-relative">
                <img src="assets/images/blog-sm-2.png">
                <div class="blog-overlay-small">
                  <p class="mb-2">15 Unique things to do in Arlington:</p>
                  <span>Visit Arlington’s four-acre Quincy park is a sensory-rich
                    environment for everyone.</span>
                </div>
              </div>
            </div>
          </div> -->
          <!-- <div class="row mt-4">
            <div class="col-md-6 mb-lg-0 mb-3">
              <div class="small-wrapper position-relative">
                <img src="assets/images/blog-sm-3.png">
                <div class="blog-overlay-small">
                  <p class="mb-2">15 Unique things to do in Arlington:</p>
                  <span>Visit Arlington’s four-acre Quincy park is a sensory-rich
                    environment for everyone.</span>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="small-wrapper position-relative">
                <img src="assets/images/blog-sm-4.png">
                <div class="blog-overlay-small">
                  <p class="mb-2">15 Unique things to do in Arlington:</p>
                  <span>Visit Arlington’s four-acre Quincy park is a sensory-rich
                    environment for everyone.</span>
                </div>
              </div>
            </div>
          </div> -->
        </div>
      </div>
    </div>
  </section>
  <!-- blogs-cards -->
  <section class="all-p mt-5 mb-3">
    <div class="container-fluid px-4">
      <div class="row">
      <div class="col-lg-8 order-lg-0 order-1">
        <p class="intro-headig d-lg-none d-block border-bottom pb-1 my-3">Blogs</p>
        <div class="row">
            @foreach($posts as $post)
          <div class="col-md-6 mb-3">
            <div>
              <div class="card blog-cards">
                @if(Storage::disk('public')->exists('posts/'.$post->image) && $post->image)
                <img src="{{Storage::url('posts/'.$post->image)}}" class="card-img-top" alt="...">
                @endif
                <div class="card-body">
                    <a href="{{ route('blog.show',$post->slug) }}">
                  <h5 class="card-title">
                  
                    {{ $post->title }}
                   
                  </h5>
                </a>
                  <div class="d-flex flex-row justify-content-between align-items-center">
                    <div class="d-flex flex-row gap-2 align-items-center">
                      <div><img src="{{ asset('zameen/assets/images/Ellipse.png') }}" class="ellips"></div>
                      <div class="d-flex flex-column gap-0">
                        <span class="muted-heading">{{$post->user->name}}</span>
                        <span class="muted-plan">{{$post->created_at->diffForHumans()}}</span>
                      </div>
                    </div>
                    <div><svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="18" cy="18" r="17.25" stroke="#333333" stroke-opacity="0.1" stroke-width="1.5" />
                        <path
                          d="M22.3695 21.0833C21.4005 21.0833 20.5455 21.5528 19.9965 22.269L14.7353 18.3225C14.8448 18.0113 14.916 17.682 14.916 17.3333C14.916 16.9845 14.8448 16.6553 14.7353 16.344L19.9965 12.3975C20.5455 13.1138 21.4005 13.5833 22.3695 13.5833C24.024 13.5833 25.3695 12.2378 25.3695 10.5833C25.3695 8.92875 24.024 7.58325 22.3695 7.58325C20.715 7.58325 19.3695 8.92875 19.3695 10.5833C19.3695 10.7138 19.392 10.8383 19.4078 10.9643L13.8968 15.0983C13.3673 14.628 12.678 14.3333 11.916 14.3333C10.2615 14.3333 8.91602 15.6788 8.91602 17.3333C8.91602 18.9878 10.2615 20.3333 11.916 20.3333C12.678 20.3333 13.3673 20.0385 13.8968 19.5683L19.4078 23.7023C19.392 23.8283 19.3695 23.9528 19.3695 24.0833C19.3695 25.7378 20.715 27.0833 22.3695 27.0833C24.024 27.0833 25.3695 25.7378 25.3695 24.0833C25.3695 22.4288 24.024 21.0833 22.3695 21.0833ZM22.3695 9.08325C23.1968 9.08325 23.8695 9.756 23.8695 10.5833C23.8695 11.4105 23.1968 12.0833 22.3695 12.0833C21.5423 12.0833 20.8695 11.4105 20.8695 10.5833C20.8695 9.756 21.5423 9.08325 22.3695 9.08325ZM11.916 18.8333C11.0888 18.8333 10.416 18.1605 10.416 17.3333C10.416 16.506 11.0888 15.8333 11.916 15.8333C12.7433 15.8333 13.416 16.506 13.416 17.3333C13.416 18.1605 12.7433 18.8333 11.916 18.8333ZM22.3695 25.5833C21.5423 25.5833 20.8695 24.9105 20.8695 24.0833C20.8695 23.256 21.5423 22.5833 22.3695 22.5833C23.1968 22.5833 23.8695 23.256 23.8695 24.0833C23.8695 24.9105 23.1968 25.5833 22.3695 25.5833Z"
                          fill="#6CACE3" />
                      </svg>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
             @endforeach
         
        </div>
      </div>
      <div class="col-lg-4 order-lg-1 order-0 mb-3">
      <!-- Most-popular-blgs -->
      <div class="popular-blogs-wrapper px-3 py-3">
        <div class=""><h4 class="poplore-heading pb-2 mb-4">Most Popular</h4></div>
        <ul class="d-flex flex-column gap-3 list-unstyled popuplar-list">
            @foreach($posts as $post)
          <li>
            <div class="d-flex flex-column flex-md-row gap-3 align-items-center ">
              <div class="popular-blogs-img"><img src="{{Storage::url('posts/'.$post->image)}}"></div>
              <div class="popular-detail text-md-start text-center">New Year, New House? Here
                {{ $post->title }}
            </div>
            </div>
          </li>
          @endforeach
           
        </ul>
      </div>
      </div>
    </div>
  </div>
  </section>
  <!-- be the first -->
  <section class="all-p mt-5 mb-5">
    <div class="container-fluid px-md-4">
      <div class="be-first-wraper  py-5 px-2">
       <div class="row">
      <div class="col-md-6">
        <p class="be-heading mb-0 px-3 px-md-4">Be the first to see the latest housing news and advice:</p>
      </div>
      <div class="col-md-6 pe-md-5">
        <div class="input-group flex-nowrap">
          <div class="form-outline w-75">
            <input type="text" id="form1" class="form-control footer-input w-100" placeholder="Enter your Email">
          </div>
          <button type="button" class="btn-contain-normal">
            Submit
          </button>
        </div>
        <div>
          <span class="muted-plan be-first ps-1 pt-3 d-inline-block">By submitting your email you agree to zameen Terms of Use and Privacy Policy</span>
        </div>
      </div>
       </div>
      </div>
    </div>
  </section>
   
@endsection

@push('scripts')

@endpush