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
									
									<li>Districts</li>
								</ul>
							</div>
						</div>
					<!-- //breadcrumbs -->

					<div class="inner_content_w3_agile_info two_in">
					  <div class="wthree_general graph-form agile_info_shadow ">
						 <h3 class="w3_inner_tittle two">Edit District Details </h3>
							<?php 
								$district_id = $_GET['district_id'];
								$sql = "select * from district where district_id='$district_id' order by district_id desc limit 1";
								$result = mysqli_query($con,$sql) or die(mysqli_error($con));
								$row = mysqli_fetch_assoc($result);
								
							?>
							<div class="grid-1 ">
									<div class="form-body">
											<form class="form-horizontal">
												<div class="form-group">
													<label for="focusedinput" class="col-sm-2 control-label">Country Name<span style="color:red;">*</span></label>
													<div class="col-sm-8">
														<select class="form-control1" id="country_id" name="country_id" required>
															<option value="">--Select Country--</option>
															<?php 
																$sqlCountry = "select * from country order by country_name asc";
																//echo $sql;
																$resultCountry = mysqli_query($con,$sqlCountry) or die(mysqli_error($con));
																while($rowCountry = mysqli_fetch_assoc($resultCountry)){
																	if($rowCountry['country_id'] == $row['country_id']){
																?>
																	<option value="<?php echo $rowCountry['country_id'];?>" selected><?php echo $rowCountry['country_name'];?></option>
																<?php	
																		}else{
																?>
																	<option value="<?php echo $rowCountry['country_id'];?>"><?php echo $rowCountry['country_name'];?></option>
																<?php
																	}																		
																
																}
															?>
														</select>
													</div>
													<!--<div class="col-sm-2">
														<p class="help-block">Your help text!</p>
													</div>-->
												</div>
												<div class="form-group">
													<label for="focusedinput" class="col-sm-2 control-label">State Name<span style="color:red;">*</span></label>
													<div class="col-sm-8">
														<select class="form-control1" id="state_id" name="state_id" required>
															<option value="">--Select State--</option>
															<?php 
																$sqlState = "select * from state order by state_name asc";
																//echo $sql;
																$resultState = mysqli_query($con,$sqlState) or die(mysqli_error($con));
																while($rowState = mysqli_fetch_assoc($resultState)){
																	if($rowState['state_id'] == $row['state_id']){
																?>
																	<option value="<?php echo $rowState['state_id'];?>" selected><?php echo $rowState['state_name'];?></option>
																<?php	
																		}else{
																?>
																	<option value="<?php echo $rowState['state_id'];?>"><?php echo $rowState['state_name'];?></option>
																<?php
																	}																		
																
																}
															
															?>
														</select>
													</div>
													<!--<div class="col-sm-2">
														<p class="help-block">Your help text!</p>
													</div>-->
												</div>
												<div class="form-group">
													<label for="focusedinput" class="col-sm-2 control-label">District Code<span style="color:red;">*</span></label>
													<div class="col-sm-8">
														<input type="text" class="form-control1" id="district_code" name="district_code" value="<?php echo $row['district_code'];?>" disabled placeholder="Eg: AD" required />
														<input type="hidden" class="form-control1" id="district_id" name="district_code" value="<?php echo $row['district_id'];?>" disabled placeholder="Eg: AD" required />
													</div>
													<!--<div class="col-sm-2">
														<p class="help-block">Your help text!</p>
													</div>-->
												</div>
												
												<div class="form-group">
													<label for="focusedinput" class="col-sm-2 control-label">District Name<span style="color:red;">*</span></label>
													<div class="col-sm-8">
														<input type="text" class="form-control1" id="district_name" name="district_name" placeholder="Eg: Alipurduar" required value="<?php echo $row['district_name'];?>"/>
													</div>
													<!--<div class="col-sm-2">
														<p class="help-block">Your help text!</p>
													</div>-->
												</div>
												<div class="form-group">
													<label for="txtarea1" class="col-sm-2 control-label">District Details<span style="color:red;">*</span></label>
													<div class="col-sm-8">
														<textarea name="txtarea1" id="district_details" name="district_details" cols="50" rows="6" placeholder="Eg: Alipurduar District is the 20th district in the state of West Bengal." class="form-control1"><?php echo $row['district_details'];?></textarea>
													</div>
													
													<!--<div class="col-sm-2">
														<p class="help-block">Your help text!</p>
													</div>-->
												</div>
												<div class="form-group">
													<label for="txtarea1" class="col-sm-2 control-label">Headquarter<span style="color:red;">*</span></label>
													<div class="col-sm-8">
														<input type="text" id="district_headquarter" name="district_headquarter" cols="50" rows="6" placeholder="Eg: Alipurduar District is the 20th district in the state of West Bengal." class="form-control1" value="<?php echo $row['headquarter'];?>"/>
													</div>
													
													<!--<div class="col-sm-2">
														<p class="help-block">Your help text!</p>
													</div>-->
												</div>
												<div class="form-group">
													<label for="focusedinput" class="col-sm-2 control-label">Population<span style="color:red;">*</span></label>
													<div class="col-sm-8">
														<input type="text" class="form-control1" id="population" name="population" placeholder="Eg: 1,700,000" required value="<?php echo $row['populations'];?>"/>
													</div>
													<!--<div class="col-sm-2">
														<p class="help-block">Your help text!</p>
													</div>-->
												</div>
												
												<div class="form-group" align="right">
													<div class="col-sm-10">
														<button type="submit" class="btn btn-primary" id="add">Update</button>
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
	  
	  $('#country_id').change(function (e) {
		e.preventDefault();
			var country_id = $('#country_id').val();
			$('#state_id').empty();
			$.ajax({
				url: "query/getState.php",
				type: "post",
				data: "country_id="+country_id,
				success: function (response) {
					//alert(response);
					if(response != ""){
						 $("#state_id").append(response);
					}
					
				},
				error: function(jqXHR, textStatus, errorThrown) {
				   console.log(textStatus, errorThrown);
				}
			});
		});	
	  
	  
	$('#add').click(function (e) {
		e.preventDefault();
		var district_id = $("#district_id").val();
		var country_id = $("#country_id").val();
		var state_id = $("#state_id").val();
		var district_code = $("#district_code").val();
		var district_name = $("#district_name").val();
		var district_details = $("#district_details").val();
		var district_headquarter = $("#district_headquarter").val();
		var population = $("#population").val();
		//var no_of_cities = $("#no_of_cities").val();
		//alert(district_headquarter);
		if(country_id == ""){
			alertify.error("Please Choose Country");
			$("#country_id").focus();
		}else if(state_id == ""){
			alertify.error("Please Choose State");
			$("#state_id").focus();
		}else if(district_code == ""){
			alertify.error("Enter Dristrict Code Details");
			$("#district_code").focus();
		}else if(district_name == ""){
			alertify.error("Please District Name");
			$("#district_name").focus();
		}else if(district_details == ""){
			alertify.error("Please Enter District Details");
			$("#district_details").focus();
		}else if(district_headquarter == ""){
			alertify.error("Please Enter District Headquarter");
			$("#district_headquarter").focus();
		}else if(population == ""){
			alertify.error("Please Enter District Population");
			$("#population").focus();
		}else{	
			$.ajax({
				url: "query/updateDistrict.php",
				type: "post",
				data: "district_id="+district_id+"&country_id="+country_id+"&state_id="+state_id+"&district_code="+district_code+"&district_name="+district_name+"&district_details="+district_details+"&district_headquarter="+district_headquarter+"&population="+population,
				success: function (response) {
					//alert(response);
					if(response == 1){
						 alertify.alert(
							'TechTraveller', 'District Updated!', 
							function(){
								window.location = "viewDistricts.php";
								
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