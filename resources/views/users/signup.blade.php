<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
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
    </style>

</head>
<body>
    <section class="vh-100 gradient-custom">
        <div class="container py-5 ">
          <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 col-lg-9 col-xl-7">
              <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                <div class="card-body p-4 p-md-5">
                  <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Sign Up</h3>
                  <form method="POST" action={{route ('signup.Post')}}>
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
</body>
</html>
