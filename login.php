<?php
session_start();
include "db/db_connect.php";
$ipaddress = $_SERVER["REMOTE_ADDR"];
?>

<!DOCTYPE html>
<html lang="zxx">

    <head>
        <title>TechTravellers : Sign In</title>
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
        <?php
        include 'header.php';
        ?>
        <!--//header-->

        <!--/banner-->
        <div class="banner-inner">
        </div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index">Home</a>
            </li>
            <li class="breadcrumb-item active">Sign In</li>
        </ol>
        <!--//banner-->
        <!--/main-->
        <section class="main-content-w3layouts-agileits">
            <div class="container">
                <h3 class="tittle">Sign In Now</h3>
                <div class="row inner-sec">
                    <div class="login p-5 bg-light mx-auto mw-100">
                        <form id="loginForm" action="#">
                            <div id="result"></div>
                            <div class="form-group">
                                <label for="exampleInputEmail1 mb-2">
                                    <span style="color: red;">*</span>
                                    Email address
                                </label>
                                <input type="email" name="userId" class="form-control" id="userId" aria-describedby="emailHelp" placeholder="" required="" pattern="[^]+@[^]+[.][a-z]{2,63}$">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1 mb-2">
                                    <span style="color: red;">*</span>
                                    Password
                                </label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="" required="">
                            </div>
                            <button type="submit" id="login" class="btn btn-primary submit mb-4" disabled="true">Sign In</button>
                            <p><a href="register"> Don't have an account?</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--//main-->
        <!--footer-->
        <?php include 'footer.php'; ?>
        <!--End footer-->
        <!---->
        <!-- js -->
        <script src="js/jquery-2.2.3.min.js"></script>
        <!-- //js -->
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
        <a href="#home" class="scroll" id="toTop" style="display: block;">
            <span id="toTopHover" style="opacity: 1;"> </span>
        </a>

        <!-- //Custom-JavaScript-File-Links -->
        <script src="js/bootstrap.js"></script>

        <script type="text/javascript">
            $(document).ready(function () {
                $('#userId').on('change', function () {
                    var userId = $("#userId").val();
                    $.ajax({
                        url: "admin/query/verifyUserEmail.php",
                        type: "post",
                        data: "userId=" + userId,
                        success: function (response) {
                            //alert(response);
                            if (response != 1) {
                                $("#result").empty();
                                $('#result').append('<div class="alert alert-warning" role="alert">Email does not exists! Please Register!</div>');
                                $('#userId').focus();
                                $('#login').attr('disabled', 'disabled');
                            } else {
                                $("#result").empty();
                            }

                        },
                        error: function (jqXHR, textStatus, errorThrown) {
                            console.log(textStatus, errorThrown);
                        }
                    });
                });

//                $('#userId').on('change', function () {
//                    var password = $("#password").val();
//                    if(password == "") {
//                        $('#login').attr('disabled', 'disabled');
//                    }
//                }

                $('#password').keyup(function () {
                    var userId = $("#userId").val();
                    var password = $("#password").val();

                    if (userId != "" && password != "") {
                        $('#login').removeAttr('disabled');
                    } else if (userId == "" || password == "") {
                        $('#login').attr('disabled', 'disabled');
                    }
                });

                $('#userId').keyup(function () {
                    var userId = $("#userId").val();
                    var password = $("#password").val();

                    if (userId != "" && password != "") {
                        $('#login').removeAttr('disabled');
                    } else if (userId == "" || password == "") {
                        $('#login').attr('disabled', 'disabled');
                    }
                });

                $('#login').click(function (e) {
                    e.preventDefault();
                    $("#result").empty();
                    var userId = $("#userId").val();
                    var password = $("#password").val();

                    if (userId != "") {
                        $("#result").empty();
                        $.ajax({
                            url: "admin/query/verifyUserEmail.php",
                            type: "post",
                            data: "userId=" + userId,
                            success: function (response) {
                                //alert(response);
                                if (response != 1) {
                                    $("#result").empty();
                                    $('#result').append('<div class="alert alert-warning" role="alert">Email does not exists! Please Register!</div>');
                                    $('#userId').focus();
                                    $('#login').attr('disabled', 'disabled');
                                } else {
                                    $("#result").empty();
                                }

                            },
                            error: function (jqXHR, textStatus, errorThrown) {
                                console.log(textStatus, errorThrown);
                            }
                        });
                    } else if (userId == "") {
                        $("#result").empty();
                        $('#result').append('<div class="alert alert-warning" role="alert">Email cannot be blank!</div>');
                        $('#userId').focus();
                        $('#login').attr('disabled', 'disabled');
                    } else if (password == "") {
                        $("#result").empty();
                        $('#result').append('<div class="alert alert-warning" role="alert">Password cannot be blank!</div>');
                        $('#password').focus();
                        $('#login').attr('disabled', 'disabled');
                    }

                    if (userId != "" && password != "") {
                        $.ajax({
                            url: "admin/query/userLoginCheck.php",
                            type: "post",
                            data: "userId=" + userId + "&password=" + password,
                            success: function (response) {
                                //alert(response);
                                if (response == 1) {
                                    window.location = 'userProfile';
                                } else {
                                    $("#result").empty();
                                    $("#userId").val("");
                                    $("#password").val("");
                                    $("#userId").focus();
                                    $('#result').append('<div class="alert alert-warning" role="alert">Email and Password does not match!</div>');
                                    $('#login').attr('disabled', 'disabled');
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
    </body>

</html>