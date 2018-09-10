<?php 
session_start();
include "db/db_connect.php";
$ipaddress = $_SERVER["REMOTE_ADDR"];
?>
<base href="http://techtravellers.com/index">
<!DOCTYPE HTML>
<html>
<head>
<title>TechTravellers : Stories </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Tours Travel Traveller Tourism Trip Tripper Blog Blogger" />
<script type="applisalonion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<?php 
	include "library.php";
	
?>
<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
<!--/script-->
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
                                $(function () {
                                    $('.tree li:has(ul)').addClass('parent_li').find(' > span').attr('title', 'Collapse this branch');
                                    $('.tree li.parent_li > span').on('click', function (e) {
                                        var children = $(this).parent('li.parent_li').find(' > ul > li');
                                        if (children.is(":visible")) {
                                            children.hide('fast');
                                            $(this).attr('title', 'Expand this branch').find(' > i').addClass('icon-plus-sign').removeClass('icon-minus-sign');
                                        } else {
                                            children.show('fast');
                                            $(this).attr('title', 'Collapse this branch').find(' > i').addClass('icon-minus-sign').removeClass('icon-plus-sign');
                                        }
                                        e.stopPropagation();
                                    });
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
<style>
.tree {
    min-height:20px;
    padding:19px;
    margin-bottom:20px;
    background-color:#fbfbfb;
    border:1px solid #999;
    -webkit-border-radius:4px;
    -moz-border-radius:4px;
    border-radius:4px;
    -webkit-box-shadow:inset 0 1px 1px rgba(0, 0, 0, 0.05);
    -moz-box-shadow:inset 0 1px 1px rgba(0, 0, 0, 0.05);
    box-shadow:inset 0 1px 1px rgba(0, 0, 0, 0.05)
}
.tree li {
    list-style-type:none;
    margin:0;
    padding:10px 5px 0 5px;
    position:relative;
    
}
.tree li::before, .tree li::after {
    content:'';
    left:-20px;
    position:absolute;
    right:auto
}
.tree li::before {
    border-left:1px solid #999;
    bottom:50px;
    height:100%;
    top:0;
    width:1px
}
.tree li::after {
    border-top:1px solid #999;
    height:20px;
    top:25px;
    width:25px
}
.tree li span {
    -moz-border-radius:5px;
    -webkit-border-radius:5px;
    border:1px solid #999;
    border-radius:5px;
    display:inline-block;
    padding:3px 8px;
    text-decoration:none
}
.tree li.parent_li>span {
    cursor:pointer
}
.tree>ul>li::before, .tree>ul>li::after {
    border:0
}
.tree li:last-child::before {
    height:30px
}
.tree li.parent_li>span:hover, .tree li.parent_li>span:hover+ul li span {
    background:#eee;
    border:1px solid #94a0b4;
    color:#000
}
.well{
    background-color: #eee;
}
#demoFont {
        font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
        font-size: 24px;
        letter-spacing: 2px;
        word-spacing: -3.8px;
        color: #3D2CFF;
        font-weight: 700;
        text-decoration: underline solid rgb(68, 68, 68);
        font-style: normal;
        font-variant: normal;
        text-transform: none;
}

</style>
   
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
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<!-- Ads By Google -->
	<ins class="adsbygoogle"
		 style="display:block"
		 data-ad-client="ca-pub-3940737792688252"
		 data-ad-slot="7772084721"
		 data-ad-format="auto"></ins>
	<script>
	(adsbygoogle = window.adsbygoogle || []).push({});
	</script>	
<!--blog-section-->
      <div class="blog-section">
		<div class="container">
		  <h2 class="single">Stories</h2>
		   <div class="blog-top">
			   <div class="col-md-14 col-sm-14 col-lg-14">
				<div class="col-md-8 col-sm-8 col-lg-8">
                                            
<!--					<a href="#">
					  <img src="images/banner.jpg" alt="">
					</a>-->
					<?php 
                                            if(isset($_GET['page'])){
                                                $page = $_GET['page'];
                                            }else{
                                                $page = "";
                                            }
                                            
                                            if($page == "" || $page == "1"){
                                                $page1 = 0;
                                            }else{
                                                $page1 = ($page*3)-3;
                                            }
						//$title = $_GET['title'];
						$sql = "select * from blog_details order by date desc limit $page1,3";
                                            	//echo $sql;
						$result = mysqli_query($con,$sql);
						$i=1;
						
						
                                                while($row = mysqli_fetch_assoc($result)){
                                                    $date = $row['date'];
                                        ?>
                                        <div class="page-header">
                                            <h2 class="wow slideInUp" stye="font-family: 'Merriweather', serif;" data-wow-duration="1s" data-wow-delay=".3s"><?php echo $row['title'];?></h2>
                                        </div>
                                            
                                        <p class="post wow slideInDown"  data-wow-duration="1s" data-wow-delay=".3s">Posted on <?php echo date('j F', strtotime($date)).", ".date('Y', strtotime($date));?> by <?php echo $row['name'];?></p>
					   <p Class="wow slideInUp"  data-wow-duration="1s" data-wow-delay=".3s">
								<?php 
                                                                    //    echo $row['story'];
                                                                $string = strip_tags(htmlspecialchars_decode($row['story']));
                                                                if (strlen($string) > 100) {

                                                                    // truncate string
                                                                    $stringCut = substr($string, 0, 500);
                                                                    $endPoint = strrpos($stringCut, ' ');

                                                                    //if the string doesn't contain any space then it will cut without word basis.
                                                                    $string = $endPoint? substr($stringCut, 0, $endPoint):substr($stringCut, 0);
                                                                    $title = str_replace(' ', '-', $row['title']);
                                                                    //$title = urldecode($title);
                                                                   // echo $title;
                                                                    $string .= '... <a href="blog/'.$title.'">Read More</a>';
                                                                }
                                                               // echo htmlspecialchars_decode($string);
                                                                  echo $string;
                                                                ?>
					   </p>
                                           <hr>
                                           
                                        <?php
                                                }
					?>
                                       
                                        <?php 
						//$title = $_GET['title'];
						$sql = "select count(*) as stories_no from blog_details";
						//echo $sql;
						$result = mysqli_query($con,$sql);
						
						$row = mysqli_fetch_assoc($result);
						$no_of_stories = $row['stories_no'];
                                                $no = $no_of_stories/3;
                                                $no = ceil($no);
                                                //echo ceil($no);
                                        ?>
                                             <nav aria-label="Page navigation">
                                                <ul class="pagination">
                                                  <li>
                                                    <a href="#" aria-label="Previous">
                                                      <span aria-hidden="true">&laquo;</span>
                                                    </a>
                                                  </li>
                                        <?php
                                                for($i=1; $i<=$no ; $i++){
                                                    
                                                    //echo "<a href='stories?page=".$i."' style='text-decoration:none;'>".$i." </a>";
                                        ?>
                                          
                                                  <li><a href="stories/<?php echo $i;?>"><?php echo $i;?></a></li>
                                                  <!-- <li><a href="#">2</a></li>
                                                    <li><a href="#">3</a></li>
                                                  <li><a href="#">4</a></li>
                                                  <li><a href="#">5</a></li>-->
                                                  
                                        <?php
                                                    
                                                }
					?> 
                                                  <li>
                                                    <a href="#" aria-label="Next">
                                                      <span aria-hidden="true">&raquo;</span>
                                                    </a>
                                                  </li>
                                                </ul>
                                              </nav>
				</div>
                               <!--Tree View-->
								<div class="col-md-4">
                                                                    <div id="demoFont">Recent Posts</div>
                                    <div class="tree well">
                                        <ul>
                                            <?php 
                                                    //$title = $_GET['title'];
                                                    $sqlBlogYear = "SELECT DISTINCT(EXTRACT(YEAR FROM date)) as YEAR FROM blog_details";
                                                    //echo $sql;
                                                    $resultBlogYear = mysqli_query($con,$sqlBlogYear);

                                                    while($rowBlogYear = mysqli_fetch_assoc($resultBlogYear)){
                                                            $blogYear = $rowBlogYear['YEAR'];
                                            ?>
                                            <li>
                                                <span style="font-weight: bold;"><i class="icon-folder-open"></i> <?php echo $blogYear;?></span>
                                                <ul>
                                                    <?php 
                                                        $sqlBlogMonth = "SELECT DISTINCT(MONTH(date)) as MONTH FROM blog_details WHERE YEAR(date)='$blogYear' order by date desc";
                                                        //echo $sqlBlogMonth;
                                                        $resultBlogMonth = mysqli_query($con,$sqlBlogMonth);
						
                                                        while($rowBlogMonth = mysqli_fetch_assoc($resultBlogMonth)){
                                                            $blogMonth = $rowBlogMonth['MONTH'];
                                                            $monthName = date('F', mktime(0, 0, 0, $blogMonth, 10));
                                                    ?>
                                                    <li>
                                                            <span style="font-weight: bold;"><i class="icon-minus-sign"></i> <?php echo $monthName;?></span>
                                                        <ul>
                                                             <?php 
                                                                $sqlBlogData = "SELECT title FROM blog_details WHERE YEAR(`date`) = '$blogYear' AND MONTH(`date`) = '$blogMonth'";
                                                                //echo $sqlBlogMonth;
                                                                $resultBlogData = mysqli_query($con,$sqlBlogData);

                                                                while($rowBlogData = mysqli_fetch_assoc($resultBlogData)){
                                                                    $blogTitle = $title = str_replace(' ', '-', $rowBlogData['title']);
                                                                   
                                                                    
                                                            ?>
                                                            <li>
                                                                <span style='font-size:px;'><i class="icon-leaf"></i> <a href="blog/<?php echo $blogTitle;?>"><?php echo $rowBlogData['title'];?></a></span> 
                                                            </li>
                                                            <?php
                                                                }
                                                            ?>
                                                        </ul>
                                                    </li>
                                                    <?php 
                                                        }
                                                    ?>
                                                </ul>
                                            </li>
                                            <?php 
                                                }
                                            ?>
                                            <!--<li>
                                                <span><i class="icon-folder-open"></i> 2017</span> <a href="">Goes somewhere</a>
                                                <ul>
                                                    <li>
                                                            <span><i class="icon-leaf"></i> Child</span> <a href="">Goes somewhere</a>
                                                            </li>
                                                        </ul>
                                            </li>-->
                                        </ul>
                                    </div>
								<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
								<!-- Ads By Google -->
								<ins class="adsbygoogle"
									 style="display:block"
									 data-ad-client="ca-pub-3940737792688252"
									 data-ad-slot="7772084721"
									 data-ad-format="auto"></ins>
								<script>
								(adsbygoogle = window.adsbygoogle || []).push({});
								</script>	

                                </div>    
                            </div>
		  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<!-- Ads By Google -->
			<ins class="adsbygoogle"
				 style="display:block"
				 data-ad-client="ca-pub-3940737792688252"
				 data-ad-slot="7772084721"
				 data-ad-format="auto"></ins>
			<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
			</script>	
		</div>
	  </div>
	</div>
<!--footer-->
		<?php include 'footer.php';?>
		<!--start-smooth-scrolling-->
						<script type="text/javascript">
									$(document).ready(function() {
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
								<!--end-smooth-scrolling-->
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

</body>
</html>