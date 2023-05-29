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

    if(!empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["message"])){
        
        // Prendi i dati inviati dal form
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        // Inserisci i dati nel database
        $sql = "INSERT INTO messages (name, email, message) VALUES ('$name', '$email', '$message')";
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Messaggio inviato con successo!');</script>";
        } else {
            $err = "Errore: " . $sql . "<br>" . mysqli_error($conn);
            echo "<script>alert('$err');</script>";
        }
    }


    // Chiudi la connessione al database
    mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Contattaci</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style_CU.css">
    </head>
    <body>
    
        <header>
            <nav>
                <div id="logo">
                    MySolar
                </div>
                <div id="links">
                    <a href="../home">HOME</a>
                    <a href="../settings">SETTING</a>
                    <a href="">CONTACT</a>
                    <div id="separator"></div>
                    <a href='../api/logout.php' class='button'>LOGOUT</a>
                </div>
                <div id="menu">
                <div></div>
                <div></div>
                <div></div>
                </div>
            </nav>
    
	        <form id="contact-form" method="post">
                <h1>Contact Us</h1>
                <input type="text" name="name" placeholder="Name" required>
                <input type="email" name="email" placeholder="Email" required>
                <textarea name="message" placeholder="Message" required></textarea>
                <div id="term">
                    <input type="checkbox" id="terms" required>
                    <label for="terms">Accept our privacy terms</label><br><br>
                </div>
                <button class="btn" type="submit">Send</button>
            </form>
        </header>
    
        <footer>
            <nav>
                <div class="footer-container">
                    <div class="footer-col">
                        <h1>MySolar</h1>
                    </div>
                    <div class="footer-col">
                        <strong>AZIENDA</strong>
                        <p><a href="../home">HOME</a></p>
                        <p><a href="../settings">SETTING</a></p>
                        <p><a href="">CONTACT</a></p>
                        <p><a href="../api/logout.php">LOGOUT</a></p>
                    </div>
          
                </div>
            </nav>
        </footer>
    </body>

</html>