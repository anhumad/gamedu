<?php
include 'conn/acces.php';
session_start();
error_reporting(0);

if(isset($_SESSION['username'])){
    header("location: admin_page.php");
}

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM users WhERE email='$email' AND Password ='$password' ";
    $result = mysqli_query($koneksi, $sql);
    if ($result-> num_rows>0){
        $row = mysqli_fetch_assoc($result);
        header("Location: admin_page.php");
    } else{
        echo "<script> alert ('sorry! email or password is wrong')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>login</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"><link rel="stylesheet" href="login.css">
<script src="https://kit.fontawesome.com/21b088fd58.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="wrapper">
  <div class="login-text">
  <button class="cta"> <i class="fa-duotone fa-chevron-down"></i> </button>
    <div class="text">
    <form action="admin_page.php" method="post">
      <a href="">Login Admin</a>
      <hr>
      <br>
      <input type="email" name="email" required placeholder="enter your email">
      <br>
      <input type="password" name="password" placeholder="Password"><br>
      <br>
      <button type="submit" class="log">Login</button>
    </div>
  </div>
  <div class="call-text">
    <h1>Choose<span> Maria’s </span> Future</h1>
  <div class="calll-text">
    <h1>Maria adalah seorang wanita penuh energi  dan penuh cinta. 
      Bantu Maria dan Daniel untuk tetap menjalani kehidupan berkeluarganya dengan sehat.</h1>
  </div>
  <button type="button" onclick="location.href='start.php'">Start</button>
  </div>

</div>
<!-- partial -->
  <script  src="login.js"></script>

</body>
</html>
