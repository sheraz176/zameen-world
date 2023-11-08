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
                        <li class="breadcrumb-item"><a href="{{ route('agent.properties.create') }}">Add Properties</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Properties List</li>
                    </ol>
                </nav>
                <div class="ms-panel">
                    <div class="ms-panel-header ms-panel-custome align-items-center">
                        <h6>Properties </h6>
                        <a href="{{ route('agent.properties.create') }}" class="btn btn-primary d-inline w-20">Add
                            Properties</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-md-12">
                <div class="ms-card">
                    <div class="ms-card-body">

                        <table id="myTable" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th><input type="checkbox" value=""></th>
                                    <th>SL.</th>
                                    <th>Title</th>
                                    <th>Type</th>
                                    <th>City</th>
                                    <th><i class="material-icons small-star p-t-10">comment</i></th>
                                    <th><i class="material-icons small-star p-t-10">stars</i></th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($properties as $key => $property)
                                    <tr>
                                        <td><input type="checkbox" value=""></td>
                                        <td>{{ $key + 1 }}</td>
                                        <td>
                                            {{ str_limit($property->title, 30) }}
                                        </td>
                                        <td>{{ ucfirst($property->type) }}</td>
                                        <td>{{ ucfirst($property->city) }}</td>
                                        <td class="center">{{ $property->comments_count }}</td>

                                        <td class="center">
                                            @if ($property->featured == true)
                                                <span class="indigo-text"><i
                                                        class="material-icons small-star">stars</i></span>
                                            @endif
                                        </td>
                                        <td class="center">
                                            {{-- <a href="{{route('property.show',$property->slug)}}" target="_blank" class="btn btn-small green waves-effect">
                                                <i class="material-icons">visibility</i>
                                            </a>
                                            <a href="{{route('agent.properties.edit',$property->slug)}}" class="btn btn-small orange waves-effect">
                                                <i class="material-icons">edit</i>
                                            </a> --}}
                                            <button class="btn-all mr-2"><svg width="18" height="18"
                                                    viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg"onclick="deleteProperty({{ $property->id }})">
                                                    <path
                                                        d="M7 21C6.45 21 5.97933 20.8043 5.588 20.413C5.196 20.021 5 19.55 5 19V6C4.71667 6 4.479 5.90433 4.287 5.713C4.09567 5.521 4 5.28333 4 5C4 4.71667 4.09567 4.479 4.287 4.287C4.479 4.09567 4.71667 4 5 4H9C9 3.71667 9.096 3.479 9.288 3.287C9.47933 3.09567 9.71667 3 10 3H14C14.2833 3 14.521 3.09567 14.713 3.287C14.9043 3.479 15 3.71667 15 4H19C19.2833 4 19.5207 4.09567 19.712 4.287C19.904 4.479 20 4.71667 20 5C20 5.28333 19.904 5.521 19.712 5.713C19.5207 5.90433 19.2833 6 19 6V19C19 19.55 18.8043 20.021 18.413 20.413C18.021 20.8043 17.55 21 17 21H7ZM9 16C9 16.2833 9.096 16.5207 9.288 16.712C9.47933 16.904 9.71667 17 10 17C10.2833 17 10.521 16.904 10.713 16.712C10.9043 16.5207 11 16.2833 11 16V9C11 8.71667 10.9043 8.479 10.713 8.287C10.521 8.09567 10.2833 8 10 8C9.71667 8 9.47933 8.09567 9.288 8.287C9.096 8.479 9 8.71667 9 9V16ZM13 16C13 16.2833 13.096 16.5207 13.288 16.712C13.4793 16.904 13.7167 17 14 17C14.2833 17 14.521 16.904 14.713 16.712C14.9043 16.5207 15 16.2833 15 16V9C15 8.71667 14.9043 8.479 14.713 8.287C14.521 8.09567 14.2833 8 14 8C13.7167 8 13.4793 8.09567 13.288 8.287C13.096 8.479 13 8.71667 13 9V16Z"
                                                        fill="#CE2121" fill-opacity="0.5" />
                                                </svg>
                                            </button>
                                            <form action="{{ route('agent.properties.destroy', $property->slug) }}"
                                                method="POST" id="del-property-{{ $property->id }}" style="display:none;">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                            <a class="btn-all " href="#">
                                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M15.586 2.99988C15.9611 2.62494 16.4697 2.41431 17 2.41431C17.5303 2.41431 18.0389 2.62494 18.414 2.99988L21 5.58588C21.3749 5.96093 21.5856 6.46955 21.5856 6.99988C21.5856 7.53021 21.3749 8.03882 21 8.41388L19.414 9.99988L14 4.58588L15.586 2.99988ZM12.586 5.99988L3.586 14.9999C3.2109 15.3749 3.00011 15.8835 3 16.4139V18.9999C3 19.5303 3.21071 20.039 3.58579 20.4141C3.96086 20.7892 4.46957 20.9999 5 20.9999H7.586C8.11639 20.9998 8.62501 20.789 9 20.4139L18 11.4139L12.586 5.99988Z"
                                                        fill="#333333" fill-opacity="0.5" />
                                                </svg>
                                            </a>
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
    <script>
        function deleteProperty(id) {
            swal({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                buttons: true,
                dangerMode: true,
                buttons: ["Cancel", "Yes, delete it!"]
            }).then((value) => {
                if (value) {
                    document.getElementById('del-property-' + id).submit();
                    swal(
                        'Deleted!',
                        'Property has been deleted.',
                        'success', {
                            buttons: false,
                            timer: 1000,
                        })
                }
            })
        }
    </script>
@endpush
