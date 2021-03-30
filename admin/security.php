<?php
session_start();

$connection = mysqli_connect("localhost","root","","users");


    

    if(isset($_SESSION['User']))
    {

        
       
    }
    else
    {
        header("location:login.php");
    }


?>
