<!DOCTYPE html>
<html lang='en'>

<head>
	<meta charset="utf-8">
	<title>The House: Store</title>
	<link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css"/>
	<link id='stylecss' type="text/css" rel="stylesheet" href="css/stylesheet.css" />
	<script src='../wireframe.js'></script>
</head>

<body class="body-products">

	<nav id="navigation" class="topnav">
		<b class="company-phrase" href="index.php">Jack's House</b>
		<a href="login.php">Login</a>
		<a class="active" href="products.php">Products</a>
		<a href="index.php">Home</a>
	</nav>

	<header id="header" class="header">
		<div class="logo">
			<a href="products.php">
			<img class="cool-logo" src="../../media/my-logo.png" alt="logo"/>
				</a>
		</div>
	</header>

	<main class="main">
		<div class="title-div">
			<div class="welcome-to-regular">
				💣 Bomb as merch 💣
			</div>
			<div class="sub-message">
				guaranteed to make you 10% more attractive
			</div>
		</div>
		<div class="grid-container-products">
			<div class="grid-item"><a href="hoodie.php">
				<img class="product-picture" src=../../media/placeholder-hoodie.png alt="good-as-hoodie"/> </a></div>
			<div class="grid-item"><a href="tshirt.php">
				<img class="product-picture" src=../../media/placeholder-t.png alt="the-T"/></a></div>
			<div class="grid-item"><a href="mug.php">
				<img class="product-picture" src=../../media/placeholder-mug.png alt="drink-up-baby"/></a></div>
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
