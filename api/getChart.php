<?php

    include '../config_file/auth.php';

    $conn = mysqli_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']);


    $entity=$_GET["read_id"];
    $data = array();

    // Query per recuperare i dati dalla tabella
    $sql = "SELECT TIME(o.data_time) AS h, o.val FROM old_values o INNER JOIN sensors s ON o.sensor_id=s.id_sensor WHERE s.id_sensor='$entity' ORDER BY data_time ASC";
    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
        $data[$row['h']] = $row['val'];
    }

    // $row contiene tutti i dati ordinati per costruire il grafico
    echo json_encode($data);
    // Chiusura della connessione al database
    mysqli_close($conn);
?>