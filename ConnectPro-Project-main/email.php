<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require_once "vendor/autoload.php";

	$text = $_POST['message'];
  	$email = $_POST['phone'];
  	$name = $_POST['myname'];

	$mail = new PHPMailer();
	$mail->isSMTP();
	$mail->SMTPDebug = 1;
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = 'ssl'; 
	$mail->Host = 'smtp.gmail.com'; 
	$mail->Port = '465';
	$mail->isHTML();
	$mail->Username = 'connectpro.gmu@gmail.com'; 
	$mail->Password = 'GMUFall2021'; 
	$mail->From = "connectpro.gmu@gmail.com";
	$mail->FromName = $name;
	$mail->Subject = 'ConnectPro Contact Submission'; 
	$mail->Body = $text;
	$mail->AltBody = $text;
	$mail->isHTML(false);
	$mail->AddAddress($email);  
	$mail->AddAddress('connectpro.gmu@gmail.com');

	try {
	    echo $mail->Send();
	} catch (Exception $e) {
	    echo "Mailer Error: " . $mail->ErrorInfo;
	}
?>