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
        <section id="biography">bio</section>
        <section id="softSkillsFormation">
            <div id="softSkills">softSkills</div>
            <div id="formations">formations</div>
        </section>
        <section id="experience">exp</section>
        <section id="contactPlan">
            <div id="contact">contact</div>
            <div id="plan">plan</div></section>
        <footer><?php include "_INCLUDES/footer.php"?></footer>
        
        <script>
		const x = document.querySelector("#myTopnav");
		let check = true;
		  function myFunction() {
			  console.log(check)
			  if (check == true) {
				  check = false;
				  x.style.height = "auto";

			  } else {
				  x.style.height = "7vh";
				  check = true;
			  }
		  }
        </script>
        <script src="https://kit.fontawesome.com/837a298307.js" crossorigin="anonymous"></script>
    </body>
</html>