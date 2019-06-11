<?php

// DEVELOPMENT
if ( ! defined('LIVE') ) {
	define('LIVE', false);
}



// Custom error handler
function my_error_handler ($e_number, $e_message, $e_file, $e_line, $e_vars) {

	$message = "An error occurred in script '$e_file' on line $e_line:\n$e_message\n";

	$message .= "<pre>" . print_r(debug_backtrace(), 1) . "</pre>\n";

	if (!LIVE) {	// if the site isn't live, display in browser
		echo '<div class="alert alert-danger">' . nl2br($message) . '</div>';
	} else {	// site is live; send email or error that isn't a notice
		error_log($message, 1, CONTACT_EMAIL, 'From:info@edgtacy.com');

		if ($e_number != E_NOTICE) {
			echo '<div class="alert alert-danger">A system error occurred. We apologize for the inconvenience.</div>';
		}
	}

	// return true so that php does not try to handle the error too
	return true;
}

set_error_handler('my_error_handler');





