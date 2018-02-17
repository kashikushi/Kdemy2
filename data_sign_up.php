
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

			$query="INSERT INTO `test`(`user_id`, `email`, `password`) VALUES ('userEmail','userPassword'";
	}
	if ($con->query($query)) === TRUE) {
		header("location:data_sign_up.php");			
	}
	else {
		echo "Error: " .<iframe></iframe> $query . "<br>" . $con->error;
	}
	echo "<script> alert ('Recod has been submitted successfully.'); </script>";
	
	
?>