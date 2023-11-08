@extends('backend.layouts.app')

@section('title', 'Create Property')

@push('styles')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('backend/plugins/bootstrap-select/css/bootstrap-select.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.5/css/fileinput.min.css" media="all"
        rel="stylesheet" type="text/css" />
@endpush


@section('content')


    <div class="block-header"></div>

    <div class="row clearfix">
        <form action="{{ route('admin.properties.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="col-lg-8 col-md-4 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header bg-indigo">
                        <h2>CREATE PROPERTY</h2>
                    </div>
                    <div class="body">

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="title" class="form-control" value="{{ old('title') }}">
                                <label class="form-label">Property Title</label>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="number" class="form-control" name="price" required>
                                <label class="form-label">Price</label>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="number" class="form-control" name="bedroom" required>
                                <label class="form-label">Bedroom</label>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="number" class="form-control" name="bathroom" required>
                                <label class="form-label">Bathroom</label>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="city" required>
                                <label class="form-label">City</label>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="address" required>
                                <label class="form-label">Address</label>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="number" class="form-control" name="area" required>
                                <label class="form-label">Area</label>
                            </div>
                            <div class="help-info">Square Feet</div>
                        </div>
                        <div class="form-group form-float ">
                            <div class="form-line">
                                <label>Select State</label>
                                <select name="state" id="state"
                                    class="form-control show-tick {{ $errors->has('state') ? 'focused error' : '' }}">
                                    <option value="">-- Please select --</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group form-float "id="hide_city">
                            <div class="form-line">
                                <label>Select City</label>
                                <select name="city_id" id="city"
                                    class="form-control show-tick {{ $errors->has('city') ? 'focused error' : '' }}">
                                    <option value="">-- Please select --</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group form-float"id="hide_socity">
                            <div class="form-line">
                                <label>Select Socity</label>
                                <select name="socity" id="socity"
                                    class="form-control show-tick {{ $errors->has('socity') ? 'focused error' : '' }}">
                                    <option value="">-- Please select --</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group form-float "id="hide_phase">
                            <div class="form-line">
                                <label>Select Phase</label>
                                <select name="phase" id="phase"
                                    class="form-control show-tick {{ $errors->has('phase') ? 'focused error' : '' }}">
                                    <option value="">-- Please select --</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group form-float" id="hide_block">
                            <div class="form-line">
                                <label>Select Block</label>
                                <select name="block" id="block"
                                    class="form-control show-tick {{ $errors->has('block') ? 'focused error' : '' }}">
                                    <option value="">-- Please select --</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group form-float" id="hide_sub_block">
                            <div class="form-line">
                                <label>Select Sub-Block</label>
                                <select name="sub_block" id="sub_block"
                                    class="form-control show-tick {{ $errors->has('sub_block') ? 'focused error' : '' }}">
                                    <option value="">-- Please select --</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="checkbox" id="featured" name="featured" class="filled-in" value="1" />
                            <label for="featured">Featured</label>
                        </div>

                        <hr>
                        <div class="form-group">
                            <label for="tinymceone">Description</label>
                            <textarea name="description" id="tinymceone">{{ old('description') }}</textarea>
                        </div>

                        <hr>
                        <div class="form-group">
                            <label for="tinymce-nearby">Nearby</label>
                            <textarea name="nearby" id="tinymce-nearby">{{ old('nearby') }}</textarea>
                        </div>

                    </div>
                </div>
                <div class="card">
                    <div class="header">
                        <h2>GALLERY IMAGE</h2>
                    </div>
                    <div class="body">
                        <input id="input-id" type="file" name="gallaryimage[]" class="file"
                            data-preview-file-type="text" multiple>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header bg-indigo">
                        <h2>SELECT</h2>
                    </div>
                    <div class="body">

                        <div class="form-group form-float">
                            <div class="form-line {{ $errors->has('purpose') ? 'focused error' : '' }}">
                                <label>Select Purpose</label>
                                <select name="purpose" class="form-control show-tick">
                                    <option value="">-- Please select --</option>
                                    <option value="sale">Sale</option>
                                    <option value="rent">Rent</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line {{ $errors->has('type') ? 'focused error' : '' }}">
                                <label>Select type</label>
                                <select name="type" class="form-control show-tick">
                                    <option value="">-- Please select --</option>
                                    <option value="house">House</option>
                                    <option value="apartment">Apartment</option>
                                </select>
                            </div>
                        </div>

                        <h5>Features</h5>
                        <div class="form-group demo-checkbox">
                            @foreach ($features as $feature)
                                <input type="checkbox" id="features-{{ $feature->id }}" name="features[]"
                                    class="filled-in chk-col-indigo" value="{{ $feature->id }}" />
                                <label for="features-{{ $feature->id }}">{{ $feature->name }}</label>
                            @endforeach
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="video">
                                <label class="form-label">Video</label>
                            </div>
                            <div class="help-info">Youtube Link</div>
                        </div>

                        <div class="clearfix">
                            <h5>Google Map</h5>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="location_latitude" class="form-control" required />
                                    <label class="form-label">Latitude</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="location_longitude" class="form-control" required />
                                    <label class="form-label">Longitude</label>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card">
                    <div class="header bg-indigo">
                        <h2>FLOOR PLAN</h2>
                    </div>
                    <div class="body">
                        <div class="form-group">
                            <input type="file" name="floor_plan">
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="header bg-indigo">
                        <h2>FEATURED IMAGE</h2>
                    </div>
                    <div class="body">
                        <div class="form-group">
                            <input type="file" name="image">
                        </div>

                        {{-- BUTTON --}}
                        <a href="{{ route('admin.properties.index') }}"
                            class="btn btn-danger btn-lg m-t-15 waves-effect">
                            <i class="material-icons left">arrow_back</i>
                            <span>BACK</span>
                        </a>

                        <button type="submit" class="btn btn-indigo btn-lg m-t-15 waves-effect">
                            <i class="material-icons">save</i>
                            <span>SAVE</span>
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection


@push('scripts')

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.5/js/fileinput.min.js"></script>

<script src="{{ asset('backend/plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    



    <script src="{{ asset('backend/plugins/tinymce/tinymce.js') }}"></script>
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
                    url: '{{ asset('state_data') }}',
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
                    url: "{{asset('city_data')}}" + '/'+id,
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
                    url: "{{asset('socity_data')}}" +'/'+id,
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
                    url: "{{asset('phase_data')}}" +'/'+id,
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
                    url: "{{asset('block_data')}}" + '/'+id,
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
                    url: "{{asset('sub_block_data')}}" +'/'+id,
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
        $(function() {
            $("#input-id").fileinput();
        });

        $(function() {
            tinymce.init({
                selector: "textarea#tinymceone",
                theme: "modern",
                height: 300,
                plugins: [
                    'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                    'searchreplace wordcount visualblocks visualchars code fullscreen',
                    'insertdatetime media nonbreaking save table contextmenu directionality',
                    'emoticons template paste textcolor colorpicker textpattern imagetools'
                ],
                toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
                toolbar2: 'print preview media | forecolor backcolor emoticons',
                image_advtab: true
            });
            tinymce.suffix = ".min";
            tinyMCE.baseURL = '{{ asset('backend/plugins/tinymce') }}';
        });

        $(function() {
            tinymce.init({
                selector: "textarea#tinymce-nearby",
                theme: "modern",
                height: 300,
                plugins: [
                    'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                    'searchreplace wordcount visualblocks visualchars code fullscreen',
                    'insertdatetime media nonbreaking save table contextmenu directionality',
                    'emoticons template paste textcolor colorpicker textpattern imagetools'
                ],
                toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
                toolbar2: '',
                image_advtab: true
            });
            tinymce.suffix = ".min";
            tinyMCE.baseURL = '{{ asset('backend/plugins/tinymce') }}';
        });
    </script>
@endpush
