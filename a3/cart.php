<?php
  session_start();
  include_once('tools.php'); // now contains module and other helpful functions


if (isset($_POST['id'], $_POST['qty'], $_POST['oid'])) {
  //  - product/service and option ids are valid
	//makes sure that qty is a whole number
	if ($_POST['qty'] <= 0 or $_POST['qty'] % 1 != 0){
		header("Location: products.php", true, 301);
	}
	$id = $_POST['id'];

  $_SESSION['cart'][$id]['oid'] = $_POST['oid'];
  $_SESSION['cart'][$id][$_POST['oid']]['qty'] = $_POST['qty'];


}else {
	header("Location: products.php", true, 301);
}


  topModule('cart', 'showSpecials()'); // Now a function call

?>


	<div class="container" id="grid-cart">

		<div class="topstuff"></div>
		<div class="bodystuff">
		<table class="table">
			<tr>
				<th>Product Name</th>
				<th>Option</th>
				<th>Quantity</th>
			</tr>
			<?php
			if (isset($_SESSION['cart']['mug']["opt1"]['qty'])){
			echo "<tr>
				<td>Mug</td>
				<td>Huge</td>
				<td>";

			echo $_SESSION['cart']["mug"]["opt1"]['qty'];
					echo "</td>
			</tr>";
			} ?>
			<?php
			if (isset($_SESSION['cart']['mug']["opt2"]['qty'])){
			echo "<tr>
				<td>Mug</td>
				<td>Big</td>
				<td>";

			echo $_SESSION['cart']["mug"]["opt2"]['qty'];
					echo "</td>
			</tr>";
			} ?>
			<?php
			if (isset($_SESSION['cart']['tee']["opt1"]['qty'])){
			echo "<tr>
				<td>Tee</td>
				<td>XS</td>
				<td>";

			echo $_SESSION['cart']["tee"]["opt1"]['qty'];
					echo "</td>
			</tr>";
			} ?>
			<?php
			if (isset($_SESSION['cart']['tee']["opt2"]['qty'])){
			echo "<tr>
				<td>Tee</td>
				<td>XL</td>
				<td>";

			echo $_SESSION['cart']["tee"]["opt2"]['qty'];
					echo "</td>
			</tr>";
			} ?>
			<?php
			if (isset($_SESSION['cart']['hoodie']["opt1"]['qty'])){
			echo "<tr>
				<td>Hood</td>
				<td>Black</td>
				<td>";

			echo $_SESSION['cart']["hoodie"]["opt1"]['qty'];
					echo "</td>
			</tr>";
			} ?>
			<?php
			if (isset($_SESSION['cart']['hoodie']["opt2"]['qty'])){
			echo "<tr>
				<td>Hood</td>
				<td>Dark Black</td>
				<td>";

			echo $_SESSION['cart']["hoodie"]["opt2"]['qty'];
					echo "</td>
			</tr>";
			} ?>
		</table>

			<div class="sumbit-cancel">
				<form name="cancel" action="products.php" method="post">
				<input type="hidden" name="cancel" value="cancel">
					   <button class="buy-button" id="cancel-button" type="submit">Clear Cart</button></form>

			<form name="checkout" action="checkout.php" method="get">
					   <button class="buy-button" id="checkout-button" type="submit">Checkout</button></form></div>

		</div>
		<div class="footerstuff"></div>

	</div>

	<?php
  endModule(); // Now a function call
?>
