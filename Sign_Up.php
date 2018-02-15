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

	
	
p{
	font-size:12px;
	text-decoration: none;
	color:#606060;
	margin: 10px auto 200ox auto;
}
	
h1{
	font-size:1.5em;
	color:#525252;
	margin: 20px;
}
	.logo {
		margin-top: 150px;
		font-size: 40px;
	}
	.msg{
		padding: 20px 0;
		font-size: 20px;
	}
	
.box{
	background: white;
	width: 400px;
	border-radius: 5px;
	margin: 20px auto 60px auto;
	padding: 20px 0px 50px 0px;
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

.password{
	border-radius:4px;
	background:#ecf0f1;
	border: #ccc 1px solid;
	padding: 12px;
	width:250px;
	font-size:1em;
 }
.btn{
	width:80%;
	padding: 20px;
	color: white;
	border-radius: 4px;
	border: #27ae60 1px solid;
	margin: 20px 20px;
	font-weight:800;
	font-size:0.8em;
 }
	
.btn:hover{
	background:#2CC06B;
 }
	.form-group{
		margin: 20px;
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
<div class="box">
<div class="msg">Sign up for a free account</div>
<form method="post" action="#">
<input type="email" class="email" name="email" placeholder="Email Address" required="" value="">
<input type="password" class="email" name="password" minlength="6" placeholder="Password" required="">
<input type="password" class="email" name="password_confirmation" minlength="6" placeholder="Confirm Password" required="">

<div class="form-group">
<input type="checkbox" name="terms_of_service" id="terms" class="terms">
<label for="terms">I've read and agree to the <a href="#">terms of service</a>.</label>
</div>
<button class="btn btn-danger">SIGN UP</button>
<div class="m-t-25 m-b--5 align-center form-group">
<a href="Login.php" class="already">You already have a membership?</a>
</div>
</form>
</div>


<!-- footer -->
<?php 

include("footer.html");

?>
			<!-- //footer -->
</body>
</html>
