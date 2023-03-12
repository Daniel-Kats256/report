<?php
session_start();
error_reporting(E_ALL);
// echo"hello";
// exit;
include "db_conn.php";

if(isset($_POST['login'])){

if(isset($_POST['uname']) && isset($_POST['pass2'])) {

    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}

$uname = validate($_POST['uname']);
$pass = validate($_POST['pass2']);

if(empty($uname)) {
    header ("location: index.php?error=User Name is required");
    exit();
}
else if(empty($pass)) {
    header ("location: index.php?error=Password is required");
    exit();
}
//   checking data from db table
$sql = "SELECT * FROM worker_tb WHERE uname='$uname' AND pass2='$pass'";

$result = mysqli_query($con,  $sql);

echo '<pre>';
print_r($result);
print_r($_POST);
echo '</pre>';

if(mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);
    
    if($row['uname'] === $uname && $row['pass2'] === $pass) {

        echo "logged in";
        $_SESSION['uname'] = $row['uname'];
        $_SESSION['pass2'] = $row['pass2'];
        $_SESSION['id'] = $row['id'];

        header("location: resume.php");
        exit();
    } 
    else{
        header ("location: index.php?error=Incorrect password or user name");
        exit();
    }
}
else{
    header ("location: index.php?error=Account not found");
    exit();
}
}
?>