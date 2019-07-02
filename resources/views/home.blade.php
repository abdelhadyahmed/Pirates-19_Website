<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" integrity="sha256-PZLhE6wwMbg4AB3d35ZdBF9HD/dI/y4RazA3iRDurss=" crossorigin="anonymous" />  <!--Gallery Magnific Pop-Up-->
    <link rel="stylesheet" href="home.css">
    <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js" integrity="sha256-P93G0oq6PBPWTP1IR8Mz/0jHHUpaWL0aBJTKauisG7Q=" crossorigin="anonymous"></script> <!--Gallery Magnific Pop-Up-->

</head>

<body>

  <!--Side Navbar Starts-->
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
<!--Side Navbar Ends-->

  <!--Start Body-->
<header class="masthead">
<div class="text-center">
                  <a href=""><img src="axis.png" class="pirateslogomid" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000"></a>
                  </div>
    <div class="container h-75">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <h5 class="text-white" style="margin-bottom:0px; padding-bottom:0px;" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="1000" data-aos-delay="1000">PIRATES</h6>
          <h1 class="text-uppercase text-white font-weight-bold" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="1000" data-aos-delay="1000">Innovate To Lead</h1>
          <hr class="divider my-4" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="1500">
        </div>
        <div class="col-lg-8" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1300" data-aos-delay="2000">
          <a class="js-scroll-trigger arrow" href="#about"><img src="arrow.png"></a>
        </div>
      </div>
    </div>
  </header>

  <section class="page-section grey" id="about" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="1200">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="text-white mt-0" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="1000" data-aos-delay="500">Who Are We?</h2>
          <hr class="divider light my-4" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="1000" data-aos-delay="500">
          <p class="text-white-50 mb-4" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="1000" data-aos-delay="1000">I'm bullet proof nothing to lose fire away fire away, Ricochet you take you aim
          fire away fire away, You shot me down but I won't fall I'm Titanium, You shot me down but I won't fall I'm Tinaniuuuuuuum</p>
          <a class="btn btn-light btn-xl js-scroll-trigger" href="#success" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="1000" data-aos-delay="1500">Get Started!</a>
        </div>
      </div>
    </div>
  </section>

  <section class="page-section bg-success" id="success" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1200">
    <div class="container">
      <div class="row">
        <div class="col-lg-2">
          <i class="fas fa-star random"></i>
      </div>
        <div class="col-lg-8 text-center">
          <h2 class="text-white mt-0" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1000" data-aos-delay="500">Success Story</h2>
          <hr class="divider light my-4" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1000" data-aos-delay="500">
          <p class="text-white-50 mb-4" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1000" data-aos-delay="1000">Summa Lumma Dumma Lumma you assuming I'm a human, what I gotta do to get it through you I'm 
          Super human, Innovate and Imma made of rubber so that every thing you say is ricochet in of me and it will glue to you</p>
          <a class="btn btn-light btn-xl" href="#success" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1000" data-aos-delay="1500">Know More</a>
        </div>
        <div class="col-lg-2">
          <i class="fas fa-star random1"></i>	
      </div>
      </div>
      
    </div>
  </section>

  <!--Events Section at Event time-->
  <section id="events" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1000">
    <div class="container-fluid p-0">
    <div class="row justify-content-center" id="even">
          <div class="col-lg-8 text-center">
            <h2 class="text-white mt-0" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1000" data-aos-delay="500">Upcoming Events</h2>
            <hr class="divider light my-4" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1000" data-aos-delay="1000">
          </div>
  </div>
      <div class="row no-gutters" id="eventsrow">
        <div class="col-lg-1"></div>

        <div class="col-lg-5 col-md-12 col-sm-6" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1000" data-aos-delay="2500">
            <img class="img-fluid" src="be.jpg" alt=""> <i class="fas fa-cloud cloud"></i>
        </div>
        <div class="col-lg-1"></div>
        <div class="col-lg-4 col-md-12 col-sm-6 text-center text-lg-left" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1000" data-aos-delay="2000">
         <h3 style="margin-top:10%">Career Intilligence</h3>
         <h6>Innovate to Lead</h6>
          <p style="font-size:18px; text-allign:justify; margin-top:25px;">ghg dhgbngb gbgb gfbnkn h nk bfn h gkn jfk gnjkn jfgjn jgnug khub bg jh h h jeh ehve v jnk rjjjn k k rjtnjn rg jngj kjn jkng ngk jel ;ke lj ek n;k jlkm lkrbmvntebu ujb j jn trnb  yjg huervtg   hkjngjh unjrgjunnj ngnjn ugjlrlrbnjrjtnk  kjgnjn ljfnblln nl njnl jnflj nflfn fjn lfnf lnlfnln nln lfh fjnj kfjn gkn fjnkn gfnlnf ljnlf gnlfj kn</p>
          <a class="btn btn-light btn-xl" style="margin-top:20px;" href="#">Apply Now</a>
        </div>
        <div class="col-lg-1"></div>
       </div>
    </section>



    <!--Events Section at any time

  <section id="portfolio" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1000">
    <div class="container-fluid p-0">
    <div class="row justify-content-center" id="events">
          <div class="col-lg-8 text-center">
            <h2 class="text-white mt-0" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1000" data-aos-delay="500">Upcoming Events</h2>
            <hr class="divider light my-4" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1000" data-aos-delay="1000">
          </div>
  </div>
      <div class="row no-gutters" id="eventsrow">
        <div class="col-lg-1"></div>

        <div class="col-lg-5 col-md-12 col-sm-6" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1000" data-aos-delay="2500">
            <img class="img-fluid" src="be.jpg" alt=""> <i class="fas fa-cloud cloud"></i>
        </div>
        <div class="col-lg-1"></div>
        <div class="col-lg-4 col-md-12 col-sm-6 text-center text-lg-left" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1000" data-aos-delay="2000">
         <h3 style="margin-top:10%">Our Events</h3>
          <p style="font-size:18px; text-allign:justify; margin-top:25px;">ghg dhgbngb gbgb gfbnkn h nk bfn h gkn jfk gnjkn jfgjn jgnug khub bg jh h h jeh ehve v jnk rjjjn k k rjtnjn rg jngj kjn jkng ngk jel ;ke lj ek n;k jlkm lkrbmvntebu ujb j jn trnb  yjg huervtg   hkjngjh unjrgjunnj ngnjn ugjlrlrbnjrjtnk  kjgnjn ljfnblln nl njnl jnflj nflfn fjn lfnf lnlfnln nln lfh fjnj kfjn gkn fjnkn gfnlnf ljnlf gnlfj kn</p>
          <a class="btn btn-light btn-xl" style="margin-top:20px;" href="Events-Page">See More</a>
        </div>
        <div class="col-lg-1"></div>
       </div>
    </section>
    -->
    
