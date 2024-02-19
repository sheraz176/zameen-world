<section class="filters-bg mb-3">
    <div class="wrapper-for-all">
      <div class="custom-container">
        <div class="row d-md-flex d-none">
          <div class="col-6 col-md-6 col-lg-2 mb-2">
            <div class="d-flex flex-column fliters-min-wrapper roll-wrapper position-relative">
              <label class="filters-label">Purpose</label>
              <div class="rol-btn">
                <span>Rent</span>
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
              <label class="filters-label">City</label>
              <div class="rol-btn">
                <span>Lahore</span>
                <span class="custom-arrow"></span>
              </div>
              <div class="roll-dropdown custom-radio-btns active">
                <input type="text" class="form-control mb-2">
                <ul class="list-unstyled p-0 m-0 d-flex flex-column gap-2 roll-list">
                  <li>
                    <input type="radio" class="btn-check" name="city" id="roll-lahore" autocomplete="off">
                    <label class="btn btn-secondary" for="roll-lahore">Lahore</label>
                  </li>
                  <li>
                    <input type="radio" class="btn-check" name="city" id="roll-Islamabad" autocomplete="off">
                    <label class="btn btn-secondary" for="roll-Islamabad">Islamabad</label>
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