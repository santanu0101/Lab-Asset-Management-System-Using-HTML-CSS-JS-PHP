<?php
include 'config.php';
$email = "sudippatra3711@gmail.com";



$qur = "SELECT * FROM `login` WHERE email ='$email'";
$qur_ran = mysqli_query($conn, $qur) or die(mysqli_error($conn));

$no = mysqli_num_rows($qur_ran);

$row = mysqli_fetch_array($qur_ran);

        $id=$row['id'];
        $p_name=$row['name'];
        $_SESSION['name']=$p_name;
        $_SESSION['id']=$id;

        echo $_SESSION['id'];
        
   

?>



