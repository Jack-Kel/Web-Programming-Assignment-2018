<?php
  session_start();
  include_once('tools.php'); // now contains module and other helpful functions

  // Any POST or GET Request Processing Code goes here

 $rows; $cells;

$fp = fopen('products.txt','r');
  if (($headings = fgetcsv($fp, 0, "\t")) !== false) {
     while ( $cells = fgetcsv($fp, 0, "\t") ) {
      for ($x=1; $x<count($cells); $x++)
         $pumps[$cells[0]][$headings[$x]]=$cells[$x];
     }
   }
   fclose($fp);



global $products;

$products = array(
	'mug' => array(
		'price' => $pumps["Mh"]["Price"],
		'description' => $pumps["Mh"]["Description"],
		'image' => "../../media/placeholder-mug.png",
		'name' => $pumps["Mh"]["Title"],
		'message' => "the only mug prettier is my own",
		'opt1' => $pumps["Mh"]["Option"],
		'opt2' => $pumps["Mb"]["Option"],

	),
	'tee' => array(
		'price' => $pumps["Txs"]["Price"],
		'description' => $pumps["Txs"]["Description"],
		'image' => "../../media/placeholder-t.png",
		'name' => $pumps["Txs"]["Title"],
		'message' => "two sizes fit all",
		'opt1' => $pumps["Txs"]["Option"],
		'opt2' => $pumps["Txl"]["Option"]
	),
	'hoodie' => array(
		'price' => $pumps["Hb"]["Price"],
		'description' => $pumps["Hb"]["Description"],
		'image' => "../../media/placeholder-hoodie.png",
		'name' => $pumps["Hb"]["Title"],
		'message' => "you've chosen very well",
		'opt1' => $pumps["Hb"]["Option"],
		'opt2' => $pumps["Hdb"]["Option"]
	)
);


  topModule($_GET["product_id"], 'showSpecials()'); // Now a function call

  product($_GET["product_id"]);

  endModule(); // Now a function call

?>
