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
                        <i class="fas fa-home ms-icon-mr"></i>
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
                        <i class="fas fa-envelope ms-icon-mr"></i>
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
                        <i class="fas fa-gear ms-icon-mr"></i>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-md-6 col-sm-6">
                <a href="#">
                    <div class="ms-card card-gradient-custom ms-widget ms-infographics-widget ms-p-relative">
                        <div class="ms-card-body media">
                            <div class="media-body">
                                <h6 class="bold">Recent Package</h6>
                              
                                     @if (!empty($packages->name))
                                     <p  style="color: rgb(11, 251, 159)">{{ $packages->name }}</p>
                                     @endif
                                    
                                       
                            </div>
                        </div>
                        <i class="fas fa-cloud ms-icon-mr"></i>
                    </div>
                </a>
            </div>

            <div class="col-xl-3 col-md-6 col-sm-6">
                <a href="#">
                    <div class="ms-card card-gradient-custom ms-widget ms-infographics-widget ms-p-relative">
                        <div class="ms-card-body media">
                            <div class="media-body">
                                <h6 class="bold">Super Hot </h6>    
                                       
                                @if (!empty($packages->superhot))
                                <p class="ms-card-change" >{{ $packages->superhot}}</p>
                                @endif   
                            </div>
                        </div>
                        <i class="fas fa-cloud "></i>
                    </div>
                </a>
            </div>
           
            <div class="col-xl-3 col-md-6 col-sm-6">
                <a href="#">
                    <div class="ms-card card-gradient-custom ms-widget ms-infographics-widget ms-p-relative">
                        <div class="ms-card-body media">
                            <div class="media-body">
                                <h6 class="bold">Hot </h6>    
                                       
                                @if (!empty($packages->hot))
                                <p class="ms-card-change" >{{ $packages->hot }}</p>
                                @endif    
                            </div>
                        </div>
                        <i class="fas fa-cloud ms-icon-mr"></i>
                    </div>
                </a>
            </div>

            <div class="col-xl-3 col-md-6 col-sm-6">
                <a href="#">
                    <div class="ms-card card-gradient-custom ms-widget ms-infographics-widget ms-p-relative">
                        <div class="ms-card-body media">
                            <div class="media-body">
                                <h6 class="bold">Featured </h6>    
                                       
                                @if (!empty($packages->featured))
                                <p class="ms-card-change" >{{ $packages->featured}}</p>
                                @endif     
                            </div>
                        </div>
                        <i class="fas fa-cloud ms-icon-mr"></i>
                    </div>
                </a>
            </div>

            <div class="col-xl-3 col-md-6 col-sm-6">
                <a href="#">
                    <div class="ms-card card-gradient-custom ms-widget ms-infographics-widget ms-p-relative">
                        <div class="ms-card-body media">
                            <div class="media-body">
                                <h6 class="bold">Refresh </h6>    
                                       
                                @if (!empty($packages->refresh))
                                <p class="ms-card-change" > {{ $packages->refresh }}</p>
                                @endif   
                            </div>
                        </div>
                        <i class="fas fa-cloud ms-icon-mr"></i>
                    </div>
                </a>
            </div>

           

          

        




          
        </div>
    </div>


@endsection

@push('scripts')

@endpush