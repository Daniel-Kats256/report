<?php
// session_start();
// include "db_conn.php";
//declaring strings as variables
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$uname=$_POST['uname'];
$email=$_POST['email'];
$pass1=$_POST['pass1'];
$pass2=$_POST['pass2'];

if(empty($fname)){
    header ("location: register.php?error=First Name is required");
    exit();
}
else if(empty($lname)){
    header ("location: register.php?error=Last Name is required");
    exit();
}
else if(empty($uname)){
    header ("location: register.php?error=User Name is required");
    exit();
}
else if(empty($email)){
    header ("location: register.php?error=Email is required");
    exit();
}
//connection
if(!empty($fname) || !empty($lname) || !empty($uname) || !empty($email) || !empty($pass1) || !empty($pass2) )
{
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "employdb";

    //creatimg connection
    $conn = new mysqli ($host, $username, $password, $database);

    if(mysqli_connect_error()){
        die('connect error ('. mysqli_connect_error() .')'. mysqli_connect_error());
    }

    else{
        $SELECT = "SELECT email from worker_tb where email = ? limit 1";
        $INSERT = "INSERT Into worker_tb ( fname , lname , uname , email , pass1 , pass2 ) values(?,?,?,?,?,?)";

        //prepare statement
        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $rnum = $stmt->num_rows;

        //checking username
        if ($rnum==0) {
            $stmt->close();
            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("ssssss", $fname, $lname, $uname, $email, $pass1, $pass2);
            $stmt->execute();
            header("location: index.php");
             exit(); 
            echo "New record inserted successfully";
        }
        else{
            header ("location: register.php?error=Someone already registered using this account");
            exit();
        }
        if($pass1!=$pass2){
            header ("location: register.php?error=Passwords don't match");
            exit();
        }
        $stmt->close();
        $conn->close();

    }
}

else {
    header ("location: register.php?error=All fields are required");
    exit();
    
}
?> 