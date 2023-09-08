@extends('users.layout.umaster')
@section('content')


<style>


        .card-registration .select-input.form-control[readonly]:not([disabled]) {
        font-size: 1rem;
        line-height: 2.15;
        padding-left: .75em;
        padding-right: .75em;
        }
        .card-registration .select-arrow {
        top: 13px;
        }
        .select-input {
    font-size: 15px;
}
    </style>

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
  @endsection
