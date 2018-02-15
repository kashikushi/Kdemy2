<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Login</title>
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
	
	.logo {
		margin-top: 150px;
		font-size: 40px;
	}
p{
	font-size:12px;
	text-decoration: none;
	color:#606060;
	margin: 20px auto 200ox auto;
}
	.forget {
		margin: 20px 0 0 0;
	}
	
h1{
	font-size:1.5em;
	color:#525252;
	margin: 20px;
}
	
.box{
	background: white;
	width: 400px;
	border-radius: 5px;
	margin: 20px auto 60px auto;
	padding: 50px 0px 50px 0px;
	border: rgba(95,95,95,0.50) 2px solid;
	position: relative;
	box-shadow:10px 10px 30px -20px grey; 
	}
	
.email{
	background:#ecf0f1;
	border: #ccc 1px solid;
	border-bottom: #ccc 2px solid;
	padding: 12px;
	width: 80%;
	color:#AAAAAA;
	margin-top:20px;
	font-size:1em;
	border-radius:4px;
}

.btn {
	width:80%;
	padding: 20px;
	color: white;
	border-radius: 4px;
	border: #27ae60 1px solid;
	margin: 20px 10px;
	font-weight:800;
	font-size:0.8em;
 }
.btn:hover {
	background:#2CC06B;
 }

.btn2:link, .btn2:visited {
    background-color: #1E73C9;
    color: white;
    padding: 14px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
}


.btn2:hover, .btn2:active {
    background-color: blue;
}

	.btn3:link, .btn3:visited {
    background-color: red;
    color: white;
    padding: 14px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
}


.btn3:hover, .btn3:active {
    background-color: red;
}
	
</style>


</head>
<body>

<!--header-->
<?php 

include("header.html");

?>
		<!--//header-->

<div class="logo">
<a href="index.php"><strong>K</strong>demy</a>
</div>
<form method="post" action="">
<div class="box">
<h1>Login</h1>
<input type="email" name="email" placeholder="Email address" class="email" />
<input type="password" name="pass" placeholder="Password" class="email" />
<a href="Login.php" class="btn2 btn btn-primary"> Login </a>

<div class="forget"><p>Forgot your password? <u style="color:#f1c40f;">Click Here!</u></p></div>
<a href="Sign_Up.php" class="btn3 btn btn-info"> Sign up for free account </a>


</div>
</form>

<!-- footer -->
<?php 

include("footer.html");

?>
			<!-- //footer -->
</body>
</html>
