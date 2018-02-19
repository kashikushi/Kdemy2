<?php
$con=mysqli_connect("localhost","root","root","dw_education");
// Check connection
define('USE_PCONNECT', 'false'); 
define('STORE_SESSIONS', 'mysql');
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }


if(isset($_POST['submit']))
 {
 extract($_POST);



$query="INSERT INTO `test1`(`email`, `password`) VALUES ('$useremail','$userpassword')";

if ($con->query($query) === TRUE) {
header("location:Sign_Up.php");

 } else {
echo "Error: " . $query . "<br>" . $con->error;
}
echo "<script> alert('Record Has been Recorded successfully.');</script>";
/*$con->close();*/
 }

 ?>