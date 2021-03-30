
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, maximum-scale=1">
<title>Housemaintenance web app</title>
<link rel="icon" href="{{url('/favicon.png')}}" type="image/png">
<link href="{{url('/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{url('/css/style.css')}}" rel="stylesheet" >
<link href="{{url('/css/font-awesome.css')}}" rel="stylesheet">
<link href="{{url('/css/animate.css')}}" rel="stylesheet">

</head>
<body>
<!--Header_section-->
<header id="header_wrapper">
  <div class="container">
    <div class="header_box">
      <div class="logo"><a href="#"><img src="{{url('/img/logo.png')}}" alt="logo"></a></div>
	  <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
	    <div id="main-nav" class="collapse navbar-collapse navStyle">
			<ul class="nav navbar-nav" id="mainNav">
			  <li class="active"><a href="#hero_section" class="scroll-link">Home</a></li>
			  <li><a href="#aboutUs" class="scroll-link">About Us</a></li>
              <li><a href="#service" class="scroll-link">Our Services</a></li>
              <li><a href="#portfolio" class="scroll-link">What We offer?</a></li>
              <li><a href="#contact" class="">Contact Us</a></li>
              <li><a href="{{ url('login') }}" class="scroll-link">Login</a></li>
              <li><a href="{{ url('register') }}" class="scroll-link">Register</a></li>
              <li><a href="https://www.facebook.com/YubinPokhrel1" class="scroll-link"> <span><i class="fa fa-facebook"></i></span> </a></li>
              <li><a href="" class="scroll-link"> <span><i class="fa fa-instagram"></i></span></a> </li>

			</ul>
      </div>
	 </nav>
    </div>
  </div>
</header>
<!--Header_section-->
<?php

if(isset($_SESSION['success']) && $_SESSION['success'] !='')
{
    echo'<h2 class="bg-info">'.$_SESSION['success'].'</h2>';
    unset($_SESSION['success']);
}
if(isset($_SESSION['status']) && $_SESSION['status'] !='')
{
    echo'<h2 class="bg-gradient-danger">'.$_SESSION['status'].'</h2>';
    unset($_SESSION['status']);
}
?>

<!--Hero_Section-->
<section id="hero_section" class="top_cont_outer">
  <div class="hero_wrapper">
    <div class="container">
      <div class="hero_section">
        <div class="row">
          <div class="col-lg-5 col-sm-7">
            <div class="top_left_cont zoomIn wow animated">
              <h2>We take <strong> pride </strong> in our work and ensure that the customer is <strong> happy</strong></h2>
              <p>What makes Maintenance House special ? </p>
              <a href="#service" class="read_more2">Read more</a> </div>
          </div>
          <div class="col-lg-5 col-sm-5">
			<img src="{{url('/img/plumber.png')}}" class="zoomIn wow animated" alt="" />
		  </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Hero_Section-->

<section id="aboutUs"><!--Aboutus-->
<div class="inner_wrapper">
  <div class="container">
    <h2>About Us</h2>
    <div class="inner_section">
	<div class="row">
      <div class=" col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right"><img src="{{url('/img/about-img.jpg')}}" class="img-circle delay-03s animated wow zoomIn" alt=""></div>
      	<div class=" col-lg-7 col-md-7 col-sm-7 col-xs-12 pull-left">
        	<div class=" delay-01s animated fadeInDown wow animated">
			<h3></h3><br/>
            <p></p> <br/>
<p></p>
</div>
<div class="work_bottom"> <span>Want to know more..</span> <a href="#contact" class="contact_btn">Contact Us</a> </div>
	   </div>

      </div>


    </div>
  </div>
  </div>
</section>
<!--Aboutus-->


