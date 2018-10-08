<?php
  session_start();
  include_once('tools.php'); // now contains module and other helpful functions

  // Any POST or GET Request Processing Code goes here

setProducts();


  topModule($_GET["product_id"], 'showSpecials()'); // Now a function call

  product($_GET["product_id"]);

  endModule(); // Now a function call

?>
