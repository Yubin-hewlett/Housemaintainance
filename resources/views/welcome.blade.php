<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1">
    <title>Welcome</title>
    <link rel="icon" href="{{url('/favicon.png')}}" type="image/png">
    <link href="{{url('/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('/css/home.css')}}" rel="stylesheet" >
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
                        <li><a href="#portfolio" class="scroll-link">Find Technicians</a></li>
                        <li><a href="#contact" class="scroll-link">Contact Us</a></li>
                        <li><a href="" class="scroll-link"> <span><i class="fa fa-bell-o"></i></span></a></li>
                        <li><a href="https://www.facebook.com/YubinPokhrel1" class="scroll-link"> <span><i class="fa fa-facebook"></i></span> </a></li>
                        <li><a href="" class="scroll-link"> <span><i class="fa fa-instagram"></i></span></a> </li>
                    </ul>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
<!--Header_section-->

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
            <h2>Our Technicians</h2>
        </div>
        <!--/Title -->

    </div>
    <br>
    <!-- Container -->
                <table class="table table-dark">
                    <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">category</th>
                        <th scope="col">Address</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Email</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                    @foreach($technicians as $row)
                        <td>{{$row['name']}}</td>
                        <td>{{$row['category']}}</td>
                        <td>{{$row['location']}}</td>
                        <td>{{$row['phone']}}</td>
                        <td>{{$row['email']}}</td>
                    @endforeach
                    </tbody>
                </table>


    <!--/portfolio Filters -->

    <div class="portfolio_btm"></div>


    <div id="project_container">
        <div class="clear"></div>
        <div id="project_data"></div>
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
                    <div class="form">
                        <input class="input-text" type="text" name="" value="Your Name *" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">
                        <input class="input-text" type="text" name="" value="Your E-mail *" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">
                        <textarea class="input-text text-area" cols="0" rows="0" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">Your Message *</textarea>
                        <input class="input-btn" type="submit" value="send message">
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="container">
        <div class="footer_bottom"><span>Copyright © 2019,   Created by Yubin Pokhrel</a>. </span> </div>
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
