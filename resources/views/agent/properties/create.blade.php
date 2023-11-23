@extends('agent.layout.app')

@push('styles')
    <!-- jQuery UI -->
    <link href="assets/css/jquery-ui.min.css" rel="stylesheet">

    <!-- medjestic styles -->
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="favicon.ico">
    <!-- Lightbox -->
    <link rel="stylesheet" href="assets/css/lightbox.min.css">
    <!-- tags input -->
    <link href="assets/css/bootstrap-tagsinput.css" rel="stylesheet">
@endpush

@section('content')
    <!-- Body Content Wrapper -->
    <div class="ms-content-wrapper">
        <div class="row">
            <div class="col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb pl-0">
                        <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Properties</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Add Propertiess</li>
                    </ol>
                </nav>
            </div>
            <div class="col-xl-12 col-md-12">
                <div class="ms-panel">
                    <div class="ms-panel-header ms-panel-custome">
                        <h6>Add Properties</h6>
                        <a href="Properties-list.html" class="ms-text-primary">Propertiess List</a>
                    </div>
                    <div class="ms-panel-body">
                        <form class="needs-validation" action="{{ route('agent.properties.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom0001">Property Title<span
                                            style="color: red;">*</span></label>
                                    <div class="input-group">
                                        <input type="text" class="form-control @error('title')is-invalid @enderror"
                                            id="title" name="title" placeholder="Enter Title " required />
                                    </div>
                                    <div class="col-md-12">
                                        @if ($errors->has('title'))
                                            <div class="alert-error mt-1 mb-3">
                                                <svg width="12" height="11" viewBox="0 0 12 11" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M4.77994 1.16969C5.31517 0.218177 6.68513 0.218176 7.22035 1.16969L11.1266 8.11407C11.6515 9.04731 10.9771 10.2004 9.90636 10.2004H2.09393C1.02318 10.2004 0.348776 9.04731 0.873727 8.11407L4.77994 1.16969ZM6.70009 8.10051C6.70009 8.48711 6.38668 8.80051 6.00009 8.80051C5.61349 8.80051 5.30009 8.48711 5.30009 8.10051C5.30009 7.71391 5.61349 7.40051 6.00009 7.40051C6.38668 7.40051 6.70009 7.71391 6.70009 8.10051ZM6.00009 2.50051C5.61349 2.50051 5.30009 2.81391 5.30009 3.20051V5.30051C5.30009 5.68711 5.61349 6.00051 6.00009 6.00051C6.38668 6.00051 6.70009 5.68711 6.70009 5.30051V3.20051C6.70009 2.81391 6.38668 2.50051 6.00009 2.50051Z"
                                                        fill="#CE2121" />
                                                </svg> {{ $errors->first('title') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="price">Property Price <span style="color: red;">*</span> </label>
                                    <div class="input-group">
                                        <input type="number" class="form-control @error('price')is-invalid @enderror"
                                            id="price" placeholder="Enter Property Price(PKR)" name="price"
                                            required />

                                    </div>
                                    <div class="col-md-12">
                                        @if ($errors->has('price'))
                                            <div class="alert-error mt-1 mb-3">
                                                <svg width="12" height="11" viewBox="0 0 12 11" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M4.77994 1.16969C5.31517 0.218177 6.68513 0.218176 7.22035 1.16969L11.1266 8.11407C11.6515 9.04731 10.9771 10.2004 9.90636 10.2004H2.09393C1.02318 10.2004 0.348776 9.04731 0.873727 8.11407L4.77994 1.16969ZM6.70009 8.10051C6.70009 8.48711 6.38668 8.80051 6.00009 8.80051C5.61349 8.80051 5.30009 8.48711 5.30009 8.10051C5.30009 7.71391 5.61349 7.40051 6.00009 7.40051C6.38668 7.40051 6.70009 7.71391 6.70009 8.10051ZM6.00009 2.50051C5.61349 2.50051 5.30009 2.81391 5.30009 3.20051V5.30051C5.30009 5.68711 5.61349 6.00051 6.00009 6.00051C6.38668 6.00051 6.70009 5.68711 6.70009 5.30051V3.20051C6.70009 2.81391 6.38668 2.50051 6.00009 2.50051Z"
                                                        fill="#CE2121" />
                                                </svg> {{ $errors->first('price') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-3 mb-3">
                                    <label for="area">Area <span style="color: red;">*</span></label>
                                    <div class="input-group">
                                        <input type="number" class="form-control @error('area')is-invalid @enderror"
                                            name="area" id="area" placeholder="Enter Area" required />
                                    </div>
                                    <div class="col-md-12">
                                        @if ($errors->has('area'))
                                            <div class="alert-error mt-1 mb-3">
                                                <svg width="12" height="11" viewBox="0 0 12 11" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M4.77994 1.16969C5.31517 0.218177 6.68513 0.218176 7.22035 1.16969L11.1266 8.11407C11.6515 9.04731 10.9771 10.2004 9.90636 10.2004H2.09393C1.02318 10.2004 0.348776 9.04731 0.873727 8.11407L4.77994 1.16969ZM6.70009 8.10051C6.70009 8.48711 6.38668 8.80051 6.00009 8.80051C5.61349 8.80051 5.30009 8.48711 5.30009 8.10051C5.30009 7.71391 5.61349 7.40051 6.00009 7.40051C6.38668 7.40051 6.70009 7.71391 6.70009 8.10051ZM6.00009 2.50051C5.61349 2.50051 5.30009 2.81391 5.30009 3.20051V5.30051C5.30009 5.68711 5.61349 6.00051 6.00009 6.00051C6.38668 6.00051 6.70009 5.68711 6.70009 5.30051V3.20051C6.70009 2.81391 6.38668 2.50051 6.00009 2.50051Z"
                                                        fill="#CE2121" />
                                                </svg> {{ $errors->first('area') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <div class="form-line">
                                        <label>Area Unit<span style="color: red;">*</span></label>
                                        <select name="unit" id="unit" class="form-control show-tick {{ $errors->has('unit') ? 'focused error' : '' }}" required />
                                            <option value="">-- Please select --</option>
                                            <option value="SqFeet">Square Feet</option>
                                            <option value="SqYards">Square Yards</option>
                                            <option value="Marla">Marla</option>
                                            <option value="Kanal">Kanal</option>
                                            <option value="Acre">Acre</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-2">
                                    <label for="validationCustom0004">Bedroom <span style="color: red;">*</span></label>
                                    <div class="input-group">
                                        <input id="bedroom" name="bedroom" type="number"
                                            class="form-control @error('title')is-invalid @enderror"
                                            placeholder="Enter Bedroom" required />

                                    </div>
                                    <div class="col-md-12">
                                        @if ($errors->has('bedroom'))
                                            <div class="alert-error mt-1 mb-3">
                                                <svg width="12" height="11" viewBox="0 0 12 11" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M4.77994 1.16969C5.31517 0.218177 6.68513 0.218176 7.22035 1.16969L11.1266 8.11407C11.6515 9.04731 10.9771 10.2004 9.90636 10.2004H2.09393C1.02318 10.2004 0.348776 9.04731 0.873727 8.11407L4.77994 1.16969ZM6.70009 8.10051C6.70009 8.48711 6.38668 8.80051 6.00009 8.80051C5.61349 8.80051 5.30009 8.48711 5.30009 8.10051C5.30009 7.71391 5.61349 7.40051 6.00009 7.40051C6.38668 7.40051 6.70009 7.71391 6.70009 8.10051ZM6.00009 2.50051C5.61349 2.50051 5.30009 2.81391 5.30009 3.20051V5.30051C5.30009 5.68711 5.61349 6.00051 6.00009 6.00051C6.38668 6.00051 6.70009 5.68711 6.70009 5.30051V3.20051C6.70009 2.81391 6.38668 2.50051 6.00009 2.50051Z"
                                                        fill="#CE2121" />
                                                </svg> {{ $errors->first('bedroom') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom0005">Bathroom <span style="color: red;">*</span></label>
                                    <div class="input-group">
                                        <input id="bathroom" name="bathroom" type="number"
                                            class="form-control @error('title')is-invalid @enderror"
                                            placeholder="Enter Bathroom" required />

                                    </div>
                                    <div class="col-md-12">
                                        @if ($errors->has('bathroom'))
                                            <div class="alert-error mt-1 mb-3">
                                                <svg width="12" height="11" viewBox="0 0 12 11" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M4.77994 1.16969C5.31517 0.218177 6.68513 0.218176 7.22035 1.16969L11.1266 8.11407C11.6515 9.04731 10.9771 10.2004 9.90636 10.2004H2.09393C1.02318 10.2004 0.348776 9.04731 0.873727 8.11407L4.77994 1.16969ZM6.70009 8.10051C6.70009 8.48711 6.38668 8.80051 6.00009 8.80051C5.61349 8.80051 5.30009 8.48711 5.30009 8.10051C5.30009 7.71391 5.61349 7.40051 6.00009 7.40051C6.38668 7.40051 6.70009 7.71391 6.70009 8.10051ZM6.00009 2.50051C5.61349 2.50051 5.30009 2.81391 5.30009 3.20051V5.30051C5.30009 5.68711 5.61349 6.00051 6.00009 6.00051C6.38668 6.00051 6.70009 5.68711 6.70009 5.30051V3.20051C6.70009 2.81391 6.38668 2.50051 6.00009 2.50051Z"
                                                        fill="#CE2121" />
                                                </svg> {{ $errors->first('bathroom') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label class="label-custom">Select Property Features</label>
                                        <select class="form-control" nultiple name="features[]">
                                            <option value="" disabled selected>Choose Features</option>
                                            @foreach ($features as $feature)
                                                <option value="{{ $feature->id }}">{{ $feature->name }}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <div class="form-group form-float ">
                                        <div class="form-line">
                                            <label>Select State <span style="color: red;">*</span></label>
                                            <select name="state" id="state"
                                                class="form-control show-tick {{ $errors->has('state') ? 'focused error' : '' }}"
                                                required />
                                            <option value="">-- Please select --</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        @if ($errors->has('state'))
                                            <div class="alert-error mt-1 mb-3">
                                                <svg width="12" height="11" viewBox="0 0 12 11" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M4.77994 1.16969C5.31517 0.218177 6.68513 0.218176 7.22035 1.16969L11.1266 8.11407C11.6515 9.04731 10.9771 10.2004 9.90636 10.2004H2.09393C1.02318 10.2004 0.348776 9.04731 0.873727 8.11407L4.77994 1.16969ZM6.70009 8.10051C6.70009 8.48711 6.38668 8.80051 6.00009 8.80051C5.61349 8.80051 5.30009 8.48711 5.30009 8.10051C5.30009 7.71391 5.61349 7.40051 6.00009 7.40051C6.38668 7.40051 6.70009 7.71391 6.70009 8.10051ZM6.00009 2.50051C5.61349 2.50051 5.30009 2.81391 5.30009 3.20051V5.30051C5.30009 5.68711 5.61349 6.00051 6.00009 6.00051C6.38668 6.00051 6.70009 5.68711 6.70009 5.30051V3.20051C6.70009 2.81391 6.38668 2.50051 6.00009 2.50051Z"
                                                        fill="#CE2121" />
                                                </svg> {{ $errors->first('state') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
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
                                    <div class="col-md-12">
                                        @if ($errors->has('city_id'))
                                            <div class="alert-error mt-1 mb-3">
                                                <svg width="12" height="11" viewBox="0 0 12 11" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M4.77994 1.16969C5.31517 0.218177 6.68513 0.218176 7.22035 1.16969L11.1266 8.11407C11.6515 9.04731 10.9771 10.2004 9.90636 10.2004H2.09393C1.02318 10.2004 0.348776 9.04731 0.873727 8.11407L4.77994 1.16969ZM6.70009 8.10051C6.70009 8.48711 6.38668 8.80051 6.00009 8.80051C5.61349 8.80051 5.30009 8.48711 5.30009 8.10051C5.30009 7.71391 5.61349 7.40051 6.00009 7.40051C6.38668 7.40051 6.70009 7.71391 6.70009 8.10051ZM6.00009 2.50051C5.61349 2.50051 5.30009 2.81391 5.30009 3.20051V5.30051C5.30009 5.68711 5.61349 6.00051 6.00009 6.00051C6.38668 6.00051 6.70009 5.68711 6.70009 5.30051V3.20051C6.70009 2.81391 6.38668 2.50051 6.00009 2.50051Z"
                                                        fill="#CE2121" />
                                                </svg> {{ $errors->first('city_id') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
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
                                <div class="col-md-6 mb-3">
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
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <div class="form-group form-float" id="hide_block">
                                        <div class="form-line">
                                            <label>Select Block</label>
                                            <select name="block" id="block"
                                                class="form-control show-tick {{ $errors->has('block') ? 'focused error' : '' }}">
                                                <option value="">-- Please select --</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
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
                            <div class="form-row">
                                <div class="col-md-6 mb-2">
                                    <label for="address">Address <span style="color: red;">*</span></label>
                                    <div class="input-group">
                                        <input id="address" name="address"
                                            class="form-control @error('address')is-invalid @enderror" required />
                                    </div>
                                    <div class="col-md-12">
                                        @if ($errors->has('address'))
                                            <div class="alert-error mt-1 mb-3">
                                                <svg width="12" height="11" viewBox="0 0 12 11" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M4.77994 1.16969C5.31517 0.218177 6.68513 0.218176 7.22035 1.16969L11.1266 8.11407C11.6515 9.04731 10.9771 10.2004 9.90636 10.2004H2.09393C1.02318 10.2004 0.348776 9.04731 0.873727 8.11407L4.77994 1.16969ZM6.70009 8.10051C6.70009 8.48711 6.38668 8.80051 6.00009 8.80051C5.61349 8.80051 5.30009 8.48711 5.30009 8.10051C5.30009 7.71391 5.61349 7.40051 6.00009 7.40051C6.38668 7.40051 6.70009 7.71391 6.70009 8.10051ZM6.00009 2.50051C5.61349 2.50051 5.30009 2.81391 5.30009 3.20051V5.30051C5.30009 5.68711 5.61349 6.00051 6.00009 6.00051C6.38668 6.00051 6.70009 5.68711 6.70009 5.30051V3.20051C6.70009 2.81391 6.38668 2.50051 6.00009 2.50051Z"
                                                        fill="#CE2121" />
                                                </svg> {{ $errors->first('address') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="input-field col s6">
                                        <div class="row">
                                            <div class="col-6">
                                                <label for="location_latitude">Latitude</label>
                                                <input id="location_latitude" name="location_latitude" type="text"
                                                    class="form-control validate" required>
                                            </div>
                                            <div class="col-6">
                                                <label for="location_longitude">Longitude</label>
                                                <input id="location_longitude" name="location_longitude" type="text"
                                                    class="form-control validate" required>
                                            </div>
                                        </div>


                                    </div>
                                </div>

                            </div>
                            <div class="form-row">
                                <div class="col-md-12 mb-2">
                                    <label for="description">Description</label>
                                    <div class="input-group">
                                        <textarea style="width: 100%;" id="description" name="description" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-2">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <label>Property Purpose <span style="color: red;">*</span></label>
                                            <select name="purpose" class="form-control" required />
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
                                    </div>
                                </div>

                                <div class="col-md-6 mb-3">

                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <label>Type <span style="color: red;">*</span></label>
                                            <select name="type" class="form-control" required />
                                            <option value="">-- Please select --</option>
                                            <option value="Selling">Selling</option>
                                            <option value="Renting">Renting
                                            </option>
                                            <option value="Wanted">Wanted</option>
                                            <option value="Sold">Sold
                                            </option>
                                            <option value="Rented">Rented
                                            </option>
                                            <option value="PreparingSelling">Preparing Selling
                                            </option>
                                            <option value="NotAvailable">Not Available
                                            </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                         </div>
                    
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="video">Youtube Link</label>
                            <input id="video" name="video" type="text" class="form-control ">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="nearby">Nearby Locations</label>
                            <input id="nearby" name="nearby" class="form-control ">
                        </div>


                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="nearby">Featured Property Image <span style="color: red;">*</span></label>

                            <div class="dropzone-button">
                                <label for="thumbnail-input" style="display: block;">
                                    <div class="dropzone" id="dropzone">
                                        <div class="dropzone-label">
                                            <i class="fas fa-cloud-upload-alt"></i>
                                            <span>Drop files here or click to upload.</span>
                                        </div>
                                        <input type="file" name="image" id="thumbnail-input"
                                            onchange="handleFileUpload()" accept="image/*" />
                                    </div>
                                </label>
                            </div>
                            <div id="preview-container"></div>

                            <div class="col-md-12">
                                @if ($errors->has('image'))
                                    <div class="alert-error mt-1 mb-3">
                                        <svg width="12" height="11" viewBox="0 0 12 11" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M4.77994 1.16969C5.31517 0.218177 6.68513 0.218176 7.22035 1.16969L11.1266 8.11407C11.6515 9.04731 10.9771 10.2004 9.90636 10.2004H2.09393C1.02318 10.2004 0.348776 9.04731 0.873727 8.11407L4.77994 1.16969ZM6.70009 8.10051C6.70009 8.48711 6.38668 8.80051 6.00009 8.80051C5.61349 8.80051 5.30009 8.48711 5.30009 8.10051C5.30009 7.71391 5.61349 7.40051 6.00009 7.40051C6.38668 7.40051 6.70009 7.71391 6.70009 8.10051ZM6.00009 2.50051C5.61349 2.50051 5.30009 2.81391 5.30009 3.20051V5.30051C5.30009 5.68711 5.61349 6.00051 6.00009 6.00051C6.38668 6.00051 6.70009 5.68711 6.70009 5.30051V3.20051C6.70009 2.81391 6.38668 2.50051 6.00009 2.50051Z"
                                                fill="#CE2121" />
                                        </svg> {{ $errors->first('image') }}
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="nearby">Floor Plan Image(Optional)</label>
                            <div class="dropzone-button">
                                <label for="floorinputs" style="display: block;">
                                    <div class="dropzone" id="dropzone">
                                        <div class="dropzone-label">
                                            <i class="fas fa-cloud-upload-alt"></i>
                                            <span>Drop files here or click to upload.</span>
                                        </div>
                                        <input type="file" name="floor_plan" id="floorinputs"
                                            onchange="floorUploads()" accept="image/*" />
                                    </div>
                                </label>
                            </div>
                            <div id="preview-floor"></div>

                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-12 mb-3">
                            <label for="nearby">Property Image Gallery</label>
                            <div class="ms-panel ms-panel-bshadow-none">
                                <div class="ms-panel-body">
                                    <div class="d-flex flex-column gap-3">
                                        <div id="groupdropzone">
                                            <div
                                                class="dropzone-text d-flex justify-content-center flex-column gap-2 align-items-center dropzone-label">
                                                <div class="addIcon">
                                                    <i class="fas fa-cloud-upload-alt" aria-hidden="true"></i>
                                                </div>
                                                <span>Drop files here or click to upload.</span>
                                            </div>
                                            <input type="file" name="gallaryimage[]" id="file-input-group" multiple>
                                        </div>
                                        <div id="preview-container-group"
                                            class="d-flex flex-row gap-2 flex-wrap justify-content-center"></div>
                                        <div class="d-flex flex-row justify-content-between">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                    <button class="btn btn-warning mt-4 d-inline w-20" type="submit">Reset</button>
                    <button class="btn btn-primary mt-4 d-inline w-20" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/8zl4u1orwro7ldm44ng2aw4rh5vvme2inplk6r05irnqy2dp/tinymce/5/tinymce.min.js"
        referrerpolicy="origin"></script>

    <script>
        tinymce.init({
            selector: 'textarea#description',
            menubar: false
        });
    </script>
    <script>
        function handleFileUpload() {
            const input = document.getElementById('thumbnail-input');
            const files = input.files;
            if (files.length > 0) {
                const reader = new FileReader();
                reader.readAsDataURL(files[0]);
                reader.onload = function() {
                    const imageUrl = URL.createObjectURL(files[0]);
                    const previewContainer = document.getElementById('preview-container');
                    previewContainer.innerHTML = '';
                    const previewImage = document.createElement('img');
                    previewImage.classList.add('preview-image');
                    previewImage.src = reader.result;
                    console.log('Image URL:', imageUrl);
                    previewContainer.appendChild(previewImage);
                    const deleteButton = document.createElement('button');
                    deleteButton.classList.add('delete-button');
                    deleteButton.innerHTML = '<i class="fa-solid fa-xmark"></i>';
                    deleteButton.onclick = function() {
                        input.value = '';
                        previewContainer.innerHTML = '';
                    };
                    previewContainer.appendChild(deleteButton);
                };
            }
        }
    </script>

    <script>
        function floorUploads() {

            const input = document.getElementById('floorinputs');
            const files = input.files;
            if (files.length > 0) {
                const reader = new FileReader();
                reader.readAsDataURL(files[0]);
                reader.onload = function() {
                    const imageUrl = URL.createObjectURL(files[0]);
                    const previewContainer = document.getElementById('preview-floor');
                    previewContainer.innerHTML = '';
                    const previewImage = document.createElement('img');
                    previewImage.classList.add('preview-image');
                    previewImage.src = reader.result;
                    console.log('Image URL:', imageUrl);
                    previewContainer.appendChild(previewImage);
                    const deleteButton = document.createElement('button');
                    deleteButton.classList.add('delete-button');
                    deleteButton.innerHTML = '<i class="fa-solid fa-xmark"></i>';
                    deleteButton.onclick = function() {
                        input.value = '';
                        previewContainer.innerHTML = '';
                    };
                    previewContainer.appendChild(deleteButton);
                };
            }
        }
    </script>
    <!-- tags-input -->
    <script>
        console.log($(".tag-input").val());
    </script>

    <!-- Page Specific Scripts Start -->
    <script src="assets/js/jquery.webticker.min.js"></script>
    <!-- Page Specific Scripts Finish -->

    <!-- medjestic core JavaScript -->
    <script src="assets/js/framework.js"></script>
    <!-- Settings -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="assets/js/settings.js"></script>
    <script>
        const dropzone = document.getElementById("groupdropzone");
        const fileInput = document.getElementById("file-input-group");
        const previewContainer = document.getElementById("preview-container-group");

        let files = [];

        function highlightDropzone() {
            dropzone.classList.add("highlight");
        }

        function unhighlightDropzone() {
            dropzone.classList.remove("highlight");
        }

        function handleDrop(event) {
            event.preventDefault();
            unhighlightDropzone();
            const droppedFiles = event.dataTransfer.files;
            handleFiles(droppedFiles);
        }

        function handleFiles(selectedFiles) {
            files.push(...selectedFiles);
            const filePaths = [];
            for (let i = 0; i < selectedFiles.length; i++) {
                filePaths.push(URL.createObjectURL(selectedFiles[i]));
            }
            console.log(filePaths);
            previewFiles();
        }

        function previewFiles() {
            previewContainer.innerHTML = "";
            files.forEach((file) => {
                const reader = new FileReader();
                reader.readAsDataURL(file);
                reader.onload = function() {
                    const preview = document.createElement("div");
                    preview.classList.add("preview");

                    if (file.type.includes("image")) {
                        const image = new Image();
                        image.src = reader.result;
                        preview.appendChild(image);
                    }
                    //   else if (file.type.includes("video")) {
                    //     const video = document.createElement("video");
                    //     video.src = reader.result;
                    //     video.controls = true;
                    //     preview.appendChild(video);
                    //   }

                    const deleteBtn = document.createElement("button");
                    deleteBtn.innerHTML = `<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.292893 0.292893C0.683417 -0.0976311 1.31658 -0.0976311 1.70711 0.292893L6 4.58579L10.2929 0.292893C10.6834 -0.0976311 11.3166 -0.0976311 11.7071 0.292893C12.0976 0.683417 12.0976 1.31658 11.7071 1.70711L7.41421 6L11.7071 10.2929C12.0976 10.6834 12.0976 11.3166 11.7071 11.7071C11.3166 12.0976 10.6834 12.0976 10.2929 11.7071L6 7.41421L1.70711 11.7071C1.31658 12.0976 0.683417 12.0976 0.292893 11.7071C-0.0976311 11.3166 -0.0976311 10.6834 0.292893 10.2929L4.58579 6L0.292893 1.70711C-0.0976311 1.31658 -0.0976311 0.683417 0.292893 0.292893Z" fill="white"/>
    </svg>`
                    deleteBtn.classList.add("delete-btn");
                    deleteBtn.addEventListener("click", () => {
                        deleteFile(file);
                    });

                    preview.appendChild(deleteBtn);

                    previewContainer.appendChild(preview);
                };
            });
        }

        function deleteFile(file) {
            files = files.filter((f) => f !== file);
            previewFiles();
        }

        dropzone.addEventListener("dragenter", highlightDropzone);
        dropzone.addEventListener("dragleave", unhighlightDropzone);
        dropzone.addEventListener("dragover", (e) => e.preventDefault());
        dropzone.addEventListener("drop", handleDrop);

        fileInput.addEventListener("change", (event) => {
            handleFiles(event.target.files);
        });
    </script>
    <!-- // auto complete -->
    <script>
        // Define the array of suggestions
        var suggestions = ["Apple", "Banana", "Cherry", "Durian", "Elderberry", "Fig", "Apple", "Banana", "Cherry",
            "Durian", "Elderberry", "Fig"
        ];

        // Get the input element and the suggestions list
        var input = document.getElementById("autocomplete-input");
        var list = document.getElementById("autocomplete-list");


        // Add an event listener to the input element
        input.addEventListener("input", function() {
            var val = this.value;
            list.innerHTML = "";
            if (val.length > 0) {
                var matches = suggestions.filter((suggestion) => {
                    return suggestion.toLowerCase().indexOf(val.toLowerCase()) != -1;
                });
                if (matches.length > 0) {
                    matches.forEach((match) => {
                        var suggestionElem = document.createElement("li");
                        list.style.display = "block";
                        suggestionElem.innerText = match;

                        suggestionElem.addEventListener("click", function() {
                            input.value = match;
                            list.innerHTML = "";
                            list.style.display = "none";
                        });
                        list.appendChild(suggestionElem);
                    });
                } else {
                    list.style.display = "none";
                }
            }
        });
        $('#autocomplete-input').keyup(function() {
            var input_ = $('#autocomplete-input').val();
            console.log('input_.length', input_.length);
            if (input_.length == 0) {
                list.style.display = "none";
            }
        });
    </script>
    <script>
        $(document).ready(function() {
            $('input#title, textarea#nearby').characterCounter();
            $('select').formSelect();
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
