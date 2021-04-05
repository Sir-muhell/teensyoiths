<?php

$longString =  $row['content'];
$string = substr($longString,0,strpos($longString,' ',50)) . " ...";
?>