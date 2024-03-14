@push('scripts')
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>

@include('frontend.partials.modelsjs')


<script>
$(function() {
    $('#form-tags-4').tagsInput({
        'autocomplete': {
            source: [
                'apple',
                'banana',
                'orange',
                'pizza'
            ]
        },
        placeholder: "City, Address, School, ZIP,",
    });
});
$(".select-wrapper").click(function() {
    $(this).toggleClass("vector")

    console.log($(this).data("id"));
    $(".show-drop-id-" + $(this).data("id")).toggleClass("active-select");
});
</script>

<script>
$(document).ready(function() {
    state_data();
    $('#hide_city').hide();
    $('#hide_socity').hide();
    $('#hide_phase').hide();
    $('#hide_block').hide();
    $('#hide_sub_block').hide();
    // State Code Start
    function state_data() {
        $.ajax({
            type: "GET",
            url: '{{ asset('
            state_data ') }}',
            success: function(response) {
                response.forEach(state => {
                    $('#state').append('<option value=' + state.id + '>' + state
                        .state_name + '</option>');
                });
            }
        });
    }
    // State Code End

    // City Code Start
    $('#state').change(function(e) {
        e.preventDefault();
        var id = $('#state').val();
        $.ajax({
            type: "GET",
            url: "{{ asset('city_data') }}" + '/' + id,
            success: function(response) {
                $('#socity').empty();
                $('#socity').append('<option value="">-- Please select --</option>');
                $('#phase').empty();
                $('#phase').append('<option value="">-- Please select --</option>');
                $('#block').empty();
                $('#block').append('<option value="">-- Please select --</option>');
                $('#sub_block').empty();
                $('#sub_block').append('<option value="">-- Please select --</option>');

                $('#hide_city').show();
                $('#city').empty();
                $('#city').append('<option value="">-- Please select --</option>');
                console.log(response);
                if (response != 'no data') {
                    response.forEach(city => {
                        $('#city').append('<option value=' + city.id + '>' +
                            city
                            .city_name + '</option>');
                    });
                } else {
                    $('#hide_city').hide();

                }
            }
        });
    });
    // City Code End

    // Socity Code Start
    $('#city').change(function(e) {
        e.preventDefault();
        var id = $('#city').val();
        $.ajax({
            type: "GET",
            url: "{{ asset('socity_data') }}" + '/' + id,
            success: function(response) {
                $('#phase').empty();
                $('#phase').append('<option value="">-- Please select --</option>');

                $('#block').empty();
                $('#block').append('<option value="">-- Please select --</option>');

                $('#sub_block').empty();
                $('#sub_block').append('<option value="">-- Please select --</option>');

                $('#hide_socity').show();
                $('#socity').empty();
                $('#socity').append('<option value="">-- Please select --</option>');
                if (response != 'no data') {
                    response.forEach(socity => {
                        $('#socity').append('<option value=' + socity.id + '>' +
                            socity
                            .socity_name + '</option>');
                    });
                } else {
                    $('#hide_socity').hide();

                }
            }
        });
    });
    // Socity Code End

    // phase Code Start
    $('#socity').change(function(e) {
        e.preventDefault();
        var id = $('#socity').val();
        $.ajax({
            type: "GET",
            url: "{{ asset('phase_data') }}" + '/' + id,
            success: function(response) {
                $('#block').empty();
                $('#block').append('<option value="">-- Please select --</option>');

                $('#sub_block').empty();
                $('#sub_block').append('<option value="">-- Please select --</option>');

                $('#hide_phase').show();
                $('#phase').empty();
                $('#phase').append('<option value="">-- Please select --</option>');
                if (response != 'no data') {
                    response.forEach(phase => {
                        $('#phase').append('<option value=' + phase.id + '>' +
                            phase
                            .phase_name + '</option>');
                    });
                } else {
                    $('#hide_phase').hide();
                    $('#hide_block').hide();
                    $('#hide_sub_block').hide();

                }
            }
        });
    });
    // phase Code End

    // Block Code Start
    $('#phase').change(function(e) {
        e.preventDefault();
        var id = $('#phase').val();
        $.ajax({
            type: "GET",
            url: "{{ asset('block_data') }}" + '/' + id,
            success: function(response) {
                $('#block').empty();

                $('#block').append('<option value="">-- Please select --</option>');
                $('#sub_block').empty();
                $('#sub_block').append('<option value="">-- Please select --</option>');
                if (response != 'no data') {

                    $('#hide_block').show();
                    response.forEach(block => {
                        $('#block').append('<option value=' + block.id + '>' +
                            block
                            .block_name + '</option>');
                    });
                } else {
                    $('#hide_block').hide();
                    $('#hide_sub_block').hide();
                }
            }
        });
    });
    // Block Code End

    // Sub-Block Code Start
    $('#block').change(function(e) {
        e.preventDefault();
        var id = $('#block').val();
        $.ajax({
            type: "GET",
            url: "{{ asset('sub_block_data') }}" + '/' + id,
            success: function(response) {
                $('#sub_block').empty();
                $('#sub_block').append('<option value="">-- Please select --</option>');
                if (response != 'no data') {
                    $('#hide_sub_block').show();
                    $('#hide_sub_sub_block').show();
                    response.forEach(sub_block => {
                        $('#sub_block').append('<option value=' + sub_block.id +
                            '>' +
                            sub_block
                            .sub_block_name + '</option>');
                    });
                } else {
                    $('#hide_sub_block').hide();
                }
            }
        });
    });
    // Sub-Block Code End
});
</script>
@endpush