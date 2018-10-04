<?php
  session_start();
  include_once('tools.php');
//variables for error messages

$nameError = $emailError = $phoneError = $addError = $cNameError = $cardError = $dateError = $ccvError = "";

$name = $email = $phone = $add = $cName = $card = $date = $ccv = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
	var_dump($_POST);
	if(empty($_POST["firstname"])){
		$nameError = "required";
	}
	elseif(!preg_match("/^[a-z ,.'-]+$/i", $_POST["firstname"], $match)){
		$nameError = "Name invalid";
	}
	else{
		$name = test_input($_POST["firstname"]);
	}
	if(empty($_POST["email"])){
		$emailError = "required";
	}
	elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
		$emailError = "Email invalid";
	}
	else{
		$email = test_input($_POST["email"]);
	}
	if(empty($_POST["mobile"])){
		$phoneError = "required";
	}
	else if(!preg_match("/^(\(04\)|04|\+614)( ?\d){8}$/i", $_POST["mobile"], $match)){
		$phoneError = "Number invalid";
	}
	else{
		$phone = test_input($_POST["mobile"]);
	}
	if(empty($_POST["address"])){
		$addError = "required";
	}
	elseif(!preg_match("/^[a-z\d\/ \r\n,.'-]+$/i", $_POST["address"], $match)){
		$addError = "Address invalid";
	}
	else{
		$add = $_POST["address"];
	}
	if(empty($_POST["city"])){
		$cityError = "required";
	}
	else {
		$city =test_input($_POST["city"]);
	}
	if(empty($_POST["state"])){
		$stateError = "required";
	}
	else{
		$state = test_input($_POST["state"]);
	}
	if(empty($_POST["zip"])){
		$postError = "required";
	}
	else{
		$post = test_input($_POST["zip"]);
	}
	if(empty($_POST["cardname"])){
		$cNameError = "required";
	}
	else{
		$cName = test_input($_POST["cardname"]);
	}
	if(empty($_POST["cardnumber"])){
		$cardError = "required";
	}
	else{
		$card = test_input($_POST["cardnumber"]);
	}
	if(empty($_POST["expiry"])){
		$dateError = "required";
	}
	else{
		$date = test_input($_POST["expiry"]);
	}
	if(empty($_POST["ccv"])){
		$ccvError = "required";
	}
	else{
		$ccv = test_input($_POST["ccv"]);
	}
}

 topModule('checkout', 'showSpecials()');
?>

	<div class="row">
		<div class="col-75">
			<div class="container-checkout">
				<form id="checkoutForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >

					<div class="row">
						<div class="col-50">
							<h3>Billing Address</h3>
							<span class="error">* required field</span>

							<label for="fname"><i class="fa fa-user"></i> Full Name <span class="error">*<?php echo $nameError; ?></span></label>
							<input type="text" id="fname" name="firstname" placeholder="Dan Daniels" value='<?php echo $name; ?>'>

							<label for="email"><i class="fa fa-envelope"></i> Email <span class="error">*<?php echo $emailError; ?></span></label>
							<input type="email" id="email" name="email" placeholder="dan@example.com" value='<?php echo $email;?>' >

							<label for="fmob"><i class="fa fa-mobile"></i> Phone Number <span class="error">*<?php echo $phoneError; ?></span></label>
							<input type="text" id="fmob" name="mobile" placeholder="XXXX XXX XXX" value='<?php echo $phone; ?>' >

							<label for="adr"><i class="fa fa-address-card-o"></i> Address <span class="error">*<?php echo $addError; ?></span></label>
							<textarea form="checkoutForm" class="textarea-address" id="address" name="address" placeholder="Your Address"><?php echo "$add"; ?></textarea>

						</div>

						<div class="col-50">
							<h3>Card Details</h3>

							<label for="cname">Name on Card <span class="error">* <?php echo $cNameError; ?></span></label>
							<input type="text" id="cname" name="cardname" placeholder="Dan Daniels" value='<?php echo $cname ?>'>

							<label for="ccnum">Credit card number <span class="error">* <?php echo $cardError; ?> </span></label>
							<input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" value='<?php echo $card ?>'>

							<label for="expmonth">Exp <span class="error">* <?php echo $dateError; ?></span></label>
							<input type="month" id="expiry" name="expiry" placeholder="01/10"value='<?php echo $date ?>'>
						</div>
						<div class="col-50">
							<label for="ccv">CVV <span class="error">* <?php echo $ccvError; ?></span></label>
							<input type="text" id="ccv" name="ccv" placeholder="XXX" value='<?php echo $ccv ?>'>
						</div>


					</div>
					<label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
					<input type="submit" value="Continue to checkout" class="btn">
				</form>
			</div>
		</div>
	</div>

	<?php
  endModule(); // Now a function call
?>
