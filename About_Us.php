
<!DOCTYPE html>
<html lang="en">
<head>
<title>About Us</title>
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
<!--header-->
<?php 

include("header.html");

?>
		<!--//header-->

<!--/about -->
<div id="about" class="about all_pad w3ls">
	<div class="container">
		<h3 class="w3-about-title">About Us</h3>
		<div class="ser-top-grids">
			<div class="col-md-4 ser-grid wow flipInY" data-wow-duration="1.5s" data-wow-delay="0s">
				<div class="con-left text-center">
					<div class="spa-ico"><span><i class="fa fa-book" aria-hidden="true"></i></span></div>
					<h5>VISION</h5>
					<p>A society that uses all of its resources effectively to provide an equal opportunity for all children and youth to learn, develop, and become contributing citizens of our democracy.</p>

				</div>
			</div>
			<div class="col-md-4 ser-grid wow flipInY" data-wow-duration="1.5s" data-wow-delay="0s">
				<div class="con-left text-center">
					<div class="spa-ico"><span><i class="fa fa-pencil" aria-hidden="true"></i></span></div>
					<h5>MISSION</h5>
					<p>To equip leaders to better prepare children and youth for college, careers, and citizenship.</p>

				</div>
			</div>
			<div class="col-md-4 ser-grid wow flipInY" data-wow-duration="1.5s" data-wow-delay="0s">
				<div class="con-left text-center">
					<div class="spa-ico"><span><i class="fa fa-user" aria-hidden="true"></i></span></div>
					<h5>ABOUT KDEMY</h5>
					<p>or a half-century, the Institute for Educational Leadership has championed the need for leaders at all levels to shake off their institutional constraints and work across boundaries to address the needs of young people and their families. Bound by no constituency, KDEMY serves as a catalyst that helps policymakers, administrators, and practitioners at all levels to bridge bureaucratic silos and undo gridlock to improve outcomes for all young people and their families.</p>

				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!--//about -->





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
