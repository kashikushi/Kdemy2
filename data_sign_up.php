<?php
$con=mysqli_connect("localhost","kashif","haris2011","dw_education");
// Check connection
define('USE_PCONNECT', 'false'); 
define('STORE_SESSIONS', 'mysql');
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }


if(isset($_POST['submit']))
 {
 extract($_POST);

$email = $_REQUEST['fname'];
$password = $_REQUEST['lname'


$query="INSERT INTO `test`(`email`, `password`) VALUES ('$email','$password')";

if ($con->query($query) === TRUE) {
header("location:signup.html");

 } else {
echo "Error: " . $query . "<br>" . $con->error;
}
echo "<script> alert('Record Has been Recorded successfully.');</script>";
/*$con->close();*/
 }

 ?>
