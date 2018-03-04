<?php

$con=mysqli_connect("localhost","root","","dw_education");
// Check connection
define('USE_PCONNECT', 'false'); 
define('STORE_SESSIONS', 'mysql');
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }

$sql="SELECT * FROM `slider` order by `slider_id` ASC";

 
$result1=mysqli_query($con,$sql);
while($row1=mysqli_fetch_array($result1)) 
	{
		//$_SESSION['auth']=true;
		$_SESSION['title1'] =$row1['Title'];
		$_SESSION['desc1'] =$row1['Description'];
	}
$result2=mysqli_query($con,$sql);
while($row2=mysqli_fetch_array($result2)) 
	{
		//$_SESSION['auth']=true;
		$_SESSION['title2'] =$row2['Title'];
		$_SESSION['desc2'] =$row2['Description'];
	}
$result3=mysqli_query($con,$sql);
while($row3=mysqli_fetch_array($result3)) 
	{
		//$_SESSION['auth']=true;
		$_SESSION['title3'] =$row3['Title'];
		$_SESSION['desc3'] =$row3['Description'];
	}
$result4=mysqli_query($con,$sql);
while($row4=mysqli_fetch_array($result4)) 
	{
		//$_SESSION['auth']=true;
		$_SESSION['title4'] =$row4['Title'];
		$_SESSION['desc4'] =$row4['Description'];
	}
$result5=mysqli_query($con,$sql);
while($row5=mysqli_fetch_array($result5)) 
	{
		//$_SESSION['auth']=true;
		$_SESSION['title5'] =$row5['Title'];
		$_SESSION['desc5'] =$row5['Description'];
	}



$sql1="SELECT * FROM `overview` ";
 
$res1=mysqli_query($con,$sql1);
while($row2=mysqli_fetch_array($res1)) 
	{
		//$_SESSION['auth']=true;
		$_SESSION['img'] =$row2['image'];
		$_SESSION['imgdesc'] =$row2['Description'];
	}


$sql2="SELECT * FROM `Faculty_Experience` order by `faculty_id` ASC ";

$result_fac1=mysqli_query($con,$sql2);
while($row_1=mysqli_fetch_array($result_fac1)) 
	{
		//$_SESSION['auth']=true;
		$_SESSION['title_fac1'] =$row_1['fac_title'];
		$_SESSION['li_1_fac'] =$row_1['fac_li_1'];
		$_SESSION['li_2_fac'] =$row_1['fac_li_2'];
		$_SESSION['li_3_fac'] =$row_1['fac_li_3'];
		$_SESSION['li_4_fac'] =$row_1['fac_li_4'];
		$_SESSION['li_5_fac'] =$row_1['fac_li_5'];
	}

$result_fac2=mysqli_query($con,$sql2);
while($row_1=mysqli_fetch_array($result_fac2)) 
	{
		//$_SESSION['auth']=true;
		$_SESSION['title_fac2'] =$row_1['fac_title'];
		$_SESSION['li_6_fac'] =$row_1['fac_li_1'];
		$_SESSION['li_7_fac'] =$row_1['fac_li_2'];
		$_SESSION['li_8_fac'] =$row_1['fac_li_3'];
		$_SESSION['li_9_fac'] =$row_1['fac_li_4'];
		$_SESSION['li_10_fac'] =$row_1['fac_li_5'];
	}



 ?>
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


<!-- banner -->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1" class=""></li>
			<li data-target="#myCarousel" data-slide-to="2" class=""></li>
			<li data-target="#myCarousel" data-slide-to="3" class=""></li>
			<li data-target="#myCarousel" data-slide-to="4" class=""></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<div class="container">
					<div class="carousel-caption">
						<h2><?php echo $_SESSION['title1'] ?></h2>
						<p><?php echo $_SESSION['desc1'] ?></p>
						<button class="btn btn-primary" data-target="#myModal" data-toggle="modal">Read more</button>
					</div>
				</div>
			</div>
			<div class="item item2">
				<div class="container">
					<div class="carousel-caption">
						<h3><?php echo $_SESSION['title2']?></h3>
						<p><?php echo $_SESSION['desc2']?></p>
						<button class="btn btn-primary" data-target="#myModal" data-toggle="modal">Now Open</button>
					</div>
				</div>
			</div>
			<div class="item item3">
				<div class="container">
					<div class="carousel-caption">
						<h3><?php echo $_SESSION['title3']?></h3>
						<p><?php echo $_SESSION['desc3']?></p>
						<button class="btn btn-primary" data-target="#myModal" data-toggle="modal">Now Open</button>
					</div>
				</div>
			</div>
			<div class="item item4">
				<div class="container">
					<div class="carousel-caption">
						<h3><?php echo $_SESSION['title4']?></h3>
						<p><?php echo $_SESSION['desc4']?></p>
						<button class="btn btn-primary" data-target="#myModal" data-toggle="modal">Now Open</button>
					</div>
				</div>
			</div>
			<div class="item item5">
				<div class="container">
					<div class="carousel-caption">
						<h3><?php echo $_SESSION['title5']?></h3>
						<p><?php echo $_SESSION['desc5']?></p>
						<button class="btn btn-primary" data-target="#myModal" data-toggle="modal">Now Open</button>
					</div>
				</div>
			</div>
		</div>
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
		<!-- The Modal -->
		<div id="myModal" class="modal wthree-modal" tabindex="-1">
			<!-- Modal content -->
			<div class="modal-content">
				<div class="modal-header">
					<span class="close" data-dismiss="modal" >&times;</span>
					<h3>Kdemy</h3>
				</div>
				
				
				
				<div class="col-md-6 modal-img">
					<img src="<?php echo $_SESSION['img'] ?>" class="img-responsive" alt="w3layouts" title="w3layouts">
				</div>
				<div class="col-md-6 modal-text">
					<p class="banner-p1"><?php echo $_SESSION['imgdesc'] ?></p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="thim-click-to-bottom">
			<a href="#admission" class="scroll">
				<i class="fa  fa-chevron-down"></i>
			</a>
		</div>
    </div>
	<!-- //banner -->

