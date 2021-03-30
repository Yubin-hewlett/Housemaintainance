<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/chart-area-demo.js"></script>
<script src="js/demo/chart-pie-demo.js"></script>


<?php


$connection = mysqli_connect("localhost","root","","users");

if(isset($_POST['Tregisterbtn']))
{
    $username = $_POST['name'];
    $category = $_POST['category'];
    $email = $_POST['email'];
    $location = $_POST['location'];
    $phone = $_POST['phone'];

    $query = "INSERT INTO technicians (username,category,email,location,phone) VALUES ('$username','$category','$email','$location','$phone')";
    $query_run = mysqli_query($connection, $query);

        if($query_run)
        {

            $_SESSION['success'] =  "Technician is Added Successfully";
            header('Location: Techregister.php');
        }
        else
        {

            $_SESSION['status'] =  "Technician is Not Added";
            header('Location: Techregister.php');
        }
}

?>
