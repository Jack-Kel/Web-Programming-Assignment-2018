<!DOCTYPE html>
<html lang='en'>

<head>
	<meta charset="utf-8">
	<title>The House</title>
	<link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled/>
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
			<img class="cool-logo" src="../../media/fight-milk.png" alt="logo"/>
				</a>
		</div>
	</header>

	<main id="main" class="main">
		<div class="welcome-message">Welcome to the house that I built.
			<div class="show-more" id="show-more"> <button class="initial-button" id="show-more-link" type="button" onclick="javascript:showMore()">&#751; &#751; &#751;</button>
		</div>
		</div>


		<div class="grid-container" id="basic-info">
			<div class="grid-item"><img class="picture-of-me" src="../../media/placeholder.png" alt="me" /></div>
			<div class="grid-item">
				<div class="text-info">Hello. My name is Jack and I plan on becoming the worlds greatest web developer. I have hired myself to design this incredible website so that you can buy all my fantastic merch.
				</div>
			</div>
			<div class="grid-item">
				<div class="text-info">What more is there to say? I'm just a cool guy who sells amazing products and designs even better sites!</div>
			</div>
			<div class="grid-item"><img class="picture-of-me" src="../../media/me-placeholder.png" alt="cool-me" /></div>
			<div class="grid-item"><img class="picture-of-me" src="../../media/placeholder-focus.png" alt="focus-me" /></div>
			<div class="grid-item">
				<div class="text-info">My focus is both self-promotion and merch-promotion. This website is designed to show how committed and <i>STRONG</i> I am... As well as to plug my merch.</div>
			</div>

		</div>

	</main>

	<footer class="footer">
		<div>&copy;
			<script>
				document.write(new Date().getFullYear());

			</script> s3707738 and his BombAssStore&trade;.</div>
		<div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
		<div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
	</footer>

</body>

</html>
