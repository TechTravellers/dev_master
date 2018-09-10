<?php
session_start();
include "db/db_connect.php";
include "usersontxt.php";
$ipaddress = $_SERVER["REMOTE_ADDR"];
?>

<!DOCTYPE html>
<html lang="zxx">

    <head>
        <title>TechTravellers</title>
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
        <!--//Header-->

        <!--/banner-->
        <div class="banner">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="carousel-caption">
                            <h3>"Monsoon Photography Contest 2018" result is available now</h3>
                            <div class="read">
                                <a href="gallery" class="btn btn-primary read-m">Result Published</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item item2">
                        <div class="carousel-caption">
                            <h3>Please share your Travel experience with us</h3>
                            <div class="read">
                                <a href="storyEntry" class="btn btn-primary read-m">Share Your Story</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item item3">
                        <div class="carousel-caption">
                            <h3>View our "Monsoon Photography Contest 2018" Photo Gallery</h3>
                            <div class="read">
                                <a href="gallery" class="btn btn-primary read-m">Photo Gallery</a>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <!--/model-->
        <!--//banner-->
        <section class="bottom-slider">
            <div class="course_demo1">
                <ul id="flexiselDemo1">
                    <?php
                    $sql = "select date,title,story,name from blog_details order by date desc limit 3";
                    //echo $sql;
                    $result = mysqli_query($con, $sql);
                    $i = 1;
                    while ($row = mysqli_fetch_assoc($result)) {
                        $date = $row['date'];
                        $string = strip_tags(htmlspecialchars_decode($row['story']));
                        if (strlen($string) > 100) {
                            // truncate string
                            $stringCut = substr($string, 0, 170);
                            $endPoint = strrpos($stringCut, ' ');

                            //if the string doesn't contain any space then it will cut without word basis.
                            $string = $endPoint ? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                            $title = str_replace(' ', '-', $row['title']);
                            //$title = urldecode($title);
                            // echo $title;
                            $string .= '... ';
                        }
                        ?>
                        <li>
                            <div class="blog-item">
                                <a href="blog/<?php echo $title; ?>" >
                                    <img src="images/<?php echo $i ?>.jpg" alt=" " class="img-fluid" />
                                </a>
                                <!--<button type="button" class="btn btn-primary play" data-toggle="modal" data-target="#exampleModal">
                                    <i class="fas fa-play"></i>
                                </button>-->

                                <div class="floods-text">
                                    <h3><?php echo $row['title']; ?>
                                        <span>Blogger
                                            <label>|</label>
                                            <i><?php echo $row['name']; ?></i>
                                        </span>
                                    </h3>

                                </div>
                            </div>
                        </li>
                        <?php
                        $i++;
                    }
                    ?>

                    <?php
                    $sql = "select date,title,story,name from blog_details order by date asc limit 3";
                    //echo $sql;
                    $result = mysqli_query($con, $sql);
                    $i = 4;
                    while ($row = mysqli_fetch_assoc($result)) {
                        $date = $row['date'];
                        $string = strip_tags(htmlspecialchars_decode($row['story']));
                        if (strlen($string) > 180) {

                            // truncate string
                            $stringCut = substr($string, 0, 180);
                            $endPoint = strrpos($stringCut, ' ');

                            //if the string doesn't contain any space then it will cut without word basis.
                            $string = $endPoint ? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                            $title = str_replace(' ', '-', $row['title']);
                            //$title = urldecode($title);
                            // echo $title;
                            $string .= '... ';
                        }
                        ?>
                        <li>
                            <div class="blog-item">
                                <a href="blog/<?php echo $title; ?>" >
                                    <img src="images/<?php echo $i ?>.jpg" alt=" " class="img-fluid" />
                                </a>
                                <!--<button type="button" class="btn btn-primary play" data-toggle="modal" data-target="#exampleModal">
                                    <i class="fas fa-play"></i>
                                </button>-->

                                <div class="floods-text">
                                    <h3><?php echo $row['title']; ?>
                                        <span>Blogger
                                            <label>|</label>
                                            <i><?php echo $row['name']; ?></i>
                                        </span>
                                    </h3>

                                </div>
                            </div>
                        </li>
                        <?php
                        $i++;
                    }
                    ?>
                </ul>
            </div>

        </section>
        <!--/main-->
        <section class="main-content-w3layouts-agileits">
            <div class="container">
                <div class="row">
                    <!--left-->
                    <div class="col-lg-8 left-blog-info-w3layouts-agileits text-left">
                        <div class="blog-grid-top">
                            <div class="b-grid-top">
                                <div class="blog_info_left_grid">
                                    <?php
                                    $sqlBlog = "select blog_id,title,date,story from blog_details order by date desc limit 1";
                                    $resultBlog = mysqli_query($con, $sqlBlog);
                                    $row = mysqli_fetch_assoc($resultBlog);
                                    $title = str_replace(' ', '-', $row['title']);
                                    $date = $row['date'];
                                    $updatedDate = date('M d, Y', strtotime($date));
                                    $string = strip_tags(htmlspecialchars_decode($row['story']));
                                    if (strlen($string) > 100) {

                                        // truncate string
                                        $stringCut = substr($string, 0, 170);
                                        $endPoint = strrpos($stringCut, ' ');

                                        //if the string doesn't contain any space then it will cut without word basis.
                                        $string = $endPoint ? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                                        $string .= '... ';
                                    }
                                    $sqlImage = "select image_url from blog_images where blog_id=" . $row['blog_id'] . " order by blog_images_id desc limit 1";
                                    //echo $sqlImage;
                                    $resultImage = mysqli_query($con, $sqlImage);
                                    $imageCount = $resultImage->num_rows;
                                    //echo "row count " . mysqli_num_rows($resultImage);
                                    $rowImage = mysqli_fetch_assoc($resultImage);
                                    ?>
                                    <a href="blog/<?php echo $title; ?>">
                                        <?php if (mysqli_num_rows($resultImage) > 0) { ?>
                                            <img src="admin/query/<?php echo $rowImage['image_url']; ?>" class="img-fluid" alt="">
                                            <?php
                                        } else {
                                            ?>
                                            <img src="images/b1.jpg" class="img-fluid" alt="">
                                            <?php
                                        }
                                        ?>
                                    </a>

                                </div>
                                <div class="blog-info-middle">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class = "far fa-calendar-alt"></i> <?php echo $updatedDate; ?></a>
                                        </li>
                                        <li class = "mx-2">
                                            <a href = "#">
                                                <i class = "far fa-thumbs-up"></i> 201 Likes</a>
                                        </li>
                                        <li>
                                            <a href = "#">
                                                <i class = "far fa-comment"></i> 15 Comments</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <h3>
                                <?php echo $row['title']; ?>
                            </h3>
                            <p><?php echo $string; ?></p>
                            <?php $title = str_replace(' ', '-', $row['title']); ?>
                            <a href="blog/<?php echo $title; ?>" class="btn btn-primary read-m">Read More</a>

                        </div>
                        <!--//silder-->
                        <div class="blog-mid-sec">
                            <ul id="flexiselDemo2">
                                <li>
                                    <div class="blog-item">
                                        <img src="images/5.jpg" alt=" " class="img-fluid" />
                                        <button type="button" class="btn btn-primary play sec" data-toggle="modal" data-target="#exampleModal">
                                            <i class="fas fa-play"></i>
                                        </button>
                                        <div class="floods-text">
                                            <h3>Lorem ipsum </h3>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="blog-item">
                                        <img src="images/6.jpg" alt=" " class="img-fluid" />
                                        <button type="button" class="btn btn-primary play sec" data-toggle="modal" data-target="#exampleModal">
                                            <i class="fas fa-play"></i>
                                        </button>
                                        <div class="floods-text">
                                            <h3>Lorem ipsum </h3>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="blog-item">
                                        <img src="images/7.jpg" alt=" " class="img-fluid" />
                                        <button type="button" class="btn btn-primary play sec" data-toggle="modal" data-target="#exampleModal">
                                            <i class="fas fa-play"></i>
                                        </button>
                                        <div class="floods-text">
                                            <h3>Lorem ipsum </h3>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="blog-item">
                                        <img src="images/8.jpg" alt=" " class="img-fluid" />
                                        <button type="button" class="btn btn-primary play sec" data-toggle="modal" data-target="#exampleModal">
                                            <i class="fas fa-play"></i>
                                        </button>
                                        <div class="floods-text">
                                            <h3>Lorem ipsum </h3>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <!--//silder-->
                        <div class="blog-girds-sec">
                            <div class="row">
                                <div class="col-md-6 blog-grid-top">
                                    <div class="b-grid-top">
                                        <div class="blog_info_left_grid">
                                            <a href="single.html">
                                                <img src="images/b2.jpg" class="img-fluid" alt="">
                                            </a>
                                        </div>
                                        <h3>
                                            <a href="single.html">Amet consectetur </a>
                                        </h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt aliqua uta enim.</p>
                                    </div>
                                    <ul class="blog-icons">
                                        <li>
                                            <a href="#">
                                                <i class="far fa-clock"></i> 5 Monts</a>
                                        </li>
                                        <li class="mx-2">
                                            <a href="#">
                                                <i class="far fa-comment"></i> 21</a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fas fa-eye"></i> 2000</a>
                                        </li>

                                    </ul>
                                </div>
                                <div class="col-md-6 blog-grid-top">
                                    <div class="b-grid-top">
                                        <div class="blog_info_left_grid">
                                            <a href="single.html">
                                                <img src="images/b3.jpg" class="img-fluid" alt="">
                                            </a>
                                        </div>
                                        <h3>
                                            <a href="single.html">Amet adipisicing </a>
                                        </h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt aliqua uta enim.</p>

                                    </div>
                                    <ul class="blog-icons">
                                        <li>
                                            <a href="#">
                                                <i class="far fa-clock"></i> 5 Monts</a>
                                        </li>
                                        <li class="mx-2">
                                            <a href="#">
                                                <i class="far fa-comment"></i> 21</a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fas fa-eye"></i> 2000</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--//left-->
                    <!--right-->
                    <aside class="col-lg-4 agileits-w3ls-right-blog-con text-right">
                        <div class="right-blog-info text-left">
                            <div class="tech-btm">
                                <img src="images/banner1.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="tech-btm">
                                <h4>Sign up to our newsletter</h4>
                                <p>Pellentesque dui, non felis. Maecenas male </p>
                                <form action="#" method="post">
                                    <input type="email" placeholder="Email" required="">
                                    <input type="submit" value="Subscribe">
                                </form>

                            </div>


                            <div class="tech-btm widget_social">
                                <h4>Stay Connect</h4>
                                <div id="fb-root"></div>
                                <script>(function (d, s, id) {
                                        var js, fjs = d.getElementsByTagName(s)[0];
                                        if (d.getElementById(id))
                                            return;
                                        js = d.createElement(s);
                                        js.id = id;
                                        js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.1';
                                        fjs.parentNode.insertBefore(js, fjs);
                                    }(document, 'script', 'facebook-jssdk'));</script>
                                <div class="fb-page" data-href="https://www.facebook.com/TechTravellers2018/" data-tabs="timeline" data-height="350" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/TechTravellers2018/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/TechTravellers2018/">TechTravellers</a></blockquote></div>	

                            </div>
                            <div class="tech-btm">
                                <h4>Recent Stories</h4>
                                <?php
                                $sqlStory = "select blog_id,title,date,story from blog_details order by date desc limit 6";
                                $resultStory = mysqli_query($con, $sqlStory);
                                $i = 1;
                                while ($rowStory = mysqli_fetch_assoc($resultStory)) {
                                    $titleStory = str_replace(' ', '-', $rowStory['title']);
                                    $date = $rowStory['date'];
                                    $updatedDate = date('d M, Y', strtotime($date));
                                    $sqlImage = "select image_url from blog_images where blog_id=" . $rowStory['blog_id'] . " order by blog_images_id desc limit 1";
                                    $resultImage = mysqli_query($con, $sqlImage);
                                    $imageCount = $resultImage->num_rows;
                                    //echo $imageCount;
                                    $rowImage = mysqli_fetch_assoc($resultImage);
                                    ?>
                                    <div class="blog-grids row mb-3">
                                        <div class="col-md-5 blog-grid-left">

                                            <a href="blog/<?php echo $titleStory ?>">
                                                <?php if ($imageCount > 0) { ?>
                                                    <img src="admin/query/<?php echo $rowImage['image_url']; ?>" class="img-fluid" alt="">
                                                <?php } else { ?>
                                                    <img src="images/<?php echo $i ?>.jpg" class="img-fluid" alt="">
                                                <?php } ?>
                                            </a>
                                        </div>
                                        <div class="col-md-7 blog-grid-right">

                                            <h5>
                                                <a href="blog/<?php echo $titleStory ?>"> <?php echo str_replace('-', ' ', $rowStory['title']) ?> </a>
                                            </h5>
                                            <div class="sub-meta">
                                                <span>
                                                    <i class="far fa-clock"></i> <?php echo $updatedDate ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    $i++;
                                }
                                ?>
                            </div>
                        </div>

                    </aside>
                    <!--//right-->
                </div>
            </div>
        </section>
        <!--//main-->
        <!--/middle-->
        <section class="middle-sec-agileinfo-w3ls">
            <div class="container">
                <div class="row inner-sec">
                    <div class="col-md-4 news-left">
                        <ul id="demo1_thumbs" class="list-inline">
                            <li>
                                <a href="images/m1.jpg">
                                    <img src="images/m1.jpg" alt="" data-desoslide-caption="<h3>Latest Post 1</h3>">
                                    <div class="mid-text-info">
                                        <h4>Maecenas aliqua</h4>
                                        <p>Integer </p>
                                        <div class="sub-meta">
                                            <span>
                                                <i class="far fa-clock"></i> 20 Feb, 2018</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="images/m2.jpg">
                                    <img src="images/m2.jpg" alt="" data-desoslide-caption="<h3>Latest Post 2</h3>">
                                    <div class="mid-text-info">
                                        <h4>Maecenas aliqua</h4>
                                        <p>Integer </p>
                                        <div class="sub-meta">
                                            <span>
                                                <i class="far fa-clock"></i> 20 Feb, 2018</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="images/m3.jpg">
                                    <img src="images/m3.jpg" alt="" data-desoslide-caption="<h3>Latest Post 3</h3>">
                                    <div class="mid-text-info">
                                        <h4>Maecenas aliqua</h4>
                                        <p>Integer </p>
                                        <div class="sub-meta">
                                            <span>
                                                <i class="far fa-clock"></i> 20 Feb, 2018</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="images/m4.jpg">
                                    <img src="images/m4.jpg" alt="" data-desoslide-caption="<h3>Latest Post 4</h3>">
                                    <div class="mid-text-info">
                                        <h4>Maecenas aliqua</h4>
                                        <p>Integer </p>
                                        <div class="sub-meta">
                                            <span>
                                                <i class="far fa-clock"></i> 20 Feb, 2018</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div id="demo1_main_image" class="col-md-8  news-right"></div>
                    <div class="clearfix"> </div>
                </div>
            </div>

        </section>
        <!--//middle-->
        <!---->
        <section class="main-content-w3layouts-agileits">
            <div class="container">
                <div class="row">
                    <!--left-->
                    <div class="col-lg-8 left-blog-info-w3layouts-agileits text-left">
                        <div class="blog-grid-top">
                            <div class="b-grid-top">
                                <div class="blog_info_left_grid">
                                    <a href="single.html">
                                        <img src="images/b4.jpg" class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="blog-info-middle">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="far fa-calendar-alt"></i> FEB 15,2018</a>
                                        </li>
                                        <li class="mx-2">
                                            <a href="#">
                                                <i class="far fa-thumbs-up"></i> 201 Likes</a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="far fa-comment"></i> 15 Comments</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>

                            <h3>
                                <a href="single.html">Amet consectetur adipisicing </a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt ut labore et dolore magna
                                aliqua uta enim ad minim ven iam quis nostrud exercitation ullamco labor nisi ut aliquip exea commodo consequat duis
                                aute irudre dolor in elit sed uta labore dolore reprehender</p>
                            <a href="single.html" class="btn btn-primary read-m">Read More</a>
                        </div>
                        <!--//silder-->


                    </div>
                    <!--//left-->
                    <!--right-->
                    <aside class="col-lg-4 agileits-w3ls-right-blog-con text-left">
                        <div class="tech-btm">
                            <h4>Recent Posts</h4>

                            <div class="blog-grids row mb-3">
                                <div class="col-md-5 blog-grid-left">
                                    <a href="single.html">
                                        <img src="images/5.jpg" class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="col-md-7 blog-grid-right">

                                    <h5>
                                        <a href="single.html">Pellentesque dui, non felis. Maecenas male non felis </a>
                                    </h5>
                                    <div class="sub-meta">
                                        <span>
                                            <i class="far fa-clock"></i> 20 Jan, 2018</span>
                                    </div>
                                </div>

                            </div>
                            <div class="blog-grids row mb-3">
                                <div class="col-md-5 blog-grid-left">
                                    <a href="single.html">
                                        <img src="images/6.jpg" class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="col-md-7 blog-grid-right">

                                    <h5>
                                        <a href="single.html">Pellentesque dui, non felis. Maecenas male non felis </a>
                                    </h5>
                                    <div class="sub-meta">
                                        <span>
                                            <i class="far fa-clock"></i> 20 Jan, 2018</span>
                                    </div>
                                </div>

                            </div>
                            <div class="blog-grids row mb-3">
                                <div class="col-md-5 blog-grid-left">
                                    <a href="single.html">
                                        <img src="images/7.jpg" class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="col-md-7 blog-grid-right">
                                    <h5>
                                        <a href="single.html">Pellentesque dui, non felis. Maecenas male non felis </a>
                                    </h5>
                                    <div class="sub-meta">
                                        <span>
                                            <i class="far fa-clock"></i> 20 Feb, 2018</span>
                                    </div>
                                </div>

                            </div>
                            <div class="blog-grids row mb-3">
                                <div class="col-md-5 blog-grid-left">
                                    <a href="single.html">
                                        <img src="images/8.jpg" class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="col-md-7 blog-grid-right">

                                    <h5>
                                        <a href="single.html">Pellentesque dui, non felis. Maecenas male non felis </a>
                                    </h5>
                                    <div class="sub-meta">
                                        <span>
                                            <i class="far fa-clock"></i> 20 Jan, 2018</span>
                                    </div>
                                </div>

                            </div>
                            <div class="blog-grids row mb-3">
                                <div class="col-md-5 blog-grid-left">
                                    <a href="single.html">
                                        <img src="images/4.jpg" class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="col-md-7 blog-grid-right">

                                    <h5>
                                        <a href="single.html">Pellentesque dui, non felis. Maecenas male non felis </a>
                                    </h5>
                                    <div class="sub-meta">
                                        <span>
                                            <i class="far fa-clock"></i> 20 Jan, 2018</span>
                                    </div>
                                </div>

                            </div>
                            <div class="blog-grids row mb-3">
                                <div class="col-md-5 blog-grid-left">
                                    <a href="single.html">
                                        <img src="images/6.jpg" class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="col-md-7 blog-grid-right">
                                    <h5>
                                        <a href="single.html">Pellentesque dui, non felis. Maecenas male non felis </a>
                                    </h5>
                                    <div class="sub-meta">
                                        <span>
                                            <i class="far fa-clock"></i> 20 Feb, 2018</span>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </aside>
                    <!--//right-->
                </div>
            </div>
        </section>
        <!--//main-->
        <!--footer-->
        <?php include 'footer.php'; ?>

        <!---->
        <!-- js -->
        <script src="js/jquery-2.2.3.min.js"></script>
        <!-- //js -->
        <!-- desoslide-JavaScript -->
        <script src="js/jquery.desoslide.js"></script>
        <script>
                                    $('#demo1_thumbs').desoSlide({
                                        main: {
                                            container: '#demo1_main_image',
                                            cssClass: 'img-responsive'
                                        },
                                        effect: 'sideFade',
                                        caption: true
                                    });
        </script>

        <!-- requried-jsfiles-for owl -->
        <script>
            $(window).load(function () {
                $("#flexiselDemo1").flexisel({
                    visibleItems: 3,
                    animationSpeed: 1000,
                    autoPlay: true,
                    autoPlaySpeed: 3000,
                    pauseOnHover: true,
                    enableResponsiveBreakpoints: true,
                    responsiveBreakpoints: {
                        portrait: {
                            changePoint: 480,
                            visibleItems: 1
                        },
                        landscape: {
                            changePoint: 640,
                            visibleItems: 2
                        },
                        tablet: {
                            changePoint: 768,
                            visibleItems: 3
                        }
                    }
                });

            });
        </script>
        <script>
            $(window).load(function () {
                $("#flexiselDemo2").flexisel({
                    visibleItems: 3,
                    animationSpeed: 1000,
                    autoPlay: true,
                    autoPlaySpeed: 3000,
                    pauseOnHover: true,
                    enableResponsiveBreakpoints: true,
                    responsiveBreakpoints: {
                        portrait: {
                            changePoint: 480,
                            visibleItems: 1
                        },
                        landscape: {
                            changePoint: 640,
                            visibleItems: 2
                        },
                        tablet: {
                            changePoint: 768,
                            visibleItems: 3
                        }
                    }
                });

            });
        </script>
        <script src="js/jquery.flexisel.js"></script>
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

                var defaults = {
                    containerID: 'toTop', // fading element id
                    containerHoverID: 'toTopHover', // fading element hover id
                    scrollSpeed: 1200,
                    easingType: 'linear'
                };


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


    </body>

</html>

