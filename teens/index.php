<?php include("functions/top.php"); ?>

    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area hero-post-slides owl-carousel">
        <!-- Single Hero Slide -->
        <div class="single-hero-slide bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(img/4.jpg);">
            <!-- Post Content -->
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="hero-slides-content">
                            <h2 data-animation="fadeInUp" data-delay="100ms">The Next Generation Leads</h2>
                            <p data-animation="fadeInUp" data-delay="300ms">Let the revolution begin…</p>
                            <a href="./signup" class="btn crose-btn" data-animation="fadeInUp" data-delay="500ms">Join the Revolution Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Single Hero Slide -->
        <div class="single-hero-slide bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(img/1.jpg);">
            <!-- Post Content -->
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="hero-slides-content">
                            <h2 data-animation="fadeInUp" data-delay="100ms">Live An Upward Life</h2>
                            <p data-animation="fadeInUp" data-delay="300ms">Join the revolution of teens, young adult, and youths</p>
                            <a href="./signup" class="btn crose-btn" data-animation="fadeInUp" data-delay="500ms">Join the Revolution Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### About Area Start ##### -->
    <section class="about-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading">
                        <h2>About US</h2>
                        <p>TeensYouths® is a vibrant community for teens & youths from all over the world, offering inspiring insight and opinion on a variety of topics.</p>
                    </div>
                </div>
            </div>

            <div class="row about-content justify-content-center">
                <!-- Single About Us Content -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="about-us-content mb-100">
                        <img src="img/bg-img/13.jpg" alt="">
                        <div class="about-text">
                            <h4>Who we are</h4>
                            <p>We are committed to sharing insightful articles, opinions, and materials that will help teens and youths become all they can be, leveraging the opportunities around and within them.</p>
                            <a href="./about">Read More <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Single About Us Content -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="about-us-content mb-100">
                        <img src="img/bg-img/15.jpg" alt="">
                        <div class="about-text">
                            <h4>What we do</h4>
                            <p>We’re committed to sharing inspiring and life-transforming articles to help change your life for good.</p>
                            <a href="./about">Read More <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Single About Us Content -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="about-us-content mb-100">
                        <img src="img/bg-img/31.jpg" alt="">
                        <div class="about-text">
                            <h4>What we`ve done</h4>
                            <p>Join the revolution of teens, young adult, and youths. TeensYouths® is a vibrant community for teens & youths from all over the world, offering inspiring insight and opinion on a variety of topics.</p>
                            <a href="./about">Read More <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### About Area End ##### -->

    <!-- ##### Call To Action Area Start ##### -->
    <section class="call-to-action-area section-padding-100 bg-img bg-overlay" style="background-image: url(img/2.jpeg)">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="call-to-action-content text-center">
                        <h6>An online platform for you</h6>
                        <h2>A perfect place to connect and grow</h2>
                        <a href="#" class="btn crose-btn btn-2">Become A Member</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Call To Action Area End ##### -->

    <!-- ##### Blog Area Start ##### -->
    <section class="blog-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading">
                        <h2>Trending Articles</h2>
                        <p>Get motivated with articles from writers just like you!</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">

                 <?php
                $sql = "SELECT * FROM article ORDER BY view desc";
                $res = query($sql);
                if (row_count($res) == "") {
                    echo 'No uploaded articles yet';
                } else {
                while($row = mysqli_fetch_array($res)) {
                    $det = $row['details'];
                    $z = str_word_count($det);
                    $w = "...";
                    $y = substr_replace($det, $w, $z);
                ?>
                <!-- Single Blog Post Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-blog-post mb-100">
                        <div class="post-thumbnail">
                            <a style="text-decoration: none;" href="<?php echo $row['post_url']; ?>"><img style="width: 100%; height: 300px;" src="<?php echo $row['pix']; ?>" alt=""></a>
                        </div>
                        <div class="post-content">
                            <a style="text-decoration: none;" href="<?php echo $row['post_url']; ?>" class="post-title">
                                <h4><?php echo $row['title']; ?></h4>
                            </a>
                            <div class="post-meta d-flex">
                                <a style="text-decoration: none;" href="#"><i class="fa fa-user" aria-hidden="true"></i> <?php echo $row['author']; ?></a>
                                <a style="text-decoration: none;" href="#"><i class="fa fa-eye" aria-hidden="true"></i> <?php echo $row['view']; ?></a>
                            </div>
                            <p class="post-excerpt"><?php echo $y; ?></p>
                            <a style="text-decoration: none;" href="<?php echo $row['post_url']; ?>">Read More</a>
                        </div>
                    </div>
                </div>

               <?php
           }
       }
       ?>

                
            </div>
        </div>
    </section>
    <!-- ##### Blog Area End ##### -->

    <!-- ##### Upcoming Events Area Start ##### -->
    <section class="upcoming-events-area section-padding-0-100">
        <!-- Upcoming Events Heading Area -->
        <div class="upcoming-events-heading bg-img bg-overlay bg-fixed" style="background-image: url(img/bg-img/19.jpg);">
            <div class="container">
                <div class="row">
                    <!-- Section Heading -->
                    <div class="col-12">
                        <div class="section-heading text-left white">
                            <h2>Latest Articles</h2>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Upcoming Events Slide -->
        <div class="upcoming-events-slides-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="upcoming-slides owl-carousel">
                             <?php
                $sql2 = "SELECT * FROM article ORDER BY id asc";
                $res2 = query($sql2);
                if (row_count($res2) == "") {
                    echo 'No uploaded articles yet';
                } else {
                while($row2 = mysqli_fetch_array($res2)) {
                    $det = $row2['details'];
                    $z = str_word_count($det);
                    $w = "...";
                    $y = substr_replace($det, $w, $z);
                    ?>
                            <div class="single-slide">
                                <!-- Single Upcoming Events Area -->
                                <div class="single-upcoming-events-area d-flex flex-wrap align-items-center">
                                    <!-- Thumbnail -->
                                    <div class="upcoming-events-thumbnail">
                                        <img style="width: 100%; height: 200px;" src="<?php echo $row2['pix']; ?>" alt="">
                                    </div>
                                    <!-- Content -->
                                    <div class="upcoming-events-content d-flex flex-wrap align-items-center">
                                        <div class="events-text">
                                            <h4><?php echo $row2['title']; ?></h4>
                                            <div class="events-meta">
                                                <a style="text-decoration: none" href="#"><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo date('D, M d, Y', strtotime($row2['datepost'])) ?></a>
                                                <a style="text-decoration: none" href="#"><i class="fa fa-eye" aria-hidden="true"></i> <?php echo $row2['view']; ?></a>
                                            </div>
                                            <p><?php echo $y; ?></p>
                                        </div>
                                        <div class="find-out-more-btn">
                                            <a href="<?php echo $row2['post_url']; ?>" class="btn crose-btn btn-2">Find Out More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        }
                        ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Upcoming Events Area End ##### -->

    

    <!-- ##### Subscribe Area Start ##### -->
    <section class="subscribe-area">
        <div class="container">
            <div class="row align-items-center">
                <!-- Subscribe Text -->
                <div class="col-12 col-lg-6">
                    <div class="subscribe-text">
                        <h3>Subscribe To Receive Updates</h3>
                        <h6>Enter your email address to receive blog updates.</h6>
                    </div>
                </div>
                <!-- Subscribe Form -->
                <div class="col-12 col-lg-6">
                    <div class="subscribe-form text-right">
                        <form>
                            <input type="email" name="subscribe-email" id="subscribeEmail" placeholder="Your Email">
                            <button type="button" id="subbtn" class="btn crose-btn">SEND ME FREE UPDATES</button>
                            <i><p id="err" style="color: white;">*We won't share your information with anyone.</p></i>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Subscribe Area End ##### -->

    <?php include("includes/footer.php"); ?>

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
    <script src="ajax.js"></script>
</body>

</html>