<!--Committees Section Starts-->
    <div class="row justify-content-center pb-5" id="committees">
        <div class="col-lg-8 text-center">
          <h2 class="text-white mt-0" data-aos="zoom-out-left" data-aos-easing="linear" data-aos-duration="1000">Our Committees</h2>
          <hr class="divider light my-4" data-aos="zoom-out-left" data-aos-easing="linear" data-aos-duration="1000" data-aos-delay="500">
        </div>
    </div>
    <section id ="comm"> <!--Important Note: Image resolution in this section must be with ratio 16:9 like 1920x1080 and so on-->
	<div class="hero-center-section">
		<div class="left-text">HR</div>
		<div class="container">
			<div class="row justify-content-center edit">
				<div class="col-md-8">
					<div class="img-wrap">
						<img src="hr.jpg" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="hero-center-section">
		<div class="left-text">PR</div>
		<div class="container">
			<div class="row justify-content-center edit">
				<div class="col-md-8">
					<div class="img-wrap">
						<img src="pr.jpg" alt="">
					</div>
				</div>
			</div>
		</div>
  </div>
  <div class="hero-center-section">
		<div class="left-text">FR</div>
		<div class="container">
			<div class="row justify-content-center edit">
				<div class="col-md-8">
					<div class="img-wrap">
						<img src="fr.jpg" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="hero-center-section">
		<div class="left-text">IT</div>
		<div class="container">
			<div class="row justify-content-center edit">
				<div class="col-md-8">
					<div class="img-wrap">
						<img src="it.jpg" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="hero-center-section">
		<div class="left-text">QM</div>
		<div class="container">
			<div class="row justify-content-center edit">
				<div class="col-md-8">
					<div class="img-wrap">
						<img src="qm.jpg" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="hero-center-section">
		<div class="left-text">PM</div>
		<div class="container">
			<div class="row justify-content-center edit">
				<div class="col-md-8">
					<div class="img-wrap">
						<img src="pm.jpg" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="hero-center-section">
		<div class="left-text">L&R</div>
		<div class="container">
			<div class="row justify-content-center edit">
				<div class="col-md-8">
					<div class="img-wrap">
						<img src="lr.jpg" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
		
		
	<div class="section padding-top-bottom over-hide z-bigger">
		<ul class="slide-buttons">
			<li class="">
				<a href="#0" class="hover-target" data-hover="HR">HR</a>
			</li>
			<li class="">
				<a href="#0" class="hover-target" data-hover="PR">PR</a>
      </li>
      	<li class="">
				<a href="#0" class="hover-target" data-hover="FR">FR</a>
			</li>
			<li class="">
				<a href="#0" class="hover-target" data-hover="IT">IT</a>
			</li>
			<li class="">
				<a href="#0" class="hover-target" data-hover="QM">QM</a>
			</li>
			<li class="">
				<a href="#0" class="hover-target" data-hover="PM">PM</a>
			</li>
			<li class="">
				<a href="#0" class="hover-target" data-hover="L&R">L&R</a>
			</li>
		</ul>
	</div>
