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
                        <li class="breadcrumb-item active" aria-current="page">Messagea List</li>
                    </ol>
                </nav>
                <div class="ms-panel">
                    <div class="ms-panel-header ms-panel-custome align-items-center">
                        <h6>Messages </h6>
                        
                    </div>
                </div>
            </div>
            
         
            <div class="col-xl-12 col-md-12">
                <div class="ms-card">
                    <div class="ms-card-body">

                        <table id="myTable" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>SL.</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Message</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach( $messages as $key => $message )
                                <tr>
                                    <td class="right-align">{{$key+1}}.</td>
                                    <td>{{ ucfirst(strtok($message->name,' ')) }}</td>
                                    <td>{{ $message->email }}</td>
                                    <td>
                                        <span class="tooltipped" data-position="bottom" data-tooltip="{{$message->message}}">
                                            {{ str_limit($message->message,20) }}
                                        </span>
                                    </td>
                                    <td>
                                        @if($message->status == 0)
                                            <a href="{{route('agent.message.read',$message->id)}}" class="btn btn-small orange waves-effect">
                                                <i class="material-icons">local_library</i>
                                            </a>
                                        @else 
                                            <a href="{{route('agent.message.read',$message->id)}}" class="btn btn-small green waves-effect">
                                                <i class="material-icons">done</i>
                                            </a>
                                        @endif
                                        {{-- <a href="{{route('agent.message.replay',$message->id)}}" class="btn btn-small indigo waves-effect">
                                            <i class="material-icons">replay</i>
                                        </a> --}}
                                        <button type="button" class="btn btn-small red waves-effect" onclick="deleteMessage({{$message->id}})">
                                            <i class="material-icons">delete</i>
                                        </button>
                                        <form action="{{route('agent.messages.destroy',$message->id)}}" method="POST" id="del-message-{{$message->id}}" style="display:none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>

                        </table>
                        <div class="center">
                            {{ $messages->links() }}
                        </div>
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
    <script>
        function deleteMessage(id){
            swal({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            buttons: true,
            dangerMode: true,
            buttons: ["Cancel", "Yes, delete it!"]
            }).then((value) => {
                if (value) {
                    document.getElementById('del-message-'+id).submit();
                    swal(
                    'Deleted!',
                    'Message has been deleted.',
                    'success',
                    {
                        buttons: false,
                        timer: 1000,
                    })
                }
            })
        }
    </script>
   
@endpush
