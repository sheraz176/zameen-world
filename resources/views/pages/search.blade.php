@extends('frontend.layouts.searchapps')

@push('styles')
    <!-- CustomCss Links -->
    <link href="{{ asset('zameen/assets/css/style.css ') }}" rel="stylesheet">
    <!-- bootstrapCss Links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Google Fonts   -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,500;0,700;1,200;1,500;1,700&family=Poppins:wght@100&display=swap"
        rel="stylesheet">
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/de615a762d.js" crossorigin="anonymous"></script>
    <!-- tags input -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
        integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="{{ asset('zameen/assets/js/jquery.tagsinput-revisited.min.js ') }}"></script>
    <link rel="stylesheet" href="{{ asset('zameen/assets/css/jquery.tagsinput-revisited.min.css') }}" />
    @include('pages.properties.partials.style');
@endpush

@section('content')
    <div class="body-wrapper">
        <!-- navbarsection -->
 <header class="extend-header">
            <!-- navbar-section -->
        @include('frontend.partials.searchnav')
            
            <div class="filter-section">
                <div class="container-fluid">
                    {{-- main div --}}
                    <div class="row">
                        <div class="col-12 col-lg-12 col-xl-4">
                                            <div class="serach-box-container">
                                                <form action="{{ route('searchroute') }}" method="post">
                                                    @csrf
                                                    <div class="input-group flex-nowrap justify-content-center">
                                                        <input class="form-control" placeholder="Property Title" name="title"
                                                            type="text" required />
                                                        <button type="submit" class="serch-btn"><i class="fa fa-search"></i></button>
                                                    </div>
                                                </form>
                                            </div>
                        </div>
                         <div class="col-12 col-lg-12 col-xl-8 ps-1 pe-1  mt-3 mt-xl-0">
                                            <div>
                                                <ul
                                                    class="d-flex flex-row justify-content-between list-unstyled flex-lg-nowrap flex-wrap gap-2 gap-lg-0">
                                                    <form action="{{ route('searchroute') }}" method="post">
                                                        @csrf
                                                        <li>
                                                            <div class="position-relative">
                                                                <div class="select-wrapper position-relative" data-id="1">
                                                                    <span>Property Type</span>
                                                                </div>
                                                                <div class="select-dropdown show-drop-id-1">
                                                                    <ul class="list-unstyled d-flex flex-column gap-3">
                                                                        <li>
                                                                            <label
                                                                                class="form-check-label d-flex flex-row gap-2 align-items-center">
                                                                                <input class="form-check-input mt-0" type="radio"
                                                                                    value="Selling" name="type" id="Selling">
                                                                                <span>Selling</span></label>
                                                                        </li>
                                                                        <li>
                                                                            <label
                                                                                class="form-check-label d-flex flex-row gap-2 align-items-center">
                                                                                <input class="form-check-input mt-0" type="radio"
                                                                                    name="type" id="Renting" value="Renting">
                                                                                <span>Renting</span></label>
                                                                        </li>
                                                                        <li>
                                                                            <label
                                                                                class="form-check-label d-flex flex-row gap-2 align-items-center">
                                                                                <input class="form-check-input mt-0" type="radio"
                                                                                    name="type" id="Wanted" value="Wanted">
                                                                                <span>Wanted</span></label>
                                                                        </li>
                                                                        <li>
                                                                            <label
                                                                                class="form-check-label d-flex flex-row gap-2 align-items-center">
                                                                                <div><input class="form-check-input mt-0" type="radio"
                                                                                        name="type" id="Rented" value="Rented"></div>
                                                                                <span>Rented</span>
                                                                            </label>
                                                                        </li>
                                                                        <li><button type="submit"
                                                                                class="btn-contain-normal w-100 mt-3">Search</button></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </form>
                                                    <li>
                                                        <div class="position-relative">
                                                            <div class="select-wrapper position-relative" data-id="2">
                                                                <span>Area Unit & Price</span>
                                                            </div>
                
                
                                                            <div class="select-dropdown show-drop-id-2">
                                                                <form action="{{ route('searchroute') }}" method="post">
                                                                    @csrf
                                                                    <span class="filters-sub-head d-block py-2">Price</span>
                                                                    <ul class="list-unstyled d-flex flex-column gap-1 dropdown-inputs">
                                                                        <li><input type="number" name="minprice"
                                                                                placeholder="Enter min Price" class="w-100"></li>
                                                                        <li><input type="number" name="maxprice"
                                                                                placeholder="Enter max Price" class="w-100"></li>
                                                                        <li><button type="submit"
                                                                                class="btn-contain-normal w-100 mt-3">Done</button></li>
                                                                    </ul>
                                                                </form>
                                                                <form action="{{ route('searchroute') }}" method="post">
                                                                    @csrf
                                                                    <span class="filters-sub-head d-block py-2">Area Unit</span>
                                                                    <ul class="list-unstyled d-flex flex-column gap-1 dropdown-inputs">
                                                                        <li>
                                                                            <select name="unit" class="form-select filter-select">
                                                                                <option value="">-- Please select --</option>
                                                                                <option value="SqFeet">Square Feet</option>
                                                                                <option value="SqYards">Square Yards</option>
                                                                                <option value="Marla">Marla</option>
                                                                                <option value="Kanal">Kanal</option>
                                                                                <option value="Acre">Acre</option>
                
                                                                            </select>
                                                                        </li>
                                                                        <li><input type="number" name="minarea"
                                                                                placeholder="Enter min Area" class="w-100"></li>
                                                                        <li><input type="number" name="maxarea"
                                                                                placeholder="Enter max Area" class="w-100"></li>
                                                                        <li><button type="submit"
                                                                                class="btn-contain-normal w-100 mt-3">Done</button></li>
                                                                    </ul>
                                                                </form>
                                                            </div>
                
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="position-relative">
                                                            <div class="select-wrapper position-relative" data-id="3">
                                                                <span>Beds & Bath</span>
                                                            </div>
                                                            <div class="select-dropdown show-drop-id-3">
                                                                <form action="{{ route('searchroute') }}" method="post">
                                                                    @csrf
                                                                    <ul class="list-unstyled d-flex flex-column gap-2 dropdown-inputs">
                                                                        <li>
                                                                            <div class="d-flex flex-column gap-2">
                                                                                <span class="filters-sub-head d-block py-2">Bath</span>
                                                                                <input type="number" name="bathroom"
                                                                                    placeholder="Enter Beds" class="w-100">
                
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="d-flex flex-column gap-2">
                                                                                <span class="filters-sub-head d-block py-2">Beds</span>
                                                                                <input type="number" name="bedroom"
                                                                                    placeholder="Enter Beds" class="w-100">
                
                                                                            </div>
                                                                        </li>
                                                                        <li><button class="btn-contain-normal w-100 mt-3">Done</button>
                                                                        </li>
                                                                    </ul>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </li>
                
                                                    <li>
                                                        <div class="position-relative">
                                                            <div class="select-wrapper position-relative" data-id="4">
                                                                <span>Home Type</span>
                                                            </div>
                                                            <div class="select-dropdown show-drop-id-4">
                                                                <ul class="list-unstyled d-flex flex-column gap-3">
                                                                    <form action="{{ route('searchroute') }}" method="post">
                                                                        @csrf
                                                                        <li>
                                                                            <div class="d-flex flex-column gap-2">
                                                                                <span class="filters-sub-head d-block py-2">Homes</span>
                                                                                <select name="purpose" class="form-select filter-select">
                                                                                    <option value="">-- Please select --</option>
                                                                                    <option value="Room">Room</option>
                                                                                    <option value="House">House </option>
                                                                                    <option value="FarmHouse">Farm House</option>
                                                                                    <option value="LowerPortion">Lower Portion
                                                                                    </option>
                                                                                    <option value="UpperPortion">UpperPortion
                                                                                    </option>
                                                                                    <option value="Flat">Flat
                                                                                    </option>
                
                                                                                </select>
                
                                                                            </div>
                                                                            <button type="submit"
                                                                                class="btn-contain-normal w-100 mt-3"><i
                                                                                    class="fa fa-search"></i></button>
                                                                        </li>
                                                                    </form>
                                                                    <form action="{{ route('searchroute') }}" method="post">
                                                                        @csrf
                                                                        <li>
                                                                            <div class="d-flex flex-column gap-2">
                                                                                <span class="filters-sub-head d-block py-2">Plots</span>
                                                                                <select name="purpose" class="form-select filter-select"
                                                                                    aria-label="Default select example">
                                                                                    <option value="">-- Please select --</option>
                                                                                    <option value="PlotForm">Plot Form
                                                                                    </option>
                                                                                    <option value="PlotFile">Plot File
                                                                                    </option>
                                                                                    <option value="IndustrialLand">IndustrialLand
                                                                                    </option>
                                                                                    <option value="AgriculturalLand">Agricultural Land
                                                                                    </option>
                                                                                    <option value="CommercialPlot">Commercial Plot
                                                                                    </option>
                                                                                    <option value="ResidentialPlot">Residential Plot
                                                                                    </option>
                
                                                                                </select>
                
                                                                            </div>
                                                                            <button type="submit"
                                                                                class="btn-contain-normal w-100 mt-3"><i
                                                                                    class="fa fa-search"></i></button>
                
                                                                        </li>
                                                                    </form>
                                                                    <form action="{{ route('searchroute') }}" method="post">
                                                                        @csrf
                                                                        <li>
                                                                            <div class="d-flex flex-column gap-2">
                                                                                <span
                                                                                    class="filters-sub-head d-block py-2">Commercial</span>
                                                                                <select name="purpose" class="form-select filter-select"
                                                                                    aria-label="Default select example">
                                                                                    <option value="">-- Please select --</option>
                                                                                    <option value="Commercialproperty">Commercial property
                                                                                    </option>
                                                                                    <option value="Land">Land
                                                                                    </option>
                                                                                    <option value="Condo">Condo
                                                                                    </option>
                                                                                    <option value="Villa">Villa
                                                                                    </option>
                                                                                    <option value="Apartment">Apartment
                                                                                    </option>
                                                                                    <option value="Penthouse">Penthouse
                                                                                    </option>
                                                                                    <option value="Office">Office
                                                                                    </option>
                                                                                    <option value="Shop">Shop
                                                                                    </option>
                                                                                    <option value="Warehouse">Warehouse
                                                                                    </option>
                                                                                    <option value="Factory">Factory
                                                                                    </option>
                                                                                    <option value="Building">Building
                                                                                    </option>
                                                                                    <option value="Banglow">Banglow
                                                                                    </option>
                                                                                    <option value="Miscellaneous">Miscellaneous
                                                                                    </option>
                                                                                    <option value="Other">Other
                                                                                    </option>
                                                                                </select>
                
                                                                            </div>
                                                                            <button type="submit"
                                                                                class="btn-contain-normal w-100 mt-3"><i
                                                                                    class="fa fa-search"></i></button>
                
                                                                        </li>
                
                                                                    </form>
                
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                
                                                    <li>
                                                        <div class="position-relative">
                                                            <div class="select-wrapper position-relative" data-id="5">
                                                                <span>More Filters</span>
                                                            </div>
                                                            <div class="select-dropdown show-drop-id-5">
                                                                <form action="{{ route('searchroute') }}" method="post">
                                                                    @csrf
                                                                    <ul class="list-unstyled d-flex flex-column gap-2 dropdown-inputs">
                                                                        <li>
                                                                            <label class="filters-sub-head d-block py-2">Property ID:
                                                                            </label>
                                                                            <input type="text" name="random_id"
                                                                                placeholder="Enter Property ID" class="w-100">
                
                                                                        </li>
                                                                        <li>
                                                                            <label class="filters-sub-head d-block py-2">State: </label>
                                                                            <input type="text" placeholder="Enter your city name here"
                                                                                class="w-100">
                                                                        </li>
                                                                        <li>
                                                                            <label class="filters-sub-head d-block py-2">City:</label>
                                                                            <input type="text"
                                                                                placeholder="Enter your country name here "
                                                                                class="w-100">
                                                                        </li>
                                                                        <li>
                                                                            <label class="filters-sub-head d-block py-2">Phases:</label>
                                                                            <input type="text"
                                                                                placeholder="Enter your country name here "
                                                                                class="w-100">
                                                                        </li>
                                                                        <li>
                                                                            <button type="submit"
                                                                                class="btn-contain-normal w-100 mt-3">Search</button>
                                                                        </li>
                                                                    </ul>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('search') }}"><button class="save-search">Reset</button></a>
                                                    </li>
                                                </ul>
                                            </div>
                         </div>              
                      </div>
                   </div>
                   {{-- nex div --}}
                   <form action="{{ route('searchroute') }}" method="post">
                    @csrf
                   <div class="row">
                    <div class="col-12 col-lg-12 col-xl-3">
                        <div class="form-group form-float ">
                            <div class="form-line">
                                <label>Select State</label>
                                <select name="state" id="state"
                                    class="form-control show-tick {{ $errors->has('state') ? 'focused error' : '' }}"
                                    required />
                                <option value="">-- Please select --</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-12 col-xl-3">
                        <div class="form-group form-float "id="hide_city">
                            <div class="form-line">
                                <label>Select City <span style="color: red;">*</span></label>
                                <select name="city_id" id="city"
                                    class="form-control show-tick {{ $errors->has('city') ? 'focused error' : '' }}"
                                    required />
                                <option value="">-- Please select --</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-12 col-xl-3">
                        <div class="form-group form-float"id="hide_socity">
                            <div class="form-line">
                                <label>Select Socity</label>
                                <select name="socity" id="socity"
                                    class="form-control validate show-tick {{ $errors->has('socity') ? 'focused error' : '' }}">
                                    <option value="">-- Please select --</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-12 col-xl-3">
                        <div class="form-group form-float "id="hide_phase">
                            <div class="form-line">
                                <label>Select Phase</label>
                                <select name="phase" id="phase"
                                    class="form-control show-tick {{ $errors->has('phase') ? 'focused error' : '' }}">
                                    <option value="">-- Please select --</option>
                                </select>
                            </div>
                        </div>
                
                    </div>
                
                   </div>
                   <button type="submit" class="serch-btn"><i class="fa fa-search"></i></button>
                   </form>
                   {{-- third div --}}
                   <div class="row">
                    <div class="col-12 col-lg-12 col-xl-4">
                        <div class="form-group form-float" id="hide_block">
                            <div class="form-line">
                                <label>Select Block</label>
                                <select name="block" id="block"
                                    class="form-control show-tick {{ $errors->has('block') ? 'focused error' : '' }}">
                                    <option value="">-- Please select --</option>
                                </select>
                            </div>
                        </div>
                
                        <div class="col-12 col-lg-12 col-xl-4">
                            <div class="form-group form-float" id="hide_sub_block">
                                <div class="form-line">
                                    <label>Select Sub-Block</label>
                                    <select name="sub_block" id="sub_block"
                                        class="form-control show-tick {{ $errors->has('sub_block') ? 'focused error' : '' }}">
                                        <option value="">-- Please select --</option>
                                    </select>
                                </div>
                            </div>
                
                        </div>
                
                    </div>
                   </div>


            </div>

 </header>


    <section class="map-cards-section">
        <div class="container-fluid pt-3">
            <div class="row">

                <div class="col-md-12 col-lg-10 ps-0 pe-0 pe-lg-2">
                    <div class="cards-right-wraaper ps-2">

                        <p class="sub-heading mb-1">Best matches</p>
                        @php
                            $datas = [];
                            foreach ($slicedData as $key => $data) {
                                if ($data->superhot == '1') {
                                    array_push($datas, $data);
                                }
                            }
                            foreach ($slicedData as $key => $data) {
                                if ($data->hot == '1') {
                                    array_push($datas, $data);
                                }
                            }
                            foreach ($slicedData as $key => $data) {
                                if ($data->featured == '1') {
                                    array_push($datas, $data);
                                }
                            }
                            foreach ($slicedData as $key => $data) {
                                if ($data->featured == '0' and $data->hot == '0' and $data->superhot == '0') {
                                    array_push($datas, $data);
                                }
                            }

                        @endphp

                        <div class="row">
                            @foreach ($datas as $property)
                                {{-- Display Super Hot --}}
                                @if ($property->superhot == '1')
                                    @include('pages.properties.partials.superhot')
                                @endif
                                {{-- Display  Hot --}}
                                @if ($property->hot == '1')
                                    @include('pages.properties.partials.hot')
                                @endif
                                {{-- Display  Featured --}}
                                @if ($property->featured == '1')
                                    @include('pages.properties.partials.featured')
                                @endif
                                {{-- Display  Normal --}}
                                @if ($property->featured == '0' and $property->hot == '0' and $property->superhot == '0')
                                    @include('pages.properties.partials.normal')
                                @endif
                            @endforeach

                        </div>


                        <div class="d-flex flex-row justify-content-between px-3 pb-3">
                            {{-- <a href="#" class="btn-next">Previous</a>
              <a href="#" class="btn-pre">Next</a> --}}
                            {{ $slicedData->links() }}
                        </div>
                        <!-- footer-section -->
                        @include('frontend.partials.searchfooter')
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>

    @include('frontend.partials.models')
@endsection

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
