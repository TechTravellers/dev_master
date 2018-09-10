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
									
									<li>Country</li>
								</ul>
							</div>
						</div>
					<!-- //breadcrumbs -->

					<div class="inner_content_w3_agile_info two_in">
					  <h2 class="w3_inner_tittle">Countries</h2>
									<!-- tables -->
									
									<div class="agile-tables">
										<div class="w3l-table-info agile_info_shadow">
										 <h3 class="w3_inner_tittle two"><a href="addCountry.php" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> New</a></h3>
											<table id="table">
											<thead>
											  <tr>
												<th>ID</th>
												<th>Name</th>
												<th>Email</th>
												<th>IP Address</th>
												<th>Image Path</th>
												<th>Uploaded Image Name</th>
												<th>Image URL</th>
                                                                                                <th>Date</th>
												<th>Action</th>
											  </tr>
											</thead>
											<tbody>
											 <?php 
												$sql = "select * from images order by imageId desc";
												$result = mysqli_query($con,$sql) or die(mysqli_error($con));
												while($row = mysqli_fetch_assoc($result)){
											?>
												<tr>
													<td><?php echo $row['imageId'];?></td>
													<td><?php echo $row['name'];?></td>
													<td><?php echo $row['email'];?></td>
													<td><?php echo $row['ipaddress'];?></td>
													<td><?php echo $row['image_path'];?></td>
													<td><?php echo $row['image_name'];?></td>
                                                                                                        <td><?php echo "http://techtravellers.com/showImage.php?image_no=".$row['image_no'];?></td>
													<td><?php echo $row['date'];?></td>
													<td><a href="editContestImages.php?country_id=<?php echo $row['imageId'];?>"><i class="fa fa-pencil fa-2x"  aria-hidden="true"></i><a></td>
													
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