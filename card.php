<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>عربتي</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
</head>

<style>
h3{
    font-family: 'Cairo','sans-serif';
    font-weight: bold;
    margin-top: 20px;

}
main{
    width: 60%;
    margin-top: 30px;
}
table{
    box-shadow:1px 1px 10px silver ;
}
thead{
    background-color:cadetblue;
    color: black;
    text-align: center;
}
tbody{
    text-align: center;
}



</style>
<body>
    <center>
    <h3>المنتجات المحجوزة</h3>
    </center>
<?php
include('config.php');
$result= mysqli_query($con,"select * from addcard");
while($row=mysqli_fetch_array(($result))){
echo "
<center>
<main>
<table class='table'>
<thead>
    <tr>
        <th scope='col'>Product name</th>
        <th scope='col'>Product price</th>
        <th scope='col'>Delete Product</th>
    </tr>
</thead>
<tbody>
<tr>
<td>$row[name]</td>
<td>$row[price]</td>
<td><a href='del_card.php? id=$row[id]' class='btn btn-danger'>ازالة</a></td>

</tr>

</tbody>
</table>

</main>

</center>
";
}

?>
<center>
    <a href="shop.php">الرجوع الى صفحة المنتجات</a>
</center>

</body>
</html>