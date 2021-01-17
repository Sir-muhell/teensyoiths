<?php include("functions/top.php");

if (!isset($_GET['id']) && !isset($_GET['lead'])) {
    
    redirect("./articles");
} else {
    $data = $_GET['id'];
    $lead = $_GET['lead'];
$sql = "SELECT * FROM article WHERE `post_url` = '$data' AND `pidr` = '$lead'";
$res = query($sql);
if (row_count($res) == "") {
    
    redirect("./articles");
} else {

    $row = mysqli_fetch_array($res);
}
}
 ?>

        <!-- ##### Hero Area Start ##### -->
    <section class="hero-area hero-post-slides owl-carousel">
        <!-- Single Hero Slide -->
        <div class="single-hero-slide bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(img/bg-img/15.jpg);">
            <!-- Post Content -->
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="hero-slides-content">
                            <h2 data-animation="fadeInUp" data-delay="100ms">Edit Article</h2>
                            <p data-animation="fadeInUp" data-delay="300ms">Saw an error? Let fix it asap!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Hero Area End ##### -->
    <!-- ##### Google Maps End ##### -->

    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area" id="upl">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact-content-area">
                        
                <div class="row">
                <div class="col-12">
                    <!-- Contact Form Area -->
                    <div class="contact-form-area">
                        <form action="update.php" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-12 col-lg-12">
                                    <div class="form-group">
                                        <label for="contact-name">Article Title*:</label>
                                        <input name="title" type="text" value="<?php echo $row['title'] ?>" class="form-control" id="contact-name" placeholder="Input your article title here" required>
                                    </div>
                                </div>

                                <input name="idn" type="text" value="<?php echo $row['pidr'] ?>" class="form-control" id="contact-name" placeholder="Input your article title here" hidden>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="message">Article Details*:</label>
                                        <textarea name="det" class="form-control" name="message" id="message" cols="30" rows="10" placeholder="Lets your view on the subject matter" required><?php echo $row['details'] ?></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="message">Cite a Quote:</label>
                                        <textarea name="cite" class="form-control" name="message" id="message" cols="30" rows="10" placeholder="You can cite a quote here if the need be. This field is optional"><?php echo $row['quote'] ?></textarea>
                                    </div>
                                </div>
                                 <div class="col-12 col-lg-12">
                                    <div class="form-group">
                                        <label for="contact-number">Upload an article image <span style="color: red;">(.jpg and .Jpeg formats only)</span>*:</label>
                                       <input type="file" name="fileToUpload" class="form-control" id="fileToUpload">
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <button name="update" type="submit" class="btn crose-btn mt-15">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->

    
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