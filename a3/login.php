<?php
  session_start();
  include_once('tools.php'); // now contains module and other helpful functions

  // Any POST or GET Request Processing Code goes here

  topModule('login', 'showSpecials()'); // Now a function call
?>
<div class="background-picture-login">
		<div class="centred-login" id="centred-login">
			<div class="login">
				<button class="initial-button" type="button" onclick="document.getElementById('login-box').style.display='block'" style="width:auto;">Join</button>

				<div id="login-box" class="modal">

					<form method="post" class="modal-content animate" action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php?ref=login" target="_blank">
						<div class="imgcontainer">
							<span onclick="document.getElementById('login-box').style.display='none'" class="close" title="Close Modal">&times;</span>
							<img src="../../media/avatar-placeholder.png" alt="Avatar" class="avatar">
						</div>

						<div class="login">
							<label for="uname"><b>Email</b></label>
							<input type="text" placeholder="Enter Email" name="email" required>

							<label for="psw"><b>Password</b></label>
							<input type="password" placeholder="Enter Password" name="password" required>

							<button class="initial-button" id="send-it-button" type="submit">Send It!</button>

						</div>

					</form>
				</div>

			</div>
		</div>
		<div class="screen-fixing"></div>
	</div>
	<?php
  endModule(); // Now a function call
?>
