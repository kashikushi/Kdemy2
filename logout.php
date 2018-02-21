<?php
    session_start();
    unset($_SESSION['ID']);
session_destroy();
	
			echo "<script>
			alert('Logout Successfully');
			window.location.href='login.php';
			</script>";
			
?>