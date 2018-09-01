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
		<a href="login.php">Login</a>
		<a href="products.php">Products</a>
		<a class="active" href="index.php">Home</a>
	</nav>

	<header id="masthead">
		<article id='Logo'>
			<img src='../../media/placeholder.png' alt='Logo' width="20%" height="auto" />
		</article>
		<div>Put company logo and name here</div>
	</header>

	<main>
		<article id='Website Under Construction'>
			<!-- Creative Commons image sourced from https://pixabay.com/en/maintenance-under-construction-2422173/ and used for educational purposes only -->
			<img src='../../media/website-under-construction.png' alt='Website Under Construction' />
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
