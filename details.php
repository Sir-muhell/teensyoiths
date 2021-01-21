<?php include("functions/top.php");
if (!isset($_GET['read'])) {
    
    redirect("./articles");
} else {

    $data = $_GET['read'];
    $sql = "SELECT * FROM article WHERE `post_url` = '$data'";
    $res = query($sql);
    if (row_count($res) == "") {
        
      redirect("./opps");  
    } else {

        $row = mysqli_fetch_array($res);

        $ipp  = $_SERVER['SERVER_ADDR'];  // get ip address
        $post_url = $data;

        if (isset($_SESSION['Username'])) {
        
        $user = $_SESSION['Username'];

        //chck if the user match article author
        if ($row['author'] == $user) {
            //do nothing
        } else {

        //chck if IP exists
        $ssl = "SELECT * FROM viewer WHERE `art` = '$data' AND `ip` = '$ipp'";
        $rsl = query($ssl);
        if (row_count($rsl) == '') {            
          
        //insert ip address into db
        $isl = "INSERT INTO viewer(`ip`, `art`)";
        $isl.= "VALUES('$ipp', '$data')";
        $qws = query($isl);

        //get the view last value
        $we = "SELECT * FROM article WHERE `post_url` = '$data'";
        $ew = query($we);
        $my = mysqli_fetch_array($ew);

        $vw = $my['view'] + 1;

        //update views
        $drt = "UPDATE article SET `view` = '$vw' WHERE `post_url` = '$data'";
        $drs = query($drt);

        } else {
        //do nothing
        }
        }
    } else {


        //chck if IP exists
        $ssl = "SELECT * FROM viewer WHERE `art` = '$data' AND `ip` = '$ipp'";
        $rsl = query($ssl);
        if (row_count($rsl) == '') {            
          
        //insert ip address into db
        $isl = "INSERT INTO viewer(`ip`, `art`)";
        $isl.= "VALUES('$ipp', '$data')";
        $qws = query($isl);

        //get the view last value
        $we = "SELECT * FROM article WHERE `post_url` = '$data'";
        $ew = query($we);
        $my = mysqli_fetch_array($ew);

        $vw = $my['view'] + 1;

        //update views
        $drt = "UPDATE article SET `view` = '$vw' WHERE `post_url` = '$data'";
        $drs = query($drt);

        } else {
        //do nothing
        }

    }
    }
}
 ?>

    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="./">Home</a></li>
                            <li class="breadcrumb-item"><a href="./articles">Articles</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Article Details</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Sermons Area Start ##### -->
    <div class="sermons-details-area section-padding-100">
        <div class="container">
            <div class="row justify-content-between">
                <!-- Blog Posts Area -->
                <div class="col-12 col-lg-8">
                    <div class="sermons-details-area">

                        <!-- Sermons Details Area -->
                        <div class="single-post-details-area">
                            <div class="post-content">
                                <h2 class="post-title mb-30"><?php echo $row['title'] ?></h2>
                                <img class="mb-30" src="<?php echo $row['pix'] ?>" alt="<?php echo $row['title'] ?>">
                                <!-- Catagory & Share -->
                                <div class="catagory-share-meta d-flex flex-wrap justify-content-between align-items-center">
                                   
                                    <!-- Share -->
                                    <div class="share">
                                        <span>Share: </span>
                                        <a target="_blank" data-media="<?php echo $row['pix']; ?>" href="https://facebook.com/sharer.php?u=https://teensyouths.com.ng/<?php echo $row['post_url'] ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a> &nbsp;&nbsp;&nbsp;
                                        <a target="_blank" data-media="<?php echo $row['pix']; ?>" href="https://twitter.com/home?status=https://teensyouths.com.ng/<?php echo $row['post_url'] ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;
                                        <a target="_blank" data-media="<?php echo $row['pix']; ?>" href="https://api.whatsapp.com/send?text=https://teensyouths.com.ng/<?php echo $row['post_url'] ?>"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <p><?php echo $row['details'] ?></p>

                                <?php
                                if ($row['quote'] != '') {
                                    ?>
                                <blockquote>
                                    <div class="blockquote-text">
                                        <h6>“<?php echo $row['quote'] ?>” </h6>
                                    </div>
                                </blockquote>
                                <?php
                            }
                            ?>
                            </div>
                        </div>

                        <?php 
                        $weds = $row['post_url'];
                        $sql = "SELECT * FROM comment WHERE `post_url` = '$weds'";
                        $res = query($sql);
                        if (row_count($res) == '') {} else {
                        while ($row3 = mysqli_fetch_array($res)) {
                            
                        ?>
                        <!-- Comment Area Start -->
                        <div class="comment_area clearfix">
                            <ol>
                                <!-- Single Comment Area -->
                                <li class="single_comment_area">
                                    <div class="comment-wrapper d-flex">
                                        <!-- Comment Meta -->
                                        <div class="comment-author">
                                            <img src="img/2.png" alt="">
                                        </div>
                                        <!-- Comment Content -->
                                        <div class="comment-content">
                                            <span class="comment-date"><?php echo date('D, M d, Y  ', strtotime($row3['date'])) ?></span>
                                            <h5><?php echo $row3['fname'] ?></h5>
                                            <p><?php echo $row3['text'] ?></p>
                                        </div>
                                    </div>
                                </li>
                            </ol>
                        </div>
                        <?php
                    }
                    }
                    ?>
                        <!-- Leave A Comment -->
                        <div class="leave-comment-area mt-50 clearfix">
                            <div class="comment-form">
                                <h4 class="headline">Leave A Comment</h4>
                                <!-- Contact Form Area -->
                                <div class="contact-form-area">
                                    <form action="#" method="post">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <input id="cfname" type="text" class="form-control" id="contact-name" placeholder="Name">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <input id="cemail" type="email" class="form-control" id="contact-email" placeholder="Email">
                                                </div>
                                            </div>
                                            <input id="cpost" type="text" class="form-control" id="contact-email" placeholder="Email" value="<?php echo $data ?>" hidden>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <textarea id="cxt" class="form-control" name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button type="button" id="cbtn" class="btn crose-btn mt-15">Post Comment</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Blog Sidebar Area -->
                <div class="col-12 col-sm-9 col-md-6 col-lg-3">
                    <div class="post-sidebar-area">


                        <!-- ##### Single Widget Area ##### -->
                        <div class="single-widget-area">
                            <!-- Title -->
                            <div class="widget-title">
                                <h6>Articles from the same author</h6>
                            </div>
                            <?php
                            $rd = $row['author'];
                $sql2 = "SELECT * FROM article WHERE `author` = '$rd' ORDER BY RAND()";
                $res2 = query($sql2);
                if (row_count($res2) == "") {
                    echo 'No uploaded articles yet';
                } else {
                while($row2 = mysqli_fetch_array($res2)) {
                ?>
                            <!-- Single Latest Posts -->
                            <div class="single-latest-post">
                                <a style="text-decoration: none;" href="./<?php echo $row2['post_url']; ?>" class="post-title">
                                    <h6><?php echo $row2['title']; ?></h6>
                                </a>
                                <p class="post-date"><?php echo date('D, M d, Y ', strtotime($row2['datepost'])) ?></p>
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
    </div>
    <!-- ##### Sermons Area End ##### -->

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

        <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div style="background: #f9f9ff; color: #ff0000;" class="modal-content">
                <div class="modal-body">
                    <div id="msg" class="text-center"></div>
                </div>
            </div>
        </div>
    </div> 

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