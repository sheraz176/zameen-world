@extends('frontend.layouts.apps')

@push('styles')
<!-- Link Swiper's CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
<!-- CustomCss Links -->
<link href="assets/css/style.css" rel="stylesheet">
<!-- bootstrapCss Links -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
@endpush

@section('content')
<!-- Banner-section-agent-profile -->
<section class="all-p">
    <div class="container-fluid">
      <div class="agent-profile-banner mt-lg-5 mt-3">
        <div class="row">
          <div class="col-md-4">
            <div class="agent-profile-figure">
              @if (!empty($agent->image))
              <img src="{{Storage::url('users/'.$agent->image)}}" >
              @else
              <img src="{{ asset('zameen/55929607.png ') }}">
              @endif
            </div>
          </div>
          <div class="col-md-8">
            <div class="row">
              <div class="col-lg-8">
                <div class="profile-agent-box">
                  <div class="d-flex flex-column gap-3 mt-3 mt-lg-0">
                    <p class="willam-name mb-2">{{ $agent->name }}</p>
                    <p class="user-placeholder-s ">Zameen World</p>

                    <p class="user-placeholder-a  ">{{ $agent->phone }}</p>
                    <p class="user-placeholder-a  ">{{ $agent->email }}</p>
                  </div>
                </div>
                <div class="d-flex flex-row gap-3 py-4">
                  <a href="#">
                    <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M18 0C27.9345 0 36 8.06555 36 18C36 27.9345 27.9345 36 18 36C8.06555 36 0 27.9345 0 18C0 8.06555 8.06555 0 18 0ZM12.3724 28.1159V14.059H7.69915V28.1159H12.3724ZM29.2207 28.1159V20.0549C29.2207 15.7371 26.9153 13.7284 23.8411 13.7284C21.3623 13.7284 20.2519 15.0917 19.6302 16.0492V14.059H14.9581C15.0201 15.3778 14.9581 28.1159 14.9581 28.1159H19.6301V20.2655C19.6301 19.8454 19.6604 19.4253 19.7842 19.125C20.1213 18.2858 20.8907 17.4165 22.1815 17.4165C23.8714 17.4165 24.5484 18.706 24.5484 20.5949V28.1159H29.2207ZM10.0673 7.28086C8.46844 7.28086 7.4238 8.33203 7.4238 9.7098C7.4238 11.0585 8.43666 12.1387 10.0055 12.1387H10.0356C11.6651 12.1387 12.6794 11.0585 12.6794 9.7098C12.6491 8.33203 11.6652 7.28086 10.0673 7.28086Z"
                        fill="#6CACE3" />
                    </svg>
                  </a>
                  <a href="#"> <svg width="36" height="36" viewBox="0 0 36 36" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M17.9312 35.9999L17.9473 35.9999H17.9418L17.9312 35.9999ZM18.0582 35.9999H18.0527L18.0688 35.9999L18.0582 35.9999ZM17.8763 35.9996L17.8936 35.9996H17.8836L17.8763 35.9996ZM18.1164 35.9996H18.1064L18.1238 35.9996L18.1164 35.9996ZM17.8232 35.9992L17.8348 35.9992L17.8256 35.9992H17.8232ZM18.1744 35.9992L18.1652 35.9992L18.1768 35.9992H18.1744ZM18.2325 35.9985L18.2284 35.9986L18.2441 35.9984L18.2325 35.9985ZM17.7559 35.9984L17.7716 35.9986L17.7675 35.9985L17.7559 35.9984ZM18.2905 35.9977L18.281 35.9978L18.3004 35.9975L18.2905 35.9977ZM17.6996 35.9975L17.719 35.9978L17.7095 35.9977L17.6996 35.9975ZM18.3485 35.9967L18.3357 35.9969L18.3535 35.9966L18.3485 35.9967ZM17.6465 35.9966L17.6643 35.9969L17.6515 35.9967L17.6465 35.9966ZM17.5806 35.9952L17.5964 35.9956L17.5936 35.9955L17.5806 35.9952ZM18.4064 35.9955L18.4036 35.9956L18.4194 35.9952L18.4064 35.9955ZM17.5228 35.9937L17.5445 35.9943L17.5357 35.9941L17.5228 35.9937ZM18.4643 35.9941L18.4555 35.9943L18.4772 35.9937L18.4643 35.9941ZM18.5221 35.9925L18.508 35.993L18.5302 35.9923L18.5221 35.9925ZM17.4698 35.9923L17.492 35.993L17.4779 35.9925L17.4698 35.9923ZM17.4191 35.9908L17.435 35.9913L17.4201 35.9908L17.4064 35.9904L17.4191 35.9908ZM18.5799 35.9908L18.565 35.9913L18.5809 35.9908L18.5936 35.9904L18.5799 35.9908ZM18.6377 35.9889L18.6298 35.9892L18.654 35.9883L18.6377 35.9889ZM17.346 35.9883L17.3702 35.9892L17.3623 35.9889L17.346 35.9883ZM17.2933 35.9864L17.3187 35.9873L17.3046 35.9868L17.2933 35.9864ZM18.6954 35.9868L18.6813 35.9873L18.7067 35.9864L18.6954 35.9868ZM17.2416 35.9842L17.2665 35.9853L17.247 35.9845L17.2416 35.9842ZM18.753 35.9845L18.7335 35.9853L18.7584 35.9842L18.753 35.9845ZM17.1692 35.9811L17.1959 35.9823L17.1894 35.9821L17.1692 35.9811ZM18.8106 35.9821L18.8041 35.9823L18.8308 35.9811L18.8106 35.9821ZM17.1172 35.9787L17.1449 35.98L17.1319 35.9794L17.1172 35.9787ZM18.8681 35.9794L18.8551 35.98L18.8828 35.9787L18.8681 35.9794ZM17.066 35.9761L17.094 35.9775L17.0743 35.9766L17.066 35.9761ZM18.9257 35.9766L18.906 35.9775L18.934 35.9761L18.9257 35.9766ZM18.9832 35.9736L18.9577 35.9749L18.9803 35.9737L19.0069 35.9722L18.9832 35.9736ZM17.0197 35.9737L17.0423 35.9749L17.0168 35.9736L16.9931 35.9722L17.0197 35.9737ZM19.0406 35.9703L19.0293 35.971L19.0579 35.9693L19.0406 35.9703ZM16.9421 35.9693L16.9707 35.971L16.9594 35.9703L16.9421 35.9693ZM16.8914 35.9663L16.9199 35.968L16.9021 35.967L16.8914 35.9663ZM19.0979 35.967L19.0801 35.968L19.1086 35.9663L19.0979 35.967ZM16.8429 35.9633L16.8686 35.9649L16.8447 35.9634L16.8206 35.9619L16.8429 35.9633ZM19.1553 35.9634L19.1314 35.9649L19.1571 35.9633L19.1794 35.9619L19.1553 35.9634ZM19.2125 35.9597L19.204 35.9603L19.2312 35.9584L19.2125 35.9597ZM16.7688 35.9584L16.796 35.9603L16.7875 35.9597L16.7688 35.9584ZM16.7181 35.9549L16.7449 35.9568L16.7302 35.9558L16.7181 35.9549ZM19.2698 35.9558L19.2551 35.9568L19.2819 35.9549L19.2698 35.9558ZM16.6676 35.9513L16.6921 35.9531L16.6731 35.9518L16.6676 35.9513ZM19.3269 35.9518L19.3079 35.9531L19.3324 35.9513L19.3269 35.9518ZM16.5996 35.9462L16.6211 35.9478L16.6159 35.9475L16.5996 35.9462ZM19.3841 35.9475L19.3789 35.9478L19.4004 35.9462L19.3841 35.9475ZM19.4411 35.943L19.4309 35.9438L19.4527 35.9421L19.4411 35.943ZM16.5473 35.9421L16.5691 35.9438L16.5589 35.943L16.5473 35.9421ZM16.4963 35.9379L16.5149 35.9395L16.5018 35.9384L16.4963 35.9379ZM19.4982 35.9384L19.4851 35.9395L19.5037 35.9379L19.4982 35.9384ZM16.4402 35.9332L16.4457 35.9337L16.4448 35.9336L16.4402 35.9332ZM19.5552 35.9336L19.5543 35.9337L19.5598 35.9332L19.5552 35.9336ZM19.6121 35.9286L19.6071 35.9291L19.6198 35.9279L19.6121 35.9286ZM16.3802 35.9279L16.3929 35.9291L16.3879 35.9286L16.3802 35.9279ZM16.3275 35.9231L16.337 35.9241L16.3311 35.9235L16.3275 35.9231ZM19.6689 35.9235L19.663 35.9241L19.6725 35.9231L19.6689 35.9235ZM15.1875 35.7811C6.58695 34.4293 0 26.9778 0 18C0 8.06555 8.06555 0 18 0C27.9345 0 36 8.06555 36 18C36 26.9778 29.4131 34.4293 20.8125 35.7811V23.2031H25.0066L25.8047 18H20.8125V14.6235C20.8125 13.2 21.5099 11.8125 23.7459 11.8125H26.0156V7.38281C26.0156 7.38281 23.9558 7.03125 21.9864 7.03125C17.8748 7.03125 15.1875 9.52312 15.1875 14.0344V18H10.6172V23.2031H15.1875V35.7811Z"
                        fill="#6CACE3" />
                    </svg></a>
                  <a href="#"> <svg width="36" height="35" viewBox="0 0 36 35" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M18 0C27.9345 0 36 7.8415 36 17.5C36 27.1585 27.9345 35 18 35C8.06555 35 0 27.1585 0 17.5C0 7.8415 8.06555 0 18 0ZM18 6.5625C14.9447 6.5625 14.5616 6.57508 13.3616 6.62833C12.1642 6.68145 11.3464 6.86636 10.6308 7.13672C9.891 7.41624 9.2636 7.79023 8.63817 8.39829C8.01274 9.00635 7.62806 9.61632 7.34055 10.3355C7.06247 11.0312 6.87234 11.8263 6.81764 12.9905C6.76294 14.1571 6.75 14.5296 6.75 17.5C6.75 20.4704 6.76294 20.8429 6.81764 22.0095C6.87234 23.1737 7.06247 23.9688 7.34055 24.6645C7.62806 25.3837 8.01274 25.9937 8.63817 26.6018C9.2636 27.2098 9.891 27.5838 10.6308 27.8633C11.3464 28.1336 12.1642 28.3186 13.3616 28.3717C14.5616 28.4249 14.9447 28.4375 18 28.4375C21.0553 28.4375 21.4384 28.4249 22.6384 28.3717C23.8358 28.3186 24.6536 28.1336 25.3692 27.8633C26.1089 27.5838 26.7363 27.2098 27.3618 26.6018C27.9873 25.9937 28.3719 25.3837 28.6594 24.6645C28.9375 23.9688 29.1277 23.1737 29.1823 22.0095C29.2371 20.8429 29.25 20.4704 29.25 17.5C29.25 14.5296 29.2371 14.1571 29.1823 12.9905C29.1277 11.8263 28.9375 11.0312 28.6594 10.3355C28.3719 9.61632 27.9873 9.00635 27.3618 8.39829C26.7363 7.79023 26.1089 7.41624 25.3692 7.13672C24.6536 6.86636 23.8358 6.68145 22.6384 6.62833C21.4384 6.57508 21.0553 6.5625 18 6.5625ZM18 8.53323C21.0039 8.53323 21.3597 8.54438 22.546 8.59701C23.6429 8.64568 24.2385 8.82383 24.6349 8.9736C25.1601 9.17198 25.5348 9.40905 25.9284 9.7918C26.3222 10.1745 26.566 10.5389 26.77 11.0494C26.9241 11.4348 27.1074 12.0139 27.1574 13.0803C27.2115 14.2337 27.223 14.5796 27.223 17.5C27.223 20.4204 27.2115 20.7663 27.1574 21.9197C27.1074 22.9861 26.9241 23.5652 26.77 23.9506C26.566 24.4612 26.3222 24.8255 25.9284 25.2082C25.5348 25.591 25.1601 25.828 24.6349 26.0264C24.2385 26.1762 23.6429 26.3544 22.546 26.403C21.3599 26.4556 21.0041 26.4668 18 26.4668C14.9959 26.4668 14.6402 26.4556 13.454 26.403C12.3571 26.3544 11.7615 26.1762 11.3651 26.0264C10.8399 25.828 10.4652 25.591 10.0715 25.2082C9.67781 24.8255 9.43404 24.4612 9.22999 23.9506C9.07594 23.5652 8.89263 22.9861 8.84257 21.9197C8.78843 20.7663 8.77704 20.4204 8.77704 17.5C8.77704 14.5796 8.78843 14.2337 8.84257 13.0803C8.89263 12.0139 9.07594 11.4348 9.22999 11.0494C9.43404 10.5389 9.67781 10.1745 10.0715 9.7918C10.4652 9.40905 10.8399 9.17198 11.3651 8.9736C11.7615 8.82383 12.3571 8.64568 13.454 8.59701C14.6403 8.54438 14.9961 8.53323 18 8.53323ZM18 11.8835C14.8094 11.8835 12.223 14.3981 12.223 17.5C12.223 20.6019 14.8094 23.1165 18 23.1165C21.1906 23.1165 23.777 20.6019 23.777 17.5C23.777 14.3981 21.1906 11.8835 18 11.8835ZM18 21.1458C15.9289 21.1458 14.25 19.5135 14.25 17.5C14.25 15.4865 15.9289 13.8542 18 13.8542C20.0711 13.8542 21.75 15.4865 21.75 17.5C21.75 19.5135 20.0711 21.1458 18 21.1458ZM25.3553 11.6616C25.3553 12.3864 24.7508 12.974 24.0052 12.974C23.2597 12.974 22.6553 12.3864 22.6553 11.6616C22.6553 10.9367 23.2597 10.3491 24.0052 10.3491C24.7508 10.3491 25.3553 10.9367 25.3553 11.6616Z"
                        fill="#6CACE3" />
                    </svg></a>
                  <a href="#"> <svg width="36" height="36" viewBox="0 0 36 36" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M18 0C27.9345 0 36 8.06555 36 18C36 27.9345 27.9345 36 18 36C8.06555 36 0 27.9345 0 18C0 8.06555 8.06555 0 18 0ZM14.8295 27.5736C22.7948 27.5736 27.15 20.9734 27.15 15.2532C27.15 15.0647 27.15 14.8761 27.141 14.6964C27.9851 14.0858 28.7215 13.3225 29.3051 12.4515C28.5329 12.7927 27.6977 13.0262 26.8177 13.134C27.7157 12.5951 28.3982 11.751 28.7215 10.7364C27.8863 11.2302 26.9614 11.5894 25.9736 11.787C25.1833 10.9429 24.0609 10.4221 22.8127 10.4221C20.424 10.4221 18.4844 12.3617 18.4844 14.7504C18.4844 15.0916 18.5203 15.4238 18.6011 15.7381C15.0002 15.5585 11.8123 13.8344 9.67514 11.2122C9.30691 11.8498 9.09141 12.5951 9.09141 13.3854C9.09141 14.885 9.85472 16.2141 11.0221 16.9863C10.3127 16.9684 9.64814 16.7708 9.06448 16.4476V16.5014C9.06448 18.6027 10.5551 20.3448 12.5397 20.7489C12.1805 20.8477 11.7944 20.9016 11.3993 20.9016C11.1208 20.9016 10.8515 20.8747 10.5821 20.8207C11.1298 22.5449 12.7282 23.7931 14.623 23.829C13.1413 24.9874 11.2736 25.6789 9.24405 25.6789C8.89383 25.6789 8.5526 25.6609 8.21137 25.616C10.1062 26.8552 12.387 27.5736 14.8295 27.5736Z"
                        fill="#6CACE3" />
                    </svg></a>
                </div>
              </div>
              <div class="col-lg-4 d-flex flex-column gap-3 justify-content-center ">
                <a class="view-blogs  d-block">Work With me</a>
                <a class="view-blogs  d-block">View Blogs</a>
              </div>
            </div>
            <div class="row">
              <div class="col-md-11">
                <div class="d-flex flex-column gap-1 mt-3 mt-lg-0">
                  <p class="client-name mb-0">Bio</p>
                  <p class="user-placeholder d-block  mb-0 py-2 pe-5">
                    {{ $agent->about }}
                  </p>
                </div>
              </div>
            </div>
          </div>
         
        </div>
      </div>
    
    </div>
    </div>
  </section>
  <section class="all-p mt-5 mb-4 ">
    <div class="container-fluid">
      <div class="row">
        @foreach ($properties as $property)
        <div class="col-12 col-md-6 col-lg-6 col-xl-4 mb-3">
            <div class="small-wrapper position-relative">
              <img src="{{Storage::url('property/'.$property->image)}}">
              <div
                class="badge-review d-flex flex-row justify-content-between px-3 align-items-start position-absolute flex-nowrap w-100">
                <div><span class="badge-for-all">Agents Active List</span></div>
              </div>
              <div class="blog-overlay-small-agent">
                <div class="d-flex flex-row justify-content-between">
                  <div class="d-flex flex-column gap-2" style="line-height: 19px;">
                    <span style="color: white;font-weight: 700;
                  font-size: 20px;">PKR,{{ $property->price }}</span>
                    <span style="color: white;font-weight: 700;
                    font-size: 20px;">{{ str_limit($property->title,25) }}</span>
                    <span class="overlay-text">{{ $property->type }} for {{ $property->purpose }}</span>
                    <div class="d-flex flex-row gap-2 align-items-end text-center parent-tag">
                      <div class="d-flex flex-row gap-2 px-2 align-items-center">
                        <svg width="16" height="11" viewBox="0 0 16 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M14.8839 4.90234V2.86433C14.8839 1.65472 13.8942 0.665039 12.6846 0.665039H9.75225C9.18776 0.665039 8.6746 0.884969 8.28605 1.23686C7.89751 0.884969 7.38434 0.665039 6.81986 0.665039H3.88747C2.67786 0.665039 1.68818 1.65472 1.68818 2.86433V4.90234C1.24099 5.30555 0.955078 5.88469 0.955078 6.52982V10.9284H2.42127V9.46221H14.1508V10.9284H15.617V6.52982C15.617 5.88469 15.3311 5.30555 14.8839 4.90234ZM9.75225 2.13123H12.6846C13.0878 2.13123 13.4177 2.46113 13.4177 2.86433V4.33053H9.01915V2.86433C9.01915 2.46113 9.34905 2.13123 9.75225 2.13123ZM3.15437 2.86433C3.15437 2.46113 3.48426 2.13123 3.88747 2.13123H6.81986C7.22306 2.13123 7.55296 2.46113 7.55296 2.86433V4.33053H3.15437V2.86433ZM2.42127 7.99602V6.52982C2.42127 6.12662 2.75117 5.79672 3.15437 5.79672H13.4177C13.8209 5.79672 14.1508 6.12662 14.1508 6.52982V7.99602H2.42127Z"
                            fill="#6CACE3" />
                        </svg>
                        <span class="overlay-text">{{ $property->bedroom}} Beds</span>
                      </div>
                      <div class="d-flex flex-row gap-2 px-2 align-items-center">
                        <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M14.5167 5.3309H4.25338V3.13161C4.25338 2.323 4.91097 1.66541 5.71957 1.66541C6.52818 1.66541 7.18577 2.323 7.18577 3.13161H8.65196C8.65196 1.5144 7.33679 0.199219 5.71957 0.199219C4.10236 0.199219 2.78718 1.5144 2.78718 3.13161V5.3309H1.32099C1.12656 5.3309 0.940092 5.40814 0.80261 5.54562C0.665127 5.6831 0.587891 5.86957 0.587891 6.064V7.53019C0.587891 9.44065 1.8151 11.0659 3.52028 11.6722V14.1281H4.98648V11.9288H10.8513V14.1281H12.3175V11.6722C14.0226 11.0659 15.2498 9.44065 15.2498 7.53019V6.064C15.2498 5.86957 15.1726 5.6831 15.0351 5.54562C14.8976 5.40814 14.7112 5.3309 14.5167 5.3309ZM13.7836 7.53019C13.7836 9.14741 12.4685 10.4626 10.8513 10.4626H4.98648C3.36926 10.4626 2.05409 9.14741 2.05409 7.53019V6.7971H13.7836V7.53019Z"
                            fill="#6CACE3" />
                        </svg>
                        <span class="overlay-text">{{ $property->bathroom}} Bathrooms</span>
                      </div>
                      <div class="d-flex flex-row gap-2 px-2 align-items-center">
                        <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_1495_4211)">
                            <path
                              d="M8.52263 13.6739L3.794 8.94526C3.25877 8.41003 3.25877 7.42456 3.794 6.88933L8.52263 2.1607C9.05786 1.62547 10.0433 1.62547 10.5786 2.1607L15.3072 6.88933C15.8424 7.42456 15.8424 8.41003 15.3072 8.94526L10.5786 13.6739C10.0433 14.2091 9.05786 14.2091 8.52263 13.6739V13.6739Z"
                              stroke="#6CACE3" stroke-width="1.31958" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M2.51367 11.5869L6.35251 15.4257" stroke="#6CACE3" stroke-width="1.31958"
                              stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M12.75 15.4257L16.5888 11.5869" stroke="#6CACE3" stroke-width="1.31958"
                              stroke-linecap="round" stroke-linejoin="round" />
                          </g>
                          <defs>
                            <clipPath id="clip0_1495_4211">
                              <rect width="17.5943" height="17.5943" fill="white" transform="translate(0.753906)" />
                            </clipPath>
                          </defs>
                        </svg>
                        <span class="overlay-text">{{ $property->area}}</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endforeach
        
       
      </div>
    </div>
  </section>
   

