<!doctype html>
<html lang="en">


@include('frontend.partials.style')

<body>
    @include('frontend.partials.side-bar')
    @include('frontend.partials.navbar_new')
    @yield('content')
    @include('frontend.partials.footer')
    @include('frontend.partials.script')


</body>

</html>