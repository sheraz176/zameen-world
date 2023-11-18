@extends('agent.layout.app')

@push('styles')
<!-- Datatable -->
<link href="https://cdn.datatables.net/v/dt/dt-1.13.6/datatables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/fixedheader/3.3.2/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.bootstrap.min.css" rel="stylesheet">

@endpush

@section('content')
   <!-- Body Content Wrapper -->
   <div class="ms-content-wrapper">
    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                    <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="#">Add MemberShip</a></li>
                </ol>
            </nav>
            <div class="ms-panel">
                <div class="ms-panel-header ms-panel-custome align-items-center flex-column align-items-start">
                    <h6>Membership plans</h6>
                    <p>To Subscribe Membership plan please Subscribe new plan</p>
                </div>
            </div>
        </div>
        <!-- MemberShipCards -->



        <div class="col-xl-12 col-md-12">
            <div class="row">
                @foreach ($membership as $membership)
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="ms-card border-16">
                        <div class="ms-card-body d-flex flex-column gap-23">
                            <div class="coin">
                                <img src="{{asset('user_side/assets/img/coin.png')}}">
                            </div>
                            <div class="Create-member-text">
                                <h6 class="mb-8">{{$membership->name}}</h6>
                                <p class="mb-0">To Subscribe Plan please click below</p>
                            </div>
                            <div class="plus-membership">
                                <a href="#">
                                <svg width="143" height="143" viewBox="0 0 143 143" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g filter="url(#filter0_f_2349_44622)">
                                        <circle cx="71.5" cy="71.5" r="67.5" fill="white" />
                                        <circle cx="71.5" cy="71.5" r="67" stroke="#2B7592" />
                                    </g>
                                    <path d="M71.0007 51.3335V92.6668M91.6673 72.0002L50.334 72.0002"
                                        stroke="#2B7592" stroke-width="5.4" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <defs>
                                        <filter id="filter0_f_2349_44622" x="0" y="0" width="143" height="143"
                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix"
                                                result="shape" />
                                            <feGaussianBlur stdDeviation="2"
                                                result="effect1_foregroundBlur_2349_44622" />
                                        </filter>
                                    </defs>
                                </svg>
                               
                            </a>
                            </div>
                            <div>
                                <form action="{{ route('agent.property.update.membership') }}"
                                method="post"  enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="name" value="{{$membership->name}}" >
                                <input type="hidden" name="superhot" value="{{$membership->superhot}}" >
                                <input type="hidden" name="hot" value="{{$membership->hot}}" >
                                <input type="hidden" name="featured" value="{{$membership->featured}}" >
                                <input type="hidden" name="refresh" value="{{$membership->refresh}}" >
                                <input type="hidden" name="limit" value="{{$membership->limit}}" >
                                <input type="hidden" name="price" value="{{$membership->price}}" >
                                <button type="submit" class="Create-plan-primary btn">Subscribe Plan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                
                
            </div>
        </div>

        <div class="col-xl-12 col-md-12">
            <div class="ms-card">
                <div class="ms-card-body">

                    <table id="myTable"  class="display" style="width:100%">
                        <thead>
                            <tr>
                                
                                <th>Package Name</th>
                                <th>Total Super Hot</th>
                                <th>Total Hot</th>
                                <th>Total Featured</th>
                                <th>Total Refesh</th>
                                <th>Total Active Days</th>
                                <th>Total price</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach ($packages as $packages)
                          <tr>
                                   
                            <td>{{ $packages->name }}</td>
                            <td>
                                {{ $packages->superhot }}
                            </td>
                            <td>
                                {{ $packages->hot }}
                            </td>
                            <td>
                                {{ $packages->featured }}
                            </td>
                            <td>
                                {{ $packages->refresh }}
                            </td>
                            <td>
                                {{ $packages->limit }}
                            </td>
                            <td>
                                {{ $packages->price }}
                            </td>


                        </tr>
                          @endforeach 
                               
                        
                        </tbody>
                    </table>
                </div>
            </div>

        </div>



    </div>
</div>

@endsection

@push('scripts')
<script>
    $('#myTable').DataTable({
        "order": [0, 'desc'],
    });
</script>

<!-- data table script -->
<script src="https://cdn.datatables.net/v/dt/dt-1.13.6/datatables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.3.2/js/dataTables.fixedHeader.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.4.1/js/responsive.bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
<!-- Settings -->
<script src="{{ asset('user_side/assets/js/settings.js') }}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@endpush
