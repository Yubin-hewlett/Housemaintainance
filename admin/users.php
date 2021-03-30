<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');

?>


<div class="modal fade" id="addusersprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Users Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="userscode.php" method="POST">

                <div class="modal-body">

                    <div class="form-group">
                        <label> Name </label>
                        <input type="text" name="username" class="form-control" placeholder="Enter Username">
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter Email">
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="text" name="location" class="form-control" placeholder="Enter Address">
                    </div>
                    <div class="form-group">
                        <label>Phone Number</label>
                        <input type="phone" name="phone" class="form-control" placeholder="Enter Phone Number">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="Uregisterbtn" class="btn btn-primary">Save</button>
                </div>
            </form>

        </div>
    </div>
</div>


<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Users Profile
            </h6>
        </div>

        <div class="card-body">
            <!-- Page Heading -->
  <!--<div class="d-sm-flex align-items-center justify-content-between mb-4">

    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
  </div>-->
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


                $query ="SELECT * from users";
                $query_run = mysqli_query($connection,$query);
                ?>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>ID </th>
                        <th>Name </th>
                        <th>Email </th>
                        <th>Password </th>
                        <th>Location</th>
                        <th>Phone</th>
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
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['password']; ?></td>
                                <td><?php echo $row['location']; ?></td>
                                <td><?php echo $row['phone']; ?></td>

                                <td>
                                    <form action="userscode.php" method="post">
                                        <input type="hidden" name="delete_id" value="<?php echo $row['id'];?>">
                                        <button type="submit" name="Udelete_btn" class="btn btn-danger"> DELETE</button>
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
