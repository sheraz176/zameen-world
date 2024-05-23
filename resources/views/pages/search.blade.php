<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>zameen.world</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="zameen/assets/css/style.css" />
  <link rel="stylesheet" href="zameen/assets/css/navbar.css" />
  
</head>

<body>
  <!-- navbar -->
  @include('frontend.partials.navbar_new')
  <!-- filters-section -->
  
<section class="filters-bg mb-3">
    <div class="wrapper-for-all">
        <div class="custom-container">
            <div class="row d-md-flex d-none">
                <div class="col-6 col-md-6 col-lg-2 mb-2">
                    <div class="d-flex flex-column fliters-min-wrapper roll-wrapper position-relative">
                        <label class="filters-label">select state</label>
                        <div class="rol-btn">
                            <span>Punjab</span>
                            <span class="custom-arrow"></span>
                        </div>
                        <div class="roll-dropdown custom-radio-btns active">
                            <ul class="list-unstyled p-0 m-0 d-flex flex-column gap-2">
                                <select name="state" id="state"
                                    class="form-control show-tick {{ $errors->has('state') ? 'focused error' : '' }}"
                                    required />

                                <input type="radio" class="btn-check" name="purpose" id="roll-buy" autocomplete="off">

                                </li>
                            </ul>
                            <div class="d-flex justify-content-end">
                                <button class="close-roll-dropdwon">
                                    close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-6 col-lg-2 mb-2">
                    <div class="d-flex flex-column fliters-min-wrapper roll-wrapper position-relative">

                        <label class="filters-label">City</label>
                        <div class="rol-btn">
                            <span>Lahore</span>
                            <span class="custom-arrow"></span>
                        </div>
                        <div class="roll-dropdown custom-radio-btns active">

                            <select name="city_id" id="city"
                                class="form-control show-tick {{ $errors->has('city') ? 'focused error' : '' }}"
                                required />
                            <ul class="list-unstyled p-0 m-0 d-flex flex-column gap-2 roll-list">

                                <li>
                                    <input type="radio" class="btn-check" name="city" id="roll-Islamabad"
                                        autocomplete="off">
</li>
                            </ul>
                            <div class="d-flex justify-content-end">
                                <button class="close-roll-dropdwon">
                                    close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                 <!--Home type -->
          <div class="col-12 col-md-6 col-lg-2 mb-2">
            <div class="d-flex flex-column fliters-min-wrapper">
              <label class="filters-label">Location</label>
              <input type="text" name="" id="" class="filters-input w-100" />
            </div>
          </div>

          <!--property type -->

          <div class="col-12 col-md-6 col-lg-3 mb-lg-0 mb-2">
          <form action="{{ route('searchroute') }}" method="post">
                                                        @csrf
            <div class="d-flex flex-column fliters-min-wrapper position-relative">
      
                                                            <div class="position-relative">
                                                                <div class="select-wrapper position-relative" data-id="1">
                                                                <label class="filters-label">PROPERTY TYPE</label>
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
</div>
</div>
   <!--end property type -->

   <div class="col-12 col-md-6 col-lg-3 mb-lg-0 mb-2">
          <form action="{{ route('searchroute') }}" method="post">
                                                        @csrf
            <div class="d-flex flex-column fliters-min-wrapper position-relative">
      
            <div class="position-relative">
                                                            <div class="select-wrapper position-relative" data-id="4">
                                                            <label class="filters-label">Home Type</label>   
                                                           
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
                                                    </div>
                                                        </div>
