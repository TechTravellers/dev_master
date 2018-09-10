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
									<li><a href="main-page.html">Home</a><span>«</span></li>
									
									<li>States/Provinces</li>
								</ul>
							</div>
						</div>
					<!-- //breadcrumbs -->

					<div class="inner_content_w3_agile_info two_in">
					  <div class="wthree_general graph-form agile_info_shadow ">
						 <h3 class="w3_inner_tittle two">Add State/Province Details </h3>

							<div class="grid-1 ">
									<div class="form-body">
											<form class="form-horizontal">
												<div class="form-group">
													<label for="focusedinput" class="col-sm-2 control-label">Country Name<span style="color:red;">*</span></label>
													<div class="col-sm-8">
														<select class="form-control1" id="country_id" name="country_id" required>
															<option value="">--Select Country--</option>
															<?php 
																$sql = "select * from country order by country_name asc";
																//echo $sql;
																$result = mysqli_query($con,$sql) or die(mysqli_error($con));
																while($row = mysqli_fetch_assoc($result)){
															?>
																<option value="<?php echo $row['country_id'];?>"><?php echo $row['country_name'];?></option>
															<?php
																}
															
															?>
														</select>
													</div>
													<!--<div class="col-sm-2">
														<p class="help-block">Your help text!</p>
													</div>-->
												</div>
												<div class="form-group">
													<label for="focusedinput" class="col-sm-2 control-label">State/Province Code<span style="color:red;">*</span></label>
													<div class="col-sm-8">
														<input type="text" class="form-control1" id="state_code" name="state_code" placeholder="Eg: 033" required />
													</div>
													<!--<div class="col-sm-2">
														<p class="help-block">Your help text!</p>
													</div>-->
												</div>
												<div class="form-group">
													<label for="focusedinput" class="col-sm-2 control-label">State/Province Name<span style="color:red;">*</span></label>
													<div class="col-sm-8">
														<input type="text" class="form-control1" id="state_name" name="state_name" placeholder="Eg: India" required />
													</div>
													<!--<div class="col-sm-2">
														<p class="help-block">Your help text!</p>
													</div>-->
												</div>
												<div class="form-group">
													<label for="txtarea1" class="col-sm-2 control-label">State/Province Details<span style="color:red;">*</span></label>
													<div class="col-sm-8">
														<textarea name="txtarea1" id="state_details" name="state_details" cols="50" rows="6" placeholder="Eg: West Bengal is one of the most beautiful state in India." class="form-control1"></textarea>
													</div>
													
													<!--<div class="col-sm-2">
														<p class="help-block">Your help text!</p>
													</div>-->
												</div>
												<div class="form-group">
													<label for="focusedinput" class="col-sm-2 control-label">State/Province Language<span style="color:red;">*</span></label>
													<div class="col-sm-8">
														<input type="text" class="form-control1" id="language" name="language" placeholder="Eg: Bengali" required />
													</div>
													<!--<div class="col-sm-2">
														<p class="help-block">Your help text!</p>
													</div>-->
												</div>
												<div class="form-group">
													<label for="focusedinput" class="col-sm-2 control-label">No of People<span style="color:red;">*</span></label>
													<div class="col-sm-8">
														<input type="text" class="form-control1" id="no_of_people" name="no_of_people" placeholder="Eg: 1.2 Million" required />
													</div>
													<!--<div class="col-sm-2">
														<p class="help-block">Your help text!</p>
													</div>-->
												</div>
												<div class="form-group">
													<label for="focusedinput" class="col-sm-2 control-label">No of Cities<span style="color:red;">*</span></label>
													<div class="col-sm-8">
														<input type="text" class="form-control1" id="no_of_cities" name="no_of_cities" placeholder="Eg: 28" required />
													</div>
													<!--<div class="col-sm-2">
														<p class="help-block">Your help text!</p>
													</div>-->
												</div>
												<div class="form-group" align="right">
													<div class="col-sm-10">
														<button type="submit" class="btn btn-primary" id="add">ADD</button>
													</div>
												</div>
												
											</form>
									</div>

							</div>
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
	  
	  /*Adding to DB - Arnab*/
	$('#add').click(function (e) {
		e.preventDefault();
		var country_id = $("#country_id").val();
		var state_code = $("#state_code").val();
		var state_name = $("#state_name").val();
		var state_details = $("#state_details").val();
		var language = $("#language").val();
		var no_of_people = $("#no_of_people").val();
		var no_of_cities = $("#no_of_cities").val();
		
		if(country_id == ""){
			alertify.error("Please Choose Country");
			$("#country_id").focus();
		}else if(state_code == ""){
			alertify.error("Please Enter State Code");
			$("#state_code").focus();
		}else if(state_name == ""){
			alertify.error("Please Enter State Name");
			$("#state_name").focus();
		}else if(state_details == ""){
			alertify.error("Enter State Details");
			$("#state_details").focus();
		}else if(language == ""){
			alertify.error("Please Enter Language");
			$("#language").focus();
		}else if(no_of_people == ""){
			alertify.error("Please Enter No of People");
			$("#no_of_people").focus();
		}else if(no_of_cities == ""){
			alertify.error("Please Enter No of Cities");
			$("#no_of_cities").focus();
		}else{	
			$.ajax({
				url: "query/insertState.php",
				type: "post",
				data: "country_id="+country_id+"&state_code="+state_code+"&state_name="+state_name+"&state_details="+state_details+"&language="+language+"&no_of_people="+no_of_people+"&no_of_cities="+no_of_cities,
				success: function (response) {
					//alert(response);
					if(response == 1){
						 alertify.alert(
							'TechTraveller', 'New State Added!', 
							function(){
								window.location = "addState.php";
								
							}
						); 
					}else{
						 alertify.alert(
							'TechTraveller', response, 
							function(){
								
							}
						); 
					}
					
				},
				error: function(jqXHR, textStatus, errorThrown) {
				   console.log(textStatus, errorThrown);
				}
			});
		}
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