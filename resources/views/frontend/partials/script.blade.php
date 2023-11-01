  <!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        var success_message = "{{ Session::get('success') }}";
        if (success_message) {
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

@stack('scripts')