@extends('frontend.layouts.apps')

@push('styles')
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Property Detail</title>

  <!-- lightbox -->

   <link href="{{ asset('zameen/assets/css/stylepopup.css ') }}" rel="stylesheet">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />

 
  </head>


@endpush

@section('content')


 <!-- Banner-section -->
 <section class="px-2 px-lg-5 pt-5 pb-4">
    <div class="container-fluid">
      <div class="Property-Banner">
        <div class="row">
          <div class="col-md-12 col-lg-7">

            @if(!$property->gallery->isEmpty())
            <div id="carouselExampleControls" class="carousel slide pointer-event transaction-slider" data-bs-ride="carousel">
              <div class="carousel-inner">
              @foreach($property->gallery as $gallery)
                <div class="carousel-item active">
                  <img  src="{{Storage::url('property/gallery/'.$gallery->name)}}" />
                </div>
                @endforeach
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            @elseif(!empty( $property->location_latitude))
            <iframe width="100%" height="500" frameborder="0"
            scrolling="no" marginheight="0" marginwidth="0"
            loading="lazy"
            src="https://maps.google.com/maps?q={{ $property->address }},{{ $property->location_latitude }},{{ $property->location_longitude }}&z=15&output=embed">
           </iframe>
            
            @elseif (!empty($property->image))
            <div class="lg-img">
              <img src="{{Storage::url('property/'.$property->image)}}">
            </div>
            @else
            <div class="lg-img">
              <img src="{{ asset('zameen/house.png') }}">
            </div>
             @endif
          
                    
          </div>

        



          <div class="col-md col-lg-5">
            <div class="d-flex flex-column gap-2">
              <div class="sm-img position-relative">
                @if (!empty($property->image))
                <img src="{{Storage::url('property/'.$property->image)}}">
                @else
                <img src="{{ asset('zameen/house.png') }}">
                @endif
                <div class="stree-view-btn d-flex flex-row flex-lg-column flex-xl-row gap-2">
                  <button id="streetviewget">
                    <svg width="22" height="22" viewBox="0 0 22 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M9.8527 0.124992C8.73991 0.484332 7.90531 1.53917 7.80099 2.72152C7.67348 4.03137 8.28783 5.13258 9.48177 5.71216C11.0235 6.46561 12.797 5.85126 13.5157 4.29798C13.8402 3.62566 13.8866 2.48968 13.6316 1.87533C13.4113 1.33052 12.6811 0.553882 12.1478 0.287274C11.5567 -0.0141078 10.5134 -0.0952493 9.8527 0.124992ZM11.5567 1.68986C12.0551 1.99124 12.2985 2.39695 12.3101 2.93017C12.3333 4.90074 9.52814 5.10939 9.3079 3.15041C9.1688 1.92169 10.5134 1.04073 11.5567 1.68986Z"
                        fill="#6CACE3" />
                      <path
                        d="M7.18681 7.8561C6.90861 8.00679 6.51449 8.31976 6.32903 8.56319L5.96969 9.01526L5.93491 11.4031C5.91173 12.91 5.94651 13.9649 6.01606 14.2315C6.0972 14.4865 6.35221 14.8343 6.66519 15.1125L7.18681 15.5761V20.0737L6.00446 20.2244C3.19929 20.5605 1.29826 21.1517 0.49844 21.9167C0.0463665 22.3456 0 22.45 0 22.9368C0 23.6439 0.486848 24.2119 1.46055 24.6524C5.41329 26.4491 16.4949 26.4491 20.4476 24.6524C21.4213 24.2119 21.9082 23.6439 21.9082 22.9368C21.9082 22.45 21.8618 22.3456 21.4097 21.9167C20.6099 21.1517 18.7089 20.5605 15.9153 20.2244L14.7214 20.0737V15.5993L15.243 15.124C15.5444 14.8458 15.811 14.4633 15.8921 14.2199C15.9617 13.9649 15.9964 12.8869 15.9733 11.4031L15.9385 9.01526L15.5791 8.56319C15.3937 8.31976 14.9996 8.00679 14.7214 7.8561C14.2229 7.61267 14.0954 7.60108 10.9541 7.60108C7.81276 7.60108 7.68525 7.61267 7.18681 7.8561ZM14.2577 9.33983C14.4779 9.56007 14.4895 9.69917 14.4664 11.7509L14.4316 13.9185L14.0259 14.1156C13.2029 14.5329 13.2145 14.4517 13.2145 17.9872C13.2145 21.0126 13.2029 21.1749 12.9826 21.3951C12.774 21.6038 12.6001 21.627 10.9541 21.627C9.30808 21.627 9.1342 21.6038 8.92555 21.3951C8.70531 21.1749 8.69372 21.0126 8.69372 17.9872C8.69372 14.4517 8.70531 14.5329 7.88231 14.1156L7.4766 13.9185L7.44183 11.7509C7.41864 9.69917 7.43023 9.56007 7.65047 9.33983C7.87072 9.11959 8.02141 9.10799 10.9541 9.10799C13.8868 9.10799 14.0375 9.11959 14.2577 9.33983ZM7.59252 22.1254C8.24165 23.0179 8.4503 23.0759 10.9541 23.0759C13.4579 23.0759 13.6665 23.0179 14.3157 22.1254C14.7214 21.5574 14.7677 21.5574 16.4022 21.8008C18.3959 22.1022 20.2853 22.6934 20.2853 23.0064C20.2853 23.3077 17.9554 23.9453 15.7067 24.2467C13.597 24.5365 8.3112 24.5365 6.25948 24.2583C3.95275 23.9337 1.62283 23.3077 1.62283 23.0064C1.62283 22.705 3.48908 22.1022 5.39011 21.8124C7.08248 21.5458 7.18681 21.569 7.59252 22.1254Z"
                        fill="#6CACE3" />
                    </svg>
                    Street view</button>
                  <button><svg width="18" height="16" viewBox="0 0 18 16" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M2.14448 2.14448C1.78163 2.50732 1.49381 2.93807 1.29744 3.41215C1.10107 3.88622 1 4.39434 1 4.90747C1 5.42061 1.10107 5.92872 1.29744 6.40279C1.49381 6.87687 1.78163 7.30763 2.14448 7.67047L8.81491 14.3409L15.4853 7.67047C16.2181 6.93767 16.6298 5.9438 16.6298 4.90747C16.6298 3.87115 16.2181 2.87727 15.4853 2.14448C14.7525 1.41169 13.7587 1.00001 12.7223 1.00001C11.686 1.00001 10.6921 1.41169 9.95936 2.14448L8.81491 3.28892L7.67047 2.14448C7.30763 1.78163 6.87687 1.49381 6.40279 1.29744C5.92872 1.10107 5.42061 1 4.90747 1C4.39434 1 3.88622 1.10107 3.41215 1.29744C2.93807 1.49381 2.50732 1.78163 2.14448 2.14448Z"
                        stroke="#6CACE3" stroke-width="1.73664" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Save</button>
                  <button><svg width="18" height="18" viewBox="0 0 24 23" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M8.13118 13.0656C8.36718 12.5945 8.5 12.0628 8.5 11.5C8.5 10.9372 8.36718 10.4055 8.13118 9.93441M8.13118 13.0656C7.55656 14.2126 6.37023 15 5 15C3.067 15 1.5 13.433 1.5 11.5C1.5 9.567 3.067 8 5 8C6.37023 8 7.55656 8.7874 8.13118 9.93441M8.13118 13.0656L15.8688 16.9344M8.13118 9.93441L15.8688 6.06559M15.8688 6.06559C16.4434 7.2126 17.6298 8 19 8C20.933 8 22.5 6.433 22.5 4.5C22.5 2.567 20.933 1 19 1C17.067 1 15.5 2.567 15.5 4.5C15.5 5.06276 15.6328 5.59451 15.8688 6.06559ZM15.8688 16.9344C15.6328 17.4055 15.5 17.9372 15.5 18.5C15.5 20.433 17.067 22 19 22C20.933 22 22.5 20.433 22.5 18.5C22.5 16.567 20.933 15 19 15C17.6298 15 16.4434 15.7874 15.8688 16.9344Z"
                        stroke="#6CACE3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Share</button>
                </div>
              </div>
              <!-- <div class="sm-img">
                <img src="assets/images/prop-sm-2.png">
              </div> -->
              @if (!empty($property->image))
              <div class="sm-img p-0 m-0 lightgallery position-relative">
                <ul id="lightgallery" class="list-unstyled row p-0 m-0">
                  <li class="w-100 p-0 m-0 set-opacity" data-responsive="{{Storage::url('property/'.$property->image)}}"
                    data-src="{{Storage::url('property/'.$property->image)}}" data-sub-html="Image Description"
                    data-pinterest-text="Pin it1" data-tweet-text="share on twitter 1">
                    <a href="">
                      <img class="img-responsive" src="{{Storage::url('property/'.$property->image)}}">
                    </a>
                  </li>
                  <li class="w-100 p-0 m-0 d-none" data-responsive="{{Storage::url('property/'.$property->image)}}"
                    data-src="{{Storage::url('property/'.$property->image)}}" data-sub-html="Image Description"
                    data-pinterest-text="Pin it1" data-tweet-text="share on twitter 1">
                    <a href="">
                      <img class="img-responsive" src="{{Storage::url('property/'.$property->image)}}">
                    </a>
                  </li>
                
                </ul>
                <div class="img-overlay">
                  <svg width="82" height="68" viewBox="0 0 82 68" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M8.75378 0.510855C4.9446 1.5364 2.05109 4.10027 0.695907 7.68968C0.0366267 9.41114 0 10.7663 0 28.6401C0 47.393 0 47.7593 0.76916 49.3708C1.68483 51.2022 3.80917 52.9236 5.67714 53.2533C6.66606 53.4364 6.95907 53.6928 6.95907 54.2788C6.95907 55.4875 8.6439 58.088 9.96246 58.8938C10.6217 59.2967 11.8304 59.8094 12.6362 60.0292C13.9914 60.3955 14.1745 60.5786 14.5408 62.007C15.0902 64.0948 16.2622 65.4866 18.0936 66.329C19.522 66.9883 21.1336 67.0249 48.1641 67.0249C75.0847 67.0249 76.8061 66.9883 78.198 66.329C80.0293 65.5232 81.5676 63.7285 81.8606 62.1536C81.9705 61.4943 82.0438 51.2388 81.9705 39.3351L81.8606 17.6888L80.7985 16.3336C79.663 14.8319 77.3555 13.5866 75.7806 13.55C74.9748 13.55 74.7184 13.2569 74.169 11.8651C73.3632 9.70415 71.3121 7.76294 69.3343 7.21354C68.4553 6.99378 67.7594 6.59088 67.7594 6.3345C67.7594 4.39328 64.6827 1.02363 62.3752 0.400975C60.2509 -0.185052 10.9514 -0.111798 8.75378 0.510855ZM63.2176 4.53979C65.5984 6.92052 65.5618 6.92052 55.233 7.0304L45.9665 7.14028V8.42222V9.70415L57.4306 9.88728L68.9314 10.0704L70.1767 11.4256C70.8726 12.1948 71.422 12.9639 71.422 13.1837C71.422 13.4034 62.1555 13.55 45.1241 13.6232L18.8261 13.7331L17.3244 14.722C16.4454 15.308 15.5297 16.3336 15.0536 17.2859C14.2844 18.8608 14.2844 19.3003 14.2844 38.0532V57.209L13.2955 56.9526C12.7095 56.8427 11.7938 56.22 11.1711 55.634L10.0723 54.5718L9.96246 34.1341C9.85258 15.4912 9.8892 13.6232 10.4752 12.561C11.7572 10.107 11.8304 10.107 24.137 9.88728C34.2093 9.70415 35.3081 9.6309 35.6744 9.04487C35.9674 8.60535 35.9674 8.23908 35.6744 7.76294C35.3081 7.17691 34.3192 7.14028 23.5143 7.14028H11.7938L10.2188 8.23908C9.26655 8.89836 8.27763 10.0704 7.72823 11.1692L6.77594 12.9639L6.66606 31.5703C6.5928 46.6971 6.48292 50.1766 6.08003 50.1766C5.38412 50.1766 3.69929 48.5284 3.2964 47.4296C3.07664 46.8436 2.93013 39.5549 2.93013 28.7867C2.93013 8.93499 2.96676 8.56872 5.38412 6.07811C8.241 3.14798 6.48292 3.29448 35.8575 3.29448H61.9723L63.2176 4.53979ZM77.3189 17.2126C79.0404 18.1649 79.1136 18.8608 79.1136 33.1452C79.1136 40.5072 79.0404 46.514 78.9305 46.514C78.8206 46.514 76.9893 45.1954 74.8283 43.6205C68.9314 39.2253 68.5285 39.2619 61.4229 44.4629C59.0422 46.1843 56.9545 47.6128 56.808 47.6128C56.6248 47.6128 52.6325 43.6571 47.9077 38.7857C43.2195 33.9144 38.9342 29.7389 38.3848 29.4459C37.0296 28.75 34.4291 28.7867 33.3303 29.5558C32.8175 29.8855 29.0816 33.1086 25.016 36.698C20.9505 40.2874 17.5442 43.2176 17.3977 43.2176C17.2878 43.2176 17.2145 37.7968 17.2878 31.1674L17.3977 19.0806L18.4598 17.9818L19.5586 16.8464H48.0908C66.9536 16.8464 76.8428 16.9562 77.3189 17.2126ZM36.9563 32.2296C37.0662 32.2296 42.3771 37.6137 48.7135 44.1699C55.0499 50.726 60.5439 56.2567 60.8735 56.4398C61.7526 56.9159 62.595 56.4764 62.8514 55.4142C63.0711 54.6451 62.7415 54.1689 60.9834 52.3742L58.8957 50.2499L62.3386 47.7226C67.5762 43.8402 68.0157 43.5838 68.8215 43.5838C69.2244 43.5838 71.715 45.1954 74.3155 47.1366L79.077 50.726L79.1136 55.7805C79.1136 61.128 78.784 62.5564 77.3189 63.3622C76.8428 63.6186 66.9536 63.7285 48.1641 63.7285C16.8483 63.7285 18.4598 63.8384 17.6174 61.4576C17.3977 60.835 17.2145 57.5752 17.2145 54.0591V47.7959L25.4922 40.4706C34.3192 32.6325 35.4546 31.7534 36.1872 32.0464C36.4802 32.1563 36.8098 32.2296 36.9563 32.2296Z"
                      fill="white" />
                    <path
                      d="M39.63 7.39661C38.5678 8.45878 39.5201 10.0337 41.0951 9.81397C41.791 9.74072 41.9375 9.48433 41.9375 8.42216C41.9375 7.32336 41.791 7.14022 41.0218 7.03034C40.5091 6.95709 39.8864 7.14022 39.63 7.39661Z"
                      fill="white" />
                    <path
                      d="M59.3352 24.135C58.6393 24.5013 57.5772 25.417 56.9545 26.1495C55.9656 27.3948 55.8557 27.7977 55.8557 30.1784C55.8557 32.5592 55.9656 32.9987 56.9179 34.2074C61.0201 39.5915 69.7738 36.3317 69.1512 29.6657C68.675 24.9408 63.4008 21.9374 59.3352 24.135ZM63.4741 26.6989C66.0379 27.6878 66.8071 30.911 64.9391 32.669C63.6206 33.8777 62.4119 34.1341 60.9468 33.5115C59.7748 33.0353 58.6027 31.3871 58.6027 30.2151C58.6027 29.1895 59.6649 27.5047 60.7271 26.9553C61.8991 26.296 62.302 26.2594 63.4741 26.6989Z"
                      fill="white" />
                  </svg>
                  <p class="seemore-text">See more images</p>
                </div>
              </div>
              @else
              <div class="sm-img p-0 m-0 lightgallery position-relative">
                <ul id="lightgallery" class="list-unstyled row p-0 m-0">
                  <li class="w-100 p-0 m-0 set-opacity" data-responsive="{{ asset('zameen/house.png') }}"
                    data-src="{{ asset('zameen/house.png') }}" data-sub-html="Image Description"
                    data-pinterest-text="Pin it1" data-tweet-text="share on twitter 1">
                    <a href="">
                      <img class="img-responsive" src="{{ asset('zameen/house.png') }}">
                    </a>
                  </li>
                  <li class="w-100 p-0 m-0 d-none" data-responsive="{{ asset('zameen/house.png') }}"
                    data-src="{{ asset('zameen/house.png') }}" data-sub-html="Image Description"
                    data-pinterest-text="Pin it1" data-tweet-text="share on twitter 1">
                    <a href="">
                      <img class="img-responsive" src="{{ asset('zameen/house.png') }}">
                    </a>
                  </li>
                
                </ul>
                <div class="img-overlay">
                  <svg width="82" height="68" viewBox="0 0 82 68" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M8.75378 0.510855C4.9446 1.5364 2.05109 4.10027 0.695907 7.68968C0.0366267 9.41114 0 10.7663 0 28.6401C0 47.393 0 47.7593 0.76916 49.3708C1.68483 51.2022 3.80917 52.9236 5.67714 53.2533C6.66606 53.4364 6.95907 53.6928 6.95907 54.2788C6.95907 55.4875 8.6439 58.088 9.96246 58.8938C10.6217 59.2967 11.8304 59.8094 12.6362 60.0292C13.9914 60.3955 14.1745 60.5786 14.5408 62.007C15.0902 64.0948 16.2622 65.4866 18.0936 66.329C19.522 66.9883 21.1336 67.0249 48.1641 67.0249C75.0847 67.0249 76.8061 66.9883 78.198 66.329C80.0293 65.5232 81.5676 63.7285 81.8606 62.1536C81.9705 61.4943 82.0438 51.2388 81.9705 39.3351L81.8606 17.6888L80.7985 16.3336C79.663 14.8319 77.3555 13.5866 75.7806 13.55C74.9748 13.55 74.7184 13.2569 74.169 11.8651C73.3632 9.70415 71.3121 7.76294 69.3343 7.21354C68.4553 6.99378 67.7594 6.59088 67.7594 6.3345C67.7594 4.39328 64.6827 1.02363 62.3752 0.400975C60.2509 -0.185052 10.9514 -0.111798 8.75378 0.510855ZM63.2176 4.53979C65.5984 6.92052 65.5618 6.92052 55.233 7.0304L45.9665 7.14028V8.42222V9.70415L57.4306 9.88728L68.9314 10.0704L70.1767 11.4256C70.8726 12.1948 71.422 12.9639 71.422 13.1837C71.422 13.4034 62.1555 13.55 45.1241 13.6232L18.8261 13.7331L17.3244 14.722C16.4454 15.308 15.5297 16.3336 15.0536 17.2859C14.2844 18.8608 14.2844 19.3003 14.2844 38.0532V57.209L13.2955 56.9526C12.7095 56.8427 11.7938 56.22 11.1711 55.634L10.0723 54.5718L9.96246 34.1341C9.85258 15.4912 9.8892 13.6232 10.4752 12.561C11.7572 10.107 11.8304 10.107 24.137 9.88728C34.2093 9.70415 35.3081 9.6309 35.6744 9.04487C35.9674 8.60535 35.9674 8.23908 35.6744 7.76294C35.3081 7.17691 34.3192 7.14028 23.5143 7.14028H11.7938L10.2188 8.23908C9.26655 8.89836 8.27763 10.0704 7.72823 11.1692L6.77594 12.9639L6.66606 31.5703C6.5928 46.6971 6.48292 50.1766 6.08003 50.1766C5.38412 50.1766 3.69929 48.5284 3.2964 47.4296C3.07664 46.8436 2.93013 39.5549 2.93013 28.7867C2.93013 8.93499 2.96676 8.56872 5.38412 6.07811C8.241 3.14798 6.48292 3.29448 35.8575 3.29448H61.9723L63.2176 4.53979ZM77.3189 17.2126C79.0404 18.1649 79.1136 18.8608 79.1136 33.1452C79.1136 40.5072 79.0404 46.514 78.9305 46.514C78.8206 46.514 76.9893 45.1954 74.8283 43.6205C68.9314 39.2253 68.5285 39.2619 61.4229 44.4629C59.0422 46.1843 56.9545 47.6128 56.808 47.6128C56.6248 47.6128 52.6325 43.6571 47.9077 38.7857C43.2195 33.9144 38.9342 29.7389 38.3848 29.4459C37.0296 28.75 34.4291 28.7867 33.3303 29.5558C32.8175 29.8855 29.0816 33.1086 25.016 36.698C20.9505 40.2874 17.5442 43.2176 17.3977 43.2176C17.2878 43.2176 17.2145 37.7968 17.2878 31.1674L17.3977 19.0806L18.4598 17.9818L19.5586 16.8464H48.0908C66.9536 16.8464 76.8428 16.9562 77.3189 17.2126ZM36.9563 32.2296C37.0662 32.2296 42.3771 37.6137 48.7135 44.1699C55.0499 50.726 60.5439 56.2567 60.8735 56.4398C61.7526 56.9159 62.595 56.4764 62.8514 55.4142C63.0711 54.6451 62.7415 54.1689 60.9834 52.3742L58.8957 50.2499L62.3386 47.7226C67.5762 43.8402 68.0157 43.5838 68.8215 43.5838C69.2244 43.5838 71.715 45.1954 74.3155 47.1366L79.077 50.726L79.1136 55.7805C79.1136 61.128 78.784 62.5564 77.3189 63.3622C76.8428 63.6186 66.9536 63.7285 48.1641 63.7285C16.8483 63.7285 18.4598 63.8384 17.6174 61.4576C17.3977 60.835 17.2145 57.5752 17.2145 54.0591V47.7959L25.4922 40.4706C34.3192 32.6325 35.4546 31.7534 36.1872 32.0464C36.4802 32.1563 36.8098 32.2296 36.9563 32.2296Z"
                      fill="white" />
                    <path
                      d="M39.63 7.39661C38.5678 8.45878 39.5201 10.0337 41.0951 9.81397C41.791 9.74072 41.9375 9.48433 41.9375 8.42216C41.9375 7.32336 41.791 7.14022 41.0218 7.03034C40.5091 6.95709 39.8864 7.14022 39.63 7.39661Z"
                      fill="white" />
                    <path
                      d="M59.3352 24.135C58.6393 24.5013 57.5772 25.417 56.9545 26.1495C55.9656 27.3948 55.8557 27.7977 55.8557 30.1784C55.8557 32.5592 55.9656 32.9987 56.9179 34.2074C61.0201 39.5915 69.7738 36.3317 69.1512 29.6657C68.675 24.9408 63.4008 21.9374 59.3352 24.135ZM63.4741 26.6989C66.0379 27.6878 66.8071 30.911 64.9391 32.669C63.6206 33.8777 62.4119 34.1341 60.9468 33.5115C59.7748 33.0353 58.6027 31.3871 58.6027 30.2151C58.6027 29.1895 59.6649 27.5047 60.7271 26.9553C61.8991 26.296 62.302 26.2594 63.4741 26.6989Z"
                      fill="white" />
                  </svg>
                  <p class="seemore-text">See more images</p>
                </div>
              </div>
              @endif


            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  


  <!-- Grand-famlily-section -->
  <section class="px-2 px-lg-5">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="d-flex flex-row gap-4 d-md-none">
            <p class="intro-headig-right">Asking Price </p>
            <span class="intro-headig-dark pe-2">Pkr {{ $property->price}} </span>
          </div>
          <div class="d-flex flex-column gap-2 mb-3 mb-lg-5">
            <p class="intro-headig ">{{ $property->title}} </p>
            <div class="d-flex flex-column flex-lg-row gap-3 gap-lg-5">
              <p class="sub-title mb-0 text-center text-lg-start">{{ ucfirst($property->city) }}</p>
              <div class="d-flex flex-row gap-2 align-items-center justify-content-lg-end justify-content-center">
                <a href="#">
                  <img src="{{ asset('zameen/assets/images/location.png ') }}" width="17px" height="22px">
                  <span class="show-on-map">Show on map</span>
                </a>
              </div>
            </div>
          </div>
          <!-- overview-section -->
          <div class="d-flex flex-column gap-2">
            <p class="small-head text-lg-start text-center mb-3">
              Overview
            </p>
            <div class="d-flex flex-row gap-2 justify-content-between flex-wrap">
              <div class="mini-cards d-flex flex-column gap-3 justify-content-center align-items-center">
                <div class="min-cards-img d-flex justify-content-center align-items-center">
                  <img src="{{ asset('zameen/assets/images/bed.png') }}">
                </div>
                <div class="min-cards-body">
                  <p class="min-text">
                    {{ $property->bedroom}} Bedrooms
                  </p>
                </div>
              </div>
              <div class="mini-cards d-flex flex-column gap-3 justify-content-center align-items-center">
                <div class="min-cards-img d-flex justify-content-center align-items-center">
                  <img src=" {{ asset('zameen/assets/images/bath.png') }}">
                </div>
                <div class="min-cards-body">
                  <p class="min-text">
                    {{ $property->bathroom}} Bathrooms
                  </p>
                </div>
              </div>
              <div class="mini-cards d-flex flex-column gap-3 justify-content-center align-items-center">
                <div class="min-cards-img d-flex justify-content-center align-items-center">
                  <img src=" {{ asset('zameen/assets/images/garage.png') }}">
                </div>
                <div class="min-cards-body">
                  <p class="min-text">
                    {{ $property->comments_count}} Count
                  </p>
                </div>
              </div>
              <div class="mini-cards d-flex flex-column gap-3 justify-content-center align-items-center">
                <div class="min-cards-img d-flex justify-content-center align-items-center">
                  <img src=" {{ asset('zameen/assets/images/square-fit.png') }}">
                </div>
                <div class="min-cards-body">
                  <p class="min-text">
                    {{ $property->area}} marla
                  </p>
                </div>
              </div>
              <div class="mini-cards d-flex flex-column gap-3 justify-content-center align-items-center">
                <div class="min-cards-img d-flex justify-content-center align-items-center">
                  <img src="{{ asset('zameen/assets/images/year.png ') }}">
                </div>
                <div class="min-cards-body">
                  <p class="min-text">
                    Price: {{ $property->price}}
                  </p>
                </div>
              </div>
            </div>
          </div>
          <!--Near by seciotn -->
          <div class="d-flex flex-column gap-2 mt-3">
            <p class="small-head text-lg-start text-center mb-3">
               Nearby Locations
            </p>
            <div class="d-flex flex-row gap-4 flex-wrap">
              <div class="mini-cards d-flex flex-column gap-3 justify-content-center align-items-center">
                <div class="min-cards-img d-flex justify-content-center align-items-center">
                  <img src=" {{ asset('zameen/assets/images/school.png') }}">
                </div>
                <div class="min-cards-body">
                  <p class="min-text">
                    {!! $property->nearby !!}
                  </p>
                </div>
              </div>
              <div class="mini-cards d-flex flex-column gap-3 justify-content-center align-items-center">
                <div class="min-cards-img d-flex justify-content-center align-items-center">
                  <img src=" {{ asset('zameen/assets/images/school.png') }}">
                </div>
                <div class="min-cards-body">
                  <p class="min-text">
                    Playground
                  </p>
                </div>
              </div>
              <div class="mini-cards d-flex flex-column gap-3 justify-content-center align-items-center">
                <div class="min-cards-img d-flex justify-content-center align-items-center">
                  <img src=" {{ asset('zameen/assets/images/school.png') }}">
                </div>
                <div class="min-cards-body">
                  <p class="min-text">
                    Mosque
                  </p>
                </div>
              </div>
            </div>
          </div>
          <!-- artical-section -->
          <div class="discription pt-3 pt-md-4 text-lg-start text-center">
            <p class="small-head ">
              Description
            </p>
            <div class="d-flex flex-column gap-2">
              <p class="dis-text pt-2 pb-1">
                {!! $property->description !!}
              </p>
            
              <p class="d-flex flex-row align-items-center gap-2 mt-3 mb-2">
                <button class="see-more-btn " type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample"
                  aria-expanded="false" aria-controls="collapseExample">
                  See full description
                </button>
                <svg width="14" height="8" viewBox="0 0 16 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M15 8.27002L8 1.27002L1 8.27002" stroke="#6CACE3" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
                </svg>
              </p>
              <hr>
            </div>
          </div>
          <!-- aFeatures-section -->
          <div class="Features pt-4 text-lg-start text-center">
            <p class="small-head pb-2">
              Features
            </p>
            <div class="row">
              <div class="col-12 col-md-6 col-lg-4 mb-3">
                <div class="d-flex flex-column gap-3">
                  <div class="d-flex flex-row gap-2 align-items-baseline">
                    <div>
                      <img src=" {{ asset('zameen/assets/images/check.png') }}">
                    </div>
                    <div>
                      <p class="dis-text mb-0">Status:&nbsp;&nbsp; <span class="feature-child">Active</span> </p>
                    </div>
                  </div>
                  <div class="d-flex flex-row gap-2 align-items-baseline">
                    <div>
                      <img src=" {{ asset('zameen/assets/images/check.png') }}">
                    </div>
                    <div>
                      <p class="dis-text mb-0">Beds: &nbsp;&nbsp; <span class="feature-child">{{ $property->bedroom}}</span></p>
                    </div>
                  </div>
                  <div class="d-flex flex-row gap-2 align-items-baseline">
                    <div>
                      <img src=" {{ asset('zameen/assets/images/check.png') }}">
                    </div>
                    <div>
                      <p class="dis-text mb-0">Baths:&nbsp;&nbsp; <span class="feature-child">{{ $property->bathroom}}</span></p>
                    </div>
                  </div>
                  <div class="d-flex flex-row gap-2 align-items-baseline">
                    <div>
                      <img src=" {{ asset('zameen/assets/images/check.png') }}">
                    </div>
                    <div>
                      <p class="dis-text mb-0">Area:&nbsp;&nbsp; <span class="feature-child">{{ $property->area}} {{ $property->unit }}</span>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-4 mb-3">
                <div class="d-flex flex-column gap-3">
                  <div class="d-flex flex-row gap-2 align-items-baseline">
                    <div>
                      <img src="{{ asset('zameen/assets/images/check.png ') }}">
                    </div>
                    <div>
                      <p class="dis-text mb-0">Property Purpose:&nbsp;&nbsp; <span class="feature-child">{{ $property->purpose}}</span></p>
                    </div>
                  </div>
                  <div class="d-flex flex-row gap-2 align-items-baseline">
                    <div>
                      <img src=" {{ asset('zameen/assets/images/check.png') }}">
                    </div>
                    <div>
                      <p class="dis-text mb-0">Property Type:&nbsp;&nbsp; <span class="feature-child">{{ $property->type}}</span>
                      </p>
                    </div>
                  </div>
                  <div class="d-flex flex-row gap-2 align-items-baseline">
                    <div>
                      <img src="{{ asset('zameen/assets/images/check.png') }}">
                    </div>
                    <div>
                      <p class="dis-text mb-0">State:&nbsp;&nbsp; <span class="feature-child">{{ $property->state->state_name	}}</span></p>
                    </div>
                  </div>
                  <div class="d-flex flex-row gap-2 align-items-baseline">
                    <div>
                      <img src="{{ asset('zameen/assets/images/check.png') }}">
                    </div>
                    <div>
                      <p class="dis-text mb-0">City:&nbsp;&nbsp; <span class="feature-child">
                        @if (!empty($property->city_id))
                        {{$property->City->city_name}}
                        @else
                          --
                        @endif
                       
                      </span></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-4 mb-3">
                <div class="d-flex flex-column gap-3">
                  <div class="d-flex flex-row gap-2 align-items-baseline">
                    <div>
                      <img src="{{ asset('zameen/assets/images/check.png') }}">
                    </div>
                    <div>
                      <p class="dis-text mb-0">Socity:&nbsp;&nbsp; <span class="feature-child">
                        @if (!empty($property->socity_id))
                        {{ $property->socity->socity_name}}
                        @else
                          --
                        @endif
                       
                      </span></p>
                    </div>
                  </div>
                  <div class="d-flex flex-row gap-2 align-items-baseline">
                    <div>
                      <img src="{{ asset('zameen/assets/images/check.png') }}">
                    </div>
                    <div>
                      <p class="dis-text mb-0">Phase:&nbsp;&nbsp; <span class="feature-child">
                        @if (!empty($property->phase_id))
                        {{ $property->phase->phase_name}}
                        @else
                          --
                        @endif
                       
                      </span></p>
                    </div>
                  </div>
                  <div class="d-flex flex-row gap-2 align-items-baseline">
                    <div>
                      <img src="{{ asset('zameen/assets/images/check.png') }}">
                    </div>
                    <div>
                      <p class="dis-text mb-0">Block:&nbsp;&nbsp; <span class="feature-child">
                        @if (!empty($property->block_id))
                        {{ $property->block->block_name}}
                        @else
                          --
                        @endif
                      </span></p>
                    </div>
                  </div>
                  <div class="d-flex flex-row gap-2 align-items-baseline">
                    <div>
                      <img src="{{ asset('zameen/assets/images/check.png') }}">
                    </div>
                    <div>
                      <p class="dis-text mb-0">Country:&nbsp;&nbsp; <span class="feature-child">Pakistan</span></p>

                    </div>
                  </div>
                </div>
              </div>
            </div>
            @if($property->features)
            <div class="row">
              <div class="col-12 col-md-6 col-lg-4 mb-3">
                <div class="d-flex flex-column gap-3">
                  @foreach($property->features as $feature)
                  <div class="d-flex flex-row gap-2 align-items-baseline">
                    <div>
                      <img src=" {{ asset('zameen/assets/images/check.png') }}">
                    </div>
                    <div>
                      <p class="dis-text mb-0">{{$feature->name}} </p>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
             
             
            </div>
            @endif
            <hr />
          </div>
          <!-- Video Section -->
          @if($videoembed)
          <div class="video-section pt-4 text-lg-start text-center">
            <p class="small-head pb-2">
              Video
            </p>
            <div class="pb-3">
              <div class="video-container position-relative">
                {!! $videoembed !!}
                <div class="cursor-pointer video-controls-setup justify-content-center d-flex">
                  <img class="play" width="44" height="44" src=" {{ asset('zameen/assets/images/play-icon.svg') }}" />
                  <img class="pause" width="44" height="44" src="{{ asset('zameen/assets/images/pause buttn.svg ') }}" />
                </div>
              </div>
              <!-- end video -->
            </div>
            <hr />
          </div>
          @endif
          <!-- Address Section -->
          <div class="address-section pt-4 text-lg-start text-center">
            <p class="small-head pb-1">
              Address
            </p>
            <p class="dis-text mb-0 pb-2">{{ $property->address }}</p>
            <div>
              <iframe width="100%" height="400" frameborder="0"
              scrolling="no" marginheight="0" marginwidth="0"
              loading="lazy"
              src="https://maps.google.com/maps?q={{ $property->address }},{{ $property->location_latitude }},{{ $property->location_longitude }}&z=15&output=embed">
             </iframe>
            </div>
            <!-- buttons-section -->
            <div class="row">
              <div class="col-md-12">
                <div class="d-flex flex-row gap-4 py-4 flex-wrap">
                  <button class="btn-contain-normal d-flex flex-row gap-1 align-items-center"><svg width="17"
                      height="17" viewBox="0 0 17 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M13.7035 13.5671C12.7345 13.5671 11.8795 14.0366 11.3305 14.7529L6.06925 10.8064C6.17875 10.4951 6.25 10.1659 6.25 9.81714C6.25 9.46839 6.17875 9.13914 6.06925 8.82789L11.3305 4.88139C11.8795 5.59764 12.7345 6.06714 13.7035 6.06714C15.358 6.06714 16.7035 4.72164 16.7035 3.06714C16.7035 1.41264 15.358 0.0671387 13.7035 0.0671387C12.049 0.0671387 10.7035 1.41264 10.7035 3.06714C10.7035 3.19764 10.726 3.32214 10.7418 3.44814L5.23075 7.58214C4.70125 7.11189 4.012 6.81714 3.25 6.81714C1.5955 6.81714 0.25 8.16264 0.25 9.81714C0.25 11.4716 1.5955 12.8171 3.25 12.8171C4.012 12.8171 4.70125 12.5224 5.23075 12.0521L10.7418 16.1861C10.726 16.3121 10.7035 16.4366 10.7035 16.5671C10.7035 18.2216 12.049 19.5671 13.7035 19.5671C15.358 19.5671 16.7035 18.2216 16.7035 16.5671C16.7035 14.9126 15.358 13.5671 13.7035 13.5671ZM13.7035 1.56714C14.5308 1.56714 15.2035 2.23989 15.2035 3.06714C15.2035 3.89439 14.5308 4.56714 13.7035 4.56714C12.8763 4.56714 12.2035 3.89439 12.2035 3.06714C12.2035 2.23989 12.8763 1.56714 13.7035 1.56714ZM3.25 11.3171C2.42275 11.3171 1.75 10.6444 1.75 9.81714C1.75 8.98989 2.42275 8.31714 3.25 8.31714C4.07725 8.31714 4.75 8.98989 4.75 9.81714C4.75 10.6444 4.07725 11.3171 3.25 11.3171ZM13.7035 18.0671C12.8763 18.0671 12.2035 17.3944 12.2035 16.5671C12.2035 15.7399 12.8763 15.0671 13.7035 15.0671C14.5308 15.0671 15.2035 15.7399 15.2035 16.5671C15.2035 17.3944 14.5308 18.0671 13.7035 18.0671Z"
                        fill="white" />
                    </svg>Share</button>
                  <button class="btn-contain-normal d-flex flex-row gap-1 align-items-center">
                    <svg width="24" height="13" viewBox="0 0 24 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M21.7876 5.61091L11.2126 10.0922C10.4063 10.4297 9.50635 10.4109 8.7376 10.0359L3.5251 7.41091L2.8501 8.74216L8.08135 11.3672C8.7001 11.6672 9.3751 11.8172 10.0501 11.8172C10.6501 11.8172 11.2501 11.7047 11.7938 11.4609L22.3688 6.99841C22.9313 6.75466 23.3626 6.30466 23.5876 5.74216C23.8126 5.16091 23.7938 4.54216 23.5313 3.97966C23.0251 2.89216 21.6938 2.38591 20.5501 2.87341L19.8938 3.15466L16.7063 4.50466L17.2876 5.89216L20.4751 4.54216L21.1313 4.26091C21.5251 4.09216 21.9938 4.24216 22.1626 4.61716C22.2563 4.80466 22.2563 5.01091 22.1813 5.19841C22.1063 5.38591 21.9751 5.53591 21.7876 5.61091Z"
                        fill="white" />
                      <path
                        d="M1.6875 4.48591L3.45 3.02341C4.4625 2.25466 5.7 1.91716 6.95625 2.06716C7.4625 2.12341 7.93125 2.25466 8.38125 2.46091L13.2375 4.61716C13.3687 4.67341 13.4813 4.76716 13.5563 4.89841C13.6875 5.10466 13.7062 5.36716 13.6125 5.61091C13.575 5.68591 13.5375 5.74216 13.5 5.79841C13.275 6.04216 12.9375 6.11716 12.6375 5.98591L8.8875 4.31716L8.26875 5.68591L12.0187 7.35466C12.3187 7.48591 12.6375 7.56091 12.9375 7.56091C13.575 7.56091 14.175 7.29841 14.625 6.79216C14.775 6.62341 14.9062 6.43591 15 6.22966C15.3 5.53591 15.2437 4.74841 14.85 4.11091C14.6062 3.73591 14.2688 3.43591 13.875 3.26716L9 1.09216C8.41875 0.829664 7.78125 0.660914 7.14375 0.585914C5.49375 0.398414 3.8625 0.848414 2.55 1.84216L0.1875 3.77341V12.0047H1.6875V4.48591Z"
                        fill="white" />
                    </svg>Request Showing</button>
                  <button class="btn-contain-normal d-flex flex-row gap-1 align-items-cente" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    <svg width="24" height="20" viewBox="0 0 24 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M23.789 15.5211C23.8193 18.3105 23.86 21.0999 23.8746 23.8895C23.8798 24.8754 23.8024 25.8614 23.797 26.8476C23.7892 28.2622 22.696 29.1239 21.4088 29.1516C18.7719 29.2087 16.134 29.2697 13.4969 29.2565C10.4414 29.2413 7.38582 29.1609 4.33114 29.0801C3.59184 29.0473 2.8554 28.9674 2.12629 28.8408C1.28765 28.7101 0.464303 27.7079 0.419487 26.7954C0.375114 25.8864 0.339192 24.9768 0.327434 24.0671C0.272413 19.8347 0.222922 15.6021 0.178994 11.3694C0.151816 8.88308 0.141512 6.39655 0.103352 3.91038C0.0922587 3.20553 0.0414485 2.49852 0.32654 1.83693C0.479513 1.45127 0.687103 1.08965 0.942966 0.763054C1.25801 0.387998 1.7227 0.24577 2.21955 0.232125C3.24378 0.20406 4.26979 0.19742 5.29157 0.129863C8.89746 -0.108416 12.5028 0.0777765 16.1086 0.104621C16.8756 0.11028 17.4586 0.360895 18.0243 0.898575C19.179 1.99579 20.4182 3.00379 21.6155 4.05651C22.0714 4.45731 22.4942 4.89611 22.9568 5.28791C23.3836 5.64976 23.5492 6.10483 23.5653 6.64064C23.5935 7.58897 23.6385 8.53704 23.6518 9.4855C23.6799 11.4974 23.6922 13.5095 23.7111 15.5214L23.789 15.5211ZM15.7943 1.52461C15.4667 1.49778 15.1868 1.45908 14.9064 1.45431C12.5156 1.41386 10.125 1.37708 7.73436 1.34403C6.65368 1.32905 5.57277 1.32306 4.49198 1.31652C3.94287 1.31319 3.39252 1.29572 2.84475 1.32356C2.06137 1.36349 1.83121 1.59065 1.69109 2.38324C1.55747 3.09261 1.52998 3.8179 1.60955 4.53533C1.64683 4.83658 1.66633 5.13972 1.66791 5.44326C1.68056 12.2174 1.69109 18.9913 1.69953 25.7649C1.69272 25.9356 1.69904 26.1065 1.71839 26.276C1.85461 27.1413 2.31075 27.6668 3.25466 27.705C6.91625 27.8527 10.5778 27.8519 14.2405 27.7902C16.0999 27.7589 17.9596 27.7437 19.8191 27.7224C20.2739 27.7172 20.7299 27.7353 21.1835 27.7114C21.9304 27.671 22.3252 27.2615 22.3168 26.5109C22.3078 25.6773 22.2461 24.8441 22.2321 24.0105C22.2159 23.0431 22.2486 22.0746 22.2209 21.1077C22.1528 18.6994 22.0354 16.2924 21.9894 13.8839C21.9517 11.9113 21.9894 9.93744 21.9911 7.964C21.9911 7.80492 21.9718 7.64568 21.9649 7.54096C21.3061 7.54096 20.7187 7.53873 20.1312 7.54162C19.524 7.54451 18.9162 7.56753 18.3096 7.55277C17.9496 7.55003 17.5911 7.50906 17.2397 7.43069C16.5218 7.25608 16.3013 6.98073 16.2178 6.25292C16.194 6.04593 16.1928 5.83626 16.1734 5.62861C16.0513 4.28801 15.9264 2.94841 15.7943 1.52461ZM17.8399 6.1799L21.1124 5.9783L21.1622 5.86802C19.8672 4.76615 18.65 3.57795 17.2852 2.52246C17.4666 3.71706 17.6476 4.91174 17.8399 6.1799Z"
                        fill="white" />
                      <path
                        d="M10.9111 18.5581L14.1975 15.4298C14.0759 15.4078 13.953 15.3939 13.8296 15.3879C11.3259 15.4799 8.82194 15.5697 6.31869 15.674C5.75072 15.6976 5.18544 15.7828 4.6177 15.8206C4.39215 15.8318 4.16603 15.8179 3.94355 15.7793C3.89534 15.7758 3.84832 15.7626 3.80537 15.7404C3.76244 15.7182 3.72448 15.6874 3.69377 15.6501C3.66306 15.6127 3.64026 15.5696 3.62677 15.5231C3.61327 15.4767 3.60931 15.428 3.61519 15.38C3.63084 15.1988 3.71089 15.0294 3.84083 14.9022C4.01613 14.7903 4.21802 14.7266 4.4259 14.718C6.20133 14.5591 7.97564 14.3795 9.75475 14.2742C11.3455 14.1803 12.9413 14.1713 14.535 14.1287C14.8755 14.1196 15.2165 14.1274 15.6332 14.1274C16.1706 13.5949 16.7461 13.0181 17.3305 12.4501C17.7119 12.0788 17.947 12.0318 18.3439 12.2555C18.471 12.3372 18.5817 12.4417 18.6707 12.5635C19.0628 13.0516 19.4474 13.5452 19.833 14.0388C20.2963 14.632 20.2324 15.0352 19.6627 15.5553C18.6144 16.5122 17.5855 17.49 16.449 18.5522C17.3834 18.5177 18.1652 18.4873 18.9472 18.4615C19.0983 18.454 19.2499 18.4596 19.4002 18.4782C19.5155 18.4873 19.6235 18.5385 19.7037 18.6217C19.7842 18.7048 19.8315 18.8145 19.8366 18.9301C19.866 19.1838 19.7668 19.4115 19.529 19.4803C19.2024 19.5746 18.8658 19.629 18.5262 19.6419C17.4655 19.6807 16.4035 19.6919 15.2771 19.7149C14.5777 20.4555 13.8735 21.2203 13.1438 21.9599C12.9531 22.1416 12.7258 22.2807 12.4772 22.3677C11.9089 22.5785 11.3041 22.6995 10.7528 22.9441C9.86924 23.336 8.95073 23.3154 8.02214 23.325C6.94046 23.3362 5.85897 23.3886 4.77774 23.4119C4.55035 23.4186 4.32303 23.3967 4.10109 23.3466C3.98623 23.3289 3.88242 23.2681 3.81088 23.1764C3.73932 23.0848 3.70541 22.9694 3.71603 22.8536C3.71599 22.7379 3.75774 22.6258 3.83361 22.5381C3.9095 22.4505 4.01444 22.3932 4.12915 22.3767C4.31611 22.3463 4.50551 22.3336 4.69487 22.3386C6.28851 22.2984 7.88226 22.2617 9.47599 22.2197C9.62408 22.2158 9.77151 22.1828 9.94268 22.1603C10.1319 21.383 10.1312 20.6135 10.1268 19.7615C9.89762 19.7615 9.69617 19.7615 9.4945 19.7615C7.91863 19.7646 6.34288 19.7727 4.76711 19.7661C4.52277 19.7598 4.28032 19.7213 4.04606 19.6517C3.94256 19.626 3.85298 19.5612 3.79592 19.4712C3.73886 19.3811 3.71872 19.2726 3.73967 19.1681C3.74642 19.0719 3.7883 18.9815 3.85734 18.9141C3.92638 18.8468 4.01777 18.8076 4.11406 18.8032C4.37491 18.7544 4.63842 18.7211 4.90322 18.7033C6.45825 18.6489 8.01353 18.6011 9.56907 18.56C10.0219 18.5475 10.4766 18.5581 10.9111 18.5581ZM16.1008 14.9011C14.4772 16.4553 12.8029 17.8588 11.2619 19.448L12.9716 20.8124C14.4207 19.3162 15.8352 17.8555 17.2576 16.3864L16.1008 14.9011ZM17.0168 14.2538L18.2544 15.4126L18.9917 14.7211L17.9058 13.1776C17.6208 13.5225 17.3566 13.8424 17.0168 14.2538ZM10.8713 20.169C10.8843 20.7396 10.7698 21.2074 10.9011 21.6753C11.5426 21.5777 11.7442 21.5034 12.058 21.2477L10.8713 20.169Z"
                        fill="white" />
                      <path
                        d="M11.83 11.6534C10.2187 11.731 8.60788 11.8207 6.99607 11.8834C6.12393 11.9174 5.25001 11.9072 4.37688 11.9142C4.28198 11.9165 4.18716 11.9068 4.09468 11.8854C3.99044 11.8677 3.89576 11.8138 3.82721 11.7334C3.75866 11.6528 3.72063 11.5508 3.71975 11.4451C3.71431 11.3298 3.7523 11.2166 3.82626 11.1281C3.90022 11.0395 4.00471 10.982 4.11908 10.9668C4.23144 10.9491 4.34502 10.9404 4.45875 10.9404C6.69333 10.8041 8.92748 10.6591 11.1627 10.5353C12.4132 10.4661 13.6659 10.4355 14.9173 10.381C16.1496 10.3272 17.3814 10.2611 18.6137 10.209C18.9729 10.1839 19.3335 10.1866 19.6922 10.2172C20.0963 10.2632 20.2875 10.4804 20.2839 10.786C20.2804 11.0977 20.0911 11.2852 19.6815 11.3362C19.2862 11.3855 18.888 11.4223 18.49 11.437C16.2706 11.5183 14.0511 11.5953 11.8313 11.6679L11.83 11.6534Z"
                        fill="white" />
                    </svg>Notes</button>
                  <button class="btn-contain-normal d-flex flex-row gap-1 align-items-cente">
                    <svg width="24" height="20" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M22.4999 12.0672C22.3436 12.0661 22.1915 12.0163 22.0649 11.9247L11.9999 4.73966L1.93493 11.9247C1.77345 12.0203 1.58199 12.0519 1.39835 12.0133C1.2147 11.9746 1.0522 11.8686 0.942945 11.716C0.833687 11.5634 0.785603 11.3754 0.808186 11.1891C0.830769 11.0028 0.922378 10.8317 1.06493 10.7097L11.5649 3.20966C11.6919 3.11922 11.844 3.07062 11.9999 3.07062C12.1559 3.07062 12.3079 3.11922 12.4349 3.20966L22.9349 10.7097C23.063 10.8024 23.1585 10.9331 23.2077 11.0834C23.257 11.2336 23.2576 11.3955 23.2094 11.546C23.1611 11.6966 23.0665 11.828 22.9391 11.9216C22.8117 12.0152 22.658 12.0661 22.4999 12.0672Z"
                        fill="white" />
                      <path
                        d="M3.75 7.56714C3.55109 7.56714 3.36032 7.48812 3.21967 7.34747C3.07902 7.20682 3 7.01605 3 6.81714V3.81714C3 3.61823 3.07902 3.42746 3.21967 3.28681C3.36032 3.14616 3.55109 3.06714 3.75 3.06714H6.75C6.94891 3.06714 7.13968 3.14616 7.28033 3.28681C7.42098 3.42746 7.5 3.61823 7.5 3.81714C7.5 4.01605 7.42098 4.20682 7.28033 4.34747C7.13968 4.48812 6.94891 4.56714 6.75 4.56714H4.5V6.81714C4.5 7.01605 4.42098 7.20682 4.28033 7.34747C4.13968 7.48812 3.94891 7.56714 3.75 7.56714Z"
                        fill="white" />
                      <path
                        d="M18.75 22.5671H15C14.8011 22.5671 14.6103 22.4881 14.4697 22.3475C14.329 22.2068 14.25 22.0161 14.25 21.8171V16.5671H9.75V21.8171C9.75 22.0161 9.67098 22.2068 9.53033 22.3475C9.38968 22.4881 9.19891 22.5671 9 22.5671H5.25C4.65326 22.5671 4.08097 22.3301 3.65901 21.9081C3.23705 21.4862 3 20.9139 3 20.3171V12.8171C3 12.6182 3.07902 12.4275 3.21967 12.2868C3.36032 12.1462 3.55109 12.0671 3.75 12.0671C3.94891 12.0671 4.13968 12.1462 4.28033 12.2868C4.42098 12.4275 4.5 12.6182 4.5 12.8171V20.3171C4.5 20.5161 4.57902 20.7068 4.71967 20.8475C4.86032 20.9881 5.05109 21.0671 5.25 21.0671H8.25V15.8171C8.25 15.6182 8.32902 15.4275 8.46967 15.2868C8.61032 15.1462 8.80109 15.0671 9 15.0671H15C15.1989 15.0671 15.3897 15.1462 15.5303 15.2868C15.671 15.4275 15.75 15.6182 15.75 15.8171V21.0671H18.75C18.9489 21.0671 19.1397 20.9881 19.2803 20.8475C19.421 20.7068 19.5 20.5161 19.5 20.3171V12.8171C19.5 12.6182 19.579 12.4275 19.7197 12.2868C19.8603 12.1462 20.0511 12.0671 20.25 12.0671C20.4489 12.0671 20.6397 12.1462 20.7803 12.2868C20.921 12.4275 21 12.6182 21 12.8171V20.3171C21 20.9139 20.7629 21.4862 20.341 21.9081C19.919 22.3301 19.3467 22.5671 18.75 22.5671Z"
                        fill="white" />
                    </svg>+ Home Board</button>
                </div>
              </div>
            </div>
            <hr />
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <div class="d-flex flex-row justify-content-between">
            <p class="intro-headig-right">Asking Price </p>
            <span class="intro-headig-dark pe-2">Pkr {{ $property->price}}</span>
          </div>
          @if($property->user)
          <div class="price-right-section px-3 pt-3 pb-2">
            <div class="img-place-holder">
              @if (!empty($property->user->image))
              <img src="{{Storage::url('users/'.$property->user->image)}}" height="306px" width="100%">
              @else
              <img src=" {{ asset('zameen/55929607.png') }}" height="306px" width="100%">
              @endif
              <span class="user-placeholder text-center d-block py-2">{{ $property->user->name }}</span>
            </div>
            <div class="user-form py-4">
              <div class="d-flex flex-column gap-3">
                
                <div class="d-flex flex-row gap-3 align-items-center">
                  <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M0 0V16H20V0H0ZM18 2V2.465L10 7.798L2 2.465V2H18ZM2 14V4.869L10 10.203L18 4.869V14H2Z"
                      fill="#6CACE3" />
                  </svg>
                  <span class="text-muted">
                    {{ $property->user->email }}
                  </span>
                </div>
                <div class="d-flex flex-row gap-3 align-items-center">
                  <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M18 19.25H11V11.25H7V19.25H0V6.75L9.012 0L18 6.75V19.25ZM13 17.25H16V7.75L9.01 2.5L2 7.75V17.25H5V9.25H13V17.25Z"
                      fill="#6CACE3" />
                  </svg>
                  <span class="text-muted">
                    {{ $property->user->about }}
                  </span>
                </div>
              </div>
            </div>
          </div>
          @endif
          <!-- create-account-sectio -->
          <div class="create-account-from px-3 pt-3 pb-2 my-3">
            <span class="create-head text-start d-inline-block pb-2">Contact with Agent</span>
            <form action="{{ route('property.message') }}" method="post"   method="POST">
                @csrf
                <input type="hidden" name="agent_id" value="{{ $property->user->id }}">
                <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                <input type="hidden" name="property_id" value="{{ $property->id }}">
            <div class="pt-2 pb-3 contact-us-form">
              <div class="mb-2">
                <label for="exampleFormControlInput1" class="form-label">First name</label>
                <input type="text" class="form-control" name="name"
                  placeholder="Input your first name in here">
              </div>
             
              <div class="mb-2">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" 
                  placeholder="Enter your last Email here">
              </div>
              <div class="mb-2">
                <label for="exampleFormControlInput1" class="form-label">Phone Number</label>
                <input type="number" name="phone" class="form-control" 
                  placeholder="Enter your Phone Number here">
              </div>


              <div class="mb-2">
                <label for="exampleFormControlInput1" class="form-label">Message</label>
                <textarea class="form-control" name="message" placeholder="Your Msssage"></textarea>
              </div>
             
             
              <div class="mb-2">
                <button   class="w-100 btn-contain-normal" type="submit">Send Message</button>
              </div>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="px-2 px-lg-5">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <!-- Similar Properties -->
          <div class="d-flex flex-column  gap-2 pt-3">
            <p class="small-head pb-2">
              Similar Properties
            
            </p>
          </div>
        </div>
      </div>
      <!-- Cards Section -->    
        <section class="all-p">
          <div class="container-fluid">
              <div class="row">
                  <div class="col-md-12 position-relative rewslider">
                      <div class="swiper mySwiperreviewsim mt-3">
                          <div class="swiper-wrapper">
                            @foreach($relatedproperty as $property)
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
                                              {{-- <div class="tag-img">
                                                  <img src=" {{ asset('zameen/assets/images/featured.jpeg') }}">
                                              </div> --}}
                                              <div
                                                  class="heart-sec d-flex flex-row justify-content-between mt-3 align-items-center">
                                                  <h3>PKR {{ $property->price }}</h3>
                                                  <img src=" {{ asset('zameen/assets/images/favorited.png') }}">
                                              </div>
                                              
                                                  <div class="plan-text-sec d-flex flex-column gap-1 fixed-text">
                                                      <h3> {{ $property->title }} </h3>
                                                      <p>{{ ucfirst($property->address) }}</p>
                                                  </div>
                                            
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
                                                          <p>{{ $property->area }} {{ $property->unit }}</p>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              @endforeach

                          </div>

                      </div>

                       <div class="swiper-button-next"><img src=" {{ asset('zameen/assets/images/next.png') }}"
                              height="40px"></div>
                      <div class="swiper-button-prev"><img src=" {{ asset('zameen/assets/images/pre.png') }}"
                              height="40px"></div> 
                  </div>
              </div>
          </div>
      </section>
      
  </section>
  

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
<script src="https://api-maps.yandex.ru/2.1/?apikey=39260d20-1d00-4a63-a31e-10bfbc19bc05&lang=en_US" type="text/javascript"></script>
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
  const fenway = { lat: 42.345573, lng: -71.098326 };
  const map = new google.maps.Map(document.getElementById("cutommap"), {
    center: fenway,
    zoom: 14,
  });
  const panorama = new google.maps.StreetViewPanorama(
    document.getElementById("pano"),
    {
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
  }
  else {
    seediscription.innerHTML = "See less description";
  }
});

