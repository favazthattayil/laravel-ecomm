<nav class="mt-2" style="background-color: #2b2a29;">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->

      <li class="nav-item">
        <a href="{{route('use_home.personalinfo')}}" class="nav-link">
          <i class="nav-icon fas fa-user" ></i>
          <p>
            Personal info
          </p>
        </a>
      </li>




      <li class="nav-item">
        <a href="{{route('use_home.cart')}}" class="nav-link">
          <i class="nav-icon fas fa-shopping-cart"></i>
          <p>
            Cart
          </p>
        </a>
      </li>


      <li class="nav-item">
        <a href="{{ route('orders') }}" class="nav-link">
            <i class="nav-icon fas fa-shopping-bag"></i> <!-- Change the icon class here -->
            <p>
                Orders
            </p>
        </a>
    </li>



      <li class="nav-item">
        <a href="{{ route('addresses') }}" class="nav-link">
            <i class="nav-icon fas fa-map-marked-alt"></i> <!-- Change the icon class here -->
            <p>
                Address
            </p>
        </a>
    </li>


    <li class="nav-item">
        <a href="{{ route('selectaddress') }}" class="nav-link">
            <i class="nav-icon fas fa-map-marked-alt"></i> <!-- Change the icon class here -->
            <p>
                 select Address
            </p>
        </a>
    </li>


      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-sign-out-alt"></i>
          <p>
            Logout

          </p>
        </a>
      </li>

    </ul>
  </nav>

