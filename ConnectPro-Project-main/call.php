<?php
  require __DIR__ . '/vendor/autoload.php';
  use Twilio\Rest\Client;
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;
  require_once "vendor/autoload.php";

  $name = $_POST['myname'];
  $extension = $_POST['extension'];

  if ($extension == null) {
      $text = $_POST['message'];
      $phone  = $_POST['phone'];

      // Your Account SID and Auth Token from twilio.com/console
      $sid = 'AC8a0029b4fa21aab19569ac4c157bd1ce';
      $token = '04c446a6e322ef1369d0188c244d2280';
      /*
      $twilio = new Client($sid, $token); 
      $message = $twilio->messages 
                        ->create($phone, // to 
                                 array(  
                                     "messagingServiceSid" => "MG34b9a3f8da1947b0f8c50e1875e9fe10",      
                                     "body" => $text . " - " . $name
                                 ) 
                        ); 
      print($message->sid);
      */

      $twilio = new Client($sid, $token);
      $message = $twilio->messages
                        ->create($phone, // to
                                 ["body" => $text . " - " . $name, "from" => "+12404340902"]
                        );
      print($message->sid);
  } else {
      $emailExtension = "";
      $message = $_POST['message'];
      if($_POST['extension'] == "T-mobile") $emailExtension =  "@tmomail.net";
      if($_POST['extension'] == "AT&T") $emailExtension =  "@txt.att.net";
      if($_POST['extension'] == "Verizon Wireless") $emailExtension =  "@vtext.com";
      if($_POST['extension'] == "Sprint") $emailExtension =  "@messaging.sprintpcs.com";
      $recipient = $_POST['phone'] . $emailExtension;

      $mail = new PHPMailer();
      $mail->isSMTP();
      $mail->SMTPAuth = true;
      $mail->SMTPSecure = 'ssl'; 
      $mail->Host = 'smtp.gmail.com'; 
      $mail->Port = '465';
      $mail->isHTML();
      $mail->Username = 'connectpro.gmu@gmail.com'; 
      $mail->Password = 'GMUFall2021'; 
      $mail->From = "connectpro.gmu@gmail.com";
      $mail->FromName = $name;
      $mail->Subject = 'ConnectPro Notification'; 
      $mail->Body = $message . " -" . $name;
      $mail->AltBody = $message . " - " . $name;
      $mail->isHTML(false);
      $mail->AddAddress($recipient);  

      try {
          $mail->Send();
          echo "Message has been sent successfully";
      } catch (Exception $e) {
          echo "Mailer Error: " . $mail->ErrorInfo;
      }
  }

?>
