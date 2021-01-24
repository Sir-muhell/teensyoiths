<?php
include("functions/top.php");

//get the last day in a month
$a_date = date("d-m-Y");
$tot = date("M t, Y", strtotime($a_date));
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Admin Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-md-4 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-info"><i class="fa fa-user"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">All Users</span>
           <?php
                 
 $sql="SELECT SUM(sn) AS total from user";
 $result_set=query($sql);
 $row= mysqli_fetch_array($result_set);
 
         ?>       
               <span class="info-box-number"><?php echo $row['total']; ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- ./col -->
          <div class="col-md-4 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-warning"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Subscribers</span>
                 <?php
                 
 $sql="SELECT SUM(sn) AS total from subscribe";
 $result_set=query($sql);
 $row2= mysqli_fetch_array($result_set);
         ?>       
                <span class="info-box-number"><?php echo $row2['total']; ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- ./col -->
          <div class="col-md-4 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-danger"><i class="far fa-edit"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Articles</span>
 <?php
                 
 $sql="SELECT SUM(sn) AS total from article";
 $result_set=query($sql);
 $row3= mysqli_fetch_array($result_set);
         ?>       
                <span class="info-box-number"><?php echo $row3['total']; ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
                            <!-- TABLE: LATEST ORDERS -->

        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
             <div class="col-md-4">
            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Most Viewed Article</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
               <?php
 $sql="SELECT * FROM article ORDER BY `view` DESC LIMIT 3";
 $result_set=query($sql);
 while($row= mysqli_fetch_array($result_set))
 {
  ?> 
              <div class="card-body">
                        <p>Article.: <b><?php echo $row['title'] ?></b><br/>
                           Monthly View.:  <b><?php echo $row['view'] ?></b><br/>  
                           Annual View..:  <b><?php echo $row['totview'] ?></b><br/>
                           Author..:  <b><?php echo $row['author'] ?></b><br/>
                           Author Email.: <b><?php echo $row['author_mail'] ?></b><br> 
                        </p>
              </div>
              <?php
            }
            ?>

              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
 <div class="col-md-4">
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Latest Article</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
             <?php
 $sql="SELECT * FROM article ORDER BY `id` DESC LIMIT 3";
 $result_set=query($sql);
 while($row= mysqli_fetch_array($result_set))
 {
  ?>
              <div class="card-body">
              <p>Article.: <b><?php echo $row['title'] ?></b><br/>
                           Monthly View.:  <b><?php echo $row['view'] ?></b><br/>  
                           Annual View..:  <b><?php echo $row['totview'] ?></b><br/>
                           Author..:  <b><?php echo $row['author'] ?></b><br/>
                           Author Email.: <b><?php echo $row['author_mail'] ?></b><br> 
                        </p>
              </div>
              <?php
            }
            ?>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>

             <div class="col-md-4">
            <div class="card card-green">
              <div class="card-header">
                <h3 class="card-title">Countdown</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
                    
              <div class="card-body">
                <p><?php echo $tot ?> - <span id="demo"></span></p>
              
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>

        </div>
        <!-- /.row (main row) -->
        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include("include/footer.php"); ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<!-- Display the countdown timer in an element -->
<script>
// Set the date we're counting down to
var countDownDate = new Date("<?php echo $tot ?>").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>
</body>
</html>