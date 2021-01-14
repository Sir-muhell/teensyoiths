<?php include("functions/top.php");
if (!isset($_GET['id'])) {
    
    redirect("./forgot");
} else {

    //validate id
    $data  = escape(clean($_GET['id']));

    $sql = "SELECT * FROM user WHERE `activator` = '$data'";
    $res = query($sql);
    if (row_count($res) == "") {
       
        redirect("./opps");
    }
}

 ?>

        <!-- ##### Hero Area Start ##### -->
    <section class="hero-area hero-post-slides owl-carousel">
        <!-- Single Hero Slide -->
        <div class="single-hero-slide bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(img/5.jpg);">
            <!-- Post Content -->
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="hero-slides-content">
                            <h2 data-animation="fadeInUp" data-delay="100ms">Reset Password</h2>
                            <p data-animation="fadeInUp" data-delay="300ms">Let`s get you back in.</p>
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
                    <div class="section-heading">
                        <h2>hello :)</h2>
                        <p>Kindly input a new password.</p>
                    </div>
                </div>
            </div>
                <div class="row">
                <div class="col-12">
                    <!-- Contact Form Area -->
                    <div class="contact-form-area">
                        <form method="post">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="form-group">
                                        <label for="contact-email">Create a new password*:</label>
                                        <input id="pword" type="password" class="form-control" id="contact-email" placeholder="Create a new password">
                                    </div>
                                </div>
                                 <div class="col-12 col-lg-6">
                                    <div class="form-group">
                                        <label for="contact-number">Confirm Password*:</label>
                                        <input id="cpword" type="password" class="form-control" id="contact-number" placeholder="Confirm Password">
                                    </div>
                                </div>
                                <input type="text" value="<?php echo $data ?>" id="fxgacti" hidden>
                                <div class="col-12 text-center">
                                    <a href="./signin" style="color: red; text-decoration: none;"><p>Sign in </a>| <a href="./signup" style="color: red; text-decoration: none;">Create an account</p></a>
                                    <button id="frgtnxt" type="button" class="btn crose-btn mt-15">Sign in</button>
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