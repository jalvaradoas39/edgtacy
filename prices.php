<?php

require('./includes/config.inc.php');



// // Declare variables
$type = $category = $sp_cat = false;

// Check $_GET key/value pairs
if ( isset($_GET['type']) ) {

	// Store $_GET values
	if ( $_GET['type'] === 'editing' ) {
		$type = 'editing';
	}

}




$page_title = 'Prices | Plans';
include('./includes/header.html');





if ( $type === 'editing' ) {
	include('./views/prices.html');
} else {		
	include('./views/noproducts.html');

}





include('./includes/footer.html');

?>
