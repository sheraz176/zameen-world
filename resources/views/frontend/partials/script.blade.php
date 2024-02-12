  <!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
crossorigin="anonymous"></script>

<script src=" {{asset('zameen/assets/js/toastr.min.js')}}"> </script>
<script src=" {{asset('zameen/assets/js/toast.js')}}"> </script>

<script>
    $(document).ready(function() {
        var success_message = "{{ Session::get('success') }}";
        if (success_message) {
            // alert('hi');
            console.log('success_message',success_message);
            toastSuccess(success_message);
        }

      var error_message = "{{ Session::get('error') }}";
        if (error_message) {
            console.log('error_message',error_message);

            toastdanger(error_message);
        }



    function toastSuccess(success_message) {
        toastr.remove();
        toastr.options.positionClass = "toast-top-right";
        toastr.success(success_message);
    }

    function toastdanger(error_message) {
        toastr.remove();
        toastr.options.positionClass = "toast-top-right";
        toastr.error(error_message);
    }
});
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="{{asset('zameen/assets/js/custom.js')}}"></script>
<script>
$(document).ready(function () {
  $(".js-example-basic-single").select2();
});
</script>
<script>
  function redirect1() {
   location.replace('{{ route('admin.dashboard') }}');
 }
 function redirect2() {
   location.replace('{{ route('agent.dashboard') }}');
 }
 function redirect3() {
   location.replace('{{ route('user.dashboard') }}');
 }
 </script>

@stack('scripts')