<?php
session_start();
$connection = mysqli_connect("localhost","root","","users");
if(isset($_POST['cdelete_btn']))
{
    $id = $_POST['cdelete_id'];

    $query="DELETE FROM contact WHERE id ='$id'";
    $query_run =mysqli_query($connection,$query);

    if ($query_run)
    {
        $_SESSION['success'] = "Congratulations!!! Data has been Deleted";
        header('Location: contact.php');
    }
    else
    {
        $_SESSION['status'] = "Sorry!!! Data is Not Deleted";
        header('Location: contact.php');
    }
}
?>