<!--Service-->
<section  id="service">
  <div class="container">
    <h2>Services</h2>
    <div class="service_wrapper">
      <div class="row">
        <div class="col-lg-4">
          <div class="service_block">
            <div class="service_icon delay-03s animated wow  zoomIn"> <span><i class="fa fa-compress"></i></span> </div>
            <h3 class="animated fadeInUp wow">Landscaping</h3>
            <p class="animated fadeInDown wow">Landscaping consultancy<br>
              Landscaping maintenance works<br>
              Plant rotations<br>
              General horticulture services<br>
              Basic Consultation</p>
          </div>
        </div>
        <div class="col-lg-4 borderLeft">
          <div class="service_block">
            <div class="service_icon icon2  delay-03s animated wow zoomIn"> <span><i class="fa fa-wrench"></i></span> </div>
            <h3 class="animated fadeInUp wow">Plumbing</h3>
            <p class="animated fadeInDown wow">Installation and replacement of sanitary fixtures<br>
              Repairs of burst and leaking pipes<br>
              Blocked drains<br>
              Shower/ pumps<br>
              General repairs and maintenance works</p>
          </div>
        </div>
        <div class="col-lg-4 borderLeft">
          <div class="service_block">
            <div class="service_icon icon3  delay-03s animated wow zoomIn"> <span><i class="fa fa-plug"></i></span> </div>
            <h3 class="animated fadeInUp wow">Repairs, Retrofits and Renovations</h3>
            <p class="animated fadeInDown wow">Rewiring or Plumbing retrofit<br>
               kitchen appliance replacement<br> & more...
              </p>
          </div>
        </div>
      </div>
      <div class="row borderTop">
        <div class="col-lg-4 mrgTop">
          <div class="service_block">
            <div class="service_icon icon4  delay-03s animated wow zoomIn"> <span><i class="fa fa-flash"></i></span> </div>
            <h3 class="animated fadeInUp wow">Electrical</h3>
            <p class="animated fadeInDown wow">Rewiring<br>
              New installations<br>
              Additional power and lighting points<br>
              Telephone points<br>
              Inspection and General repair works etc.</p>
          </div>
        </div>

	      <div class="col-lg-4 borderLeft mrgTop">
          <div class="service_block">
            <div class="service_icon delay-03s animated wow  zoomIn"> <span><i class="fa fa-home"></i></span> </div>
            <h3 class="animated fadeInUp wow">Housekeeping</h3>
            <p class="animated fadeInDown wow">Residential cleaning<br>
              Office cleaning<br>
              Retail- shopping mall cleaning<br>
              Industrial | Construction site clean ups<br>
              Move in and move out cleaning jobs</p>
          </div>
        </div>
        <div class="col-lg-4 borderLeft mrgTop">
          <div class="service_block">
            <div class="service_icon icon2  delay-03s animated wow zoomIn"> <span><i class="fa fa-automobile"></i></span> </div>
            <h3 class="animated fadeInUp wow" >Automobile</h3>
            <p class="animated fadeInDown wow">Car Cleaning / Dry Cleaning<br>
              Washing<br>
              Shine Polishing<br>
              Daily Washing Contract</p>
          </div>
        </div>
      </div>
      <div class="row borderTop">
        <div class="col-lg-4 mrgTop">
          <div class="service_block">
            <div class="service_icon icon3  delay-03s animated wow zoomIn"> <span><i class="fa fa-legal" href="#" data-filter="*"></i></span> </div>
            <h3 class="animated fadeInUp wow">Handyman and Carpenter</h3>
            <p class="animated fadeInDown wow">Civil Repairs<br>
              Flooring or false floors<br>
              Ceilings or false ceilings<br>
              Furniture Repair<br>
              Make Overs</p>
          </div>
        </div>
        <div class="col-lg-4 borderLeft mrgTop">
          <div class="service_block">
            <div class="service_icon icon3  delay-03s animated wow zoomIn"> <span><i class="fa fa-plus-square" href="#" data-filter="*"></i></span> </div>
            <h3 class="animated fadeInUp wow">Additional</h3>
            <p class="animated fadeInDown wow">Sump and tank cleaning<br>
              AC installations and maintenance<br>
              Specialized cleaning, shampooing and Polishing<br>
              Pressure washing for walls, buildings<br>
              Generator maintenance</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Service-->