@endsection

@push('scripts')
    <script>
        $(function(){
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
 <!-- Bootstrap JS -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
 crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"
 integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script>



 // When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
 window.onscroll = function () { scrollFunction() };
 function scrollFunction() {
   if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
     document.getElementById("navbar").style.top = "-80px";
   } else {
     document.getElementById("navbar").style.top = "0px";
   }
 }


 // MTS JAVA
 let names = [
   "Ayla",
   "Jake",
   "Sean",
   "Henry",
   "Brad",
   "Stephen",
   "Taylor",
   "Timmy",
   "Cathy",
   "John",
   "Amanda",
   "Amara",
   "Sam",
   "Sandy",
   "Danny",
   "Ellen",
   "Camille",
   "Chloe",
   "Emily",
   "Nadia",
   "Mitchell",
   "Harvey",
   "Lucy",
   "Amy",
   "Glen",
   "Peter",
 ];
 let sortedNames = names.sort();

 //reference
 let input = document.getElementById("searchtxt");

 input.addEventListener("keyup", (e) => {
   removeElements();
   for (let i of sortedNames) {
     if (i.toLowerCase().startsWith(input.value.toLowerCase()) && input.value != "") {
       let listItem = document.createElement("li");
       listItem.classList.add("list-items-dropdown");
       listItem.style.cursor = "pointer";
       listItem.setAttribute("onclick", "displayNames('" + i + "')");
       let word = "<b>" + i.substr(0, input.value.length) + "</b>";
       word += i.substr(input.value.length);
       listItem.innerHTML = "<img src='assets/images/location.png'/>" + word;
       document.querySelector(".list-dropdown").appendChild(listItem);
       document.querySelector(".list-dropdown").style.display = "block";
     }
   }
 });
 function displayNames(value) {
   input.value = value;
   removeElements();
 }
 function removeElements() {
   let items = document.querySelectorAll(".list-items-dropdown");
   document.querySelector(".list-dropdown").style.display = "none";
   items.forEach((item) => {
     item.remove();
   });
 }
 // MTS JAVA
 function openNav() {
   document.getElementById("mySidenav").style.left = "0px";
 }
 function closeNav() {
   document.getElementById("mySidenav").style.left = "-300px";
 }
</script>
<script>

 var swiper = new Swiper(".mySwiperreview", {
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
 const reviewtext=document.querySelectorAll(".reviwe-sm");
 reviewtext.forEach((counter)=>{
    const dots=counter.querySelector(".dots");
    const moreText=counter.querySelector(".more");
    const btnText=counter.querySelector(".myBtn");
    btnText.addEventListener('click',()=>{
     if (dots.style.display === "none") {
     dots.style.display = "inline";
     btnText.innerHTML = "Read more"; 
     moreText.style.display = "none";
   } else {
     dots.style.display = "none";
     btnText.innerHTML = "Read less"; 
     moreText.style.display = "inline";
   }
    })
 })
 </script>



@endpush