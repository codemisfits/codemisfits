<?php
session_start();


if(!isset($_SESSION["email"]))
{
    header("location:login.php");
}

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>declaration of assets and liabilities</title>

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
        <a href="logout.php" class="fas fa-user"></a>
    </div>

</header>

<!-- header section ends -->


<!-- declaration form section starts  -->

<section class="declaration" id="declaration">

    <h1 class="heading"> declaration of assets and liability form Part 1</h1>



    <form action="">

        <h3>use block letters while filling the form</h3>

        <div class="inputBox">
            <div class="input">
                <span>surname</span>
                <input type="text" placeholder="enter your surname">
            </div>
            <div class="input">
                <span>other names</span>
                <input type="text" placeholder="enter your other names">
            </div>
        </div>
         <div class="inputBox">
           <div class="input">
                <span>Date of Birth</span>
                <input type="datetime-local">
            </div>
            <div class="input">
                <span>Place of birth</span>
                <input type="text" placeholder="enter your place of birth">
            </div>
        </div>
        <div class="inputBox">
            <div class="input">
                <span>national id</span>
                <input type="text" placeholder="enter your omang or passport number">
               </div>
            <div class="input">
                <span>citizenship</span>
                <input type="text" placeholder="enter your citizenship">
                </div>
        </div>
        <div class="inputBox">
            <div class="input">
                <span>postal address</span>
                <input type="text" placeholder="enter your postal address">
               </div>
            <div class="input">
                <span>physical address</span>
                <input type="text" placeholder="enter your physical address">
                </div>
        </div>
        <div class="inputBox">
            <div class="input">
                <span>telephone contact</span>
                <input type="text" placeholder="enter your telephone number">
               </div>
            <div class="input">
                <span>position</span>
                <input type="text" placeholder="enter your rank or title">
                </div>
        </div>
        <div class="inputBox">
            <div class="input">
                <span>date of current appointment</span>
                <input type="datetime-local">
               </div>
            <div class="input">
                <span>name of employer</span>
                <input type="text" placeholder="enter your employer">
                </div>
        </div>
        <div class="inputBox">
            <div class="input">
                <span>nature of employment</span>
                <input type="text" placeholder="enter your employment nature">
               </div>
            <div class="input">
                <span>salary</span>
                <input type="text" placeholder="enter your salary per annum">
                </div>
        </div>
        

        <input type="submit" value="submit" class="btn">

    </form>

</section>

<!-- register form section ends  -->















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