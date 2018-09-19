<?php
  session_start();
  include_once('tools.php'); // now contains module and other helpful functions

  // Any POST or GET Request Processing Code goes here

  topModule('MySite - Cart', 'showSpecials()'); // Now a function call
?>

		<div class="new-product-grid">
			<div class="grid-p-image"><div class="buy-it-text">
					Only comes in large. <br/> Handmade in China.<br/> No refunds. <br/> $132.00</div><div class="product-image">
					<img src=../../media/placeholder-hoodie.png alt="the-good-hood" />
				</div></div>
			<div class="grid-p-title"><div class="welcome-to-regular">
				The Hood
			</div>
			<div class="sub-message">
				you've chosen very well
			</div></div>
			<div class="grid-buy-stuff"><form method="post" action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php?ref=product" class="form" id="form-submit" onsubmit="return submit_form()" target="_blank">
					<input type="hidden" name="id" value="hood"> Quantity: <br/>
					<button class="plus-minus-button" type="button" id="minus">−</button>
					<input type="number" name="qty" value="0" id="input" min="0" />
					<button class="plus-minus-button" type="button" id="plus">+</button>
				</form>
				<select name="option" class="select-list" form="form-submit">
					<option value="black">Black</option>
					<option value="d-black">Darker Black</option>
					<option value="white">White</option>
				</select><br/><button id="submit" type="submit" form="form-submit" class="buy-button" value="buy">Buy</button></div>
		</div>
	<?php
  endModule(); // Now a function call
?>
