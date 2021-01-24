<?php
include("functions/init.php");
$a = md5("securitysecured");

$sql = "UPDATE admin SET `password` = '$a' WHERE `user` = 'teenstoyouth
'";
$res = query($sql);
 ?>