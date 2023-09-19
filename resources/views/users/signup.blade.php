<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Axelmart</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+I5z8F5n5l5u1P2x2f4gn5g4CtUv5STfFf5F5" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- <style>
        .gradient-custom {
    /* fallback for old browsers */
    background: #4e73df;

    /* Chrome 10-25, Safari 5.1-6 */
    background: -webkit-linear-gradient(to bottom right, rgba(78, 115, 223, 1), rgba(255, 255, 255, 1));

    /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    background: linear-gradient(to bottom right, rgba(78, 115, 223, 1), rgba(255, 255, 255, 1));
}


        .card-registration .select-input.form-control[readonly]:not([disabled]) {
            font-size: 1rem;
            line-height: 2.15;
            padding-left: .75em;
            padding-right: .75em;
        }

 /* Set the font size of select input to 18px */
.select-input {
    font-size: 15px;
}


        .card-registration .select-arrow {
            top: 13px;
        }
    </style> -->



<style>
  .gradient-custom {
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);



  }

  .card-custom {
    border-bottom-left-radius: 10% 50%;
    border-top-left-radius: 10% 50%;
    background-color: #f8f9fa;
  }

  .input-custom {
    background-color: white;
  }

  .white-text {
    color: hsl(52, 0%, 98%);
    font-weight: 100;
    font-size: 14px;
  }

  .back-button {
    background-color: hsl(52, 0%, 98%);
    font-weight: 700;
    color: black;
    margin-top: 50px;
  }
</style>
</head>
<body class="vh-100 d-flex justify-content-center align-items-center gradient-custom">
 <div class="row mt-3 mx-3 d-flex justify-content-center align-item-center" style="margin-top: 25px;   ">
  <div class="col-md-3">
    <div style="margin-top: 50px; margin-left: 10px;" class="text-center">

    <i class="fa-regular fa-truck-fast" style="color: #ffffff;"></i>
      <h3 class="mt-3 text-white">Welcome</h3>
      <p class="white-text" style="font-weight: bold;">
" to AxelMart, your gateway to endless shopping possibilities! We're delighted to have you here, and we can't wait to help you find exactly what you're looking for."</p>
    </div>
    <div class="text-center">
    <a href="{{ route('signin') }}" class="btn btn-white btn-rounded back-button">Go back</a>

    </div>
  </div>
  <div class="col-md-9 justify-content-center">
    <div class="card card-custom pb-4">
      <div class="card-body mt-0 mx-5">
        <div class="text-center mb-3 pb-2 mt-3">
          <h4 style="color: #495057;">Signup</h4>
        </div>
        <form action="{{ route('signup.Post') }}" method="POST" class="mb-0">
          @csrf <!-- Add the CSRF token for Laravel forms -->
          <div class="row mb-4">
            <div class="col">
              <div class="form-outline">
                <label class="form-label" for="first_name">First name</label>
                <input type="text" id="first_name" name="fname" class="form-control input-custom" required />

              </div>
            </div>
            <div class="col">
              <div class="form-outline">
                 <label class="form-label" for="last_name">Last name</label>
                <input type="text" id="last_name" name="lname" class="form-control input-custom" required />

              </div>
            </div>
          </div>
          <div class="row mb-4">
            <div class="col">
              <div class="form-outline">
                <label class="form-label" for="email">Email</label>
                <input type="text" id="email" name="email" class="form-control input-custom" required />

              </div>
            </div>
            <div class="col">
  <div class="form-outline">
    <label class="form-label" for="phone">Phone</label>
  <input type="tel" id="phoneNumber" name="phone" class="form-control input-custom" />

  </div>
</div>

          </div>
          <div class="row mb-4">
            <div class="col">
              <div class="form-outline">
                <label class="form-label" for="password">Password</label>
                <input type="password" id="password" name="password" class="form-control input-custom" required />

              </div>
            </div>
            <div class="col">
              <div class="form-outline">
                <label class="form-label" for="confirm_password">Confirm Password</label>
                <input type="password" id="confirm_password" name="confirm_password" class="form-control input-custom" required />

              </div>
            </div>
          </div>
          <div class="float-end">
            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-rounded" style="background-color: #0062CC;">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</body>

<!-- <body>
    <section class="vh-100 gradient-custom">
        <div class="container py-5 ">
          <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 col-lg-9 col-xl-7">
              <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                <div class="card-body p-4 p-md-5">
                  <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Sign Up</h3>
                  <form method="POST" action="{{ route('signup.Post') }}">

                    @csrf
                    <div class="row">
                      <div class="col-md-6 mb-4">

                        <div class="form-outline">
                          <label class="form-label" for="firstName">First Name</label>
                          <input type="text" id="firstName" name="fname" class="form-control form-control-lg" />
                        </div>

                      </div>
                      <div class="col-md-6 mb-4">

                        <div class="form-outline">
                          <label class="form-label" for="lastName">Last Name</label>
                          <input type="text" id="lastName" name="lname" class="form-control form-control-lg" />
                        </div>

                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6 mb-4 d-flex align-items-center">
                        <div class="form-outline">
                            <label class="form-label" for="emailAddress">Email</label>
                            <input type="email" id="emailAddress" name="email" class="form-control form-control-lg" />
                          </div>
                      </div>

                      <div class="col-md-6 mb-4 pb-2">
                       <div class="form-outline">
                          <label class="form-label" for="phoneNumber">Phone Number</label>
                          <input type="tel" id="phoneNumber" name="phone" class="form-control form-control-lg" />
                        </div>
                    </div>
                    </div>



                    <div class="row">
                        <div class="col-md-6 mb-4 d-flex align-items-center">
                            <div class="form-outline">
                                <label class="form-label" for="password">Password</label>
                                <input type="password" id="password" name="password" class="form-control form-control-lg" />
                            </div>
                        </div>

                        <div class="col-md-6 mb-4 pb-2">
                            <div class="form-outline">
                                <label class="form-label" for="confirmPassword">Confirm Password</label>
                                <input type="password" id="confirmPassword" name="cpassword" class="form-control form-control-lg" />
                            </div>
                        </div>
                    </div>





                    <div class="mt-4 pt-2">
                      <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
                    </div>

                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</body> -->
<script>
  document.addEventListener("DOMContentLoaded", function () {
    new WOW().init(); // Initialize MDB animations
  });
</script>

<script src="https://cdn.jsdelivr.net/npm/mdb@5.0.2/dist/js/mdb.min.js"></script>
</html>
