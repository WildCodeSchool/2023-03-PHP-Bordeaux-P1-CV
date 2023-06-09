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
	<nav class="fontColorSecondary" id="navbar"><?php include "_INCLUDES/navbar.php" ?></nav>
	<h1> The Pink Panther </h1>
	<hr>
<main>
	<section class="fontColorPrimary" id="biography"><?php include "_INCLUDES/biography.php" ?></section>
	<section class="fontColorPrimary" id="skills"><?php include "_INCLUDES/skills.php" ?></section>
	<section class="fontColorPrimary" id="formations"><?php include "_INCLUDES/formations.php" ?></section>
	<section class="fontColorPrimary" id="experiences"><?php include "_INCLUDES/experiences.php" ?></section>
	<section class="fontColorPrimary" id="contact"><?php include "_INCLUDES/contact.php" ?></section>
	<iframe id="plan" src="https://www.google.com/maps/d/u/0/embed?mid=1ewpYDVPR7sIO7LbN4R1LwBRNyEPcv_c&ehbc=2E312F"></iframe>
</main>


        <div id="scrollUp">
            <a href="#top"> <i class="fa-solid fa-arrow-trend-up fa-beat fa-2xl" style="color: #DF6466;"></i></a>
        </div>



<footer class="fontColorSecondary">
	<div>
		<a class="button" id="cv" href="ASSETS/RESSOURCES/cv.pdf" type="submit" target="_blank">Afficher CV </a>
		<a class="button" id="cv" href="ASSETS/RESSOURCES/cv.pdf" download>Télécharger CV </a>
	</div>
	<p>Mentions Légales: Site conçu à des fins pédagogique</p>
</footer>


<script>
	//Navbar
	const x = document.querySelector("#myTopnav");
	const y = document.querySelector("#navbarResponsive");
	let check = true;

	function myFunction() {
		console.log(check)
		if (check === true) {
			check = false;
			x.style.height = "auto";
			y.style.display = "initial";


		  //Send Message
			function displayMessage()
			{
				alert("Message Envoyé !");
			}
        </script>



        <script>
            // Execute function when the window is scrolled
            window.onscroll = function () { scrollFunction() };

            //When scroll down to 20pxl the button is revealed
            function scrollFunction() {
                // Get the button
                var mybutton = document.getElementById("scrollUp");

                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    mybutton.style.opacity = 1;
                    mybutton.style.visibility = "visible";
                } else {
                    mybutton.style.opacity = 0;
                    mybutton.style.visibility = "hidden";
                }
            }


        </script>
        <script src="https://kit.fontawesome.com/837a298307.js" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<script src="https://kit.fontawesome.com/837a298307.js" crossorigin="anonymous"></script>
</body>


</html>