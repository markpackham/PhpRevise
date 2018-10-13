<?php

$url = 'http://example.com';

// Remove all illegal characters from a url
$url = filter_var( $url, FILTER_SANITIZE_URL );

//Check if url is valid
$validation = filter_var( $url, FILTER_VALIDATE_URL );

if ( $validation ) {
	$output = 'proper URL';
} else {
	$output = 'wrong URL';
}

echo $output;