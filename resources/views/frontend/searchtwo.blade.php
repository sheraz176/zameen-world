@extends('frontend.layouts.apps')

@push('styles')
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Real Estate</title>
<link
  href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
  rel="stylesheet"
  integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
  crossorigin="anonymous"
/>
<link
  href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css"
  rel="stylesheet"
/>
<link rel="stylesheet" href="{{ asset('zameen/search/assets/css/style.css') }}" />
@endpush

@section('content')
   <!-- filters-section -->
   <section class="filters-bg mb-3">
    <div class="wrapper-for-all">
      <div class="custom-container">
        <div class="row">
          <div class="col-6 col-md-6 col-lg-2 mb-3">
            <div class="d-flex flex-column fliters-min-wrapper">
              <label class="filters-label">Purpose</label>
              <select class="js-example-basic-single w-100" name="state">
                <option value="AL">Rent</option>
                ...
                <option value="WY">Buy</option>
              </select>
            </div>
          </div>
          <div class="col-6 col-md-6 col-lg-2 mb-3">
            <div class="d-flex flex-column fliters-min-wrapper">
              <label class="filters-label">City</label>
              <select class="js-example-basic-single w-100" name="state">
                <option value="AL">Lahore</option>
                ...
                <option value="WY">Islamabad</option>
              </select>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3 mb-3">
            <div class="d-flex flex-column fliters-min-wrapper">
              <label class="filters-label">Location</label>
              <input type="text" name="" id="" class="filters-input w-100" />
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-2 mb-lg-0 mb-3">
            <div class="d-flex flex-column fliters-min-wrapper">
              <label class="filters-label">PROPERTY TYPE</label>
              <select class="js-example-basic-single w-100" name="state">
                <option value="AL">Office</option>
                ...
                <option value="WY">Shop</option>
              </select>
            </div>
          </div>
          <div class="col-6 col-md-6 col-lg-3 mb-3">
            <div class="d-flex flex-column fliters-min-wrapper">
              <label class="filters-label">PROPERTY TYPE</label>
              <div class="row">
                <div class="col-6">
                  <select class="js-example-basic-single w-100" name="state">
                    <option value="AL" disabled selected>Min</option>
                    ...
                    <option value="WY">Shop</option>
                  </select>
                </div>
                <div class="col-6">
                  <select class="js-example-basic-single w-100" name="state">
                    <option value="AL" disabled selected>Max</option>
                    ...
                    <option value="WY">Shop</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-6 col-lg-4">
            <div class="d-flex flex-column fliters-min-wrapper">
              <label class="filters-label">PRICE (PKR)</label>
              <div class="row">
                <div class="col-6">
                  <select class="js-example-basic-single w-100" name="state">
                    <option value="AL" disabled selected>Min</option>
                    ...
                    <option value="WY">Shop</option>
                  </select>
                </div>
                <div class="col-6">
                  <select class="js-example-basic-single w-100" name="state">
                    <option value="AL" disabled selected>Max</option>
                    ...
                    <option value="WY">Shop</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-8">
            <div class="d-flex flex-column fliters-min-wrapper">
              <label class="filters-label">Location</label>
              <input type="text" name="" id="" class="filters-input w-100" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Properties for Sale  -->
  <section>
    <div class="wrapper-for-all">
      <div class="custom-container">
        <nav aria-label="breadcrumb " class="k-breadcrumb">
          <ol class="breadcrumb mb-2">
            <li class="breadcrumb-item"><a href="#">Zameen</a></li>
            <li class="breadcrumb-item active" aria-current="page">Lahore</li>
          </ol>
        </nav>
        <div class="heading-text">
          <h3 class="md-bold-heading">
            24,560 Properties for Sale in Lahore
          </h3>
        </div>
        <!-- all cities house and flat-list -->
        <div class="Properties-list-wrapper my-4">
          <!-- tabs-for-house-flats -->
          <div
            class="k-tabs-wrapper position-relative d-flex flex-row justify-content-between gap-3 align-items-center mt-2"
          >
            <span class="Open-links" id="toggleButton">Open</span>
            <ul class="nav nav-pills k-pills" id="pills-tab" role="tablist">
              <li class="nav-item" role="presentation">
                <button
                  class="nav-link active d-flex flex-column gap-1"
                  id="pills-home-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#pills-home"
                  type="button"
                  role="tab"
                  aria-controls="pills-home"
                  aria-selected="true"
                >
                  <span>Houses</span> <span class="prop-count">(21,000)</span>
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button
                  class="nav-link d-flex flex-column gap-1"
                  id="pills-Flats-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#pills-Flats"
                  type="button"
                  role="tab"
                  aria-controls="pills-Flats"
                  aria-selected="false"
                >
                  <span>Flats</span> <span class="prop-count">(21,000)</span>
                </button>
              </li>
            </ul>
            <div>
              <a
                href="/Rentals_Flats_Apartments/Lahore-1-1.html"
                title="Lahore Flats For Rent"
                class="k-anchor"
                aria-label="Switch purpose"
                >Lahore Flats For Rent</a
              >
            </div>
          </div>

          <div
            class="tab-content k-padding hide-show-prop"
            id="pills-tabContent"
          >
            <div
              class="tab-pane fade show active"
              id="pills-home"
              role="tabpanel"
              aria-labelledby="pills-home-tab"
              tabindex="0"
            >
              <div class="d-flex flex-row justify-content-between gap-2 py-4">
                <p class="md-text">Locations of Houses For Sale in Lahore</p>
              </div>
              <div class="row">
                <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                  <ul class="list-inner list-unstyled">
                    <li class="even-li">
                      <a
                        href="/Houses_Property/Lahore_DHA_Defence-9-1.html"
                        class="odd-li"
                        >DHA Defence<span class="li-span">(5,718)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Houses_Property/Lahore_Bahria_Town-509-1.html"
                        class="odd-li"
                        >Bahria Town<span class="li-span">(1,872)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Houses_Property/Lahore_Park_View_City-1466-1.html"
                        class="odd-li"
                        >Park View City<span class="li-span">(715)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Houses_Property/Lahore_Johar_Town-93-1.html"
                        class="odd-li"
                        >Johar Town<span class="li-span">(656)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Houses_Property/Lahore_Raiwind_Road-128-1.html"
                        class="odd-li"
                        >Raiwind Road<span class="li-span">(608)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Houses_Property/Lahore_Askari-3555-1.html"
                        class="odd-li"
                        >Askari<span class="li-span">(515)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Houses_Property/Lahore_GT_Road-472-1.html"
                        class="odd-li"
                        >GT Road<span class="li-span">(471)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Houses_Property/Lahore_Bahria_Orchard-1474-1.html"
                        class="odd-li"
                        >Bahria Orchard<span class="li-span">(438)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Houses_Property/Lahore_Wapda_Town-423-1.html"
                        class="odd-li"
                        >Wapda Town<span class="li-span">(434)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Houses_Property/Lahore_State_Life_Housing_Society-487-1.html"
                        class="odd-li"
                        >State Life Housing Society<span class="li-span"
                          >(390)</span
                        ></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Houses_Property/Lahore_DHA_11_Rahbar-1410-1.html"
                        class="odd-li"
                        >DHA 11 Rahbar<span class="li-span">(383)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Houses_Property/Lahore_Allama_Iqbal_Town-58-1.html"
                        class="odd-li"
                        >Allama Iqbal Town<span class="li-span"
                          >(358)</span
                        ></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Houses_Property/Lahore_Al_Rehman_Garden-4504-1.html"
                        class="odd-li"
                        >Al Rehman Garden<span class="li-span">(346)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Houses_Property/Lahore_Valencia_Housing_Society-373-1.html"
                        class="odd-li"
                        >Valencia Housing Society<span class="li-span"
                          >(334)</span
                        ></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Houses_Property/Lahore_Khayaban_e_Amin-1514-1.html"
                        class="odd-li"
                        >Khayaban-e-Amin<span class="li-span">(322)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Houses_Property/Lahore_Central_Park_Housing_Scheme-1013-1.html"
                        class="odd-li"
                        >Central Park Housing Scheme<span class="li-span"
                          >(312)</span
                        ></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Houses_Property/Lahore_Model_Town-8-1.html"
                        class="odd-li"
                        >Model Town<span class="li-span">(283)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Houses_Property/Lahore_Cantt-427-1.html"
                        class="odd-li"
                        >Cantt<span class="li-span">(246)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Houses_Property/Lahore_Paragon_City-1014-1.html"
                        class="odd-li"
                        >Paragon City<span class="li-span">(236)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Houses_Property/Lahore_Jubilee_Town-766-1.html"
                        class="odd-li"
                        >Jubilee Town<span class="li-span">(231)</span></a
                      >
                    </li>
                  </ul>
                </div>
                <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                  <ul class="list-inner list-unstyled">
                    <li class="even-li">
                      <a
                        href="/Houses_Property/Lahore_Marghzar_Officers_Colony-1047-1.html"
                        class="odd-li"
                        >Marghzar Officers Colony<span class="li-span"
                          >(200)</span
                        ></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Houses_Property/Lahore_Gulberg-7-1.html"
                        class="odd-li"
                        >Gulberg<span class="li-span">(191)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Houses_Property/Lahore_Nasheman_e_Iqbal-499-1.html"
                        class="odd-li"
                        >Nasheman-e-Iqbal<span class="li-span">(186)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Houses_Property/Lahore_Sabzazar_Scheme-562-1.html"
                        class="odd-li"
                        >Sabzazar Scheme<span class="li-span">(168)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Houses_Property/Lahore_Punjab_Co_operative_Housing_Society-456-1.html"
                        class="odd-li"
                        >Punjab Coop Housing Society<span class="li-span"
                          >(166)</span
                        ></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Houses_Property/Lahore_Divine_Gardens-1487-1.html"
                        class="odd-li"
                        >Divine Gardens<span class="li-span">(162)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Houses_Property/Lahore_Eden-3098-1.html"
                        class="odd-li"
                        >Eden<span class="li-span">(161)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Houses_Property/Lahore_Medical_Housing_Society-4359-1.html"
                        class="odd-li"
                        >Lahore Medical Housing Society<span class="li-span"
                          >(159)</span
                        ></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Houses_Property/Lahore_Ferozepur_Road-81-1.html"
                        class="odd-li"
                        >Ferozepur Road<span class="li-span">(143)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Houses_Property/Lahore_EME_Society-410-1.html"
                        class="odd-li"
                        >EME Society<span class="li-span">(140)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Houses_Property/Lahore_LDA_Avenue-547-1.html"
                        class="odd-li"
                        >LDA Avenue<span class="li-span">(139)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Houses_Property/Lahore_Samanabad-377-1.html"
                        class="odd-li"
                        >Samanabad<span class="li-span">(136)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Houses_Property/Lahore_Formanites_Housing_Scheme-1020-1.html"
                        class="odd-li"
                        >Formanites Housing Scheme<span class="li-span"
                          >(121)</span
                        ></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Houses_Property/Lahore_Bankers_Avenue_Cooperative_Housing_Society-8325-1.html"
                        class="odd-li"
                        >Bankers Avenue Cooperative Housing Society<span
                          class="li-span"
                          >(119)</span
                        ></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Houses_Property/Lahore_Canal_Garden-1287-1.html"
                        class="odd-li"
                        >Canal Garden<span class="li-span">(117)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Houses_Property/Lahore_Bedian_Road-378-1.html"
                        class="odd-li"
                        >Bedian Road<span class="li-span">(115)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Houses_Property/Lahore_Garden_Town-4-1.html"
                        class="odd-li"
                        >Garden Town<span class="li-span">(109)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Houses_Property/Lahore_New_Lahore_City-8152-1.html"
                        class="odd-li"
                        >New Lahore City<span class="li-span">(108)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Houses_Property/Lahore_Green_City-1012-1.html"
                        class="odd-li"
                        >Green City<span class="li-span">(106)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Houses_Property/Lahore_Punjab_Govt_Employees_Society-4430-1.html"
                        class="odd-li"
                        >Punjab Govt Employees Society<span class="li-span"
                          >(103)</span
                        ></a
                      >
                    </li>
                  </ul>
                </div>
                <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                  <ul class="list-inner list-unstyled">
                    <li class="even-li">
                      <a
                        href="/Houses_Property/Lahore_Faisal_Town-79-1.html"
                        class="odd-li"
                        >Faisal Town<span class="li-span">(98)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Houses_Property/Lahore_Pak_Arab_Housing_Society-1006-1.html"
                        class="odd-li"
                        >Pak Arab Housing Society<span class="li-span"
                          >(96)</span
                        ></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Houses_Property/Lahore_Military_Accounts_Housing_Society-781-1.html"
                        class="odd-li"
                        >Military Accounts Housing Society<span
                          class="li-span"
                          >(93)</span
                        ></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Houses_Property/Lahore_Defence_Road-4574-1.html"
                        class="odd-li"
                        >Defence Road<span class="li-span">(93)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Houses_Property/Lahore_Punjab_University_Employees_Society-4569-1.html"
                        class="odd-li"
                        >Punjab University Employees Society<span
                          class="li-span"
                          >(89)</span
                        ></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Houses_Property/Lahore_Tariq_Gardens-1356-1.html"
                        class="odd-li"
                        >Tariq Gardens<span class="li-span">(87)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Houses_Property/Lahore_Cavalry_Extension-15484-1.html"
                        class="odd-li"
                        >Cavalry Extension<span class="li-span">(80)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Houses_Property/Lahore_Audit__amp__Accounts_Co_operative_Society-1134-1.html"
                        class="odd-li"
                        >Audit &amp; Accounts Housing Society<span
                          class="li-span"
                          >(79)</span
                        ></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Houses_Property/Lahore_Taj_Pura-760-1.html"
                        class="odd-li"
                        >Tajpura<span class="li-span">(79)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Houses_Property/Lahore_Fazaia_Housing_Scheme-1677-1.html"
                        class="odd-li"
                        >Fazaia Housing Scheme<span class="li-span"
                          >(75)</span
                        ></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Houses_Property/Lahore_Architects_Engineers_Housing_Society-1242-1.html"
                        class="odd-li"
                        >Architects Engineers Housing Society<span
                          class="li-span"
                          >(74)</span
                        ></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Houses_Property/Lahore_OPF_Housing_Scheme-637-1.html"
                        class="odd-li"
                        >OPF Housing Scheme<span class="li-span"
                          >(74)</span
                        ></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Houses_Property/Lahore_Vital_Homes_Housing_Scheme-9461-1.html"
                        class="odd-li"
                        >Vital Homes Housing Scheme<span class="li-span"
                          >(73)</span
                        ></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Houses_Property/Lahore_Gulshan_e_Ravi-893-1.html"
                        class="odd-li"
                        >Gulshan-e-Ravi<span class="li-span">(72)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Houses_Property/Lahore_Town_Ship-146-1.html"
                        class="odd-li"
                        >Township<span class="li-span">(70)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Houses_Property/Lahore_Bahria_Nasheman-4510-1.html"
                        class="odd-li"
                        >Bahria Nasheman<span class="li-span">(66)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Houses_Property/Lahore_IEP_Engineers_Town-8425-1.html"
                        class="odd-li"
                        >IEP Engineers Town<span class="li-span"
                          >(65)</span
                        ></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Houses_Property/Lahore_Hamza_Town-8941-1.html"
                        class="odd-li"
                        >Hamza Town<span class="li-span">(63)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Houses_Property/Lahore_Walton_Road-153-1.html"
                        class="odd-li"
                        >Walton Road<span class="li-span">(61)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Houses_Property/Lahore_Multan_Road-48-1.html"
                        class="odd-li"
                        >Multan Road<span class="li-span">(61)</span></a
                      >
                    </li>
                  </ul>
                </div>
                <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                  <ul class="list-inner list-unstyled">
                    <li class="even-li">
                      <a
                        href="/Houses_Property/Lahore_Harbans_Pura-1050-1.html"
                        class="odd-li"
                        >Harbanspura<span class="li-span">(59)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Houses_Property/Lahore_Cavalry_Ground-69-1.html"
                        class="odd-li"
                        >Cavalry Ground<span class="li-span">(58)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Houses_Property/Lahore_College_Road-4576-1.html"
                        class="odd-li"
                        >College Road<span class="li-span">(58)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Houses_Property/Lahore_NFC_1-4083-1.html"
                        class="odd-li"
                        >NFC 1<span class="li-span">(57)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Houses_Property/Lahore_PIA_Housing_Scheme-444-1.html"
                        class="odd-li"
                        >PIA Housing Scheme<span class="li-span"
                          >(56)</span
                        ></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Houses_Property/Lahore_Bankers_Co_operative_Housing_Society-1052-1.html"
                        class="odd-li"
                        >Bankers Co-operative Housing Society<span
                          class="li-span"
                          >(55)</span
                        ></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Houses_Property/Lahore_Main_Canal_Bank_Road-431-1.html"
                        class="odd-li"
                        >Main Canal Bank Road<span class="li-span"
                          >(52)</span
                        ></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Houses_Property/Lahore_UET_Housing_Society-615-1.html"
                        class="odd-li"
                        >UET Housing Society<span class="li-span"
                          >(51)</span
                        ></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Houses_Property/Lahore_Canal_Bank_Housing_Scheme-9354-1.html"
                        class="odd-li"
                        >Canal Bank Housing Scheme<span class="li-span"
                          >(50)</span
                        ></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Houses_Property/Lahore_Lalazaar_Garden-9996-1.html"
                        class="odd-li"
                        >Lalazaar Garden<span class="li-span">(48)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Houses_Property/Lahore_Shadab_Garden-4451-1.html"
                        class="odd-li"
                        >Shadab Garden<span class="li-span">(41)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Houses_Property/Lahore_PCSIR_Housing_Scheme-450-1.html"
                        class="odd-li"
                        >PCSIR Housing Scheme<span class="li-span"
                          >(39)</span
                        ></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Houses_Property/Lahore_Revenue_Society-1359-1.html"
                        class="odd-li"
                        >Revenue Society<span class="li-span">(39)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Houses_Property/Lahore_Kahna-9358-1.html"
                        class="odd-li"
                        >Kahna<span class="li-span">(38)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Houses_Property/Lahore_Sui_Gas_Housing_Society-446-1.html"
                        class="odd-li"
                        >Sui Gas Housing Society<span class="li-span"
                          >(36)</span
                        ></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Houses_Property/Lahore_Gulshan_e_Lahore-498-1.html"
                        class="odd-li"
                        >Gulshan-e-Lahore<span class="li-span">(34)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Houses_Property/Lahore_Lahore_Motorway_City_-8372-1.html"
                        class="odd-li"
                        >Lahore Motorway City<span class="li-span"
                          >(33)</span
                        ></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Houses_Property/Lahore_Green_Cap_Housing_Society-8150-1.html"
                        class="odd-li"
                        >Green Cap Housing Society<span class="li-span"
                          >(33)</span
                        ></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Houses_Property/Lahore_Zaitoon_City-18699-1.html"
                        class="odd-li"
                        >Zaitoon City<span class="li-span">(32)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Houses_Property/Lahore_Chinar_Bagh-763-1.html"
                        class="odd-li"
                        >Chinar Bagh<span class="li-span">(32)</span></a
                      >
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div
              class="tab-pane fade"
              id="pills-Flats"
              role="tabpanel"
              aria-labelledby="pills-Flats-tab"
              tabindex="0"
            >
              <div class="d-flex flex-row justify-content-between gap-2 py-4">
                <p class="md-text">Locations of Flats For Sale in Lahore</p>
              </div>
              <div class="row">
                <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                  <ul class="list-inner list-unstyled">
                    <li class="even-li">
                      <a
                        href="/Flats_Apartments/Lahore_Askari-3555-1.html"
                        class="odd-li"
                        >Askari<span class="li-span">(766)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Flats_Apartments/Lahore_Bahria_Town-509-1.html"
                        class="odd-li"
                        >Bahria Town<span class="li-span">(584)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Flats_Apartments/Lahore_Raiwind_Road-128-1.html"
                        class="odd-li"
                        >Raiwind Road<span class="li-span">(182)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Flats_Apartments/Lahore_Gulberg-7-1.html"
                        class="odd-li"
                        >Gulberg<span class="li-span">(180)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Flats_Apartments/Lahore_DHA_Defence-9-1.html"
                        class="odd-li"
                        >DHA Defence<span class="li-span">(110)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Flats_Apartments/Lahore_Bahria_Orchard-1474-1.html"
                        class="odd-li"
                        >Bahria Orchard<span class="li-span">(75)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Flats_Apartments/Lahore_Johar_Town-93-1.html"
                        class="odd-li"
                        >Johar Town<span class="li-span">(48)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Flats_Apartments/Lahore_Main_Canal_Bank_Road-431-1.html"
                        class="odd-li"
                        >Main Canal Bank Road<span class="li-span"
                          >(45)</span
                        ></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Flats_Apartments/Lahore_IEP_Engineers_Town-8425-1.html"
                        class="odd-li"
                        >IEP Engineers Town<span class="li-span"
                          >(24)</span
                        ></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Flats_Apartments/Lahore_Khayaban_e_Amin-1514-1.html"
                        class="odd-li"
                        >Khayaban-e-Amin<span class="li-span">(24)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Flats_Apartments/Lahore_Model_Town-8-1.html"
                        class="odd-li"
                        >Model Town<span class="li-span">(16)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Flats_Apartments/Lahore_Shanghai_Road-12334-1.html"
                        class="odd-li"
                        >Shanghai Road<span class="li-span">(14)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Flats_Apartments/Lahore_Land_Breeze_Housing_Society-9784-1.html"
                        class="odd-li"
                        >Land Breeze Housing Society<span class="li-span"
                          >(14)</span
                        ></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Flats_Apartments/Lahore_Sukh_Chayn_Gardens-473-1.html"
                        class="odd-li"
                        >Sukh Chayn Gardens<span class="li-span"
                          >(14)</span
                        ></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Flats_Apartments/Lahore_Khayaban_e_Jinnah_Road-8145-1.html"
                        class="odd-li"
                        >Khayaban-e-Jinnah Road<span class="li-span"
                          >(13)</span
                        ></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Flats_Apartments/Lahore_Jail_Road-528-1.html"
                        class="odd-li"
                        >Jail Road<span class="li-span">(12)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Flats_Apartments/Lahore_Park_Avenue_Housing_Scheme-10934-1.html"
                        class="odd-li"
                        >Park Avenue Housing Scheme<span class="li-span"
                          >(11)</span
                        ></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Flats_Apartments/Lahore_Cantt-427-1.html"
                        class="odd-li"
                        >Cantt<span class="li-span">(9)</span></a
                      >
                    </li>
                  </ul>
                </div>
                <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                  <ul class="list-inner list-unstyled">
                    <li class="even-li">
                      <a
                        href="/Flats_Apartments/Lahore_Defence_Road-4574-1.html"
                        class="odd-li"
                        >Defence Road<span class="li-span">(9)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Flats_Apartments/Lahore_Izmir_Town-483-1.html"
                        class="odd-li"
                        >Izmir Town<span class="li-span">(9)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Flats_Apartments/Lahore_Eden-3098-1.html"
                        class="odd-li"
                        >Eden<span class="li-span">(7)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Flats_Apartments/Lahore_Jubilee_Town-766-1.html"
                        class="odd-li"
                        >Jubilee Town<span class="li-span">(7)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Flats_Apartments/Lahore_New_Lahore_City-8152-1.html"
                        class="odd-li"
                        >New Lahore City<span class="li-span">(6)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Flats_Apartments/Lahore_Canal_Garden-1287-1.html"
                        class="odd-li"
                        >Canal Garden<span class="li-span">(6)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Flats_Apartments/Lahore_Shah_Jamal-1491-1.html"
                        class="odd-li"
                        >Shah Jamal<span class="li-span">(6)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Flats_Apartments/Lahore_Noor_Jahan_Road-10669-1.html"
                        class="odd-li"
                        >Noor Jahan Road<span class="li-span">(5)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Flats_Apartments/Lahore_Rehman_Gardens-4584-1.html"
                        class="odd-li"
                        >Rehman Gardens<span class="li-span">(5)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Flats_Apartments/Lahore_Bedian_Road-378-1.html"
                        class="odd-li"
                        >Bedian Road<span class="li-span">(5)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Flats_Apartments/Lahore_Paragon_City-1014-1.html"
                        class="odd-li"
                        >Paragon City<span class="li-span">(4)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Flats_Apartments/Lahore_Ichhra-88-1.html"
                        class="odd-li"
                        >Ichhra<span class="li-span">(4)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Flats_Apartments/Lahore_Bahria_Education___Medical_City-8334-1.html"
                        class="odd-li"
                        >Bahria Education &amp; Medical City<span
                          class="li-span"
                          >(4)</span
                        ></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Flats_Apartments/Lahore_Wapda_Town-423-1.html"
                        class="odd-li"
                        >Wapda Town<span class="li-span">(4)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Flats_Apartments/Lahore_Pine_Avenue-14395-1.html"
                        class="odd-li"
                        >Pine Avenue<span class="li-span">(3)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Flats_Apartments/Lahore_Muslim_Town-326-1.html"
                        class="odd-li"
                        >Muslim Town<span class="li-span">(3)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Flats_Apartments/Lahore_Allama_Iqbal_Town-58-1.html"
                        class="odd-li"
                        >Allama Iqbal Town<span class="li-span">(3)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Flats_Apartments/Lahore_Airport_Road-8347-1.html"
                        class="odd-li"
                        >Airport Road<span class="li-span">(3)</span></a
                      >
                    </li>
                  </ul>
                </div>
                <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                  <ul class="list-inner list-unstyled">
                    <li class="even-li">
                      <a
                        href="/Flats_Apartments/Lahore_LDA_Avenue-547-1.html"
                        class="odd-li"
                        >LDA Avenue<span class="li-span">(3)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Flats_Apartments/Lahore_Labor_Colony-10932-1.html"
                        class="odd-li"
                        >Labor Colony<span class="li-span">(2)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Flats_Apartments/Lahore_Lawrence_Road-8288-1.html"
                        class="odd-li"
                        >Lawrence Road<span class="li-span">(2)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Flats_Apartments/Lahore_Garden_Town-4-1.html"
                        class="odd-li"
                        >Garden Town<span class="li-span">(2)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Flats_Apartments/Lahore_Maulana_Shaukat_Ali_Road-9866-1.html"
                        class="odd-li"
                        >Maulana Shaukat Ali Road<span class="li-span"
                          >(2)</span
                        ></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Flats_Apartments/Lahore_Gulshan_e_Lahore-498-1.html"
                        class="odd-li"
                        >Gulshan-e-Lahore<span class="li-span">(2)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Flats_Apartments/Lahore_GT_Road-472-1.html"
                        class="odd-li"
                        >GT Road<span class="li-span">(2)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Flats_Apartments/Lahore_Samanabad-377-1.html"
                        class="odd-li"
                        >Samanabad<span class="li-span">(2)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Flats_Apartments/Lahore_Central_Park_Housing_Scheme-1013-1.html"
                        class="odd-li"
                        >Central Park Housing Scheme<span class="li-span"
                          >(2)</span
                        ></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Flats_Apartments/Lahore_Thokar_Niaz_Baig-145-1.html"
                        class="odd-li"
                        >Thokar Niaz Baig<span class="li-span">(2)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Flats_Apartments/Lahore_Gajju_Matah-9329-1.html"
                        class="odd-li"
                        >Gajju Matah<span class="li-span">(1)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Flats_Apartments/Lahore_Millat_Road-10330-1.html"
                        class="odd-li"
                        >Millat Road<span class="li-span">(1)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Flats_Apartments/Lahore_Maryam_Town-12142-1.html"
                        class="odd-li"
                        >Maryam Town<span class="li-span">(1)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Flats_Apartments/Lahore_Lahore_Villas-12049-1.html"
                        class="odd-li"
                        >Lahore Villas<span class="li-span">(1)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Flats_Apartments/Lahore_Wafaqi_Colony-4380-1.html"
                        class="odd-li"
                        >Wafaqi Colony<span class="li-span">(1)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Flats_Apartments/Lahore_Qartaba_Chowk-12099-1.html"
                        class="odd-li"
                        >Qartaba Chowk<span class="li-span">(1)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Flats_Apartments/Lahore_Multan_Road-48-1.html"
                        class="odd-li"
                        >Multan Road<span class="li-span">(1)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Flats_Apartments/Lahore_Rehmanpura__Ferozpur_Road_-1683-1.html"
                        class="odd-li"
                        >Rehmanpura (Ferozpur Road)<span class="li-span"
                          >(1)</span
                        ></a
                      >
                    </li>
                  </ul>
                </div>
                <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                  <ul class="list-inner list-unstyled">
                    <li class="even-li">
                      <a
                        href="/Flats_Apartments/Lahore_Punjab_Govt_Employees_Society-4430-1.html"
                        class="odd-li"
                        >Punjab Govt Employees Society<span class="li-span"
                          >(1)</span
                        ></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Flats_Apartments/Lahore_Al_Hafiz_Town-10154-1.html"
                        class="odd-li"
                        >Al-Hafiz Town<span class="li-span">(1)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Flats_Apartments/Lahore_Fazaia_Housing_Scheme-1677-1.html"
                        class="odd-li"
                        >Fazaia Housing Scheme<span class="li-span"
                          >(1)</span
                        ></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Flats_Apartments/Lahore_Chauburji_Chowk-12203-1.html"
                        class="odd-li"
                        >Chauburji Chowk<span class="li-span">(1)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Flats_Apartments/Lahore_Faisal_Town-79-1.html"
                        class="odd-li"
                        >Faisal Town<span class="li-span">(1)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Flats_Apartments/Lahore_Shadman-15803-1.html"
                        class="odd-li"
                        >Shadman<span class="li-span">(1)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Flats_Apartments/Lahore_Valencia_Housing_Society-373-1.html"
                        class="odd-li"
                        >Valencia Housing Society<span class="li-span"
                          >(1)</span
                        ></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Flats_Apartments/Lahore_Mozang-8117-1.html"
                        class="odd-li"
                        >Mozang<span class="li-span">(1)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Flats_Apartments/Lahore_Wahdat_Road-634-1.html"
                        class="odd-li"
                        >Wahdat Road<span class="li-span">(1)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Flats_Apartments/Lahore_Sant_Nagar-4537-1.html"
                        class="odd-li"
                        >Sant Nagar<span class="li-span">(1)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Flats_Apartments/Lahore_Revenue_Society-1359-1.html"
                        class="odd-li"
                        >Revenue Society<span class="li-span">(1)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Flats_Apartments/Lahore_Nawab_Town-4424-1.html"
                        class="odd-li"
                        >Nawab Town<span class="li-span">(1)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Flats_Apartments/Lahore_Ferozepur_Road-81-1.html"
                        class="odd-li"
                        >Ferozepur Road<span class="li-span">(1)</span></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Flats_Apartments/Lahore_Punjab_Small_Industries_Colony-4420-1.html"
                        class="odd-li"
                        >Punjab Small Industries Colony<span class="li-span"
                          >(1)</span
                        ></a
                      >
                    </li>
                    <li class="even-li">
                      <a
                        href="/Flats_Apartments/Lahore_Shama_Road-12148-1.html"
                        class="odd-li"
                        >Shama Road<span class="li-span">(1)</span></a
                      >
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="d-flex justify-content-center mb-3">
            <a href="" class="primary-anchor"
              >View All Locations in Lahore</a
            >
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- list-grid-view-properties -->
  <section>
    <div class="wrapper-for-all">
      <div class="custom-container">
        <div class="inner-container">
          <div
            class="search-hits-header d-flex flex-row justify-content-between gap-3"
          >
            <div class="d-flex flex-row gap-1">
              <span class="summary-text">1 to 25 of 21,787 Houses</span>
            </div>
            <div class="d-flex flex-row gap-3">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="grid-list-svg active"
                viewBox="0 0 32 32"
                id="list-view"
              >
                <path
                  d="M4.6 4.3c0 1.3-1 2.3-2.3 2.3S0 5.6 0 4.3C0 3 1 2 2.3 2s2.3 1 2.3 2.3M11.5 2h18.3C31 2 32 3 32 4.3c0 1.3-1 2.3-2.3 2.3H11.5a2.6 2.6 0 0 1-2.3-2.3c0-1.3 1-2.3 2.3-2.3zM4.6 16c0 1.3-1 2.3-2.3 2.3S0 17.3 0 16s1-2.3 2.3-2.3 2.3 1 2.3 2.3m6.9-2.3h18.3c1.2.1 2.2 1.1 2.3 2.3 0 1.3-1 2.3-2.3 2.3H11.5A2.6 2.6 0 0 1 9.2 16c0-1.3 1-2.3 2.3-2.3zm-6.9 14c0 1.3-1 2.3-2.3 2.3S0 29 0 27.7s1-2.3 2.3-2.3 2.3 1 2.3 2.3m6.9-2.3h18.3c1.2.1 2.2 1.1 2.3 2.3 0 1.3-1 2.3-2.3 2.3H11.5a2.6 2.6 0 0 1-2.3-2.3c0-1.3 1-2.3 2.3-2.3z"
                ></path>
              </svg>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="grid-list-svg "
                viewBox="0 0 32 32"
                id="grid-view"
              >
                <path
                  d="M0 7V1.8C0 .8.8 0 1.8 0H7c1 0 1.8.8 1.8 1.8V7C8.8 8 8 8.8 7 8.8H1.8C.8 8.8 0 8 0 7zm25 1.8h5.2c1 0 1.8-.8 1.8-1.8V1.8c0-1-.8-1.8-1.8-1.8H25c-1 0-1.8.8-1.8 1.8V7c0 1 .8 1.8 1.8 1.8zm-11.6 0h5.2c1 0 1.8-.8 1.8-1.8V1.8c0-1-.8-1.8-1.8-1.8h-5.2c-1 0-1.8.8-1.8 1.8V7c0 1 .8 1.8 1.8 1.8zm-1.8 9.7c0 1 .8 1.8 1.8 1.8h5.2c1 0 1.8-.8 1.8-1.8v-5.2c0-1-.8-1.8-1.8-1.8h-5.2c-1 0-1.8.8-1.8 1.8v5.2zm0 11.7c0 1 .8 1.8 1.8 1.8h5.2c1 0 1.8-.8 1.8-1.8V25c0-1-.8-1.8-1.8-1.8h-5.2c-1 0-1.8.8-1.8 1.8v5.2zm18.6-7H25c-1 0-1.8.8-1.8 1.8v5.2c0 1 .8 1.8 1.8 1.8h5.2c1 0 1.8-.8 1.8-1.8V25c0-1-.8-1.8-1.8-1.8zm0-11.6H25c-1 0-1.8.8-1.8 1.8v5.2c0 1 .8 1.8 1.8 1.8h5.2c1 0 1.8-.8 1.8-1.8v-5.2c0-1-.8-1.8-1.8-1.8zM0 30.2c0 1 .8 1.8 1.8 1.8H7c1 0 1.8-.8 1.8-1.8V25c0-1-.8-1.8-1.8-1.8H1.8C.8 23.2 0 24 0 25v5.2zm0-11.6c0 1 .8 1.8 1.8 1.8H7c1 0 1.8-.8 1.8-1.8v-5.2c0-1-.8-1.8-1.8-1.8H1.8c-1 0-1.8.8-1.8 1.8v5.2z"
                ></path>
              </svg>
            </div>
          </div>
          <ul class="properties-cards active">
            <!-- super-hot -->
            <li class="prop-card-child super-hot">
              <div
                id="propcardsliderhot"
                class="carousel slide"
                data-bs-ride="carousel"
              >
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="image-wrapper position-relative">
                      <figure class="m-0">
                        <img
                          src="{{ asset('zameen/search/assets/images/screencapture-file-C-Users-Touch-Desktop-zameen-index-html-2023-12-23-19_31_15.png') }}"
                          alt=""
                          srcset=""
                        />
                      </figure>
                      <div
                        class="top-data d-flex flex-row justify-content-between align-items-center"
                      >
                        <label class="super-hot-label">super hot</label>
                        <label class="titanium">Titanium</label>
                      </div>
                      <div
                        class="bottom-data d-flex flex-row justify-content-between align-items-center"
                      >
                        <div
                          class="bg-light-black d-flex flex-row gap-1 align-items-center"
                        >
                          <span class="view-count-white">11</span>
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 16 16"
                            class="white-svg"
                          >
                            <path fill="none" d="M0 0h16v16H0z"></path>
                            <g fill="#fff" data-name="Icon ionic-ios-camera">
                              <path
                                d="M9.8 8.24a2.08 2.08 0 1 1-2.08-2.09 2.08 2.08 0 0 1 2.08 2.1z"
                              ></path>
                              <path
                                d="M13.57 4.06H11.6a.59.59 0 0 1-.44-.2c-1.03-1.15-1.4-1.54-1.83-1.54h-3.1c-.43 0-.84.4-1.88 1.55a.58.58 0 0 1-.43.2h-.14v-.3a.3.3 0 0 0-.29-.29h-.94c-.16 0-.3.13-.3.58H2A1.18 1.18 0 0 0 .77 5.18v6.37a1.25 1.25 0 0 0 1.21 1.2h11.6a1.16 1.16 0 0 0 1.1-1.2V5.17a1.08 1.08 0 0 0-1.1-1.1zm-5.7 7.26a3.1 3.1 0 1 1 2.95-2.95 3.1 3.1 0 0 1-2.95 2.95zm3.33-5.16a.47.47 0 1 1 .47-.47.47.47 0 0 1-.47.47z"
                              ></path>
                            </g>
                          </svg>
                        </div>
                        <div
                          class="bg-light-black d-flex flex-row gap-1 align-items-center"
                        >
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="white-svg"
                            viewBox="0 0 9 13"
                            style="width: 0.9rem; height: 0.8rem"
                          >
                            <path
                              fill="#FFF"
                              d="M4.5 0C2 0 0 2 0 4.4 0 7.8 4.5 13 4.5 13S9 7.8 9 4.4C9 2 7 0 4.5 0zm0 6.3c-1.1 0-1.9-.9-1.9-1.9a2 2 0 0 1 1.9-1.9c1.1 0 1.9.8 1.9 1.9 0 1-.8 1.9-1.9 1.9z"
                            ></path>
                          </svg>
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="white-svg"
                            viewBox="0 0 13 12"
                            style="width: 0.9rem; height: 1.2rem"
                          >
                            <path
                              fill="#FFF"
                              d="M9.7 2V0L13 3.3 9.7 6.6V4.3c-3.9.5-5.8 4.8-5.8 4.8 0-3.6 2.5-6.7 5.8-7.1zm1.2 9.2H.8V2.5H7a12 12 0 0 1 2-.8H.4c-.2 0-.4.2-.4.4v9.5c0 .3.2.4.4.4h10.9c.2 0 .4-.2.4-.4V5.2l-.8.8v5.2z"
                            ></path>
                          </svg>
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            overflow="visible"
                            viewBox="0 0 20 18.4"
                            class="white-svg"
                            style="width: 0.9rem; height: 0.8rem"
                          >
                            <path
                              d="M10 18.4L8.6 17C3.4 12.4 0 9.3 0 5.5A5.5 5.5 0 0 1 5.5 0 6 6 0 0 1 10 2a6 6 0 0 1 4.5-2A5.5 5.5 0 0 1 20 5.5c0 3.8-3.4 6.9-8.6 11.5z"
                            ></path>
                          </svg>
                        </div>
                      </div>
                      <!-- slider -->
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="image-wrapper position-relative">
                      <figure class="m-0">
                        <img
                          src="{{ asset('zameen/search/assets/images/screencapture-file-C-Users-Touch-Desktop-zameen-index-html-2023-12-23-19_31_15.png') }}"
                          alt=""
                          srcset=""
                        />
                      </figure>
                      <div
                        class="top-data d-flex flex-row justify-content-between align-items-center"
                      >
                        <label class="super-hot-label">super hot</label>
                        <label class="titanium">Titanium</label>
                      </div>
                      <div
                        class="bottom-data d-flex flex-row justify-content-between align-items-center"
                      >
                        <div
                          class="bg-light-black d-flex flex-row gap-1 align-items-center"
                        >
                          <span class="view-count-white">11</span>
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 16 16"
                            class="white-svg"
                          >
                            <path fill="none" d="M0 0h16v16H0z"></path>
                            <g fill="#fff" data-name="Icon ionic-ios-camera">
                              <path
                                d="M9.8 8.24a2.08 2.08 0 1 1-2.08-2.09 2.08 2.08 0 0 1 2.08 2.1z"
                              ></path>
                              <path
                                d="M13.57 4.06H11.6a.59.59 0 0 1-.44-.2c-1.03-1.15-1.4-1.54-1.83-1.54h-3.1c-.43 0-.84.4-1.88 1.55a.58.58 0 0 1-.43.2h-.14v-.3a.3.3 0 0 0-.29-.29h-.94c-.16 0-.3.13-.3.58H2A1.18 1.18 0 0 0 .77 5.18v6.37a1.25 1.25 0 0 0 1.21 1.2h11.6a1.16 1.16 0 0 0 1.1-1.2V5.17a1.08 1.08 0 0 0-1.1-1.1zm-5.7 7.26a3.1 3.1 0 1 1 2.95-2.95 3.1 3.1 0 0 1-2.95 2.95zm3.33-5.16a.47.47 0 1 1 .47-.47.47.47 0 0 1-.47.47z"
                              ></path>
                            </g>
                          </svg>
                        </div>
                        <div
                          class="bg-light-black d-flex flex-row gap-1 align-items-center"
                        >
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="white-svg"
                            viewBox="0 0 9 13"
                            style="width: 0.9rem; height: 0.8rem"
                          >
                            <path
                              fill="#FFF"
                              d="M4.5 0C2 0 0 2 0 4.4 0 7.8 4.5 13 4.5 13S9 7.8 9 4.4C9 2 7 0 4.5 0zm0 6.3c-1.1 0-1.9-.9-1.9-1.9a2 2 0 0 1 1.9-1.9c1.1 0 1.9.8 1.9 1.9 0 1-.8 1.9-1.9 1.9z"
                            ></path>
                          </svg>
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="white-svg"
                            viewBox="0 0 13 12"
                            style="width: 0.9rem; height: 1.2rem"
                          >
                            <path
                              fill="#FFF"
                              d="M9.7 2V0L13 3.3 9.7 6.6V4.3c-3.9.5-5.8 4.8-5.8 4.8 0-3.6 2.5-6.7 5.8-7.1zm1.2 9.2H.8V2.5H7a12 12 0 0 1 2-.8H.4c-.2 0-.4.2-.4.4v9.5c0 .3.2.4.4.4h10.9c.2 0 .4-.2.4-.4V5.2l-.8.8v5.2z"
                            ></path>
                          </svg>
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            overflow="visible"
                            viewBox="0 0 20 18.4"
                            class="white-svg"
                            style="width: 0.9rem; height: 0.8rem"
                          >
                            <path
                              d="M10 18.4L8.6 17C3.4 12.4 0 9.3 0 5.5A5.5 5.5 0 0 1 5.5 0 6 6 0 0 1 10 2a6 6 0 0 1 4.5-2A5.5 5.5 0 0 1 20 5.5c0 3.8-3.4 6.9-8.6 11.5z"
                            ></path>
                          </svg>
                        </div>
                      </div>
                      <!-- slider -->
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="image-wrapper position-relative">
                      <figure class="m-0">
                        <img
                          src="{{ asset('zameen/search/assets/images/download (12).webp') }}"
                          alt=""
                          srcset=""
                        />
                      </figure>
                      <div
                        class="top-data d-flex flex-row justify-content-between align-items-center"
                      >
                        <label class="super-hot-label">super hot</label>
                        <label class="titanium">Titanium</label>
                      </div>
                      <div
                        class="bottom-data d-flex flex-row justify-content-between align-items-center"
                      >
                        <div
                          class="bg-light-black d-flex flex-row gap-1 align-items-center"
                        >
                          <span class="view-count-white">11</span>
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 16 16"
                            class="white-svg"
                          >
                            <path fill="none" d="M0 0h16v16H0z"></path>
                            <g fill="#fff" data-name="Icon ionic-ios-camera">
                              <path
                                d="M9.8 8.24a2.08 2.08 0 1 1-2.08-2.09 2.08 2.08 0 0 1 2.08 2.1z"
                              ></path>
                              <path
                                d="M13.57 4.06H11.6a.59.59 0 0 1-.44-.2c-1.03-1.15-1.4-1.54-1.83-1.54h-3.1c-.43 0-.84.4-1.88 1.55a.58.58 0 0 1-.43.2h-.14v-.3a.3.3 0 0 0-.29-.29h-.94c-.16 0-.3.13-.3.58H2A1.18 1.18 0 0 0 .77 5.18v6.37a1.25 1.25 0 0 0 1.21 1.2h11.6a1.16 1.16 0 0 0 1.1-1.2V5.17a1.08 1.08 0 0 0-1.1-1.1zm-5.7 7.26a3.1 3.1 0 1 1 2.95-2.95 3.1 3.1 0 0 1-2.95 2.95zm3.33-5.16a.47.47 0 1 1 .47-.47.47.47 0 0 1-.47.47z"
                              ></path>
                            </g>
                          </svg>
                        </div>
                        <div
                          class="bg-light-black d-flex flex-row gap-1 align-items-center"
                        >
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="white-svg"
                            viewBox="0 0 9 13"
                            style="width: 0.9rem; height: 0.8rem"
                          >
                            <path
                              fill="#FFF"
                              d="M4.5 0C2 0 0 2 0 4.4 0 7.8 4.5 13 4.5 13S9 7.8 9 4.4C9 2 7 0 4.5 0zm0 6.3c-1.1 0-1.9-.9-1.9-1.9a2 2 0 0 1 1.9-1.9c1.1 0 1.9.8 1.9 1.9 0 1-.8 1.9-1.9 1.9z"
                            ></path>
                          </svg>
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="white-svg"
                            viewBox="0 0 13 12"
                            style="width: 0.9rem; height: 1.2rem"
                          >
                            <path
                              fill="#FFF"
                              d="M9.7 2V0L13 3.3 9.7 6.6V4.3c-3.9.5-5.8 4.8-5.8 4.8 0-3.6 2.5-6.7 5.8-7.1zm1.2 9.2H.8V2.5H7a12 12 0 0 1 2-.8H.4c-.2 0-.4.2-.4.4v9.5c0 .3.2.4.4.4h10.9c.2 0 .4-.2.4-.4V5.2l-.8.8v5.2z"
                            ></path>
                          </svg>
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            overflow="visible"
                            viewBox="0 0 20 18.4"
                            class="white-svg"
                            style="width: 0.9rem; height: 0.8rem"
                          >
                            <path
                              d="M10 18.4L8.6 17C3.4 12.4 0 9.3 0 5.5A5.5 5.5 0 0 1 5.5 0 6 6 0 0 1 10 2a6 6 0 0 1 4.5-2A5.5 5.5 0 0 1 20 5.5c0 3.8-3.4 6.9-8.6 11.5z"
                            ></path>
                          </svg>
                        </div>
                      </div>
                      <!-- slider -->
                    </div>
                  </div>
                </div>
                <button
                  class="carousel-control-prev min-slider"
                  type="button"
                  data-bs-target="#propcardsliderhot"
                  data-bs-slide="prev"
                >
                  <span class="carousel-control-prev-icon" aria-hidden="true">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="12"
                      height="12"
                      class="slider-svg back"
                      viewBox="0 0 32 32"
                    >
                      <path
                        d="M7.55 3.36c-.8-.8-.7-2.1.1-2.8.8-.7 2-.7 2.7 0l14 14c.8.8.8 2 0 2.8l-14 14c-.8.8-2 .8-2.8.1-.8-.8-.8-2-.1-2.8l.1-.1 12.6-12.5-12.6-12.7z"
                      ></path>
                    </svg>
                  </span>
                  <span class="visually-hidden"> </span>
                </button>
                <button
                  class="carousel-control-next min-slider"
                  type="button"
                  data-bs-target="#propcardsliderhot"
                  data-bs-slide="next"
                >
                  <span class="carousel-control-next-icon" aria-hidden="true">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="12"
                      height="12"
                      class="slider-svg"
                      viewBox="0 0 32 32"
                    >
                      <path
                        d="M7.55 3.36c-.8-.8-.7-2.1.1-2.8.8-.7 2-.7 2.7 0l14 14c.8.8.8 2 0 2.8l-14 14c-.8.8-2 .8-2.8.1-.8-.8-.8-2-.1-2.8l.1-.1 12.6-12.5-12.6-12.7z"
                      ></path>
                    </svg>
                  </span>
                  <span class="visually-hidden"> </span>
                </button>
              </div>
              <div class="card-body-custom">
                <div class="d-flex flex-row justify-content-between gap-2">
                  <span class="prop-count">Added: 33 minutes ago</span>
                  <div class="d-flex flex-row gap-1 align-items-center">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="c1a24809"
                      viewBox="0 0 32 32"
                      style="width: 1rem; height: 1rem"
                    >
                      <g fill="#C32C2B">
                        <path
                          d="M6.4 27.4h-.2l-.1-.3c-3-3.8-3.5-8.4-1.6-13.6-.6-1-1-2-1.1-3.2l-.2-.3-.3.1c-2.6 4.3-4.8 10.6-.5 16 1.8 1.8 4.3 3 6.9 3.3a8 8 0 0 1-2.9-2z"
                        ></path>
                        <path
                          d="M15.6 29.6c-3.1.1-6.1-1-8.3-3.3-4.3-5.4-2.1-11.7.5-16h.4c.1 0 .2 0 .2.2.1 1.7.8 3.2 2 4.4.4-1.4 1.1-2.8 2-4 1.8-2.3 2.5-5.2 2-8l.2-.4h.1l.2.1.5.6c1.2 1.4 2.3 3 3.2 4.5.9 2 1.5 3.8 1.8 6 .7-.6 1.3-1.3 1.7-2 .3-1 .3-2-.1-3l.1-.4h.4a16 16 0 0 1 4.9 11.8 10 10 0 0 1-6.8 9c-1.7.3-3.3.5-5 .5zm-.9-13.8c-.8.8-1.5 1.8-2.1 2.8a9.1 9.1 0 0 0-1.4 4.2c0 3.6 2 6.2 4.6 6.2 1.4 0 2.8-.6 3.7-1.7 1-1 1.4-2.7 1.2-4.2-.4-1.6-1.1-3.2-2.2-4.5-.2.6-.5 1.1-.9 1.5l-.6.5h-.1c-.5 0-.9-.3-1.3-.7a5.8 5.8 0 0 1-.9-4z"
                        ></path>
                        <path
                          d="M31.9 18a15 15 0 0 0-4.8-9.8h-.4c-.1.1-.2.2-.1.3.3 1 .4 2 .1 3l-.1.1c1 2 1.7 4.1 1.9 6.3.6 4.7-1.8 9.4-6 11.6.9 0 1.8-.3 2.7-.6C29 27.5 31.7 24 32 20l-.1-2z"
                        ></path>
                      </g>
                    </svg>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 32 32"
                      aria-label="Trusted badge"
                      style="width: 1rem; height: 1rem"
                    >
                      <g fill="#34A048">
                        <path
                          d="M25.3 16.8V6.5l-5-1.3-4.1-1h-.3l-4 1c-1.8.3-3.5.8-5.3 1.2V17c-.1 2.1.7 4.2 2 5.8 2 2.3 4.5 4.1 7.2 5.2 2.5-1 4.7-2.5 6.6-4.4 2-1.7 3-4.2 2.9-6.7zm-3.2-4.4l-2.5 3.2-4 5.2c-.8 1-1.3 1-2.1 0L9.9 16a1 1 0 0 1 0-1.5c.4-.4 1.1-.3 1.5.1l2.6 2.3.6.5.3-.5 5.6-5.5.7-.5c.4 0 .9.1 1.1.5.1.2.1.7-.2 1.1z"
                        ></path>
                        <path
                          d="M29.1 16.8V5a2 2 0 0 0-1.7-2.2l-6-1.5L16.8.1h-1.7l-4.5 1.1-6.1 1.5C3.5 3 2.7 4 2.8 5v11.9c-.1 3 1 6 2.9 8.2a25 25 0 0 0 9.3 6.7l.9.2c.3 0 .7 0 1-.2a24 24 0 0 0 8.4-5.7c2.6-2.3 4-5.7 3.8-9.2zm-4.8 8.5c-2.3 2.3-5 4.1-7.9 5.3-.2.1-.5.1-.8 0a22 22 0 0 1-8.8-6.3c-1.8-2-2.7-4.7-2.6-7.4V5c0-.5.1-.8.6-.9l10.6-2.6h1C20 2.4 23.5 3.2 27 4c.5.1.6.4.6.8v11.8c.3 3.4-1 6.5-3.3 8.7z"
                        ></path>
                      </g>
                    </svg>
                  </div>
                </div>
                <div class="d-flex flex-column gap-1 my-3">
                  <p class="prop-price-text"><span>PKR</span> 1.48 Crore</p>
                  <p class="prop-price-text line-clamp-one">
                    Park View City, Lahore
                  </p>
                </div>
                <div class="d-flex flex-row gap-2">
                  <div class="d-flex flex-row gap-1 align-items-center">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24"
                      class="svg-custom"
                    >
                      <g fill="none">
                        <path d="M0 0h24v24H0z"></path>
                        <g data-name="Icon awesome-bed">
                          <path
                            d="M8.4 11.8a2 2 0 1 0-2-2 2 2 0 0 0 2 2zm8.8-3.2h-5.6a.4.4 0 0 0-.4.4v3.6H5.6V7.4a.4.4 0 0 0-.4-.4h-.8a.4.4 0 0 0-.4.4v8.8a.4.4 0 0 0 .4.4h.8a.4.4 0 0 0 .4-.4V15h12.8v1.2a.4.4 0 0 0 .4.4h.8a.4.4 0 0 0 .4-.4v-4.8a2.8 2.8 0 0 0-2.8-2.8z"
                          ></path>
                          <path
                            fill="#000"
                            d="M13.2 10.6V13H18v-1.6a.8.8 0 0 0-.8-.8h-4M4.4 7h.8c.22 0 .4.18.4.4v5.2h5.6V9c0-.22.18-.4.4-.4h5.6a2.8 2.8 0 0 1 2.8 2.8v4.8a.4.4 0 0 1-.4.4h-.8a.4.4 0 0 1-.4-.4V15H5.6v1.2a.4.4 0 0 1-.4.4h-.8a.4.4 0 0 1-.4-.4V7.4c0-.22.18-.4.4-.4zm4 .8a2 2 0 1 1 0 4 2 2 0 0 1 0-4z"
                          ></path>
                        </g>
                      </g>
                    </svg>
                    <span class="font-weight-500">3</span>
                  </div>
                  <div class="d-flex flex-row gap-1 align-items-center">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24"
                      class="svg-custom"
                    >
                      <g fill="none">
                        <g data-name="Icon awesome-bath">
                          <path
                            d="M19.25 12H6.5V7.5a1 1 0 0 1 1.84-.54 2.12 2.12 0 0 0 .22 2.6.38.38 0 0 0 0 .5l.37.37a.38.38 0 0 0 .53 0l2.97-2.98a.38.38 0 0 0 0-.52l-.36-.36a.38.38 0 0 0-.5-.01 2.12 2.12 0 0 0-2.02-.48A2.5 2.5 0 0 0 5 7.5V12h-.25a.75.75 0 0 0-.75.75v.5a.75.75 0 0 0 .75.75H5v1a3 3 0 0 0 1 2.24v1a.75.75 0 0 0 .75.76h.5a.75.75 0 0 0 .75-.75V18h8v.25a.75.75 0 0 0 .75.75h.5a.75.75 0 0 0 .75-.75v-1.01A3 3 0 0 0 19 15v-1h.25a.75.75 0 0 0 .75-.75v-.5a.75.75 0 0 0-.75-.75z"
                          ></path>
                          <path
                            fill="#000"
                            d="M7 14v1c0 .4.2.63.33.75l.29.25h8.76l.3-.25A1 1 0 0 0 17 15v-1H7m.5-9c.85 0 1.6.43 2.05 1.08a2.12 2.12 0 0 1 2 .48.37.37 0 0 1 .52 0l.36.37c.14.14.14.38 0 .53l-2.97 2.97a.38.38 0 0 1-.53 0l-.36-.36a.37.37 0 0 1 0-.5 2.12 2.12 0 0 1-.23-2.6 1 1 0 0 0-1.84.54v4.5h12.75c.4 0 .75.34.75.75v.5c0 .41-.34.75-.75.75H19v1a3 3 0 0 1-1 2.24v1c0 .42-.34.76-.75.76h-.5a.75.75 0 0 1-.75-.75v-.25H8v.25c0 .41-.34.75-.75.75h-.5a.75.75 0 0 1-.75-.76v-1.01A3 3 0 0 1 5 15v-1h-.25a.75.75 0 0 1-.75-.75v-.5c0-.4.34-.75.75-.75H5V7.5A2.5 2.5 0 0 1 7.5 5z"
                          ></path>
                        </g>
                        <path d="M0 0h24v24H0z"></path>
                      </g>
                    </svg>
                    <span class="font-weight-500">4</span>
                  </div>
                  <div class="d-flex flex-row gap-1 align-items-center">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24"
                      class="svg-custom"
                    >
                      <path
                        d="M10.4 16.83L9.53 16 8.1 17.4 8 6.57l1.5 1.56.9-.95L7.23 4l-3.2 3.17.9.95 1.5-1.56.12 10.85-1.6-1.51-.92.93L7.22 20zm8.8 2.37a.8.8 0 0 0 .8-.8V5.6a.8.8 0 0 0-.8-.8h-4.8a.8.8 0 0 0-.8.8v12.8a.8.8 0 0 0 .8.8zm-.8-1.6h-3.2V16h1.6v-1.6h-1.6v-1.6h1.6v-1.6h-1.6V9.6h1.6V8h-1.6V6.4h3.2z"
                      ></path>
                    </svg>
                    <span class="font-weight-500">Marla</span>
                  </div>
                </div>
                <div class="mt-2">
                  <p
                    class="prop-price-text line-clamp-one font-weight-400 font-size-14 detial-text-top"
                  >
                    Park View City, Lahore
                  </p>
                  <div class="detail-text flex-row align-items-center">
                    <div class="cf36e19e">
                      <span class="b779b320"
                        >Lake City Lahore Covered over an a</span
                      >
                    </div>
                    ...<a href="#" class="_6e9f9ae0 d-inline-block">more</a>
                  </div>
                </div>
                <div class="d-flex justify-content-between gap-1">
                  <div
                    class="card-btns d-flex flex-row gap-2 align-items-end mt-1"
                  >
                    <button class="email-msg-btn">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 32 32"
                        style="height: 1.1rem; width: 1rem"
                      >
                        <path
                          fill="#6CACE3"
                          d="M28.7 5.3H3.3A3.3 3.3 0 0 0 0 8.6v14.8c0 1.8 1.4 3.3 3.3 3.3h25.4c1.8 0 3.3-1.4 3.3-3.3V8.7c0-1.9-1.4-3.3-3.3-3.4zm-17 12l-8 6.6c-.3.1-.6.1-1-.2-.2-.3 0-.7.2-1l8-6.6c.3-.3.7-.1 1 .1.2.4.1.8-.2 1zm17.5 6.4c-.3.2-.6.3-1 0l-8-6.6c-.2-.1-.2-.5 0-.8 0-.3.6-.3.8 0l8 6.6c.4.1.4.5.2.8zm0-14.5l-11 7.5c-.6.4-1.4.6-2 .7-.9 0-1.6-.3-2.2-.7L3 9.2c-.4-.2-.4-.6-.2-.9.2-.3.6-.4 1-.2l10.8 7.5c.8.5 1.9.5 2.7 0l11-7.5c.2-.3.6-.1.8 0 .3.4.3.8 0 1z"
                        ></path>
                      </svg>
                    </button>
                    <button class="email-msg-btn">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        data-name="Group 5"
                        viewBox="0 0 20 20"
                        style="height: 1.3rem; width: 1.3rem"
                      >
                        <path fill="none" d="M0 0h20v20H0z"></path>
                        <path
                          fill="#6CACE3"
                          d="M10 3.6a6.4 6.4 0 0 0-5.18 10.15l-.8 2.38 2.46-.79A6.4 6.4 0 1 0 10 3.6z"
                        ></path>
                        <path
                          fill="#fafafa"
                          d="M13.83 12.72a1.86 1.86 0 0 1-1.3.93c-.34.08-.79.13-2.3-.5a8.26 8.26 0 0 1-3.27-2.9 3.79 3.79 0 0 1-.78-2 2.12 2.12 0 0 1 .67-1.61.95.95 0 0 1 .67-.24h.22c.2.02.3.03.42.34l.6 1.43a.4.4 0 0 1 .02.35 1.14 1.14 0 0 1-.21.3c-.1.12-.2.2-.29.32-.09.1-.19.22-.08.42a5.87 5.87 0 0 0 1.07 1.33 4.83 4.83 0 0 0 1.54.96.41.41 0 0 0 .47-.08 8 8 0 0 0 .51-.68.37.37 0 0 1 .47-.15c.18.07 1.12.53 1.32.63s.32.14.36.23a1.66 1.66 0 0 1-.11.92z"
                        ></path>
                      </svg>
                    </button>
                    <button
                      class="call-btn d-flex flex-row align-items-center gap-2"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="16"
                        viewBox="0 0 16 16"
                        fill="#fff"
                        class="_40c10793"
                      >
                        <path
                          d="M13.3 10.3A7.6 7.6 0 0 1 11 10a.7.7 0 0 0-.7.1l-1 1.4a10.1 10.1 0 0 1-4.6-4.6L6 5.7A.7.7 0 0 0 6 5a7.4 7.4 0 0 1-.3-2.3A.7.7 0 0 0 5 2H2.8c-.4 0-.8.2-.8.7A11.4 11.4 0 0 0 13.3 14a.7.7 0 0 0 .7-.8V11a.7.7 0 0 0-.7-.6z"
                        ></path>
                      </svg>
                      <span>CALL</span>
                    </button>
                  </div>
                    <div class="hover-prop">
                      <img
                        src="as{{ asset('zameen/search/assets/images/real-estate-small.jpg') }}"
                        class="before-hover"
                      />
                      <div class="after-hover">
                        <div class="d-flex flex-column gap-1">
                          <img
                          src="{{ asset('zameen/search/assets/images/real-estate-small.jpg') }}"
                          class="before-hover"
                        />
                        <span class="muted-text">Registerd Since : 2023</span>
                        <p class="font-weight-500 line-clamp-one">2024 Propeties for sale</p>
                        <p class="font-weight-500 line-clamp-one">0 Propeties for Rent</p>
                        </div>
                      </div>
                    </div>
                 
                </div>
              </div>
            </li>
            <!-- hot -->
            <li class="prop-card-child hot">
              <div class="image-wrapper position-relative">
                <figure class="m-0">
                  <img src="{{ asset('zameen/search/assets/images/properties.jpg') }}" alt="" srcset="" />
                </figure>
                <div
                  class="top-data d-flex flex-row justify-content-between align-items-center"
                >
                  <label class="hot-label">hot</label>
                  <label class="titanium">Titanium</label>
                </div>
                <div
                  class="bottom-data d-flex flex-row justify-content-between align-items-center"
                >
                  <div
                    class="bg-light-black d-flex flex-row gap-1 align-items-center"
                  >
                    <span class="view-count-white">11</span>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 16 16"
                      class="white-svg"
                    >
                      <path fill="none" d="M0 0h16v16H0z"></path>
                      <g fill="#fff" data-name="Icon ionic-ios-camera">
                        <path
                          d="M9.8 8.24a2.08 2.08 0 1 1-2.08-2.09 2.08 2.08 0 0 1 2.08 2.1z"
                        ></path>
                        <path
                          d="M13.57 4.06H11.6a.59.59 0 0 1-.44-.2c-1.03-1.15-1.4-1.54-1.83-1.54h-3.1c-.43 0-.84.4-1.88 1.55a.58.58 0 0 1-.43.2h-.14v-.3a.3.3 0 0 0-.29-.29h-.94c-.16 0-.3.13-.3.58H2A1.18 1.18 0 0 0 .77 5.18v6.37a1.25 1.25 0 0 0 1.21 1.2h11.6a1.16 1.16 0 0 0 1.1-1.2V5.17a1.08 1.08 0 0 0-1.1-1.1zm-5.7 7.26a3.1 3.1 0 1 1 2.95-2.95 3.1 3.1 0 0 1-2.95 2.95zm3.33-5.16a.47.47 0 1 1 .47-.47.47.47 0 0 1-.47.47z"
                        ></path>
                      </g>
                    </svg>
                  </div>
                  <div
                    class="bg-light-black d-flex flex-row gap-1 align-items-center"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="white-svg"
                      viewBox="0 0 9 13"
                      style="width: 0.9rem; height: 0.8rem"
                    >
                      <path
                        fill="#FFF"
                        d="M4.5 0C2 0 0 2 0 4.4 0 7.8 4.5 13 4.5 13S9 7.8 9 4.4C9 2 7 0 4.5 0zm0 6.3c-1.1 0-1.9-.9-1.9-1.9a2 2 0 0 1 1.9-1.9c1.1 0 1.9.8 1.9 1.9 0 1-.8 1.9-1.9 1.9z"
                      ></path>
                    </svg>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="white-svg"
                      viewBox="0 0 13 12"
                      style="width: 0.9rem; height: 1.2rem"
                    >
                      <path
                        fill="#FFF"
                        d="M9.7 2V0L13 3.3 9.7 6.6V4.3c-3.9.5-5.8 4.8-5.8 4.8 0-3.6 2.5-6.7 5.8-7.1zm1.2 9.2H.8V2.5H7a12 12 0 0 1 2-.8H.4c-.2 0-.4.2-.4.4v9.5c0 .3.2.4.4.4h10.9c.2 0 .4-.2.4-.4V5.2l-.8.8v5.2z"
                      ></path>
                    </svg>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      overflow="visible"
                      viewBox="0 0 20 18.4"
                      class="white-svg"
                      style="width: 0.9rem; height: 0.8rem"
                    >
                      <path
                        d="M10 18.4L8.6 17C3.4 12.4 0 9.3 0 5.5A5.5 5.5 0 0 1 5.5 0 6 6 0 0 1 10 2a6 6 0 0 1 4.5-2A5.5 5.5 0 0 1 20 5.5c0 3.8-3.4 6.9-8.6 11.5z"
                      ></path>
                    </svg>
                  </div>
                </div>
              </div>
              <div class="card-body-custom">
                <div class="d-flex flex-row justify-content-between gap-2">
                  <span class="prop-count">Added: 33 minutes ago</span>
                  <div class="d-flex flex-row gap-1 align-items-center">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 32 32"
                      class="c1a24809"
                      style="width: 1rem; height: 1rem"
                    >
                      <path
                        fill="#C22B2A"
                        d="M11.1 0c.8 2.3.6 4.9-.3 7.1-1.1 2-2.3 4-3.8 5.8a16.3 16.3 0 0 0-2.8 7.4c.1 6.5 5.4 11.8 12 11.7 3 .2 5.9-.9 8.1-2.9 1.8-1.8 3-4.2 3.3-6.8.6-4.2-.5-8.5-2.9-11.9.1 1.3 0 2.6-.4 3.8a5.3 5.3 0 0 1-3.6 3.4 4 4 0 0 1-4.1-1.3 5.5 5.5 0 0 1-.5-5.4c.7-1.7.7-3.6.1-5.3a8.6 8.6 0 0 0-2.6-3.7A9.2 9.2 0 0 0 11.1 0z"
                      ></path>
                    </svg>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 32 32"
                      aria-label="Trusted badge"
                      style="width: 1rem; height: 1rem"
                    >
                      <g fill="#34A048">
                        <path
                          d="M25.3 16.8V6.5l-5-1.3-4.1-1h-.3l-4 1c-1.8.3-3.5.8-5.3 1.2V17c-.1 2.1.7 4.2 2 5.8 2 2.3 4.5 4.1 7.2 5.2 2.5-1 4.7-2.5 6.6-4.4 2-1.7 3-4.2 2.9-6.7zm-3.2-4.4l-2.5 3.2-4 5.2c-.8 1-1.3 1-2.1 0L9.9 16a1 1 0 0 1 0-1.5c.4-.4 1.1-.3 1.5.1l2.6 2.3.6.5.3-.5 5.6-5.5.7-.5c.4 0 .9.1 1.1.5.1.2.1.7-.2 1.1z"
                        ></path>
                        <path
                          d="M29.1 16.8V5a2 2 0 0 0-1.7-2.2l-6-1.5L16.8.1h-1.7l-4.5 1.1-6.1 1.5C3.5 3 2.7 4 2.8 5v11.9c-.1 3 1 6 2.9 8.2a25 25 0 0 0 9.3 6.7l.9.2c.3 0 .7 0 1-.2a24 24 0 0 0 8.4-5.7c2.6-2.3 4-5.7 3.8-9.2zm-4.8 8.5c-2.3 2.3-5 4.1-7.9 5.3-.2.1-.5.1-.8 0a22 22 0 0 1-8.8-6.3c-1.8-2-2.7-4.7-2.6-7.4V5c0-.5.1-.8.6-.9l10.6-2.6h1C20 2.4 23.5 3.2 27 4c.5.1.6.4.6.8v11.8c.3 3.4-1 6.5-3.3 8.7z"
                        ></path>
                      </g>
                    </svg>
                  </div>
                </div>
                <div class="d-flex flex-column gap-1 my-3">
                  <p class="prop-price-text"><span>PKR</span> 1.48 Crore</p>
                  <p class="prop-price-text line-clamp-one">
                    Park View City, Lahore
                  </p>
                </div>
                <div class="d-flex flex-row gap-2">
                  <div class="d-flex flex-row gap-1 align-items-center">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24"
                      class="svg-custom"
                    >
                      <g fill="none">
                        <path d="M0 0h24v24H0z"></path>
                        <g data-name="Icon awesome-bed">
                          <path
                            d="M8.4 11.8a2 2 0 1 0-2-2 2 2 0 0 0 2 2zm8.8-3.2h-5.6a.4.4 0 0 0-.4.4v3.6H5.6V7.4a.4.4 0 0 0-.4-.4h-.8a.4.4 0 0 0-.4.4v8.8a.4.4 0 0 0 .4.4h.8a.4.4 0 0 0 .4-.4V15h12.8v1.2a.4.4 0 0 0 .4.4h.8a.4.4 0 0 0 .4-.4v-4.8a2.8 2.8 0 0 0-2.8-2.8z"
                          ></path>
                          <path
                            fill="#000"
                            d="M13.2 10.6V13H18v-1.6a.8.8 0 0 0-.8-.8h-4M4.4 7h.8c.22 0 .4.18.4.4v5.2h5.6V9c0-.22.18-.4.4-.4h5.6a2.8 2.8 0 0 1 2.8 2.8v4.8a.4.4 0 0 1-.4.4h-.8a.4.4 0 0 1-.4-.4V15H5.6v1.2a.4.4 0 0 1-.4.4h-.8a.4.4 0 0 1-.4-.4V7.4c0-.22.18-.4.4-.4zm4 .8a2 2 0 1 1 0 4 2 2 0 0 1 0-4z"
                          ></path>
                        </g>
                      </g>
                    </svg>
                    <span class="font-weight-500">3</span>
                  </div>
                  <div class="d-flex flex-row gap-1 align-items-center">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24"
                      class="svg-custom"
                    >
                      <g fill="none">
                        <g data-name="Icon awesome-bath">
                          <path
                            d="M19.25 12H6.5V7.5a1 1 0 0 1 1.84-.54 2.12 2.12 0 0 0 .22 2.6.38.38 0 0 0 0 .5l.37.37a.38.38 0 0 0 .53 0l2.97-2.98a.38.38 0 0 0 0-.52l-.36-.36a.38.38 0 0 0-.5-.01 2.12 2.12 0 0 0-2.02-.48A2.5 2.5 0 0 0 5 7.5V12h-.25a.75.75 0 0 0-.75.75v.5a.75.75 0 0 0 .75.75H5v1a3 3 0 0 0 1 2.24v1a.75.75 0 0 0 .75.76h.5a.75.75 0 0 0 .75-.75V18h8v.25a.75.75 0 0 0 .75.75h.5a.75.75 0 0 0 .75-.75v-1.01A3 3 0 0 0 19 15v-1h.25a.75.75 0 0 0 .75-.75v-.5a.75.75 0 0 0-.75-.75z"
                          ></path>
                          <path
                            fill="#000"
                            d="M7 14v1c0 .4.2.63.33.75l.29.25h8.76l.3-.25A1 1 0 0 0 17 15v-1H7m.5-9c.85 0 1.6.43 2.05 1.08a2.12 2.12 0 0 1 2 .48.37.37 0 0 1 .52 0l.36.37c.14.14.14.38 0 .53l-2.97 2.97a.38.38 0 0 1-.53 0l-.36-.36a.37.37 0 0 1 0-.5 2.12 2.12 0 0 1-.23-2.6 1 1 0 0 0-1.84.54v4.5h12.75c.4 0 .75.34.75.75v.5c0 .41-.34.75-.75.75H19v1a3 3 0 0 1-1 2.24v1c0 .42-.34.76-.75.76h-.5a.75.75 0 0 1-.75-.75v-.25H8v.25c0 .41-.34.75-.75.75h-.5a.75.75 0 0 1-.75-.76v-1.01A3 3 0 0 1 5 15v-1h-.25a.75.75 0 0 1-.75-.75v-.5c0-.4.34-.75.75-.75H5V7.5A2.5 2.5 0 0 1 7.5 5z"
                          ></path>
                        </g>
                        <path d="M0 0h24v24H0z"></path>
                      </g>
                    </svg>
                    <span class="font-weight-500">4</span>
                  </div>
                  <div class="d-flex flex-row gap-1 align-items-center">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24"
                      class="svg-custom"
                    >
                      <path
                        d="M10.4 16.83L9.53 16 8.1 17.4 8 6.57l1.5 1.56.9-.95L7.23 4l-3.2 3.17.9.95 1.5-1.56.12 10.85-1.6-1.51-.92.93L7.22 20zm8.8 2.37a.8.8 0 0 0 .8-.8V5.6a.8.8 0 0 0-.8-.8h-4.8a.8.8 0 0 0-.8.8v12.8a.8.8 0 0 0 .8.8zm-.8-1.6h-3.2V16h1.6v-1.6h-1.6v-1.6h1.6v-1.6h-1.6V9.6h1.6V8h-1.6V6.4h3.2z"
                      ></path>
                    </svg>
                    <span class="font-weight-500">Marla</span>
                  </div>
                </div>
                <div class="mt-2">
                  <p
                    class="prop-price-text line-clamp-one font-weight-400 font-size-14 detial-text-top"
                  >
                    Park View City, Lahore
                  </p>
                  <div class="detail-text flex-row align-items-center">
                    <div class="cf36e19e">
                      <span class="b779b320"
                        >Lake City Lahore Covered over an a</span
                      >
                    </div>
                    ...<a href="#" class="_6e9f9ae0 d-inline-block">more</a>
                  </div>
                </div>
                <div class="d-flex justify-content-between gap-1">
                  <div
                    class="card-btns d-flex flex-row gap-2 align-items-end mt-1"
                  >
                    <button class="email-msg-btn">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 32 32"
                        style="height: 1.1rem; width: 1rem"
                      >
                        <path
                          fill="#6CACE3"
                          d="M28.7 5.3H3.3A3.3 3.3 0 0 0 0 8.6v14.8c0 1.8 1.4 3.3 3.3 3.3h25.4c1.8 0 3.3-1.4 3.3-3.3V8.7c0-1.9-1.4-3.3-3.3-3.4zm-17 12l-8 6.6c-.3.1-.6.1-1-.2-.2-.3 0-.7.2-1l8-6.6c.3-.3.7-.1 1 .1.2.4.1.8-.2 1zm17.5 6.4c-.3.2-.6.3-1 0l-8-6.6c-.2-.1-.2-.5 0-.8 0-.3.6-.3.8 0l8 6.6c.4.1.4.5.2.8zm0-14.5l-11 7.5c-.6.4-1.4.6-2 .7-.9 0-1.6-.3-2.2-.7L3 9.2c-.4-.2-.4-.6-.2-.9.2-.3.6-.4 1-.2l10.8 7.5c.8.5 1.9.5 2.7 0l11-7.5c.2-.3.6-.1.8 0 .3.4.3.8 0 1z"
                        ></path>
                      </svg>
                    </button>
                    <button class="email-msg-btn">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        data-name="Group 5"
                        viewBox="0 0 20 20"
                        style="height: 1.3rem; width: 1.3rem"
                      >
                        <path fill="none" d="M0 0h20v20H0z"></path>
                        <path
                          fill="#6CACE3"
                          d="M10 3.6a6.4 6.4 0 0 0-5.18 10.15l-.8 2.38 2.46-.79A6.4 6.4 0 1 0 10 3.6z"
                        ></path>
                        <path
                          fill="#fafafa"
                          d="M13.83 12.72a1.86 1.86 0 0 1-1.3.93c-.34.08-.79.13-2.3-.5a8.26 8.26 0 0 1-3.27-2.9 3.79 3.79 0 0 1-.78-2 2.12 2.12 0 0 1 .67-1.61.95.95 0 0 1 .67-.24h.22c.2.02.3.03.42.34l.6 1.43a.4.4 0 0 1 .02.35 1.14 1.14 0 0 1-.21.3c-.1.12-.2.2-.29.32-.09.1-.19.22-.08.42a5.87 5.87 0 0 0 1.07 1.33 4.83 4.83 0 0 0 1.54.96.41.41 0 0 0 .47-.08 8 8 0 0 0 .51-.68.37.37 0 0 1 .47-.15c.18.07 1.12.53 1.32.63s.32.14.36.23a1.66 1.66 0 0 1-.11.92z"
                        ></path>
                      </svg>
                    </button>
                    <button
                      class="call-btn d-flex flex-row align-items-center gap-2"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="16"
                        viewBox="0 0 16 16"
                        fill="#fff"
                        class="_40c10793"
                      >
                        <path
                          d="M13.3 10.3A7.6 7.6 0 0 1 11 10a.7.7 0 0 0-.7.1l-1 1.4a10.1 10.1 0 0 1-4.6-4.6L6 5.7A.7.7 0 0 0 6 5a7.4 7.4 0 0 1-.3-2.3A.7.7 0 0 0 5 2H2.8c-.4 0-.8.2-.8.7A11.4 11.4 0 0 0 13.3 14a.7.7 0 0 0 .7-.8V11a.7.7 0 0 0-.7-.6z"
                        ></path>
                      </svg>
                      <span>CALL</span>
                    </button>
                  </div>
                    <div class="hover-prop">
                      <img
                        src="{{ asset('zameen/search/assets/images/real-estate-small.jpg') }}"
                        class="before-hover"
                      />
                      <div class="after-hover">
                        <div class="d-flex flex-column gap-1">
                          <img
                          src="{{ asset('zameen/search/assets/images/real-estate-small.jpg') }}"
                          class="before-hover"
                        />
                        <span class="muted-text">Registerd Since : 2023</span>
                        <p class="font-weight-500 line-clamp-one">2024 Propeties for sale</p>
                        <p class="font-weight-500 line-clamp-one">0 Propeties for Rent</p>
                        </div>
                      </div>
                    </div>
                 
                </div>
              </div>
            </li>
            <!-- hot -->
            <li class="prop-card-child hot">
              <div class="image-wrapper position-relative">
                <figure class="m-0">
                  <img src="{{ asset('zameen/search/assets/images/properties.jpg') }}" alt="" srcset="" />
                </figure>
                <div
                  class="top-data d-flex flex-row justify-content-between align-items-center"
                >
                  <label class="hot-label">hot</label>
                  <label class="titanium">Titanium</label>
                </div>
                <div
                  class="bottom-data d-flex flex-row justify-content-between align-items-center"
                >
                  <div
                    class="bg-light-black d-flex flex-row gap-1 align-items-center"
                  >
                    <span class="view-count-white">11</span>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 16 16"
                      class="white-svg"
                    >
                      <path fill="none" d="M0 0h16v16H0z"></path>
                      <g fill="#fff" data-name="Icon ionic-ios-camera">
                        <path
                          d="M9.8 8.24a2.08 2.08 0 1 1-2.08-2.09 2.08 2.08 0 0 1 2.08 2.1z"
                        ></path>
                        <path
                          d="M13.57 4.06H11.6a.59.59 0 0 1-.44-.2c-1.03-1.15-1.4-1.54-1.83-1.54h-3.1c-.43 0-.84.4-1.88 1.55a.58.58 0 0 1-.43.2h-.14v-.3a.3.3 0 0 0-.29-.29h-.94c-.16 0-.3.13-.3.58H2A1.18 1.18 0 0 0 .77 5.18v6.37a1.25 1.25 0 0 0 1.21 1.2h11.6a1.16 1.16 0 0 0 1.1-1.2V5.17a1.08 1.08 0 0 0-1.1-1.1zm-5.7 7.26a3.1 3.1 0 1 1 2.95-2.95 3.1 3.1 0 0 1-2.95 2.95zm3.33-5.16a.47.47 0 1 1 .47-.47.47.47 0 0 1-.47.47z"
                        ></path>
                      </g>
                    </svg>
                  </div>
                  <div
                    class="bg-light-black d-flex flex-row gap-1 align-items-center"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="white-svg"
                      viewBox="0 0 9 13"
                      style="width: 0.9rem; height: 0.8rem"
                    >
                      <path
                        fill="#FFF"
                        d="M4.5 0C2 0 0 2 0 4.4 0 7.8 4.5 13 4.5 13S9 7.8 9 4.4C9 2 7 0 4.5 0zm0 6.3c-1.1 0-1.9-.9-1.9-1.9a2 2 0 0 1 1.9-1.9c1.1 0 1.9.8 1.9 1.9 0 1-.8 1.9-1.9 1.9z"
                      ></path>
                    </svg>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="white-svg"
                      viewBox="0 0 13 12"
                      style="width: 0.9rem; height: 1.2rem"
                    >
                      <path
                        fill="#FFF"
                        d="M9.7 2V0L13 3.3 9.7 6.6V4.3c-3.9.5-5.8 4.8-5.8 4.8 0-3.6 2.5-6.7 5.8-7.1zm1.2 9.2H.8V2.5H7a12 12 0 0 1 2-.8H.4c-.2 0-.4.2-.4.4v9.5c0 .3.2.4.4.4h10.9c.2 0 .4-.2.4-.4V5.2l-.8.8v5.2z"
                      ></path>
                    </svg>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      overflow="visible"
                      viewBox="0 0 20 18.4"
                      class="white-svg"
                      style="width: 0.9rem; height: 0.8rem"
                    >
                      <path
                        d="M10 18.4L8.6 17C3.4 12.4 0 9.3 0 5.5A5.5 5.5 0 0 1 5.5 0 6 6 0 0 1 10 2a6 6 0 0 1 4.5-2A5.5 5.5 0 0 1 20 5.5c0 3.8-3.4 6.9-8.6 11.5z"
                      ></path>
                    </svg>
                  </div>
                </div>
              </div>
              <div class="card-body-custom">
                <div class="d-flex flex-row justify-content-between gap-2">
                  <span class="prop-count">Added: 33 minutes ago</span>
                  <div class="d-flex flex-row gap-1 align-items-center">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 32 32"
                      class="c1a24809"
                      style="width: 1rem; height: 1rem"
                    >
                      <path
                        fill="#C22B2A"
                        d="M11.1 0c.8 2.3.6 4.9-.3 7.1-1.1 2-2.3 4-3.8 5.8a16.3 16.3 0 0 0-2.8 7.4c.1 6.5 5.4 11.8 12 11.7 3 .2 5.9-.9 8.1-2.9 1.8-1.8 3-4.2 3.3-6.8.6-4.2-.5-8.5-2.9-11.9.1 1.3 0 2.6-.4 3.8a5.3 5.3 0 0 1-3.6 3.4 4 4 0 0 1-4.1-1.3 5.5 5.5 0 0 1-.5-5.4c.7-1.7.7-3.6.1-5.3a8.6 8.6 0 0 0-2.6-3.7A9.2 9.2 0 0 0 11.1 0z"
                      ></path>
                    </svg>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 32 32"
                      aria-label="Trusted badge"
                      style="width: 1rem; height: 1rem"
                    >
                      <g fill="#34A048">
                        <path
                          d="M25.3 16.8V6.5l-5-1.3-4.1-1h-.3l-4 1c-1.8.3-3.5.8-5.3 1.2V17c-.1 2.1.7 4.2 2 5.8 2 2.3 4.5 4.1 7.2 5.2 2.5-1 4.7-2.5 6.6-4.4 2-1.7 3-4.2 2.9-6.7zm-3.2-4.4l-2.5 3.2-4 5.2c-.8 1-1.3 1-2.1 0L9.9 16a1 1 0 0 1 0-1.5c.4-.4 1.1-.3 1.5.1l2.6 2.3.6.5.3-.5 5.6-5.5.7-.5c.4 0 .9.1 1.1.5.1.2.1.7-.2 1.1z"
                        ></path>
                        <path
                          d="M29.1 16.8V5a2 2 0 0 0-1.7-2.2l-6-1.5L16.8.1h-1.7l-4.5 1.1-6.1 1.5C3.5 3 2.7 4 2.8 5v11.9c-.1 3 1 6 2.9 8.2a25 25 0 0 0 9.3 6.7l.9.2c.3 0 .7 0 1-.2a24 24 0 0 0 8.4-5.7c2.6-2.3 4-5.7 3.8-9.2zm-4.8 8.5c-2.3 2.3-5 4.1-7.9 5.3-.2.1-.5.1-.8 0a22 22 0 0 1-8.8-6.3c-1.8-2-2.7-4.7-2.6-7.4V5c0-.5.1-.8.6-.9l10.6-2.6h1C20 2.4 23.5 3.2 27 4c.5.1.6.4.6.8v11.8c.3 3.4-1 6.5-3.3 8.7z"
                        ></path>
                      </g>
                    </svg>
                  </div>
                </div>
                <div class="d-flex flex-column gap-1 my-3">
                  <p class="prop-price-text"><span>PKR</span> 1.48 Crore</p>
                  <p class="prop-price-text line-clamp-one">
                    Park View City, Lahore
                  </p>
                </div>
                <div class="d-flex flex-row gap-2">
                  <div class="d-flex flex-row gap-1 align-items-center">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24"
                      class="svg-custom"
                    >
                      <g fill="none">
                        <path d="M0 0h24v24H0z"></path>
                        <g data-name="Icon awesome-bed">
                          <path
                            d="M8.4 11.8a2 2 0 1 0-2-2 2 2 0 0 0 2 2zm8.8-3.2h-5.6a.4.4 0 0 0-.4.4v3.6H5.6V7.4a.4.4 0 0 0-.4-.4h-.8a.4.4 0 0 0-.4.4v8.8a.4.4 0 0 0 .4.4h.8a.4.4 0 0 0 .4-.4V15h12.8v1.2a.4.4 0 0 0 .4.4h.8a.4.4 0 0 0 .4-.4v-4.8a2.8 2.8 0 0 0-2.8-2.8z"
                          ></path>
                          <path
                            fill="#000"
                            d="M13.2 10.6V13H18v-1.6a.8.8 0 0 0-.8-.8h-4M4.4 7h.8c.22 0 .4.18.4.4v5.2h5.6V9c0-.22.18-.4.4-.4h5.6a2.8 2.8 0 0 1 2.8 2.8v4.8a.4.4 0 0 1-.4.4h-.8a.4.4 0 0 1-.4-.4V15H5.6v1.2a.4.4 0 0 1-.4.4h-.8a.4.4 0 0 1-.4-.4V7.4c0-.22.18-.4.4-.4zm4 .8a2 2 0 1 1 0 4 2 2 0 0 1 0-4z"
                          ></path>
                        </g>
                      </g>
                    </svg>
                    <span class="font-weight-500">3</span>
                  </div>
                  <div class="d-flex flex-row gap-1 align-items-center">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24"
                      class="svg-custom"
                    >
                      <g fill="none">
                        <g data-name="Icon awesome-bath">
                          <path
                            d="M19.25 12H6.5V7.5a1 1 0 0 1 1.84-.54 2.12 2.12 0 0 0 .22 2.6.38.38 0 0 0 0 .5l.37.37a.38.38 0 0 0 .53 0l2.97-2.98a.38.38 0 0 0 0-.52l-.36-.36a.38.38 0 0 0-.5-.01 2.12 2.12 0 0 0-2.02-.48A2.5 2.5 0 0 0 5 7.5V12h-.25a.75.75 0 0 0-.75.75v.5a.75.75 0 0 0 .75.75H5v1a3 3 0 0 0 1 2.24v1a.75.75 0 0 0 .75.76h.5a.75.75 0 0 0 .75-.75V18h8v.25a.75.75 0 0 0 .75.75h.5a.75.75 0 0 0 .75-.75v-1.01A3 3 0 0 0 19 15v-1h.25a.75.75 0 0 0 .75-.75v-.5a.75.75 0 0 0-.75-.75z"
                          ></path>
                          <path
                            fill="#000"
                            d="M7 14v1c0 .4.2.63.33.75l.29.25h8.76l.3-.25A1 1 0 0 0 17 15v-1H7m.5-9c.85 0 1.6.43 2.05 1.08a2.12 2.12 0 0 1 2 .48.37.37 0 0 1 .52 0l.36.37c.14.14.14.38 0 .53l-2.97 2.97a.38.38 0 0 1-.53 0l-.36-.36a.37.37 0 0 1 0-.5 2.12 2.12 0 0 1-.23-2.6 1 1 0 0 0-1.84.54v4.5h12.75c.4 0 .75.34.75.75v.5c0 .41-.34.75-.75.75H19v1a3 3 0 0 1-1 2.24v1c0 .42-.34.76-.75.76h-.5a.75.75 0 0 1-.75-.75v-.25H8v.25c0 .41-.34.75-.75.75h-.5a.75.75 0 0 1-.75-.76v-1.01A3 3 0 0 1 5 15v-1h-.25a.75.75 0 0 1-.75-.75v-.5c0-.4.34-.75.75-.75H5V7.5A2.5 2.5 0 0 1 7.5 5z"
                          ></path>
                        </g>
                        <path d="M0 0h24v24H0z"></path>
                      </g>
                    </svg>
                    <span class="font-weight-500">4</span>
                  </div>
                  <div class="d-flex flex-row gap-1 align-items-center">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24"
                      class="svg-custom"
                    >
                      <path
                        d="M10.4 16.83L9.53 16 8.1 17.4 8 6.57l1.5 1.56.9-.95L7.23 4l-3.2 3.17.9.95 1.5-1.56.12 10.85-1.6-1.51-.92.93L7.22 20zm8.8 2.37a.8.8 0 0 0 .8-.8V5.6a.8.8 0 0 0-.8-.8h-4.8a.8.8 0 0 0-.8.8v12.8a.8.8 0 0 0 .8.8zm-.8-1.6h-3.2V16h1.6v-1.6h-1.6v-1.6h1.6v-1.6h-1.6V9.6h1.6V8h-1.6V6.4h3.2z"
                      ></path>
                    </svg>
                    <span class="font-weight-500">Marla</span>
                  </div>
                </div>
                <div class="mt-2">
                  <p
                    class="prop-price-text line-clamp-one font-weight-400 font-size-14 detial-text-top"
                  >
                    Park View City, Lahore
                  </p>
                  <div class="detail-text flex-row align-items-center">
                    <div class="cf36e19e">
                      <span class="b779b320"
                        >Lake City Lahore Covered over an a</span
                      >
                    </div>
                    ...<a href="#" class="_6e9f9ae0 d-inline-block">more</a>
                  </div>
                </div>
                <div class="d-flex justify-content-between gap-1">
                  <div
                    class="card-btns d-flex flex-row gap-2 align-items-end mt-1"
                  >
                    <button class="email-msg-btn">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 32 32"
                        style="height: 1.1rem; width: 1rem"
                      >
                        <path
                          fill="#6CACE3"
                          d="M28.7 5.3H3.3A3.3 3.3 0 0 0 0 8.6v14.8c0 1.8 1.4 3.3 3.3 3.3h25.4c1.8 0 3.3-1.4 3.3-3.3V8.7c0-1.9-1.4-3.3-3.3-3.4zm-17 12l-8 6.6c-.3.1-.6.1-1-.2-.2-.3 0-.7.2-1l8-6.6c.3-.3.7-.1 1 .1.2.4.1.8-.2 1zm17.5 6.4c-.3.2-.6.3-1 0l-8-6.6c-.2-.1-.2-.5 0-.8 0-.3.6-.3.8 0l8 6.6c.4.1.4.5.2.8zm0-14.5l-11 7.5c-.6.4-1.4.6-2 .7-.9 0-1.6-.3-2.2-.7L3 9.2c-.4-.2-.4-.6-.2-.9.2-.3.6-.4 1-.2l10.8 7.5c.8.5 1.9.5 2.7 0l11-7.5c.2-.3.6-.1.8 0 .3.4.3.8 0 1z"
                        ></path>
                      </svg>
                    </button>
                    <button class="email-msg-btn">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        data-name="Group 5"
                        viewBox="0 0 20 20"
                        style="height: 1.3rem; width: 1.3rem"
                      >
                        <path fill="none" d="M0 0h20v20H0z"></path>
                        <path
                          fill="#6CACE3"
                          d="M10 3.6a6.4 6.4 0 0 0-5.18 10.15l-.8 2.38 2.46-.79A6.4 6.4 0 1 0 10 3.6z"
                        ></path>
                        <path
                          fill="#fafafa"
                          d="M13.83 12.72a1.86 1.86 0 0 1-1.3.93c-.34.08-.79.13-2.3-.5a8.26 8.26 0 0 1-3.27-2.9 3.79 3.79 0 0 1-.78-2 2.12 2.12 0 0 1 .67-1.61.95.95 0 0 1 .67-.24h.22c.2.02.3.03.42.34l.6 1.43a.4.4 0 0 1 .02.35 1.14 1.14 0 0 1-.21.3c-.1.12-.2.2-.29.32-.09.1-.19.22-.08.42a5.87 5.87 0 0 0 1.07 1.33 4.83 4.83 0 0 0 1.54.96.41.41 0 0 0 .47-.08 8 8 0 0 0 .51-.68.37.37 0 0 1 .47-.15c.18.07 1.12.53 1.32.63s.32.14.36.23a1.66 1.66 0 0 1-.11.92z"
                        ></path>
                      </svg>
                    </button>
                    <button
                      class="call-btn d-flex flex-row align-items-center gap-2"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="16"
                        viewBox="0 0 16 16"
                        fill="#fff"
                        class="_40c10793"
                      >
                        <path
                          d="M13.3 10.3A7.6 7.6 0 0 1 11 10a.7.7 0 0 0-.7.1l-1 1.4a10.1 10.1 0 0 1-4.6-4.6L6 5.7A.7.7 0 0 0 6 5a7.4 7.4 0 0 1-.3-2.3A.7.7 0 0 0 5 2H2.8c-.4 0-.8.2-.8.7A11.4 11.4 0 0 0 13.3 14a.7.7 0 0 0 .7-.8V11a.7.7 0 0 0-.7-.6z"
                        ></path>
                      </svg>
                      <span>CALL</span>
                    </button>
                  </div>
                    <div class="hover-prop">
                      <img
                        src="{{ asset('zameen/search/assets/images/real-estate-small.jpg') }}"
                        class="before-hover"
                      />
                      <div class="after-hover">
                        <div class="d-flex flex-column gap-1">
                          <img
                          src="{{ asset('zameen/search/assets/images/real-estate-small.jpg') }}"
                          class="before-hover"
                        />
                        <span class="muted-text">Registerd Since : 2023</span>
                        <p class="font-weight-500 line-clamp-one">2024 Propeties for sale</p>
                        <p class="font-weight-500 line-clamp-one">0 Propeties for Rent</p>
                        </div>
                      </div>
                    </div>
                 
                </div>
              </div>
            </li>
            <!-- feature -->
            <li class="prop-card-child featured">
              <div class="image-wrapper position-relative">
                <figure class="m-0">
                  <img src="{{ asset('zameen/search/assets/images/properties.jpg') }}" alt="" srcset="" />
                </figure>
                <div
                  class="top-data d-flex flex-row justify-content-between align-items-center"
                >
                  <label class="feature-label">Feature</label>
                  <label class="titanium">Titanium</label>
                </div>
                <div
                  class="bottom-data d-flex flex-row justify-content-between align-items-center"
                >
                  <div
                    class="bg-light-black d-flex flex-row gap-1 align-items-center"
                  >
                    <span class="view-count-white">11</span>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 16 16"
                      class="white-svg"
                    >
                      <path fill="none" d="M0 0h16v16H0z"></path>
                      <g fill="#fff" data-name="Icon ionic-ios-camera">
                        <path
                          d="M9.8 8.24a2.08 2.08 0 1 1-2.08-2.09 2.08 2.08 0 0 1 2.08 2.1z"
                        ></path>
                        <path
                          d="M13.57 4.06H11.6a.59.59 0 0 1-.44-.2c-1.03-1.15-1.4-1.54-1.83-1.54h-3.1c-.43 0-.84.4-1.88 1.55a.58.58 0 0 1-.43.2h-.14v-.3a.3.3 0 0 0-.29-.29h-.94c-.16 0-.3.13-.3.58H2A1.18 1.18 0 0 0 .77 5.18v6.37a1.25 1.25 0 0 0 1.21 1.2h11.6a1.16 1.16 0 0 0 1.1-1.2V5.17a1.08 1.08 0 0 0-1.1-1.1zm-5.7 7.26a3.1 3.1 0 1 1 2.95-2.95 3.1 3.1 0 0 1-2.95 2.95zm3.33-5.16a.47.47 0 1 1 .47-.47.47.47 0 0 1-.47.47z"
                        ></path>
                      </g>
                    </svg>
                  </div>
                  <div
                    class="bg-light-black d-flex flex-row gap-1 align-items-center"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="white-svg"
                      viewBox="0 0 9 13"
                      style="width: 0.9rem; height: 0.8rem"
                    >
                      <path
                        fill="#FFF"
                        d="M4.5 0C2 0 0 2 0 4.4 0 7.8 4.5 13 4.5 13S9 7.8 9 4.4C9 2 7 0 4.5 0zm0 6.3c-1.1 0-1.9-.9-1.9-1.9a2 2 0 0 1 1.9-1.9c1.1 0 1.9.8 1.9 1.9 0 1-.8 1.9-1.9 1.9z"
                      ></path>
                    </svg>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="white-svg"
                      viewBox="0 0 13 12"
                      style="width: 0.9rem; height: 1.2rem"
                    >
                      <path
                        fill="#FFF"
                        d="M9.7 2V0L13 3.3 9.7 6.6V4.3c-3.9.5-5.8 4.8-5.8 4.8 0-3.6 2.5-6.7 5.8-7.1zm1.2 9.2H.8V2.5H7a12 12 0 0 1 2-.8H.4c-.2 0-.4.2-.4.4v9.5c0 .3.2.4.4.4h10.9c.2 0 .4-.2.4-.4V5.2l-.8.8v5.2z"
                      ></path>
                    </svg>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      overflow="visible"
                      viewBox="0 0 20 18.4"
                      class="white-svg"
                      style="width: 0.9rem; height: 0.8rem"
                    >
                      <path
                        d="M10 18.4L8.6 17C3.4 12.4 0 9.3 0 5.5A5.5 5.5 0 0 1 5.5 0 6 6 0 0 1 10 2a6 6 0 0 1 4.5-2A5.5 5.5 0 0 1 20 5.5c0 3.8-3.4 6.9-8.6 11.5z"
                      ></path>
                    </svg>
                  </div>
                </div>
              </div>
              <div class="card-body-custom">
                <div class="d-flex flex-row justify-content-between gap-2">
                  <span class="prop-count">Added: 33 minutes ago</span>
                  <div class="d-flex flex-row gap-1 align-items-center">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink"
                      width="16"
                      height="16"
                      id="light"
                    >
                      <defs>
                        <linearGradient id="b">
                          <stop offset="0" stop-color="#485960"></stop>
                          <stop offset="1" stop-color="#3d4e55"></stop>
                        </linearGradient>
                        <linearGradient id="c">
                          <stop offset="0" stop-color="#fcd635"></stop>
                          <stop offset="1" stop-color="#f7a928"></stop>
                        </linearGradient>
                        <linearGradient
                          id="f"
                          x1="128.2"
                          x2="129.2"
                          y1="1180.362"
                          y2="1180.362"
                          gradientUnits="userSpaceOnUse"
                          xlink:href="#a"
                        ></linearGradient>
                        <linearGradient id="a">
                          <stop offset="0" stop-color="#cad1d8"></stop>
                          <stop offset="1" stop-color="#babdc1"></stop>
                        </linearGradient>
                        <linearGradient
                          id="g"
                          x1="129.8"
                          x2="130.8"
                          y1="1180.362"
                          y2="1180.362"
                          gradientUnits="userSpaceOnUse"
                          xlink:href="#a"
                        ></linearGradient>
                        <linearGradient
                          id="h"
                          x1="127.5"
                          x2="131.5"
                          y1="1178.362"
                          y2="1178.362"
                          gradientUnits="userSpaceOnUse"
                          xlink:href="#b"
                        ></linearGradient>
                        <linearGradient
                          id="e"
                          x1="124.5"
                          x2="134.5"
                          y1="137"
                          y2="137"
                          gradientUnits="userSpaceOnUse"
                          xlink:href="#c"
                        ></linearGradient>
                        <linearGradient
                          id="i"
                          x1="127"
                          x2="132"
                          y1="1177.862"
                          y2="1177.862"
                          gradientUnits="userSpaceOnUse"
                          xlink:href="#a"
                        ></linearGradient>
                        <linearGradient
                          id="j"
                          x1="127"
                          x2="132"
                          y1="1178.862"
                          y2="1178.862"
                          gradientUnits="userSpaceOnUse"
                          xlink:href="#a"
                        ></linearGradient>
                        <linearGradient
                          id="k"
                          x1="127"
                          x2="132"
                          y1="1176.862"
                          y2="1176.862"
                          gradientUnits="userSpaceOnUse"
                          xlink:href="#a"
                        ></linearGradient>
                        <linearGradient
                          id="l"
                          x1="125.5"
                          x2="130.007"
                          y1="1169.615"
                          y2="1169.615"
                          gradientUnits="userSpaceOnUse"
                          xlink:href="#d"
                        ></linearGradient>
                        <linearGradient id="d">
                          <stop offset="0" stop-color="#f6a320"></stop>
                          <stop offset="1" stop-color="#f47e1f"></stop>
                        </linearGradient>
                      </defs>
                      <g
                        fill-rule="evenodd"
                        color="#000"
                        transform="translate(-121.5 -1164.862)"
                      >
                        <path
                          fill="url(#e)"
                          style="
                            isolation: auto;
                            mix-blend-mode: normal;
                            solid-color: #000;
                            solid-opacity: 1;
                          "
                          d="M129.5 130a5 5 0 0 0-5 5 5 5 0 0 0 3 4.58v3.92c0 .277.223.5.5.5h3c.277 0 .5-.223.5-.5v-3.924a5 5 0 0 0 3-4.576 5 5 0 0 0-5-5z"
                          overflow="visible"
                          transform="translate(0 1036.362)"
                        ></path>
                        <circle
                          style="
                            isolation: auto;
                            mix-blend-mode: normal;
                            solid-color: #000;
                            solid-opacity: 1;
                          "
                          cx="128.7"
                          cy="1180.362"
                          r=".5"
                          fill="url(#f)"
                          overflow="visible"
                        ></circle>
                        <circle
                          cx="130.3"
                          cy="1180.362"
                          r=".5"
                          fill="url(#g)"
                          overflow="visible"
                          style="
                            isolation: auto;
                            mix-blend-mode: normal;
                            solid-color: #000;
                            solid-opacity: 1;
                          "
                        ></circle>
                        <rect
                          width="4"
                          height="3"
                          x="127.5"
                          y="1177.362"
                          fill="url(#h)"
                          overflow="visible"
                          rx=".5"
                          ry=".5"
                          style="
                            isolation: auto;
                            mix-blend-mode: normal;
                            solid-color: #000;
                            solid-opacity: 1;
                          "
                        ></rect>
                        <rect
                          width="5"
                          height="1"
                          x="127"
                          y="1177.362"
                          fill="url(#i)"
                          style="
                            isolation: auto;
                            mix-blend-mode: normal;
                            solid-color: #000;
                            solid-opacity: 1;
                          "
                          overflow="visible"
                          rx=".417"
                          ry=".5"
                        ></rect>
                        <rect
                          width="5"
                          height="1"
                          x="127"
                          y="1178.362"
                          fill="url(#j)"
                          overflow="visible"
                          rx=".417"
                          ry=".5"
                          style="
                            isolation: auto;
                            mix-blend-mode: normal;
                            solid-color: #000;
                            solid-opacity: 1;
                          "
                        ></rect>
                        <rect
                          width="5"
                          height="1"
                          x="127"
                          y="1176.362"
                          fill="url(#k)"
                          overflow="visible"
                          rx=".417"
                          ry=".5"
                          style="
                            isolation: auto;
                            mix-blend-mode: normal;
                            solid-color: #000;
                            solid-opacity: 1;
                          "
                        ></rect>
                        <path
                          fill="url(#l)"
                          style="
                            line-height: normal;
                            text-indent: 0;
                            text-align: start;
                            text-decoration-line: none;
                            text-decoration-style: solid;
                            text-decoration-color: #000;
                            text-transform: none;
                            block-progression: tb;
                            white-space: normal;
                            isolation: auto;
                            mix-blend-mode: normal;
                            solid-color: #000;
                            solid-opacity: 1;
                          "
                          d="M129.5 1167.361c-2.203 0-4 1.797-4 4a.5.5 0 1 0 1 0c0-1.662 1.337-3 3-3a.5.5 0 1 0 0-1z"
                          font-family="sans-serif"
                          font-weight="400"
                          overflow="visible"
                        ></path>
                      </g>
                    </svg>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 32 32"
                      aria-label="Trusted badge"
                      style="width: 1rem; height: 1rem"
                    >
                      <g fill="#34A048">
                        <path
                          d="M25.3 16.8V6.5l-5-1.3-4.1-1h-.3l-4 1c-1.8.3-3.5.8-5.3 1.2V17c-.1 2.1.7 4.2 2 5.8 2 2.3 4.5 4.1 7.2 5.2 2.5-1 4.7-2.5 6.6-4.4 2-1.7 3-4.2 2.9-6.7zm-3.2-4.4l-2.5 3.2-4 5.2c-.8 1-1.3 1-2.1 0L9.9 16a1 1 0 0 1 0-1.5c.4-.4 1.1-.3 1.5.1l2.6 2.3.6.5.3-.5 5.6-5.5.7-.5c.4 0 .9.1 1.1.5.1.2.1.7-.2 1.1z"
                        ></path>
                        <path
                          d="M29.1 16.8V5a2 2 0 0 0-1.7-2.2l-6-1.5L16.8.1h-1.7l-4.5 1.1-6.1 1.5C3.5 3 2.7 4 2.8 5v11.9c-.1 3 1 6 2.9 8.2a25 25 0 0 0 9.3 6.7l.9.2c.3 0 .7 0 1-.2a24 24 0 0 0 8.4-5.7c2.6-2.3 4-5.7 3.8-9.2zm-4.8 8.5c-2.3 2.3-5 4.1-7.9 5.3-.2.1-.5.1-.8 0a22 22 0 0 1-8.8-6.3c-1.8-2-2.7-4.7-2.6-7.4V5c0-.5.1-.8.6-.9l10.6-2.6h1C20 2.4 23.5 3.2 27 4c.5.1.6.4.6.8v11.8c.3 3.4-1 6.5-3.3 8.7z"
                        ></path>
                      </g>
                    </svg>
                  </div>
                </div>
                <div class="d-flex flex-column gap-1 my-3">
                  <p class="prop-price-text"><span>PKR</span> 1.48 Crore</p>
                  <p class="prop-price-text line-clamp-one">
                    Park View City, Lahore
                  </p>
                </div>
                <div class="d-flex flex-row gap-2">
                  <div class="d-flex flex-row gap-1 align-items-center">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24"
                      class="svg-custom"
                    >
                      <g fill="none">
                        <path d="M0 0h24v24H0z"></path>
                        <g data-name="Icon awesome-bed">
                          <path
                            d="M8.4 11.8a2 2 0 1 0-2-2 2 2 0 0 0 2 2zm8.8-3.2h-5.6a.4.4 0 0 0-.4.4v3.6H5.6V7.4a.4.4 0 0 0-.4-.4h-.8a.4.4 0 0 0-.4.4v8.8a.4.4 0 0 0 .4.4h.8a.4.4 0 0 0 .4-.4V15h12.8v1.2a.4.4 0 0 0 .4.4h.8a.4.4 0 0 0 .4-.4v-4.8a2.8 2.8 0 0 0-2.8-2.8z"
                          ></path>
                          <path
                            fill="#000"
                            d="M13.2 10.6V13H18v-1.6a.8.8 0 0 0-.8-.8h-4M4.4 7h.8c.22 0 .4.18.4.4v5.2h5.6V9c0-.22.18-.4.4-.4h5.6a2.8 2.8 0 0 1 2.8 2.8v4.8a.4.4 0 0 1-.4.4h-.8a.4.4 0 0 1-.4-.4V15H5.6v1.2a.4.4 0 0 1-.4.4h-.8a.4.4 0 0 1-.4-.4V7.4c0-.22.18-.4.4-.4zm4 .8a2 2 0 1 1 0 4 2 2 0 0 1 0-4z"
                          ></path>
                        </g>
                      </g>
                    </svg>
                    <span class="font-weight-500">3</span>
                  </div>
                  <div class="d-flex flex-row gap-1 align-items-center">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24"
                      class="svg-custom"
                    >
                      <g fill="none">
                        <g data-name="Icon awesome-bath">
                          <path
                            d="M19.25 12H6.5V7.5a1 1 0 0 1 1.84-.54 2.12 2.12 0 0 0 .22 2.6.38.38 0 0 0 0 .5l.37.37a.38.38 0 0 0 .53 0l2.97-2.98a.38.38 0 0 0 0-.52l-.36-.36a.38.38 0 0 0-.5-.01 2.12 2.12 0 0 0-2.02-.48A2.5 2.5 0 0 0 5 7.5V12h-.25a.75.75 0 0 0-.75.75v.5a.75.75 0 0 0 .75.75H5v1a3 3 0 0 0 1 2.24v1a.75.75 0 0 0 .75.76h.5a.75.75 0 0 0 .75-.75V18h8v.25a.75.75 0 0 0 .75.75h.5a.75.75 0 0 0 .75-.75v-1.01A3 3 0 0 0 19 15v-1h.25a.75.75 0 0 0 .75-.75v-.5a.75.75 0 0 0-.75-.75z"
                          ></path>
                          <path
                            fill="#000"
                            d="M7 14v1c0 .4.2.63.33.75l.29.25h8.76l.3-.25A1 1 0 0 0 17 15v-1H7m.5-9c.85 0 1.6.43 2.05 1.08a2.12 2.12 0 0 1 2 .48.37.37 0 0 1 .52 0l.36.37c.14.14.14.38 0 .53l-2.97 2.97a.38.38 0 0 1-.53 0l-.36-.36a.37.37 0 0 1 0-.5 2.12 2.12 0 0 1-.23-2.6 1 1 0 0 0-1.84.54v4.5h12.75c.4 0 .75.34.75.75v.5c0 .41-.34.75-.75.75H19v1a3 3 0 0 1-1 2.24v1c0 .42-.34.76-.75.76h-.5a.75.75 0 0 1-.75-.75v-.25H8v.25c0 .41-.34.75-.75.75h-.5a.75.75 0 0 1-.75-.76v-1.01A3 3 0 0 1 5 15v-1h-.25a.75.75 0 0 1-.75-.75v-.5c0-.4.34-.75.75-.75H5V7.5A2.5 2.5 0 0 1 7.5 5z"
                          ></path>
                        </g>
                        <path d="M0 0h24v24H0z"></path>
                      </g>
                    </svg>
                    <span class="font-weight-500">4</span>
                  </div>
                  <div class="d-flex flex-row gap-1 align-items-center">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24"
                      class="svg-custom"
                    >
                      <path
                        d="M10.4 16.83L9.53 16 8.1 17.4 8 6.57l1.5 1.56.9-.95L7.23 4l-3.2 3.17.9.95 1.5-1.56.12 10.85-1.6-1.51-.92.93L7.22 20zm8.8 2.37a.8.8 0 0 0 .8-.8V5.6a.8.8 0 0 0-.8-.8h-4.8a.8.8 0 0 0-.8.8v12.8a.8.8 0 0 0 .8.8zm-.8-1.6h-3.2V16h1.6v-1.6h-1.6v-1.6h1.6v-1.6h-1.6V9.6h1.6V8h-1.6V6.4h3.2z"
                      ></path>
                    </svg>
                    <span class="font-weight-500">Marla</span>
                  </div>
                </div>
                <div class="mt-2">
                  <p
                    class="prop-price-text line-clamp-one font-weight-400 font-size-14 detial-text-top"
                  >
                    Park View City, Lahore
                  </p>
                  <div class="detail-text flex-row align-items-center">
                    <div class="cf36e19e">
                      <span class="b779b320"
                        >Lake City Lahore Covered over an a</span
                      >
                    </div>
                    ...<a href="#" class="_6e9f9ae0 d-inline-block">more</a>
                  </div>
                </div>
                <div class="d-flex justify-content-between gap-1">
                  <div
                    class="card-btns d-flex flex-row gap-2 align-items-end mt-1"
                  >
                    <button class="email-msg-btn">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 32 32"
                        style="height: 1.1rem; width: 1rem"
                      >
                        <path
                          fill="#6CACE3"
                          d="M28.7 5.3H3.3A3.3 3.3 0 0 0 0 8.6v14.8c0 1.8 1.4 3.3 3.3 3.3h25.4c1.8 0 3.3-1.4 3.3-3.3V8.7c0-1.9-1.4-3.3-3.3-3.4zm-17 12l-8 6.6c-.3.1-.6.1-1-.2-.2-.3 0-.7.2-1l8-6.6c.3-.3.7-.1 1 .1.2.4.1.8-.2 1zm17.5 6.4c-.3.2-.6.3-1 0l-8-6.6c-.2-.1-.2-.5 0-.8 0-.3.6-.3.8 0l8 6.6c.4.1.4.5.2.8zm0-14.5l-11 7.5c-.6.4-1.4.6-2 .7-.9 0-1.6-.3-2.2-.7L3 9.2c-.4-.2-.4-.6-.2-.9.2-.3.6-.4 1-.2l10.8 7.5c.8.5 1.9.5 2.7 0l11-7.5c.2-.3.6-.1.8 0 .3.4.3.8 0 1z"
                        ></path>
                      </svg>
                    </button>
                    <button class="email-msg-btn">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        data-name="Group 5"
                        viewBox="0 0 20 20"
                        style="height: 1.3rem; width: 1.3rem"
                      >
                        <path fill="none" d="M0 0h20v20H0z"></path>
                        <path
                          fill="#6CACE3"
                          d="M10 3.6a6.4 6.4 0 0 0-5.18 10.15l-.8 2.38 2.46-.79A6.4 6.4 0 1 0 10 3.6z"
                        ></path>
                        <path
                          fill="#fafafa"
                          d="M13.83 12.72a1.86 1.86 0 0 1-1.3.93c-.34.08-.79.13-2.3-.5a8.26 8.26 0 0 1-3.27-2.9 3.79 3.79 0 0 1-.78-2 2.12 2.12 0 0 1 .67-1.61.95.95 0 0 1 .67-.24h.22c.2.02.3.03.42.34l.6 1.43a.4.4 0 0 1 .02.35 1.14 1.14 0 0 1-.21.3c-.1.12-.2.2-.29.32-.09.1-.19.22-.08.42a5.87 5.87 0 0 0 1.07 1.33 4.83 4.83 0 0 0 1.54.96.41.41 0 0 0 .47-.08 8 8 0 0 0 .51-.68.37.37 0 0 1 .47-.15c.18.07 1.12.53 1.32.63s.32.14.36.23a1.66 1.66 0 0 1-.11.92z"
                        ></path>
                      </svg>
                    </button>
                    <button
                      class="call-btn d-flex flex-row align-items-center gap-2"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="16"
                        viewBox="0 0 16 16"
                        fill="#fff"
                        class="_40c10793"
                      >
                        <path
                          d="M13.3 10.3A7.6 7.6 0 0 1 11 10a.7.7 0 0 0-.7.1l-1 1.4a10.1 10.1 0 0 1-4.6-4.6L6 5.7A.7.7 0 0 0 6 5a7.4 7.4 0 0 1-.3-2.3A.7.7 0 0 0 5 2H2.8c-.4 0-.8.2-.8.7A11.4 11.4 0 0 0 13.3 14a.7.7 0 0 0 .7-.8V11a.7.7 0 0 0-.7-.6z"
                        ></path>
                      </svg>
                      <span>CALL</span>
                    </button>
                  </div>
                    <div class="hover-prop">
                      <img
                        src="{{ asset('zameen/search/assets/images/real-estate-small.jpg') }}"
                        class="before-hover"
                      />
                      <div class="after-hover">
                        <div class="d-flex flex-column gap-1">
                          <img
                          src="{{ asset('zameen/search/assets/images/real-estate-small.jpg') }}"
                          class="before-hover"
                        />
                        <span class="muted-text">Registerd Since : 2023</span>
                        <p class="font-weight-500 line-clamp-one">2024 Propeties for sale</p>
                        <p class="font-weight-500 line-clamp-one">0 Propeties for Rent</p>
                        </div>
                      </div>
                    </div>
                 
                </div>
              </div>
            </li>
            <!-- normal -->
            <li class="prop-card-child normal">
              <div class="image-wrapper position-relative">
                <figure class="m-0">
                  <img src="{{ asset('zameen/search/assets/images/properties.jpg') }}" alt="" srcset="" />
                </figure>
                <div class="top-data d-flex flex-row justify-content-end">
                  <label class="titanium">Titanium</label>
                </div>
                <div
                  class="bottom-data d-flex flex-row justify-content-between align-items-center"
                >
                  <div
                    class="bg-light-black d-flex flex-row gap-1 align-items-center"
                  >
                    <span class="view-count-white">11</span>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 16 16"
                      class="white-svg"
                    >
                      <path fill="none" d="M0 0h16v16H0z"></path>
                      <g fill="#fff" data-name="Icon ionic-ios-camera">
                        <path
                          d="M9.8 8.24a2.08 2.08 0 1 1-2.08-2.09 2.08 2.08 0 0 1 2.08 2.1z"
                        ></path>
                        <path
                          d="M13.57 4.06H11.6a.59.59 0 0 1-.44-.2c-1.03-1.15-1.4-1.54-1.83-1.54h-3.1c-.43 0-.84.4-1.88 1.55a.58.58 0 0 1-.43.2h-.14v-.3a.3.3 0 0 0-.29-.29h-.94c-.16 0-.3.13-.3.58H2A1.18 1.18 0 0 0 .77 5.18v6.37a1.25 1.25 0 0 0 1.21 1.2h11.6a1.16 1.16 0 0 0 1.1-1.2V5.17a1.08 1.08 0 0 0-1.1-1.1zm-5.7 7.26a3.1 3.1 0 1 1 2.95-2.95 3.1 3.1 0 0 1-2.95 2.95zm3.33-5.16a.47.47 0 1 1 .47-.47.47.47 0 0 1-.47.47z"
                        ></path>
                      </g>
                    </svg>
                  </div>
                  <div
                    class="bg-light-black d-flex flex-row gap-1 align-items-center"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="white-svg"
                      viewBox="0 0 9 13"
                      style="width: 0.9rem; height: 0.8rem"
                    >
                      <path
                        fill="#FFF"
                        d="M4.5 0C2 0 0 2 0 4.4 0 7.8 4.5 13 4.5 13S9 7.8 9 4.4C9 2 7 0 4.5 0zm0 6.3c-1.1 0-1.9-.9-1.9-1.9a2 2 0 0 1 1.9-1.9c1.1 0 1.9.8 1.9 1.9 0 1-.8 1.9-1.9 1.9z"
                      ></path>
                    </svg>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="white-svg"
                      viewBox="0 0 13 12"
                      style="width: 0.9rem; height: 1.2rem"
                    >
                      <path
                        fill="#FFF"
                        d="M9.7 2V0L13 3.3 9.7 6.6V4.3c-3.9.5-5.8 4.8-5.8 4.8 0-3.6 2.5-6.7 5.8-7.1zm1.2 9.2H.8V2.5H7a12 12 0 0 1 2-.8H.4c-.2 0-.4.2-.4.4v9.5c0 .3.2.4.4.4h10.9c.2 0 .4-.2.4-.4V5.2l-.8.8v5.2z"
                      ></path>
                    </svg>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      overflow="visible"
                      viewBox="0 0 20 18.4"
                      class="white-svg"
                      style="width: 0.9rem; height: 0.8rem"
                    >
                      <path
                        d="M10 18.4L8.6 17C3.4 12.4 0 9.3 0 5.5A5.5 5.5 0 0 1 5.5 0 6 6 0 0 1 10 2a6 6 0 0 1 4.5-2A5.5 5.5 0 0 1 20 5.5c0 3.8-3.4 6.9-8.6 11.5z"
                      ></path>
                    </svg>
                  </div>
                </div>
              </div>
              <div class="card-body-custom">
                <div class="d-flex flex-row justify-content-between gap-2">
                  <span class="prop-count">Added: 33 minutes ago</span>
                  <div class="d-flex flex-row gap-1 align-items-center">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 32 32"
                      aria-label="Trusted badge"
                      style="width: 1rem; height: 1rem"
                    >
                      <g fill="#34A048">
                        <path
                          d="M25.3 16.8V6.5l-5-1.3-4.1-1h-.3l-4 1c-1.8.3-3.5.8-5.3 1.2V17c-.1 2.1.7 4.2 2 5.8 2 2.3 4.5 4.1 7.2 5.2 2.5-1 4.7-2.5 6.6-4.4 2-1.7 3-4.2 2.9-6.7zm-3.2-4.4l-2.5 3.2-4 5.2c-.8 1-1.3 1-2.1 0L9.9 16a1 1 0 0 1 0-1.5c.4-.4 1.1-.3 1.5.1l2.6 2.3.6.5.3-.5 5.6-5.5.7-.5c.4 0 .9.1 1.1.5.1.2.1.7-.2 1.1z"
                        ></path>
                        <path
                          d="M29.1 16.8V5a2 2 0 0 0-1.7-2.2l-6-1.5L16.8.1h-1.7l-4.5 1.1-6.1 1.5C3.5 3 2.7 4 2.8 5v11.9c-.1 3 1 6 2.9 8.2a25 25 0 0 0 9.3 6.7l.9.2c.3 0 .7 0 1-.2a24 24 0 0 0 8.4-5.7c2.6-2.3 4-5.7 3.8-9.2zm-4.8 8.5c-2.3 2.3-5 4.1-7.9 5.3-.2.1-.5.1-.8 0a22 22 0 0 1-8.8-6.3c-1.8-2-2.7-4.7-2.6-7.4V5c0-.5.1-.8.6-.9l10.6-2.6h1C20 2.4 23.5 3.2 27 4c.5.1.6.4.6.8v11.8c.3 3.4-1 6.5-3.3 8.7z"
                        ></path>
                      </g>
                    </svg>
                  </div>
                </div>
                <div class="d-flex flex-column gap-1 my-3">
                  <p class="prop-price-text"><span>PKR</span> 1.48 Crore</p>
                  <p class="prop-price-text line-clamp-one">
                    Park View City, Lahore
                  </p>
                </div>
                <div class="d-flex flex-row gap-2">
                  <div class="d-flex flex-row gap-1 align-items-center">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24"
                      class="svg-custom"
                    >
                      <g fill="none">
                        <path d="M0 0h24v24H0z"></path>
                        <g data-name="Icon awesome-bed">
                          <path
                            d="M8.4 11.8a2 2 0 1 0-2-2 2 2 0 0 0 2 2zm8.8-3.2h-5.6a.4.4 0 0 0-.4.4v3.6H5.6V7.4a.4.4 0 0 0-.4-.4h-.8a.4.4 0 0 0-.4.4v8.8a.4.4 0 0 0 .4.4h.8a.4.4 0 0 0 .4-.4V15h12.8v1.2a.4.4 0 0 0 .4.4h.8a.4.4 0 0 0 .4-.4v-4.8a2.8 2.8 0 0 0-2.8-2.8z"
                          ></path>
                          <path
                            fill="#000"
                            d="M13.2 10.6V13H18v-1.6a.8.8 0 0 0-.8-.8h-4M4.4 7h.8c.22 0 .4.18.4.4v5.2h5.6V9c0-.22.18-.4.4-.4h5.6a2.8 2.8 0 0 1 2.8 2.8v4.8a.4.4 0 0 1-.4.4h-.8a.4.4 0 0 1-.4-.4V15H5.6v1.2a.4.4 0 0 1-.4.4h-.8a.4.4 0 0 1-.4-.4V7.4c0-.22.18-.4.4-.4zm4 .8a2 2 0 1 1 0 4 2 2 0 0 1 0-4z"
                          ></path>
                        </g>
                      </g>
                    </svg>
                    <span class="font-weight-500">3</span>
                  </div>
                  <div class="d-flex flex-row gap-1 align-items-center">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24"
                      class="svg-custom"
                    >
                      <g fill="none">
                        <g data-name="Icon awesome-bath">
                          <path
                            d="M19.25 12H6.5V7.5a1 1 0 0 1 1.84-.54 2.12 2.12 0 0 0 .22 2.6.38.38 0 0 0 0 .5l.37.37a.38.38 0 0 0 .53 0l2.97-2.98a.38.38 0 0 0 0-.52l-.36-.36a.38.38 0 0 0-.5-.01 2.12 2.12 0 0 0-2.02-.48A2.5 2.5 0 0 0 5 7.5V12h-.25a.75.75 0 0 0-.75.75v.5a.75.75 0 0 0 .75.75H5v1a3 3 0 0 0 1 2.24v1a.75.75 0 0 0 .75.76h.5a.75.75 0 0 0 .75-.75V18h8v.25a.75.75 0 0 0 .75.75h.5a.75.75 0 0 0 .75-.75v-1.01A3 3 0 0 0 19 15v-1h.25a.75.75 0 0 0 .75-.75v-.5a.75.75 0 0 0-.75-.75z"
                          ></path>
                          <path
                            fill="#000"
                            d="M7 14v1c0 .4.2.63.33.75l.29.25h8.76l.3-.25A1 1 0 0 0 17 15v-1H7m.5-9c.85 0 1.6.43 2.05 1.08a2.12 2.12 0 0 1 2 .48.37.37 0 0 1 .52 0l.36.37c.14.14.14.38 0 .53l-2.97 2.97a.38.38 0 0 1-.53 0l-.36-.36a.37.37 0 0 1 0-.5 2.12 2.12 0 0 1-.23-2.6 1 1 0 0 0-1.84.54v4.5h12.75c.4 0 .75.34.75.75v.5c0 .41-.34.75-.75.75H19v1a3 3 0 0 1-1 2.24v1c0 .42-.34.76-.75.76h-.5a.75.75 0 0 1-.75-.75v-.25H8v.25c0 .41-.34.75-.75.75h-.5a.75.75 0 0 1-.75-.76v-1.01A3 3 0 0 1 5 15v-1h-.25a.75.75 0 0 1-.75-.75v-.5c0-.4.34-.75.75-.75H5V7.5A2.5 2.5 0 0 1 7.5 5z"
                          ></path>
                        </g>
                        <path d="M0 0h24v24H0z"></path>
                      </g>
                    </svg>
                    <span class="font-weight-500">4</span>
                  </div>
                  <div class="d-flex flex-row gap-1 align-items-center">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24"
                      class="svg-custom"
                    >
                      <path
                        d="M10.4 16.83L9.53 16 8.1 17.4 8 6.57l1.5 1.56.9-.95L7.23 4l-3.2 3.17.9.95 1.5-1.56.12 10.85-1.6-1.51-.92.93L7.22 20zm8.8 2.37a.8.8 0 0 0 .8-.8V5.6a.8.8 0 0 0-.8-.8h-4.8a.8.8 0 0 0-.8.8v12.8a.8.8 0 0 0 .8.8zm-.8-1.6h-3.2V16h1.6v-1.6h-1.6v-1.6h1.6v-1.6h-1.6V9.6h1.6V8h-1.6V6.4h3.2z"
                      ></path>
                    </svg>
                    <span class="font-weight-500">Marla</span>
                  </div>
                </div>
                <div class="mt-2">
                  <p
                    class="prop-price-text line-clamp-one font-weight-400 font-size-14 detial-text-top"
                  >
                    Park View City, Lahore
                  </p>
                  <div class="detail-text flex-row align-items-center">
                    <div class="cf36e19e">
                      <span class="b779b320"
                        >Lake City Lahore Covered over an a</span
                      >
                    </div>
                    ...<a href="#" class="_6e9f9ae0 d-inline-block">more</a>
                  </div>
                </div>
                <div class="d-flex justify-content-between gap-1">
                  <div
                    class="card-btns d-flex flex-row gap-2 align-items-end mt-1"
                  >
                    <button class="email-msg-btn">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 32 32"
                        style="height: 1.1rem; width: 1rem"
                      >
                        <path
                          fill="#6CACE3"
                          d="M28.7 5.3H3.3A3.3 3.3 0 0 0 0 8.6v14.8c0 1.8 1.4 3.3 3.3 3.3h25.4c1.8 0 3.3-1.4 3.3-3.3V8.7c0-1.9-1.4-3.3-3.3-3.4zm-17 12l-8 6.6c-.3.1-.6.1-1-.2-.2-.3 0-.7.2-1l8-6.6c.3-.3.7-.1 1 .1.2.4.1.8-.2 1zm17.5 6.4c-.3.2-.6.3-1 0l-8-6.6c-.2-.1-.2-.5 0-.8 0-.3.6-.3.8 0l8 6.6c.4.1.4.5.2.8zm0-14.5l-11 7.5c-.6.4-1.4.6-2 .7-.9 0-1.6-.3-2.2-.7L3 9.2c-.4-.2-.4-.6-.2-.9.2-.3.6-.4 1-.2l10.8 7.5c.8.5 1.9.5 2.7 0l11-7.5c.2-.3.6-.1.8 0 .3.4.3.8 0 1z"
                        ></path>
                      </svg>
                    </button>
                    <button class="email-msg-btn">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        data-name="Group 5"
                        viewBox="0 0 20 20"
                        style="height: 1.3rem; width: 1.3rem"
                      >
                        <path fill="none" d="M0 0h20v20H0z"></path>
                        <path
                          fill="#6CACE3"
                          d="M10 3.6a6.4 6.4 0 0 0-5.18 10.15l-.8 2.38 2.46-.79A6.4 6.4 0 1 0 10 3.6z"
                        ></path>
                        <path
                          fill="#fafafa"
                          d="M13.83 12.72a1.86 1.86 0 0 1-1.3.93c-.34.08-.79.13-2.3-.5a8.26 8.26 0 0 1-3.27-2.9 3.79 3.79 0 0 1-.78-2 2.12 2.12 0 0 1 .67-1.61.95.95 0 0 1 .67-.24h.22c.2.02.3.03.42.34l.6 1.43a.4.4 0 0 1 .02.35 1.14 1.14 0 0 1-.21.3c-.1.12-.2.2-.29.32-.09.1-.19.22-.08.42a5.87 5.87 0 0 0 1.07 1.33 4.83 4.83 0 0 0 1.54.96.41.41 0 0 0 .47-.08 8 8 0 0 0 .51-.68.37.37 0 0 1 .47-.15c.18.07 1.12.53 1.32.63s.32.14.36.23a1.66 1.66 0 0 1-.11.92z"
                        ></path>
                      </svg>
                    </button>
                    <button
                      class="call-btn d-flex flex-row align-items-center gap-2"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="16"
                        viewBox="0 0 16 16"
                        fill="#fff"
                        class="_40c10793"
                      >
                        <path
                          d="M13.3 10.3A7.6 7.6 0 0 1 11 10a.7.7 0 0 0-.7.1l-1 1.4a10.1 10.1 0 0 1-4.6-4.6L6 5.7A.7.7 0 0 0 6 5a7.4 7.4 0 0 1-.3-2.3A.7.7 0 0 0 5 2H2.8c-.4 0-.8.2-.8.7A11.4 11.4 0 0 0 13.3 14a.7.7 0 0 0 .7-.8V11a.7.7 0 0 0-.7-.6z"
                        ></path>
                      </svg>
                      <span>CALL</span>
                    </button>
                  </div>
                    <div class="hover-prop">
                      <img
                        src="{{ asset('zameen/search/assets/images/real-estate-small.jpg') }}"
                        class="before-hover"
                      />
                      <div class="after-hover">
                        <div class="d-flex flex-column gap-1">
                          <img
                          src="{{ asset('zameen/search/assets/images/real-estate-small.jpg') }}"
                          class="before-hover"
                        />
                        <span class="muted-text">Registerd Since : 2023</span>
                        <p class="font-weight-500 line-clamp-one">2024 Propeties for sale</p>
                        <p class="font-weight-500 line-clamp-one">0 Propeties for Rent</p>
                        </div>
                      </div>
                    </div>
                 
                </div>
              </div>
            </li>
            <!-- super-hot -->
            <li class="prop-card-child super-hot">
              <div
                id="propcardslider"
                class="carousel slide"
                data-bs-ride="carousel"
              >
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="image-wrapper position-relative">
                      <figure class="m-0">
                        <img
                          src="{{ asset('zameen/search/assets/images/screencapture-file-C-Users-Touch-Desktop-zameen-index-html-2023-12-23-19_31_15.png') }}"
                          alt=""
                          srcset=""
                        />
                      </figure>
                      <div
                        class="top-data d-flex flex-row justify-content-between align-items-center"
                      >
                        <label class="super-hot-label">super hot</label>
                        <label class="titanium">Titanium</label>
                      </div>
                      <div
                        class="bottom-data d-flex flex-row justify-content-between align-items-center"
                      >
                        <div
                          class="bg-light-black d-flex flex-row gap-1 align-items-center"
                        >
                          <span class="view-count-white">11</span>
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 16 16"
                            class="white-svg"
                          >
                            <path fill="none" d="M0 0h16v16H0z"></path>
                            <g fill="#fff" data-name="Icon ionic-ios-camera">
                              <path
                                d="M9.8 8.24a2.08 2.08 0 1 1-2.08-2.09 2.08 2.08 0 0 1 2.08 2.1z"
                              ></path>
                              <path
                                d="M13.57 4.06H11.6a.59.59 0 0 1-.44-.2c-1.03-1.15-1.4-1.54-1.83-1.54h-3.1c-.43 0-.84.4-1.88 1.55a.58.58 0 0 1-.43.2h-.14v-.3a.3.3 0 0 0-.29-.29h-.94c-.16 0-.3.13-.3.58H2A1.18 1.18 0 0 0 .77 5.18v6.37a1.25 1.25 0 0 0 1.21 1.2h11.6a1.16 1.16 0 0 0 1.1-1.2V5.17a1.08 1.08 0 0 0-1.1-1.1zm-5.7 7.26a3.1 3.1 0 1 1 2.95-2.95 3.1 3.1 0 0 1-2.95 2.95zm3.33-5.16a.47.47 0 1 1 .47-.47.47.47 0 0 1-.47.47z"
                              ></path>
                            </g>
                          </svg>
                        </div>
                        <div
                          class="bg-light-black d-flex flex-row gap-1 align-items-center"
                        >
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="white-svg"
                            viewBox="0 0 9 13"
                            style="width: 0.9rem; height: 0.8rem"
                          >
                            <path
                              fill="#FFF"
                              d="M4.5 0C2 0 0 2 0 4.4 0 7.8 4.5 13 4.5 13S9 7.8 9 4.4C9 2 7 0 4.5 0zm0 6.3c-1.1 0-1.9-.9-1.9-1.9a2 2 0 0 1 1.9-1.9c1.1 0 1.9.8 1.9 1.9 0 1-.8 1.9-1.9 1.9z"
                            ></path>
                          </svg>
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="white-svg"
                            viewBox="0 0 13 12"
                            style="width: 0.9rem; height: 1.2rem"
                          >
                            <path
                              fill="#FFF"
                              d="M9.7 2V0L13 3.3 9.7 6.6V4.3c-3.9.5-5.8 4.8-5.8 4.8 0-3.6 2.5-6.7 5.8-7.1zm1.2 9.2H.8V2.5H7a12 12 0 0 1 2-.8H.4c-.2 0-.4.2-.4.4v9.5c0 .3.2.4.4.4h10.9c.2 0 .4-.2.4-.4V5.2l-.8.8v5.2z"
                            ></path>
                          </svg>
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            overflow="visible"
                            viewBox="0 0 20 18.4"
                            class="white-svg"
                            style="width: 0.9rem; height: 0.8rem"
                          >
                            <path
                              d="M10 18.4L8.6 17C3.4 12.4 0 9.3 0 5.5A5.5 5.5 0 0 1 5.5 0 6 6 0 0 1 10 2a6 6 0 0 1 4.5-2A5.5 5.5 0 0 1 20 5.5c0 3.8-3.4 6.9-8.6 11.5z"
                            ></path>
                          </svg>
                        </div>
                      </div>
                      <!-- slider -->
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="image-wrapper position-relative">
                      <figure class="m-0">
                        <img
                          src="{{ asset('zameen/search/assets/images/screencapture-file-C-Users-Touch-Desktop-zameen-index-html-2023-12-23-19_31_15.png') }}"
                          alt=""
                          srcset=""
                        />
                      </figure>
                      <div
                        class="top-data d-flex flex-row justify-content-between align-items-center"
                      >
                        <label class="super-hot-label">super hot</label>
                        <label class="titanium">Titanium</label>
                      </div>
                      <div
                        class="bottom-data d-flex flex-row justify-content-between align-items-center"
                      >
                        <div
                          class="bg-light-black d-flex flex-row gap-1 align-items-center"
                        >
                          <span class="view-count-white">11</span>
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 16 16"
                            class="white-svg"
                          >
                            <path fill="none" d="M0 0h16v16H0z"></path>
                            <g fill="#fff" data-name="Icon ionic-ios-camera">
                              <path
                                d="M9.8 8.24a2.08 2.08 0 1 1-2.08-2.09 2.08 2.08 0 0 1 2.08 2.1z"
                              ></path>
                              <path
                                d="M13.57 4.06H11.6a.59.59 0 0 1-.44-.2c-1.03-1.15-1.4-1.54-1.83-1.54h-3.1c-.43 0-.84.4-1.88 1.55a.58.58 0 0 1-.43.2h-.14v-.3a.3.3 0 0 0-.29-.29h-.94c-.16 0-.3.13-.3.58H2A1.18 1.18 0 0 0 .77 5.18v6.37a1.25 1.25 0 0 0 1.21 1.2h11.6a1.16 1.16 0 0 0 1.1-1.2V5.17a1.08 1.08 0 0 0-1.1-1.1zm-5.7 7.26a3.1 3.1 0 1 1 2.95-2.95 3.1 3.1 0 0 1-2.95 2.95zm3.33-5.16a.47.47 0 1 1 .47-.47.47.47 0 0 1-.47.47z"
                              ></path>
                            </g>
                          </svg>
                        </div>
                        <div
                          class="bg-light-black d-flex flex-row gap-1 align-items-center"
                        >
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="white-svg"
                            viewBox="0 0 9 13"
                            style="width: 0.9rem; height: 0.8rem"
                          >
                            <path
                              fill="#FFF"
                              d="M4.5 0C2 0 0 2 0 4.4 0 7.8 4.5 13 4.5 13S9 7.8 9 4.4C9 2 7 0 4.5 0zm0 6.3c-1.1 0-1.9-.9-1.9-1.9a2 2 0 0 1 1.9-1.9c1.1 0 1.9.8 1.9 1.9 0 1-.8 1.9-1.9 1.9z"
                            ></path>
                          </svg>
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="white-svg"
                            viewBox="0 0 13 12"
                            style="width: 0.9rem; height: 1.2rem"
                          >
                            <path
                              fill="#FFF"
                              d="M9.7 2V0L13 3.3 9.7 6.6V4.3c-3.9.5-5.8 4.8-5.8 4.8 0-3.6 2.5-6.7 5.8-7.1zm1.2 9.2H.8V2.5H7a12 12 0 0 1 2-.8H.4c-.2 0-.4.2-.4.4v9.5c0 .3.2.4.4.4h10.9c.2 0 .4-.2.4-.4V5.2l-.8.8v5.2z"
                            ></path>
                          </svg>
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            overflow="visible"
                            viewBox="0 0 20 18.4"
                            class="white-svg"
                            style="width: 0.9rem; height: 0.8rem"
                          >
                            <path
                              d="M10 18.4L8.6 17C3.4 12.4 0 9.3 0 5.5A5.5 5.5 0 0 1 5.5 0 6 6 0 0 1 10 2a6 6 0 0 1 4.5-2A5.5 5.5 0 0 1 20 5.5c0 3.8-3.4 6.9-8.6 11.5z"
                            ></path>
                          </svg>
                        </div>
                      </div>
                      <!-- slider -->
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="image-wrapper position-relative">
                      <figure class="m-0">
                        <img
                          src="{{ asset('zameen/search/') }}assets/images/screencapture-file-C-Users-Touch-Desktop-zameen-index-html-2023-12-23-19_31_15.png"
                          alt=""
                          srcset=""
                        />
                      </figure>
                      <div
                        class="top-data d-flex flex-row justify-content-between align-items-center"
                      >
                        <label class="super-hot-label">super hot</label>
                        <label class="titanium">Titanium</label>
                      </div>
                      <div
                        class="bottom-data d-flex flex-row justify-content-between align-items-center"
                      >
                        <div
                          class="bg-light-black d-flex flex-row gap-1 align-items-center"
                        >
                          <span class="view-count-white">11</span>
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 16 16"
                            class="white-svg"
                          >
                            <path fill="none" d="M0 0h16v16H0z"></path>
                            <g fill="#fff" data-name="Icon ionic-ios-camera">
                              <path
                                d="M9.8 8.24a2.08 2.08 0 1 1-2.08-2.09 2.08 2.08 0 0 1 2.08 2.1z"
                              ></path>
                              <path
                                d="M13.57 4.06H11.6a.59.59 0 0 1-.44-.2c-1.03-1.15-1.4-1.54-1.83-1.54h-3.1c-.43 0-.84.4-1.88 1.55a.58.58 0 0 1-.43.2h-.14v-.3a.3.3 0 0 0-.29-.29h-.94c-.16 0-.3.13-.3.58H2A1.18 1.18 0 0 0 .77 5.18v6.37a1.25 1.25 0 0 0 1.21 1.2h11.6a1.16 1.16 0 0 0 1.1-1.2V5.17a1.08 1.08 0 0 0-1.1-1.1zm-5.7 7.26a3.1 3.1 0 1 1 2.95-2.95 3.1 3.1 0 0 1-2.95 2.95zm3.33-5.16a.47.47 0 1 1 .47-.47.47.47 0 0 1-.47.47z"
                              ></path>
                            </g>
                          </svg>
                        </div>
                        <div
                          class="bg-light-black d-flex flex-row gap-1 align-items-center"
                        >
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="white-svg"
                            viewBox="0 0 9 13"
                            style="width: 0.9rem; height: 0.8rem"
                          >
                            <path
                              fill="#FFF"
                              d="M4.5 0C2 0 0 2 0 4.4 0 7.8 4.5 13 4.5 13S9 7.8 9 4.4C9 2 7 0 4.5 0zm0 6.3c-1.1 0-1.9-.9-1.9-1.9a2 2 0 0 1 1.9-1.9c1.1 0 1.9.8 1.9 1.9 0 1-.8 1.9-1.9 1.9z"
                            ></path>
                          </svg>
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="white-svg"
                            viewBox="0 0 13 12"
                            style="width: 0.9rem; height: 1.2rem"
                          >
                            <path
                              fill="#FFF"
                              d="M9.7 2V0L13 3.3 9.7 6.6V4.3c-3.9.5-5.8 4.8-5.8 4.8 0-3.6 2.5-6.7 5.8-7.1zm1.2 9.2H.8V2.5H7a12 12 0 0 1 2-.8H.4c-.2 0-.4.2-.4.4v9.5c0 .3.2.4.4.4h10.9c.2 0 .4-.2.4-.4V5.2l-.8.8v5.2z"
                            ></path>
                          </svg>
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            overflow="visible"
                            viewBox="0 0 20 18.4"
                            class="white-svg"
                            style="width: 0.9rem; height: 0.8rem"
                          >
                            <path
                              d="M10 18.4L8.6 17C3.4 12.4 0 9.3 0 5.5A5.5 5.5 0 0 1 5.5 0 6 6 0 0 1 10 2a6 6 0 0 1 4.5-2A5.5 5.5 0 0 1 20 5.5c0 3.8-3.4 6.9-8.6 11.5z"
                            ></path>
                          </svg>
                        </div>
                      </div>
                      <!-- slider -->
                    </div>
                  </div>
                </div>
                <button
                  class="carousel-control-prev min-slider"
                  type="button"
                  data-bs-target="#propcardslider"
                  data-bs-slide="prev"
                >
                  <span class="carousel-control-prev-icon" aria-hidden="true">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="12"
                      height="12"
                      class="slider-svg back"
                      viewBox="0 0 32 32"
                    >
                      <path
                        d="M7.55 3.36c-.8-.8-.7-2.1.1-2.8.8-.7 2-.7 2.7 0l14 14c.8.8.8 2 0 2.8l-14 14c-.8.8-2 .8-2.8.1-.8-.8-.8-2-.1-2.8l.1-.1 12.6-12.5-12.6-12.7z"
                      ></path>
                    </svg>
                  </span>
                  <span class="visually-hidden"> </span>
                </button>
                <button
                  class="carousel-control-next min-slider"
                  type="button"
                  data-bs-target="#propcardslider"
                  data-bs-slide="next"
                >
                  <span class="carousel-control-next-icon" aria-hidden="true">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="12"
                      height="12"
                      class="slider-svg"
                      viewBox="0 0 32 32"
                    >
                      <path
                        d="M7.55 3.36c-.8-.8-.7-2.1.1-2.8.8-.7 2-.7 2.7 0l14 14c.8.8.8 2 0 2.8l-14 14c-.8.8-2 .8-2.8.1-.8-.8-.8-2-.1-2.8l.1-.1 12.6-12.5-12.6-12.7z"
                      ></path>
                    </svg>
                  </span>
                  <span class="visually-hidden"> </span>
                </button>
              </div>
              <div class="card-body-custom">
                <div class="d-flex flex-row justify-content-between gap-2">
                  <span class="prop-count">Added: 33 minutes ago</span>
                  <div class="d-flex flex-row gap-1 align-items-center">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="c1a24809"
                      viewBox="0 0 32 32"
                      style="width: 1rem; height: 1rem"
                    >
                      <g fill="#C32C2B">
                        <path
                          d="M6.4 27.4h-.2l-.1-.3c-3-3.8-3.5-8.4-1.6-13.6-.6-1-1-2-1.1-3.2l-.2-.3-.3.1c-2.6 4.3-4.8 10.6-.5 16 1.8 1.8 4.3 3 6.9 3.3a8 8 0 0 1-2.9-2z"
                        ></path>
                        <path
                          d="M15.6 29.6c-3.1.1-6.1-1-8.3-3.3-4.3-5.4-2.1-11.7.5-16h.4c.1 0 .2 0 .2.2.1 1.7.8 3.2 2 4.4.4-1.4 1.1-2.8 2-4 1.8-2.3 2.5-5.2 2-8l.2-.4h.1l.2.1.5.6c1.2 1.4 2.3 3 3.2 4.5.9 2 1.5 3.8 1.8 6 .7-.6 1.3-1.3 1.7-2 .3-1 .3-2-.1-3l.1-.4h.4a16 16 0 0 1 4.9 11.8 10 10 0 0 1-6.8 9c-1.7.3-3.3.5-5 .5zm-.9-13.8c-.8.8-1.5 1.8-2.1 2.8a9.1 9.1 0 0 0-1.4 4.2c0 3.6 2 6.2 4.6 6.2 1.4 0 2.8-.6 3.7-1.7 1-1 1.4-2.7 1.2-4.2-.4-1.6-1.1-3.2-2.2-4.5-.2.6-.5 1.1-.9 1.5l-.6.5h-.1c-.5 0-.9-.3-1.3-.7a5.8 5.8 0 0 1-.9-4z"
                        ></path>
                        <path
                          d="M31.9 18a15 15 0 0 0-4.8-9.8h-.4c-.1.1-.2.2-.1.3.3 1 .4 2 .1 3l-.1.1c1 2 1.7 4.1 1.9 6.3.6 4.7-1.8 9.4-6 11.6.9 0 1.8-.3 2.7-.6C29 27.5 31.7 24 32 20l-.1-2z"
                        ></path>
                      </g>
                    </svg>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 32 32"
                      aria-label="Trusted badge"
                      style="width: 1rem; height: 1rem"
                    >
                      <g fill="#34A048">
                        <path
                          d="M25.3 16.8V6.5l-5-1.3-4.1-1h-.3l-4 1c-1.8.3-3.5.8-5.3 1.2V17c-.1 2.1.7 4.2 2 5.8 2 2.3 4.5 4.1 7.2 5.2 2.5-1 4.7-2.5 6.6-4.4 2-1.7 3-4.2 2.9-6.7zm-3.2-4.4l-2.5 3.2-4 5.2c-.8 1-1.3 1-2.1 0L9.9 16a1 1 0 0 1 0-1.5c.4-.4 1.1-.3 1.5.1l2.6 2.3.6.5.3-.5 5.6-5.5.7-.5c.4 0 .9.1 1.1.5.1.2.1.7-.2 1.1z"
                        ></path>
                        <path
                          d="M29.1 16.8V5a2 2 0 0 0-1.7-2.2l-6-1.5L16.8.1h-1.7l-4.5 1.1-6.1 1.5C3.5 3 2.7 4 2.8 5v11.9c-.1 3 1 6 2.9 8.2a25 25 0 0 0 9.3 6.7l.9.2c.3 0 .7 0 1-.2a24 24 0 0 0 8.4-5.7c2.6-2.3 4-5.7 3.8-9.2zm-4.8 8.5c-2.3 2.3-5 4.1-7.9 5.3-.2.1-.5.1-.8 0a22 22 0 0 1-8.8-6.3c-1.8-2-2.7-4.7-2.6-7.4V5c0-.5.1-.8.6-.9l10.6-2.6h1C20 2.4 23.5 3.2 27 4c.5.1.6.4.6.8v11.8c.3 3.4-1 6.5-3.3 8.7z"
                        ></path>
                      </g>
                    </svg>
                  </div>
                </div>
                <div class="d-flex flex-column gap-1 my-3">
                  <p class="prop-price-text"><span>PKR</span> 1.48 Crore</p>
                  <p class="prop-price-text line-clamp-one">
                    Park View City, Lahore
                  </p>
                </div>
                <div class="d-flex flex-row gap-2">
                  <div class="d-flex flex-row gap-1 align-items-center">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24"
                      class="svg-custom"
                    >
                      <g fill="none">
                        <path d="M0 0h24v24H0z"></path>
                        <g data-name="Icon awesome-bed">
                          <path
                            d="M8.4 11.8a2 2 0 1 0-2-2 2 2 0 0 0 2 2zm8.8-3.2h-5.6a.4.4 0 0 0-.4.4v3.6H5.6V7.4a.4.4 0 0 0-.4-.4h-.8a.4.4 0 0 0-.4.4v8.8a.4.4 0 0 0 .4.4h.8a.4.4 0 0 0 .4-.4V15h12.8v1.2a.4.4 0 0 0 .4.4h.8a.4.4 0 0 0 .4-.4v-4.8a2.8 2.8 0 0 0-2.8-2.8z"
                          ></path>
                          <path
                            fill="#000"
                            d="M13.2 10.6V13H18v-1.6a.8.8 0 0 0-.8-.8h-4M4.4 7h.8c.22 0 .4.18.4.4v5.2h5.6V9c0-.22.18-.4.4-.4h5.6a2.8 2.8 0 0 1 2.8 2.8v4.8a.4.4 0 0 1-.4.4h-.8a.4.4 0 0 1-.4-.4V15H5.6v1.2a.4.4 0 0 1-.4.4h-.8a.4.4 0 0 1-.4-.4V7.4c0-.22.18-.4.4-.4zm4 .8a2 2 0 1 1 0 4 2 2 0 0 1 0-4z"
                          ></path>
                        </g>
                      </g>
                    </svg>
                    <span class="font-weight-500">3</span>
                  </div>
                  <div class="d-flex flex-row gap-1 align-items-center">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24"
                      class="svg-custom"
                    >
                      <g fill="none">
                        <g data-name="Icon awesome-bath">
                          <path
                            d="M19.25 12H6.5V7.5a1 1 0 0 1 1.84-.54 2.12 2.12 0 0 0 .22 2.6.38.38 0 0 0 0 .5l.37.37a.38.38 0 0 0 .53 0l2.97-2.98a.38.38 0 0 0 0-.52l-.36-.36a.38.38 0 0 0-.5-.01 2.12 2.12 0 0 0-2.02-.48A2.5 2.5 0 0 0 5 7.5V12h-.25a.75.75 0 0 0-.75.75v.5a.75.75 0 0 0 .75.75H5v1a3 3 0 0 0 1 2.24v1a.75.75 0 0 0 .75.76h.5a.75.75 0 0 0 .75-.75V18h8v.25a.75.75 0 0 0 .75.75h.5a.75.75 0 0 0 .75-.75v-1.01A3 3 0 0 0 19 15v-1h.25a.75.75 0 0 0 .75-.75v-.5a.75.75 0 0 0-.75-.75z"
                          ></path>
                          <path
                            fill="#000"
                            d="M7 14v1c0 .4.2.63.33.75l.29.25h8.76l.3-.25A1 1 0 0 0 17 15v-1H7m.5-9c.85 0 1.6.43 2.05 1.08a2.12 2.12 0 0 1 2 .48.37.37 0 0 1 .52 0l.36.37c.14.14.14.38 0 .53l-2.97 2.97a.38.38 0 0 1-.53 0l-.36-.36a.37.37 0 0 1 0-.5 2.12 2.12 0 0 1-.23-2.6 1 1 0 0 0-1.84.54v4.5h12.75c.4 0 .75.34.75.75v.5c0 .41-.34.75-.75.75H19v1a3 3 0 0 1-1 2.24v1c0 .42-.34.76-.75.76h-.5a.75.75 0 0 1-.75-.75v-.25H8v.25c0 .41-.34.75-.75.75h-.5a.75.75 0 0 1-.75-.76v-1.01A3 3 0 0 1 5 15v-1h-.25a.75.75 0 0 1-.75-.75v-.5c0-.4.34-.75.75-.75H5V7.5A2.5 2.5 0 0 1 7.5 5z"
                          ></path>
                        </g>
                        <path d="M0 0h24v24H0z"></path>
                      </g>
                    </svg>
                    <span class="font-weight-500">4</span>
                  </div>
                  <div class="d-flex flex-row gap-1 align-items-center">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24"
                      class="svg-custom"
                    >
                      <path
                        d="M10.4 16.83L9.53 16 8.1 17.4 8 6.57l1.5 1.56.9-.95L7.23 4l-3.2 3.17.9.95 1.5-1.56.12 10.85-1.6-1.51-.92.93L7.22 20zm8.8 2.37a.8.8 0 0 0 .8-.8V5.6a.8.8 0 0 0-.8-.8h-4.8a.8.8 0 0 0-.8.8v12.8a.8.8 0 0 0 .8.8zm-.8-1.6h-3.2V16h1.6v-1.6h-1.6v-1.6h1.6v-1.6h-1.6V9.6h1.6V8h-1.6V6.4h3.2z"
                      ></path>
                    </svg>
                    <span class="font-weight-500">Marla</span>
                  </div>
                </div>
                <div class="mt-2">
                  <p
                    class="prop-price-text line-clamp-one font-weight-400 font-size-14 detial-text-top"
                  >
                    Park View City, Lahore
                  </p>
                  <div class="detail-text flex-row align-items-center">
                    <div class="cf36e19e">
                      <span class="b779b320"
                        >Lake City Lahore Covered over an a</span
                      >
                    </div>
                    ...<a href="#" class="_6e9f9ae0 d-inline-block">more</a>
                  </div>
                </div>
                <div class="d-flex justify-content-between gap-1">
                  <div
                    class="card-btns d-flex flex-row gap-2 align-items-end mt-1"
                  >
                    <button class="email-msg-btn">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 32 32"
                        style="height: 1.1rem; width: 1rem"
                      >
                        <path
                          fill="#6CACE3"
                          d="M28.7 5.3H3.3A3.3 3.3 0 0 0 0 8.6v14.8c0 1.8 1.4 3.3 3.3 3.3h25.4c1.8 0 3.3-1.4 3.3-3.3V8.7c0-1.9-1.4-3.3-3.3-3.4zm-17 12l-8 6.6c-.3.1-.6.1-1-.2-.2-.3 0-.7.2-1l8-6.6c.3-.3.7-.1 1 .1.2.4.1.8-.2 1zm17.5 6.4c-.3.2-.6.3-1 0l-8-6.6c-.2-.1-.2-.5 0-.8 0-.3.6-.3.8 0l8 6.6c.4.1.4.5.2.8zm0-14.5l-11 7.5c-.6.4-1.4.6-2 .7-.9 0-1.6-.3-2.2-.7L3 9.2c-.4-.2-.4-.6-.2-.9.2-.3.6-.4 1-.2l10.8 7.5c.8.5 1.9.5 2.7 0l11-7.5c.2-.3.6-.1.8 0 .3.4.3.8 0 1z"
                        ></path>
                      </svg>
                    </button>
                    <button class="email-msg-btn">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        data-name="Group 5"
                        viewBox="0 0 20 20"
                        style="height: 1.3rem; width: 1.3rem"
                      >
                        <path fill="none" d="M0 0h20v20H0z"></path>
                        <path
                          fill="#6CACE3"
                          d="M10 3.6a6.4 6.4 0 0 0-5.18 10.15l-.8 2.38 2.46-.79A6.4 6.4 0 1 0 10 3.6z"
                        ></path>
                        <path
                          fill="#fafafa"
                          d="M13.83 12.72a1.86 1.86 0 0 1-1.3.93c-.34.08-.79.13-2.3-.5a8.26 8.26 0 0 1-3.27-2.9 3.79 3.79 0 0 1-.78-2 2.12 2.12 0 0 1 .67-1.61.95.95 0 0 1 .67-.24h.22c.2.02.3.03.42.34l.6 1.43a.4.4 0 0 1 .02.35 1.14 1.14 0 0 1-.21.3c-.1.12-.2.2-.29.32-.09.1-.19.22-.08.42a5.87 5.87 0 0 0 1.07 1.33 4.83 4.83 0 0 0 1.54.96.41.41 0 0 0 .47-.08 8 8 0 0 0 .51-.68.37.37 0 0 1 .47-.15c.18.07 1.12.53 1.32.63s.32.14.36.23a1.66 1.66 0 0 1-.11.92z"
                        ></path>
                      </svg>
                    </button>
                    <button
                      class="call-btn d-flex flex-row align-items-center gap-2"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="16"
                        viewBox="0 0 16 16"
                        fill="#fff"
                        class="_40c10793"
                      >
                        <path
                          d="M13.3 10.3A7.6 7.6 0 0 1 11 10a.7.7 0 0 0-.7.1l-1 1.4a10.1 10.1 0 0 1-4.6-4.6L6 5.7A.7.7 0 0 0 6 5a7.4 7.4 0 0 1-.3-2.3A.7.7 0 0 0 5 2H2.8c-.4 0-.8.2-.8.7A11.4 11.4 0 0 0 13.3 14a.7.7 0 0 0 .7-.8V11a.7.7 0 0 0-.7-.6z"
                        ></path>
                      </svg>
                      <span>CALL</span>
                    </button>
                  </div>
                    <div class="hover-prop">
                      <img
                        src="{{ asset('zameen/search/assets/images/real-estate-small.jpg') }}"
                        class="before-hover"
                      />
                      <div class="after-hover">
                        <div class="d-flex flex-column gap-1">
                          <img
                          src="{{ asset('zameen/search/assets/images/real-estate-small.jpg') }}"
                          class="before-hover"
                        />
                        <span class="muted-text">Registerd Since : 2023</span>
                        <p class="font-weight-500 line-clamp-one">2024 Propeties for sale</p>
                        <p class="font-weight-500 line-clamp-one">0 Propeties for Rent</p>
                        </div>
                      </div>
                    </div>
                 
                </div>
              </div>
            </li>
          </ul>
          <!-- pagination -->
          <div class="d-flex justify-content-center align-items-center">
            <nav aria-label="...">
              <ul class="pagination">
                <li class="page-item disabled">
                  <a class="page-link">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active" aria-current="page">
                  <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#">Next</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- artical-section -->
  <article>
    <div class="wrapper-for-all">
      <div class="custom-container">
        <div class="artical-wrapper d-flex flex-column gap-2">
          <h3>Offices for Rent in Lahore</h3>
          <p>
            Lahore is a rapidly growing metropolitan area and is the
            second-largest city in Pakistan. It hosts several prominent
            multinationals, business centers, and industrial estates. People
            from across the country have moved to Lahore in search of
            well-paid jobs and better living standards. Besides, Lahore is
            also recognized as a tourist destination which has significantly
            increased the tourist activities and retail foot traffic. Renting
            out an office in Lahore allows you to enjoy the top-notch
            infrastructural development and transportation services, making
            Lahore a desirable place to establish a corporate space. Some of
            the top business centers to look for an office for rent in Lahore
            include Gulberg, Bahria Town, Bahria Orchard, Jail Road, Upper
            Mall Road, Raiwind Road, and the Defence Housing Authority
            (DHA).&nbsp;
          </p>
          <h3>Offices for Rent in Lahore</h3>
          <p>
            Lahore is a rapidly growing metropolitan area and is the
            second-largest city in Pakistan. It hosts several prominent
            multinationals, business centers, and industrial estates. People
            from across the country have moved to Lahore in search of
            well-paid jobs and better living standards. Besides, Lahore is
            also recognized as a tourist destination which has significantly
            increased the tourist activities and retail foot traffic. Renting
            out an office in Lahore allows you to enjoy the top-notch
            infrastructural development and transportation services, making
            Lahore a desirable place to establish a corporate space. Some of
            the top business centers to look for an office for rent in Lahore
            include Gulberg, Bahria Town, Bahria Orchard, Jail Road, Upper
            Mall Road, Raiwind Road, and the Defence Housing Authority
            (DHA).&nbsp;
          </p>
          <h3>Offices for Rent in Lahore</h3>
          <p>
            Lahore is a rapidly growing metropolitan area and is the
            second-largest city in Pakistan. It hosts several prominent
            multinationals, business centers, and industrial estates. People
            from across the country have moved to Lahore in search of
            well-paid jobs and better living standards. Besides, Lahore is
            also recognized as a tourist destination which has significantly
            increased the tourist activities and retail foot traffic. Renting
            out an office in Lahore allows you to enjoy the top-notch
            infrastructural development and transportation services, making
            Lahore a desirable place to establish a corporate space. Some of
            the top business centers to look for an office for rent in Lahore
            include Gulberg, Bahria Town, Bahria Orchard, Jail Road, Upper
            Mall Road, Raiwind Road, and the Defence Housing Authority
            (DHA).&nbsp;
          </p>
        </div>
      </div>
    </div>
  </article>
  <!-- popular-search -->
  <div class="wrapper-for-all my-3">
    <div class="custom-container">
      <div class="d-flex flex-column gap-2">
        <h3 class="pop-hd">Popular searches</h3>
        <div class="d-flex flex-row gap-3 flex-wrap">
          <a href="#" class="pop-link"
            >Furnished Offices For Rent in Lahore</a
          >
        </div>
      </div>
    </div>
  </div>
  <!-- mobile-app -->
  <section class="has-border mb-3">
    <div class="wrapper-for-all">
      <div class="custom-container">
        <div class="social-app-bg">
          <div class="eecc1d16 mb-lg-0 mb-4">
            <div class="lg-text">Get the Zameen App</div>
            <div class="_5005c3df">
              Buy and Rent Property faster and better using our app.
            </div>
          </div>
          <div class="bfe1194d">
            <div class="_0e2528e5">
              <a
                href="https://itunes.apple.com/us/app/zameen/id903880271?mt=8"
                title="Open iTunes to Download and Install this App"
                aria-label="Open ITunes to Download and Install this App"
              >
                <img
                  src="assets/i{{ asset('zameen/search/') }}mages/app-store.svg"
                  alt=""
                  height="40px"
                /> </a
              ><a
                href="https://play.google.com/store/apps/details?id=com.zameen.zameenapp"
                title="Open Google Play to Download and Install this App"
                aria-label="Open Google Play to Download and Install this App"
              >
                <img src="assets/images/google.svg" {{ asset('zameen/search/') }}alt="" height="40px" />
              </a>
            </div>
            <div class="e8e082f9 d-flex flex-row gap-1 mt-3">
              <div class="eed449e1 d-flex flex-column text-end">
                <div class="e81f2a64">Scan the QR code to get the app</div>
                <img
                  src="assets/i{{ asset('zameen/search/') }}mages/arrow-bottom-green.svg"
                  alt=""
                  srcset=""
                  height="30px"
                  style="margin-left: 60px"
                />
              </div>
              <img
                src="assets/ima{{ asset('zameen/search/') }}ges/qr-scan.svg"
                alt=""
                srcset=""
                height="80px"
              />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

   
@endsection


@push('scripts')
   
<script src="{{ asset('zameen/search/assets/js/custom.js') }}"></script>
<script
  src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
  crossorigin="anonymous"
></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
  $(document).ready(function () {
    $(".js-example-basic-single").select2();
  });

  // Function to check and remove class
  function checkWidth() {
  var windowWidth = $(window).width();
  var $yourElement = $('.properties-cards'); // Replace with your actual class selector

  // Check if window width is less than 800 pixels
  if (windowWidth < 768) {
    // Remove the class
    $yourElement.removeClass('active');
  } else {
    // Add the class back if the window is wider than 800 pixels
    $yourElement.addClass('active');
  }
}

// Call the function on document ready
checkWidth();

// Bind the function to the resize event
$(window).resize(function() {
  checkWidth();
});
</script>
  
@endpush
