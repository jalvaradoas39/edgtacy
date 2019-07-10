<?php

require('./includes/config.inc.php');



// Check $_GET key/value pairs
if ( isset($_GET['type']) && $_GET['type'] === 'editing' ) {
	// Store title name
	$page_title = "Our Services | EdgTacy.com";
	// Store service type; used for stored proc.
	$type = "editing";
}



include('./includes/header.html');




include('./views/services.html');




include('./includes/footer.html');

?>