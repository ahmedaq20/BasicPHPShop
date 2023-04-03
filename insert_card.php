<?php
include('config.php');
if(isset($_POST['add'])){
$name = $_POST['name'];
$price = $_POST['price'];
$insert="INSERT into addcard (name, price) values ('$name','$price')";
mysqli_query($con,$insert);
header("location: card.php");



}

?>