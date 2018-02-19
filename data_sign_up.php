<?php
<<<<<<< HEAD
$con=mysqli_connect("localhost","root","root","dw_education");
=======
$con=mysqli_connect("localhost","kashif","haris2011","dw_education");
>>>>>>> origin2/master
// Check connection
define('USE_PCONNECT', 'false'); 
define('STORE_SESSIONS', 'mysql');
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }


if(isset($_POST['submit']))
 {
 extract($_POST);

<<<<<<< HEAD


$query="INSERT INTO `test1`(`email`, `password`) VALUES ('$useremail','$userpassword')";

if ($con->query($query) === TRUE) {
header("location:Sign_Up.php");
=======
$email = $_REQUEST['fname'];
$password = $_REQUEST['lname'


$query="INSERT INTO `test`(`email`, `password`) VALUES ('$email','$password')";

if ($con->query($query) === TRUE) {
header("location:signup.html");
>>>>>>> origin2/master

 } else {
echo "Error: " . $query . "<br>" . $con->error;
}
echo "<script> alert('Record Has been Recorded successfully.');</script>";
/*$con->close();*/
 }

<<<<<<< HEAD
 ?>
=======
 ?>
>>>>>>> origin2/master
