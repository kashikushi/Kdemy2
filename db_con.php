<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>db connection</title>
</head>

<body>

/*db connention start
*/

<?php	
	$con=mysqli_connect("sql303.epizy.com", "epiz_21599476", "yg5dquhElOrp", "epiz_21599476_dw_education")
		// Check Connection
		define('USE_PCONNECT', 'false');
		define('STORE_SESSIONS', 'mysql');
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MYSQL: " . mysqli_connect_error();
	}	
?>
/*db connention end
*/	
	
	
	


</body>
</html>