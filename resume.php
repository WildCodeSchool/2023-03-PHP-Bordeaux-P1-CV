<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<link rel="stylesheet" href="ASSETS/CSS/main.css">
	<title>Document</title>

</head>
<body>
<?php include "_Includes/navbar.php"?>


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