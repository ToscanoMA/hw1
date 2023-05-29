<?php

    include '../config_file/auth.php';
    // Verifica che l'utente sia già loggato, in caso positivo va direttamente alla home
    if (!checkAuth()) {
        header('Location: ../login');
        exit;
    }

    $conn = mysqli_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']);

    if (!$conn) {
    $error = "Errore di connessione al DB!";
    }

    $sql = "SELECT id_sensor, alias, store_old, see_dashboard  FROM sensors ";
    $result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html>
    <head>
        <title>MySolar</title>
        <script src="settings.js" defer></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="setting_style.css">
    </head>

    <body>
        <header>
            <nav>
                <div id="logo">
                    MySolar
                </div>
                <div id="links">
                    <a href="../home">HOME</a>
                    <a href="">SETTING</a>
                    <a href="../contactUs">CONTACT</a>
                    <div id="separator"></div>
                    <a href='../api/logout.php' class='button'>LOGOUT</a>
                </div>
                <div id="menu">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </nav>
        </header>

        <section>
            <div id="content">
                <table>
                    <tr>
                        <th>Entity</th>
                        <th>Dashboard</th>
                        <th>History</th>
                    </tr>
                </table>
            </div>
        </section>
        <footer>
            <nav>
                <div class="footer-container">
                    <div class="footer-col">
                        <h1>MySolar</h1>
                    </div>
                    <div class="footer-col">
                        <strong>AZIENDA</strong>
                        <p><a href="../home">HOME</a></p>
                        <p><a href="">SETTING</a></p>
                        <p><a href="../contactUs">CONTACT</a></p>
                        <p><a href="../api/logout.php">LOGOUT</a></p>
                    </div>
          
                </div>
            </nav>
        </footer>

    </body>
</html>