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

                        <table  class="display" style="width:100%">
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
                               @if (!empty($packages))
                               <tr style="background:rgb(7, 0, 0); color:aliceblue">
                                       
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
                               @endif
                                   
                            
                            </tbody>
                        </table>
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
                                    <th>Super Hot</th>
                                    <th>Hot</th>
                                    <th>Featured</th>
                                    <th>Refresh</th>
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
                                            @if (!empty($packages))   
                                            <form action="{{ route('agent.property.update.superhot') }}"
                                            method="post"  enctype="multipart/form-data">
                                            @csrf
                                                @if ($property->superhot == '0')
                                                <input type="hidden" name="superhot" value="1">
                                                <input type="hidden" name="property_id" value="{{$property->id}}">
                                                <input type="hidden" name="package_id" value="{{$packages->id}}">
                                                <input type="hidden" name="totalsuperhot" value="{{$packages->superhot}}">
                                                <button type="submit" class="btn-all mr-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512">
                                                        <style>svg{fill:#ff0000}</style><path d="M320 512c53.2 0 101.4-21.6 136.1-56.6l-298.3-235C140 257.1 128 292.3 128 320c0 106 86 192 192 192zM505.2 370.7c4.4-16.1 6.8-33.1 6.8-50.7c0-91.2-130.2-262.3-166.6-308.3C339.4 4.2 330.5 0 320.9 0h-1.8c-9.6 0-18.5 4.2-24.5 11.7C277.8 33 240.7 81.3 205.8 136L38.8 5.1C28.4-3.1 13.3-1.2 5.1 9.2S-1.2 34.7 9.2 42.9l592 464c10.4 8.2 25.5 6.3 33.7-4.1s6.3-25.5-4.1-33.7L505.2 370.7zM224 336c0 44.2 35.8 80 80 80c8.8 0 16 7.2 16 16s-7.2 16-16 16c-61.9 0-112-50.1-112-112c0-8.8 7.2-16 16-16s16 7.2 16 16z"/></svg>
                                                </button>
                                                @endif
                                                @if ($property->superhot == '1')
                                                <input type="hidden" name="superhot" value="0">
                                                <input type="hidden" name="property_id" value="{{$property->id}}">
                                                <button type="submit" class="btn-all mr-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512">
                                                        <style>svg{fill:#ff0000}</style><path d="M153.6 29.9l16-21.3C173.6 3.2 180 0 186.7 0C198.4 0 208 9.6 208 21.3V43.5c0 13.1 5.4 25.7 14.9 34.7L307.6 159C356.4 205.6 384 270.2 384 337.7C384 434 306 512 209.7 512H192C86 512 0 426 0 320v-3.8c0-48.8 19.4-95.6 53.9-130.1l3.5-3.5c4.2-4.2 10-6.6 16-6.6C85.9 176 96 186.1 96 198.6V288c0 35.3 28.7 64 64 64s64-28.7 64-64v-3.9c0-18-7.2-35.3-19.9-48l-38.6-38.6c-24-24-37.5-56.7-37.5-90.7c0-27.7 9-54.8 25.6-76.9z"/></svg>
                                                </button> 
                                                @endif
                                            </form>
                                            @endif
                                        </td>

                                        <td class="center">
                                            @if (!empty($packages))   
                                            <form action="{{ route('agent.property.update.hot') }}"
                                            method="post"  enctype="multipart/form-data">
                                            @csrf
                                                @if ($property->hot == '0')
                                                <input type="hidden" name="hot" value="1">
                                                <input type="hidden" name="property_id" value="{{$property->id}}">
                                                <input type="hidden" name="package_id" value="{{$packages->id}}">
                                                <input type="hidden" name="totalhot" value="{{$packages->hot}}">
                                                <button type="submit" class="btn-all mr-2" >
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512">
                                                        <style>svg{fill:#ff0000}</style>
                                                <path d="M320 512c53.2 0 101.4-21.6 136.1-56.6l-298.3-235C140 257.1 128 292.3 128 320c0 106 86 192 192 192zM505.2 370.7c4.4-16.1 6.8-33.1 6.8-50.7c0-91.2-130.2-262.3-166.6-308.3C339.4 4.2 330.5 0 320.9 0h-1.8c-9.6 0-18.5 4.2-24.5 11.7C277.8 33 240.7 81.3 205.8 136L38.8 5.1C28.4-3.1 13.3-1.2 5.1 9.2S-1.2 34.7 9.2 42.9l592 464c10.4 8.2 25.5 6.3 33.7-4.1s6.3-25.5-4.1-33.7L505.2 370.7zM224 336c0 44.2 35.8 80 80 80c8.8 0 16 7.2 16 16s-7.2 16-16 16c-61.9 0-112-50.1-112-112c0-8.8 7.2-16 16-16s16 7.2 16 16z"/>
                                                 </svg>
                                                </button>
                                                @endif
                                                @if ($property->hot == '1')
                                                <input type="hidden" name="hot" value="0">
                                                <input type="hidden" name="property_id" value="{{$property->id}}">
                                                <button type="submit" class="btn-all mr-2" >
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                                                        <style>svg{fill:#ff0000}</style>
                                                        <path d="M88 0C74.7 0 64 10.7 64 24c0 38.9 23.4 59.4 39.1 73.1l1.1 1C120.5 112.3 128 119.9 128 136c0 13.3 10.7 24 24 24s24-10.7 24-24c0-38.9-23.4-59.4-39.1-73.1l-1.1-1C119.5 47.7 112 40.1 112 24c0-13.3-10.7-24-24-24zM32 192c-17.7 0-32 14.3-32 32V416c0 53 43 96 96 96H288c53 0 96-43 96-96h16c61.9 0 112-50.1 112-112s-50.1-112-112-112H352 32zm352 64h16c26.5 0 48 21.5 48 48s-21.5 48-48 48H384V256zM224 24c0-13.3-10.7-24-24-24s-24 10.7-24 24c0 38.9 23.4 59.4 39.1 73.1l1.1 1C232.5 112.3 240 119.9 240 136c0 13.3 10.7 24 24 24s24-10.7 24-24c0-38.9-23.4-59.4-39.1-73.1l-1.1-1C231.5 47.7 224 40.1 224 24z"/></svg>
                                                </button> 
                                                @endif
                                            </form>
                                            @endif
                                        </td>

                                        <td class="center">
                                            @if (!empty($packages))   
                                            <form action="{{ route('agent.property.update.feature') }}"
                                            method="post"  enctype="multipart/form-data">
                                            @csrf
                                            @if ($property->featured == '0')
                                            <input type="hidden" name="featured" value="1">
                                            <input type="hidden" name="property_id" value="{{$property->id}}">
                                            <input type="hidden" name="package_id" value="{{$packages->id}}">
                                            <input type="hidden" name="totalfeatured" value="{{$packages->featured}}">
                                            <button type="submit" class="btn-all mr-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512">
                                                    <style>svg{fill:#ff0000}</style><path d="M38.8 5.1C28.4-3.1 13.3-1.2 5.1 9.2S-1.2 34.7 9.2 42.9l592 464c10.4 8.2 25.5 6.3 33.7-4.1s6.3-25.5-4.1-33.7l-154.3-121c-2-30.1 20.8-60.1 56-60.1H544c17.7 0 32-14.3 32-32s-14.3-32-32-32H532.5c-49.9 0-74.9-60.3-39.6-95.6l8.2-8.2c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-8.2 8.2C412.3 118.4 352 93.4 352 43.5V32c0-17.7-14.3-32-32-32s-32 14.3-32 32V43.5c0 49.9-60.3 74.9-95.6 39.6L184.2 75c-12.5-12.5-32.8-12.5-45.3 0c-1.6 1.6-3.1 3.4-4.3 5.3L38.8 5.1zm225.8 177c6.9-3.9 14.9-6.1 23.4-6.1c26.5 0 48 21.5 48 48c0 4.4-.6 8.7-1.7 12.7l-69.7-54.6zM402 412.7L144.7 210c-9.5 8.5-22.2 14-37.2 14H96c-17.7 0-32 14.3-32 32s14.3 32 32 32h11.5c49.9 0 74.9 60.3 39.6 95.6l-8.2 8.2c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l8.2-8.2c35.3-35.3 95.6-10.3 95.6 39.6V480c0 17.7 14.3 32 32 32s32-14.3 32-32V468.5c0-31.2 23.6-52.7 50-55.7z"/></svg>
                                            </button>
                                            @endif
                                            @if ($property->featured == '1')
                                            <input type="hidden" name="featured" value="0">
                                            <input type="hidden" name="property_id" value="{{$property->id}}">
                                            <button type="submit" class="btn-all mr-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512">
                                                    <style>svg{fill:#ff0000}</style><path d="M0 256L28.5 28c2-16 15.6-28 31.8-28H228.9c15 0 27.1 12.1 27.1 27.1c0 3.2-.6 6.5-1.7 9.5L208 160H347.3c20.2 0 36.7 16.4 36.7 36.7c0 7.4-2.2 14.6-6.4 20.7l-192.2 281c-5.9 8.6-15.6 13.7-25.9 13.7h-2.9c-15.7 0-28.5-12.8-28.5-28.5c0-2.3 .3-4.6 .9-6.9L176 288H32c-17.7 0-32-14.3-32-32z"/></svg>
                                            </button> 
                                            @endif
                                        </form>
                                        @endif
                                        </td>

                                        <td class="center">
                                            @if (!empty($packages))   
                                            <form action="{{ route('agent.property.update.refresh') }}"
                                            method="post"  enctype="multipart/form-data">
                                            @csrf
                                                @if ($property->refresh == '0')
                                                <input type="hidden" name="refresh" value="1">
                                                <input type="hidden" name="property_id" value="{{$property->id}}">
                                                <input type="hidden" name="package_id" value="{{$packages->id}}">
                                                <input type="hidden" name="totalrefresh" value="{{$packages->refresh}}">
                                                <button type="submit" class="btn-all mr-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512">
                                                        <style>svg{fill:#ff0000}</style><path d="M38.8 5.1C28.4-3.1 13.3-1.2 5.1 9.2S-1.2 34.7 9.2 42.9l592 464c10.4 8.2 25.5 6.3 33.7-4.1s6.3-25.5-4.1-33.7L472.1 344.7c11.4-19.5 19.1-41.4 22.3-64.7H528v16c0 13.3 10.7 24 24 24s24-10.7 24-24V216c0-13.3-10.7-24-24-24s-24 10.7-24 24v16H494.4c-4.2-30.7-16.3-58.8-34.1-82.3L484 125.9l11.3 11.3c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9L472.7 46.7c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9L450.1 92l-23.8 23.8C402.8 97.9 374.7 85.8 344 81.6V48h16c13.3 0 24-10.7 24-24s-10.7-24-24-24H280c-13.3 0-24 10.7-24 24s10.7 24 24 24h16V81.6c-30.7 4.2-58.8 16.3-82.3 34.1L189.9 92l11.3-11.3c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0L134.1 79.8 38.8 5.1zM149.2 213.5c-1.5 6-2.7 12.2-3.5 18.5H112V216c0-13.3-10.7-24-24-24s-24 10.7-24 24v80c0 13.3 10.7 24 24 24s24-10.7 24-24V280h33.6c4.2 30.7 16.3 58.8 34.1 82.3L156 386.1l-11.3-11.3c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l56.6 56.6c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9L189.9 420l23.8-23.8c23.5 17.9 51.7 29.9 82.3 34.1V464H280c-13.3 0-24 10.7-24 24s10.7 24 24 24h80c13.3 0 24-10.7 24-24s-10.7-24-24-24H344V430.4c20.4-2.8 39.7-9.1 57.3-18.2L149.2 213.5z"/></svg>
                                                </button>
                                                @endif
                                                @if ($property->refresh == '1')
                                                <input type="hidden" name="refresh" value="0">
                                                <input type="hidden" name="property_id" value="{{$property->id}}">
                                                <button type="submit" class="btn-all mr-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                                                        <style>svg{fill:#ff0000}</style><path d="M463.5 224H472c13.3 0 24-10.7 24-24V72c0-9.7-5.8-18.5-14.8-22.2s-19.3-1.7-26.2 5.2L413.4 96.6c-87.6-86.5-228.7-86.2-315.8 1c-87.5 87.5-87.5 229.3 0 316.8s229.3 87.5 316.8 0c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0c-62.5 62.5-163.8 62.5-226.3 0s-62.5-163.8 0-226.3c62.2-62.2 162.7-62.5 225.3-1L327 183c-6.9 6.9-8.9 17.2-5.2 26.2s12.5 14.8 22.2 14.8H463.5z"/></svg>
                                                </button> 
                                                @endif
                                            </form>
                                            @endif
                                        </td>
                                        
                                        <td class="center">                            
                                         
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
