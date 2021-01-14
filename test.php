<?php
	$you = "Greatbessabolade@outlook.com";

	$to 		= $you;
    $from 		= "noreply@teensyouths.com.ng";

	$headers  = "From: " . $from . "\r\n";
	$headers .= "Reply-To: ". $from . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=\"iso-8859-1\"\n";
    $headers .= "X-Priority: 1 (Highest)\n";
    $headers .= "X-MSMail-Priority: High\n";
    $headers .= "Importance: High\n";

    $subject = "Activate Email";

    $logo = 'https://teensyouths.com.ng/img/2.png';
    $url  = 'https://teensyouths.com.ng';
    $link = 'https://teensyouths.com.ng/./';

	$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>TeensYouths.. Let the revolution begin</title></head><link rel='stylesheet' href='https://teensyouths.com.ng/css/bootstrap.min.css'><body style='text-align: center;'>";
	$body .= "<section style='margin: 30px; margin-top: 50px ; background: #c92f2f; color: white;'>";
	$body .= "<img style='margin-top: 35px' src='{$logo}' alt='DotLive'>";
	$body .= "<h1 style='margin-top: 45px; color: #fbb710'>Activate your email to continue</h1>
		<br/>";
	$body .= "<p style='margin-left: 45px; margin-top: 34px; text-align: left; font-size: 17px;'>Hi there! <br/> Thank you for signing up. Kindly click on the link below to activate your email;</p>
		<br/>";
	$body .= "<p style='margin-left: 45px; text-align: left;'><a target='_blank' href='{$link}' style='color: #fbb710; text-decoration: none'>Click here to activate your email</a></p>
		<br/>";
	$body .= "<p style='margin-left: 45px; padding-bottom: 80px; text-align: left;'>Do not bother replying this email. This is a virtual email</p>";
	$body .= "<p style='text-align: center; padding-bottom: 50px;'></p>";	
	$body .= "<script src='https://teensyouths.com.ng/js/bootstrap/bootstrap.min.js'></script>";
	$body .= "</section>";	
	$body .= "</body></html>";

	echo $to, $subject, $body, $headers;
    //$send = mail($to, $subject, $body, $headers);
?>