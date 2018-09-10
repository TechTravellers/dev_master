<?php
session_start();
include "db/db_connect.php";
$ipaddress = $_SERVER["REMOTE_ADDR"];
require 'admin/query/userLoginVerify.php';
$email = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="zxx">

    <head>
        <title>TechTravellers : Edit Profile</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Tours Travel Traveller Tourism Trip Tripper Blog Blogger" />

        <script type="applisalonion/x-javascript">
            addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
            }, false);

            function hideURLbar() {
            window.scrollTo(0, 1);
            }
        </script>


        <?php
        include "library.php";
        ?>
        <link rel="stylesheet" href="css/intlTelInput.css">
        <script src="./tinymce/tinymce.min.js"></script>
        <script>
            tinymce.init({
                selector: 'textarea',
                height: 150,
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

    </head>

    <body>
        <!--Header-->
        <?php include 'header.php'; ?>
        <!--//header-->
        <!--/banner-->
        <div class="banner-inner">
        </div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index">Home</a>
            </li>
            <li class="breadcrumb-item active">Edit Profile</li>
        </ol>
        <!--//banner-->
        <!--/main-->
        <section class="main-content-w3layouts-agileits">
            <div class="container">
                <h3 class="tittle">Edit Profile</h3>
                <div class="inner-sec">
                    <div class="login p-5 bg-light mx-auto mw-100">
                        <form action="#" id="editForm" enctype="multipart/form-data">
                            <div id="result"></div>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom01">
                                        <span style="color: red;">*</span>
                                        Country
                                    </label>
                                    <?php include 'countries.php'; ?>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom02">Phone Number</label>
                                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="">
                                </div>
                            </div>
                            <div class="form-row">
                                <!--                                <div class="form-group col-md-6">
                                                                    <label for="validationCustom01">Gender</label>
                                                                    <select id="gender" name="gender" class="form-control">
                                                                        <option value="">Select Gender</option>
                                                                        <option value="Male">Male</option>
                                                                        <option value="Female">Female</option>
                                                                    </select>
                                                                </div>-->
                                <div class="form-group col-md-6">
                                    <label for="validationCustom02">City</label>
                                    <input type="text" class="form-control" id="city" name="city" placeholder="">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="validationCustom01">Area</label>
                                    <input type="text" class="form-control" id="area" name="area" placeholder="">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="validationCustom02">DOB</label>
                                    <input type="date" class="form-control" id="dob" name="dob" placeholder="">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="validationCustom02">Cover Photo
                                        <small> (You can add maximum 5 cover photos) </small>
                                    </label>
                                    <input multiple="multiple" class="form-control" name="coverImages[]" id="coverImages"  type="file" value="" size="5">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="validationCustom01">Profile Photo</label>
                                    <input class="form-control" name="profileImage" id="profileImage"  type="file" value="" size="30">
                                </div>
                            </div>
                            <div class="form-row">
                                <label for="validationCustom01">
                                    <span style="color: red;">*</span>
                                    About Yourself
                                    <small> (Maximum 200 words) </small>
                                </label>
                                <textarea id="about" name="about"  required="" ></textarea>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                </div>
                            </div>
                            <button type="submit" id="edit" name="edit" class="btn btn-primary submit mb-4">Save Changes</button>
                        </form>

                    </div>
                </div>
            </div>
        </section>
        <script src="http://code.jquery.com/jquery-latest.min.js"></script>
        <script src="js/intlTelInput.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function ($) {
                $("#phone").intlTelInput({
                    preferredCountries: ["in", "us"],
                    separateDialCode: true
                });
            });

        </script>
        <!--//main-->
        <!--footer-->
        <?php include 'footer.php'; ?>
        <!--end footer-->
        <!---->	
        <!-- js -->
        <script src="js/jquery-2.2.3.min.js"></script>
        <!-- //js -->
        <!-- password-script -->
