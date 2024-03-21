


<section>
    <div class="wrapper-for-all">
        <div class="custom-container">
            <nav aria-label="breadcrumb " class="k-breadcrumb">
                <ol class="breadcrumb mb-2">
                    <li class="breadcrumb-item"><a href="#">Zameen</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Lahore</li>
                </ol>
            </nav>
            <div class="heading-text d-flex justify-content-between gap-3 align-items-center">
                <h3 class="md-bold-heading">
                    24,560 Properties for Sale in Lahore
                </h3>
                <button aria-label="Save search button" class="Save-search-button d-flex align-items-center gap-2"
                    data-bs-toggle="modal" data-bs-target="#savesearchModal"><svg xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 14.68 14" aria-label="Save search icon" class="_9512bbf7 "
                        style="height: 16px;width: 16px;">
                        <defs></defs>
                        <path class="cls-1"
                            d="M11.57 13.5l-4.23-2.55-4.23 2.55 1.12-4.81L.5 5.46l4.92-.42L7.34.5l1.92 4.53 4.92.42-3.73 3.23 1.12 4.82z">
                        </path>
                    </svg>Save Search</button>
            </div>

            <!-- all cities house and flat-list -->
            <div class="Properties-list-wrapper my-4">
                <!-- tabs-for-house-flats -->
                <div
                    class="k-tabs-wrapper position-relative d-flex flex-row justify-content-between gap-3 align-items-center mt-2">
                    <span class="Open-links" id="toggleButton">Open</span>
                    <ul class="nav nav-pills k-pills" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active d-flex flex-column gap-1" id="pills-homeprop-tab"
                                data-bs-toggle="pill" data-bs-target="#pills-homeprop" type="button" role="tab"
                                aria-controls="pills-homeprop" aria-selected="true">
                                <span>Houses</span> <span class="prop-count">(21,000)</span>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link d-flex flex-column gap-1" id="pills-Flatsprop-tab"
                                data-bs-toggle="pill" data-bs-target="#pills-Flatsprop" type="button" role="tab"
                                aria-controls="pills-Flatsprop" aria-selected="false">
                                <span>Flats</span> <span class="prop-count">(21,000)</span>
                            </button>
                        </li>
                    </ul>
                    <div>
                        <a href="/Rentals_Flats_Apartments/Lahore-1-1.html" title="Lahore Flats For Rent"
                            class="k-anchor" aria-label="Switch purpose">Lahore Flats For Rent</a>
                    </div>
                </div>

                <div class="tab-content k-padding hide-show-prop" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-homeprop" role="tabpanel"
                        aria-labelledby="pills-homeprop-tab" tabindex="0">
                        <div class="d-flex flex-row justify-content-between gap-2 py-4">
                            <p class="md-text">Locations of Houses For Sale in Lahore</p>
                        </div>
                        <div class="row">
                            <div class="column">
                                <div class="col-4 col-4 col-4">
                                    <ul class="list-inner list-unstyled">
                                    <ol>
                          <li class="even-li
                                    <select  name="socity"  id="socity"
                                            class="form-control validate show-tick {{ $errors->has('socity') ? 'focused error' : '' }}">

                                            </select>
                                        </li>
                                </div>
                            </div>
                        </div>
                        @include('frontend.partials.ajax')


</section>