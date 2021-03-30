<?php
            $connection = mysqli_connect("localhost","root","","users");
            if(isset($_POST['sub']))
            {
                $email =$_POST['email'];
                $phone = $_POST['phone'];
                $message = $_POST['message'];

                $sql = "INSERT INTO `contact`(`email`, `phone`, `message`) VALUES ('$email','$phone','$message')" ;


                if(mysqli_query($connection,$sql))

                {
                  echo '<script type="text/javascript">

          window.onload = function () { alert("Your Form Has been Submitted!!!"); }

</script>';
header("location:home.blade.php");
                }
            }
            ?>