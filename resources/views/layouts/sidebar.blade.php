<div class="page-wrapper chiller-theme ">
  <a id="show-sidebar" class="btn btn-sm btn-dark" style="cursor:pointer">
    <i class="fas fa-bars text-white"></i>
  </a>
  <nav id="sidebar" class="sidebar-wrapper">
        <div class="sidebar-content">
            <div class="sidebar-brand">
                  <a href=""><img src="pirateslogo1.png" class="pirateslogo"></a>
                    <div id="close-sidebar">
                        <i class="fas fa-times"></i>
                    </div>
            </div>


      
            <div class="sidebar-menu">          
                <div class="sidebar-dropdown">
                    <a style="color:#b8bfce; cursor:pointer;">
                            <div class="sidebar-header">
                              @guest
                                <div class="user-pic">
                                    <img class="img-responsive img-rounded" src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg" alt="User picture">
                                </div>
                                <div class="user-info">
                                 <span class="user-name">Guest </span>
                                 <span class="user-role">...</span>
                                 <span class="user-status">
                                 <i class="fa fa-circle"></i>
                                 <span>Online</span>
                                 </span>
                                </div>
                            </div>
                    </a>
                    
                    <div class="sidebar-submenu">
                    <ul>
                            <li>
                            <a href="{{ route('login') }}"><i class="login fa fa-user-circle"></i>Login</a>
                            </li>
                            @if (Route::has('register'))
                            <li>
                            <a href="{{ route('register') }}"><i class="login fa fa-user-plus"></i>Register</i></a>
                            </li>
                            @endif
                    @else
                    <div class="user-pic">
                                <img class="img-responsive img-rounded" src="user.jpg" alt="User picture">
                                </div>
                                <div class="user-info">
                                 <span class="user-name">{{ Auth::user()->name }} </span>
                                 <span class="user-role">Member</span>
                                 <span class="user-status">
                                 <i class="fa fa-circle"></i>
                                 <span>Online</span>
                                             @yield('content')

                                 </span>
                                </div>
                            </div>
                            
                            <div class="sidebar-submenu">
                          <ul  style="margin-top:-30px;">
                            <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}<i class="login fa fa-power-off"></i></a>
                            </li>
                             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                              </form>
                         </ul>
                    </div>
                     @endguest

                </div>
            </div>
      <!--<div class="sidebar-header">
        <div class="user-pic">
          <img class="img-responsive img-rounded" src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg"
            alt="User picture">
        </div>

        
        <div class="user-info">
          <span class="user-name">Jhon
            <strong>Smith</strong>
          </span>
          <span class="user-role">Administrator</span>
          <span class="user-status">
            <i class="fa fa-circle"></i>
            <span>Online</span>
          </span>
        </div>
      </div> -->

      <div class="sidebar-menu">
        <ul>
          <li>
            <a href="">
              <i class="fa fa-home"></i>
              <span>Home</span>
            </a>
          </li>

          <li>
            <a href="#about">
              <i class="fa fa-info"></i>
              <span>About Us</span>
            </a>
          </li>

          <li>
            <a href="#">
              <i class="fa fa-star"></i>
              <span>Success Story</span>
            </a>
          </li>

          <li>
            <a href="#">
              <i class="fa fa-calendar"></i>
              <span>Events</span>
            </a>
          </li>

          <li>
            <a href="#committees">
              <i class="fa fa-users"></i>
              <span>Committees</span>
            </a>
          </li>

          <li>
            <a href="#portfolio">
              <i class="fa fa-camera"></i>
              <span>Gallery</span>
            </a>
          </li>

          <li>
            <a href="#">
              <i class="fa fa-phone"></i>
              <span>Contact Us</span>
            </a>
          </li>

          <!--For The Future-->
          
          <!--<li class="header-menu">
            <span>Extra</span>
          </li>
          <li>
            <a href="#">
              <i class="fas fa-tshirt"></i>
              <span>T-Shirt</span>
              <span class="badge badge-pill badge-primary">Beta</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fas fa-id-badge"></i>
              <span>ID</span>
            </a>
          </li>-->
        </ul>
      </div>
      <!-- sidebar-menu  -->
    </div>
    <!-- sidebar-content  -->
    <div class="sidebar-footer">
      <a href="https://www.facebook.com/piratesegypt/">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="https://twitter.com/piratesegypt">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="https://www.instagram.com/Piratesegypt/">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="https://www.linkedin.com/company/pirates-egypt-asu/about/">
        <i class="fab fa-linkedin-in"></i>
      </a>
    </div>
  </nav>
<!--Navbar Ends-->