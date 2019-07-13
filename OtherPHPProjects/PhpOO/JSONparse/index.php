<?php

//extract content from JSON file
$jsonData = file_get_contents("movies.json");

//hold decoded version of file
$json = json_decode($jsonData, true);
//get first array value, don't foget to add quotes to "title"
echo $json['movies'][0]['title'] . "<br>";

$output = "<ul>";
foreach ($json['movies'] as $movie) {
    //Make sure you use .= to append the way JavaScript would do += with characters
    $output .= "<h4>" . $movie['title'] . "</h4>";
    $output .= "<li>Year: " . $movie['year'] . "</li>";
    $output .= "<li>Genre: " . $movie['genre'] . "</li>";
    $output .= "<li>Director: " . $movie['director'] . "</li>";
}
$output .= "</ul>";

echo $output;

?>