
<?php
$hostname="localhost";
$user="root";
$password="";
$database="employdb";
$con=mysqli_connect("localhost","root","","employdb");
if($con){
    echo "database connected" .mysqli_connect_error();
}
?>