<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login_form</title>
    <link rel="stylesheet" href="css/login.css">
    <style><?php.require."css/login.css"?></style>
</head>
<body>
    <form action="login.php" class="login" method="post">
        <div class="logo">
            <img src="images/kata.jpg" alt="">
        </div>
        <div>
            <div>
                <h1>Login Dear</h1>
            </div>
            <div>
                <?php if(isset($_GET['error'])) { ?>
                   <P class="error"><?php echo $_GET['error']; ?></P>
                <?php } ?>
                <input type="text" placeholder="enter username" name="uname">
                <input type="email" name="email" placeholder="enter email">
                <input type="password" name="pass2" placeholder="enter password">
                <button type="submit" name="login">LOGIN</button>
                <a href="#">forgot password</a>
                <a href="register.php" class="register">create account</a>
            </div>
        </div>
    </form>
</body>
</html>