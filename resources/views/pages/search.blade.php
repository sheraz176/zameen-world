<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>zameen.world</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="zameen/assets/css/style.css" />
  <link rel="stylesheet" href="zameen/assets/css/navbar.css" />
  
</head>

<body>
  <!-- navbar -->
  @include('frontend.partials.navbar_new')
  <!-- filters-section -->
  @include('frontend.partials.filters')
  <!-- Properties for Sale  -->
  @include('frontend.partials.society_show')
   <!-- stories-section -->
   @include('frontend.partials.stories')
  <!-- list-grid-view-properties -->
  @include('frontend.partials.list_properties')
 <!-- artical-section -->
  @include('frontend.partials.article')
  <!-- footer -->
  @include('frontend.partials.footer')
  <!-- area modal -->
  <div class="modal fade" id="changeareaModal" tabindex="-1" aria-labelledby="changeareaModalLabel" aria-hidden="true">

    <div class="modal-dialog modal-md modal-dialog-centered modal-wrapper">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="md-text">Change Area</h3>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <select class="form-select" aria-label="Default select example">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
          <input type="submit" name="" id="" value="save" class="submmit">
        </div>
      </div>
    </div>
  </div>
  <!-- Currency modal -->
  <div class="modal fade" id="CurrencyModal" tabindex="-1" aria-labelledby="CurrencyModalLabel" aria-hidden="true">

    <div class="modal-dialog modal-md modal-dialog-centered modal-wrapper">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="md-text">Change Currency</h3>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <select class="form-select" aria-label="Default select example">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
          <input type="submit" name="" id="" value="save" class="submmit">
        </div>
      </div>
    </div>
  </div>
  <!-- save-search modal -->
  <div class="modal fade" id="savesearchModal" tabindex="-1" aria-labelledby="savesearchModalLabel" aria-hidden="true">

    <div class="modal-dialog modal-md modal-dialog-centered modal-wrapper">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body pb-4">
          <form action="">
            <div class="d-flex flex-column gap-2">
              <button type="button" class="face-gmail" aria-label="Facebook sign in"><svg
                  xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="facebook">
                  <path data-name="Path 2764" fill="#fff"
                    d="M24 12a12 12 0 1 0-13.88 11.86v-8.4H7.08V12h3.05V9.36c0-3.01 1.79-4.67 4.53-4.67a18.46 18.46 0 0 1 2.68.23v2.96h-1.51a1.73 1.73 0 0 0-1.96 1.87V12h3.33l-.53 3.47h-2.8v8.38A12 12 0 0 0 24 12z">
                  </path>
                </svg><span class="">Continue with Facebook</span></button>
              <button type="button" class="face-gmail" aria-label="Google sign in"><svg
                  xmlns="http://www.w3.org/2000/svg" width="24" height="24">
                  <path fill="#4285f4"
                    d="M23.52 12.27a13.79 13.79 0 0 0-.22-2.46H12v4.64h6.46a5.52 5.52 0 0 1-2.4 3.62v3.02h3.88a11.7 11.7 0 0 0 3.58-8.82z">
                  </path>
                  <path fill="#34a853"
                    d="M12 24a11.46 11.46 0 0 0 7.94-2.9l-3.88-3.02a7.24 7.24 0 0 1-10.78-3.8h-4v3.11A12 12 0 0 0 12 24z">
                  </path>
                  <path fill="#fbbc05" d="M5.29 14.28a7.1 7.1 0 0 1 0-4.56v-3.1H1.28a12.01 12.01 0 0 0 0 10.77z"></path>
                  <path fill="#ea4335"
                    d="M12 4.77a6.48 6.48 0 0 1 4.59 1.8l3.44-3.44A11.53 11.53 0 0 0 12 0 12 12 0 0 0 1.27 6.61l4.01 3.11A7.15 7.15 0 0 1 12 4.77z">
                  </path>
                  <path fill="none" d="M0 0h24v24H0z"></path>
                </svg><span>Continue with Google</span></button>
                <p style="font-size: 14px;text-align: center;margin: 10px 0px;font-weight: 600;">OR
                </p>
              <input type="email" name="" id="" class="form-control" placeholder="Email*">
              <input type="password" name="" id="" class="form-control" placeholder="Password*">
              <a href="" class="save-login">Login</a>
              <div class="d-flex flex-row justify-content-between align-items-center gap-2">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Remember Me
                  </label>
                </div>
                <a href="#">Forgot Password?</a>
              </div>
              <p style="font-size: 14px;text-align: center;margin: 16px 0px;font-weight: 600;">ARE YOU NEW TO ZAMEEN ?
              </p>
              <input type="submit" name="" id="" value="Sign Up" class="submmit m-0">
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="zameen/assets/js/custom.js"></script>
  <script>
    $(document).ready(function () {
      $(".js-example-basic-single").select2();
    });

    // // Function to check and remove class
    // function checkWidth() {
    //   var windowWidth = $(window).width();
    //   var $yourElement = $(".properties-cards"); // Replace with your actual class selector

    //   // Check if window width is less than 800 pixels
    //   if (windowWidth < 768) {
    //     // Remove the class
    //     $yourElement.removeClass("active");
    //   }
    // }

    // // Call the function on document ready
    // checkWidth();

    // // Bind the function to the resize event
    // $(window).resize(function () {
    //   checkWidth();
    // });
  </script>
</body>

</html>