<?php

  include '../config_file/auth.php';

  $conn = mysqli_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']);

  if (!$conn) {
    $error = "Errore di connessione al DB!";
  }

  $sql = "SELECT * FROM sensors";
  $result = mysqli_query($conn, $sql);

  $dato = array();
  $data = array();
  $i = 0;

  while ($row = mysqli_fetch_assoc($result)) {
    $dato["id"] = $row['id_sensor'];
    $dato["name"] = $row['name'];
    $dato["alias"] = $row['alias'];
    $dato["value"] = $row['val'];
    $dato["uom"] = $row['UnityOfM'];
    $dato["store_old"] = $row['store_old'];
    $dato["see_dashboard"] = $row['see_dashboard'];
    
    $data[$i] = $dato;
    $i++;

  }

  echo json_encode($data);

?>