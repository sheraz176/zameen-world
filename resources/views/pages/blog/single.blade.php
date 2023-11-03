@extends('frontend.layouts.apps')

@push('styles')
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blogs Details</title>

  </head>
@endpush

@section('content')
<section>
    <div class="blog-detail-bg d-flex justify-content-center align-items-center flex-column text-center">
      <div class="text-section text-center banner-text">
        <h1>Buying a Home</h1>
        <span class="text-white d-inline-block">always on to guide you home</span>
      </div>
    </div>
  </section>
  <!-- blogs-cards -->
  <section class="all-p mt-5 mb-5">
    <div class="container-fluid px-4">
      <div class="row">
        <div class="col-lg-8 order-lg-0 order-1">
          <div class="d-flex flex-column gap-5">
          <div class="d-flex flex-column gap-3">
            <p class="blog-detail-head d-lg-inline-block d-block  pb-1">
                {{ $post->title }}
            </p>
         
         
            <div class="blog-detail-img">
              <img src="{{Storage::url('posts/'.$post->image)}}">
            </div>
            <p class="blog-paragraph">
                {!! $post->body !!}
            </p>
          </div>
         
        </div>
        </div>
        <div class="col-lg-4 order-lg-1 order-0 mb-3">
          <!-- Most-popular-blgs -->
          <div class="popular-blogs-wrapper px-3 py-3">
            <div class="">
              <h4 class="poplore-heading pb-2 mb-4">Most Popular</h4>
            </div>
            <ul class="d-flex flex-column gap-3 list-unstyled popuplar-list">
              <li>
                <div class="d-flex flex-column flex-md-row gap-3 align-items-center ">
                  <div class="popular-blogs-img"><img src="{{Storage::url('posts/'.$post->image)}}"></div>
                  <div class="popular-detail text-md-start text-center">
                    {{ $post->title }}
                  </div>
                </div>
              </li>
             
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
 <!-- Related Post -->

   
@endsection

@push('scripts')

@endpush