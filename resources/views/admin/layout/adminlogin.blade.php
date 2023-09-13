<!DOCTYPE html>
<html>
<head>
  <!-- Include Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer">

  <style>
    body {
      padding: 50px;
      font-family: 'Roboto', sans-serif;
      background-color: #F5F5F5;
    }

    .signin {

      position: relative;
      height: 700px;
      width: 500px;
      margin: auto;
      box-shadow: 0px 30px 125px -5px #000;
    }

    .back-img {
        border-radius:10px;
      position: relative;
      width: 100%;
      height: 250px;
      background: url('https://www.omnihotels.com/-/media/images/hotels/nycber/destinations/nyc-aerial-skyline.jpg?h=660&la=en&w=1170') no-repeat center center;
      background-size: cover;
    }

    .layer {

      background-color: rgba(33, 150, 243, 0.5);
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
    }

    .active {
      padding-left: 25px;
      color: #fff;
    }

    .nonactive {
      color: rgba(255, 255, 255, 0.6);
    }

    .sign-in-text {
      top: 175px;
      position: absolute;
      z-index: 1;
    }

    h2 {
      padding-left: 15px;
      font-size: 25px;
      text-transform: uppercase;
      display: inline-block;
      font-weight: 300;
    }

    .point {
      position: absolute;
      z-index: 1;
      color: #fff;
      top: 235px;
      padding-left: 50px;
      font-size: 20px;
    }

    .form-section {
      padding: 70px 90px 70px 90px;
    }

    .keep-text {
      font-size: 15px;
      color: #BDBDBD;
    }

    .forgot-text {
      font-size: 12px;
      color: #BDBDBD;
      text-align: right;
    }

    .sign-in-btn {

      width: 100%;
      height: 75px;
      position: absolute;
      bottom: 0;
      right: 0;
      border-radius: 0px;
      background-color: rgba(63, 78, 191, 1);
    }
  </style>
</head>
<body>
  <div class="signin">
    <div class="back-img">
      <div class="sign-in-text">
        <h2 class="active">Sign In</h2>

      </div>
      <div class="layer"></div>

    </div>


    <div class="form-section">
        
        @if(session('message'))
        <div class="alert alert-danger" id="sessionMessage">
            {{ session('message') }}
        </div>
        @endif

      <form action={{route('admin.do.login')}} method="POST">

        @csrf

        <div class="form-group">
          <input class="form-control" type="text" id="sample3" name="username" placeholder="Username">
        </div>

        <div class="form-group">
          <input pattern=".{8,}" class="form-control" type="password" name="password" id="sample3" placeholder="Password">
        </div>


        <div class="form-check">
          <input type="checkbox" class="form-check-input" value="1" id="checkbox-1" name="remember_me">
          <label class="form-check-label keep-text" for="checkbox-1">Keep me Signed In</label>
        </div>
        <button type="submit" class="btn btn-primary sign-in-btn">Sign In</button>
      </form>


</div>




    </div>
  </div>
</body>
</html>

