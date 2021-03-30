<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');

?>

<div class="modal fade" id="addTechnicianprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Technicians Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="techniciancode.php" method="POST" >

                <div class="modal-body">

                    <div class="form-group">
                        <label> Name </label>
                        <input type="text" name="username" class="form-control" placeholder="Enter Username">
                    </div>
                    <div class="form-group">
                        <label>Category : </label>
                        <select name="category" id="" class="col-md-9 col-form-label">
                            <option value="0" selected disabled>select category</option>
                            <option value="Housekeeping" >House Keeping</option>
                            <option value="Cleaning" >cleaning</option>
                            <option value="Automobile" >Automobile</option>
                            <option value="Landscaping" >Landscaping</option>
                            <option value="Plumbing" >Plumbing</option>
                            <option value="Electrical" >Electrical</option>
                            <option value="Handyman and Carpenter">Handyman & Carpenter</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control checking_email" placeholder="Enter Email">
                        <email class="error_email" style="color: red;"></email>
                    </div>
                    <div class="form-group">
                        <label>location</label>
                        <input type="text" name="location" class="form-control" placeholder="Enter Address">
                    </div>                 
                                          
                    <div class="form-group">                    
                        <label>Phone Number</label>
                        <input type="tel" name="phone" class="form-control  @error('phone') is-invalid @enderror checking_phone" placeholder="Enter Phone Number" required="">
                        <phone class="error_phone" style="color: red;"></phone>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="Tregisterbtn" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>


<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Technician Profile
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addTechnicianprofile">
                    Add Technician Profile
                </button>
            </h6>
        </div>
        <div class="card-body">
            <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">

    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
  </div>
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
            <div class="table-responsive">
                <?php
                $connection = mysqli_connect("localhost","root","","users");


                $query ="SELECT * from technicians";
                $query_run = mysqli_query($connection,$query);
                ?>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>ID </th>
                        <th>Name </th>
                        <th>Category </th>
                        <th>Email </th>
                        <th>Location</th>
                        <th>Phone</th>
                        <th>EDIT </th>
                        <th>DELETE </th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    if(mysqli_num_rows($query_run)>0)
                    {
                        while($row =mysqli_fetch_assoc($query_run))
                        {
                            ?>

                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['username']; ?></td>
                                <td><?php echo $row['category']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['location']; ?></td>
                                <td><?php echo $row['phone']; ?></td>
                                <td>
                                    <form action="Tregister_edit.php" method="post">
                                        <input type="hidden" name="edit_id" value="<?php echo $row['id'];?>">
                                        <button  type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                                    </form>
                                </td>
                                <td>
                                    <form action="techniciancode.php" method="post">
                                        <input type="hidden" name="delete_id" value="<?php echo $row['id'];?>">
                                        <button type="submit" name="Tdelete_btn" class="btn btn-danger"> DELETE</button>
                                    </form>
                                </td>

                            </tr>
                            <?php
                        }
                    }
                    else
                    {
                        echo 'No Record Found';
                    }
                    ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>
