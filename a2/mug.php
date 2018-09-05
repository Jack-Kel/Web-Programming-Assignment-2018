<!DOCTYPE html>
<html lang='en'>

<head>
	<meta charset="utf-8">
	<title>The House: Mug</title>
	<link rel="icon" href="../../media/favicon.ico" type="image/gif" sizes="16x16">
	<link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled/>
	<link id='stylecss' type="text/css" rel="stylesheet" href="css/stylesheet.css" />
	<script src='../wireframe.js'></script>
	<script src='scripts/submit.js'></script>
</head>

<body>

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
		<div class="container">

		</div>
	</header>

	<main>


		<div class="new-product-grid">
			<div class="grid-p-image">
				<div class="buy-it-text">
					Due to high demand <br/> only one mug <br/> per customer, sorry.<br/> $29.99
				</div>
				<div class="product-image">
					<img src=../../media/placeholder-mug.png alt="Mugged" />
				</div>
			</div>
			<div class="grid-p-title">
				<div class="welcome-to-regular">
					Big Cup
				</div>
				<div class="sub-message">
					the only mug prettier is my own
				</div>
			</div>
			<div class="grid-buy-stuff">
				<form method="post" action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php?ref=product" class="form" id="form-submit" onsubmit="return submit_form()" target="_blank">
					<input type="hidden" name="id" value="mug"> Quantity: <br/>
					<button class="plus-minus-button" type="button" id="minus">−</button>
					<input type="number" name="qty" value="0" id="input" min="0" max="1" />
					<button class="plus-minus-button" type="button" id="plus">+</button>
				</form>
				<br/><button id="submit" type="submit" form="form-submit" class="buy-button" value="buy">Buy</button></div>
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
<script src='scripts/button.js'></script>
<script>
	document.getElementById("wireframecss").disabled = true;

</script>

</html>
