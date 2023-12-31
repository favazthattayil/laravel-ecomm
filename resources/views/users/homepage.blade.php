<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Axelmart</title>
    <link rel="icon" type="image/x-icon" href="img/AdminLTELogo.png">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="css/css/style.css">
    <link rel="stylesheet" type="text/css" href="css/css/productlist.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{ asset('css/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/css/productlist.css') }}">
    <!-- fevicon -->
    <link rel="icon" href="img/images/fevicon.png" type="image/gif" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+I5z8F5n5l5u1P2x2f4gn5g4CtUv5STfFf5F5" crossorigin="anonymous">

    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="js/js/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <!-- font awesome -->
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--  -->
    <!-- owl stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Poppins:400,700&display=swap&subset=latin-ext"
        rel="stylesheet">
    <link rel="stylesheet" href="css/css/owl.carousel.min.css">
    <link rel="stylesoeet" href="css/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">

    <!-- Include Bootstrap CSS (you should include this too if you haven't already) -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Include Bootstrap JavaScript (requires jQuery and Popper.js) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<style>
    /* Initially hide the label */
    .add-to-cart-label {
        display: none;
    }

    /* Show the label when hovering over the button or input */
    li:hover .add-to-cart-label {
        display: inline-block;
    }
</style>

<body>
    <!-- banner bg main start -->
    <div style="background-image: url('{{ asset('img/images/fashion-bg.jpg') }}');" class="banner_bg_main">


        <div class="container">
            <div class="header_section_top">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="custom_menu"
                            style="display: flex; justify-content: flex-end; align-items: flex-end; margin-right:100px;">

                            <ul
                                style="display: flex; justify-content: flex-end; align-items: flex-end; margin-right:50px;">
                                <li>
                                    {{-- <a href="{{ route('signup') }}">
                                    <span class="padding_10">User</span></a> --}}
                                </li>

                                <li><a href="{{ route('signin') }}">
                                        <span class="padding_10">sign in</span></a>
                                </li>

                                <li><a href="{{ route('use_home.cart') }}">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                        <span class="padding_10">Cart</span></a>
                                </li>
                                <li>
                                    {{-- <div class="dropdown">
                                        <button class="fas fa-user dropdown-button m-1 me-2 text">user</button>
                                        <div class="dropdown-content" style="color: rebeccapurple">
                                            <ul>
                                                <li stye>
                                                    <a href="{{route('use_home.cart')}}">
                                                        <i style="font-color:red;" class="fas fa-user-circle me-2"></i> Profile
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fas fa-sign-out-alt me-2"></i> Logout
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div> --}}

                                </li>
                                <li>

                                </li>
                            </ul>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dropdown" style="margin: 10px;">
            @auth


                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #2b2a29;">
                    <i class="fas fa-user-circle"></i> User
                </button>
            @endauth
            <div class="custom-dropdown-menu dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"
                style="width: 40px; background-color: rgb(58, 55, 53); text-align: left; border-radius:8px;">
                <!-- Adjust the width, background color, and icon color as needed -->
                <a class="dropdown-item" href="{{ route('use_home.personalinfo') }}"
                    style="color: #f1f1f1; transition: color 0.3s ease-in-out;"><i class="fas fa-user"
                        style="margin: 0 10px;"></i> Profile</a>
                <a class="dropdown-item" href="{{ route('use_home.cart') }}"
                    style="color: #f1f1f1; transition: color 0.3s ease-in-out;"><i class="fas fa-shopping-cart"
                        style="margin: 0 10px;"></i> Cart</a>
                <a class="dropdown-item" href="{{ route('orders') }}"
                    style="color: #f1f1f1; transition: color 0.3s ease-in-out;"><i class="fas fa-list"
                        style="margin: 0 10px;"></i> Orders</a>
                <a class="dropdown-item" href="{{ route('logout.Post') }}" style="color: #f1f1f1; transition: color 0.3s ease-in-out;"><i
                        class="fas fa-sign-out-alt" style="margin: 0 10px;"></i> Logout</a>
            </div>
        </div>


        <!-- header top section start -->
        <!-- logo section start -->
        <div class="logo_section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="logo"><a href="index.html"></a></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- logo section end -->
        <!-- header section start -->
        <div class="header_section">
            <div class="container">
                <div class="containt_main">
                    <div id="mySidenav" class="sidenav">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                        <a href="index.html">Home</a>
                        <a href="fashion.html">Fashion</a>
                        <a href="electronic.html">Electronic</a>
                        <a href="jewellery.html">Jewellery</a>




                    </div>
                    <span class="toggle_icon" onclick="openNav()"><img
                            src="{{ asset('img/images/toggle-icon.png') }}"></span>
                    <div class="dropdown">


                    </div>
                    <div class="main">
                        <!-- Another variation with a button -->

                    </div>

                </div>
            </div>
        </div>
        <!-- header section end -->
        <!-- banner section start -->
        <div class="banner_section layout_padding">
            <div class="container">
                <div id="my_slider" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">

                                <div class="col-sm-12">
                                    <h1 class="banner_taital">Smart Shopping <br>Starts Here</h1>
                                    <div class="buynow_bt"><a href="#">Buy Now</a></div>

                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h1 class="banner_taital">One Cart<br>Endless Choices</h1>
                                    <div class="buynow_bt"><a href="#">Buy Now</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h1 class="banner_taital">Smart Shopping <br>Starts Here</h1>
                                    <div class="buynow_bt"><a href="#">Buy Now</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
                        <i style="top: 50%" class="fa fa-angle-left"></i>
                    </a>
                    <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- banner section end -->
    </div>
    <!-- banner bg main end -->






    <!-- fashion section start -->



    @include('users.productlist')








    <!-- footer section start -->
    <div class="footer_section layout_padding">
        <div class="container">
            <div class="footer_logo"><a href="index.html"><img src="images/footer-logo.png"></a></div>
            <div class="input_bt">
                <input type="text" class="mail_bt" placeholder="Your Email" name="Your Email">
                <span class="subscribe_bt" id="basic-addon2"><a href="#">Subscribe</a></span>
            </div>
            <div class="footer_menu">
                <ul>
                    <li><a href="#">Best Sellers</a></li>
                    <li><a href="#">Gift Ideas</a></li>
                    <li><a href="#">New Releases</a></li>
                    <li><a href="#">Today's Deals</a></li>
                    <li><a href="#">Customer Service</a></li>
                </ul>
            </div>
            <div class="location_main">Help Line Number : <a href="#">+1 1800 1200 1200</a></div>
        </div>
    </div>
    <!-- footer section end -->
    <!-- copyright section start -->
    <div class="copyright_section">
        <div class="container">
            <p class="copyright_text">© 2020 All Rights Reserved. Design by <a href="https://html.design">Free html
                    Templates</a></p>
        </div>
    </div>
    <!-- copyright section end -->
    <!-- Javascript files-->
    <script src="js/js/jquery.min.js"></script>
    <script src="js/js/popper.min.js"></script>
    <script src="js/js/bootstrap.bundle.min.js"></script>
    <script src="js/js/jquery-3.0.0.min.js"></script>
    <script src="js/js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/js/custom.js"></script>
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>

    <script>
        // JavaScript to handle dropdown item clicks and redirection
        document.querySelectorAll('.dropdown-item').forEach(function(item) {
            item.addEventListener('click', function(event) {
                event.preventDefault(); // Prevent the default behavior (opening the dropdown)
                var href = this.getAttribute('href'); // Get the href attribute of the clicked item
                window.location.href = href; // Redirect to the specified URL
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