</div>
        <div class="row hide-on-scroll d-md-flex d-none">
          <div class="col-12 col-md-6 col-lg-4 mb-lg-0 mb-2">
            <div class="d-flex flex-column fliters-min-wrapper roll-wrapper position-relative">
              <label class="filters-label">PRICE (PKR)</label>
              <form action="{{ route('searchroute') }}" method="post">
               @csrf
              <div class="rol-btn">
                <span>0</span>
                <span>Any</span>
                <span class="custom-arrow"></span>
              </div>
              <div class="roll-dropdown custom-radio-btns active">
                <div class="row">
                  <div class="col-12">
                    <span class="_35e12ee5" data-bs-toggle="modal" data-bs-target="#CurrencyModal">Change Currency
                      (PKR)</span>


                  </div>
                  <div class="col-6">
                    <p class="sm-text text-center">Min:</p>
                    <input type="number" class="form-control mb-2" placeholder="Enter min Price">
                    <ul class="list-unstyled p-0 m-0 d-flex flex-column gap-2 roll-list">
                      <li>
                        <input type="number" class="btn-check" name="minprice" id="price-0" autocomplete="off"  >
                        <button type="submit"  class="btn-contain-normal w-100 mt-3">Done</button>
                      </li>
                    </ul>
                  </div>
                  <div class="col-6">
                    <p class="sm-text text-center">Max:</p>
                    <input type="number" class="form-control mb-2" placeholder="Enter max Price" >
                    <ul class="list-unstyled p-0 m-0 d-flex flex-column gap-2 roll-list">
                      <li>
                        <input type="maxprice" class="btn-check" name="" id="price-any" autocomplete="off">
                        <button type="submit" class="btn-contain-normal w-100 mt-3">Done</button>
                      </li>

                    </ul>
                  </div>
                </div>

                <div class="d-flex justify-content-end">
                  <button class="close-roll-dropdwon">
                    close
                  </button>
</form>
                </div>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-6 col-lg-2 mb-2">
            <div class="d-flex flex-column fliters-min-wrapper roll-wrapper position-relative">
              
              <div class="position-relative">
                                                            <div class="select-wrapper position-relative" data-id="3">
                                                            <label class="filters-label">Beds & Bath</label>
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
</div>
</div>
<div class="col-6 col-md-6 col-lg-2 mb-2">
          <form action="{{ route('searchroute') }}" method="post">
                                                        @csrf
            <div class="d-flex flex-column fliters-min-wrapper position-relative">
      
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
                                                  
