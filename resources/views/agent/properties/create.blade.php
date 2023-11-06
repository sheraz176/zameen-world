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
                        <h6>Add Propertiess</h6>
                        <a href="Properties-list.html" class="ms-text-primary">Propertiess List</a>
                    </div>
                    <div class="ms-panel-body">
                        <form class="needs-validation" novalidate="">
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom0001">First Name</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="validationCustom0001"
                                            placeholder="Enter First Name" required="">
                                    </div>
                                    <div class="error-msg">
                                        <span class="d-flex gap-5 align-items-center"><svg width="12" height="11"
                                                viewBox="0 0 12 11" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M4.77994 1.16969C5.31517 0.218177 6.68513 0.218176 7.22035 1.16969L11.1266 8.11407C11.6515 9.04731 10.9771 10.2004 9.90636 10.2004H2.09393C1.02318 10.2004 0.348776 9.04731 0.873727 8.11407L4.77994 1.16969ZM6.70009 8.10051C6.70009 8.48711 6.38668 8.80051 6.00009 8.80051C5.61349 8.80051 5.30009 8.48711 5.30009 8.10051C5.30009 7.71391 5.61349 7.40051 6.00009 7.40051C6.38668 7.40051 6.70009 7.71391 6.70009 8.10051ZM6.00009 2.50051C5.61349 2.50051 5.30009 2.81391 5.30009 3.20051V5.30051C5.30009 5.68711 5.61349 6.00051 6.00009 6.00051C6.38668 6.00051 6.70009 5.68711 6.70009 5.30051V3.20051C6.70009 2.81391 6.38668 2.50051 6.00009 2.50051Z"
                                                    fill="#CE2121" />
                                            </svg>
                                            Please type valid Department Name</span>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom0002">Last name</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="validationCustom0002"
                                            placeholder="Enter Last Name" required="">

                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom0003">Email Address</label>
                                    <div class="input-group">
                                        <input type="email" class="form-control" id="validationCustom0003"
                                            placeholder="Enter Email" required="">

                                    </div>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="validationCustom0004">Create Password</label>
                                    <div class="input-group">
                                        <input type="password" class="form-control" id="validationCustom0004"
                                            placeholder="Enter Password" required="">

                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom0005">Designation</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="validationCustom0005"
                                            placeholder="Enter Designation" required="">

                                    </div>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="validationCustom6">Department</label>
                                    <div class="input-group">
                                        <select class="form-control" id="validationCustom6" required="">
                                            <option value="">Neurology</option>
                                            <option value="">Gynaecology</option>
                                            <option value="">Microbiology</option>
                                            <option value="">Pharmacy</option>
                                            <option value="">Neonatal</option>
                                        </select>

                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-2">
                                    <label for="validationCustom007">Address</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="validationCustom007"
                                            placeholder="Address" required="">

                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom008">Specialist</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="validationCustom008"
                                            placeholder="Specialist" required="">

                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-2">
                                    <label for="validationCustom009">Mobile</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="validationCustom009"
                                            placeholder="Mobile" required="">

                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">

                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12 mb-2">
                                    <label>Short Biography</label>
                                    <div class="input-group">
                                        <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>

                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label>Date of Birth</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="validationCustom102"
                                            placeholder="Date of Birth" required="">

                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom202">Blood Group</label>
                                    <div class="input-group">
                                        <select class="form-control" id="validationCustom202" required="">
                                            <option value="">A+</option>
                                            <option value="">A-</option>
                                            <option value="">B+</option>
                                            <option value="">B-</option>
                                            <option value="">AB+</option>
                                            <option value="">AB-</option>
                                            <option value="">O+</option>
                                            <option value="">O-</option>
                                        </select>

                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label>Sex</label>
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                            <label class="ms-checkbox-wrap">
                                                <input type="radio" name="radioExample" value="">
                                                <i class="ms-checkbox-check"></i>
                                            </label>
                                            <span> Male </span>
                                        </li>
                                        <li class="ms-list-item">
                                            <label class="ms-checkbox-wrap">
                                                <input type="radio" name="radioExample" value="" checked="">
                                                <i class="ms-checkbox-check"></i>
                                            </label>
                                            <span> Female </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-12 mb-3">
                                    <div class="form-validation-cutstom">
                                    <div class="dropzone-button">
                                        <label for="file-input" style="display: block;margin-bottom: 0px;">
                                            <div class="dropzone" id="dropzone">
                                                <div class="dropzone-label">
                                                    <i class="fas fa-cloud-upload-alt"></i>
                                                    <span>Drop files here or click to upload.</span>
                                                </div>
                                                <input type="file" id="file-input" onchange="handleFileUpload()"
                                                    accept="image/*">
                                            </div>
                                        </label>
                                    </div>
                                </div>
                                    <div id="preview-container"></div>
                                </div>
                            </div>
                          

                            <div class="modal-body p-0 text-left">
                                <div class="col-xl-12 col-md-12">
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
                                                    <input type="file" id="file-input-group" multiple>
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
<script>
    function handleFileUpload() {
        const input = document.getElementById('file-input');
        const files = input.files;
        if (files.length > 0) {
            const reader = new FileReader();
            reader.readAsDataURL(files[0]);
            reader.onload = function () {
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
                deleteButton.onclick = function () {
                    input.value = '';
                    previewContainer.innerHTML = '';
                };
                previewContainer.appendChild(deleteButton);
            };
        }
        else{
            $(".form-validation-cutstom").addClass("add-error");
        }
    }

</script>
<!-- tags-input -->
<script>
   
    console.log( $(".tag-input").val());
</script> 

    <!-- Page Specific Scripts Start -->
    <script src="assets/js/jquery.webticker.min.js"> </script>
    <!-- Page Specific Scripts Finish -->

    <!-- medjestic core JavaScript -->
    <script src="assets/js/framework.js"></script>
    <!-- Settings -->
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
                reader.onload = function () {
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
        var suggestions = ["Apple", "Banana", "Cherry", "Durian", "Elderberry", "Fig", "Apple", "Banana", "Cherry", "Durian", "Elderberry", "Fig"];

        // Get the input element and the suggestions list
        var input = document.getElementById("autocomplete-input");
        var list = document.getElementById("autocomplete-list");


        // Add an event listener to the input element
        input.addEventListener("input", function () {
            var val = this.value;
            list.innerHTML = "";
            if (val.length > 0) {
                var matches = suggestions.filter((suggestion)=> {
                    return suggestion.toLowerCase().indexOf(val.toLowerCase()) != -1;
                });
                if (matches.length > 0) {
                    matches.forEach((match)=> {
                        var suggestionElem = document.createElement("li");
                        list.style.display = "block";
                        suggestionElem.innerText = match;
                       
                        suggestionElem.addEventListener("click", function () {
                            input.value = match;
                            list.innerHTML = "";
                            list.style.display = "none";
                        });
                        list.appendChild(suggestionElem);
                    });
                }
                else {
                    list.style.display = "none";
                }
            }
        });
        $('#autocomplete-input').keyup(function () {
            var input_ = $('#autocomplete-input').val();
            console.log('input_.length', input_.length);
            if (input_.length == 0) {
                list.style.display = "none";
            }
        });


    </script>


@endpush