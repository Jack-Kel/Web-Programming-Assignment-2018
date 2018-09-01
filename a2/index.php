<!DOCTYPE html>
<html lang='en'>

<head>
	<meta charset="utf-8">
	<title>Assignment 2</title>
	<link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled/>
	<link id='stylecss' type="text/css" rel="stylesheet" href="css/stylesheet.css" />
	<script src='../wireframe.js'></script>
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
			<div class="greetings">Buy that merch!</div>
		</div>
		<div class="container">

		</div>
	</header>

	<main id="main" class="main">
		<div class="container">
			<h1 align="center" style="font-size: 70px;" class="welcome-message">Stop right there kiddo, this is a stickup.</h1>
		</div>
		<article id='Logo'>
			<img class="center" src='../../media/placeholder.png' alt="cool-kid" />
		</article>

	</main>

	<footer>
		<div>&copy;
			<script>
				document.write(new Date().getFullYear());

			</script> Jack, s3707738 and DollarMerchStore(TM).</div>
		<div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
		<div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
	</footer>

</body>

</html>
