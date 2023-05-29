<?php 

    // Apro la sessione
    session_start();	
    // Eliminazione delle variabili di sessione
    session_unset();

    // Distruzione della sessione
    session_destroy();

    // Reindirizzamento alla pagina di login
    header("Location: ../index.php");
?>