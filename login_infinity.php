
<!DOCTYPE html>
<html lang="en">
<head>
<title>Kdemy</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Education portal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--// Meta tag Keywords -->
<!-- css files -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/carousel.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all">
<!-- gallery -->
<link href="css/lsb.css" rel="stylesheet" type="text/css">
<!-- //gallery -->
<!-- /fonts -->
<link href="//fonts.googleapis.com/css?family=Montserrat+Alternates:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic" rel="stylesheet">
<!-- //fonts -->




<!-- //css files -->
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>

<!-- //js -->


</head>
<body>
<?php 

include("header.html");

?>

<div class="login-box">
<div class="logo">
<a href="https://infinityfree.net/">Infinity<b>Free</b></a>
<small>Free and Unlimited Web Hosting</small>
</div>
<div class="card">
<div class="body">
<div class="msg">Login to your account</div>
<form method="post">
<div class="input-group form-float">
<span class="input-group-addon">
<i class="material-icons">email</i>
</span>
<div class="form-line focused">
<input type="email" class="form-control" name="email" placeholder="Email" required="" autofocus="">
</div>
</div>
<div class="input-group">
<span class="input-group-addon">
<i class="material-icons">lock</i>
</span>
<div class="form-line">
<input type="password" class="form-control" name="password" placeholder="Password" required="">
</div>
</div>
<div class="row">
<div class="col-xs-8 p-t-5">
<input type="checkbox" name="remember" id="remember" class="filled-in chk-col-pink">
<label for="remember">Remember Me</label>
</div>
<div class="col-xs-4">
<button class="btn btn-block bg-pink waves-effect">SIGN IN</button>
</div>
</div>
<div class="row m-t-15 m-b--20">
<div class="col-xs-6">
<a href="https://app.infinityfree.net/register">Register Now!</a>
</div>
<div class="col-xs-6 align-right">
<a href="https://app.infinityfree.net/password/reset">Forgot Password?</a>
</div>
</div>
<input type="hidden" name="_token" value="DsJyPvJUxxnKaMvdtyZjCKXG7JS5F9t6dB1NutGW">
</form>
</div>
</div>
</div>


	<!-- footer -->
<?php 

include("footer.html");

?>
	<!-- //footer -->

	<!-- start-smooth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){
					event.preventDefault();

			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
	<!-- //end-smooth-scrolling -->
	<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
			};
			*/

			$().UItoTop({ easingType: 'easeOutQuart' });

		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->
    </body>
</html>
