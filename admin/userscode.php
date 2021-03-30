<?php
session_start();
$connection = mysqli_connect("localhost","root","","users");

if(isset($_POST['Uregisterbtn']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $location = $_POST['location'];
    $phone = $_POST['phone'];

    $query = "INSERT INTO users (username,location,email,password,phone) VALUES ('$username','$location','$email','$password','$phone')";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {

        $_SESSION['success'] =  "Technician is Added Successfully";
        header('Location: users.php');
    }
    else
    {

        $_SESSION['status'] =  "Technician is Not Added";
        header('Location: users.php');
    }


}

if(isset($_POST['Uupdatebtn']))
{
    $id = $_POST['edit_id'];
    $username = $_POST['username'];
    $location = $_POST['location'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];

    $query="UPDATE users SET username ='$username', location='$location' email='$email', password='$password' phone='$phone' WHERE id='$id'";
    $query_run =mysqli_query($connection,$query);

    if ($query_run)
    {
        $_SESSION['success'] = "Congratulations!!! Your Data is Updated";
        header('Location: users.php');
    }
    else
    {
        $_SESSION['status'] = "Sorry!!! Your Data is Not Updated";
        header('Location: users.php');
    }
}
if(isset($_POST['Udelete_btn']))
{
    $id = $_POST['delete_id'];


    $query="DELETE FROM users WHERE id ='$id'";
    $query_run =mysqli_query($connection,$query);

    if ($query_run)
    {
        $_SESSION['success'] = "Congratulations!!! Data has been Deleted";
        header('Location: users.php');
    }
    else
    {
        $_SESSION['status'] = "Sorry!!! Data is Not Deleted";
        header('Location: users.php');
    }
}




?>
