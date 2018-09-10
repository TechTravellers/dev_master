<?php 
session_start();
include "query/loginVerify.php";
include "db/db_connect.php";
?>
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
		  <?php include "menu.php";?>
		<div class="clearfix"></div>
		<!-- //w3_agileits_top_nav-->
		
		<!-- /inner_content-->
				<div class="inner_content">
				    <!-- /inner_content_w3_agile_info-->

					<!-- breadcrumbs -->
						<div class="w3l_agileits_breadcrumbs">
							<div class="w3l_agileits_breadcrumbs_inner">
								<ul>
									<li><a href="dashboard.php">Home</a><span>«</span></li>
									
									<li>State/Province</li>
								</ul>
							</div>
						</div>
					<!-- //breadcrumbs -->

					<div class="inner_content_w3_agile_info two_in">
					  <h2 class="w3_inner_tittle">States/Provinces</h2>
									<!-- tables -->
									
									<div class="agile-tables">
										<div class="w3l-table-info agile_info_shadow">
										 <h3 class="w3_inner_tittle two"><a href="addState.php" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> New</a></h3>
											<table id="table">
											<thead>
											  <tr>
												<th>ID</th>
												<th>Country Name</th>
												<th>State Code</th>
												<th>State Name</th>
												<th>Details</th>
												<th>National Language</th>
												<th>No of People</th>
												<th>No of Province</th>
												<th>Action</th>
											  </tr>
											</thead>
											<tbody>
											 <?php 
												$sql = "select * from state order by date desc";
												$result = mysqli_query($con,$sql) or die(mysqli_error($con));
												while($row = mysqli_fetch_assoc($result)){
											?>
												<tr>
													<td><?php echo $row['state_id'];?></td>
													<td><?php echo $row['country_id'];?></td>
													<td><?php echo "+".$row['state_code'];?></td>
													<td><?php echo $row['state_name'];?></td>
													<td><?php echo $row['state_details'];?></td>
													<td><?php echo $row['language'];?></td>
													<td><?php echo $row['no_of_people'];?></td>
													<td><?php echo $row['no_of_cities'];?></td>
													<td><a href="editState.php?state_id=<?php echo $row['state_id'];?>"><i class="fa fa-pencil fa-2x"  aria-hidden="true"></i><a></td>
													
												</tr>
											<?php
												}
											 ?>
											</tbody>
										  </table>
									
									  <!--<code class="js">
										$('#table').basictable();
									  </code>-->	
								</div>
								
									  
									  
								
									
						</div>
							<!-- //tables -->
					
							<!-- /social_media-->
						  <div class="social_media_w3ls">
						 
						      <div class="col-md-3 socail_grid_agile facebook">
                                     <ul class="icon_w3_info">
									   <li><a href="#" class="wthree_facebook"> <i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									   <li>Facebook</li>
									 </ul>
									  <ul class="icon_w3_social">
									    <li><i class="fa fa-comment-o" aria-hidden="true"></i></li>
										<li><i class="fa fa-envelope-o" aria-hidden="true"></i></li>
										<li><i class="fa fa-user" aria-hidden="true"></i></li>
                                      </ul>
									 <div class="clearfix"></div>
									  <div class="bottom_info_social">
									 <div class="col-md-4 agile_w3l_social_media_text_img">
									    <img src="images/admin.jpg" alt="">
									 </div>
									  <div class="col-md-8 agile_w3l_social_media_text">
									    <h4>Hurisa Joe</h4>
										<p>Lorem ipsum dolor sit amet</p>
									 </div>
									
									 <div class="clearfix"></div>
									 </div>
                              </div>
							  <div class="col-md-3 socail_grid_agile twitter">
                                         <ul class="icon_w3_info">
									   <li><a href="#" class="wthree_facebook"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									   <li>Twitter</li>
									 </ul>
									  <ul class="icon_w3_social">
									    <li><i class="fa fa-comment-o" aria-hidden="true"></i></li>
										<li><i class="fa fa-envelope-o" aria-hidden="true"></i></li>
										<li><i class="fa fa-user" aria-hidden="true"></i></li>
                                      </ul>
									 <div class="clearfix"></div>
									  <div class="bottom_info_social">
									 <div class="col-md-4 agile_w3l_social_media_text_img">
									    <img src="images/a1.jpg" alt="">
									 </div>
									  <div class="col-md-8 agile_w3l_social_media_text">
									    <h4>Jasmin Joe</h4>
										<p>Lorem ipsum dolor sit amet</p>
									 </div>
									
									 <div class="clearfix"></div>
									 </div>
                              </div>
							  <div class="col-md-3 socail_grid_agile gmail">
                                     <ul class="icon_w3_info">
									   <li><a href="#" class="wthree_facebook"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
									   <li>Google+</li>
									 </ul>
									  <ul class="icon_w3_social">
									    <li><i class="fa fa-comment-o" aria-hidden="true"></i></li>
										<li><i class="fa fa-envelope-o" aria-hidden="true"></i></li>
										<li><i class="fa fa-user" aria-hidden="true"></i></li>
                                      </ul>
									 <div class="clearfix"></div>
									  <div class="bottom_info_social">
									 <div class="col-md-4 agile_w3l_social_media_text_img">
									    <img src="images/a2.jpg" alt="">
									 </div>
									  <div class="col-md-8 agile_w3l_social_media_text">
									    <h4>John Pal</h4>
										<p>Lorem ipsum dolor sit amet</p>
									 </div>
									
									 <div class="clearfix"></div>
									 </div>
                              </div>
							  <div class="col-md-3 socail_grid_agile dribble">
							  
							     <ul class="icon_w3_info">
									  <li><a href="#" class="wthree_facebook"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
									   <li>Dribbble</li>
									 </ul>
									  <ul class="icon_w3_social">
									    <li><i class="fa fa-comment-o" aria-hidden="true"></i></li>
										<li><i class="fa fa-envelope-o" aria-hidden="true"></i></li>
										<li><i class="fa fa-user" aria-hidden="true"></i></li>
                                      </ul>
									 <div class="clearfix"></div>
									  <div class="bottom_info_social">
									 <div class="col-md-4 agile_w3l_social_media_text_img">
									    <img src="images/a4.jpg" alt="">
									 </div>
									  <div class="col-md-8 agile_w3l_social_media_text">
									    <h4>Honey Pal</h4>
										<p>Lorem ipsum dolor sit amet</p>
									 </div>
									
									 <div class="clearfix"></div>
									 </div>

                              </div>
							  <div class="clearfix"></div>
													
						</div>
						<!-- //social_media-->
				    </div>
					<!-- //inner_content_w3_agile_info-->
				</div>
		<!-- //inner_content-->
<!--copy rights start here-->
<?php include "footer.php";?>	
<!--copy rights end here-->
<!-- js -->


		  <script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		 </script>
<!-- tables -->


<script type="text/javascript">
    $(document).ready(function() {
      $('#table').basictable();

      $('#table-breakpoint').basictable({
        breakpoint: 768
      });

      $('#table-swap-axis').basictable({
        swapAxis: true
      });

      $('#table-force-off').basictable({
        forceResponsive: false
      });

      $('#table-no-resize').basictable({
        noResize: true
      });

      $('#table-two-axis').basictable();

      $('#table-max-height').basictable({
        tableWrapper: true
      });
    });
</script>

		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});	
		});
		</script>





</body>
</html>