
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="ASSETS/CSS/MODULES/resume.css">
        <title>Résumé</title>
    </head>
    <body class="bodyGridContainer">
        <header><?php include "_Includes/navbar.php"?></header>
        <section id="biography">bio</section>
        <section id="softSkillsFormation">
            <div id="softSkills">softSkills</div>
            <div id="formation">formation</div>
        </section>
        <section id="experience">exp</section>
        <section id="contactPlan">
            <div id="contact">contact</div>
            <div id="plan">plan</div></section>
        <footer>footer</footer>
        
        <script>
          function myFunction() {
            const x = document.getElementById("myTopnav");
            if (x.className === "topNav") {
              x.className += " responsive";
            } else {
              x.className = "topNav";
            }
          }
        </script>
        <script src="https://kit.fontawesome.com/837a298307.js" crossorigin="anonymous"></script>
    </body>
</html>