<?php
// Information to be modified
$to_email = "dekpep@gmail.com; // email address to which the form data will be sent
$subject = "MoveComparison.com Quote Request"; // subject of the email that is sent
$thanks_page = "index.html"; // path to the thank you page following successful form submission
$contact_page = "index.html"; // path to the HTML contact page where the form appears


$frn = strip_tags($_POST["firstName"]);
$lan = strip_tags($_POST["lastName"]);
$ema = strip_tags($_POST["email"]);
$pho = strip_tags($_POST["phoneNo"]);
$frz = strip_tags($_POST["fromZip"]);
$toz = strip_tags($_POST["toZip"]);
$mon = strip_tags($_POST["month"]);
$dat = strip_tags($_POST["day"]);
$yea = strip_tags($_POST["year"]);
$mov = strip_tags($_POST["moveSize"]);
$car = strip_tags($_POST["carShipping"]);
$ter = strip_tags($_POST["Terms"]);

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: <' .$ema. '>' . "\r\n";
$headers .= "Reply-To: ".$ema."\r\n";

$email_body = 
	"<strong>From: </strong>" . $frn . $lan . "<br />
	<strong>Email: </strong>" . $ema . "<br />	
	<strong>Phone: </strong>" . $pho . "<br />	
	<strong>Moving From Zip Code: </strong>" . $frz . "<br />	
	<strong>Moving To Zip Code: </strong>" . $toz . "<br />
    <strong>Anticipated Move Date (m-d-y): </strong>" . $mon . ' - ' . $day . ' - ' . $yea . "<br />	
	<strong>Estimated Move Size: </strong>" . $mov . "<br />	
	<strong>Is Car Shipping Needed?: </strong>" . $car . "<br />
	

// Assuming there's no error, send the email and redirect to Thank You page
	
if( mail($to_email, $subject, $email_body, $headers) ) {	
	echo '<div class="form-msg"> <i class="fa fa-check-square-o"></i> Thank you ' .$nam. '. We successfully Received Your Details! </div>';
} else {	
	echo '<div class="form-msg-error"> <i class="fa fa-warning"></i> Sorry ' .$nam. '. Your Email was not sent. Resubmit form again Please.. </div>';
}
die();