<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="img/AdminLTELogo.png">
    <title>Axelmart</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+I5z8F5n5l5u1P2x2f4gn5g4CtUv5STfFf5F5" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">



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
                    " to AxelMart, your gateway to endless shopping possibilities! We're delighted to have you here, and
                    we can't wait to help you find exactly what you're looking for."</p>
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
                                    <input type="text" id="first_name" name="fname"
                                        class="form-control input-custom" required />

                                </div>
                            </div>
                            <div class="col">
                                <div class="form-outline">
                                    <label class="form-label" for="last_name">Last name</label>
                                    <input type="text" id="last_name" name="lname"
                                        class="form-control input-custom" required />

                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col">
                                <div class="form-outline">
                                    <label class="form-label" for="email">Email</label>
                                    <input type="text" id="email" name="email"
                                        class="form-control input-custom" required />

                                </div>
                            </div>
                            <div class="col">
                                <div class="form-outline">
                                    <label class="form-label" for="phone">Phone</label>
                                    <input type="tel" id="phoneNumber" name="phone"
                                        class="form-control input-custom" />

                                </div>
                            </div>

                        </div>
                        <div class="row mb-4">
                            <div class="col">
                                <div class="form-outline">
                                    <label class="form-label" for="password">Password</label>
                                    <input type="password" id="password" name="password"
                                        class="form-control input-custom" required />

                                </div>
                            </div>
                            <div class="col">
                                <div class="form-outline">
                                    <label class="form-label" for="confirm_password">Confirm Password</label>
                                    <input type="password" id="confirm_password" name="confirm_password"
                                        class="form-control input-custom" required />

                                </div>
                            </div>
                        </div>
                        <div class="float-end">
                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-rounded"
                                style="background-color: #0062CC;">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>


<script>
    document.addEventListener("DOMContentLoaded", function() {
        new WOW().init(); // Initialize MDB animations
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/mdb@5.0.2/dist/js/mdb.min.js"></script>

</html>
