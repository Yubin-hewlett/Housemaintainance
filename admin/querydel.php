<?php
session_start();
$connection = mysqli_connect("localhost","root","","users");
if(isset($_POST['qdelete_btn']))
{
    $id = $_POST['qdelete_id'];

    $query="DELETE FROM contactus WHERE id ='$id'";
    $query_run =mysqli_query($connection,$query);

    if ($query_run)
    {
        $_SESSION['success'] = "Congratulations!!! Data has been Deleted";
        header('Location: query.php');
    }
    else
    {
        $_SESSION['status'] = "Sorry!!! Data is Not Deleted";
        header('Location: query.php');
    }
}
?>
