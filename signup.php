<?php include("functions/top.php"); ?>

        <!-- ##### Hero Area Start ##### -->
    <section class="hero-area hero-post-slides owl-carousel">
        <!-- Single Hero Slide -->
        <div class="single-hero-slide bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(img/2.jpeg);">
            <!-- Post Content -->
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="hero-slides-content">
                            <h2 data-animation="fadeInUp" data-delay="100ms">Join the Revolution</h2>
                            <p data-animation="fadeInUp" data-delay="300ms">start by registering on our platform</p>
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
                        <h2>Let`s get you a space</h2>
                        <p>Required fields are marked.</p>
                    </div>
                </div>
            </div>
                <div class="row">
                <div class="col-12">
                    <!-- Contact Form Area -->
                    <div class="contact-form-area">
                        <form method="post">
                            <div class="row">
                                <div class="col-12 col-lg-4">
                                    <div class="form-group">
                                        <label for="contact-name">Full Name*:</label>
                                        <input id="fname" type="text" class="form-control" id="contact-name" placeholder="Input your full name">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4">
                                    <div class="form-group">
                                        <label for="contact-email">Email*:</label>
                                        <input id="email" type="email" class="form-control" id="contact-email" placeholder="input your email address">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4">
                                    <div class="form-group">
                                        <label for="contact-number">Username*:</label>
                                        <input id="usname" type="text" class="form-control" id="contact-number" placeholder="Create a username">
                                    </div>
                                </div>
                                 <div class="col-12 col-lg-4">
                                    <div class="form-group">
                                        <label for="contact-number">Password*:</label>
                                        <input id="pword" type="password" class="form-control" id="contact-number" placeholder="Create a Password">
                                    </div>
                                </div>
                                 <div class="col-12 col-lg-4">
                                    <div class="form-group">
                                        <label for="contact-number">Confirm Password*:</label>
                                        <input id="cpword" type="password" class="form-control" id="contact-number" placeholder="Retype the Password here">
                                    </div>
                                </div>
                                 <div class="col-12 col-lg-4">
                                    <div class="form-group">
                                        <label for="contact-number">Phone*:</label>
                                        <input id="tel" type="number" class="form-control" id="contact-number" placeholder="Input your telephone number">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="message">About you*:</label>
                                        <textarea id="msgr" class="form-control" name="message" id="message" cols="30" rows="10" placeholder="Let`s get to know you better"></textarea>
                                    </div>                                    
                                <a href="./signin" style="color: red; text-decoration: none;">Have a space? You can signin here</a>
                                </div>
                                <div class="col-12 text-center">
                                    <button id="nxtSign" type="button" class="btn crose-btn mt-15">Next Step</button>
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