@extends('agent.layout.apps')

@push('styles')
@endpush

@section('content')
 <!-- Body Content Wrapper -->


 <div class="ms-content-wrapper">
    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                    <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Profile</a></li>
                    <li class="breadcrumb-item"><a href="#">Edit Profile</a></li>
                </ol>
            </nav>
        </div>
        <div class="col-xl-12 col-md-12">
            <div class="ms-panel">
                <div class="ms-panel-body clearfix">
                    <ul class="nav nav-tabs d-flex nav-justified mb-4 gap-12 flex-md-nowrap" role="tablist">
                        <li role="presentation"><a href="#tab14" aria-controls="tab14" role="tab"
                                data-toggle="tab" class="active show" aria-selected="false">Please Profile Complete </a></li>
                             
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active show " id="tab14">
                            <form action="{{route('agent.profile.update')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                            <div class="row">
                                {{-- <label for="exampleEmail1">Image</label> --}}
                                <div class="col-lg-3 d-flex align-items-center">
                                  
                                      <div class="wrapper-line mb-5">
                                        <input type="file"  name="image" id="image-file" style="display: none;">
                                        <div id="image-container" ></div>
                                    </div>
                                    
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
                                <div class="col-lg-9">
                                    <div class="user-detail">
                                        <h6 class="custom-heading mb-3">Name</h6>
                                        <input type="hidden" value="{{ $profile->image or null }}" name="image">
                                    </div>
                                    <div class="row admin-detail">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleEmail1">Name</label>
                                                <input type="text" class="form-control" name="name" type="text" value="{{ $profile->name }}"
                                                    placeholder="Enter First Name" required/>
                                            </div>

                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleEmail1">Agency Name</label>
                                                <input type="text" class="form-control" 
                                                name="username" type="text" value="{{ $profile->username or null }}"
                                                    placeholder="Enter Agency Name" required/>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleEmail1">Email address</label>
                                                <input type="email" class="form-control" name="email" type="email" value="{{ $profile->email }}"
                                                    placeholder="First Email Address" required/>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleEmail1">Phone Number</label>
                                                <input type="text" class="form-control @error('phone_number')is-invalid @enderror" value="{{ $profile->phone_number or null }}" name="phone_number" id="phone_number"
                                                    placeholder="Enter +92300......." required/>
                                            </div>
                                            <div class="col-md-12">
                                                @if ($errors->has('phone_number'))
                                                    <div class="alert-error mt-1 mb-3">
                                                        <svg width="12" height="11" viewBox="0 0 12 11" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M4.77994 1.16969C5.31517 0.218177 6.68513 0.218176 7.22035 1.16969L11.1266 8.11407C11.6515 9.04731 10.9771 10.2004 9.90636 10.2004H2.09393C1.02318 10.2004 0.348776 9.04731 0.873727 8.11407L4.77994 1.16969ZM6.70009 8.10051C6.70009 8.48711 6.38668 8.80051 6.00009 8.80051C5.61349 8.80051 5.30009 8.48711 5.30009 8.10051C5.30009 7.71391 5.61349 7.40051 6.00009 7.40051C6.38668 7.40051 6.70009 7.71391 6.70009 8.10051ZM6.00009 2.50051C5.61349 2.50051 5.30009 2.81391 5.30009 3.20051V5.30051C5.30009 5.68711 5.61349 6.00051 6.00009 6.00051C6.38668 6.00051 6.70009 5.68711 6.70009 5.30051V3.20051C6.70009 2.81391 6.38668 2.50051 6.00009 2.50051Z"
                                                                fill="#CE2121" />
                                                        </svg> {{ $errors->first('phone_number') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleEmail1">Mobile Number</label>
                                                <input type="text" name="mobile_number" value="{{ $profile->mobile_number or null }}" class="form-control" id="Numbrer"
                                                    placeholder="Enter +92300......." required/>
                                            </div>
                                            @if ($errors->has('mobile_number'))
                                            <div class="alert-error mt-1 mb-3">
                                                <svg width="12" height="11" viewBox="0 0 12 11" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M4.77994 1.16969C5.31517 0.218177 6.68513 0.218176 7.22035 1.16969L11.1266 8.11407C11.6515 9.04731 10.9771 10.2004 9.90636 10.2004H2.09393C1.02318 10.2004 0.348776 9.04731 0.873727 8.11407L4.77994 1.16969ZM6.70009 8.10051C6.70009 8.48711 6.38668 8.80051 6.00009 8.80051C5.61349 8.80051 5.30009 8.48711 5.30009 8.10051C5.30009 7.71391 5.61349 7.40051 6.00009 7.40051C6.38668 7.40051 6.70009 7.71391 6.70009 8.10051ZM6.00009 2.50051C5.61349 2.50051 5.30009 2.81391 5.30009 3.20051V5.30051C5.30009 5.68711 5.61349 6.00051 6.00009 6.00051C6.38668 6.00051 6.70009 5.68711 6.70009 5.30051V3.20051C6.70009 2.81391 6.38668 2.50051 6.00009 2.50051Z"
                                                        fill="#CE2121" />
                                                </svg> {{ $errors->first('mobile_number') }}
                                            </div>
                                        @endif
                                        </div>
                                       
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="exampleEmail1">About</label>
                                                <textarea  class="form-control"
                                                id="about" name="about">{{ $profile->about or null }}</textarea>
                                            </div>
                                            @if ($errors->has('about'))
                                            <div class="alert-error mt-1 mb-3">
                                                <svg width="12" height="11" viewBox="0 0 12 11" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M4.77994 1.16969C5.31517 0.218177 6.68513 0.218176 7.22035 1.16969L11.1266 8.11407C11.6515 9.04731 10.9771 10.2004 9.90636 10.2004H2.09393C1.02318 10.2004 0.348776 9.04731 0.873727 8.11407L4.77994 1.16969ZM6.70009 8.10051C6.70009 8.48711 6.38668 8.80051 6.00009 8.80051C5.61349 8.80051 5.30009 8.48711 5.30009 8.10051C5.30009 7.71391 5.61349 7.40051 6.00009 7.40051C6.38668 7.40051 6.70009 7.71391 6.70009 8.10051ZM6.00009 2.50051C5.61349 2.50051 5.30009 2.81391 5.30009 3.20051V5.30051C5.30009 5.68711 5.61349 6.00051 6.00009 6.00051C6.38668 6.00051 6.70009 5.68711 6.70009 5.30051V3.20051C6.70009 2.81391 6.38668 2.50051 6.00009 2.50051Z"
                                                        fill="#CE2121" />
                                                </svg> {{ $errors->first('about') }}
                                            </div>
                                        @endif
                                        </div>


                                    </div>
                                    <button class="btn btn-primary mt-4 d-inline w-20" type="submit">Submit</button>

                                </div>
                            </div>
                            </form>
                        </div>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    // Get references to the file input and image container elements
    const fileInput = document.getElementById('image-file');
    const imageContainer = document.getElementById('image-container');

    // Listen for click events on the image container
    imageContainer.addEventListener('click', (e) => {
        // If the target element is a delete button, remove its parent image element from the container
        if (e.target.classList.contains('delete-btn')) {
            imageContainer.removeChild(e.target.parentNode);
        }
    });

    // Listen for click events on the circular image element
    const circleImg = document.createElement('img');
    circleImg.src = 'https://via.placeholder.com/200';
    circleImg.classList.add('circle-img');
    circleImg.addEventListener('click', () => {
        // When the user clicks on the circular image, trigger the file input element's click event
        fileInput.click();
    });

    // Add the circular image element to the image container
    imageContainer.appendChild(circleImg);

    // Listen for the file input element to change
    fileInput.addEventListener('change', () => {
        // Get reference to the selected image file
        const file = fileInput.files[0];

        // Create a new instance of the FileReader object
        const reader = new FileReader();

        // Listen for the FileReader to load the file
        reader.addEventListener('load', () => {

            // Create a new image element and set its src attribute to the base64-encoded image data
            const img = document.createElement('img');
            img.src = reader.result;
            file.readAsDataURL = reader.result;
            console.log(file.readAsDataURL);
            img.classList.add('circle-img');

            // Create a delete button for the image element
            const deleteBtn = document.createElement('button');
            deleteBtn.classList.add('delete-btn');
            deleteBtn.innerHTML = '<i class="fa-solid fa-xmark"></i>';

            // Create a container element for the image and delete button
            const imageContainerItem = document.createElement('div');
            imageContainerItem.classList.add('image-container');
            imageContainerItem.appendChild(deleteBtn);
            imageContainerItem.appendChild(img);

            // Add the image and delete button container to the image container
            imageContainer.appendChild(imageContainerItem);
            deleteBtn.onclick = function () {
                fileInput.value = '';
                imageContainerItem.innerHTML = '';
            };

            // Clear the file input element
            // fileInput.value = '';
        });

        // Read the selected image file as a data URL
        reader.readAsDataURL(file);
    });
</script>
@endpush