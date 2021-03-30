
<?php
session_start();
?>
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
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

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



              <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

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
                    </li>
                @endguest
            </ul>
			</ul>
      </div>
	 </nav>
    </div>
  </div>
</header>
<!--Header_section-->


<!-- social float icon
================================================== -->

<style>
    *
    {
        margin: 0px;
        padding: 0px;
    }

    html,body{
        height: 100%;
    }
    .icons{
        position: fixed;
        top: 30%;
        left: 0%;
        width: 202px;
        display: flex;
        flex-direction: column;

    }



    .icons a{
        text-decoration: none;
        text-transform: uppercase;
        padding: 3px;
        font-size: 18px;
        margin: 2px;
        text-align: right;
        border-radius: 0px 50px 50px 0px;
        transform: translate(-150px, 0px);
        transition: all 1s;
        color: #fff;
        font-weight: bold;

    }

    .icons a:hover{
        transform: translate(0px, 0px);
    }

    .icons a i{
        margin-left: 25px;
        background-color: #fff;
        height: 40px;
        width: 40px;
        color: black;
        text-align: center;
        line-height: 40px;
        border-radius: 50% ;
        transition: all 0.5s;

    }

    .icons a:hover i{
        transform: rotate(360deg);

    }



    .icons a i.fa-phone{
        color: #4dc247;

    }


    .phone {
        background-color: #4dc247;
        color: #fff;

    }

</style>

<div class="wrapper" style="position: relative;">
    <div class="icons" style="z-index: 1000">
        <a href="tel:9804307310" target="_blank" class="phone">9804307310 <i class="fa fa-phone" aria-hidden="true"></i></a>
    </div>
