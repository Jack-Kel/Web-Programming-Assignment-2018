<?php
  session_start();
  include_once('tools.php'); // now contains module and other helpful functions

  // Any POST or GET Request Processing Code goes here

  topModule('MySite - Cart', 'showSpecials()'); // Now a function call
?>
  <h2>Welcome to Our Business</h2>
  <p>We have nice things!</p>
<?php
  endModule(); // Now a function call
?>
