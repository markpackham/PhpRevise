<?php
// People Array
$people[] = "Mark";
$people[] = "Paul";
$people[] = "Richard";
$people[] = "Farlane";
$people[] = "Riccardo";
$people[] = "Steve";
$people[] = "John";
$people[] = "Kathy";
$people[] = "Evan";
$people[] = "Anthony";
$people[] = "Tom";
$people[] = "Rhonda";
$people[] = "Hal";
$people[] = "Ernie";
$people[] = "Johanna";
$people[] = "Farrah";
$people[] = "Linda";
$people[] = "Shawn";
$people[] = "Olivia";
$people[] = "Derek";
$people[] = "Amanda";
$people[] = "Rachel";
$people[] = "Katie";
$people[] = "Jillian";
$people[] = "Jose";
$people[] = "Malcom";
$people[] = "Greg";
$people[] = "Mary";
$people[] = "Brad";
$people[] = "Mike";

// Get Query String
//PHP $_REQUEST is used to collect data after submitting an HTML form
//It is an associative array that by default contains the contents of $_GET, $_POST and $_COOKIE.
$q = $_REQUEST['q'];

$suggestion = "";

// Get Suggestions
if ($q !== "") {
    $q = strtolower($q);
    $len = strlen($q);
    foreach ($people as $person) {
        //The stristr() function searches for the first occurrence of a string inside another string.
        if (stristr($q, substr($person, 0, $len))) {
            if ($suggestion === "") {
                $suggestion = $person;
            } else {
                $suggestion .= ", $person";
            }
        }
    }
}

echo $suggestion === "" ? "No Suggestion" : $suggestion;