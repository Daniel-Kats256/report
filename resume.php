<?php
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['uname'])){
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/resume.css">
    <!-- <style><?php.include."css/resume.css" ?></style> -->
</head>
<body>
    <div class="title">
        <div>
            Welcome To
            <img src="images/kata.jpg" alt="">
        </div>
        <div>
             S.KATA ENGINEERING LIMITED
        </div>
    </div>
    <div class="search">
        <div><h1>Hello, <?php echo $_SESSION['uname'];?></h1></div>
    </div>
    <div class="boxes">
        <div>
            <img src="images/images (2).jpg" alt="">
            <p><a href="home.html">Home</a></p>
        </div>
        <div>
            <img src="images/images2.jpg" alt="">
            <p><a href="about.php">About</a></p>
        </div>
        <div>
            <img src="images/images.jpg" alt="">
            <p><a href="blog.php">Blog</a></p>
        </div>
        <div>
            <img src="images/download.jpg" alt="">
            <p><a href="logout.php">Log out</a></p>
        </div>
    </div>
</body>
</html>

<?php

}
else {
    header("location: index.php");
    exit();
}
?>