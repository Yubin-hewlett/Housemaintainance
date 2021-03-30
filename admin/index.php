<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
?>

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
  </div>

  <!-- Content Row -->
  <div class="row">

    <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-primary shadow h-100 py-2">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Registered Users</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800">
                              <?php
                              $connection = mysqli_connect("localhost","root","","users");
                              $query = "SELECT * from users ORDER BY id";
                              $query_run = mysqli_query($connection,$query);

                              $row = mysqli_num_rows($query_run);

                              echo '<h5> Total Users: '.$row.'</h5>';
                              ?>

                          </div>
                      </div>
                      <div class="col-auto">
                          <i class="fas fa-calendar fa-2x text-gray-300"></i>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-primary shadow h-100 py-2">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Registered Technicians</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800">
                              <?php
                              $connection = mysqli_connect("localhost","root","","users");
                              $query = "SELECT * from technicians ORDER BY id";
                              $query_run = mysqli_query($connection,$query);

                              $row = mysqli_num_rows($query_run);

                              echo '<h5> Total Technicians: '.$row.'</h5>';
                              ?>

                          </div>
                      </div>
                      <div class="col-auto">
                          <i class="fas fa-calendar fa-2x text-gray-300"></i>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-primary shadow h-100 py-2">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Registered Cleaner</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800">
                              <?php
                              $connection = mysqli_connect("localhost","root","","users");
                              $query = "SELECT  *  FROM technicians WHERE category = 'Cleaning' ";
                              $query_run = mysqli_query($connection,$query);

                              $row = mysqli_num_rows($query_run);

                              echo '<h5> '.$row.'</h5>';
                              ?>

                          </div>
                      </div>
                      <div class="col-auto">
                          <i class="fas fa-calendar fa-2x text-gray-300"></i>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-primary shadow h-100 py-2">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Registered Housekeeper</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800">
                              <?php
                              $connection = mysqli_connect("localhost","root","","users");
                              $query = "SELECT  *  FROM technicians WHERE category = 'Housekeeping' ";
                              $query_run = mysqli_query($connection,$query);

                              $row = mysqli_num_rows($query_run);

                              echo '<h5> '.$row.'</h5>';
                              ?>

                          </div>
                      </div>
                      <div class="col-auto">
                          <i class="fas fa-calendar fa-2x text-gray-300"></i>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-primary shadow h-100 py-2">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Registered Housekeeper</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800">
                              <?php
                              $connection = mysqli_connect("localhost","root","","users");
                              $query = "SELECT  *  FROM technicians WHERE category = 'Landscaping' ";
                              $query_run=mysqli_query($connection,$query);

                              $row = mysqli_num_rows($query_run);

                              echo '<h5> '.$row.'</h5>';
                              ?>

                          </div>
                      </div>
                      <div class="col-auto">
                          <i class="fas fa-calendar fa-2x text-gray-300"></i>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-primary shadow h-100 py-2">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Registered Plumber</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800">
                              <?php
                              $connection = mysqli_connect("localhost","root","","users");
                              $query = "SELECT  *  FROM technicians WHERE category = 'Plumbing' ";
                              $query_run = mysqli_query($connection,$query);

                              $row = mysqli_num_rows($query_run);

                              echo '<h5> '.$row.'</h5>';
                              ?>

                          </div>
                      </div>
                      <div class="col-auto">
                          <i class="fas fa-calendar fa-2x text-gray-300"></i>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-primary shadow h-100 py-2">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Registered Automobile Technicians</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800">
                              <?php
                              $connection = mysqli_connect("localhost","root","","users");
                              $query = "SELECT  *  FROM technicians WHERE category = 'Automobile' ";
                              $query_run = mysqli_query($connection,$query);

                              $row = mysqli_num_rows($query_run);

                              echo '<h5> '.$row.'</h5>';
                              ?>

                          </div>
                      </div>
                      <div class="col-auto">
                          <i class="fas fa-calendar fa-2x text-gray-300"></i>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-primary shadow h-100 py-2">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Registered Electricians</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800">
                              <?php
                              $connection = mysqli_connect("localhost","root","","users");
                              $query = "SELECT  *  FROM technicians WHERE category = 'Electrical' ";
                              $query_run = mysqli_query($connection,$query);

                              $row = mysqli_num_rows($query_run);

                              echo '<h5> '.$row.'</h5>';
                              ?>

                          </div>
                      </div>
                      <div class="col-auto">
                          <i class="fas fa-calendar fa-2x text-gray-300"></i>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-primary shadow h-100 py-2">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Registered Handyman & Carpenter</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800">
                              <?php
                              $connection = mysqli_connect("localhost","root","","users");
                              $query = "SELECT  *  FROM technicians WHERE category = 'Handyman and Carpenter' ";
                              $query_run = mysqli_query($connection,$query);

                              $row = mysqli_num_rows($query_run);

                              echo '<h5> '.$row.'</h5>';
                              ?>

                          </div>
                      </div>
                      <div class="col-auto">
                          <i class="fas fa-calendar fa-2x text-gray-300"></i>
                      </div>
                  </div>
              </div>
          </div>
      </div>  
  </div>

  <?php
include('includes/scripts.php');
include('includes/footer.php');
?>
