<!DOCTYPE html>
<html lang='en'>

<head>
	<meta charset="utf-8">
	<title>The House: Welcome</title>
	<link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled/>
	<link id='stylecss' type="text/css" rel="stylesheet" href="css/stylesheet.css" />
	<script src='../wireframe.js'></script>
	<script src='scripts/login.js'></script>
</head>

<body class="background-login">

	<nav id="navigation" class="topnav">
		<b class="company-phrase" href="index.php">Jack's House</b>
		<a class="active" href="login.php">Login</a>
		<a href="products.php">Products</a>
		<a href="index.php">Home</a>
	</nav>

	<header id="header" class="header">
		<div class="logo">
			<a href="products.php">
			<img class="cool-logo" src="../../media/fight-milk.png" alt="logo"/>
				</a>
		</div>
	</header>

	<div class="title-div">
		<div class="welcome-to-regular">
			You think you got what it takes?
		</div>

	</div>

	<main class="main">
		<div class="centred-login" id="centred-login">
			<div class="login">
				<button class="initial-button" type="button" onclick="document.getElementById('login-box').style.display='block'" style="width:auto;">Join</button>

				<div id="login-box" class="modal">

					<form method="post" class="modal-content animate" action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php?ref=product" target="_blank">
						<div class="imgcontainer">
							<span onclick="document.getElementById('login-box').style.display='none'" class="close" title="Close Modal">&times;</span>
							<img src="../../media/avatar-placeholder.png" alt="Avatar" class="avatar">
						</div>

						<div class="login">
							<label for="uname"><b>Username</b></label>
							<input type="text" placeholder="Enter Username" name="uname" required>

							<label for="psw"><b>Password</b></label>
							<input type="password" placeholder="Enter Password" name="psw" required>

							<button class="initial-button" id="send-it-button" type="submit">Send It!</button>

						</div>

					</form>
				</div>

			</div>
		</div>
		<div class="screen-fixing"></div>
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
