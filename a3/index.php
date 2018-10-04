<?php
  session_start();
  include_once('tools.php'); // now contains module and other helpful functions

  // Any POST or GET Request Processing Code goes here

  topModule('home', 'showSpecials()'); // Now a function call
?>
		<div class="welcome-message">Welcome to the house that I built.
			<div class="show-more" id="show-more"> <button class="initial-button" id="show-more-link" type="button" onclick="javascript:showMore()">&#751; &#751; &#751;</button>
			</div>
		</div>

		<div class="all-basic-info" id="all-basic-info">

			<div class="grid-container" id="basic-info">
				<div class="grid-template-picture" id="picture-me-one"></div>
				<div class="grid-template-text">I've decided to use myself as the client for this project. My goal was make a sweet website, and learn lots of cool CSS tricks along the way </div>
				<div class="grid-template-blank">ᕕ( ՞ ᗜ ՞ )ᕗ</div>
				<div class="grid-template-blank2">໒( , ⊙ – ⊙ , )७</div>
				<div class="grid-template-blank3"> </div>
			</div>

			<div class="grid-container" id="basic-info-two">
				<div class="grid-template-picture" id="picture-me-two"></div>
				<div class="grid-template-text">Please feel free to browse my merch store, or even sign up to my mailing list while you're here!</div>
				<div class="grid-template-blank">ᕕ( ՞ ᗜ ՞ )ᕗ</div>
				<div class="grid-template-blank2">໒( , ⊙ – ⊙ , )७</div>
				<div class="grid-template-blank3"> </div>
			</div>

		</div>

	<?php
  endModule(); // Now a function call
?>
