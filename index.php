    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop on line</title>
    <link rel="stylesheet" href="index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
</head>
<body>
    <center>
       <div class="mian">
<form action="insert.php" method="POST" enctype="multipart/form-data">

<h2>موقع تسوق اونلاين</h2>
<img src="shop2.png" alt="لوجو" width="150px"><br>
<input type="text" name="name">
<br>
<input type="text" name="price"><br>
<input type="file" name="image" id="file" style="display:none ;" ><br>
<label for="file">اختيار صورة للمنتج</label>
<button name="upload" type="submit">  ✅ رفع المنتج</button>
<br><br>
<a href="products.php">عرض كل المنتجات</a>

</form>

       </div>
       <p>🔰 Developer By Ahmed 🔰</p>
    </center>
    
</body>
</html>