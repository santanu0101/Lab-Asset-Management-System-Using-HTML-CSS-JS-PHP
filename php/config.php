<?php

session_start();
$servername = "localhost";
$username = "root";
$password = "";
$database = "minor-project";

// add by kalyan
date_default_timezone_set("Asia/Kolkata");

$conn = mysqli_connect($servername, $username, $password,$database);

if (!$conn) {
   echo "Connection failed.... ";
}
else{
  // echo "Connected";

}
?>