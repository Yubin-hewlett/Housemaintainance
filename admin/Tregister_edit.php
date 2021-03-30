<?php
session_start();
include('includes/header.php');
include('includes/navbar.php');
?>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">EDIT Technicians Profile
        </h6>
    </div>
    <div class="card-body">
        <?php
        $connection = mysqli_connect('localhost','root','','users');
        if(isset($_POST['edit_btn']))
        {
        $id = $_POST['edit_id'];

        $query = "SELECT * FROM technicians WHERE id='$id'";
        $query_run = mysqli_query($connection,$query);

        foreach ($query_run as $row)
        {
        ?>
        <form action="techniciancode.php" method ="POST">
            <input type="hidden" name="edit_id" value="<?php echo $row['id']?>">
            <div class="form-group">
                <label> Username </label>
                <input type="text" name="username_edit" value="<?php echo $row['username']?>" class="form-control" placeholder="Enter Username">
            </div>
            <div class="form-group">
                <label>Category : </label>
                <select name="category_edit" id="" class="col-md-9 col-form-label">
                    <option value="<?php echo $row['category']?>" ><?php echo $row['category']?></option>
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
                <input type="email" name="email_edit" value="<?php echo $row['email']?>" class="form-control" placeholder="Enter Email">
            </div>
            <div class="form-group">
                <label>location</label>
                <input type="text" name="location_edit" value="<?php echo $row['location']?>" class="form-control" placeholder="Enter Address">
            </div>
            <div class="form-group">
                <label>Phone Number</label>
                <input type="phone" name="phone_edit" class="form-control" value="<?php echo $row['phone']?>" placeholder="Enter Phone Number">
            </div>
                <a href="Techregister.php" class="btn btn-danger">Cancel</a>
                <button type="submit" name="Tupdatebtn" class="btn btn-primary"> Update </button>
            </div>
            <?php
            }
            }
            ?>
    </div>

    <?php
    include('includes/scripts.php');
    include('includes/footer.php');
    ?>
