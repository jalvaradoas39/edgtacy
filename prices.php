<?php

require('./includes/config.inc.php');



// Declare variables
$type = $category = $sp_cat = false;

// Check $_GET key/value pairs
if ( isset($_GET['type'], $_GET['category'], $_GET['id']) && 
	filter_var($_GET['id'], FILTER_VALIDATE_INT, array('min_range' => 1)) ) {

	// Store $_GET values
	if ( $_GET['type'] === 'editing' ) {
		$type = 'editing';
	}

	$category = $_GET['category'];
	$sp_cat = $_GET['id'];


	// Display error page if any $_GET undefined
	if ( !$type || !$category || !$sp_cat ) {
		$page_title = 'Error';
		include('./includes/header.html');
		include('./views/error.html');
		include('./includes/footer.html');
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
