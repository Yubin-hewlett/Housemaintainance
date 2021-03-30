<?php
session_start();
$connection = mysqli_connect("localhost","root","","users");


if(isset($_POST['updatebtn']))
{
    $id = $_POST['edit_id'];
    $username = $_POST['edit_username'];
    $email = $_POST['edit_email'];
    $password = $_POST['edit_password'];

    $query="UPDATE register SET username ='$username', email='$email', password='$password' WHERE id='$id'";
    $query_run =mysqli_query($connection,$query);

    if ($query_run)
    {
        $_SESSION['success'] = "Congratulations!!! Your Data is Updated";
        header('Location: register.php');
    }
    else
    {
        $_SESSION['status'] = "Sorry!!! Your Data is Not Updated";
        header('Location: register.php');
    }
}
?>
<?php 

if (isset($_POST['login_btn'])) {
        $email_login = $_POST['email'];
        $password_login = $_POST['password'];

        $query = "SELECT * FROM register WHERE email='$email_login' AND password='$password_login'";
        $query_run = mysqli_query($connection, $query);

        if (mysqli_fetch_array($query_run)) {
            $_SESSION['name'] = $email_login;
            header('Location: index.php');
        } else {
            $_SESSION['status'] = 'Email id / Password is Invalid';
            header('Location: login.php');
        }
    }


?>
