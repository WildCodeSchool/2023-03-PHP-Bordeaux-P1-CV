<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/ASSETS/CSS/main.css">
	<link rel="stylesheet" href="/ASSETS/CSS/MODULES/message.css">
	<link rel="icon" type="image/x-icon" href="/ASSETS/IMAGES/favicon_io/favicon.ico">
	<title>Curriculum Felidae</title>
</head>

<body >
	<div class="messageContent" id="message">
		<h1>Message Envoyé !</h1>
		<div class="messageReturn"><?php
		if (isset($_POST['submit'])) {
			$firstName = $_POST['firstName'];
			$email = $_POST['email'];
			$subject = $_POST['subject'];
			$message = $_POST['message'];
			// afficher le résultat
			echo 'Merci ' . $firstName . ' ' . ' de m\'avoir contacté à propos de ' . "$subject" . '<br>';
			echo 'Je vous contacterai à l’adresse ' . $email . ' si votre projet est très lucratif !!! ';
		}
		?></div>
	</div>
	<div id="imageMessage"><img src="ASSETS/IMAGES/panther-message.png" alt="logo pink panther" ></div>
</body>
</html>



