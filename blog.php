<?php 
session_start();
include "db/db_connect.php";
$ipaddress = $_SERVER["REMOTE_ADDR"];
?>

<base href="http://techtravellers.com/index">
<!--<base href="http://localhost/techtraveller/index">-->
<?php 
        $title = str_replace('-', ' ', $_GET['title']);
        $sql = "select * from blog_details where title = '$title'";
        //echo $title;
        $result = mysqli_query($con,$sql);
        $i=1;
        $row = mysqli_fetch_assoc($result);
        $date = $row['date'];
        $blog_id = $row['blog_id'];
        $newTitle = str_replace(' ', '-', $row['title']);
?>
<!DOCTYPE HTML>
<html>
<head>
<title>TechTravellers : <?php echo $title;?></title>
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
<link href='http://fonts.googleapis.com/css?family=Berkshire+Swash' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lobster+Two' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">
<style>
.blog-heading{
 font: 400 35px/1.3 'Berkshire Swash', Helvetica, sans-serif;
  color: #2b2b2b;
  text-shadow: 1px 1px 0px #ededed, 4px 4px 0px rgba(0,0,0,0.15);
}
.story{
font: 400 100px/1.3 'Lobster Two', Helvetica, sans-serif;
  color: #2b2b2b;
  text-shadow: 1px 1px 0px #ededed, 4px 4px 0px rgba(0,0,0,0.15);
}
.blog-content{
	font-family: 'Merienda', cursive;
}
</style>
<script data-cfasync='false' type='text/javascript' src='//p305405.clksite.com/adServe/banners?tid=305405_595782_2&type=slider&side=right&size=17'></script>
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
		  <h2 class="single story">Your Story</h2>
		   <div class="blog-top">
			   <div class="col-md-14 col-sm-14 col-lg-14">
					<div class="col-md-8 col-sm-8 col-lg-8">
						 <!--<a href="#">
						  <img src="images/banner.jpg" alt="">
						</a>-->
						
                                                   <h3 class="wow slideInUp blog-heading"  data-wow-duration="1s" data-wow-delay=".3s"><?php echo $row['title'];?></h3>
						   <p class="post wow slideInDown"  data-wow-duration="1s" data-wow-delay=".3s">Posted on <?php echo date('j F', strtotime($date)).", ".date('Y', strtotime($date));?> by <a><?php echo $row['name'];?></a></p>
						   <br>
						   <div id="fb-root"></div>
						  <script>(function(d, s, id) {
							var js, fjs = d.getElementsByTagName(s)[0];
							if (d.getElementById(id)) return;
							js = d.createElement(s); js.id = id;
							js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
							fjs.parentNode.insertBefore(js, fjs);
						  }(document, 'script', 'facebook-jssdk'));</script>
						  <!-- Your share button code -->
						  <div class="fb-share-button" data-href="http://techtravellers.com/blog/<?php echo $newTitle;?>" data-layout="button" data-size="large" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.facebook.com%2FTechTravellers2018%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
