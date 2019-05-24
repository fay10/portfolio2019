<?php
		$name = $_Post['name'];
		$visitor_email = $_Post['email'];
		$message = $_Post['message'];

		$email_from = 'Fay.schouten@outlook.com';
		$email_subject = "New form Submission";
		$email_body = "User Name: $name.\n".
										"User E-mail: $visitor_email.\n".
											"User Message: $message.\n";

		$to = "fay.schouten@outlook.com";
		$headers = "From: $emai_from \r\n";
		$headers .= "Reply-To: $visitor_email \r\n";
		mail($to,$email_subject,$email_body,$headers);
		header("Location: index.html");
?>
