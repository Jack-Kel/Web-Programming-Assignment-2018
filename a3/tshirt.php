<?php
  session_start();
  include_once('tools.php'); // now contains module and other helpful functions

  // Any POST or GET Request Processing Code goes here

  topModule('T-Shirt', 'showSpecials()'); // Now a function call
?>
		<div class="new-product-grid">
			<div class="grid-p-image">
				<div class="buy-it-text">
					Only comes in XS <br/> Handwash only <br/> Definitely no refunds <br> $59.99
				</div>
				<div class="product-image">
					<img src=../../media/placeholder-t.png alt="the-T" />
				</div>
			</div>
			<div class="grid-p-title">
				<div class="welcome-to-regular">
					T-Shirt
				</div>
				<div class="sub-message">
					one size fits all
				</div>
			</div>
			<div class="grid-buy-stuff">
				<form method="post" action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php?ref=product" class="form" id="form-submit" onsubmit="return submit_form()" target="_blank">
					<input type="hidden" name="id" value="tshirt"> Quantity: <br/>
					<button class="plus-minus-button" type="button" id="minus">−</button>
					<input type="number" name="qty" value="0" id="input" min="0" />
					<button class="plus-minus-button" type="button" id="plus">+</button>
				</form>
				<select name="option" class="select-list" form="form-submit">
					<option value="White">White</option>
					<option value="OW">Off-White</option>
					<option value="Egg">Eggshell</option>
				</select><br/><button id="submit" type="submit" form="form-submit" class="buy-button" value="buy">Buy</button></div>
		</div>
	<?php
  endModule(); // Now a function call
?>

