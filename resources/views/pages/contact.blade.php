@extends('frontend.layouts.apps')

@push('styles')
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>


  </head>
@endpush

@section('content')
<!-- Banner-section -->
<section>
    <div class="agent-bg-banner d-flex justify-content-center align-items-center flex-column text-center">
      <div class="d-flex flex-column justify-content-center align-content-center align-items-center px-3">
        <svg width="89" height="79" viewBox="0 0 89 79" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M41.4384 0.113647C30.5946 0.984703 20.5152 6.95767 14.5956 16.006C13.1734 18.157 11.7691 21.0724 10.9158 23.65L10.2047 25.7832L8.90701 26.0854C7.27155 26.4587 6.18717 26.9209 4.88947 27.8098C3.32512 28.8764 1.93854 30.4763 1.13858 32.1473C0.231972 34.0494 -0.0169019 35.1871 0.000874857 37.2492C0.0897584 43.7377 5.68942 48.7329 12.2668 48.1819C13.7067 48.0574 13.8667 48.0041 14.4 47.4708C14.7555 47.1153 14.9866 46.7064 14.9866 46.4397C14.9866 46.2087 14.7555 45.0532 14.4533 43.8977C13.5289 40.2001 13.3512 38.7958 13.2623 34.9382C13.1912 31.7562 13.2267 31.0096 13.5645 28.983C14.56 23.0989 17.0665 18.0859 21.1907 13.7306C27.5548 7.06434 36.3187 3.509 45.5626 3.88231C51.6422 4.13118 57.153 5.90885 62.0949 9.21532C68.7434 13.6773 73.1342 19.988 74.823 27.5609C75.3741 30.0141 75.5874 35.2404 75.2675 38.138C74.6275 43.5955 73.0987 48.3241 70.77 51.915L70.2011 52.8038L70.0411 52.0039C69.81 50.7239 70.0233 46.7775 70.4144 45.0709C71.8899 38.9202 72.2276 32.6983 71.3388 28.503C69.1878 18.3348 61.2772 10.353 50.8067 7.81096C44.6204 6.31771 37.492 7.11767 31.8034 9.97971C28.9769 11.4019 26.7904 12.984 24.5861 15.1883C20.7818 19.0103 18.4886 23.1523 17.2976 28.4497C16.3732 32.485 16.7465 39.0624 18.2398 45.1598C18.5775 46.5642 18.6309 47.1864 18.5953 50.2262C18.5064 59.7367 16.711 66.403 12.8712 71.4516L12.089 72.5004L17.4932 72.3937C22.8084 72.3049 25.706 72.056 28.7103 71.4516L30.0968 71.1849L31.6434 72.7493C34.4344 75.558 37.1897 77.3001 40.3362 78.2423C42.4694 78.8822 45.7937 78.9356 47.9624 78.3312C51.0556 77.4957 53.6154 75.9313 56.5308 73.1048L58.504 71.1672L59.9084 71.4516C63.4993 72.1449 67.2146 72.4471 72.5298 72.4471H76.494L75.5163 71.1494C72.9387 67.8074 70.8411 61.7277 70.3611 56.2525C70.2366 54.9548 70.2366 54.937 70.8588 54.1371C71.801 52.9105 72.6898 51.4528 73.5609 49.7462L74.3431 48.1819L76.974 48.1641C79.3383 48.1641 79.7294 48.1108 80.9027 47.6841C85.5957 46.0309 88.5822 41.9956 88.6355 37.2492C88.6533 35.1693 88.3867 34.0316 87.48 32.1117C86.8934 30.9029 86.4846 30.3163 85.3113 29.1608C83.6403 27.5076 82.0404 26.6187 79.8183 26.1032L78.4317 25.7832L77.7562 23.7389C75.2675 16.3438 70.5033 10.2108 63.8726 5.85552C57.2952 1.55356 49.2068 -0.526314 41.4384 0.113647ZM41.9184 25.1077C41.4206 30.5474 40.3896 35.0982 38.7008 39.0802C38.3808 39.8624 38.1319 40.5379 38.1497 40.5734C38.2564 40.6801 41.2073 38.618 42.8427 37.3025C46.0959 34.6716 49.189 31.2762 51.8555 27.4187C52.5133 26.4765 53.0821 25.6943 53.1177 25.6943C53.1355 25.6943 53.8821 26.5121 54.7354 27.5076C57.6685 30.8673 62.0949 34.5827 66.2724 37.2136C68.4945 38.6002 68.3345 38.1914 67.8368 41.1601C66.9124 46.8486 64.2281 55.0437 61.5794 60.3056C60.9039 61.6744 60.8683 61.7099 59.4106 62.5277C57.0641 63.8254 54.6998 64.9631 52.6022 65.7986L50.6823 66.5808L49.989 65.9764C49.029 65.1053 48.3713 64.8031 47.4114 64.8031C44.4426 64.8031 42.8605 68.1807 44.816 70.3494C45.5804 71.2027 46.327 71.5582 47.3758 71.5582C48.9757 71.5582 50.2912 70.4561 50.7178 68.714L50.9134 67.914L52.7266 67.2385C53.7221 66.8652 55.642 66.0297 56.9752 65.3542L59.4106 64.1453L59.0373 64.8386C58.3263 66.1008 56.0864 68.9451 54.6998 70.3494C52.9044 72.1626 51.3222 73.3715 49.5623 74.207C47.7313 75.0958 46.1848 75.4691 44.3004 75.4691C40.5673 75.4513 37.3853 73.8692 33.8833 70.2605C28.888 65.1053 24.6394 56.7147 21.9907 46.6708L21.3507 44.2888L21.7596 44.0043C28.6925 39.4713 35.6432 32.7161 40.674 25.641C41.3495 24.6988 41.9361 23.9167 41.9539 23.9167C41.9895 23.9167 41.9717 24.45 41.9184 25.1077Z"
            fill="#041E42" />
          <path
            d="M30.3647 43.3467C29.2092 43.6489 26.9871 44.68 26.6138 45.0889C26.1872 45.551 26.2405 46.6176 26.7382 47.1332L27.1293 47.5598H32.889H38.6486L39.0753 47.1154C39.6263 46.5821 39.6619 45.6577 39.1642 45.1066C38.702 44.6089 37.9909 44.2533 36.4265 43.7023C34.8977 43.1512 31.8046 42.9912 30.3647 43.3467Z"
            fill="#041E42" />
          <path
            d="M52.887 43.4712C49.705 44.3067 48.2829 45.8533 49.5628 47.1154L49.9894 47.5598H55.7491H61.5087L61.8821 47.151C62.3087 46.7065 62.3976 45.8177 62.0954 45.2311C61.8287 44.7511 59.9977 43.8623 58.3978 43.4534C56.6913 43.0268 54.5936 43.0268 52.887 43.4712Z"
            fill="#041E42" />
        </svg>
        <h3 class="agent-head mt-4">Contact Us</h3>
        <p class="agent-plan-text">Need help with something</p>
      </div>
    </div>
  </section>
  <!-- contact-form -->
  <section>
    <div class="container-fluid px-5">
      <p class="intro-headig py-4">How can we help you?</p>
      <form  action="{{ route('contact.message') }}" method="POST">
        @csrf
        <input type="hidden" name="mailto" value="{{ $contactsettings[0]['email'] ?? 'p4alam@gmail.com' }}">

        @auth
            <input type="hidden" name="user_id" value="{{ auth()->id() }}">
        @endauth
      <div class="row contact-us-form">
        <div class="col-md-6">
            @auth
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">First name</label>
            <input type="text"  name="name" value="{{ auth()->user()->name }}" class="form-control" id="name"
              placeholder="Input your first name in here">
          </div>
          @endauth

          @guest
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">First name</label>
            <input type="text"  name="name" class="form-control" id="name"
              placeholder="Input your first name in here">
          </div>
          @endguest
        </div>
        <div class="col-md-6">
            @auth
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email</label>
            <input type="email"  class="form-control" name="email" id="email"
              placeholder="Input your email in here">
          </div>
          @endauth
          @guest
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email"
              placeholder="Input your email in here">
          </div>
          @endguest
        </div>
        
        <div class="col-md-6">
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Phone (Optional)</label>
            <input name="phone" type="number"  class="form-control" id="phone"
              placeholder="Input your phone number in here">
          </div>
        </div>
        <div class="col-md-12">
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Messages</label>
            <textarea class="form-control" id="message" name="message" rows="5"
              placeholder="Write your messages in here"></textarea>
          </div>
        </div>
        <div class="col-md-12">
          <div class="mb-3">
            <button class="btn-contain-normal">Send Message</button>
          </div>
        </div>
      </div>
      </form>
    </div>
  </section>
  <!-- map section -->
  <section>
    <div class="container-fluid px-3 px-md-5 py-4">
      <div class="row">
        <div class="col-12">
          <div style="width: 100%;border-radius:7px;"><iframe width="100%" height="499px" frameborder="0" scrolling="no"
              marginheight="0" marginwidth="0"
              src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a
                href="https://www.maps.ie/distance-area-calculator.html">area maps</a></iframe></div>
        </div>
      </div>
    </div>
  </section>

    {{-- <button class="btn btn-primary" id="toast-success"> Click Me </button> --}}

@endsection

@push('scripts')



@endpush