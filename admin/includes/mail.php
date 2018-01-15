<?php

ini_set('display_errors',1);
error_reporting(E_ALL);

function submitMessage($name, $email, $subject, $message){
  $subject = "Email from portfolio site";
  $youremail = "contact@bradsdesigns.ca";
  $confirm = $email . " has sent you an email \n\n" . $name . " is their name \n\n" . $message;
  //$confirm = " Copy of the message: ". $email . " has sent you an email \n\n" . $name . " is their name \n\n";

  @mail($subject,$youremail,$confirm);
}
 ?>
