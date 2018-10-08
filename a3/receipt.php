<?php
session_start();
include_once('tools.php');
$products = $GLOBAL['products'];
setProducts();
$file = fopen("products.txt", "a+");
$write = "Purchase Date	Name	Address	Mobile	Email	ID	OID	Quantity	Unit Price	Subtotal";
$counter = 0;
$totalCost = 0;
$date = $_SESSION['info']['date'];
$name = $_SESSION['info']['name'];
$address = $_SESSION['info']['add'];
$mobile = $_SESSION['info']['phone'];
$email = $_SESSION['info']['email'];

?>

<link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css" />

<?php

	echo "<!DOCTYPE html>";
	echo "<div class='welcome-message'> Thanks for the money";
	echo "<div class='welcome-image'></div>";
	echo "<div class='container'>";
	echo "<table class='table'>
		<tr>
			<th>Product</th>
			<th>Option</th>
			<th>Quantity</th>
		</tr>

	";

	foreach ($_SESSION["cart"] as $cart){
		$id = array_keys($_SESSION["cart"])[$counter];
		$idDisp = $products[$id]["name"];
		$break = 1;
		foreach ($cart as $items){
			$oid = array_keys($_SESSION["cart"][$id])[$break];
			$oidDisp = $products[$id][$oid];
			$qtyname = array_keys($_SESSION["cart"][$id][$oid])[0];
			$qty = $_SESSION["cart"][$id][$oid][$qtyname];

			foreach ($products as $product){
				if (isset($products[$id])){
					$cost = ($qty * $products[$id]["price"]);
				}
			}

			$totalCost += $cost;
			$info = array($date, $name, $address, $mobile, $email, $idDisp, $oidDisp, $qty, $products[$id]["price"], $cost);

			echo "<tr>
			<td>$idDisp</th>
			<td>$oidDisp</th>
			<td>$qty</th>
		</tr>";

			fputcsv($file, $info);

			++$break;

			if (!isset(array_keys($_SESSION["cart"][$id])[$break])){
				break;
			}

		}

		$counter++;
		}
	echo "</table>";
	echo "</div>";

	echo "<div class='got-em'>Your Cost: \$$totalCost</div>";
	echo "</div>";


fclose($file);

?>