</section>
<!--Committees Section Ends-->


<!--Gallery Section Starts-->
 <section id="portfolio" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
    <div class="container-fluid p-0">
    <div class="row justify-content-center" id="events">
          <div class="col-lg-8 text-center">
            <h2 class="text-white mt-0" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000" data-aos-delay="400">Gallery</h2>
            <hr class="divider light my-4" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000" data-aos-delay="800">
          </div>
  </div>
      <div class="row no-gutters gallerys" id="eventsrow">
        <div class="col-sm-12 col-md-6" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000" data-aos-delay="1200">
          <a class="portfolio-box" href="be.jpg">  <!--This Image must be with ratio 3:2 Widescreen (3 width : 2 height) -->
            <img class="img-fluid" src="be.jpg" alt="">
            <div class="portfolio-box-caption">
              <i class="fas fa-eye" style="font-size:24px;"></i>
             <div class="project-category text-white-50">
                Our Crew
              </div>
            </div>
          </a>
        </div>
        <div class="col-sm-12 col-md-3" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000" data-aos-delay="1500">
          <a class="portfolio-box" href="qm1.jpg">  <!--This Image must be with ratio 4:3 Portrait (4 height : 3 width) -->
            <img class="img-fluid" src="qm1.jpg" alt="">
            <div class="portfolio-box-caption">
              <i class="fas fa-eye" style="font-size:24px;"></i>
             <div class="project-category text-white-50">
                Moamen QM
              </div>
            </div>
          </a>
        </div>
          <div class="col-sm-12 col-md-3" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000" data-aos-delay="1800">
          <a class="portfolio-box" href="zayat.jpg">  <!--This Image must be with ratio 4:3 Portrait (4 height : 3 width) -->
            <img class="img-fluid" src="zayat.jpg" alt="">
            <div class="portfolio-box-caption">
              <i class="fas fa-eye" style="font-size:24px;"></i>
             <div class="project-category text-white-50">
                Shady El-Zayat
              </div>
            </div>
          </a>
        </div>
          <div class="col-sm-12 col-md-3" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000" data-aos-delay="2100">
          <a class="portfolio-box" href="karim.jpg">  <!--This Image must be with ratio 4:3 Portrait (4 height : 3 width) -->
            <img class="img-fluid" src="karim.jpg" alt="">
            <div class="portfolio-box-caption">
             <i class="fas fa-eye" style="font-size:24px;"></i>
             <div class="project-category text-white-50">
                Karim Ismail
              </div>
            </div>
          </a>
        </div>
        <div class="col-sm-12 col-md-3" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000" data-aos-delay="2400">
          <a class="portfolio-box" href="pr1.jpg">  <!--This Image must be with ratio 4:3 Portrait (4 height : 3 width) -->
            <img class="img-fluid" src="pr1.jpg" alt="">
            <div class="portfolio-box-caption">
             <i class="fas fa-eye" style="font-size:24px;"></i>
             <div class="project-category text-white-50">
                Business Engineer
              </div>
            </div>
          </a>
        </div>
          <div class="col-sm-12 col-md-6" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000" data-aos-delay="2700">
          <a class="portfolio-box" href="it1.jpg"> <!--This Image must be with ratio 3:2 Widescreen (3 width : 2 height) -->
            <img class="img-fluid" src="it1.jpg" alt="">
            <div class="portfolio-box-caption">
               <i class="fas fa-eye" style="font-size:24px;"></i>
             <div class="project-category text-white-50">
                IT
              </div>
            </div>
          </a>
        </div>
       </div>
    </section>
  <!--Gallery Section Ends-->


