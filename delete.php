<?php
include('config.php');
$ID =$_GET['id'];
mysqli_query($con,"DELETE from prodact where id=$ID");
header("location: products.php");
?>