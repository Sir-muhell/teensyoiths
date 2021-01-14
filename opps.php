<?php include("functions/top.php"); ?>

        <!-- ##### Hero Area Start ##### -->
    <section style="height: 100%" class="hero-area hero-post-slides owl-carousel">
        <!-- Single Hero Slide -->
        <div class="single-hero-slide bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(img/2.jpeg);">
            <!-- Post Content -->
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="hero-slides-content">
                            <h2 data-animation="fadeInUp" data-delay="100ms">Uh Oh :(</h2>
                            <p data-animation="fadeInUp" data-delay="300ms">Access to this resource is denied</p>
                            <a href="#" onclick="goBack();" class="btn crose-btn" data-animation="fadeInUp" data-delay="500ms">Go Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Hero Area End ##### -->
    <!-- ##### Google Maps End ##### -->


    
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
    <script>
function goBack() {
    window.history.back()
}
</script>
    <script src="ajax.js"></script>
</body>

</html>