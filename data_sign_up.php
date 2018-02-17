<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>data</title>
</head>

<body>
<!--db POST start
-->

<?php	
/*	db connection
*/	
	include("db_con.php"); 

/*data from signup page
*/	
	if (isset($_POST['submit']))
	{
		extract($_POST);
			$userEmail = $_REQUEST['email'];
			$userPassword = $_REQUEST['password'];

			$query="INSERT INTO `Sign_Up_Data_Table`(`email_address`, `password`) VALUES ([userEmail],[userPassword])";
	}
	if ($con->query($query)) === TRUE) {
		header("location:login.php");			
	}
	else {
		echo "Error: " . $query . "<br>" . $con->error;
	}
	echo "<script> alert ('Recod has been submitted successfully.'); </script>";
	
	
?>
<!--db POST end
-->	
</body>
</html>