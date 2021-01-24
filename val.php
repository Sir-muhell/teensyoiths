<?php
include("functions/init.php");
echo date("M d, Y h:i:sa");

//get monthly view from db
     $sql = "SELECT * FROM article";
     $res = query($sql);
     if (row_count($res) != '') {
     
      while ($row = mysqli_fetch_array($res)) {
        
        $tot = $row['view'] + $row['totview'];

        $ssl = "UPDATE article SET `view` = '1', `totview` = '0'";
        $r   = query($ssl);
      }

     }else {
     //do nothing
     }
?>