<!--						   <div  style="color:#34495E;font-size:14px;" class="blog-content">
									<?php 
                                                                           // echo htmlspecialchars_decode($row['story']);
                                                                                $string = strip_tags(htmlspecialchars_decode($row['story']));
                                                                             echo $string;
                                                                          ?>
						   </div>				                     -->
                                                    <?php 
                                                                           // echo htmlspecialchars_decode($row['story']);
                                                                                $string = strip_tags(htmlspecialchars_decode($row['story']));
                                                                             echo $row['story'];
                                                                          ?>
					</div>
					<div class="col-md-4 col-sm-4 col-lg-4">
							<!--<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
							
							<ins class="adsbygoogle"
								 style="display:block"
								 data-ad-client="ca-pub-3940737792688252"
								 data-ad-slot="7772084721"
								 data-ad-format="auto"></ins>
							<script>
								(adsbygoogle = window.adsbygoogle || []).push({});
							</script>
							<ins class="adsbygoogle"
								 style="display:block"
								 data-ad-client="ca-pub-3940737792688252"
								 data-ad-slot="7772084721"
								 data-ad-format="auto"></ins>
							<script>
								(adsbygoogle = window.adsbygoogle || []).push({});
							</script>-->	
							<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-page" data-href="https://www.facebook.com/TechTravellers2018/" data-tabs="timeline" data-height="550" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/TechTravellers2018/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/TechTravellers2018/">TechTravellers</a></blockquote></div>
					</div>
                               <div class="row">
                                   <?php 
                                        $sqlImages = "select * from blog_images where blog_id = '$blog_id'";
                                        //echo $sqlImages ;
                                        $resultImages=mysqli_query($con,$sqlImages);
                                        $no_images = mysqli_num_rows($resultImages);
                                                
                                        if ($no_images > 0){
                                            $i=1;
                                    ?>
                                        <div class="col-lg-12">
                                            <h1 class="page-header">Photos</h1>

                                            <div style="overflow-x: auto;width:50em;white-space: nowrap;">
   
                                   
                                    <?php
                                            while($rowImages = mysqli_fetch_assoc($resultImages)){
                                    ?>
                                            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                               <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="TechTravellers" data-caption="<?php echo $title;?>" data-image="admin/query/<?php echo $rowImages['image_url'];?>" data-target="#image-gallery">
<!--                                                   <img class="img-responsive" src="http://onelive.us/wp-content/uploads/2014/08/flower-delivery-online.jpg" alt="Short alt text">-->
                                                   <img class="img-responsive img-rounded" src="admin/query/<?php echo $rowImages['image_url'];?>" alt="<?php echo $title;?>" >
                                               </a>
                                           </div>
                                    <?php
                                            }
                                    ?>
                                            </div>
                                        </div>
                                    <?php
                                        }
                                        
                                   ?>
                                    


                                <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                                                <h4 class="modal-title" id="image-gallery-title"></h4>
                                            </div>
                                            <div class="modal-body">
                                                <img id="image-gallery-image" class="img-responsive" src="">
                                            </div>
                                            <div class="modal-footer">

                                                <div class="col-md-2">
                                                    <button type="button" class="btn btn-primary" id="show-previous-image">Previous</button>
                                                </div>

                                                <div class="col-md-8 text-justify" id="image-gallery-caption">
                                                    This text will be overwritten by jQuery
                                                </div>

                                                <div class="col-md-2">
                                                    <button type="button" id="show-next-image" class="btn btn-default">Next</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
				</div>
		  <!-- <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			
			<ins class="adsbygoogle"
				 style="display:block"
				 data-ad-client="ca-pub-3940737792688252"
				 data-ad-slot="7772084721"
				 data-ad-format="auto"></ins>
			<script>
				(adsbygoogle = window.adsbygoogle || []).push({});
			</script>-->	
		   <!--<div class="single">
						<div class="leave">
							<h4 class="wow slideInUp"  data-wow-duration="1s" data-wow-delay=".3s">Leave a comment</h4>
						</div>
						<form id="commentform">
							 <p class="comment-form-author-name"><label for="author">Name</label>
								<input id="author" name="author" type="text" value="" size="30" aria-required="true" required="">
							 </p>
							 <p class="comment-form-email wow slideInDown"  data-wow-duration="1s" data-wow-delay=".3s">
								<label class="email">Email</label>
								<input id="email" name="email" type="text" value="" size="30" aria-required="true" required="">
							 </p>
							 <p class="comment-form-comment wow slideInUp"  data-wow-duration="1s" data-wow-delay=".3s">
								<label class="comment">Comment</label>
								<textarea></textarea>
							 </p>
							 <div class="clearfix"></div>
							<p class="form-submit wow shake"  data-wow-duration="1s" data-wow-delay=".3s">
							   <input name="submit" type="submit" id="submit" value="Send">
							</p>
							<div class="clearfix"></div>
						   </form>
				 <div class="single_grid2">
					   <h4 class="tz-title-4 tzcolor-blue wow slideInUp"  data-wow-duration="1s" data-wow-delay=".3s">
							Comments
						</h4>
						<ul class="list">
						<li>
			            <div class="col-md-2 preview wow fadeInDown" data-wow-duration="1s" data-wow-delay=".3s"><a href="#"><img src="images/co.png" class="img-responsive" alt=""></a></div>
			            <div class="col-md-10 data">
			                <div class="title"><a href="#">Customer</a><br><span class="m_14">Apr 30, 2016</span></div>
			                <p class="wow fadeInDown" data-wow-duration="1s" data-wow-delay=".3s">Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature</p>
							<h5 class="m_26"> <a href="#" class="hvr-bounce-to-bottom">Reply</a></h5>
			            </div>
			           <div class="clearfix"></div>
			        </li>
			     	  <li>
			            <div class="col-md-2 preview wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s"><a href="#"><img src="images/co.png" class="img-responsive" alt=""></a></div>
			            <div class="col-md-10 data">
			                <div class="title"><a href="#">Customer</a><br><span class="m_14">May 2, 2016</span></div>
			                <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature</p>
							<h5 class="m_26"> <a href="#" class="hvr-bounce-to-bottom">Reply</a></h5>
			            </div>
			           <div class="clearfix"></div>
			        </li>
			        <li>
			            <div class="col-md-2 preview wow fadeInDown" data-wow-duration="1s" data-wow-delay=".3s"><a href="#"><img src="images/co.png" class="img-responsive" alt=""></a></div>
			            <div class="col-md-10 data">
			                <div class="title"><a href="#">Customer</a><br><span class="m_14">May 5, 2016</span></div>
			                <p class="wow fadeInDown" data-wow-duration="1s" data-wow-delay=".3s">Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature</p>
							<h5 class="m_26"> <a href="#" class="hvr-bounce-to-bottom">Reply</a></h5>
			            </div>
			           <div class="clearfix"></div>
			        </li>
			     </ul>
				</div>
			 </div>-->

		</div>
	  </div>
	</div>
<!--footer-->
		<?php include 'footer.php';?>
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
$(document).ready(function(){

    loadGallery(true, 'a.thumbnail');

    //This function disables buttons when needed
    function disableButtons(counter_max, counter_current){
        $('#show-previous-image, #show-next-image').show();
        if(counter_max == counter_current){
            $('#show-next-image').hide();
        } else if (counter_current == 1){
            $('#show-previous-image').hide();
        }
    }

    /**
     *
     * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
     * @param setClickAttr  Sets the attribute for the click handler.
     */

    function loadGallery(setIDs, setClickAttr){
        var current_image,
            selector,
            counter = 0;

        $('#show-next-image, #show-previous-image').click(function(){
            if($(this).attr('id') == 'show-previous-image'){
                current_image--;
            } else {
                current_image++;
            }

            selector = $('[data-image-id="' + current_image + '"]');
            updateGallery(selector);
        });

        function updateGallery(selector) {
            var $sel = selector;
            current_image = $sel.data('image-id');
            $('#image-gallery-caption').text($sel.data('caption'));
            $('#image-gallery-title').text($sel.data('title'));
            $('#image-gallery-image').attr('src', $sel.data('image'));
            disableButtons(counter, $sel.data('image-id'));
        }

        if(setIDs == true){
            $('[data-image-id]').each(function(){
                counter++;
                $(this).attr('data-image-id',counter);
            });
        }
        $(setClickAttr).on('click',function(){
            updateGallery($(this));
        });
    }
});
								</script>
								<!--end-smooth-scrolling-->
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

</body>
</html>