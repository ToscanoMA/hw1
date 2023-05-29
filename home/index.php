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

  $sql = "SELECT id_sensor, name FROM sensors WHERE store_old = 1";
  $result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html>
  <head>
    <title>MySolar</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" defer></script>	
    <script src="grafico.js" defer></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div id="modal-content" class="hidden"></div>
    <header>
      <nav>
        <div id="logo">
          MySolar
        </div>
        <div id="links">
          <a href="">HOME</a>
          <a href="../settings">SETTING</a>
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
      <h1>Tieni sempre sotto controllo il tuo impianto!</h1>
    </header>
    
    <section id="container">
    </section>
  
    <footer>
      <nav>
        <div class="footer-container">
          <div class="footer-col">
            <h1>MySolar</h1>
            <p>Un progetto di Marco A. Toscano, studente del dipartimento di Ingegneria Informatica dell'università degli studi di Catania.</p>
          </div>
          <div class="footer-col">
            <strong>AZIENDA</strong>
            <p><a href="">HOME</a></p>
            <p><a href="../settings">SETTING</a></p>
            <p><a href="../contactUs">CONTACT</a></p>
            <p><a href="../api/logout.php">LOGOUT</a></p>
          </div>
          <div class="footer-col">
            <strong>METEO</strong>
            <img id="icon">
            <p id="temperature"></p>
            <p id="condition"></p>
          </div>
        </div>
      </nav>
    </footer>
  </body>
</html>