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
          <div class="col-12 col-md-6 col-lg-2 mb-2">
            <div class="d-flex flex-column fliters-min-wrapper">
              <label class="filters-label">Location</label>
              <input type="text" name="" id="" class="filters-input w-100" />
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3 mb-lg-0 mb-2">
            <div class="d-flex flex-column fliters-min-wrapper position-relative">
              <label class="filters-label">PROPERTY TYPE</label>
              <div class="zameen-dropdpwn-wrapper">
                <div class="input-container d-flex align-items-center justify-content-between">
                  <label class="drop-text">Home</label>
                  <span class="zameen-icon"></span>
                </div>

                <!-- dropdown -->
                <div class="dropdown-data">
                  <ul class="nav nav-pills mb-1 zameen-pills d-flex flex-row justify-content-center gap-3"
                    id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                        aria-selected="true">
                        HOMES
                      </button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="pills-PLOTS-tab" data-bs-toggle="pill" data-bs-target="#pills-PLOTS"
                        type="button" role="tab" aria-controls="pills-PLOTS" aria-selected="false">
                        PLOTS
                      </button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="pills-COMMERCIAL-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-COMMERCIAL" type="button" role="tab" aria-controls="pills-COMMERCIAL"
                        aria-selected="false">
                        COMMERCIAL
                      </button>
                    </li>
                  </ul>
                  <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                      aria-labelledby="pills-home-tab" tabindex="0">
                      <div class="row custom-radio-btns">
                        <div class="col-6 px-1">
                          <ul class="d-flex flex-column gap-1 list-unstyled p-0 mb-0">
                            <li>
                              <input type="radio" class="btn-check" name="homes" id="House" autocomplete="off" />
                              <label class="btn btn-secondary" for="House">House</label>
                            </li>
                            <li>
                              <input type="radio" class="btn-check" name="homes" id="Upper" autocomplete="off" />
                              <label class="btn btn-secondary" for="Upper">Upper Portion</label>
                            </li>
                            <li>
                              <input type="radio" class="btn-check" name="homes" id="FarmHouse" autocomplete="off" />
                              <label class="btn btn-secondary" for="FarmHouse">Farm House</label>
                            </li>
                            <li>
                              <input type="radio" class="btn-check" name="homes" id="Penthouse" autocomplete="off" />
                              <label class="btn btn-secondary" for="Penthouse">Penthouse</label>
                            </li>
                          </ul>
                        </div>
                        <div class="col-6 px-1">
                          <ul class="d-flex flex-column gap-1 list-unstyled p-0 mb-0">
                            <li>
                              <input type="radio" class="btn-check" name="homes" id="Flat" autocomplete="off" />
                              <label class="btn btn-secondary" for="Flat">Flat</label>
                            </li>
                            <li>
                              <input type="radio" class="btn-check" name="homes" id="LowerPortion" autocomplete="off" />
                              <label class="btn btn-secondary" for="LowerPortion">Lower Portion</label>
                            </li>
                            <li>
                              <input type="radio" class="btn-check" name="homes" id="Room" autocomplete="off" />
                              <label class="btn btn-secondary" for="Room">Room</label>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="pills-PLOTS" role="tabpanel" aria-labelledby="pills-PLOTS-tab"
                      tabindex="0">
                      <div class="row custom-radio-btns">
                        <div class="col-6 px-1">
                          <ul class="d-flex flex-column gap-1 list-unstyled p-0 mb-0">
                            <li>
                              <input type="radio" class="btn-check" name="plots" id="ResidentialPlot"
                                autocomplete="off" />
                              <label class="btn btn-secondary" for="ResidentialPlot">Residential Plot</label>
                            </li>
                            <li>
                              <input type="radio" class="btn-check" name="plots" id="AgriculturalLand"
                                autocomplete="off" />
                              <label class="btn btn-secondary" for="AgriculturalLand">Agricultural Land</label>
                            </li>
                            <li>
                              <input type="radio" class="btn-check" name="plots" id="PlotFile" autocomplete="off" />
                              <label class="btn btn-secondary" for="PlotFile">Plot File</label>
                            </li>
                          </ul>
                        </div>
                        <div class="col-6 px-1">
                          <ul class="d-flex flex-column gap-1 list-unstyled p-0 mb-0">
                            <li>
                              <input type="radio" class="btn-check" name="plots" id="CommercialPlot"
                                autocomplete="off" />
                              <label class="btn btn-secondary" for="CommercialPlot">Commercial Plot</label>
                            </li>
                            <li>
                              <input type="radio" class="btn-check" name="plots" id="IndustrialLand"
                                autocomplete="off" />
                              <label class="btn btn-secondary" for="IndustrialLand">Industrial Land</label>
                            </li>
                            <li>
                              <input type="radio" class="btn-check" name="plots" id="PlotForm" autocomplete="off" />
                              <label class="btn btn-secondary" for="PlotForm">Plot Form</label>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="pills-COMMERCIAL" role="tabpanel"
                      aria-labelledby="pills-COMMERCIAL-tab" tabindex="0">
                      <div class="row custom-radio-btns">
                        <div class="col-6 px-1">
                          <ul class="d-flex flex-column gap-1 list-unstyled p-0 mb-0">
                            <li>
                              <input type="radio" class="btn-check" name="Commercial" id="Office" autocomplete="off" />
                              <label class="btn btn-secondary" for="Office">Office</label>
                            </li>
                            <li>
                              <input type="radio" class="btn-check" name="Commercial" id="Warehouse"
                                autocomplete="off" />
                              <label class="btn btn-secondary" for="Warehouse">Warehouse</label>
                            </li>
                            <li>
                              <input type="radio" class="btn-check" name="Commercial" id="Building"
                                autocomplete="off" />
                              <label class="btn btn-secondary" for="Building">Building</label>
                            </li>
                          </ul>
                        </div>
                        <div class="col-6 px-1">
                          <ul class="d-flex flex-column gap-1 list-unstyled p-0 mb-0">
                            <li>
                              <input type="radio" class="btn-check" name="Commercial" id="Shop" autocomplete="off" />
                              <label class="btn btn-secondary" for="Shop">Shop</label>
                            </li>
                            <li>
                              <input type="radio" class="btn-check" name="Commercial" id="Factory" autocomplete="off" />
                              <label class="btn btn-secondary" for="Factory">Factory</label>
                            </li>
                            <li>
                              <input type="radio" class="btn-check" name="Commercial" id="Other" autocomplete="off" />
                              <label class="btn btn-secondary" for="Other">Other</label>
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
          <div class="col-12 col-md-6 col-lg-3 mb-2">
            <div class="d-flex flex-column fliters-min-wrapper roll-wrapper position-relative">
              <label class="filters-label">AREA (MARLA)</label>
              <div class="rol-btn">
                <span>0</span>
                <span>Any</span>
                <span class="custom-arrow"></span>
              </div>
              <div class="roll-dropdown custom-radio-btns active">
                <div class="row">
                  <div class="col-12">
                    <span class="_35e12ee5" data-bs-toggle="modal" data-bs-target="#changeareaModal">Change area unit
                      (Marla)</span>


                  </div>
                  <div class="col-6">
                    <p class="sm-text text-center">Min:</p>
                    <input type="text" class="form-control mb-2" placeholder="0">
                    <ul class="list-unstyled p-0 m-0 d-flex flex-column gap-2 roll-list">
                      <li>
                        <input type="radio" class="btn-check" name="AREA" id="roll-0" autocomplete="off">
                        <label class="btn btn-secondary" for="roll-0">0</label>
                      </li>
                    </ul>
                  </div>
                  <div class="col-6">
                    <p class="sm-text text-center">Max:</p>
                    <input type="text" class="form-control mb-2" placeholder="Any">
                    <ul class="list-unstyled p-0 m-0 d-flex flex-column gap-2 roll-list">
                      <li>
                        <input type="radio" class="btn-check" name="any" id="roll-any" autocomplete="off">
                        <label class="btn btn-secondary" for="roll-any">Any</label>
                      </li>

                    </ul>
                  </div>
                </div>

                <div class="d-flex justify-content-end">
                  <button class="close-roll-dropdwon">
                    close
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row hide-on-scroll d-md-flex d-none">
          <div class="col-12 col-md-6 col-lg-4 mb-lg-0 mb-2">
            <div class="d-flex flex-column fliters-min-wrapper roll-wrapper position-relative">
              <label class="filters-label">PRICE (PKR)</label>
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
                    <input type="text" class="form-control mb-2" placeholder="0">
                    <ul class="list-unstyled p-0 m-0 d-flex flex-column gap-2 roll-list">
                      <li>
                        <input type="radio" class="btn-check" name="price" id="price-0" autocomplete="off">
                        <label class="btn btn-secondary" for="price-0">0</label>
                      </li>
                    </ul>
                  </div>
                  <div class="col-6">
                    <p class="sm-text text-center">Max:</p>
                    <input type="text" class="form-control mb-2" placeholder="Any">
                    <ul class="list-unstyled p-0 m-0 d-flex flex-column gap-2 roll-list">
                      <li>
                        <input type="radio" class="btn-check" name="any" id="price-any" autocomplete="off">
                        <label class="btn btn-secondary" for="price-any">Any</label>
                      </li>

                    </ul>
                  </div>
                </div>

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
              <label class="filters-label">BEDS</label>
              <div class="rol-btn">
                <span>Beds</span>
                <span class="custom-arrow"></span>
              </div>
              <div class="roll-dropdown custom-radio-btns active">
                <ul class="list-unstyled p-0 m-0 d-flex flex-column gap-2">
                  <li>
                    <input type="radio" class="btn-check" name="purpose" id="roll-rent" autocomplete="off">
                    <label class="btn btn-secondary" for="roll-rent">Rent</label>
                  </li>
                  <li>
                    <input type="radio" class="btn-check" name="purpose" id="roll-buy" autocomplete="off">
                    <label class="btn btn-secondary" for="roll-buy">Buy</label>
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
              <label class="filters-label">BATH</label>
              <div class="rol-btn">
                <span>Bath</span>
                <span class="custom-arrow"></span>
              </div>
              <div class="roll-dropdown custom-radio-btns active">
                <ul class="list-unstyled p-0 m-0 d-flex flex-column gap-2">
                  <li>
                    <input type="radio" class="btn-check" name="purpose" id="roll-rent" autocomplete="off">
                    <label class="btn btn-secondary" for="roll-rent">Rent</label>
                  </li>
                  <li>
                    <input type="radio" class="btn-check" name="purpose" id="roll-buy" autocomplete="off">
                    <label class="btn btn-secondary" for="roll-buy">Buy</label>
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
                   <button type="submit" style="margin-left: 80%;" class="serch-btn"><i class="fa fa-search"></i>Search</button>

                </form>
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
