<?php


include "../config/connection.php";
$firstname=isset($_POST["firstname"])?$database->cleaner($_POST["firstname"]):"the variable was not sent ";
$lastname=isset($_POST["lastname"])?$_POST["lastname"]:"the variable awa snot sent";
$email=isset($_POST["email"])?$database->cleaner(filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)):"the variable wa not sent";
$message=isset($_POST["message"])?$database->cleaner($_POST["message"]):"variable waw not wents";
$error=array();// to display the errors from the server
$data=array();
if(empty($firstname)):
  $error["firstname"]="the firstname is required";
else:
  $error["firstname"]="";
endif;
if(empty($lastname)):
  $error["lastname"]="the lastname is required";
endif;

if(empty($email)):
  $error["email"]="the email is required";
endif;
if(empty($message)):
  $error["message"]="the message is required";
endif;
if(!empty($error)){
$data=array("fail"=>$error);
  echo json_encode($data) ;
}else{
  $data=array("success"=>"thank you so much for you time");
  require "../phpmailer/PHPMailerAutoload.php";
  require "../phpmailer/class.phpmailer.php";
  require "../phpmailer/class.phpmaileroauth.php";
  $mail = new PHPMailer();

$mail->isMail();
$mail->isSMTP();                                     // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'mrthappymailz@gmail.com';                 // SMTP username
$mail->Password = 'bankers2';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;
$mail->SetFrom($email);
$mail->addAddress("mrthappymailz@gmail.com");               // Name is optional
$mail->FromName =$firstname . $lastname;
$mail->isHTML(true);
$mail->Subject = 'SASP Contact Form';
$mail->Body= '<p>'  .  $message . $firstname . $lastname.$email. '</p>';
if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {

   echo json_encode($data) ;
}

}


?>
