<?php
include("init.php");
include("includes/header.php");


//get the last day in a month
$a_date = date("d-m-Y");
$tot = date("M t, Y", strtotime($a_date));


function hulo() {

    echo 'document.getElementById("demo").innerHTML = "EXPIRED";';

    //get monthly view from db
     $sql = "SELECT * FROM article";
   	 $res = query($sql);
   	 if (row_count($res) != '') {
   	 
   	 	while ($row = mysqli_fetch_array($res)) {
   	 		
   	 		$tot = $row['view'] + $row['totview'];

   	 		$ssl = "UPDATE article SET `view` = '0', `totview` = '$tot'";
   	 		$r   = query($ssl);
   	 	}

   	 }else {
   	 //do nothing
   	 }


}
?>

<p id="demo" hidden></p>

<script>
// Set the date we're counting down to
var countDownDate = new Date("Jan 22, 2021 16:31").getTime();

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
    

    //initaia php functions to update
    <?php

    	//get monthly view from db
     $sql = "SELECT * FROM article";
   	 $res = query($sql);
   	 if (row_count($res) != '') {
   	 
   	 	while ($row = mysqli_fetch_array($res)) {
   	 		
   	 		$tot = $row['view'] + $row['totview'];

   	 		$ssl = "UPDATE article SET `view` = '0', `totview` = '$tot'";
   	 		$r   = query($ssl);
   	 	}

   	 }else {
   	 //do nothing
   	 }

     ?>
     clearInterval(x);
  }
}, 1000);
</script>