<!-- portfolio -->
<section id="portfolio" class="content">

  <!-- Container -->
  <div class="container portfolio_title">

    <!-- Title -->
    <div class="section-title">
      <h2>What We Offer?</h2>
    </div>
    <!--/Title -->

  </div>
  <!-- Container -->

  <div class="portfolio-top"></div>

  <!-- portfolio Filters -->
  <div class="portfolio">

    <div id="filters" class="sixteen columns">
      <ul class="clearfix">
        <li><a id="all" href="#" data-filter="*" class="active">
          <h5>All</h5>
          </a></li>
        <li><a class="" href="#" data-filter=".landscape">
          <h5>Landscape</h5>
          </a></li>
        <li><a class="" href="#" data-filter=".plumbing">
          <h5>Plumbing</h5>
          </a></li>
        <li><a class="" href="#" data-filter=".electrical">
          <h5>Electrical</h5>
          </a></li>
        <li><a class="" href="#" data-filter=".housekeeping">
          <h5>Housekeeping</h5>
          </a></li>
        <li><a class="" href="#" data-filter=".automobile">
          <h5>Automobile</h5>
          </a></li>
        <li><a class="" href="#" data-filter=".additional">
          <h5>Additional</h5>
          </a></li>

      </ul>
    </div>
    <!--/portfolio Filters -->

    <!-- portfolio Wrapper -->
    <div class="isotope fadeInLeft animated wow" style="position: relative; overflow: hidden; height: 480px;" id="portfolio_wrapper">

      <!-- portfolio Item -->
      <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four  landscape isotope-item">
        <div class="portfolio_img"> <img src="{{url('/img/offer_pic1.jpg')}}"  alt="portfolio 1"> </div>
        <div class="item_overlay">
          <div class="item_info">
            <h4 class="project_name">Landscape</h4>
          </div>
        </div>
        </div>
      <!--/portfolio Item -->

      <!-- portfolio Item-->
      <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(337px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four  plumbing isotope-item">
        <div class="portfolio_img"> <img src="{{url('/img/offer_pic2.jpg')}}" alt="portfolio 1"> </div>
        <div class="item_overlay">
          <div class="item_info">
            <h4 class="project_name">Plumbing</h4>
          </div>
        </div>
      </div>
      <!--/portfolio Item -->

      <!-- portfolio Item -->
      <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(674px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four  electrical  isotope-item">
        <div class="portfolio_img"> <img src="{{url('/img/offer_pic3.jpg')}}" alt="portfolio 1"> </div>
        <div class="item_overlay">
          <div class="item_info">
            <h4 class="project_name">Electrical</h4>
          </div>
        </div>
      </div>
      <!--/portfolio Item-->

      <!-- portfolio Item-->
      <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(1011px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four  android  housekeeping web isotope-item">
        <div class="portfolio_img"> <img src="{{url('/img/offer_pic4.jpg')}}" alt="portfolio 1"> </div>
        <div class="item_overlay">
          <div class="item_info">
            <h4 class="project_name">Housekeeping</h4>
          </div>
        </div>
      </div>
      <!-- portfolio Item -->

      <!-- portfolio Item -->
      <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 240px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four  automobile isotope-item">
        <div class="portfolio_img"> <img src="{{url('/img/offer_pic5.jpg')}}" alt="portfolio 1"> </div>
        <div class="item_overlay">
          <div class="item_info">
            <h4 class="project_name">Automobile</h4>
          </div>
        </div>
      </div>
      <!--/portfolio Item -->
      <!-- portfolio Item -->
      <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(1011px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four  android  housekeeping web isotope-item">
        <div class="portfolio_img"> <img src="{{url('/img/offer_pic6.jpg')}}" alt="portfolio 1"> </div>
        <div class="item_overlay">
          <div class="item_info">
            <h4 class="project_name">Housekeeping</h4>
          </div>
        </div>
      </div>
      <!--/portfolio Item -->

      <!-- portfolio Item  -->
      <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(674px, 240px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four  additional web isotope-item">
        <div class="portfolio_img"> <img src="{{url('/img/offer_pic7.jpg')}}" alt="portfolio 1"> </div>
        <div class="item_overlay">
          <div class="item_info">
            <h4 class="project_name">Additional</h4>
          </div>
        </div>
       </div>
      <!--/portfolio Item -->
  </div>
  <!--/portfolio Filters -->

  <div class="portfolio_btm"></div>


  <div id="project_container">
    <div class="clear"></div>
    <div id="project_data"></div>
  </div>
  </div>
</section>

<footer class="footer_wrapper" id="contact">
  <div class="container">
    <section class="page_section contact" id="contact">
      <div class="contact_section">
        <h2>Contact Us</h2>
        <div class="row">
          <div class="col-lg-4">

          </div>
          <div class="col-lg-4">

          </div>
          <div class="col-lg-4">

          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 wow fadeInLeft">
		 <div class="contact_info">
                            <div class="detail">
                                <h4>House Maintenance Web App</h4>
                                <p>Sundarharaicha, Morang, Nepal</p>
                            </div>
                            <div class="detail">
                                <h4>contact number</h4>
                                <p>+9779804307310</p>
                            </div>
                            <div class="detail">
                                <h4>Email address</h4>
                                <p>Yubinpokhrel80@gmail.com</p>
                            </div>
                        </div>



          <ul class="social_links">

            <li class="facebook animated bounceIn wow delay-03s"><a href="https://www.facebook.com/YubinPokhrel1"><i class="fa fa-facebook"></i></a></li>
            <li class="instagram animated bounceIn wow delay-04s"><a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
          </ul>
        </div>


        <div class="col-lg-7 wow fadeInLeft delay-6s">

          <form class="form form-prevent-multiple-submits" method="POST">
              {{csrf_field()}}
              <div class="form-group row">
                                          <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                          <div class="col-md-6">
                                              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                              @error('email')
                                                  <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $message }}</strong>
                                                  </span>
                                              @enderror
                                          </div>
                                      </div>
              <div class="form-group row">
                                          <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>
                                          <div class="col-md-6">
                                          <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" required >
                                          @error('phone')
                                          <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                          </span>
                                          @enderror
                                          </div>
                                          </div>
              <div class="form-group row">
                                        <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Your Query Here') }}</label>

                                          <div class="col-md-6">
                                          <textarea id="message" class="input-text text-area" name="message" class="form-control @error('message') is-invalid @enderror" name="message" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;" required ></textarea>
                                          @error('message')
                                          <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                          </span>
                                          @enderror
                                          </div>
                                          </div>
              <input class="input-btn button-prevent-multiple-submits" type="submit" name="sub" value="send query">
          </form>
            <?php
            $connection = mysqli_connect("localhost","root","","users");

            if(isset($_POST['sub']))
            {
                $email =$_POST['email'];
                $phone = $_POST['phone'];
                $message = $_POST['message'];

                $sql = "INSERT INTO `contact`(`email`, `phone`, `message`) VALUES ('$email','$phone','$message')" ;


                if(mysqli_query($connection,$sql))

                {
                  echo '<script type="text/javascript">

          window.onload = function () { alert("Your Form Has been Submitted!!!"); }

</script>';
              }
            }
            ?>
        </div>
      </div>
        </div>
    </section>
  </div>

  <div class="container">
    <div class="footer_bottom"><span>Copyright © 2020,  <a> Created by Yubin Pokhrel</a>. </span> </div>
  </div>
</footer>

<script type="text/javascript" src="{{url('/js/jquery-1.11.0.min.js')}}"></script>
<script type="text/javascript" src="{{url('/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{url('/js/jquery-scrolltofixed.js')}}"></script>
<script type="text/javascript" src="{{url('/js/jquery.nav.js')}}"></script>
<script type="text/javascript" src="{{url('/js/jquery.easing.1.3.js')}}"></script>
<script type="text/javascript" src="{{url('/js/jquery.isotope.js')}}"></script>
<script type="text/javascript" src="{{url('/js/wow.js')}}"></script>
<script type="text/javascript" src="{{url('/js/custom.js')}}"></script>

</body>
</html>
