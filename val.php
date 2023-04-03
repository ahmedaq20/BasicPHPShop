<?php
include('config.php');
$ID =$_GET['id'];
$up =mysqli_query($con,"select * from prodact where id=$ID");
$data = mysqli_fetch_array($up);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تأكيد شراء االمنتج</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
</head>
<style>
input{
    display: none;

}
.main{
    width: 30%;
    padding: 20px;
    box-shadow: 1px 1px 10px silver;
    margin-top: 50px;

}

#product{
    text-decoration:none;
    font-size:small;
}

</style>
<body>
<center>
    <div class="main">
<form action="insert_card.php" method="post">
<h2>هل فعلا تريد شراء المنتج</h2>
<input type="text" name="id" value='<?php echo $data['id']?>'>
<input type="text" name="name" value='<?php echo $data['name']?>'>
<input type="text" name="price" value='<?php echo $data['price']?>'>
<button type="submit" name="add" class="btn btn-warning">تأكيد الشراء</button>
<br>
<a id ='product' href="shop.php">الرجوع لصفحة المنتجات</a>


</form>
</div>
</center>


</body>
</html>