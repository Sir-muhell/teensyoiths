<?php include("functions/top.php");

if (!isset($_SESSION['Username']) || !isset($_SESSION['user'])) {
    
    redirect("./signup");
}
 ?>

    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                         <?php 
    if (isset($_SESSION['msg'])) {
       
       echo '<ol class="breadcrumb">
                            <li class="breadcrumb-item bg-danger"><a style="color: white" href="./">'.$_SESSION['msg'].'</a></li>
                        </ol>';
    } else {
     ?>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="./">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">My Articles</li>
                        </ol>
                        <?php 
}
     ?>

                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Events Area Start ##### -->
    <div class="events-area section-padding-100">
        <div class="container">
            <div class="row">

                <!-- Events Title -->
                <div class="col-12">
                    <div class="events-title">
                        <h2>My Articles</h2>
                    </div>
                </div>


                <?php
                $r = $_SESSION['Username'];
                $sql = "SELECT * FROM article WHERE `author` = '$r' ORDER BY id asc ";
                $res = query($sql);
                if (row_count($res) == "") {
                    
                    echo '<div class="col-12">
                    <!-- Single Upcoming Events Area -->
                    <div class="single-upcoming-events-area d-flex flex-wrap align-items-center">
                        <!-- Thumbnail -->
                        <div class="upcoming-events-thumbnail">
                            <img src="img/2.png" alt="">
                        </div>
                        <!-- Content -->
                        <div class="upcoming-events-content d-flex flex-wrap align-items-center">
                            <div class="events-text">
                                <h4>Write an Article</h4>
                                <p>Share with us with your feel or some motivation. We will be glad to hear from you. Be a voice!</p>
                                <a style="text-decoration: none;" href="./write">Write my first article<i class="fa fa-angle-double-right"></i></a>
                            </div>
                            <div class="find-out-more-btn">
                                <a href="./write" class="btn crose-btn btn-2">Write my first article</a>
                            </div>
                        </div>
                    </div>
                </div>';
                    
                } else {
                while($row = mysqli_fetch_array($res)) {
                ?>

                <div class="col-12">
                    <!-- Single Upcoming Events Area -->
                    <div class="single-upcoming-events-area d-flex flex-wrap align-items-center">
                        <!-- Thumbnail -->
                        <div class="upcoming-events-thumbnail">
                            <img src="<?php echo $row['pix']; ?>" alt="">
                        </div>
                        <!-- Content -->
                        <div class="upcoming-events-content d-flex flex-wrap align-items-center">
                            <div class="events-text">
                                <h4><?php echo $row['title']; ?></h4>
                                <div class="events-meta">
                                    <a style="text-decoration: none;" href="#"><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo date('D, M d, Y  h:i:sa', strtotime($row['datepost'])) ?></a>
                                    <a style="text-decoration: none;" href="./edit?id=<?php echo $row['post_url']; ?>&lead=<?php echo $row['pidr']; ?>"><i class="fa fa-edit" aria-hidden="true"></i> Edit</a>
                                    <a style="text-decoration: none;" href="./delete?id=<?php echo $row['post_url']; ?>&lead=<?php echo $row['pidr']; ?>"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a>
                                    <p id="tsr" hidden><?php echo $row['pidr']; ?></p>
                                    <a style="text-decoration: none;" href="#"><i class="fa fa-eye" aria-hidden="true"></i> <?php echo $row['view']; ?></a>
                                </div>

                                <p><?php echo $row['details']; ?></p>
                                 <div class="share">
                                        <span>Share: </span>
                                        <a target="_blank" href="https://facebook.com/sharer.php?u="><i class="fa fa-facebook" aria-hidden="true"></i></a> &nbsp;&nbsp;&nbsp;
                                        <a target="_blank" href="https://twitter.com/home?status="><i class="fa fa-twitter" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;
                                        <a target="_blank" href="https://api.whatsapp.com/send?text="><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                                    </div>
                            </div>
                            <div class="find-out-more-btn">
                                <a href="./details?read=<?php echo $row['post_url']; ?>" class="btn crose-btn btn-2">Read More</a>
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
    <!-- ##### Events Area End ##### -->

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
    <div class="modal fade" id="delModalCenter">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div style="background: #f9f9ff; color: #ff0000;" class="modal-content">
                <div class="modal-body">
                    <div id="msg" class="text-center"> Are you sure you want to delete this post?</div>
                    <div class="row">
                    <button type="button" id="yes" class="btn btn-default col-lg-6 float-left">Yes</button>
                    <button type="button" class="btn btn-default col-lg-6 float-right" data-dismiss="modal">No</button>
                </div>
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
    <script>
        
    </script>
</body>
<?php
if (isset($_SESSION['msg'])) {
    
    unset($_SESSION['msg']);
}
  ?>
</html>