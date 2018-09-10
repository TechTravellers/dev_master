<?php 
session_start();
include "db/db_connect.php";
$ipaddress = $_SERVER["REMOTE_ADDR"];
?>
<!DOCTYPE HTML>
<html>
<head>
<title>TechTravellers </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Travel tourism Tour" />
<script type="applisalonion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<?php 
	include "library.php";
?>
		
<!--		<script src="js/editor.js"></script>
		<script>
			$(document).ready(function() {
				$("#blog").Editor();
			});
		</script>
		
		<link href="css/editor.css" type="text/css" rel="stylesheet"/>-->
	<!-- include plugin -->
  <script src="./tinymce/tinymce.min.js"></script>
  <script>
      tinymce.init({
        selector: 'textarea',
        height: 200,
        menubar: false,
        plugins: [
          'advlist autolink lists link image charmap print preview anchor textcolor',
          'searchreplace visualblocks code fullscreen',
          'insertdatetime media table contextmenu paste code help wordcount'
        ],
        toolbar: 'insert | undo redo |  formatselect | bold italic backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
        content_css: [
          '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i'
          ]
      });
  
  </script>   
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

<!--blog-section-->
      <div class="blog-section">
		<div class="container">
		  <h2 class="single">Tell Your Story</h2>
		   <div class="blog-top">
			   <div class="blog-single">
					<div class="single-img">
						<form id="commentform" action="" enctype="multipart/form-data"  method="post" novalidate>
							 <p class="comment-form-author-name"><label for="author"><b>Name</b></label>
								<input id="author" name="author"  type="text" value="" size="30" aria-required="true" required="">
							 </p>
							 <p class="comment-form-email wow slideInDown"  data-wow-duration="1s" data-wow-delay=".3s">
								<label class="email"><b>Email</b></label>
								<input id="email" name="email"  type="text" value="" size="30" aria-required="true" required="">
							 </p>
							 <p class="comment-form-author-name"><label for="author"><b>Title</b></label>
								<input id="title" name="title" type="text" value="" size="30" aria-required="true" required="">
							 </p
                                                         <p class="comment-form-author-name"><label for="author"><b>Photos</b></label>
								<input multiple="multiple" name="images[]" id="images"  type="file" value="" size="30">
							 </p>
							 <p class="comment-form-comment wow slideInUp"  data-wow-duration="1s" data-wow-delay=".3s">
								<label class="comment"><b>Blog</b></label>
								<textarea id="blog" name="blog"  required="" ></textarea>
								<span> Write your story in reginoal language and copy the story here to upload</span>
							 </p>
							 <div class="clearfix"></div>
							<p class="form-submit wow shake"  data-wow-duration="1s" data-wow-delay=".3s">
							   <input name="submit" type="submit" id="submit" value="Submit">
							  
							</p>
							<div class="clearfix"></div>
							<div id="result"></div>
						   </form>
<!--					 <pre>
                                        <?php
                                        if($_POST){
                                           // echo $_POST['blog'];
                                        }
                                        ?>
                                        </pre>    -->
					</div>
				
		   </div>
		  
		</div>
	  </div>
	</div>
<!--footer-->
		<?php include 'footer.php';?>
		<!--start-smooth-scrolling-->
						<script type="text/javascript">
									$(document).ready(function() {
										$('#title').on('change', function (event) {
                                                                                    var yourInput = $(this).val();
                                                                                    re = /[`~!@#$%^&*()_|+\-=?;:'",.<>\{\}\[\]\\\/]/gi;
                                                                                    var isSplChar = re.test(yourInput);
                                                                                    if(isSplChar)
                                                                                    {
                                                                                            var no_spl_char = yourInput.replace(/[`~!@#$%^&*()_|+\-=?;:'",.<>\{\}\[\]\\\/]/gi, '');
                                                                                            $(this).val(no_spl_char);
                                                                                            //alert(isSplChar);
                                                                                    }
                                                                                });
									$('#images').bind('change', function() {

                                                                            //this.files[0].size gets the size of your file.
                                                                            var flagBtn=0;
                                                                            var image_size = this.files[0].size;
                                                                            var ext = $('#images').val().split('.').pop().toLowerCase();

                                                                            if(image_size < 2452964){

                                                                                    if($.inArray(ext, ['jpg','jpeg']) == -1) {
                                                                                            flagBtn=0;
                                                                                          alert('Invalid file format!');

                                                                                    }else{
                                                                                          flagBtn=1;
                                                                                    }
                                                                            }else{
                                                                                    flagBtn=0;
                                                                                    alert("Please upload image below 2MB.");
                                                                            }
                                                                            if(flagBtn == 1){
                                                                                $("#submit").prop('disabled',false);
                                                                            }
                                                                          });	
										//$().UItoTop({ easingType: 'easeOutQuart' });
										//add blog
                                                                        $('#commentform').on('submit',(function(e) {
										e.preventDefault();
										$("#submit").val("Submitting......");
										var author = $("#author").val();
										var email = $("#email").val();
										var title = $("#title").val();
                                                                                //Blog Value
                                                                                tinyMCE.triggerSave();
										var blog_value = $("#blog").val();
										//console.log(blog_value);
                                                                                if(author == ""){
                                                                                    alert("Enter Author Name");
                                                                                    $("#author").focus();
                                                                                }else if(email == ""){
                                                                                    alert("Enter Email Name");
                                                                                    $("#email").focus();
                                                                                }else if(title == ""){
                                                                                    alert("Enter Title Name");
                                                                                    $("#title").focus();
                                                                                }else if(blog_value == ""){
                                                                                    alert("Enter Blog Details");
                                                                                }else{
                                                                                    //$('#commentform').submit();
                                                                                   $("#result").empty();
                                                                                    var formData = new FormData(this);
                                                                                    //console.log(blog_value);
											 $.ajax({
												url: "admin/query/insertStoryFront.php",
												type: "post",
//												data: {
//													author : author,
//													email : email,
//													title : title,
//													blog : blog_value
//												},
                                                                                                data: formData,
												//dataType: "JSON",
                                                                                                cache:false,
                                                                                                contentType: false,
                                                                                                processData: false,
												success: function (response) {
													$("#submit").val("Submit");
													console.log(response);
													if(response == 1){
														$("#author").val("");
														$("#email").val("");
														$("#title").val("");
                                                                                                                tinyMCE.activeEditor.setContent('');
														//$('.Editor-editor').empty();
														$('#result').append('<div class="alert alert-success" role="alert">Your Story is posted successfully!</div>');
													}else{
														$('#result').append('<div class="alert alert-delete" role="alert">Unable to post your story!</div>');
													}		
													
													
												},
												error: function(jqXHR, textStatus, errorThrown) {
													$("#submit").val("Submit");
												   console.log(textStatus, errorThrown);
												}
											}); 
                                                                                }
											
										
									}));

										/* $('#submit').click(function (e) {
											e.preventDefault();
										   // alert($('.summernote').summernote('code'));
											var blog_value = $(".Editor-editor").text();
											alert(blog_value);
										}); */
									});
								</script>
                                                                
								<!--end-smooth-scrolling-->
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

</body>
</html>