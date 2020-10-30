<?php	
	function sendOTP($email,$otp) {
		require('class.phpmailer.php');
		require('class.smtp.php');
	
		$message_body = "You are a member!!!!! your member ID is:<br/><br/>" . $otp;
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
		$mail->Subject = "OTP to Login";
		$mail->MsgHTML($message_body);
		$mail->IsHTML(true);		
		$result = $mail->Send();
		
		return $result;
	}
?>