<?php
session_start();
include_once('tools.php');

global $products;
$file = fopen("products.txt", "r+");
$write = "Purchase Date	Name	Address	Mobile	Email	ID	OID	Quantity	Unit Price	Subtotal";
$counter = 0;

?>

<link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css" />

<?php

//var_dump($_SESSION);

foreach ($_SESSION as $session)
  {
	echo "<!DOCTYPE html>";
	echo "$products";
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
		// var_dump($_SESSION);
		$id = (array_keys($_SESSION["cart"]))[$counter];
		$break = 1;
		foreach ($cart as $items){
			$oid = (array_keys($_SESSION["cart"][$id]))[$break];
			$qtyname = (array_keys($_SESSION["cart"][$id][$oid]))[0];
			$qty = $_SESSION["cart"][$id][$oid][$qtyname];

			echo "<tr>
			<td>$id</th>
			<td>$oid</th>
			<td>$qty</th>
		</tr>";

			if (++$break > 2){
				break;
			}

		}

		$counter++;
		}
	echo "</table>";
	echo "</div>";

	echo "<div class='got-em'>Your Cost: \$400</div>";
	echo "</div>";

	}

?>
