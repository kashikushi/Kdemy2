<?php

$con=mysqli_connect("localhost","root","","dw_education");

// Check connection
define('USE_PCONNECT', 'false'); 
define('STORE_SESSIONS', 'mysql');
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }

if(isset($_POST['submit']))
 {
 extract($_POST);

$useremail = $_REQUEST['email'];
$userpassword = $_REQUEST['password'];
$userconfirmedpassword = $_REQUEST['password_confirmation'];


	 
$query="INSERT INTO `Sign_Up_Data_Table_2`(`email_address`, `password`, `confirmed_password`) VALUES ('$useremail','$userpassword','$userconfirmedpassword')";

if ($con->query($query) === TRUE) {
header("location:Sign_Up.php");
}
else {
echo "Error: " . $query . "<br>" . $con->error;
}
echo "<script> alert('Record Has been Recorded successfully.');</script>";
/*$con->close();*/
 }

 ?>
