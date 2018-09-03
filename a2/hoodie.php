<!DOCTYPE html>
<html lang='en'>

<head>
	<meta charset="utf-8">
	<title>The House: Hood</title>
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
			<img class="cool-logo" src="../../media/fight-milk.png" alt="logo"/>
				</a>
		</div>
		<div class="container">

		</div>
	</header>

	<main>

		<div class="title-div">
			<div class="welcome-to-regular">
				The Classic Hoodie
			</div>
			<div class="sub-message">
				you've chosen very well
			</div>
		</div>
		<div class="grid-container-products">
			<div class="grid-item">
				<div class="buy-it-text">
					Only comes in large. <br/> Handmade in China.<br/> No refunds. <br/> $132.00</div>
				<div class="product-image">
					<img src=../../media/placeholder-hoodie.png alt="the-good-hood" />
				</div>
			</div>
			<div class="grid-item">
				<form method="post" action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php?ref=product" class="form" id="form-submit" onsubmit="return submit_form()" target="_blank">
					<input type="hidden" name="id" value="hood"> Quantity: <br/>
					<button class="plus-minus-button" type="button" id="minus">−</button>
					<input type="number" name="qty" value="0" id="input" min="0" />
					<button class="plus-minus-button" type="button" id="plus">+</button>
				</form>
				<select name="option" class="select-list" form="form-submit">
					<option value="black">Black</option>
					<option value="d-black">Darker Black</option>
					<option value="white">White</option>
				</select>
			</div>
			<div class="grid-item">
				<button id="submit" type="submit" form="form-submit" class="buy-button" value="buy">Buy</button>
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
<script src='scripts/button.js'></script>

</html>
