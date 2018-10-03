<?php
  session_start();
  include_once('tools.php'); // now contains module and other helpful functions

  // Any POST or GET Request Processing Code goes here

  topModule('Mug', 'showSpecials()'); // Now a function call
?>
		<div class="new-product-grid">
			<div class="grid-p-image">
				<div class="buy-it-text">
					Due to high demand <br/> only one mug <br/> per customer, sorry.<br/> $29.99
				</div>
				<div class="product-image">
					<img src=../../media/placeholder-mug.png alt="Mugged" />
				</div>
			</div>
			<div class="grid-p-title">
				<div class="welcome-to-regular">
					Big Cup
				</div>
				<div class="sub-message">
					the only mug prettier is my own
				</div>
			</div>
			<div class="grid-buy-stuff">
				<form method="post" action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php?ref=product" class="form" id="form-submit" onsubmit="return submit_form()" target="_blank">
					<input type="hidden" name="id" value="mug"> Quantity: <br/>
					<button class="plus-minus-button" type="button" id="minus">−</button>
					<input type="number" name="qty" value="0" id="input" min="0" max="1" />
					<button class="plus-minus-button" type="button" id="plus">+</button>
				</form>
				<br/><button id="submit" type="submit" form="form-submit" class="buy-button" value="buy">Buy</button></div>
		</div>
	<?php
  endModule(); // Now a function call
?>
