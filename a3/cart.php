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
	foreach($_SESSION['cart'] as $cart){
	$rows++;
	foreach($_SESSION['hoodie'][$id] as $id){
		$columns++;

	}

}
	//var_dump($_SESSION);
	print_r($_SESSION['cart']['mug']['opt2']['qty']);
}else {
	header("Location: products.php", true, 301);
}


  topModule('Cart', 'showSpecials()'); // Now a function call

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
			<tr>
				<td>Mug</td>
				<td>Big</td>
				<td><?php
					echo $_SESSION['cart']["mug"]["opt1"]['qty'];
					?></td>
			</tr>
			<tr>
				<td>Mug</td>
				<td>Huge</td>
				<td><?php
					echo $_SESSION['cart']['mug']["opt2"]['qty'];
					?></td>
			</tr>
			<tr>
				<td>Tee</td>
				<td>White</td>
				<td><?php
					echo $_SESSION['cart']['tee']["opt1"]['qty'];
					?></td>
			</tr>
			<tr>
				<td>Tee</td>
				<td>Eggshell</td>
				<td><?php
					echo $_SESSION['cart']['tee']["opt2"]['qty'];
					?></td>
			</tr>
			<tr>
				<td>Hood</td>
				<td>Black</td>
				<td><?php
					echo $_SESSION['cart']["hoodie"]["opt1"]['qty'];
					?></td>
			</tr>
			<tr>
				<td>Hood</td>
				<td>Darker Black</td>
				<td><?php
					echo $_SESSION['cart']["hoodie"]["opt2"]['qty'];
					?></td>
			</tr>
		</table>



		</div>
		<div class="footerstuff"></div>

	</div>

	<?php


  endModule(); // Now a function call
?>
