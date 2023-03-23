<div class="bccColorPrimary" id="topNav">
	<a class="fontColorSecondary" href="../index.php" id="logoResponsive">The Pink Panther</a>
	<a href="javascript:void(0);" id="icon" onclick="displayNavBar()">
		<i class="fa-solid fa-bars-staggered fa-2xl"></i>
	</a>
</div>

<div id=linksNav>
		<a class="bccColorPrimary fontColorSecondary" href="index.php#indexNav"><h3>Accueil</h3></a>
		<a class="bccColorPrimary fontColorSecondary" href="#biography" ><h3>Biographie</h3></a>
		<a class="bccColorPrimary fontColorSecondary" href="#skills" ><h3>Skills</h3></a>
		<a class="bccColorPrimary fontColorSecondary" href="#formations" ><h3>Formation</h3></a>
		<a class="bccColorPrimary fontColorSecondary" href="#experiences" ><h3>Experiences</h3></a>
		<a class="bccColorPrimary fontColorSecondary" href="#contact"><h3>Contact</h3></a>
</div>

<script>
	function displayNavBar() {
		let linksNav = document.getElementById("linksNav");
		if (linksNav.style.display === "") {
			linksNav.style.display = "flex";
			return;
		}
		linksNav.style.display = "";
	}
</script>