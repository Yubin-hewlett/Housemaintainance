<?php
$connection = mysqli_connect("localhost","root","","users");

if(!$connection)
    {
        die(' Please Check Your Connection'.mysqli_error($connection));
    }
?>
