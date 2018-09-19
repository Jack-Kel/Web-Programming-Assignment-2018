<?php

function styleCurrentNavLink( $css ) {
  $here = $_SERVER['SCRIPT_NAME'];
  $bits = explode('/',$here);
  $filename = $bits[count($bits)-1];
  return "<style>nav a[href$='$filename'] { $css }</style>";
}

  function topModule($pageTitle, $onLoad='') {
	  $navcss = styleCurrentNavLink("background-color: #f7aa00; color: #333;");
      $output = <<<"TOPSTUFF"
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> $pageTitle </title>
	<link rel="icon" href="../../media/favicon.ico" type="image/gif" sizes="16x16">
	<link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css"/>
	<link id='stylecss' type="text/css" rel="stylesheet" href="css/stylesheet.css" />
	<script src='../wireframe.js'></script>
	<script src="scripts/show-more.js"></script>
	$navcss
</head>

<body>

	<nav id="navigation" class="topnav">
		<b class="company-phrase" href="index.php">Jack's House</b>
		<a href="login.php">Login</a>
		<a href="products.php">Products</a>
		<a href="index.php">Home</a>
	</nav>

	<header id="header" class="header">
		<div class="logo">
			<a href="products.php">
			<img class="cool-logo" src="../../media/my-logo.png" alt="logo"/>
				</a>
		</div>
	</header>
	<div class="cb"></div>

		<main id="main" class="main">

TOPSTUFF;
    echo $output;
  }


	function endModule(){

		$output = <<<"BOTTOMSTUFF"

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

BOTTOMSTUFF;
		echo $output;

	}
?>
