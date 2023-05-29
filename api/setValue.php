<?php

  include '../config_file/auth.php';


  $conn = mysqli_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']);

  if (!$conn) {
    $error = "Errore di connessione al DB!";
  }
  $id = $_GET["id"];
  $value = $_GET["value"];
  $field = $_GET["field"];

  $sql = "UPDATE `sensors` SET `$field` = '$value' WHERE `sensors`.`id_sensor` = $id";
  if(mysqli_query($conn, $sql))return 1;
  else return 0;
?>