<!--Contact Us Section Starts-->
<footer class="footer">
    <div class="container">
      <div class="row align-items-center p-0 mt-4">
        <div class="col-md-4">
        </div>
        <div class="col-md-4">
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="https://www.facebook.com/piratesegypt/">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://www.messenger.com/t/piratesegypt">
                <i class="fab fa-facebook-messenger"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://twitter.com/piratesegypt">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://www.instagram.com/Piratesegypt/">
                <i class="fab fa-instagram"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://www.linkedin.com/company/pirates-egypt-asu/about/">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
          <br>
           <span class="copyright text-muted">Copyright © PiratesEgypt 2019 <br class="m-0 p-0">
             Made with <i class="fas fa-heart heart"></i> by Pirates IT'19
           </span>
        </div>
        <div class="col-md-4">
        </div>
      </div>
    </div>
  </footer>

<!--Contact Us Section Ends-->



<!--Cursor-->

  <div class='cursor' id="cursor"></div>
  <div class='cursor2' id="cursor2"></div>
  <div class='cursor3' id="cursor3"></div> 
		

<script>
/*Side Navigation Bar Drop Down Menu*/

  jQuery(function ($) {

$(".sidebar-dropdown > a").click(function() {
$(".sidebar-submenu").slideUp(200);
if (
$(this)
  .parent()
  .hasClass("active")
) {
$(".sidebar-dropdown").removeClass("active");
$(this)
  .parent()
  .removeClass("active");
} else {
$(".sidebar-dropdown").removeClass("active");
$(this)
  .next(".sidebar-submenu")
  .slideDown(200);
$(this)
  .parent()
  .addClass("active");
}
});


/*=======================================================================================================================*/


/*Side Navigation Bar Open and Close*/

$("#close-sidebar").click(function() {
$(".page-wrapper").removeClass("toggled");
});
$("#show-sidebar").click(function() {
$(".page-wrapper").addClass("toggled");
});

});


/*===========================================================================================================================*/


/*Page Cursor JQuery*/

