<?php
  session_start();
  include_once('tools.php');
//variables for error messages

$nameError = $emailError = $phoneError = $addError = $cardError = $dateError = $ccvError = "";

$continue = "true";

$name = $email = $phone = $add = $card = $date = $ccv = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
	$continue = "true";
	//var_dump($_POST);
	if(empty($_POST["firstname"])){
		$nameError = "required";
		$continue = "false";
	}
	elseif(!preg_match("/^[a-z ,.'-]+$/i", $_POST["firstname"], $match)){
		$nameError = "Name invalid";
		$continue = "false";
	}
	else{
		$name = test_input($_POST["firstname"]);
		$_SESSION['info']['name'] = $name;
	}
	if(empty($_POST["email"])){
		$emailError = "required";
		$continue = "false";
	}
	elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
		$emailError = "Email invalid";
		$continue = "false";
	}
	else{
		$email = test_input($_POST["email"]);
		$_SESSION['info']['email'] = $email;
	}
	if(empty($_POST["mobile"])){
		$phoneError = "required";
		$continue = "false";
	}
	else if(!preg_match("/^(\(04\)|04|\+614)( ?\d){8}$/i", $_POST["mobile"], $match)){
		$phoneError = "Number invalid";
		$continue = "false";
	}
	else{
		$phone = test_input($_POST["mobile"]);
		$_SESSION['info']['phone'] = $phone;
	}
	if(empty($_POST["address"])){
		$addError = "required";
		$continue = "false";
	}
	elseif(!preg_match("/^[a-z\d\/ \r\n,.'-]+$/i", $_POST["address"], $match)){
		$addError = "Address invalid";
		$continue = "false";
	}
	else{
		$add = $_POST["address"];
		$_SESSION['info']['add'] = $add;
	}
	if(empty($_POST["cardnumber"])){
		$cardError = "required";
		$continue = "false";
	}
	elseif(!preg_match("/^( ?\d){12,19}$/", $_POST["cardnumber"], $match)){
		$cardError = "Card invalid";
		$continue = "false";
	}
	else{
		$card = test_input($_POST["cardnumber"]);
	}
	if(empty($_POST["expiry"])){
		$dateError = "required";
		$continue = "false";
	}
	else{
		$date = test_input($_POST["expiry"]);
	}
	if(empty($_POST["ccv"])){
		$ccvError = "required";
		$continue = "false";
	}
	else{
		$ccv = test_input($_POST["ccv"]);
	}
	if($continue == "true"){
		$_SESSION['info']['date'] = date();
		header("Location: receipt.php");
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
