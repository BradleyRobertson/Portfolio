<?php


$user = "root";
$pass = "";
$server = "localhost";
$db = "db_portfolio";


$conn = mysqli($pass, $user, $server, $db);

$link = mysqli_connect($pass, $user, $server, $db)

if(mysqli_connect_error()){
  printf("Connection failed: %s\n", mysqli_connect_error());

  exit();
}
?>
