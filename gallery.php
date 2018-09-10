<?php 
session_start();
include "db/db_connect.php";
$ipaddress = $_SERVER["REMOTE_ADDR"];
?>

<base href="http://techtravellers.com/index">
<!--<base href="http://localhost/techtraveller/index">-->

<!DOCTYPE HTML>
<html>
<head>
<title>TechTravellers : Gallery</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Tours Travel Traveller Tourism Trip Tripper Blog Blogger" />
<script type="applisalonion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<?php 
	include "library.php";
	
?>
<link rel="stylesheet" href="css/gallery.css">
<!--<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">-->
<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
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
<script data-cfasync='false' type='text/javascript' src='//p305405.clksite.com/adServe/banners?tid=305405_595782_1&type=footer&size=37'></script>
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
									<li class=""><a data-hover="Home" href="index">Home</a></li>
									<li><a data-hover="Stories" href="stories">Stories</a></li>
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
        <!--<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	
	<ins class="adsbygoogle"
		 style="display:block"
		 data-ad-client="ca-pub-3940737792688252"
		 data-ad-slot="7772084721"
		 data-ad-format="auto"></ins>
	<script>
	(adsbygoogle = window.adsbygoogle || []).push({});
	</script>-->	
        <!--blog-section-->
              <div class="blog-section">
                        <div class="container">
                <div class="row">
                    <center><label style="font-size: 30px;color:#146139; text-shadow: 0 0 3px #146139;">Monsoon Photography Contest Gallery</label></center>
                        <p id="demo" style=" text-align: center;font-size: 60px;margin-top:0px;"></p>
               <div class="gallery">
                
                <?php 
						$sqlVotes = "select image_no,sum(votes) as votes from imagevotes group by image_no order by count(*) desc";
						$resultVotes = mysqli_query($con,$sqlVotes);
						$i=1;
						while($rowVotes = mysqli_fetch_assoc($resultVotes)){
							$votes = $rowVotes['votes'];
							$image_no = $rowVotes['image_no'];
							$sqlImage = "select * from images where image_size != 0 and image_no ='$image_no'";
							//echo $sqlImage;
							$resultImage = mysqli_query($con,$sqlImage);
							$row = mysqli_fetch_assoc($resultImage);
								if($row['image_no']!=null){
									if($i == 1){
									?>
									<figure>
					<!--                    <img src="https://images.unsplash.com/photo-1448814100339-234df1d4005d?crop=entropy&fit=crop&fm=jpg&h=400&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=600" alt="" />-->
											<img src="uploads/<?php echo $row['image_no'].".".$row["image_ext"];?>"  class="img-responsive" alt="Responsive image"/>
										<p>
											<label ><img src="images/winner.gif"></label><br>
											<label style="font-size: 16px; font-family: 'Open Sans Condensed', sans-serif;">Photographer Name : <?php echo $row['name'];?></label><br>
											<label style="font-size: 16px; font-family: 'Open Sans Condensed', sans-serif;">Total Votes : <?php echo $votes;?></label><br>
											<!--<label style="font-size: 16px; font-family: 'Open Sans Condensed', sans-serif;">Total Views : <?php echo $currentView;?></label>-->
										</p>
										<figcaption>Daytona Beach <small>United States</small></figcaption>
									</figure>
								<?php
									}else{
								?>
									<figure>
						<!--                    <img src="https://images.unsplash.com/photo-1448814100339-234df1d4005d?crop=entropy&fit=crop&fm=jpg&h=400&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=600" alt="" />-->
												<img src="uploads/<?php echo $row['image_no'].".".$row["image_ext"];?>"  class="img-responsive" alt="Responsive image"/>
											<p>
											   <!-- <label style="font-size: 22px; font-family: 'Open Sans Condensed', sans-serif;">Tap Here for Vote this Image : </label><a href="submitVoteFromGallery.php?image_no=<?php echo $image_no?>"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a>--><br>
												<label style="font-size: 16px; font-family: 'Open Sans Condensed', sans-serif;">Photographer Name : <?php echo $row['name'];?></label><br>
												<label style="font-size: 16px; font-family: 'Open Sans Condensed', sans-serif;">Total Votes : <?php echo $votes;?></label><br>
												<!--<label style="font-size: 16px; font-family: 'Open Sans Condensed', sans-serif;">Total Views : <?php echo $currentView;?></label>-->
											</p>
											<figcaption>Daytona Beach <small>United States</small></figcaption>
										</figure>
								<?php
								}
								$i++;								
									
                ?>
                        
                <?php 
								}
                    }
                ?>    
                    
                
                </div>
        <!--<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            
            <ins class="adsbygoogle"
                     style="display:block"
                     data-ad-client="ca-pub-3940737792688252"
                     data-ad-slot="7772084721"
                     data-ad-format="auto"></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
	</script>-->

<!--                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="display:none;">
                  <symbol id="close" viewBox="0 0 18 18">
                    <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" d="M9,0.493C4.302,0.493,0.493,4.302,0.493,9S4.302,17.507,9,17.507
                                        S17.507,13.698,17.507,9S13.698,0.493,9,0.493z M12.491,11.491c0.292,0.296,0.292,0.773,0,1.068c-0.293,0.295-0.767,0.295-1.059,0
                                        l-2.435-2.457L6.564,12.56c-0.292,0.295-0.766,0.295-1.058,0c-0.292-0.295-0.292-0.772,0-1.068L7.94,9.035L5.435,6.507
                                        c-0.292-0.295-0.292-0.773,0-1.068c0.293-0.295,0.766-0.295,1.059,0l2.504,2.528l2.505-2.528c0.292-0.295,0.767-0.295,1.059,0
                                        s0.292,0.773,0,1.068l-2.505,2.528L12.491,11.491z"/>
                  </symbol>
                </svg>-->
                <!--POP Up Jquery Code -->
                            <script>
//                                popup = {
//                                    init: function(){
//                                      $('figure').click(function(){
//                                        popup.open($(this));
//                                      });
//
//                                      $(document).on('click', '.popup img', function(){
//                                        return false;
//                                      }).on('click', '.popup', function(){
//                                        popup.close();
//                                      })
//                              },
//                              open: function($figure) {
//                                $('.gallery').addClass('pop');
//                                $popup = $('<div class="popup" />').appendTo($('body'));
//                                $fig = $figure.clone().appendTo($('.popup'));
//                                $bg = $('<div class="bg" />').appendTo($('.popup'));
//                                $close = $('<div class="close"><svg><use xlink:href="#close"></use></svg></div>').appendTo($fig);
//                                $shadow = $('<div class="shadow" />').appendTo($fig);
//                                src = $('img', $fig).attr('src');
//                                $shadow.css({backgroundImage: 'url(' + src + ')'});
//                                $bg.css({backgroundImage: 'url(' + src + ')'});
//                                setTimeout(function(){
//                                  $('.popup').addClass('pop');
//                                }, 10);
//                              },
//                              close: function(){
//                                $('.gallery, .popup').removeClass('pop');
//                                setTimeout(function(){
//                                  $('.popup').remove()
//                                }, 100);
//                              }
//                            }
//
//                            popup.init()

                            </script>
                                
                        </div>
                </div>
	</div>
<!--footer-->
		<?php include 'footer.php';?>
		
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

</body>
</html>