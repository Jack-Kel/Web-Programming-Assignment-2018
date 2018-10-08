<?php
session_start();
include_once('tools.php');

$products = $GLOBAL['products'];
setProducts();
$file = fopen("products.txt", "r+");
$write = "Purchase Date	Name	Address	Mobile	Email	ID	OID	Quantity	Unit Price	Subtotal";
$counter = 0;
$totalCost = 0;


?>

<link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css" />

<?php

//var_dump($_SESSION);

foreach ($_SESSION as $session)
  {
	echo "<!DOCTYPE html>";
	echo "<div class='welcome-message'> Thanks for the money, idiot";
	echo "<div class='container'>";
	echo "<table class='table'>
		<tr>
			<th>Product</th>
			<th>Option</th>
			<th>Quantity</th>
		</tr>

	";

	foreach ($session as $cart){
		$id = (array_keys($_SESSION["cart"]))[$counter];
		$idDisp = $products[$id]["name"];
		$break = 1;
		foreach ($cart as $items){
			$oid = (array_keys($_SESSION["cart"][$id]))[$break];
			$oidDisp = $products[$id][$oid];
			$qtyname = (array_keys($_SESSION["cart"][$id][$oid]))[0];
			$qty = $_SESSION["cart"][$id][$oid][$qtyname];

			foreach ($products as $product){
				if (isset($products[$id])){
					$cost = ($qty * $products[$id]["price"]);
				}
			}

			$totalCost += $cost;

			echo "<tr>
			<td>$idDisp</th>
			<td>$oidDisp</th>
			<td>$qty</th>
		</tr>";

			++$break;

			if (!isset((array_keys($_SESSION["cart"][$id]))[$break])){
				break;
			}

		}

		$counter++;
		}
	echo "</table>";
	echo "</div>";

	echo "<div class='got-em'>Your Cost: \$$totalCost</div>";
	echo "</div>";

	}

?>
