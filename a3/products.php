<?php
  session_start();
  include_once('tools.php'); // now contains module and other helpful functions
if (isset($_POST['cancel'])){
	unset($_SESSION['cart']);
}

  topModule('products', 'showSpecials()'); // Now a function call
?>
		<div class="title-div">
			<div class="welcome-to-regular">
				💣 Bomb as merch 💣
			</div>
			<div class="sub-message">
				guaranteed to make you 10% more attractive
			</div>
		</div>
		<div class="grid-container-products">
			<div class="grid-item"><a href="product.php?product_id=hoodie">
				<img class="product-picture" src=../../media/placeholder-hoodie.png alt="good-as-hoodie"/> </a></div>
			<div class="grid-item"><a href="product.php?product_id=tee">
				<img class="product-picture" src=../../media/placeholder-t.png alt="the-T"/></a></div>
			<div class="grid-item"><a href="product.php?product_id=mug">
				<img class="product-picture" src=../../media/placeholder-mug.png alt="drink-up-baby"/></a></div>
		</div>
	<?php
  endModule(); // Now a function call
?>

