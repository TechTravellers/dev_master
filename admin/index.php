<!DOCTYPE html>
<html lang="zxx">
<head>
<title>TechTraveller | Admin Login  ::</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Esteem Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<?php include "library.php";?>
</head>
<body>
<!-- banner -->
<div class="wthree_agile_admin_info">
		  <!-- /w3_agileits_top_nav-->
		  <!-- /nav-->
		  <div class="w3_agileits_top_nav">
			<ul id="gn-menu" class="gn-menu-main">

				<!-- //nav_agile_w3l -->
                <li class="second logo admin"><h1><a href="main-page.html"><i class="fa fa-graduation-cap" aria-hidden="true"></i>TechTraveller Admin Panel </a></h1></li>
					
				<li class="second w3l_search admin_login">
				 
						<!--<form action="#" method="post">
							<input type="search" name="search" placeholder="Search here..." required="">
							<button class="btn btn-default" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
						</form>-->
					
				</li>
				<li class="second full-screen">
					<section class="full-top">
						<button id="toggle"><i class="fa fa-arrows-alt" aria-hidden="true"></i></button>	
					</section>
				</li>

			</ul>
			<!-- //nav -->
			
		</div>
		<div class="clearfix"></div>
		<!-- //w3_agileits_top_nav-->
		
		<!-- /inner_content-->
				<div class="inner_content">
				    <!-- /inner_content_w3_agile_info-->
					<div class="inner_content_w3_agile_info">
					

							<div class="registration admin_agile">
								
												<div class="signin-form profile admin">
													<h2>Admin Login</h2>
													<div class="login-form">
														<form action="#" method="post">
															<input type="email" name="email" id="email" placeholder="Eg: travel@techtraveller.com" required="">
															<input type="password" name="password" id="password" placeholder="Password" required="">
															<div class="tp">
																<input type="submit" id="login" value="LOGIN">
															</div>
															
														</form>
													</div>
													<div class="login-social-grids admin_w3">
														<ul>
															<li><a href="#"><i class="fa fa-facebook"></i></a></li>
															<li><a href="#"><i class="fa fa-twitter"></i></a></li>
															<li><a href="#"><i class="fa fa-rss"></i></a></li>
														</ul>
													</div>
												
													<!-- <h6><a href="main-page.html">Back To Home</a><h6>-->

													 
												</div>

					

				    </div>
					<!-- //inner_content_w3_agile_info-->
				</div>
		<!-- //inner_content-->
	</div>
<!-- banner -->
<!--copy rights start here-->
<?php include "footer.php";?>
<!--copy rights end here-->
<!-- js -->

          
		  
	   
			
			 
				
<!-- //js -->

		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});	
			$('#login').click(function (e) {
				e.preventDefault();
				var email = $("#email").val();
				var password = $("#password").val();
				
					
				$.ajax({
					url: "query/loginCheck.php",
					type: "post",
					data: "email="+email+"&password="+password,
					success: function (response) {
						//alert(response);
						if(response == 1){
							 alertify.alert(
								'TechTraveller', 'Your have logged in sucessfully!', 
								function(){
									window.location = "dashboard.php";
									alertify.success('Welcome Back'); 
								}
							); 
						}else{
							 alertify.alert(
								'TechTraveller', 'Wrong Username or Password!', 
								function(){
									window.location = "index.php";
									//alertify.success('Welcome Back'); 
								}
							); 
						}
						
					},
					error: function(jqXHR, textStatus, errorThrown) {
					   console.log(textStatus, errorThrown);
					}
				});
			});	
		});
		
</script>



</body>
</html>