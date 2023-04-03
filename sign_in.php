<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>حساب جديد</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
</head>

<style>

h3{
    font-family: 'Cairo','sans-serif';
    font-weight: bold;
    margin-top: 30px;

}
main{
    width: 60%;
    margin-top: 30px;

}
input{
    margin-bottom: 10px;
    margin-top: 5px;
    width: 60%;
    padding: 5px;
    font-family: 'Cairo', sans-serif; 
   font-size: 15px;
   font-weight: bold;
   border-radius: 2px;
   margin-top: 20px;
    text-align: right;

}
button{
border: none;
padding: 10px;
width: 40%;
font-weight: bold;
font-family: 'Cairo', sans-serif; 
font-size: 15px;
background-color: aqua;
cursor: pointer;
margin-bottom: 15px;
border-radius: 8px;
}

</style>

<body>
    
<center>

    <h3>تسجيل حساب جديد</h3>
    <main>
    <div class='card' style='width: 18rem;'>

    <form  method="post">
<input type="email" name="email" required  placeholder="البريد الالكتروني" class="box"><br>
<input type="text" name='username'required placeholder="اسم السمتخدم"class="box"><br>
<input type="password" name="password" required placeholder="كلمة السر" class="box"><br>
<button type="submit" name="sign">تسجيل الدخول </button><br>
<a href="login.php">امتلك حساب بالفعل</a>
    </form>
    </div>
    </main>

</center>

<?php
include('config.php');
if(isset($_POST['sign'])){
$email=mysqli_real_escape_string($con,$_POST['email']);
$username=mysqli_real_escape_string($con,$_POST['username']);
$password=mysqli_real_escape_string($con,md5($_POST['password']));

$sing="SELECT * FROM user WHERE email = '$email' AND password = '$password'" 
or die('query failed');
$result=mysqli_query($con,$sing);

if(mysqli_num_rows($result) > 0){
    $message[] = 'user already exist!';
 }else{
    mysqli_query($con, "INSERT INTO user (email, username, password) VALUES('$email','$username', '$password')") or die('query failed');
    $message[] = 'registered successfully!';
    header('location:login.php');
 }

}
?>
</body>
</html>