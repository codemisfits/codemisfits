<?php

$host="localhost";
$user="root";
$password="";
$db="eidlogin";

session_start();


$data=mysqli_connect($host,$user,$password,$db);

if($data===false)
{
    die("connection error");
}


if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $email=$_POST["email"];
    $password=$_POST["password"];


    $sql="select * from login where email='".$email."' AND password='".$password."' ";

    $result=mysqli_query($data,$sql);

    $row=mysqli_fetch_array($result);

    if($row["usertype"]=="user")
    {   

        $_SESSION["email"]=$email;

        header("location:declaration.php");
    }

    elseif($row["usertype"]=="admin")
    {

        $_SESSION["email"]=$email;
        
        header("location:adminhome.php");
    }

    else
    {
        echo "email  or password incorrect";
    }

}




?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login here</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- cusom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="index.html" class="logo"> <i class=""></i> Ethics and Integrity Directorate </a>

    

    <div class="icons">
        <i class="fas fa-bars" id="menu-bars"></i>
        <i class="fas fa-search" id="search-icon"></i>
        <a href="login.html" class="fas fa-user"></a>
      
    </div>

</header>

<!-- header section ends -->


<!-- search form  -->

<form action="" id="search-form">
    <input type="search" placeholder="search here..." name="" id="search-box">
    <label for="search-box" class="fas fa-search"></label>
    <i class="fas fa-times" id="close"></i>
</form>


<!-- login form section starts  -->

<section class="login">

    <form action="#" method="POST">

        <h3>login now</h3>
        <input type="text" name="email" placeholder="enter your email" id="" class="box" required>

        <input type="password" name="password" placeholder="enter your password" id="" class="box" required>

        <input type="submit" value="Login" class="btn">


        <p>don't have an account?</p>
        <a href="register.php ?>" class="btn link">register now</a>

    </form>

</section>

<!-- login form section ends  -->

<!-- footer section starts  -->

<section class="credit">

    <p> created by <span>code-misfits</span> | all rights reserved! </p>

    

</section>

<!-- footer section ends -->




<!-- swiper js link      -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>




</body>
</html>