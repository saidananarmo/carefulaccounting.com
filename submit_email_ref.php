<?php

header('Content-Type: application/json');


$first_name          = $_POST['first_name'];
$last_name           = $_POST['last_name'];
$email               = $_POST['email'];
$phone               = $_POST['phone'];
$company_name        = $_POST['company_name'];
$state               = $_POST['state'];
$representative_name = $_POST['representative_name'];
$contact_method      = $_POST['contact_method'];

$legal_business_name = $_POST['legal_business_name'];
$business_title      = $_POST['business_title'];
$entity_type         = $_POST['entity_type'];
$tax_id              = $_POST['tax_id'];

$street              = $_POST['representative_name'];
$city                = $_POST['representative_name'];
$state               = $_POST['representative_name'];
$zip                 = $_POST['representative_name'];

$to = "clientservices@carefulaccounting.com";
$subject = "Referral Partner";

$message = "<b>The following contact has submitted their info:</b>";
$message .= "<h1>First Name:" . $first_name . "</h1>";
$message .= "<h1>Last Name:" . $last_name . "</h1>";
$message .= "<h1>Email:" . $email . "</h1>";
$message .= "<h1>Phone:" . $phone . "</h1>";
$message .= "<h1>Company Name: " . $company_name . "</h1>";
$message .= "<h1>State: " . $state . "</h1>";
$message .= "<h1>Representative Name: " . $representative_name . "</h1>";
$message .= "<h1>Contact Method: " . $contact_method . "</h1>";

$message .= "<h1>Legal Business Name: " . $legal_business_name . "</h1>";
$message .= "<h1>Business Title: " . $business_title . "</h1>";
$message .= "<h1>Entity Type: " . $entity_type . "</h1>";
$message .= "<h1>Tax ID: " . $tax_id . "</h1>";

$message .= "<h1>Street: " . $street . "</h1>";
$message .= "<h1>City: " . $city . "</h1>";
$message .= "<h1>State: " . $state . "</h1>";
$message .= "<h1>Zip: " . $zip . "</h1>";

$header = "From:info@carefulaccounting.com \r\n";
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html\r\n";

$retval = mail($to, $subject, $message, $header);

header('Content-Type: application/json');
die('{"status":"success", "message":"Email Sent to carefulaccounting.com Team"}');

?>