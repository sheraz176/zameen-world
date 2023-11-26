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


@endpush

@section('content')
<div class="body-wrapper">
  <!-- navbarsection -->
  <header class="extend-header">
       <!-- navbar-section -->
    @include('frontend.partials.searchnav')



    <div class="filter-section">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 col-lg-12 col-xl-4">
            <div class="serach-box-container">
              <form  action="{{ route('searchroute')}}" method="post">
                @csrf
              <div class="input-group flex-nowrap justify-content-center">
                <input id="form-tags-4" name="title" type="text" required/>
                <button type="submit" class="serch-btn"><i class="fa fa-search"></i></button>
              </div>
            </form>
            </div>
          </div>
          <div class="col-12 col-lg-12 col-xl-8 ps-1 pe-1  mt-3 mt-xl-0">
            <div>
              <ul
                class="d-flex flex-row justify-content-between list-unstyled flex-lg-nowrap flex-wrap gap-2 gap-lg-0">
                <li>
                  <div class="position-relative">
                    <div class="select-wrapper position-relative" data-id="1">
                      <span>Property Status</span>
                    </div>
                    <div class="select-dropdown show-drop-id-1">
                      <ul class="list-unstyled d-flex flex-column gap-3">
                        <li>
                          <label class="form-check-label d-flex flex-row gap-2 align-items-center"> <input
                              class="form-check-input mt-0" type="radio" name="flexRadioDefault"
                              id="flexRadioDefault1"> <span>Active</span></label>
                        </li>
                        <li>
                          <label class="form-check-label d-flex flex-row gap-2 align-items-center"> <input
                              class="form-check-input mt-0" type="radio" name="flexRadioDefault"
                              id="flexRadioDefault1"> <span>Closed</span></label>
                        </li>
                        <li>
                          <label class="form-check-label d-flex flex-row gap-2 align-items-center"> <input
                              class="form-check-input mt-0" type="radio" name="flexRadioDefault"
                              id="flexRadioDefault1"> <span>Pending</span></label>
                        </li>
                        <li>
                          <label class="form-check-label d-flex flex-row gap-2 align-items-center">
                            <div><input class="form-check-input mt-0" type="radio" name="flexRadioDefault"
                                id="flexRadioDefault1"></div> <span>Active under-
                              contract</span>
                          </label>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="position-relative">
                    <div class="select-wrapper position-relative" data-id="2">
                      <span>Price</span>
                    </div>
                    <div class="select-dropdown show-drop-id-2">
                      <ul class="list-unstyled d-flex flex-column gap-2 dropdown-inputs">
                        <li><input type="text" placeholder="Enter min" class="w-100"></li>
                        <li><input type="text" placeholder="Enter max" class="w-100"></li>
                        <li><button class="btn-contain-normal w-100 mt-3">Done</button></li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="position-relative">
                    <div class="select-wrapper position-relative" data-id="3">
                      <span>Beds & Bath</span>
                    </div>
                    <div class="select-dropdown show-drop-id-3">
                      <ul class="list-unstyled d-flex flex-column gap-2 dropdown-inputs">
                        <li>
                          <div class="d-flex flex-column gap-2">
                            <span class="filters-sub-head d-block py-2">Beds</span>
                            <select class="form-select filter-select" aria-label="Default select example">
                              <option selected>No Min</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                            </select>
                            <select class="form-select filter-select" aria-label="Default select example">
                              <option selected>No Max</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                            </select>
                          </div>
                        </li>
                        <li>
                          <div class="d-flex flex-column gap-2">
                            <span class="filters-sub-head d-block py-2">Beds</span>
                            <select class="form-select filter-select" aria-label="Default select example">
                              <option selected>No Min</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                            </select>
                            <select class="form-select filter-select" aria-label="Default select example">
                              <option selected>Baths</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                            </select>
                          </div>
                        </li>
                        <li><button class="btn-contain-normal w-100 mt-3">Done</button></li>
                      </ul>
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
                        <li>
                          <label class="form-check-label d-flex flex-row gap-2 align-items-center"> <input
                              class="form-check-input mt-0" type="radio" name="flexRadioDefault"
                              id="flexRadioDefault1"> <span>Houses</span></label>
                        </li>
                        <li>
                          <label class="form-check-label d-flex flex-row gap-2 align-items-center"> <input
                              class="form-check-input mt-0" type="radio" name="flexRadioDefault"
                              id="flexRadioDefault1"> <span>Townhomes</span></label>
                        </li>
                        <li>
                          <label class="form-check-label d-flex flex-row gap-2 align-items-center"> <input
                              class="form-check-input mt-0" type="radio" name="flexRadioDefault"
                              id="flexRadioDefault1"> <span>Multi-Family</span></label>
                        </li>
                        <li>
                          <label class="form-check-label d-flex flex-row gap-2 align-items-center">
                            <div><input class="form-check-input mt-0" type="radio" name="flexRadioDefault"
                                id="flexRadioDefault1"></div> <span>Condos</span>
                          </label>
                        </li>
                        <li>
                          <label class="form-check-label d-flex flex-row gap-2 align-items-center">
                            <div><input class="form-check-input mt-0" type="radio" name="flexRadioDefault"
                                id="flexRadioDefault1"></div> <span>Lots/Lands</span>
                          </label>
                        </li>
                        <li>
                          <label class="form-check-label d-flex flex-row gap-2 align-items-center">
                            <div><input class="form-check-input mt-0" type="radio" name="flexRadioDefault"
                                id="flexRadioDefault1"></div> <span>Appartments</span>
                          </label>
                        </li>
                        <li>
                          <label class="form-check-label d-flex flex-row gap-2 align-items-center">
                            <div><input class="form-check-input mt-0" type="radio" name="flexRadioDefault"
                                id="flexRadioDefault1"></div> <span>Manufactured</span>
                          </label>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="position-relative">
                    <div class="select-wrapper position-relative" data-id="5">
                      <span>Price</span>
                    </div>
                    <div class="select-dropdown show-drop-id-5">
                      <ul class="list-unstyled d-flex flex-column gap-2 dropdown-inputs">
                        <li>
                          <p class="filters-main-heading">More Filters</p>
                        </li>
                        <li>
                          <label class="filters-sub-head d-block py-2">City: </label>
                          <input type="text" placeholder="Enter your city name here" class="w-100">
                        </li>
                        <li>
                          <label class="filters-sub-head d-block py-2">Country:</label>
                          <input type="text" placeholder="Enter your country name here " class="w-100">
                        </li>
                        <li>
                          <label class="filters-sub-head d-block py-2">Neighborhood/Subdivision</label>
                          <input type="text" placeholder="Neighborhood/Subdivision  " class="w-100">
                        </li>
                        <li>
                          <button class="btn-contain-normal w-100 mt-3">Save Search</button>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li>
                  <button class="save-search" data-bs-toggle="modal" data-bs-target="#exampleModal">Search</button>
                </li>
              </ul>
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
               if ($data->superhot=='1') {
                array_push($datas,$data);
               }
             }
             foreach ($slicedData as $key => $data) {
               if ($data->hot=='1') {
                array_push($datas,$data);
               }
             }
             foreach ($slicedData as $key => $data) {
               if ($data->featured=='1') {
                array_push($datas,$data);
               }
             }
             foreach ($slicedData as $key => $data) {
               if ($data->featured=='0' AND $data->hot=='0' AND $data->superhot=='0') {
                array_push($datas,$data);
               }
             }

        @endphp
      
            <div class="row">
              @foreach ($datas as $property)
                {{-- Display Super Hot --}}
                @if ($property->superhot=='1')
                @include('pages.properties.partials.superhot')
                @endif
                {{-- Display  Hot --}}
            @if ($property->hot=='1')
            @include('pages.properties.partials.hot')
            @endif
             {{-- Display  Featured --}}
            @if ($property->featured=='1')
            @include('pages.properties.partials.featured')
              @endif
              {{-- Display  Normal --}}
              @if ($property->featured=='0' AND $property->hot=='0' AND $property->superhot=='0' )
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
integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
crossorigin="anonymous"></script>

@include('frontend.partials.modelsjs') 
<script>
$(function () {
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
$(".select-wrapper").click(function () {
  $(this).toggleClass("vector")
 
  console.log($(this).data("id"));
  $(".show-drop-id-" + $(this).data("id")).toggleClass("active-select");
});
</script>


@endpush
