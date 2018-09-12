<!DOCTYPE html>
<html lang='en'>

<head>
	<meta charset="utf-8">
	<title>The House</title>
	<link rel="icon" href="../../media/favicon.ico" type="image/gif" sizes="16x16">
	<link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css"/>
	<link id='stylecss' type="text/css" rel="stylesheet" href="css/stylesheet.css" />
	<script src='../wireframe.js'></script>
	<script src="scripts/show-more.js"></script>
</head>

<body>

	<nav id="navigation" class="topnav">
		<b class="company-phrase" href="index.php">Jack's House</b>
		<a href="login.php">Login</a>
		<a href="products.php">Products</a>
		<a class="active" href="index.php">Home</a>
	</nav>

	<header id="header" class="header">
		<div class="logo">
			<a href="products.php">
			<img class="cool-logo" src="../../media/my-logo.png" alt="logo"/>
				</a>
		</div>
	</header>

	<main id="main" class="main">
		<div class="welcome-message">Welcome to the house that I built.
			<div class="show-more" id="show-more"> <button class="initial-button" id="show-more-link" type="button" onclick="javascript:showMore()">&#751; &#751; &#751;</button>
			</div>
		</div>

		<div class="all-basic-info" id="all-basic-info">

			<div class="grid-container" id="basic-info">
				<div class="grid-template-picture" id="picture-me-one"></div>
				<div class="grid-template-text">I've decided to use myself as the client for this project. My goal was make a sweet website, and learn lots of cool CSS tricks along the way </div>
				<div class="grid-template-blank">ᕕ( ՞ ᗜ ՞ )ᕗ</div>
				<div class="grid-template-blank2">໒( , ⊙ – ⊙ , )७</div>
				<div class="grid-template-blank3"> </div>
			</div>

			<div class="grid-container" id="basic-info-two">
				<div class="grid-template-picture" id="picture-me-two"></div>
				<div class="grid-template-text">Please feel free to browse my merch store, or even sign up to my mailing list while you're here!</div>
				<div class="grid-template-blank">ᕕ( ՞ ᗜ ՞ )ᕗ</div>
				<div class="grid-template-blank2">໒( , ⊙ – ⊙ , )७</div>
				<div class="grid-template-blank3"> </div>
			</div>

		</div>

	</main>

	<footer class="footer">
		<div>&copy;
			<script>
				document.write(new Date().getFullYear());

			</script> s3707738 and his BombStore&trade;.</div>
		<div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
		<div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
	</footer>

</body>
<script>document.getElementById("wireframecss").disabled=true;</script>
</html>
