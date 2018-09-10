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
						 <h3 class="w3_inner_tittle two">Add District Details </h3>

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
													<label for="focusedinput" class="col-sm-2 control-label">State Name<span style="color:red;">*</span></label>
													<div class="col-sm-8">
														<select class="form-control1" id="state_id" name="state_id" required>
															<option value="">--Select State--</option>
															
														</select>
													</div>
													<!--<div class="col-sm-2">
														<p class="help-block">Your help text!</p>
													</div>-->
												</div>
												<div class="form-group">
													<label for="focusedinput" class="col-sm-2 control-label">District Code<span style="color:red;">*</span></label>
													<div class="col-sm-8">
														<input type="text" class="form-control1" id="district_code" name="district_code" placeholder="Eg: AD" required />
													</div>
													<!--<div class="col-sm-2">
														<p class="help-block">Your help text!</p>
													</div>-->
												</div>
												
												<div class="form-group">
													<label for="focusedinput" class="col-sm-2 control-label">District Name<span style="color:red;">*</span></label>
													<div class="col-sm-8">
														<input type="text" class="form-control1" id="district_name" name="district_name" placeholder="Eg: Alipurduar" required />
													</div>
													<!--<div class="col-sm-2">
														<p class="help-block">Your help text!</p>
													</div>-->
												</div>
												<div class="form-group">
													<label for="txtarea1" class="col-sm-2 control-label">District Details<span style="color:red;">*</span></label>
													<div class="col-sm-8">
														<textarea name="txtarea1" id="district_details" name="district_details" cols="50" rows="6" placeholder="Eg: Alipurduar District is the 20th district in the state of West Bengal." class="form-control1"></textarea>
													</div>
													
													<!--<div class="col-sm-2">
														<p class="help-block">Your help text!</p>
													</div>-->
												</div>
												<div class="form-group">
													<label for="txtarea1" class="col-sm-2 control-label">Headquarter<span style="color:red;">*</span></label>
													<div class="col-sm-8">
														<input type="text" id="district_headquarter" name="district_headquarter" cols="50" rows="6" placeholder="Eg: Alipurduar District is the 20th district in the state of West Bengal." class="form-control1"/>
													</div>
													
													<!--<div class="col-sm-2">
														<p class="help-block">Your help text!</p>
													</div>-->
												</div>
												<div class="form-group">
													<label for="focusedinput" class="col-sm-2 control-label">Population<span style="color:red;">*</span></label>
													<div class="col-sm-8">
														<input type="text" class="form-control1" id="population" name="population" placeholder="Eg: 1,700,000" required />
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
		var country_id = $("#country_id").val();
		var state_id = $("#state_id").val();
		var district_code = $("#district_code").val();
		var district_name = $("#district_name").val();
		var district_details = $("#district_details").val();
		var district_headquarter = $("#district_headquarter").val();
		var population = $("#population").val();
		//var no_of_cities = $("#no_of_cities").val();
		
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
				url: "query/insertDistrict.php",
				type: "post",
				data: "country_id="+country_id+"&state_id="+state_id+"&district_code="+district_code+"&district_name="+district_name+"&district_details="+district_details+"&district_headquarter="+district_headquarter+"&population="+population,
				success: function (response) {
					//alert(response);
					if(response == 1){
						 alertify.alert(
							'TechTraveller', 'New District Added!', 
							function(){
								window.location = "addDistrict.php";
								
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