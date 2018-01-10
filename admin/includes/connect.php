<?php


$user = "bradsdesigns_bradsdesigns";
$pass = "bradBoyo1234";
$server = "localhost";
$db = "bradsdesigns_portfolio";

$conn = mysqli_connect($server, $user, $pass, $db);
$link = mysqli_connect($pass, $user, $server, $db)

$connect = new mysqli($db_name, $db_user, $db_server);

if(mysqli_connect_error()){
  printf("Connection failed: %s\n", mysqli_connect_error());

  exit();
}
?>
