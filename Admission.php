
<!DOCTYPE html>
<html lang="en">
<head>
<title>Education Portal an Education Category Bootstrap Responsive Website Template | Home :: </title>
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
<div style="height: 100px"></div>

<!--/contact -->
 <div class="bg-agile w3-admission" id="admission">
	<div class="book-appointment" id="admissions">
		<div class="w3-appoint-head">
	<h3>Admission Form </h3>
	</div>
			<form action="#" method="post">
			<div class="left-agileits-w3layouts same">
			<div class="gaps">
				<p>Student Name</p>
					<input type="text" name="Patient Name" placeholder="" required=""/>
			</div>
				<div class="gaps">
				<p>Phone Number</p>
					<input type="text" name="Number" placeholder="" required=""/>
				</div>
				<div class="gaps">
				<p>Email</p>
						<input type="email" name="email" placeholder="" required="" />
				</div>
				<div class="gaps">
				<p>Parent Name</p>
					<input type="text" name="Patient Name" placeholder="" required=""/>
				</div>
			</div>
			<div class="right-agileinfo same">
			<div class="gaps">
				<p>Gender</p>
					<select class="form-control">
						<option>Male</option>
						<option>Female</option>
					</select>
			</div>
			<div class="gaps">
				<p>Select Date for admission</p>
						<input  id="datepicker1" name="Text" type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
			</div>
			<div class="gaps">
				<p>Standard</p>
					<select class="form-control">
						<option>1 to 5 Standard </option>
						<option>6th Standard </option>
						<option>7th Standard</option>
						<option>8th Standard</option>
						<option>9th tandard</option>
						<option>10th Standard</option>
						<option>12th Standard</option>
						<option>Under Graduation</option>
						<option>Post Graduation</option>
					</select>
			</div>
			<div class="gaps">
				<p>How do you know about our institute</p>
					<select class="form-control">
						<option>friends </option>
						<option>on site </option>
						<option>social media</option>
					</select>
			</div>
			</div>
			<div class="clearfix"></div>
						  <input type="submit" value="Make an admission">
			</form>
	</div>
</div>

		<!-- Calendar -->
				<link rel="stylesheet" href="css/jquery-ui.css" />
				<script src="js/jquery-ui.js"></script>
				  <script>
						  $(function() {
							$( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
						  });
				  </script>
			<!-- //Calendar -->
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
