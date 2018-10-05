<?php
session_start();
include_once('tools.php');

$file = fopen("products.txt", "r+");
$content = fgets($file);
$newcontent = "";

//var_dump($_SESSION);

foreach ($_SESSION as $session)
  {
	var_dump($_SESSION);

	foreach ($session as $cart){
		foreach ($cart as $items){
			debug_to_console($items);
			$newcontent .= $items;
		}
	}
  }


 fputcsv($file,explode('	',$newcontent));

?>
