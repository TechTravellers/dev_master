<?php 
session_start();
require_once('class.phpmailer.php');
$ipaddress = $_SERVER["REMOTE_ADDR"];
?>
<!DOCTYPE HTML>
<html>
<head>
<title>TechTravellers</title>
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
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//animate-->

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
								<li><a data-hover="Photos" href="addPhoto" >Photos</a></li>
								

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
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<!-- Horizontal -->
		<ins class="adsbygoogle"
			 style="display:block"
			 data-ad-client="ca-pub-3940737792688252"
			 data-ad-slot="8606749965"
			 data-ad-format="link"></ins>
		<script>
		(adsbygoogle = window.adsbygoogle || []).push({});
		</script>
		<div class="container">
		  <h2 class="single">Thanks for Submit the Photo.</h2>
		   <div class="blog-top">
			   <div class="blog-single">
					<div class="single-img">
					 <!--<a href="#">
					  <img src="images/banner.jpg" alt="">
					</a>-->
                     <!--   <h3 class="wow slideInUp"  data-wow-duration="1s" data-wow-delay=".3s">It is established fact that a reader will distract.</h3>
					   <p class="post wow slideInDown"  data-wow-duration="1s" data-wow-delay=".3s">Posted on Mar 30, 2016 by <a href="#">Admin</a></p>
					   <p Class="wow slideInUp"  data-wow-duration="1s" data-wow-delay=".3s">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore,consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore,consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation consequat.</p>				                     
					-->
					<form action="" method="POST">
						<div >
					</form>
					
				</div>
				
		   </div>
		   <div class="single">
						<div class="leave" style="padding-bottom:50px;">
							<h4 class="wow slideInUp"  data-wow-duration="1s" data-wow-delay=".3s">Use the below mentioned link for voting</h4>
							<br>
							<div>
								<label>
									
									<a href="showImage.php?image_no=<?php echo $_SESSION['image_no'];?>">http://<?php echo "techtravellers.com";?>/showImage.php?image_no=<?php echo $_SESSION['image_no'];?></a>
									<?php 
										 $name = $_SESSION['name'];
										 $email = $_SESSION['email'];
										 $url='http://techtravellers.com/showImage.php?image_no='.$_SESSION['image_no'].'</a>';
										 sendMail($url,$email,$name);
									?>
								</label>
							</div>
						</div>
						
							<table>
								<tr>
									<td>
										<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
										<!-- Rectangle -->
										<ins class="adsbygoogle"
											 style="display:inline-block;width:336px;height:280px"
											 data-ad-client="ca-pub-3940737792688252"
											 data-ad-slot="6155750729"></ins>
										<script>
										(adsbygoogle = window.adsbygoogle || []).push({});
										</script>
									</td>
									<td>
										<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
										<!-- Rectangle -->
										<ins class="adsbygoogle"
											 style="display:inline-block;width:336px;height:280px"
											 data-ad-client="ca-pub-3940737792688252"
											 data-ad-slot="6155750729"></ins>
										<script>
										(adsbygoogle = window.adsbygoogle || []).push({});
										</script>
									</td>
									<td>
										<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
										<!-- Rectangle -->
										<ins class="adsbygoogle"
											 style="display:inline-block;width:336px;height:280px"
											 data-ad-client="ca-pub-3940737792688252"
											 data-ad-slot="6155750729"></ins>
										<script>
										(adsbygoogle = window.adsbygoogle || []).push({});
										</script>
									</td>
								</tr>
							</table>

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
<?php
//sendMail($url,$email,$name);
function sendMail($photoLink,$email,$name){
	require 'class.smtp.php';

        //   $mail = new PHPMailer();
		$mail             = new PHPMailer();

//$body             = eregi_replace("[\]",'',$body);

$body = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="format-detection" content="telephone=no" /> <!-- disable auto telephone linking in iOS -->
		<title>Respmail is a response HTML email designed to work on all major email platforms and smartphones</title>
		<style type="text/css">
			/* RESET STYLES */
			html { background-color:#E1E1E1; margin:0; padding:0; }
			body, #bodyTable, #bodyCell, #bodyCell{height:100% !important; margin:0; padding:0; width:100% !important;font-family:Helvetica, Arial, "Lucida Grande", sans-serif;}
			table{border-collapse:collapse;}
			table[id=bodyTable] {width:100%!important;margin:auto;max-width:500px!important;color:#7A7A7A;font-weight:normal;}
			img, a img{border:0; outline:none; text-decoration:none;height:auto; line-height:100%;}
			a {text-decoration:none !important;border-bottom: 1px solid;}
			h1, h2, h3, h4, h5, h6{color:#5F5F5F; font-weight:normal; font-family:Helvetica; font-size:20px; line-height:125%; text-align:Left; letter-spacing:normal;margin-top:0;margin-right:0;margin-bottom:10px;margin-left:0;padding-top:0;padding-bottom:0;padding-left:0;padding-right:0;}

			/* CLIENT-SPECIFIC STYLES */
			.ReadMsgBody{width:100%;} .ExternalClass{width:100%;} /* Force Hotmail/Outlook.com to display emails at full width. */
			.ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div{line-height:100%;} /* Force Hotmail/Outlook.com to display line heights normally. */
			table, td{mso-table-lspace:0pt; mso-table-rspace:0pt;} /* Remove spacing between tables in Outlook 2007 and up. */
			#outlook a{padding:0;} /* Force Outlook 2007 and up to provide a "view in browser" message. */
			img{-ms-interpolation-mode: bicubic;display:block;outline:none; text-decoration:none;} /* Force IE to smoothly render resized images. */
			body, table, td, p, a, li, blockquote{-ms-text-size-adjust:100%; -webkit-text-size-adjust:100%; font-weight:normal!important;} /* Prevent Windows- and Webkit-based mobile platforms from changing declared text sizes. */
			.ExternalClass td[class="ecxflexibleContainerBox"] h3 {padding-top: 10px !important;} /* Force hotmail to push 2-grid sub headers down */

			/* /\/\/\/\/\/\/\/\/ TEMPLATE STYLES /\/\/\/\/\/\/\/\/ */

			/* ========== Page Styles ========== */
			h1{display:block;font-size:26px;font-style:normal;font-weight:normal;line-height:100%;}
			h2{display:block;font-size:20px;font-style:normal;font-weight:normal;line-height:120%;}
			h3{display:block;font-size:17px;font-style:normal;font-weight:normal;line-height:110%;}
			h4{display:block;font-size:18px;font-style:italic;font-weight:normal;line-height:100%;}
			.flexibleImage{height:auto;}
			.linkRemoveBorder{border-bottom:0 !important;}
			table[class=flexibleContainerCellDivider] {padding-bottom:0 !important;padding-top:0 !important;}

			body, #bodyTable{background-color:#E1E1E1;}
			#emailHeader{background-color:#E1E1E1;}
			#emailBody{background-color:#FFFFFF;}
			#emailFooter{background-color:#E1E1E1;}
			.nestedContainer{background-color:#F8F8F8; border:1px solid #CCCCCC;}
			.emailButton{background-color:#205478; border-collapse:separate;}
			.buttonContent{color:#FFFFFF; font-family:Helvetica; font-size:18px; font-weight:bold; line-height:100%; padding:15px; text-align:center;}
			.buttonContent a{color:#FFFFFF; display:block; text-decoration:none!important; border:0!important;}
			.emailCalendar{background-color:#FFFFFF; border:1px solid #CCCCCC;}
			.emailCalendarMonth{background-color:#205478; color:#FFFFFF; font-family:Helvetica, Arial, sans-serif; font-size:16px; font-weight:bold; padding-top:10px; padding-bottom:10px; text-align:center;}
			.emailCalendarDay{color:#205478; font-family:Helvetica, Arial, sans-serif; font-size:60px; font-weight:bold; line-height:100%; padding-top:20px; padding-bottom:20px; text-align:center;}
			.imageContentText {margin-top: 10px;line-height:0;}
			.imageContentText a {line-height:0;}
			#invisibleIntroduction {display:none !important;} /* Removing the introduction text from the view */

			/*FRAMEWORK HACKS & OVERRIDES */
			span[class=ios-color-hack] a {color:#275100!important;text-decoration:none!important;} /* Remove all link colors in IOS (below are duplicates based on the color preference) */
			span[class=ios-color-hack2] a {color:#205478!important;text-decoration:none!important;}
			span[class=ios-color-hack3] a {color:#8B8B8B!important;text-decoration:none!important;}
			
			.a[href^="tel"], a[href^="sms"] {text-decoration:none!important;color:#606060!important;pointer-events:none!important;cursor:default!important;}
			.mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {text-decoration:none!important;color:#606060!important;pointer-events:auto!important;cursor:default!important;}


			/* MOBILE STYLES */
			@media only screen and (max-width: 480px){
				/*////// CLIENT-SPECIFIC STYLES //////*/
				body{width:100% !important; min-width:100% !important;} /* Force iOS Mail to render the email at full width. */

				/* FRAMEWORK STYLES */
				/*
				CSS selectors are written in attribute
				selector format to prevent Yahoo Mail
				from rendering media query styles on
				desktop.
				*/
				/*td[class="textContent"], td[class="flexibleContainerCell"] { width: 100%; padding-left: 10px !important; padding-right: 10px !important; }*/
				table[id="emailHeader"],
				table[id="emailBody"],
				table[id="emailFooter"],
				table[class="flexibleContainer"],
				td[class="flexibleContainerCell"] {width:100% !important;}
				td[class="flexibleContainerBox"], td[class="flexibleContainerBox"] table {display: block;width: 100%;text-align: left;}
				
				td[class="imageContent"] img {height:auto !important; width:100% !important; max-width:100% !important; }
				img[class="flexibleImage"]{height:auto !important; width:100% !important;max-width:100% !important;}
				img[class="flexibleImageSmall"]{height:auto !important; width:auto !important;}


				/*
				Create top space for every second element in a block
				*/
				table[class="flexibleContainerBoxNext"]{padding-top: 10px !important;}

				/*
				Make buttons in the email span the
				full width of their container, allowing
				for left- or right-handed ease of use.
				*/
				table[class="emailButton"]{width:100% !important;}
				td[class="buttonContent"]{padding:0 !important;}
				td[class="buttonContent"] a{padding:15px !important;}

			}

			/*  CONDITIONS FOR ANDROID DEVICES ONLY
			*   http://developer.android.com/guide/webapps/targeting.html
			*   http://pugetworks.com/2011/04/css-media-queries-for-targeting-different-mobile-devices/ ;
			=====================================================*/

			@media only screen and (-webkit-device-pixel-ratio:.75){
				/* Put CSS for low density (ldpi) Android layouts in here */
			}

			@media only screen and (-webkit-device-pixel-ratio:1){
				/* Put CSS for medium density (mdpi) Android layouts in here */
			}

			@media only screen and (-webkit-device-pixel-ratio:1.5){
				/* Put CSS for high density (hdpi) Android layouts in here */
			}
			/* end Android targeting */

			/* CONDITIONS FOR IOS DEVICES ONLY
			=====================================================*/
			@media only screen and (min-device-width : 320px) and (max-device-width:568px) {

			}
			/* end IOS targeting */
		</style>
		
		<!--[if mso 12]>
			<style type="text/css">
				.flexibleContainer{display:block !important; width:100% !important;}
			</style>
		<![endif]-->
		<!--[if mso 14]>
			<style type="text/css">
				.flexibleContainer{display:block !important; width:100% !important;}
			</style>
		<![endif]-->
	</head>
	<body bgcolor="#E1E1E1" leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0">
			<center style="background-color:#E1E1E1;">
			<table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable" style="table-layout: fixed;max-width:100% !important;width: 100% !important;min-width: 100% !important;">
				<tr>
					<td align="center" valign="top" id="bodyCell">

						<!-- EMAIL HEADER // -->
						
						<table bgcolor="#E1E1E1" border="0" cellpadding="0" cellspacing="0" width="500" id="emailHeader">

							<!-- HEADER ROW // -->
							<tr>
								<td align="center" valign="top">
									<!-- CENTERING TABLE // -->
									<table border="0" cellpadding="0" cellspacing="0" width="100%">
										<tr>
											<td align="center" valign="top">
												<!-- FLEXIBLE CONTAINER // -->
												<table border="0" cellpadding="10" cellspacing="0" width="500" class="flexibleContainer">
													<tr>
														<td valign="top" width="500" class="flexibleContainerCell">

															<!-- CONTENT TABLE // -->
															<table align="left" border="0" cellpadding="0" cellspacing="0" width="100%">
																<tr>
																	<!--
																		The "invisibleIntroduction" is the text used for short preview
																		of the email before the user opens it (50 characters max). Sometimes,
																		you do not want to show this message depending on your design but this
																		text is highly recommended.

																		You do not have to worry if it is hidden, the next <td> will automatically
																		center and apply to the width 100% and also shrink to 50% if the first <td>
																		is visible.
																	-->
																	<td align="left" valign="middle" id="invisibleIntroduction" class="flexibleContainerBox" style="display:none !important; mso-hide:all;">
																		<table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:100%;">
																			<tr>
																				<td align="left" class="textContent">
																					<div style="font-family:Helvetica,Arial,sans-serif;font-size:13px;color:#828282;text-align:center;line-height:120%;">
																						The introduction of your message preview goes here. Try to make it short.
																					</div>
																				</td>
																			</tr>
																		</table>
																	</td>
																	<td align="right" valign="middle" class="flexibleContainerBox">
																		<table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:100%;">
																			<tr>
																				<td align="left" class="textContent">
																					<!-- CONTENT // -->
																					<div style="font-family:Helvetica,Arial,sans-serif;font-size:13px;color:#828282;text-align:center;line-height:120%;">
																						If you can not see this message, <a href="#" target="_blank" style="text-decoration:none;border-bottom:1px solid #828282;color:#828282;"><span style="color:#828282;">view&nbsp;it&nbsp;in&nbsp;your&nbsp;browser</span></a>.
																					</div>
																				</td>
																			</tr>
																		</table>
																	</td>
																</tr>
															</table>
														</td>
													</tr>
												</table>
												<!-- // FLEXIBLE CONTAINER -->
											</td>
										</tr>
									</table>
									<!-- // CENTERING TABLE -->
								</td>
							</tr>
							<!-- // END -->

						</table>
						<!-- // END -->

						<!-- EMAIL BODY // -->
						
						<table bgcolor="#FFFFFF"  border="0" cellpadding="0" cellspacing="0" width="500" id="emailBody">

							
							<tr>
								<td align="center" valign="top">
									
									<table border="0" cellpadding="0" cellspacing="0" width="100%" style="color:#FFFFFF;" bgcolor="#3498db">
										<tr>
											<td align="center" valign="top">
												
												<table border="0" cellpadding="0" cellspacing="0" width="500" class="flexibleContainer">
													<tr>
														<td align="center" valign="top" width="500" class="flexibleContainerCell">

															
															<table border="0" cellpadding="30" cellspacing="0" width="100%">
																<tr>
																	<td align="center" valign="top" class="textContent">
																		<h1 style="color:#FFFFFF;line-height:100%;font-family:Helvetica,Arial,sans-serif;font-size:35px;font-weight:normal;margin-bottom:5px;text-align:center;">Welcome to TechTraveller</h1>
																		<h2 style="text-align:center;font-weight:normal;font-family:Helvetica,Arial,sans-serif;font-size:23px;margin-bottom:10px;color:#205478;line-height:135%;"></h2>
																		<!--<div style="text-align:center;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#FFFFFF;line-height:135%;">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.</div>-->
																	</td>
																</tr>
															</table>
															<!-- // CONTENT TABLE -->

														</td>
													</tr>
												</table>
												<!-- // FLEXIBLE CONTAINER -->
											</td>
										</tr>
										<tr>
								<td align="center" valign="top">
									<!-- CENTERING TABLE // -->
									<table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#F8F8F8">
										<tr>
											<td align="center" valign="top">
												<!-- FLEXIBLE CONTAINER // -->
												<table border="0" cellpadding="0" cellspacing="0" width="500" class="flexibleContainer">
													<tr>
														<td align="center" valign="top" width="500" class="flexibleContainerCell">
															<table border="0" cellpadding="30" cellspacing="0" width="100%">
																<tr>
																	<td align="center" valign="top">

																		<!-- CONTENT TABLE // -->
																		<table border="0" cellpadding="0" cellspacing="0" width="100%">
																			<tr>
																				<td valign="top" class="textContent">
																					<!--
																						The "mc:edit" is a feature for MailChimp which allows
																						you to edit certain row. It makes it easy for you to quickly edit row sections.
																						http://kb.mailchimp.com/templates/code/create-editable-content-areas-with-mailchimps-template-language
																					-->
																					<h3 mc:edit="header" style="color:#5F5F5F;line-height:125%;font-family:Helvetica,Arial,sans-serif;font-size:20px;font-weight:normal;margin-top:0;margin-bottom:3px;text-align:left;"></h3>
																					<div mc:edit="body" style="text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;">Thanks you for using TechTraveller.Your photo link is '.$photoLink.'</div>
																				</td>
																			</tr>
																		</table>
																		<!-- // CONTENT TABLE -->

																	</td>
																</tr>
															</table>
														</td>
													</tr>
												</table>
												<!-- // FLEXIBLE CONTAINER -->
											</td>
										</tr>
									</table>
									<!-- // CENTERING TABLE -->
								</td>
							</tr>
									</table>
									<!-- // CENTERING TABLE -->
								</td>
							</tr>
							<!-- // MODULE ROW -->
<tr>
								<td align="center" valign="top">
									<!-- CENTERING TABLE // -->
									<table border="0" cellpadding="0" cellspacing="0" width="100%">
										<tr>
											<td align="center" valign="top">
												<!-- FLEXIBLE CONTAINER // -->
												<table border="0" cellpadding="30" cellspacing="0" width="500" class="flexibleContainer">
													<tr>
														<td valign="top" width="500" class="flexibleContainerCell">

															<!-- CONTENT TABLE // -->
															<table align="left" border="0" cellpadding="0" cellspacing="0" width="100%">
																<tr>
																	<td align="left" valign="top" class="flexibleContainerBox">
																		<table border="0" cellpadding="0" cellspacing="0" width="210" style="max-width: 100%;">
																			<tr>
																				<td align="left" class="textContent">
																					<h3 style="color:#5F5F5F;line-height:125%;font-family:Helvetica,Arial,sans-serif;font-size:20px;font-weight:normal;margin-top:0;margin-bottom:3px;text-align:left;">Best Wishes</h3>
																					<div style="text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;">TechTraveller Team</div>
																				</td>
																			</tr>
																		</table>
																	</td>
																	
																</tr>
															</table>
															<!-- // CONTENT TABLE -->

														</td>
													</tr>
												</table>
												<!-- // FLEXIBLE CONTAINER -->
											</td>
										</tr>
									</table>
									<!-- // CENTERING TABLE -->
								</td>
							</tr>

							
							
							<!-- // MODULE ROW -->


							<!-- MODULE ROW // -->
							

						</table>
						<!-- // END -->

					</td>
				</tr>
			</table>
		</center>
		
	</body>
</html>
';

$mail->IsSMTP(); // telling the class to use SMTP
//$mail->Host       = "mail.kkservice.in"; // SMTP server
$mail->SMTPDebug  = 1;                     // enables SMTP debug information (for testing)
                                           // 1 = errors and messages
                                           // 2 = messages only
$mail->SMTPAuth   = true;   
$mail->SMTPSecure = "ssl";               // enable SMTP authentication
$mail->Host       = "sg2plcpnl0213.prod.sin2.secureserver.net"; // sets the SMTP server
$mail->Port       = 465;                    // set the SMTP port for the GMAIL server
$mail->Username   = "support@techtravellers.com"; // SMTP account username
$mail->Password   = "Password1$";        // SMTP account password

$mail->SetFrom('support@techtravellers.com', 'TechTraveller');

//$mail->AddReplyTo("arnabmajumderkol@gmail.com","First Last");

$mail->Subject    = "Welcome to TechTraveller";

$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

$mail->MsgHTML($body);

$address = $email;
$mail->AddAddress($email, $name);
//$mail->AddBCC("arnabmajumderkol@gmail.com", $name);


if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  //echo "Message sent!";
}
}	
?>