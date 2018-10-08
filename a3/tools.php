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
	<script src='scripts/submit.js'></script>
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

		<main class="main" id="$pageTitle">

TOPSTUFF;
    echo $output;
  }

function setProducts(){
	$rows; $cells;

$fp = fopen('products.txt','r');
  if (($headings = fgetcsv($fp, 0, "\t")) !== false) {
     while ( $cells = fgetcsv($fp, 0, "\t") ) {
      for ($x=1; $x<count($cells); $x++)
         $pumps[$cells[0]][$headings[$x]]=$cells[$x];
     }
   }
   fclose($fp);


	$products = array(
	'mug' => array(
		'price' => $pumps["Mh"]["Price"],
		'description' => $pumps["Mh"]["Description"],
		'image' => "../../media/placeholder-mug.png",
		'name' => $pumps["Mh"]["Title"],
		'message' => "the only mug prettier is my own",
		'opt1' => $pumps["Mh"]["Option"],
		'opt2' => $pumps["Mb"]["Option"],

	),
	'tee' => array(
		'price' => $pumps["Txs"]["Price"],
		'description' => $pumps["Txs"]["Description"],
		'image' => "../../media/placeholder-t.png",
		'name' => $pumps["Txs"]["Title"],
		'message' => "two sizes fit all",
		'opt1' => $pumps["Txs"]["Option"],
		'opt2' => $pumps["Txl"]["Option"]
	),
	'hoodie' => array(
		'price' => $pumps["Hb"]["Price"],
		'description' => $pumps["Hb"]["Description"],
		'image' => "../../media/placeholder-hoodie.png",
		'name' => $pumps["Hb"]["Title"],
		'message' => "you've chosen very well",
		'opt1' => $pumps["Hb"]["Option"],
		'opt2' => $pumps["Hdb"]["Option"]
	)
);


	$GLOBALS['products'] = $products;
}


 function product($id) {

	 $products = $GLOBALS['products'];

	 if (!array_key_exists($id, $products) or !isset($_GET['product_id'])){
		header("Location: products.php", true, 301);
exit();
		return false;
	}
	 $p_desc = $products[$id]["description"];
	 $p_pric = $products[$id]["price"];
	 $p_imag = $products[$id]["image"];
	 $p_name = $products[$id]["name"];
	 $p_subm = $products[$id]["message"];
	 $p_opt1 = $products[$id]["opt1"];
	 $p_opt2 = $products[$id]["opt2"];
	 $update = (int)($p_pric);
	 debug_to_console($update);

	$output = <<<"PRODUCTSTUFF"


	<div class="new-product-grid">
			<div class="grid-p-image">
				<div class="buy-it-text">
					$p_desc \$$p_pric
				</div>
				<div class="product-image">
					<img src=$p_imag alt="product" />
				</div>
			</div>
			<div class="grid-p-title">
				<div class="welcome-to-regular">
					$p_name
				</div>
				<div class="sub-message">
					$p_subm
				</div>
			</div>
			<div class="grid-buy-stuff">
				<form method="post" action="cart.php" class="form" id="form-submit" onsubmit="return submit_form()" target="_blank">
					<input type="hidden" name="id" value="$id"> Quantity: <br/>
					<button class="plus-minus-button" type="button" id="minus" onclick="updateTotalP($update)">−</button>
					<input type="number" name="qty" value="0" id="input" min="0" onchange="updateTotal($update)" />
					<button class="plus-minus-button" type="button" id="plus" onclick="updateTotalM($update)">+</button>
				</form>
				<select name="oid" class="select-list" form="form-submit">
					<option value="opt1">$p_opt1</option>
					<option value="opt2">$p_opt2</option>
				</select>
				<br/><button id="submit" type="submit" form="form-submit" class="buy-button" value="buy">Add</button>
				<div class="form">  Total : $<input type="number" name="subtotal" id="subtotal" readonly/>



				</div></div>

		</div>

PRODUCTSTUFF;
	echo $output; }


 function endModule(){

		$output = <<<"BOTTOMSTUFF"

		</main>

		<footer class="footer">
		<div>&copy;
			<script>
				document.write(new Date().getFullYear());

			</script> s3707738 and his BombStore&trade;. <a href="products.txt">The Spreadsheet</a></div>
		<div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
		<div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
	</footer>

</body>
<script src='scripts/button.js'></script>
<script>document.getElementById("wireframecss").disabled=true;</script>
</html>

BOTTOMSTUFF;
		echo $output;

	}
//here's my cool as debugger
 function debug_to_console( $data ) {

		$output = '';

		if ( is_array( $data ) ) {
			$output .= "<script>console.warn( 'Debug Objects with Array.' ); console.log( '" . implode( ',', $data) . "' );</script>";
		} else if ( is_object( $data ) ) {
			$data    = var_export( $data, TRUE );
			$data    = explode( "\n", $data );
			foreach( $data as $line ) {
				if ( trim( $line ) ) {
					$line    = addslashes( $line );
					$output .= "console.log( '{$line}' );";
				}
			}
			$output = "<script>console.warn( 'Debug Objects with Object.' ); $output</script>";
		} else {
			$output .= "<script>console.log( 'Debug Objects: {$data}' );</script>";
		}

		echo $output;
	}
//helps prevent H@ckers
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


?>


