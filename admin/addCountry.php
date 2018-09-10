<?php 
session_start();
include "query/loginVerify.php";

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
									
									<li>Country</li>
								</ul>
							</div>
						</div>
					<!-- //breadcrumbs -->

					<div class="inner_content_w3_agile_info two_in">
					  <div class="wthree_general graph-form agile_info_shadow ">
						 <h3 class="w3_inner_tittle two">Add Country Details </h3>

							<div class="grid-1 ">
									<div class="form-body">
											<form class="form-horizontal">
												<div class="form-group">
													<label for="focusedinput" class="col-sm-2 control-label">Country Code<span style="color:red;">*</span></label>
													<div class="col-sm-8">
														<input type="text" class="form-control1" id="country_code" name="country_code" placeholder="Eg: 91" required>
													</div>
													<!--<div class="col-sm-2">
														<p class="help-block">Your help text!</p>
													</div>-->
												</div>
												<div class="form-group">
													<label for="focusedinput" class="col-sm-2 control-label">Country Name<span style="color:red;">*</span></label>
													<div class="col-sm-8">
														<input type="text" class="form-control1" id="country_name" name="country_name" placeholder="Eg: India" required>
													</div>
													<!--<div class="col-sm-2">
														<p class="help-block">Your help text!</p>
													</div>-->
												</div>
												<div class="form-group">
													<label for="txtarea1" class="col-sm-2 control-label">Country Details<span style="color:red;">*</span></label>
													<div class="col-sm-8">
														<textarea name="txtarea1" id="country_details" name="country_details" cols="50" rows="6" placeholder="Eg: India is surrounded with two seas and one oceans from three sides." class="form-control1"></textarea>
													</div>
													
													<!--<div class="col-sm-2">
														<p class="help-block">Your help text!</p>
													</div>-->
												</div>
												<div class="form-group">
													<label for="focusedinput" class="col-sm-2 control-label">National Language<span style="color:red;">*</span></label>
													<div class="col-sm-8">
														<input type="text" class="form-control1" id="language" name="language" placeholder="Eg: Hindi" required>
													</div>
													<!--<div class="col-sm-2">
														<p class="help-block">Your help text!</p>
													</div>-->
												</div>
												<div class="form-group">
													<label for="focusedinput" class="col-sm-2 control-label">No of People<span style="color:red;">*</span></label>
													<div class="col-sm-8">
														<input type="text" class="form-control1" id="no_of_people" name="no_of_people" placeholder="Eg: 1.2 Billion" required>
													</div>
													<!--<div class="col-sm-2">
														<p class="help-block">Your help text!</p>
													</div>-->
												</div>
												<div class="form-group">
													<label for="focusedinput" class="col-sm-2 control-label">No of Province<span style="color:red;">*</span></label>
													<div class="col-sm-8">
														<input type="text" class="form-control1" id="no_of_province" name="no_of_province" placeholder="Eg: 28" required>
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
		var country_code = $("#country_code").val();
		var country_name = $("#country_name").val();
		var country_details = $("#country_details").val();
		var language = $("#language").val();
		var no_of_people = $("#no_of_people").val();
		var no_of_province = $("#no_of_province").val();
		
			
		$.ajax({
			url: "query/insertCountry.php",
			type: "post",
			data: "country_code="+country_code+"&country_name="+country_name+"&country_details="+country_details+"&language="+language+"&no_of_people="+no_of_people+"&no_of_province="+no_of_province,
			success: function (response) {
				//alert(response);
				if(response == 1){
					 alertify.alert(
						'TechTraveller', 'New Country Added!', 
						function(){
							window.location = "addCountry.php";
							
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