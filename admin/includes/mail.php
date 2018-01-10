<?php

function redirect_to($location){
  if($location != NULL){
    header("Location: {$location}");
    exit;
  }
}

function submitMessage($name, $message, $email, $subject, $direct){
  $header = "From: " . $email;
  $header2 = "From: " . $youremail;
  $subject = "Email from portfolio site";
  $youremail = "contact@bradsdesigns.ca";
  $formatTo = $email . " has sent you an email \n\n" . $name . " is their name \n\n" . $message;
  $confirm = " Copy of the message: ". $email . " has sent you an email \n\n" . $name . " is their name \n\n";

  mail($youremail,$subject,$formatTo,$header);


  $direct = $direct."?name={name}";
  redirect_to($direct);
}
 ?>
