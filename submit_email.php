<?php

header('Content-Type: application/json');


$name                = $_POST['name'];
$email               = $_POST['email'];
$phone               = $_POST['phone'];
$company_name        = $_POST['company_name'];
$state               = $_POST['state'];
$representative_name = $_POST['representative_name'];

$to = "clientservices@carefulaccounting.com";
$subject = "Interested Contact";

$message = "<b>The following contact have a claim prepared</b>";
$message .= "<h1>Name:" . $name . "</h1>";
$message .= "<h1>Email:" . $email . "</h1>";
$message .= "<h1>Phone:" . $phone . "</h1>";
$message .= "<h1>Company Name: " . $company_name . "</h1>";
$message .= "<h1>State: " . $state . "</h1>";
$message .= "<h1>Representative Name: " . $representative_name . "</h1>";

$header = "From:info@carefulaccounting.com \r\n";
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html\r\n";

$retval = mail($to, $subject, $message, $header);

header('Content-Type: application/json');
die('{"status":"success", "message":"Email Sent to carefulaccounting.com Team"}');

?>