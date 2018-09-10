<?php 
session_start();
include "db/db_connect.php";
$ipaddress = $_SERVER["REMOTE_ADDR"];
?>
<!DOCTYPE HTML>
<html>
<head>
<title>TechTravellers </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Tours Travel Traveller Tourism Trip Tripper Blog Blogger" />
<script type="applisalonion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<?php 
	include "library.php";
?>
<!--/script-->
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<link href="css/event.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//animate-->
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">

</head>
<body>
<!--start-home-->
		<div class="banner two" id="home">
		<div class="header-bottom">
		     <div class="container">
			  <div class="fixed-header">
			      <!--logo-->
			       <div class="logo">
						<a href="index"><h1>TECHTRAVELLERS</h1></a>
				   </div>
					<!--//logo-->
					<div class="top-menu">
							<span class="menu"> </span>
							<nav class="link-effect-4" id="link-effect-4">
                               <ul>
									<li class="active"><a data-hover="Home" href="index">Home</a></li>
									<li><a data-hover="Stories"  class="glow" href="stories" >Stories</a></li>
									 <li><a data-hover="" href="storyEntry">Write Story</a></li>
									  <li><a data-hover="Gallery" href="gallery">Gallery</a></li>
									<li><a data-hover="Event" href="event" >Event</a></li>
									

								</ul>
							</nav>
							</div>
							<!-- script-for-menu -->
								<script>
									$("span.menu").click(function(){
										$(".top-menu ul").slideToggle("slow" , function(){
										});
									});
								</script>
								<!-- script-for-menu -->

				 <div class="clearfix"></div>
					<script>
				$(document).ready(function() {
					 var navoffeset=$(".header-bottom").offset().top;
					 $(window).scroll(function(){
						var scrollpos=$(window).scrollTop(); 
						if(scrollpos >=navoffeset){
							$(".header-bottom").addClass("fixed");
						}else{
							$(".header-bottom").removeClass("fixed");
						}
					 });
					 
				});
				</script>
			 </div>
		</div>
	</div>
	</div>

<!--blog-section-->
      <div class="blog-section">
		<!-- <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		
		<ins class="adsbygoogle"
			 style="display:block"
			 data-ad-client="ca-pub-3940737792688252"
			 data-ad-slot="8606749965"
			 data-ad-format="link"></ins>
		<script>
		(adsbygoogle = window.adsbygoogle || []).push({});
		</script>-->
		<div class="container">
		  <h2 class="single">Upcoming Events</h2>
		   <div class="blog-top">
			   <div class="blog-single">
					<div class="single-img">
					 
					<form action="" method="POST">
						<div >
					</form>
					
				</div>
				
		   </div>
		   <div class="single">
			<!-- <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				
				<ins class="adsbygoogle"
					 style="display:block"
					 data-ad-client="ca-pub-3940737792688252"
					 data-ad-slot="8606749965"
					 data-ad-format="link"></ins>
				<script>
				(adsbygoogle = window.adsbygoogle || []).push({});
				</script>-->
						<div class="leave" style="padding-bottom:50px;">
							<div class="wow slideInUp"  data-wow-duration="1s" data-wow-delay=".3s">
							<div class="container">
		<div class="row">
			<div class="[ col-xs-14 col-sm-offset-2 col-sm-8 ]">
				<ul class="event-list">
					<li>
						<time datetime="2014-07-20">
							<span class="day">8</span>
							<span class="month">OCT</span>
							<span class="year">2018</span>
							<span class="time">00:00</span>
						</time>
						<img alt="Independence Day" src="images/puja.jpg" />
						<div class="info">
							<h2 class="title">Celebrating Biggest Festive Season of India</h2>
							<p class="desc" style="font-size:15px;">Let's celebrate this festive season with Techtravellers and be a techtraveller.
											This is for first time , there are no age limits. anyone can create and share their own diaries. </p>
						</div>
						<!--<div class="social">
							<ul>
								<li class="facebook" style="width:33%;"><a href="#facebook"><span class="fa fa-facebook"></span></a></li>
								<li class="twitter" style="width:34%;"><a href="#twitter"><span class="fa fa-twitter"></span></a></li>
								<li class="google-plus" style="width:33%;"><a href="#google-plus"><span class="fa fa-google-plus"></span></a></li>
							</ul>
						</div>-->
					</li>

					
				</ul>
			</div>
		</div>
	</div>

								<div class="container" style="font-family: 'Montserrat', sans-seri;">
										
										<label style="font-size:25px"><b>Celebrating Biggest Festive Season of India</b></label>
										<p style="font-size:15px;">Let's celebrate this festive season with Techtravellers and be a techtraveller.
											This is for first time , there are no age limits. anyone can create and share their own diaries. 
										</p>
										<ul type="disc" style="font-size:15px;font-family: 'Noto Serif', serif;">
											<li>You can create idol diaries ... </li>
											<li>You can create your Selfie Diaries</li>
											<li>You can create Pandal Hoping(Pujo Porikroma) Diaries... </li>
											<li>You can create Crackers Diaries..</li>
											<li>You can create Diwali Diaries...</li>
											<li>You can create Travel Diaries...</li>
											<li>and so on....</li>
										</ul>
										<br>
										<p>Share the diaries with your friends , relatives , neighbours, parents ..... A get more views.....

											More views and more chances to increase your badge and more close to win exisiting prize. </p>
											<hr>
										<p>
											<strong>What is Diary ???</strong><br>
											Every year we are collecting lots of memories while we are celebrating festive seasons. This year create stunning diaries with your great memories. Just like a 
											real diary, create diary with photos or write your own words with photos or Write your amazing experience or write or can create diaries with your previous year 
											memories also.And share your with others ..... <br>   
											<strong>Most Important :</strong> Celebrate your post festive season with exisiting prizes.
										</p>
								</div>
								
								<!--<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
								
								<ins class="adsbygoogle"
									 style="display:block"
									 data-ad-client="ca-pub-3940737792688252"
									 data-ad-slot="8606749965"
									 data-ad-format="link"></ins>
								<script>
								(adsbygoogle = window.adsbygoogle || []).push({});
								</script>-->
							</div>
							
							
						</div>
						
						
			
			 </div>
                 
		</div>
		
	  </div>
	  
	</div>
<!--footer-->
		<?php 
		
			include "footer.php";
		
		?>
		<!--start-smooth-scrolling-->
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
								<!--end-smooth-scrolling-->
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

</body>
</html>