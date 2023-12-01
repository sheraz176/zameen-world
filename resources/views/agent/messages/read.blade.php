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
                        <li class="breadcrumb-item active"><a href="#">Securtiy Question</a></li>
                    </ol>
                </nav>
            </div>
            <div class="col-xl-12 col-md-12">
                <div class="ms-panel">
                    <div class="ms-panel-body clearfix">
                        <form class="needs-validation" novalidate="">
                            <div class="form-row">
                              
                                <div class="col-md-12 ">

                                    <label for="validationCustom0002">From:</label>
                                    <div class="min-box answer">
                                        <div
                                            class="d-flex flex-row gap-12 align-items-center  justify-content-between">
                                            <div class="d-flex flex-row gap-12 align-items-center  flex-1">
                                              

                                                <p class="mb-0">
                                                    <span><em>{{ $message->name }} ( {{ $message->email }} )</span> 
                                                </p>
                                            </div>
                                          
                                        </div>
                                    </div>
                                    <label for="validationCustom0002">Phone Number:</label>
                                    <div class="min-box answer">
                                        <div
                                            class="d-flex flex-row gap-12 align-items-center  justify-content-between">
                                            <div class="d-flex flex-row gap-12 align-items-center  flex-1">
                                             

                                                <p class="mb-0">
                                                    {!! $message->phone !!}
                                                </p>
                                            </div>
                                          
                                        </div>
                                    </div>
                                    <label for="validationCustom0002">Message</label>
                                    <div class="min-box answer">
                                        <div
                                            class="d-flex flex-row gap-12 align-items-center  justify-content-between">
                                            <div class="d-flex flex-row gap-12 align-items-center  flex-1">
                                                <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M5.82793 6.375C6.21688 5.54966 7.26639 4.95833 8.50004 4.95833C10.0648 4.95833 11.3334 5.90973 11.3334 7.08333C11.3334 8.0746 10.4284 8.90735 9.20428 9.14217C8.82008 9.21588 8.50004 9.52546 8.50004 9.91667M8.5 12.0417H8.50708M14.875 8.5C14.875 12.0208 12.0208 14.875 8.5 14.875C4.97918 14.875 2.125 12.0208 2.125 8.5C2.125 4.97918 4.97918 2.125 8.5 2.125C12.0208 2.125 14.875 4.97918 14.875 8.5Z"
                                                        stroke="#333333" stroke-opacity="0.8" stroke-width="1.4"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>

                                                <p class="mb-0">
                                                    {!! $message->message !!}
                                                </p>
                                            </div>
                                          
                                        </div>
                                    </div>


                                   
                                </div>
                            </div>
                        </form>

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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   
   
@endpush
