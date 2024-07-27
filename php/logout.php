<?php
include('config.php');
session_destroy();
header("Location:../Html/index.php");
exit;
?>