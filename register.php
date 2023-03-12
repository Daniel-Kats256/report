<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create_account</title>
    <link rel="stylesheet" href="css/login.css">
    <style><?php.include."css/login.css"?></style>
</head>
<body>
    <form action="registering.php" class="login" method="post">
        <div class="logo">
            <img src="images/kata.jpg" alt="">
        </div>        
        <div>
            <div>
                <h1>Create Account</h1>
            </div>
            <div>
                <?php if(isset($_GET['error'])) {?>
                <p class="error"><?php echo  $_GET['error']?></p>
                <?php } ?>
                <input type="text" placeholder="first name" name="fname">
                <input type="text" placeholder="last name" name="lname">
                <input type="text" placeholder="enter username" name="uname">
                <input type="email" name="email" placeholder="enter email">
                <input type="password" name="pass1" placeholder="enter password">
                <input type="password" name="pass2" placeholder="confirm password">
                <button type="submit">CREATE</button>
                <a href="./" class="register">login rather</a>
            </div>
        </div>
    </form>
</body>
</html>