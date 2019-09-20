<?php
// Motrar todos los errores de PHP
// error_reporting(-1);

// No mostrar los errores de PHP
// error_reporting(0);

// Motrar todos los errores de PHP
// error_reporting(E_ALL);

// Motrar todos los errores de PHP
// ini_set('error_reporting', E_ALL);

 if (isset($_POST)) {

   if (isset($_POST['name']) && isset($_POST['msg']) && isset($_POST['email']) ) {

    $name = $_POST['name'];
    $company = $_POST['company'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $msg = $_POST['msg'];
    $url = $_POST['url'];

    $email_message = "Details:\n\n";
    $email_message .= "Name: " . $name . "\n";
    $email_message .= "Company: " . $company . "\n";
    $email_message .= "E-mail: " . $email . "\n";
    $email_message .= "Phone: " . $phone . "\n";
    $email_message .= "Message: " . $msg . "\n\n";

    $email_to = "contact";
    $email_subject = "Email de Contacto desde Recyclingdums.com";

    $headers =  'From: recyclingdrums@recyclingdrums.com'."\r\n".
                'Reply-To: '.$email."\r\n" .
                'X-Mailer: PHP/' . phpversion();

    mail($email_to, $email_subject, $email_message, $headers);
    $user = 1;
    header('Location: '.$url.'?ok='.$user);
    // echo"$email_to, $email_subject, $email_message, $headers";
  } else {
  echo "Algo Salio mal";
  }}

?>