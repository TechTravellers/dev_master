<?php
session_start();
include "db/db_connect.php";
$ipaddress = $_SERVER["REMOTE_ADDR"];
?>

<!DOCTYPE html>
<html lang="zxx">

    <head>
        <title>TechTravellers : Registration</title>
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
            <li class="breadcrumb-item active">Register</li>
        </ol>
        <!--//banner-->
        <!--/main-->
        <section class="main-content-w3layouts-agileits">
            <div class="container">
                <h3 class="tittle">Register Now</h3>
                <div class="inner-sec">
                    <div class="login p-5 bg-light mx-auto mw-100">
                        <form action="#" id="registerForm">
                            <div id="result"></div>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom01">
                                        <span style="color: red;">*</span>
                                        Name
                                    </label>

                                    <input type="text" class="form-control" id="name" name="name" placeholder="" required="">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom02">
                                        <span style="color: red;">*</span>
                                        Email
                                    </label>
                                    <input type="text" class="form-control" id="email" name="email" placeholder="" required="">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputPassword1 mb-2">
                                        <span style="color: red;">*</span>
                                        Password
                                    </label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="" required="">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputPassword2 mb-2">
                                        <span style="color: red;">*</span>
                                        Confirm Password
                                    </label>
                                    <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="" required="">
                                </div>

                            </div>
                            <button type="submit" id="register" name="register" class="btn btn-primary submit mb-4">Sign Up</button>
                            <p>
                                <a href="#">By clicking Signup, I agree to your terms</a>
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </p>
                        </form>

                    </div>
                </div>
            </div>
        </section>
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

//                $('#confirmPassword').keypress(function () {
//                    var password = $("#password").val();
//                    var confirmPassword = $("#confirmPassword").val();
//                    $('#result').empty();
//                    if (password != confirmPassword) {
//                        $('#result').append('<div class="alert alert-warning" role="alert">Password and Confirm Password does not match</div>');
//                    } else if(password == confirmPassword){
//                        $('#result')empty();
//                    }
//                });
//
//                

                $('#register').click(function (e) {
                    e.preventDefault();
                    $("#result").empty();
                    var name = $("#name").val();
                    var email = $("#email").val();
                    var password = $("#password").val();
                    var confirmPassword = $("#confirmPassword").val();

                    if (name == "") {
                        $("#result").empty();
                        $('#result').append('<div class="alert alert-warning" role="alert">Name cannot be blank!</div>');
                        $('#name').focus();
                    } else if (email == "") {
                        $("#result").empty();
                        $('#result').append('<div class="alert alert-warning" role="alert">Email cannot be blank!</div>');
                        $('#email').focus();
                    } else if (password == "") {
                        $("#result").empty();
                        $('#result').append('<div class="alert alert-warning" role="alert">Password cannot be blank!</div>');
                        $('#password').focus();
                    } else if (confirmPassword == "") {
                        $("#result").empty();
                        $('#result').append('<div class="alert alert-warning" role="alert">Confirm Password cannot be blank!</div>');
                        $('#confirmPassword').focus();
                    } else if (password != confirmPassword) {
                        $("#result").empty();
                        $('#result').append('<div class="alert alert-warning" role="alert">Password and Confirm Password does not match</div>');
                        $('#confirmPassword').focus();
                    }

                    if (name != "" && email != "" && password != "" && confirmPassword != "" && password == confirmPassword) {
                        $.ajax({
                            url: "admin/query/verifyRegistration.php",
                            type: "post",
                            data: "email=" + email + "&password=" + password + "&name=" + name,
                            success: function (response) {
                                //alert(response);
                                if (response == 1) {
                                    //alert("Registration Successful");
                                    window.location = 'editProfile';
                                } else {
                                    $("#result").empty();
                                    $('#name').val("");
                                    $('#email').val("");
                                    $("#password").val("");
                                    $("#confirmPassword").val("");
                                    $("#name").focus();
                                    $('#result').append('<div class="alert alert-warning" role="alert">Email ID already present!</div>');
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