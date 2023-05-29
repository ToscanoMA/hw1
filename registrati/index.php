<?php

	include '../config_file/auth.php';
	// Verifica che l'utente sia già loggato, in caso positivo va direttamente alla home
	if (checkAuth()) {
		header('Location: home.php');
		exit;
	}

	$conn = mysqli_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']);

	if (!$conn) {
	$error = "Errore di connessione al DB!";
	}


	$error = array();  //inizializzo un array dove carico gli eventuali errori



	// Controllo l'esistenza dei dati ricevuti
	if (!empty($_POST["username"]) && !empty($_POST["password"]) && !empty($_POST["email"]) && !empty($_POST["confirm_password"])){
		
		$username = $_POST["username"];
		$email = $_POST["email"];
		$password= md5($_POST["password"]);
		$confirm_password= md5($_POST["confirm_password"]);

		if(strlen($username < 3)) {
			$error[] = "L'username deve essere lungo almeno 3 caratteri!";
		}
			
		// Controllo che l'email abbia un formato valido
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$error[] = "L'email non ha un formato valido!";
		}
			
		// Controllo se l'username o l'email sono già stati registrati
		$query = "SELECT * FROM users WHERE username = '$username' OR email = '$email'";
		$result = mysqli_query($conn, $query);
		if(mysqli_num_rows($result) > 0) {
			$error[] = "L'username e/o l'email sono già stati registrati!";
		}
		// Controllo lunghezza password (minimo 6 caratteri)
		if(strlen($password) < 6) {
			$error[] = "La password deve essere lunga almeno 6 caratteri!";
		}
		if(strcmp($password, $confirm_password != 0)) {
			$error[] = "Le due password non coincidono!";
		}

			
		// Inserisco l'utente nel database 

		$query="INSERT INTO `users`(`username`, `email`, `password`) VALUES ('$username','$email','$password')";
		$result = mysqli_query($conn, $query);

		//avvio la sessione e salvo lo username nella variabile
		session_start();
		$_SESSION['username'] = $username;
		// Redirect alla pagina di successo
		header("Location: ../");
		exit();
		
	}
	else if(isset($_POST["username"]) || isset($_POST["password"]) || isset($_POST["email"]) || isset($_POST["confirm_password"])) {
		$error []=  "I dati inseriti non sono validi";
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Registrazione</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="style.css">
		<script src="validation.js" defer="true"></script>
	</head>
	<body>
			
			<form method="post">
				<h2>REGISTRATI</h2>
				<div>
					<input type="text" id="username" name="username" placeholder="Username" >
					<span id="username-error" class="error-message"></span>
					<br>
				</div>

				<div>
					<input type="email" id="email" name="email" placeholder="Email" >
					<span id="email-error" class="error-message"></span>
					<br>
				</div>

				<div>
					<input type="password" id="password" name="password" placeholder="Password" >
					<span id="password-error" class="error-message"></span>
					<br>
				</div>

				<div>
					<input type="password" id="confirm_password" name="confirm_password" placeholder="Conferma Password" >
					<span id="confirm-password-error" class="error-message"></span>
					<br>
				</div>
				
				<?php 
					if(isset($error)) {
						foreach($error as $err) {
							echo "<div class='error-message'><span>".$err."</span></div>";
						}
					} 
				?>

				
				<div class="submit">
					<input type='submit' class="btn" value="Registrati" id="submit">
				</div>

				<p class="redirect">Hai un account? <a href="../login">Accedi</a></p>
			</form>
	</body>
</html>