<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Sign Up</title>
<style>
	
body{
	font-family: 'Open Sans', sans-serif;
	background: #5899ab;
	margin: 0 auto 0 auto;
	width: 100%;
	text-align: center;
	margin: 20px 0px 20px 0px;
}
	
/*topbar starts
*/	
	.topbar {
	height: 61px;
	background-color: #FFFFFF
	}

	
/*topbar ends	
*/	
	
p{
	font-size:12px;
	text-decoration: none;
	color:#606060;
	margin: 10px auto 200ox auto;
}
	
h1{
	font-size:1.5em;
	color:#525252;
}
	
.box{
	background: white;
	width: 300px;
	border-radius: 6px;
	margin: 200px auto 0 auto;
	padding: 0px 0px 70px 0px;
	border: #2980b9 4px solid;
	position: relative;
 }
	
.email{
	background:#ecf0f1;
	border: #ccc 1px solid;
	border-bottom: #ccc 2px solid;
	padding: 8px;
	width:250px;
	color:#AAAAAA;
	margin-top:10px;
	font-size:1em;
	border-radius:4px;
}

.password{
	border-radius:4px;
	background:#ecf0f1;
	border: #ccc 1px solid;
	padding: 8px;
	width:250px;
	font-size:1em;
 }
.btn{
	background:#2ecc71;
	width:125px;
	padding-top:5px;
	padding-bottom:5px;
	color:white;
	border-radius:4px;
	border: #27ae60 1px solid;
	margin-top:20px;
	margin-bottom:20px;
	float:left;
	margin-left:16px;
	font-weight:800;
	font-size:0.8em;
 }
.btn:hover{
	background:#2CC06B;
 }
	
.btn2{
	float:left;
	background:#3498db;
	width:125px; padding-top:5px;
	padding-bottom:5px;
	color:white;
	border-radius:4px;
	border: #2980b9 1px solid;
	margin-top:20px;
	margin-bottom:20px;
	margin-left:10px;
	font-weight:800;
	font-size:0.8em;
 }
	
.btn2:hover{
	background:#FF0004;
 }
</style>


</head>
<body>

<!--header-->
<?php 

include("header.html");

?>
		<!--//header-->


<form method="post" action="">
<div class="box">
<h1>Sign Up</h1>
<input type="email" name="email" placeholder="Email address" class="email" />
<input type="password" name="pass" placeholder="Password" class="email" />


<a href="SignUp.php"><div class="btn">Sign In</div></a>
<a href="SignUp.php"><div class="btn2">Sign Up</div></a>
</div>
</form>
<p>Forgot your password? <u style="color:#f1c40f;">Click Here!</u></p>
<div style="height: 100px">
	
</div>

<!-- footer -->
<?php 

include("footer.html");

?>
			<!-- //footer -->
</body>
</html>
