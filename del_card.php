 <?php
 include('config.php');
 $ID=$_GET['id'];
 $del="delete from addcard where id=$ID";
 mysqli_query($con,$del);
 header("location: card.php");
 ?>