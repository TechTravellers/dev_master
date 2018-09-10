<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 footer-grid-agileits-w3ls text-left" data-aos="fade-down">
                <h3>About US</h3>
                <p>We are a group of Travelers who seek new places to explore. We are here to help you with travel related information across India. We are providing a platform where you can share your experiences with the world..</p>
                <div class="read">
                    <a href="about" class="btn btn-primary read-m">Read More</a>
                </div>
            </div>
            <div class="col-lg-4 footer-grid-agileits-w3ls text-left">

                <div class="tech-btm" data-aos="fade-down">
                    <h3>Latest Posts</h3>
                    <?php
                    $sql = "select date,title,story,name,blog_id from blog_details order by date desc limit 3";
                    $result = mysqli_query($con, $sql);
                    $i = 1;
                    while ($row = mysqli_fetch_assoc($result)) {
                        $title = str_replace(' ', '-', $row['title']);
                        $date = $row['date'];
                        $updatedDate = date('d M, Y', strtotime($date));
                        $sqlImage = "select image_url from blog_images where blog_id=" . $row['blog_id'] . " order by blog_images_id desc limit 1";
                        $resultImage = mysqli_query($con, $sqlImage);
                        $imageCount = $resultImage->num_rows;
                        //echo $imageCount;
                        $rowImage = mysqli_fetch_assoc($resultImage);
                        ?>
                        <div class="blog-grids row mb-3">
                            <div class="col-md-5 blog-grid-left">
                                <a href="blog/<?php echo $title ?>">
                                    <?php if ($imageCount > 0) { ?>
                                        <img src="admin/query/<?php echo $rowImage['image_url']; ?>" class="img-fluid" alt="">
                                    <?php } else { ?>
                                        <img src="images/<?php echo $i ?>.jpg" class="img-fluid" alt="">
                                    <?php } ?>
                                </a>
                            </div>
                            <div class="col-md-7 blog-grid-right">

                                <h5>
                                    <a href="blog/<?php echo $title ?>"> <?php echo str_replace('-', ' ', $row['title']) ?> </a>
                                </h5>
                                
                                <div class="sub-meta">
                                    <span>
                                        <i class="far fa-clock"></i> <?php echo $updatedDate ?></span>
                                </div>
                            </div>
                        </div>
                        <?php $i++;
                    }
                    ?>
                </div>
            </div>
            <!-- subscribe -->
            <div class="col-lg-4 subscribe-main footer-grid-agileits-w3ls text-left" data-aos="fade-down">
                <h2>Signup to our newsletter</h2>
                <div class="subscribe-main text-left">
                    <div class="subscribe-form">
                        <form action="#" method="post" class="subscribe_form">
                            <input class="form-control" type="email" placeholder="Enter your email..." required="">
                            <button type="submit" class="btn btn-primary submit">Submit</button>
                        </form>
                        <div class="clearfix"> </div>
                    </div>
                    <p>We respect your privacy.No spam ever!</p>
                </div>
                <!-- //subscribe -->
            </div>
        </div>
        <!-- footer -->
        <div class="footer-cpy text-center">
            <div class="w3layouts-agile-copyrightbottom">
                <p>© Techtravellers. All Rights Reserved 	
                </p>

            </div>
        </div>


    </div>
</footer>
<!-- //footer -->