<?php	
	function sendConfirmation($email,$eventcode)
	{
		require('class.phpmailer.php');
		require('class.smtp.php');
	
		$message_body = "You have successfully registered to volunteer for Event number <br><br>" . $eventcode;
		$mail = new PHPMailer();
		$mail->IsSMTP();
		$mail->SMTPDebug = 0;
		$mail->SMTPAuth = TRUE;
		$mail->SMTPSecure = 'tls'; // tls or ssl
		$mail->Port     = "587";
		$mail->Username = "";
		$mail->Password = "";
		$mail->Host     = "smtp.gmail.com";
		$mail->Mailer   = "smtp";
		$mail->SetFrom("ETZCHAYIM@gmail.com", "ETZCHAYIM");
		$mail->AddAddress($email);
		$mail->Subject = "Event Volunteer Confirmation";
		$mail->MsgHTML($message_body);
		$mail->IsHTML(true);		
		$result = $mail->Send();
		
		return $result;
	}
?>