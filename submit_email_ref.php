<?php

header('Content-Type: application/json');


$first_name          = $_POST['first_name'];
$last_name           = $_POST['last_name'];
$email               = $_POST['email'];
$phone               = $_POST['phone'];
$company_name        = $_POST['company_name'];
$representative_name = $_POST['representative_name'];
$contact_method      = $_POST['contact_method'];

$legal_business_name = $_POST['legal_business_name'];
$business_title      = $_POST['business_title'];
$entity_type         = $_POST['entity_type'];
$tax_id              = $_POST['tax_id'];

$street              = $_POST['street'];
$city                = $_POST['city'];
$state               = $_POST['state'];
$zip                 = $_POST['zip'];

$to = "clientservices@carefulaccounting.com";
$subject = "Referral Partner";

$message = "<p>The following contact has submitted their info:</p>";
$message .= "<h2>First Name: " . $first_name . "</h2>";
$message .= "<h2>Last Name: " . $last_name . "</h2>";
$message .= "<h2>Email: " . $email . "</h2>";
$message .= "<h2>Phone: " . $phone . "</h2>";
$message .= "<h2>Company Name: " . $company_name . "</h2>";
$message .= "<h2>Representative Name: " . $representative_name . "</h2>";
$message .= "<h2>Contact Method: " . $contact_method . "</h2>";

$message .= "<h2>Legal Business Name: " . $legal_business_name . "</h2>";
$message .= "<h2>Business Title: " . $business_title . "</h2>";
$message .= "<h2>Entity Type: " . $entity_type . "</h2>";
$message .= "<h2>Tax ID: " . $tax_id . "</h2>";

$message .= "<h2>Street: " . $street . "</h2>";
$message .= "<h2>City: " . $city . "</h2>";
$message .= "<h2>State: " . $state . "</h2>";
$message .= "<h2>Zip: " . $zip . "</h2>";

$header = "From:info@carefulaccounting.com \r\n";
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html\r\n";

$retval = mail($to, $subject, $message, $header);

header('Content-Type: application/json');
die('{"status":"success", "message":"Email Sent to carefulaccounting.com Team"}');

?>