(function($) { "use strict";
	
    document.getElementsByTagName("body")[0].addEventListener("mousemove", function(n) {
        t.style.left = n.clientX + "px", 
		t.style.top = n.clientY + "px", 
		e.style.left = n.clientX + "px", 
		e.style.top = n.clientY + "px", 
		i.style.left = n.clientX + "px", 
		i.style.top = n.clientY + "px"
    });
    var t = document.getElementById("cursor"),
        e = document.getElementById("cursor2"),
        i = document.getElementById("cursor3");
    function n(t) {
        e.classList.add("hover"), i.classList.add("hover")
    }
    function s(t) {
        e.classList.remove("hover"), i.classList.remove("hover")
    }
    s();
    for (var r = document.querySelectorAll(".hover-target"), a = r.length - 1; a >= 0; a--) {
        o(r[a])
    }
    function o(t) {
        t.addEventListener("mouseover", n), t.addEventListener("mouseout", s)
    }



/*=========================================================================================================================*/
   
   
    /*Committees Section JQuery*/

	$(document).ready(function() {			
		
		$('.slide-buttons li:nth-child(1)').on('mouseenter', function() {
			$('.slide-buttons li.active').removeClass('active');
			$('.hero-center-section.show').removeClass("show");
			$('.hero-center-section:nth-child(1)').addClass("show");
			$('.slide-buttons li:nth-child(1)').addClass('active');
		})
		$('.slide-buttons li:nth-child(2)').on('mouseenter', function() {
			$('.slide-buttons li.active').removeClass('active');
			$('.hero-center-section.show').removeClass("show");
			$('.hero-center-section:nth-child(2)').addClass("show");
			$('.slide-buttons li:nth-child(2)').addClass('active');
		})
		$('.slide-buttons li:nth-child(3)').on('mouseenter', function() {
			$('.slide-buttons li.active').removeClass('active');
			$('.hero-center-section.show').removeClass("show");
			$('.hero-center-section:nth-child(3)').addClass("show");
			$('.slide-buttons li:nth-child(3)').addClass('active');
		})
		$('.slide-buttons li:nth-child(4)').on('mouseenter', function() {
			$('.slide-buttons li.active').removeClass('active');
			$('.hero-center-section.show').removeClass("show");
			$('.hero-center-section:nth-child(4)').addClass("show");
			$('.slide-buttons li:nth-child(4)').addClass('active');
		})
		$('.slide-buttons li:nth-child(5)').on('mouseenter', function() {
			$('.slide-buttons li.active').removeClass('active');
			$('.hero-center-section.show').removeClass("show");
			$('.hero-center-section:nth-child(5)').addClass("show");
			$('.slide-buttons li:nth-child(5)').addClass('active');
		})
		$('.slide-buttons li:nth-child(6)').on('mouseenter', function() {
			$('.slide-buttons li.active').removeClass('active');
			$('.hero-center-section.show').removeClass("show");
			$('.hero-center-section:nth-child(6)').addClass("show");
			$('.slide-buttons li:nth-child(6)').addClass('active');
		})
$('.slide-buttons li:nth-child(7)').on('mouseenter', function() {
			$('.slide-buttons li.active').removeClass('active');
			$('.hero-center-section.show').removeClass("show");
			$('.hero-center-section:nth-child(7)').addClass("show");
			$('.slide-buttons li:nth-child(7)').addClass('active');
		})
		$('.slide-buttons li:nth-child(1)').trigger('mouseenter')   
		
	});



/*============================================================================================================================*/


/*Gallery Magnific Pop-Up JQuery*/
	
$(document).ready(function() {
  $('.gallerys').magnificPopup({type:'image', delegate:'a', gallery:{enabled:true} });
});
  
})(jQuery); 


/*============================================================================================================================*/


/*Animation on Scroll Initiation*/
 AOS.init();

</script>
    
</body>
</html>