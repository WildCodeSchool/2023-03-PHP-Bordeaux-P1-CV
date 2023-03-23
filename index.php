<!DOCTYPE html>
<html lang="FR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="ASSETS/CSS/main.css">
		<link rel="icon" type="image/x-icon" href="ASSETS/IMAGES/favicon_io/favicon.ico">
        <title>Homepage</title>
    </head>
    <body class="indexBodyGridContainer" id="indexBody">
        <header class="bccColorPrimary" id="indexHeader">
            <h1 class="fontColorSecondary">The Pink Panther</h1>
        </header>
		<section id="pinkPanther">
			<img id="pantherDesktop" src="ASSETS/IMAGES/pinkPanther6.webp" alt="The Pink Panther Standing up, showing off his pretty website.">
			<img id="pantherMobile" src="ASSETS/IMAGES/pantherSide.png" alt="The Pink Panther Standing up, showing off his pretty website.">
		</section>
        <nav id="indexNav">
            <button><h2><a href="resume.php">BIOGRAPHY</a></h2></button>
            <button><h2><a href="resume.php#skills">SKILLS</a></h2></button>
            <button><h2><a href="resume.php#formations">FORMATIONS</a></h2></button>
            <button><h2><a href="resume.php#experiences">EXPERIENCES</a></h2></button>
            <button><h2><a href="resume.php#contact">CONTACT ME</a></h2></button>
        </nav>

        <main>
            <!--<iframe src="https://www.youtube-nocookie.com/embed/R4amWTwO1GM?controls=0&amp;start=4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>-->
                <video controls autoplay width=75%>
                    <source src="/ASSETS/IMAGES/pinkPanther.mp4" type="video/webm">
                </video>
            <div>
                <h2>Jaguar Longiligne et Agile</h2>
                <h3>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis, accusantium officiis commodi iusto hic neque, odio exercitationem id molestias ea culpa eveniet optio corporis veritatis eaque enim! Dolorum, illum? Minus.</h3>
            </div>
        </main>
        <footer class="bccColorPrimary">
			<p>Mentions legales: Site conçu à des fins pedagogique.</p>
		</footer>
    </body>
</html>