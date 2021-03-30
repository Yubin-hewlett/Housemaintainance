<?php
session_start();
$connection = mysqli_connect("localhost","root","","users");

if(isset($_POST['Tupdatebtn']))
{
    $id = $_POST['edit_id'];
    $username = $_POST['username_edit'];
    $category = $_POST['category_edit'];
    $email = $_POST['email_edit'];
    $location = $_POST['location_edit'];
    $phone = $_POST['phone_edit'];

    $query="UPDATE technicians SET username ='$username',category='$category', email='$email', location='$location', phone='$phone' WHERE id='$id'";
    $query_run =mysqli_query($connection,$query);

    if ($query_run)
    {
        $_SESSION['success'] = "Congratulations!!! Your Data is Updated";
        header('Location: Techregister.php');
    }
    else
    {
        $_SESSION['status'] = "Sorry!!! Your Data is Not Updated";
        header('Location: Techregister.php');
    }
}

if(isset($_POST['check_submit_btn'])) {
    $email = $_POST['email_id'];

    $email_query = "SELECT * FROM technicians WHERE email='$email'";
    $email_query_run = mysqli_query($connection, $email_query);
    if (mysqli_num_rows($email_query_run) > 0) {
       echo "Email is Already Exists. Please Try Another One";

    }
    else
    {
        echo "It is Available.";
    }
}

if(isset($_POST['check_submit'])) {
    $phone = $_POST['phone_id'];

    $phone_query = "SELECT * FROM technicians WHERE phone='$phone'";
    $phone_query_run = mysqli_query($connection, $phone_query);

    if(!preg_match('/^[0-9]*$/',$phone)){
                    
                    echo "Only Mobile Number";
                }
                if(strlen($phone)<10)
                {
                    echo "Please Enter 10 digit Phone Number";
                }
                if(strlen($phone)>10)
                {

                    echo "Your Number is too large Please enter 10 digit number";
                }

    
        if (mysqli_num_rows($phone_query_run) > 0) {
         echo "Phone is Already Exists. Please Try Another One";

    }
    else
    {

    }
}

if(isset($_POST['Tregisterbtn']))
{
    $username = $_POST['username'];
    $category = $_POST['category'];
    $email = $_POST['email'];
    $location = $_POST['location'];
    $phone = $_POST['phone'];         

    if($username==""||$category==""||$email==""||$location==""||$phone==""){
        $_SESSION['status'] = "Please Fill All The Fields Properly. Fields cannot be empty!!!";
        header('Location: Techregister.php');
    }
    else {

        $phone_query = "SELECT * FROM technicians WHERE phone='$phone'";
        $phone_query_run = mysqli_query($connection, $phone_query);
        if (mysqli_num_rows($phone_query_run) > 0) {
            $_SESSION['status'] = "Phone Number is Already Taken. Please Try Another One";
            header('Location: Techregister.php');
        } else {
        
            if (mysqli_num_rows($email_query_run) > 0) {
                $_SESSION['status'] = "Email is Already Taken. Please Try Another One";
                header('Location: Techregister.php');
            } else {        

                $query = "INSERT INTO technicians (username,category,email,location,phone) VALUES ('$username','$category','$email','$location','$phone')";
                $query_run = mysqli_query($connection, $query);


                if ($query_run) {

                    $_SESSION['success'] = "Technician is Added Successfully";
                    header('Location: Techregister.php');
                } else {

                    $_SESSION['status'] = "Technician is Not Added";
                    header('Location: Techregister.php');
                }
            
            }
        
        }
    }
}
if(isset($_POST['Tdelete_btn']))
{
    $id = $_POST['delete_id'];


    $query="DELETE FROM technicians WHERE id ='$id'";
    $query_run =mysqli_query($connection,$query);

    if ($query_run)
    {
        $_SESSION['success'] = "Congratulations!!! Data has been Deleted";
        header('Location: Techregister.php');
    }
    else
    {
        $_SESSION['status'] = "Sorry!!! Data is Not Deleted";
        header('Location: Techregister.php');
    }
}
?>