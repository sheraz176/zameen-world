@extends('frontend.layouts.apps')
@push('styles')
<head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Zameen world || Login</title>
 
  </head>

@endpush
@section('content')
<!-- sign-up-form-sectio -->
<section>
    <div class="newpass-wrapper">
      <div class="d-flex flex-column gap-2 px-3">
        <h3 class="popup-heading text-center mt-5 mb-3">Log In</h3>
      </div>
      <div class="newreset-form pt-3">
        <div class="d-flex flex-column gap-2">
            <form method="POST" action="{{ route('login') }}">
                @csrf
          <div class="row custom-inputs">
            <div class="col-md col-md-12">
              <div class="mb-3">
              <div class="mb-3">
                <input type="email" id="email" type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus 
                  placeholder="Email address">
                  @if ($errors->has('email'))
                  <span style="color: red">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
                  @endif
              </div>
              <div class="input-group mb-3">
              
                  <input id="password" type="password" class="form-control border-end-0 {{ $errors->has('password') ? 'is-invalid' : '' }}" name="password" required  aria-label="Recipient's username" aria-describedby="basic-addon2">

                  @if ($errors->has('password'))
                      <span style="color: red;">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif
                <span class="input-group-text bg-white" id="basic-addon2"><svg width="24" height="20" viewBox="0 0 24 20"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_349_3298)">
                      <path
                        d="M11.9999 15.0001C9.15554 15.0001 6.85304 12.7985 6.64117 10.0085L2.70742 6.96835C2.19029 7.6171 1.71442 8.30297 1.33042 9.05297C1.24463 9.22266 1.19994 9.41014 1.19994 9.60029C1.19994 9.79043 1.24463 9.97791 1.33042 10.1476C3.36404 14.1155 7.39004 16.8001 11.9999 16.8001C13.009 16.8001 13.9825 16.6501 14.9208 16.4079L12.9749 14.9022C12.6536 14.9643 12.3272 14.9971 11.9999 15.0001ZM23.7682 17.1789L19.6225 13.9748C20.8819 12.9136 21.9176 11.6125 22.6694 10.1472C22.7552 9.97753 22.7999 9.79005 22.7999 9.59991C22.7999 9.40977 22.7552 9.22229 22.6694 9.0526C20.6358 5.08472 16.6098 2.4001 11.9999 2.4001C10.0692 2.40244 8.1699 2.88849 6.47542 3.81385L1.70467 0.126473C1.64246 0.0780638 1.57132 0.0423873 1.49531 0.0214828C1.41931 0.000578356 1.33993 -0.00514445 1.26171 0.00464146C1.18349 0.0144274 1.10797 0.0395302 1.03946 0.0785154C0.970945 0.117501 0.910786 0.169604 0.862419 0.231848L0.126294 1.17947C0.0286433 1.30509 -0.0151133 1.46435 0.00464779 1.62223C0.0244088 1.78011 0.106069 1.92367 0.231669 2.02135L22.2952 19.0737C22.3574 19.1221 22.4285 19.1578 22.5045 19.1787C22.5805 19.1996 22.6599 19.2053 22.7381 19.1956C22.8163 19.1858 22.8919 19.1607 22.9604 19.1217C23.0289 19.0827 23.0891 19.0306 23.1374 18.9683L23.8739 18.0207C23.9715 17.8951 24.0152 17.7358 23.9954 17.5779C23.9756 17.42 23.8938 17.2765 23.7682 17.1789ZM16.8787 11.8538L15.4049 10.7146C15.529 10.3559 15.5949 9.97963 15.5999 9.6001C15.6072 9.04445 15.4841 8.49482 15.2405 7.99538C14.9969 7.49593 14.6395 7.06058 14.1971 6.7243C13.7547 6.38803 13.2396 6.16019 12.6932 6.0591C12.1467 5.95801 11.5842 5.98648 11.0508 6.14222C11.2769 6.44864 11.3992 6.81928 11.3999 7.2001C11.3943 7.32682 11.375 7.45256 11.3422 7.5751L8.58179 5.44172C9.54066 4.64043 10.7503 4.20102 11.9999 4.2001C12.7092 4.1997 13.4115 4.33911 14.0669 4.61035C14.7222 4.88158 15.3177 5.27933 15.8192 5.78084C16.3207 6.28236 16.7184 6.87781 16.9897 7.53314C17.2609 8.18848 17.4003 8.89085 17.3999 9.6001C17.3999 10.4112 17.2015 11.1672 16.8787 11.8542V11.8538Z"
                        fill="#333333" fill-opacity="0.3" />
                    </g>
                    <defs>
                      <clipPath id="clip0_349_3298">
                        <rect width="24" height="19.2" fill="white" />
                      </clipPath>
                    </defs>
                  </svg>
                </span>
              </div>
            </div>
            <div class="d-flex flex-row gap-2 sign-up-checkbox align-items-center">
                <input type="checkbox" name="remember"  {{ old('remember') ? 'checked' : '' }} />
                <label class="no-account">{{ __('Remember Me') }}</label>
              </div>
            <div class="col-md-12 mt-4 mb-3">
              <div class="mb-5">
                <div class="d-flex flex-column gap-3">
                  <button type="submit" class="btn-contain-normal w-100 mt-4" >Log In</button>
                    
              <div>
                <label class="no-account d-block text-center"> I forgot my password</label>
              </div>
                  <span class="d-block text-center no-account">Don’t have an account?<a href="{{ route('register') }}">Sign Up</a></span> 
                </div>
                <a href="{{ route('auth/google') }}" class="btn btn-danger">
                  {{ __('Login with Google') }}
              </a>
              </div>
            </div>
          </div>
        </form>
        </div>
      </div>
    </div>
  </section>
   

@endsection
