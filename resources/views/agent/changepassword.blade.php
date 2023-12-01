@extends('agent.layout.app')

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
                                data-toggle="tab" class="active show" aria-selected="false">update password </a></li>
                             
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active show " id="tab14">
                            
                        <form action="{{route('agent.changepassword.update')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                             
                                  
                                    
                              
                                <div class="col-lg-9">
                                   
                                    <div class="row admin-detail">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleEmail1">lock open</label>
                                                <input  class="form-control" name="currentpassword" type="password" 
                                                    placeholder="Enter Current Password " required/>
                                            </div>

                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleEmail1">New Password</label>
                                                <input type="password" class="form-control" 
                                                name="newpassword" 
                                                    placeholder="Enter New Password" required/>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleEmail1">Confirm New Password</label>
                                                <input type="password" class="form-control" name="newpassword_confirmation"  
                                                    placeholder="Confirm New Password" required/>
                                            </div>
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