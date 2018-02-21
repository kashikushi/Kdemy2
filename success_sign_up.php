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
	 
$query="SELECT * FROM `Sign_Up_Data_Table` WHERE `email` = '$useremail' and `password` ='$userpassword`";

$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result)) {
	//$_SESSION['auth']=true;
	$_SESSION['ID'] =$row[0];
		$admin_id=$_SESSION['ID'];
		$name=$row['email'];
}
}
echo($name);
echo "<a href="logout.php"> Logout  </a>";
 ?>