</div>
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

  <div class="row">
      <div class="service_block">
            <h6 class="section-title animated fadeInUp wow">Technicians Profile
            </h6>           

            <div class="table-responsive">
              <?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `technicians` WHERE CONCAT(`category`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `technicians`";
    $search_result = filterTable($query);
}
// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "users");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>
        <style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        
        <form  method="post">
          {{csrf_field()}}
           <?php

                                      $category = array("Cleaning","Housekeeping", "Automobile", "Landscaping","Electrical","Plumbing","Handyman and Carpenter");

                                      ?>

          <div class="form-group">
            
                                      <label class="col-form-label">{{ __('Category: ') }}</label>
                                      
                                      <select name="valueToSearch" class="btn btn-primary dropdown-toggle" class="form-group" required>
                                      <option value selected >Select Category *</option>
                                      <?php
                                              foreach($category as $key => $value):
                                              echo '<option value="'.$value.'">'.$value.'</option>'; //close your tags!!
                                              endforeach;
                                              ?>
                                      </select>
                                    </div>
                                  </div>
            
            <input type="submit" name="search" class="btn btn-primary" value="Search"><br><br>
            
            <table class="table table-bordered table-condensed table-striped" id="dataTable" width="100%" cellspacing="0">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Category</th>
                    <th>Location</th>
                    <th>Phone Number</th>
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['username'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['category'];?></td>
                    <td><?php echo $row['location'];?></td>
                    <td><?php echo $row['phone'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
        </form>

              <div class="modal fade" id="myModal" role="dialog">
                  <div class="modal-dialog">
                      <!-- Modal content-->
                      <div class="modal-content">
                          <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Send your query to technician </h4>
                          </div>
                          <?php
                          $connection = mysqli_connect("localhost","root","","users");
                          $hostname="localhost";
                          $username="root";
                          $dbname="users";
                          $password="";
                          $usertable="technicians";
                          $columnname="username";

                          mysqli_connect($hostname,$username,$password) OR die("Unable to connect to database!!!");
                          mysqli_select_db($connection,$dbname);
                          $query="SELECT * FROM $usertable";
                          $result=mysqli_query($connection,$query);
                          ?>

                          <div class="modal-body">
                              <div class="form-group">
                                  <form class="form" action="home" method="POST">
                                      {{csrf_field()}}
                                      <div class="form-group row">
                                        <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Select Technician') }}</label>                                        <div class="col-md-6">
                                      <select class="btn btn-primary dropdown-toggle" name="username" required>

                                          <option value selected>
                                              Select Technician
                                          </option>
                                          <?php
                                          if($result)
                                          {
                                              while ($row=mysqli_fetch_array($result))
                                              {
                                                  $tecname=$row["$columnname"];
                                                  echo "<option>$tecname<br></option>";
                                              }
                                          }

                                          ?>

                                      </select>
                                    </div>
                                  </div>
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
                                      <?php

                                      $location = array("Achham","Arghakhanchi","Baglung","Baitadi","Bajhang","Bajura","Banke","Bara","Bardiya","Bhaktapur","Bhojpur","Chitwan","Dadeldhura","Dailekh","Dang Deokhuri","Darchula","Dhading","Dhankuta","Dhanusa","Dolakha","Dolpa","Doti","Gorkha","Gulmi","Humla","Ilam","Jajarkot","Jhapa","Jumla","Kailali","Kalikot","Kanchanpur","Kapilvastu","Kaski","Kathmandu","Kavrepalanchok","Khotang","Lalitpur","Lamjung","Mahottari","Makwanpur","Manang","Morang","Mugu","Mustang","Myagdi","Nawalparasi","Nuwakot","Okhaldhunga","Palpa","Panchthar","Parbat","Parsa","Pyuthan","Ramechhap","Rasuwa","Rautahat","Rolpa","Rukum","Rupandehi","Salyan","Sankhuwasabha","Saptari","Sarlahi","Sindhuli","Sindhupalchok","Siraha","Solukhumbu","Sunsari","Surkhet","Syangja","Tanahu","Taplejung","Terhathum","Udayapur");

                                      ?>
                                      <div class="form-group row">
                                      <label for="location" class="col-md-4 col-form-label text-md-right">{{ __('Location') }}</label>
                                      <div class="col-md-6">
                                      <select name="location" class="btn btn-primary dropdown-toggle" class="form-group" required>
                                      <option value selected >Select your location where you want the service *</option>
                                      <?php
                                              foreach($location as $key => $value):
                                              echo '<option value="'.$value.'">'.$value.'</option>'; //close your tags!!
                                              endforeach;
                                              ?>
                                      </select>
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
                                      <input class="input-btn" type="submit" name="submit" value="send query">
                                  </form>
                                  <div class="modal-header">
                                      <button type="button"  class="btn btn-default" data-dismiss="modal">Close</button>
                                  </div>


                              </div>
                          </div>
                          <?php

                          $connection = mysqli_connect("localhost","root","","users");
                          if(isset($_POST['submit']))
                          {
                              $username=$_POST['username'];
                              $email =$_POST['email'];
                              $phone = $_POST['phone'];
                              $message = $_POST['message'];
                              $location = $_POST['location'];

                              $sql = "INSERT INTO `contactus`(`username`,`email`, `phone`, `message`,`location`) VALUES ('$username','$email','$phone','$message','$location')" ;

                              if(mysqli_query($connection,$sql))
                              {
                                 echo '<script type="text/javascript">

          window.onload = function () { alert("Your request has been Submitted and Please wait until the Technician contact you!!!"); }

</script>';


                              }

                                  //redirect('/home');
                          }


                          /*if(mysqli_query($connection,$sql))
                              echo"OK";*/


                          ?>
                      </div>
                  </div>
              </div>
          </div>
          <div class="section-title animated fadeInUp wow">
              <div class="wrapper" style="position: relative;">
                  <div class="icons" style="position: relative; z-index: 1000">
                      <div class="sidebar-brand-text mx-2 ">Send your queries to our <sup>Technicians</sup></div>
                      <button type="button" class="btn btn-success " name="Send" data-toggle="modal" data-target="#myModal" >Send Query  <i class="fa fa-users delay-03s" aria-hidden="true"></i></button>
                  </div>
              </div>
          </div>
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
          <form class="form" method="POST" action="home">
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
              <input class="input-btn" type="submit" name="sub" value="send query">
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
    </section>
  </div>
  <div class="container">
    <div class="footer_bottom"><span>Copyright © 2019,   Created by Yubin Pokhrel. </span> </div>
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
