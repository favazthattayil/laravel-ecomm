<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Axelmart</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <style>
        .gradient-custom {
            /* fallback for old browsers */
            background: #4e73df;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to bottom right, rgba(78, 115, 223, 1), rgba(255, 255, 255, 1));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to bottom right, rgba(78, 115, 223, 1), rgba(255, 255, 255, 1));
        }


        input::placeholder {
            font-size: 15px;
        }

        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }

        .h-custom {
            height: calc(100% - 73px);
        }

        @media (max-width: 450px) {
            .h-custom {
                height: 100%;
            }
        }
    </style>


</head>

<body>
    <section class="vh-100 gradient-custom">
        @if (session('message'))
            <div class="alert alert-success d-flex align-items-center justify-content-center m-10" id="session-message">
                {{ session('message') }}
            </div>

            <script>
                // Set a timeout to hide the message after 4 seconds (4000 milliseconds)
                setTimeout(function() {
                    var sessionMessage = document.getElementById('session-message');
                    if (sessionMessage) {
                        sessionMessage.style.display = 'none';
                    }
                }, 4000);
            </script>
        @endif
        <div class="container-fluid h-custom  vh-100">




            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                        class="img-fluid" alt="Sample image">
                </div>






                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form method="POST" action={{ route('signin.Post') }}>

                        @csrf

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form3Example3">Email address</label>
                            <input type="email" id="form3Example3" name="email" class="form-control form-control-lg"
                                placeholder="Enter a valid email address" />

                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <label class="form-label" for="form3Example4">Password</label>
                            <input type="password" id="form3Example4" name="password"
                                class="form-control form-control-lg" placeholder="Enter password" />

                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            

                        </div>

                        <div class="text-center text-lg-start mt-4 pt-2">
                            <!-- Change the Login button to a submit button -->
                            <button type="submit" class="btn btn-primary btn-lg"
                                style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>

                            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a
                                    href="{{ route('signup') }}" class="link-danger">Register</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>





</body>

</html>
