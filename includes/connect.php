<?php


$db_name = "db_portfolio";
$db_user = "root";
$db_pass = "";
$db_server = "localhost";

$connect = new mysqli($db_name, $db_user, $db_server);

if ($connect->conect_error){
  die("Connection failed: ")

  exit();
}
?>
