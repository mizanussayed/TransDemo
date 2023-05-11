<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $name = $_POST['name'];

  $email = $_POST['email'];

  $subject = $_POST['subject'];

  $message = $_POST['message'];

  $attachments = array();



  // Get uploaded files

  foreach ($_FILES['file']['tmp_name'] as $key => $tmp_name) {



    $file_name = $_FILES['file']['name'][$key];



    $file_size = $_FILES['file']['size'][$key];



    $file_tmp = $_FILES['file']['tmp_name'][$key];



    $file_type = $_FILES['file']['type'][$key];



    $file_error = $_FILES['file']['error'][$key];



    if ($file_error === UPLOAD_ERR_OK && $file_size > 0) {

      $file_content = file_get_contents($file_tmp);

      $attachments[] = array(

        'name' => $file_name,

        'content' => $file_content,

        'type' => $file_type

      );

      unlink($file_tmp); // Delete uploaded file from server

    }

  }



  // Send email with attachments

  require_once('PHPMailer.php');

  require_once('SMTP.php');

  require_once('Exception.php');



  $hostname = "service@lexicologytranslation.com";

  $password =  "s@%^&*sErViC10936";

  $mail = new PHPMailer\PHPMailer\PHPMailer();

  $mail->Password   =$password;

  $mail->SMTPDebug = 0;

  $mail->CharSet = 'UTF-8';

  $mail->isSMTP();

  $mail->SMTPAuth   = true;

  $mail->Host = "lexicologytranslation.com";

  $mail->Port  = 465;

  $mail->Username   = $hostname;

  $mail->SMTPSecure = "ssl";

  $mail->setFrom($hostname, $hostname);

  $mail->addCC($email, $name);
  $mail->addCC($hostname);

  $mail->Subject  = $subject;

  $mail->isHTML();

  $mail->Body = $message;

  $mail->addAddress("info@lexicologytranslation.com");

  foreach ($attachments as $attachment) {

    $mail->addStringAttachment($attachment['content'], $attachment['name'], 'base64', $attachment['type']);

  }



  if ($mail->send()) {

    echo 'OK';

  } else {

    echo 'Oops! There was a problem sending your message..';

  }

}

?>