</section>

<!--//header-banner-section-end-here -->
<!--/experience overview -->
<div class="w3-faculty-ex">
	<div class="w3-agile-faculty-head">
	<h3>Our overview</h3>
	</div>
	<div class="w3-aglile-faculty-grids">
			<div class="w3-aglile_faculty-grid1">
					<div class="col-md-3 w3-faculty-img1">
					</div>
					<div class="col-md-3 w3-faculty-data">
						<h3><?php echo $_SESSION['title_fac1'] ?></h3>
						 <ul>
							 <li><span><i class="fa fa-check" aria-hidden="true"></i></span><?php echo $_SESSION['li_1_fac'] ?></li>
							 <li><span><i class="fa fa-check" aria-hidden="true"></i></span><?php echo $_SESSION['li_2_fac'] ?></li>
							 <li><span><i class="fa fa-check" aria-hidden="true"></i></span><?php echo $_SESSION['li_3_fac'] ?></li>
							 <li><span><i class="fa fa-check" aria-hidden="true"></i></span><?php echo $_SESSION['li_4_fac'] ?></li>
							 <li><span><i class="fa fa-check" aria-hidden="true"></i></span><?php echo $_SESSION['li_5_fac'] ?></li>
						 </ul>
					</div>
					<div class="col-md-3 w3-faculty-ex-years">
						<i class="fa fa-calendar-plus-o" aria-hidden="true"></i>
						<h3>15</h3>
						<p>more than 15 years of experience </p>
					</div>
					<div class="col-md-3 w3-faculty-img2">
					</div>
					<div class="clearfix"></div>
			</div>
			<div class="w3-agile-faculty-grid2">
			<div class="col-md-3 w3-faculty-img3">
					</div>
				<div class="col-md-3 w3-faculty-ex-years">
						<i class="fa fa-users" aria-hidden="true"></i>
						<h3>20</h3>
						<p>more than 20 years of experience </p>
				</div>
				<div class="col-md-3 w3-faculty-data">
						<h3><?php echo $_SESSION['title_fac2']?></h3>
						 <ul>
							 <li><span><i class="fa fa-check" aria-hidden="true"></i></span><?php echo $_SESSION['li_6_fac'] ?></li>
							 <li><span><i class="fa fa-check" aria-hidden="true"></i></span><?php echo $_SESSION['li_7_fac'] ?></li>
							 <li><span><i class="fa fa-check" aria-hidden="true"></i></span><?php echo $_SESSION['li_8_fac'] ?></li>
							 <li><span><i class="fa fa-check" aria-hidden="true"></i></span><?php echo $_SESSION['li_9_fac'] ?></li>
							 <li><span><i class="fa fa-check" aria-hidden="true"></i></span><?php echo $_SESSION['li_10_fac'] ?></li>
						 </ul>
				</div>
				<div class="col-md-3 w3-faculty-img4">
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="w3-agile-faculty-grid3">
				<div class="col-md-4 w3-faculty-services1">
							<i class="fa fa-user" aria-hidden="true"></i>
						<h3>24*7 faculty</h3>
						<p>Kdemy helps you get the most out of your investment through a wide range of education offerings.</p>
				</div>
				<div class="col-md-4 w3-faculty-services2">
						<i class="fa fa-clock-o" aria-hidden="true"></i>
						<h3>24 hours labs</h3>
						<p>This place is awesome, especially for anyone that lives on campus. Scan your ID Card in order to get in.</p>
				</div>
				<div class="col-md-4 w3-faculty-services3">
						<i class="fa fa-desktop" aria-hidden="true"></i>
						<h3>Online training</h3>
						<p>Kdemy is an online learning and teaching marketplace with over 65000 courses and 15 million students.</p>
				</div>

				<div class="clearfix"></div>
			</div>


	</div>
	<div class="clearfix"></div>
</div>
<!--//experience overview -->

		<!-- professors -->
	<div class="jarallax team" id="professor">
		<div class="team-dot">
			<div class="container">
				<div class="w3-agile-heading team-heading">
					<h3>Our Trainers</h3>
				</div>
				<div class="agileits-team-grids">
					<div class="col-md-3 agileits-team-grid">
						<div class="team-info">
							<img src="images2/teacher1.jpg" alt="">
							<div class="team-caption">
								<h4>Leila Knight </h4>
								<p>Associate Lecturer</p>
								<ul>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-rss"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-3 agileits-team-grid">
						<div class="team-info">
							<img src="images2/teacher2.jpg" alt="">
							<div class="team-caption">
								<h4>Greville Henwood</h4>
								<p>Professor</p>
								<ul>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-rss"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-3 agileits-team-grid">
						<div class="team-info">
							<img src="images2/teacher4.jpg" alt="">
							<div class="team-caption">
								<h4>Lana Hanssens</h4>
								<p>Teacher/Trainer</p>
								<ul>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-rss"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-3 agileits-team-grid">
						<div class="team-info">
							<img src="images2/teacher5.jpg" alt="">
							<div class="team-caption">
								<h4>Daphne Sharpe</h4>
								<p>Skill Trainer</p>
								<ul>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-rss"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>		
	<!-- //professor -->
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
