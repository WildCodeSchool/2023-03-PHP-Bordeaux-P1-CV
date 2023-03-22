?>
<div class="message">
	<div class="messageContent">
		<h1>Message Envoyé</h1>
		<?php
		if (isset($_POST['submit'])) {
			$firstName = $_POST['firstName'];
			$email = $_POST['email'];
			$subject = $_POST['subject'];
			$message = $_POST['message'];
			// afficher le résultat
			echo 'Merci ' . $firstName . ' ' . ' de m\'avoir contacté à propos de ' . "$subject" . '<br>';
			echo 'Je vous contacterai à l’adresse ' . $email . ' si votre projet est très lucratif !!! ';
		}
		?>
	</div>
</div>
