<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name = trim($_POST["name"]);
$email = trim($_POST["email"]);
$message = trim($_POST["message"]);


if ($name == "" OR $email == "" OR $message == "" ) {
	echo "You must specify a value for name, email and message.";
	exit;
	}
foreach( $_POST as $value ){
	if( stripos($value,'Content-Type:') !== FALSE ) {
	echo "There is a problem with the information you provided";
	exit;
	}
}

if ($_POST["address"] != "") {
	echo "Your form submission has an error";
	exit;
	}
	require_once("inc/phpmailer/class.phpmailer.php");
	$mail = new PHPMailer();
	
	if(!$mail->ValidateAddress($email)){
	echo "You must specify a valid email address.";
	exit;
	
	
	}

$email_body = "";
$email_body = $email_body . "Name: " . $name . " <br> ";
$email_body = $email_body . "E-mail: " . $email . " <br> ";
$email_body = $email_body . "Message: <br> " . $message;

		$mail->SetFrom($email, $name);

		$address = "jmcneill@mrmcneill.net";
		$mail->AddAddress($address, " Mr.McNeill");
		$mail->Subject    = " Mr. McNeill Submission Form | " . $name;
		$mail->MsgHTML($email_body);

		//$mail->AddAttachment("images/phpmailer.gif");      // attachment
		//$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment

		if(!$mail->Send()) {
		  echo "There was a problem sending the email. " . $mail->ErrorInfo;
		exit;
		} 

header("Location: contact.php?status=thanks");
exit;
}


?><?php 
$section = "contact";
$pageTitle = "Mr.McNeill | Contact";
include('inc/header.php');
?>
<meta name="Mr.McNeill" content="How to Contact Designer/Developer Mr.McNeill">
		<div id="wrapper">

			<section id="primary">
				<h3> General Information</h3>
				
				<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					I am casually accepting freelance design work while aggressively pursuing Entry Level Employment in the Baltimore area. Specifically areas of SQL Development, Software Engineering(Java), or Front End Development.I am also heavily considering less technical roles(help desk, tech support, etc) in hopes to eventually move into a more technical role once I have gained experience. I have a foundation in a lot of areas but I've yet to be provided with an opportunity to build upon them in a professional setting. <strong> Technical internship opportunities (with/without compensation) are also a top priority . </strong>  </p>
			
			</section>

   			<section id="secondary">
			<h3> Contact </h3>
			
			<?php if (isset($_GET["status"]) AND $_GET["status"] == "thanks"){ ?>
			<p> Thank you for taking the time to contact me. I will reply at my earliest convenience. </p> 
			<?php } else { ?>
							<form method="post" action="contact.php">
							<table>
								<tr>
									<th>
										<label for="name"> Name </label> 
									</th>
									<td>
										<input type="text" name="name" id="name">
									</td>
								</tr>
								
								<tr>
									<th>
										<label for="email"> E-Mail </label> 
									</th>
									<td>
										<input type="text" name="email" id="email">
									</td>
								</tr>
								
								<tr>
									<th>
										<label for="message"> Message </label> 
									</th>
									<td>
										<textarea name="message" id="message"></textarea>
									</td>
								</tr>
								<tr style="display: none;">
									<th>
										<label for="address"> Address </label> 
										<p> If you are human please leave this field blank. </p>
									</th>
									<td>
										<textarea name="address" id="address"></textarea>
									</td>
								</tr>
							</table>
							<input type="submit" value="Send">
							</form>
					<?php } ?>
			</section>


			<?php include('inc/footer.php'); ?>