<?php
    // Verifica che l'utente sia già loggato, in caso positivo va direttamente alla home
  include '../config_file/auth.php';
  if (checkAuth()) {
    header('Location: home.php');
    exit;
  }

  $conn = mysqli_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']);

  if (!$conn) {
    $error = "Errore di connessione al DB!";
  }

  // Se l'utente fa clic sul pulsante Login, controllo comunque la presenza dei dati.
  if (!empty($_POST["username"]) && !empty($_POST["password"])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
      $_SESSION['username'] = $row['username'];
      $_SESSION['id'] = $row['id'];
      header("Location: ../index.php");
      exit;
    } else {
      $error = "Username e/o password errati.";
    }
  } else if (!empty($_POST["username"]) || !empty($_POST["password"])) $error ="Inserisci username e password."; 


  mysqli_close($conn);
?>


<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <form method="post">
      <h2>LOGIN</h2>
      <?php
          // Verifica la presenza di errori
          if (isset($error)) {
              echo "<p class='error'>$error</p>";
          }
          
      ?>
      <input type="text" name="username" placeholder="Username" required>
      <input type="password" name="password" placeholder="Password" required>
      
      <div id="remember-me">
        <input type="checkbox" id="ricordami" name="ricordami">
        <label for="ricordami">Ricordami</label><br><br>
      </div>

      <button class="btn" type="submit" name="login">Login</button>
    
      <p>Non hai un account? <a href="../registrati">Registrati</a></p>
    </form>
  </body>
</html>