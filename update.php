<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
</head>
<body>
    <?php
    include('config.php');
    $ID=$_GET['id'];
    $up=mysqli_query($con,"SELECT * from prodact where id=$ID");
    $data=mysqli_fetch_array($up);

    
    ?>
    <center>
       <div class="mian">
<form action="up.php" method="POST" enctype="multipart/form-data">

<h2>تعديل المنتجات</h2>
<img src="update.png" alt="لوجو" width="150px"><br>
<input type="text" name="id" value="<?php echo $data['id']?>">
<br>

<input type="text" name="name" value="<?php echo $data['name']?>">
<br>
<input type="text" name="price" value="<?php echo $data['price']?>"><br>
<input type="file" name="image" id="file" style="display:none ;" ><br>
<label for="file">اختيار صورة للمنتج</label>
<button name="update" type="submit"> تعديل المنتج</button>
<br><br>
<a href="products.php">عرض كل المنتجات</a>

</form>

       </div>
       <p>🔰 Developer By Ahmed 🔰</p>
    </center>

    <?php
    

    ?>
    
</body>
</html>