<?php
   $receiving_email_address = 'contact@ycepstudio.com';

   if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
      include( $php_email_form );
   } else {
      die( 'Unable to load the "PHP Email Form" Library!');
   }

   $contact = new PHP_Email_Form;
   $contact->ajax = true;
   
   $contact->to = $receiving_email_address;
   $contact->from_name = $_POST['name'];
   $contact->from_email = $_POST['email'];
   $contact->subject = $_POST['subject'];

   // You need to enter your correct SMTP credentials here:
      $contact->smtp = array(
         'host' => 'smtpout.secureserver.net', // Servidor SMTP de GoDaddy
         'username' => 'contact@ycepstudio.com', // Tu dirección de correo
         'password' => 'Ycep.8145',  // Contraseña de tu correo
         'port' => '587' // Puerto SMTP de GoDaddy (usualmente 587)
      );

   $contact->add_message( $_POST['name'], 'From');
   $contact->add_message( $_POST['email'], 'Email');
   $contact->add_message( $_POST['message'], 'Message', 10);

   echo $contact->send();
?>