</div>
</div>
                                                        
                                                  

          <div class="col-12 col-md-6 col-lg-4 mb-2">
            <div class="d-flex flex-column fliters-min-wrapper">
              <label class="filters-label">KEYWORD</label>
              <input type="text" name="" id="" class="filters-input w-100">
            </div>
          </div>
        </div>
        <!-- mobile-filters -->
        <div class="row d-md-none d-flex">
          <div class="col-8">
            <ul class="nav nav-pills  mobile-filters-buy-rent" id="pills-tab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-mobilebuy-tab" data-bs-toggle="pill"
                  data-bs-target="#pills-mobilebuy" type="button" role="tab" aria-controls="pills-mobilebuy"
                  aria-selected="true">Buy</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-mobileRent-tab" data-bs-toggle="pill"
                  data-bs-target="#pills-mobileRent" type="button" role="tab" aria-controls="pills-mobileRent"
                  aria-selected="false">Rent</button>
              </li>
            </ul>

          </div>
          <div class="col-4">
            <button class="filters-open-btn d-flex align-items-center gap-2 justify-content-center" type="button"
              data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
              <svg xmlns="http://www.w3.org/2000/svg" class="_7ff33439" viewBox="0 0 32 32">
                <path fill="#fff"
                  d="M29.6 14.6h-3a5 5 0 0 0-4.8-3.6 5.2 5.2 0 0 0-5 3.6h-14c-1 0-1.5.6-1.5 1.3 0 .8.6 1.4 1.3 1.4H17a5.1 5.1 0 0 0 6.4 3.4 5.2 5.2 0 0 0 3.4-3.4h3c.7 0 1.3-.6 1.3-1.4 0-.6-.6-1.3-1.4-1.3zM2.5 6.4h3A5.1 5.1 0 0 0 12 9.8a5.2 5.2 0 0 0 3.4-3.4h14.2c.8 0 1.4-.6 1.4-1.4 0-.8-.6-1.4-1.4-1.4H15.3A5.1 5.1 0 0 0 9 .2a5.2 5.2 0 0 0-3.4 3.4h-3C1.7 3.6 1 4.2 1 5c0 .8.6 1.4 1.4 1.4-.1 0 0 0 0 0zm27.1 19.2H15.4A5.1 5.1 0 0 0 9 22.2a5.2 5.2 0 0 0-3.4 3.4h-3c-.8 0-1.4.6-1.4 1.4 0 .8.6 1.4 1.4 1.4h3.2a5.1 5.1 0 0 0 6.4 3.4 5.2 5.2 0 0 0 3.4-3.4h14.2c.8 0 1.4-.6 1.4-1.4-.2-.8-.8-1.4-1.6-1.4z">
                </path>
              </svg>
              <span>FILTERS</span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight"
              aria-labelledby="offcanvasRightLabel">
              <!-- //+ Filter Header -->
              <div class="offcanvas-header">
                <button type="button" class="btn text-reset" data-bs-dismiss="offcanvas" aria-label="Close">
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" class="filter-svg-left left"
                    viewBox="0 0 32 32">
                    <path
                      d="M7.55 3.36c-.8-.8-.7-2.1.1-2.8.8-.7 2-.7 2.7 0l14 14c.8.8.8 2 0 2.8l-14 14c-.8.8-2 .8-2.8.1-.8-.8-.8-2-.1-2.8l.1-.1 12.6-12.5-12.6-12.7z">
                    </path>
                  </svg>
                  <span class="filter-heading">
                    Filters

                  </span>
                </button>
                <span id="offcanvasRightLabel" class="done-text">Done</span>
              </div>
              <!-- //+ Filter Body -->

              <div class="offcanvas-body off-canvas-body">
                <!-- //* Row 1 -->
                <div class="filter-row">
                  <div class="left-wrapper">
                    <div class="icon-wrapper">
                      <img src="./assets/images/tick.svg" alt="tick">
                    </div>
                    <h5>I want to </h5>

                  </div>
                  <div class="right-wrapper">
                    <div class="switch-btn-wrapper">
                      <button type="button" class="btn buy-btn custom-btn">Buy</button>
                      <button type="button" class="btn rent-btn custom-btn">Rent</button>
                    </div>
                  </div>
                </div>

                <!-- //* Row 2 -->
                <div class="filter-row">
                  <div class="left-wrapper">
                    <div class="icon-wrapper">
                      <img src="./assets/images/location.svg" alt="location">
                    </div>
                    <div class="location-text-wrapper">
                      <h5>City</h5>
                      <p>Lahore</p>
                    </div>

                  </div>
                  <div class="right-wrapper">
                    <button class="btn right-arrow">
                      <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" class="filter-svg-right left"
                        viewBox="0 0 32 32">
                        <path
                          d="M7.55 3.36c-.8-.8-.7-2.1.1-2.8.8-.7 2-.7 2.7 0l14 14c.8.8.8 2 0 2.8l-14 14c-.8.8-2 .8-2.8.1-.8-.8-.8-2-.1-2.8l.1-.1 12.6-12.5-12.6-12.7z">
                        </path>
                      </svg>
                    </button>
                  </div>
                </div>

                <!-- //* Row 3 -->
                <div class="filter-row">
                  <div class="left-wrapper">
                    <div class="icon-wrapper">
                      <img src="./assets/images/map.svg" alt="location">

                    </div>
                    <h5>Select Location</h5>

                  </div>
                  <div class="right-wrapper">
                    <button class="btn right-arrow">
                      <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" class="filter-svg-right left"
                        viewBox="0 0 32 32">
                        <path
                          d="M7.55 3.36c-.8-.8-.7-2.1.1-2.8.8-.7 2-.7 2.7 0l14 14c.8.8.8 2 0 2.8l-14 14c-.8.8-2 .8-2.8.1-.8-.8-.8-2-.1-2.8l.1-.1 12.6-12.5-12.6-12.7z">
                        </path>
                      </svg>
                    </button>
                  </div>
                </div>

                <!-- //* 3.5 PAyment Type -->
                <div class="filter-row poperty">
                  <div class="left-wrapper property-box">
                    <div class="icon-wrapper">
                      <img src="./assets/images/building.svg" alt="location">
                    </div>
                    <h5>Payment Type</h5>

                  </div>
                  <div class="right-wrapper"></div>
                </div>

                <div class="payment-wrapper">
                  <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                    aria-labelledby="payment-home-tab" tabindex="0">
                    <div class="row custom-radio-btns">
                      <div class="col-12">
                        <ul class="d-flex flex-column gap-1 list-unstyled p-0 mb-0 horizontal-wrapper">
                          <li>
                            <input type="radio" class="btn-check" name="homes" id="House" autocomplete="off" />
                            <label class="btn btn-secondary" for="House">Any</label>
                          </li>
                          <li>
                            <input type="radio" class="btn-check" name="homes" id="Upper" autocomplete="off" />
                            <label class="btn btn-secondary" for="Upper">Cash</label>
                          </li>
                          <li>
                            <input type="radio" class="btn-check" name="homes" id="FarmHouse" autocomplete="off" />
                            <label class="btn btn-secondary" for="FarmHouse">Installements</label>
                          </li>

                        </ul>
                      </div>
                    </div>
                  </div>
                </div>


                <!-- //* Row 4 -->
                <div class="filter-row poperty">
                  <div class="left-wrapper property-box">
                    <div class="icon-wrapper">
                      <img src="./assets/images/building.svg" alt="location">
                    </div>
                    <h5>Property Type</h5>

                  </div>
                  <div class="right-wrapper"></div>
                </div>
                <div class="property-content-wrapper">
                  <div class="dropdown-data">
                    <ul class="nav nav-pills mb-1 zameen-pills d-flex flex-row justify-content-start gap-3"
                      id="pills-tab" role="tablist">
                      <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="property-home-tab" data-bs-toggle="pill"
                          data-bs-target="#property-home" type="button" role="tab" aria-controls="property-home"
                          aria-selected="true">
                          HOMES
                        </button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="property-PLOTS-tab" data-bs-toggle="pill"
                          data-bs-target="#property-PLOTS" type="button" role="tab" aria-controls="property-PLOTS"
                          aria-selected="false">
                          PLOTS
                        </button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="property-commercial-tab" data-bs-toggle="pill"
                          data-bs-target="#property-COMMERCIALL" type="button" role="tab"
                          aria-controls="property-COMMERCIALL" aria-selected="false">
                          COMMERCIAL
                        </button>
                      </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                      <div class="tab-pane fade show active" id="property-home" role="tabpanel"
                        aria-labelledby="property-home-tab" tabindex="0">
                        <div class="row custom-radio-btns">
                          <div class="col-12">
                            <ul class="d-flex flex-column gap-1 list-unstyled p-0 mb-0 horizontal-wrapper">
                              <li>
                                <input type="radio" class="btn-check" name="homes" id="all1" autocomplete="off" />
                                <label class="btn btn-secondary" for="all1">All</label>
                              </li>
                              <li>
                                <input type="radio" class="btn-check" name="homes" id="house1" autocomplete="off" />
                                <label class="btn btn-secondary" for="house1">House House</label>
                              </li>
                              <li>
                                <input type="radio" class="btn-check" name="homes" id="upper1" autocomplete="off" />
                                <label class="btn btn-secondary" for="upper1">Uper Portion</label>
                              </li>
                              <li>
                                <input type="radio" class="btn-check" name="homes" id="farm1" autocomplete="off" />
                                <label class="btn btn-secondary" for="farm1">Farm House</label>
                              </li>
                              <li>
                                <input type="radio" class="btn-check" name="homes" id="Penthouse1" autocomplete="off" />
                                <label class="btn btn-secondary" for="Penthouse1">Penthouse</label>
                              </li>
                              <li>
                                <input type="radio" class="btn-check" name="homes" id="lower1" autocomplete="off" />
                                <label class="btn btn-secondary" for="lower1">Lower Portion</label>
                              </li>
                              <li>
                                <input type="radio" class="btn-check" name="homes" id="room1" autocomplete="off" />
                                <label class="btn btn-secondary" for="room1">Room</label>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="property-PLOTS" role="tabpanel"
                        aria-labelledby="property-PLOTS-tab" tabindex="0">
                        <div class="row custom-radio-btns">
                          <div class="col-12">
                            <ul class="d-flex flex-column gap-1 list-unstyled p-0 mb-0 horizontal-wrapper">
                              <li>
                                <input type="radio" class="btn-check" name="homes" id="all2" autocomplete="off" />
                                <label class="btn btn-secondary" for="all2">All</label>
                              </li>
                              <li>
                                <input type="radio" class="btn-check" name="homes" id="plot2" autocomplete="off" />
                                <label class="btn btn-secondary" for="plot2">Plot</label>
                              </li>
                              <li>
                                <input type="radio" class="btn-check" name="homes" id="uper2" autocomplete="off" />
                                <label class="btn btn-secondary" for="uper2">Uper Portion</label>
                              </li>
                              <li>
                                <input type="radio" class="btn-check" name="homes" id="farm2" autocomplete="off" />
                                <label class="btn btn-secondary" for="farm2">Farm House</label>
                              </li>
                              <li>
                                <input type="radio" class="btn-check" name="homes" id="Penthouse2" autocomplete="off" />
                                <label class="btn btn-secondary" for="Penthouse2">Penthouse</label>
                              </li>
                              <li>
                                <input type="radio" class="btn-check" name="homes" id="lowerportion2"
                                  autocomplete="off" />
                                <label class="btn btn-secondary" for="lowerportion2">Lower Portion</label>
                              </li>
                              <li>
                                <input type="radio" class="btn-check" name="homes" id="room2" autocomplete="off" />
                                <label class="btn btn-secondary" for="room2">Room</label>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="property-COMMERCIALL" role="tabpanel"
                        aria-labelledby="property-commercial-tab" tabindex="0">
                        <div class="row custom-radio-btns">
                          <div class="col-12">
                            <ul class="d-flex flex-column gap-1 list-unstyled p-0 mb-0 horizontal-wrapper">
                              <li>
                                <input type="radio" class="btn-check" name="homes" id="all3" autocomplete="off" />
                                <label class="btn btn-secondary" for="all3">All</label>
                              </li>
                              <li>
                                <input type="radio" class="btn-check" name="homes" id="office3" autocomplete="off" />
                                <label class="btn btn-secondary" for="office3">Office</label>
                              </li>
                              <li>
                                <input type="radio" class="btn-check" name="homes" id="upper-portion3"
                                  autocomplete="off" />
                                <label class="btn btn-secondary" for="upper-portion3">Uper Portion</label>
                              </li>
                              <li>
                                <input type="radio" class="btn-check" name="homes" id="Penthouse3" autocomplete="off" />
                                <label class="btn btn-secondary" for="Penthouse3">Farm House</label>
                              </li>
                              <li>
                                <input type="radio" class="btn-check" name="homes" id="Penthouse5" autocomplete="off" />
                                <label class="btn btn-secondary" for="Penthouse5">Penthouse</label>
                              </li>
                              <li>
                                <input type="radio" class="btn-check" name="homes" id="lower6" autocomplete="off" />
                                <label class="btn btn-secondary" for="lower6">Lower Portion</label>
                              </li>
                              <li>
                                <input type="radio" class="btn-check" name="homes" id="room2" autocomplete="off" />
                                <label class="btn btn-secondary" for="room2">Room</label>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- //* 5th Price Range -->

                <div class="filter-row range-section ">
                  <div class="left-wrapper">
                    <div class="icon-wrapper">
                      <img src="./assets/images/price-range.svg" alt="location">
                    </div>
                    <h5>Price Range</h5>

                  </div>
                  <div class="right-wrapper">
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                      <label for="" class="range-label">PKR</label>
                    </button>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                      aria-hidden="true">

                      <div class="modal-dialog modal-sm modal-dialog-centered modal-wrapper">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            Currency
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="range-wrapper">
                  <div class="left-input">
                    <input type="number" class="form-control" id="starting-value" value="0">
                    <label for="starting-value" class="col-sm-2 range-value">0 Marla</label>
                  </div>
                  <div class="center-to">
                    <span>TO</span>
                  </div>
                  <div class="right-input">
                    <input type="number" class="form-control" id="starting-value" value="5000000000">
                    <label for="starting-value" class="col-sm-2 range-value">0 Marla</label>
                  </div>
                </div>
                <div class="range-wrapper">
                  <!-- <label for="customRange1" class="form-label">Example range</label> -->
                  <input type="range" class="form-range" id="customRange1">
                </div>


                <!-- //* 6th Area Range -->
                <div class="filter-row range-section">
                  <div class="left-wrapper">
                    <div class="icon-wrapper">
                      <img src="./assets/images/range-meter.svg" alt="location">
                    </div>
                    <h5>Area Range</h5>

                  </div>
                  <div class="right-wrapper">
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#marlaModal">
                      <label for="" class="range-label">MARLA
                      </label>
                    </button>

                    <div class="modal fade" id="marlaModal" tabindex="-1" aria-labelledby="marlaModalLabel"
                      aria-hidden="true">

                      <div class="modal-dialog modal-sm modal-dialog-centered modal-wrapper">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            Marla
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="range-wrapper">
                  <div class="left-input">
                    <input type="number" class="form-control" id="starting-value" value="0">
                    <label for="starting-value" class="col-sm-2 range-value">0 Marla</label>
                  </div>
                  <div class="center-to">
                    <span>TO</span>
                  </div>
                  <div class="right-input">
                    <input type="number" class="form-control" id="starting-value" value="5000000000">
                    <label for="starting-value" class="col-sm-2 range-value">0 Marla</label>
                  </div>
                </div>
                <div class="range-wrapper">
                  <!-- <label for="customRange1" class="form-label">Example range</label> -->
                  <input type="range" class="form-range" id="customRange1">
                </div>


                <!-- //* 7th Section Marla Sections  -->

                <div class="marla-wrapper">
                  <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                    aria-labelledby="marla-home-tab" tabindex="0">
                    <div class="row custom-radio-btns">
                      <div class="col-12">
                        <ul class="d-flex flex-column gap-1 list-unstyled p-0 mb-0 horizontal-wrapper">
                          <li>
                            <input type="radio" class="btn-check" name="homes" id="House" autocomplete="off" />
                            <label class="btn btn-secondary" for="House">5 Marla</label>
                          </li>
                          <li>
                            <input type="radio" class="btn-check" name="homes" id="Upper" autocomplete="off" />
                            <label class="btn btn-secondary" for="Upper">10 Marla</label>
                          </li>
                          <li>
                            <input type="radio" class="btn-check" name="homes" id="FarmHouse" autocomplete="off" />
                            <label class="btn btn-secondary" for="FarmHouse">15 Marla</label>
                          </li>
                          <li>
                            <input type="radio" class="btn-check" name="homes" id="Penthouse" autocomplete="off" />
                            <label class="btn btn-secondary" for="Penthouse">1 Kanal</label>
                          </li>
                          <li>
                            <input type="radio" class="btn-check" name="homes" id="Penthouse" autocomplete="off" />
                            <label class="btn btn-secondary" for="Penthouse">2 Kanal</label>
                          </li>
                          <li>
                            <input type="radio" class="btn-check" name="homes" id="Penthouse" autocomplete="off" />
                            <label class="btn btn-secondary" for="Penthouse">4 Kanal</label>
                          </li>
                          <li>
                            <input type="radio" class="btn-check" name="homes" id="Penthouse" autocomplete="off" />
                            <label class="btn btn-secondary" for="Penthouse">6 Kanal</label>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
   </section>

@push('scripts')
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>




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
                        $('#socity').append(
                            '<div class = " col-md-4 "> <a href="/Houses_Property/Lahore_DHA_Defence-9-1.html" style= "text-decoration: none !important; color:inherit;" class="odd-li">' +
                            socity.socity_name +
                            '</a></div> '
                        );
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

  <!-- Properties for Sale  -->
  @extends('frontend.layouts.searchapps')
  @include('frontend.partials.society_show')
 
   <!-- stories-section -->
   @include('frontend.partials.stories')
  <!-- list-grid-view-properties -->
  @include('frontend.partials.list_properties')
 <!-- artical-section -->
  @include('frontend.partials.article')
  <!-- footer -->
  @include('frontend.partials.footer')
  <!-- area modal -->
  
 
</body>

</html>