<!--        <script>
            window.onload = function () {
                document.getElementById("password1").onchange = validatePassword;
                document.getElementById("password2").onchange = validatePassword;
            }

            function validatePassword() {
                var pass2 = document.getElementById("password2").value;
                var pass1 = document.getElementById("password1").value;
                if (pass1 != pass2)
                    document.getElementById("password2").setCustomValidity("Passwords Don't Match");
                else
                    document.getElementById("password2").setCustomValidity('');
                //empty string means no validation error
            }
        </script>-->
        <!-- //password-script -->

        <!--/ start-smoth-scrolling -->
        <script src="js/move-top.js"></script>
        <script src="js/easing.js"></script>
        <script>
            jQuery(document).ready(function ($) {
                $(".scroll").click(function (event) {
                    event.preventDefault();
                    $('html,body').animate({
                        scrollTop: $(this.hash).offset().top
                    }, 900);
                });
            });
        </script>
        <!--// end-smoth-scrolling -->

        <script>
            $(document).ready(function () {
                /*
                 var defaults = {
                 containerID: 'toTop', // fading element id
                 containerHoverID: 'toTopHover', // fading element hover id
                 scrollSpeed: 1200,
                 easingType: 'linear' 
                 };
                 */

                $().UItoTop({
                    easingType: 'easeOutQuart'
                });

            });
        </script>

        <!-- registration form validation -->
        <script type="text/javascript">
            $(document).ready(function () {

                $("#coverImages").on("change", function () {
                    if ($("#coverImages")[0].files.length > 5) {
                        $('#result').append('<div class="alert alert-warning" role="alert">You can select maximum 5 images</div>');
                    } else {
                        $('#result').empty();
                        var fp = $("#coverImages");
                        var lg = fp[0].files.length;
                        var items = fp[0].files;
                        var fileSize = 0;
                        var ext = "";
                        var flag_size = 1;
                        var flag_type = 1;

                        if (lg > 0) {
                            for (var i = 0; i < lg; i++) {
                                fileSize = items[i].size; // get file size
                                ext = $('#coverImages').val().split('.').pop().toLowerCase();
                                if (fileSize > 2097152) {
                                    flag_size = 0;
                                    break;
                                } else {
                                    if ($.inArray(ext, ['jpg', 'jpeg', 'png']) == -1) {
                                        flag_type = 0;
                                        break;
                                    } else {
                                        $('#result').empty();
                                    }
                                }
                            }
                            if (flag_size == 0) {
                                $('#result').append('<div class="alert alert-warning" role="alert">Please upload image below 2MB</div>');
                                $('#coverImages').val('');
                            }

                            if (flag_type == 0) {
                                $('#result').append('<div class="alert alert-warning" role="alert">Cover images format is invalid. Please upload jpg or jpeg file</div>');
                            }
                        }
                    }
                });

                $('#profileImage').on('change', function () {
                    $('#result').empty();
                    var image_size = this.files[0].size;
                    var ext = $('#profileImage').val().split('.').pop().toLowerCase();
                    if (image_size < 2097152) {
                        if ($.inArray(ext, ['jpg', 'jpeg', 'png']) == -1) {
                            $('#result').append('<div class="alert alert-warning" role="alert">Profile image format is invalid. Please upload jpg or jpeg file</div>');
                        } else {
                            $('#result').empty();
                        }
                    } else {
                        $('#result').append('<div class="alert alert-warning" role="alert">Please upload image below 2MB</div>');
                    }
                });

                $('#edit').click(function (e) {
                    e.preventDefault();
                    $("#result").empty();
                    tinyMCE.triggerSave();
                    var country = $("#countries").val();
                    var about = $("#about").val();
                    var phone = $("#phone").val();
                    var city = $("city").val();
                    var area = $("area").val();
                    var dob = $("dob").val();
                    var wordCount = tinymce.activeEditor.plugins.wordcount.getCount();
                    var profileImage = $("#profileImage")[0].files;
                    var coverImages = $("#coverImages")[0].files;

                    if (country == "") {
                        $("#result").empty();
                        $('#result').append('<div class="alert alert-warning" role="alert">Country cannot be blank!</div>');
                        $('#countries').focus();
                    }
                    if (about == "") {
                        $("#result").empty();
                        $('#result').append('<div class="alert alert-warning" role="alert">About Yourself cannot be blank!</div>');
                        tinymce.execCommand('mceFocus', false, 'about');
                    }
                    if (wordCount > 200) {
                        $("#result").empty();
                        $('#result').append('<div class="alert alert-warning" role="alert"> 200 words exceeded in "About Yourself"</div>');
                        tinymce.execCommand('mceFocus', false, 'about');
                    }

                    if (country != "" && about != "") {
                        alert(profileImage);
                        $.ajax({
                            url: "admin/query/verifyUpdateUserProfile.php",
                            type: "post",
                            data: "country=" + country + "&about=" + about + "&phone="
                                    + phone + "&city=" + city + "&area=" + area + "&dob="
                                    + dob + "&profileImage=" + profileImage + "&coverImages=" + coverImages,
                            success: function (response) {
                                alert(response);
                                if (response == 1) {
                                    //alert("Profile Update Successful");
                                    window.location = 'userProfile';
                                } else {
                                    $("#result").empty();
                                    $("#countries").focus();
                                    $('#result').append('<div class="alert alert-warning" role="alert">Data not updated successfully!</div>');
                                }

                            },
                            error: function (jqXHR, textStatus, errorThrown) {
                                console.log(textStatus, errorThrown);
                            }
                        });
                    }
                });


            });
        </script>
        <a href="#home" class="scroll" id="toTop" style="display: block;">
            <span id="toTopHover" style="opacity: 1;"> </span>
        </a>

        <!-- //Custom-JavaScript-File-Links -->
        <script src="js/bootstrap.js"></script>


    </body>

</html>