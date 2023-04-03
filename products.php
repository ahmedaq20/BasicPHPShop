<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prodact</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">

<style>
h3{
    font-family: 'Cairo', sans-serif; 
    font-weight: bold;
    margin-top: 20px;

}
.card{
float:right;
margin-top: 20px;
margin-left: 10px;
margin-right: 10px;
}

.card img {
    width: 100%;
    height: 200px;
}

main {
    width: 70%;
}



</style>
</head>
<body>
<center>
  
<h3> لوحة التحكم</h3>

<?php
include('config.php');
$result = mysqli_query($con,"SELECT * from prodact");
while($row = mysqli_fetch_array($result)){
echo "
<center>
<main>
<div class='card' style='width: 18rem;'>
     <img src='$row[image]' class='card-img-top'>
         <div class='card-body'>
         <h5 class='card-title'>$row[name]</h5>
          <p class='card-text'>$row[price]</p>
      <a href='delete.php? id=$row[id] ' class='btn btn-danger'>حذف منتج</a>
      <a href='update.php? id=$row[id] ' class='btn btn-primary'>تعديل منتج</a>
        </div>
 </div>
  </main>

<center>
";
}

?>

           


</center>

<style>body{
  
}

p{

}



</style>

</body>
</html>