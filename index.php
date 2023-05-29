<?php
    // Verifica che l'utente sia già loggato, in caso positivo va direttamente alla home
    include 'config_file/auth.php';
    if (!checkAuth()) {
        header('Location: login');
        exit;
    }
    else{
        header('Location: home');
        exit;
    }

    $conn = mysqli_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']);

    if (!$conn) {
    $error = "Errore di connessione al DB!";
    }

?>