</script>
<script>
    $(function(){

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
        .on("rateyo.set", function (e, data) {

            var rating = data.rating;
            var property_id = <?php echo json_encode($property->id); ?>;
            var user_id = <?php echo json_encode( auth()->id() ); ?>;
            
            $.post( "{{ route('property.rating') }}", { rating: rating, property_id: property_id, user_id: user_id }, function( data ) {
                if(data.rating.rating){
                    M.toast({html: 'Rating: '+ data.rating.rating + ' added successfully.', classes:'green darken-4'})
                }
            });
        });
        

        // COMMENT
        $(document).on('click','#commentreplay',function(e){
            e.preventDefault();
            
            var commentid = $(this).data('commentid');

            $('#procomment-'+commentid).empty().append(
                `<div class="comment-box">
                    <form action="{{ route('property.comment',$property->id) }}" method="POST">
                        @csrf
                        <input type="hidden" name="parent" value="1">
                        <input type="hidden" name="parent_id" value="`+commentid+`">
                        
                        <textarea name="body" class="box" placeholder="Leave a comment"></textarea>
                        <input type="submit" class="btn indigo" value="Comment">
                    </form>
                </div>`
            );
        });

        // MESSAGE
        $(document).on('submit','.agent-message-box',function(e){
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
                    $(btn).empty().append('LOADING...<i class="material-icons left">rotate_right</i>');
                },
                success: function(data) {
                    if (data.message) {
                        M.toast({html: data.message, classes:'green darken-4'})
                    }
                },
                error: function(xhr) {
                    M.toast({html: xhr.statusText, classes: 'red darken-4'})
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
