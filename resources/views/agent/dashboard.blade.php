@extends('agent.layout.app')

@push('styles')
@endpush

@section('content')


    <!-- Body Content Wrapper -->
    <div class="ms-content-wrapper">
        <div class="row">
            <!-- Notifications Widgets -->

            <div class="col-xl-3 col-md-6 col-sm-6">
                <a href="#">
                    <div class="ms-card card-gradient-custom ms-widget ms-infographics-widget ms-p-relative">
                        <div class="ms-card-body media">
                            <div class="media-body">
                                <h6>Properties</h6>
                                <p class="ms-card-change">{{ $propertytotal }}</p>
                            </div>
                        </div>
                        <i class="fas fa-stethoscope ms-icon-mr"></i>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-md-6 col-sm-6">
                <a href="#">
                    <div class="ms-card card-gradient-custom ms-widget ms-infographics-widget ms-p-relative">
                        <div class="ms-card-body media">
                            <div class="media-body">
                                <h6>Messages</h6>
                                <p class="ms-card-change"> {{ $messagetotal }}</p>
                            </div>
                        </div>
                        <i class="fas fa-user-plus ms-icon-mr"></i>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-md-6 col-sm-6">
                <a href="#">
                    <div class="ms-card card-gradient-custom ms-widget ms-infographics-widget ms-p-relative">
                        <div class="ms-card-body media">
                            <div class="media-body">
                                <h6 class="bold">Recent Properties</h6>
                             
                                @foreach($properties as $key => $property)
                              
                                    <a href="{{route('property.show',$property->slug)}}" target="_blank" class="border-bottom display-block p-15  grey-text-d-2">
                                     
                                        <p class="ms-card-change">PKR {{ $property->price }}</p>
                                    </a>
                              
                                @endforeach
                            </div>
                        </div>
                        <i class="fa fa-wheelchair ms-icon-mr"></i>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-md-6 col-sm-6">
                <a href="#">
                    <div class="ms-card card-gradient-custom ms-widget ms-infographics-widget ms-p-relative">
                        <div class="ms-card-body media">
                            <div class="media-body">
                                <h6 class="bold">Recent Mails</h6>
                              
                        
                                    
                                       
                                        <p class="ms-card-change">25</p>
                             
                            </div>
                        </div>
                        <i class="fas fa-briefcase-medical ms-icon-mr"></i>
                    </div>
                </a>
            </div>

            <div class="col-xl-3 col-md-6 col-sm-6">
                <a href="#">
                    <div class="ms-card card-gradient-custom ms-widget ms-infographics-widget ms-p-relative">
                        <div class="ms-card-body media">
                            <div class="media-body">
                                <h6 class="bold">Super Hot Properties</h6>    
                                       
                                        <p class="ms-card-change">0</p>     
                            </div>
                        </div>
                        <i class="fas fa-briefcase-medical ms-icon-mr"></i>
                    </div>
                </a>
            </div>
           
            <div class="col-xl-3 col-md-6 col-sm-6">
                <a href="#">
                    <div class="ms-card card-gradient-custom ms-widget ms-infographics-widget ms-p-relative">
                        <div class="ms-card-body media">
                            <div class="media-body">
                                <h6 class="bold">Hot Properties</h6>    
                                       
                                        <p class="ms-card-change">0</p>     
                            </div>
                        </div>
                        <i class="fas fa-briefcase-medical ms-icon-mr"></i>
                    </div>
                </a>
            </div>

            <div class="col-xl-3 col-md-6 col-sm-6">
                <a href="#">
                    <div class="ms-card card-gradient-custom ms-widget ms-infographics-widget ms-p-relative">
                        <div class="ms-card-body media">
                            <div class="media-body">
                                <h6 class="bold">Featured Properties</h6>    
                                       
                                        <p class="ms-card-change">0</p>     
                            </div>
                        </div>
                        <i class="fas fa-briefcase-medical ms-icon-mr"></i>
                    </div>
                </a>
            </div>

            <div class="col-xl-3 col-md-6 col-sm-6">
                <a href="#">
                    <div class="ms-card card-gradient-custom ms-widget ms-infographics-widget ms-p-relative">
                        <div class="ms-card-body media">
                            <div class="media-body">
                                <h6 class="bold">Normal Lisiting</h6>    
                                       
                                        <p class="ms-card-change">0</p>     
                            </div>
                        </div>
                        <i class="fas fa-briefcase-medical ms-icon-mr"></i>
                    </div>
                </a>
            </div>

           

          

        




          
        </div>
    </div>


@endsection

@push('scripts')

@endpush