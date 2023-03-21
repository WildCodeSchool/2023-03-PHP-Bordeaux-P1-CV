<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="ASSETS/CSS/main.css">
        <title>Résumé</title>
    </head>
    <body class="bodyGridContainer">
        <header><?php include "_INCLUDES/navbar.php"?></header>
        <section id="biography"><?php include "_INCLUDES/biography.php"?></section>
        <section id="softSkillsFormation">
            <div id="softSkills"><?php include "_INCLUDES/skills.php"?></div>
            <div id="formation"><?php include "_INCLUDES/formations.php"?></div>
        </section>
        <section id="experiences"><?php include "_INCLUDES/experiences.php"?></section>
        <section id="contactPlan">
            <div id="contact"><?php include "_INCLUDES/contact.php"?></div>
            <div id="plan"><?php include "_INCLUDES/map.php"?></div></section>
        <footer><?php include "_INCLUDES/footer.php"?></footer>
        
        <script>
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