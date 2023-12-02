         <!-- CustomCss Links -->
       <link href="{{ asset('zameen/assets/css/style.css') }}" rel="stylesheet">
       <link href="{{ asset('zameen/assets/css/stylepopup.css') }}" rel="stylesheet">
       <!-- bootstrapCss Links -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
   integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
 
   <!-- toaster styles -->
   <link href="{{asset('zameen/assets/css/toastr.min.css')}}" rel="stylesheet">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
   <link rel="icon" type="image/x-icon" href="{{asset('zameen/house.png')}}" />
  <!-- Google Fonts   -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
  href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,500;0,700;1,200;1,500;1,700&family=Poppins:wght@100&display=swap"
  rel="stylesheet">
<!-- fontawesome -->
<script src="https://kit.fontawesome.com/de615a762d.js" crossorigin="anonymous"></script>
<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
<!-- lightbox -->


<link rel="stylesheet" href="{{ asset('zameen/assets/css/lightgallery-bundle.css ') }}" />
<link rel="stylesheet" href=" {{ asset('zameen/assets/css/lg-autoplay.css') }}" />
<link rel="stylesheet" href=" {{ asset('zameen/assets/css/lg-thumbnail.css') }}" />

  @stack('styles')
