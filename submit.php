<?php
$email = $_REQUEST['email'];
$body = $_REQUEST['message'];
$to = "abdulwaheedsharif@gmail.com";
$subject = "Abdul Waheed You Receive This Message From github CV";

$admin_header = "";
$admin_header .= "MIME-Version: 1.0" . "\r\n";
$admin_header .= "Content-type: text/plain; charset=iso-8859-1" . "\r\n";
$admin_header .= "X-Priority: 3" . "\r\n";
$admin_header .= "X-Mailer: PHP". phpversion() ."\r\n";
$admin_header .= 'From: <'.$email.'>' . "\r\n";
mail($to, $subject, $body, $admin_header);
header('location: https://abdul916.github.io/');
?>