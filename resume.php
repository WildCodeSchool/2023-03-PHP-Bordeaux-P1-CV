<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="ASSETS/CSS/main.css">
	<link rel="stylesheet" href="ASSETS/CSS/MODULES/message.css">
	<link rel="icon" type="image/x-icon" href="ASSETS/IMAGES/favicon_io/favicon.ico">
	<title>Curriculum Felidae</title>
</head>

<body id="resumeBody">
<header class="fontColorSecondary"><?php include "_INCLUDES/navbar.php" ?></header>

<hr>
<h1> The Pink Panther </h1>
<hr>

<main>
	<section class="fontColorPrimary" id="biography"><?php include "_INCLUDES/biography.php" ?></section>
	<section class="fontColorPrimary" id="skills"><?php include "_INCLUDES/skills.php" ?></section>
	<section class="fontColorPrimary" id="formations"><?php include "_INCLUDES/formations.php" ?></section>
	<section class="fontColorPrimary" id="experiences"><?php include "_INCLUDES/experiences.php" ?></section>
	<section class="fontColorPrimary" id="contact"><?php include "_INCLUDES/contact.php" ?></section>
	<iframe id="plan"
			src="https://www.google.com/maps/d/u/0/embed?mid=1ewpYDVPR7sIO7LbN4R1LwBRNyEPcv_c&ehbc=2E312F"></iframe>
</main>

<footer class="fontColorSecondary">
	<p>Mentions Légales: Site conçu à des fins pédagogique</p>
	<div>
		<a class="button" id="cv" href="ASSETS/RESSOURCES/cv.pdf" type="submit" target="_blank">Afficher CV </a>
		<a class="button" id="cv" href="ASSETS/RESSOURCES/cv.pdf" download>Télécharger CV </a>
	</div>
</footer>

<script>
	//Navbar
	const x = document.querySelector("#myTopnav");
	const y = document.querySelector(".navbarResponsive");
	let check = true;

	function myFunction() {
		console.log(check)
		if (check === true) {
			check = false;
			x.style.height = "auto";
			y.style.display = "initial";

		} else {
			x.style.height = "7vh";
			check = true;
			y.style.display = "none";
		}
	}
</script>
<script src="https://kit.fontawesome.com/837a298307.js" crossorigin="anonymous"></script>
</body>

</html>