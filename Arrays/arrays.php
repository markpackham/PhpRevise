<?php

/*
 * Compares array1 against one or more other arrays and returns the values in array1 that are not present in any of the other arrays.
 * http://php.net/manual/en/function.array-diff.php
 */

$array1 = array("a" => "1", "b" => "2", "c" => "3", "d" => "4");
$array2 = array("e" => "1", "f" => "2", "g" => "30000");

$output = array_diff($array1, $array2);
print_r($output);
//Shows the first result array's differences
//Array ( [c] => 3 [d] => 4 )

echo '<br />';
//Outputs 4, size of and count are the same thing
echo count($array1);
echo '<br />';
echo sizeof($array1);
echo '<br />';
//Show first which is 1
echo current($array1) . "<br>";
//Show last which is 4
echo end($array1);

///
// Change array contents
$change_me = [3, 6, 9];
$change_me[] = "string";
$change_me[] = 10000;
$change_me[1] = "tadpole";
print_r($change_me);

//
// Push Pop example, array_pop() and array_push() deal exclusively with the end of the array
$stack = ["wild success", "failure", "struggle"];
array_push($stack, "blocker", "impediment");
print_r($stack);
array_pop($stack);
array_pop($stack);
array_pop($stack);
array_pop($stack);
print_r($stack);

//
// array_shift to target the begining of the array
// array_shift() function removes the first element of an array and returns that value.
// Each of the elements in the array will be shifted down an index.
// For example, the element that was previously at the 3rd index will now be located at the 2nd.

// array_unshift() function takes an array as its first argument.
// The arguments that follow are elements to be added to the beginning of the array.
// It returns the new number of elements in the array.
$record_holders = [];
array_unshift($record_holders, "Tim Montgomery",
    "Maurice Greene", "Donovan Bailey", "Leroy Burrell", "Carl Lewis");
echo implode(", ", $record_holders) . "\n\n";
array_shift($record_holders);
echo implode(", ", $record_holders) . "\n\n";
array_unshift($record_holders, "Justin Gatlin", "Asafa Powell");
echo implode(", ", $record_holders) . "\n\n";
array_shift($record_holders);
echo implode(", ", $record_holders) . "\n\n";
array_unshift($record_holders, "Usain Bolt");
echo implode(", ", $record_holders) . "\n\n";

// Nested array
// break everything into smaller bits starting with the largest array
$treasure_hunt = ["garbage", "cat", 99, ["soda can", 8, ":)", "sludge", ["stuff", "lint", ["GOLD!"], "cave", "bat", "scorpion"], "rock"], "glitter", "moonlight", 2.11];
$layer_one = $treasure_hunt[3];
//print_r($layer_one);
$layer_two = $layer_one[4];
//print_r($layer_two);
$layer_three = $layer_two[2];
//print_r($layer_three);
//echo $layer_three[0];
// take everything we've used
echo $treasure_hunt[3][4][2][0];

/*
 * Arrays are ordered collections of data that are a type of data structure fundamental
 * to computer science.
In PHP, we refer to this data structure as ordered arrays.
The location of an element in an array is known as its index.
The elements in an ordered array are arranged in ascending numerical order starting with index zero.
We can construct ordered arrays with a built-in PHP function: array().
We can construct ordered arrays with short array syntax, e.g. [1,2,3].
We can print arrays using the built-in print_r() function or by converting them into strings using the implode() function.
We use square brackets ([]) to access elements in an array by their index.
We can add elements to the end of an array by appending square brackets ([]) to an array variable name and assigning the value with the assignment operator (=).
We can change elements in an array using array indexing and the assignment operator.
The array_pop() function removes the last element of an array.
The array_push() function adds elements to the end of an array.
The array_shift() function removes the first element of an array.
The array_unshift() function adds elements to the beginning of the array.
We can use chained square brackets ([]) to access and change elements within a nested array.
 */

//
// Associative Array, changing & removing stuff
$my_car = [
    "oil" => "black and clumpy",
    "brakes" => "new",
    "tires" => "old with worn treads",
    "filth" => "bird droppings",
    "wiper fluid" => "full",
    "headlights" => "bright",
];
print_r($my_car);
$my_car["oil"] = "new and premium";
$my_car["tires"] = "new with deep treads";
unset($my_car["filth"]);
print_r($my_car);

//
// Numerical keys in arrays example
$hybrid_array = [1, 2, 3, 4];
$hybrid_array[8] = "five more";
print_r($hybrid_array);
array_push($hybrid_array, rand());
echo $hybrid_array[9];

//
//
// Array by Value vs by Reference
function changeColor($arr)
{
    $arr["color"] = "red";
}
$object = ["shape" => "square", "size" => "small", "color" => "green"];
changeColor($object);
echo $object["color"]; // Prints: green
//
function reallyChangeColor(&$arr)
{
    $arr["color"] = "red";
}
$object = ["shape" => "square", "size" => "small", "color" => "green"];
reallyChangeColor($object);
echo $object["color"]; // Prints: red
///
/// Another example of array by Value & array by Reference
$doge_meme = ["top_text" => "Such Python", "bottom_text" => "Very language. Wow.", "img" => "very-cute-dog.jpg", "description" => "An adorable doge looks confused."];
$bad_meme = ["top_text" => "i don't know", "bottom_text" => "i can't think of anything", "img" => "very-fat-cat.jpg", "description" => "A very fat cat looks happy."];
$meme = ["top_text", "bottom_text", "img", "description"];
function createMeme($meme)
{
    $meme["top_text"] = "Much PHP";
    $meme["bottom_text"] = "Very programming. Wow.";
    return $meme;
}
$php_doge = createMeme($doge_meme);
print_r($php_doge);
function fixMeme(&$meme)
{
    $meme["top_text"] = "Moo";
    $meme["bottom_text"] = "Meow";
    return $meme;
}
fixMeme($bad_meme);

/*
Associative arrays are data structures in which string or integer keys are associated with values.
We use the => operator to associate a key with its value. $my_array = ["panda"=>"very cute"]
To print an array’s keys and their values, we can use the print_r() function.
We access the value associated with a given key by using square brackets ([ ]). For example: $my_array["panda"] will return "very cute".
We can assign values to keys using this same indexing syntax and the assignment operator (=): $my_array["dog"] = "good cuteness";
This same syntax can be used to change existing elements. $my_array["dog"] = "max cuteness";
We can remove a key=>value pair entirely using the PHP unset() function.
Keys can be integers. In fact, ordered arrays are just arrays in which integer keys have been assigned to the values automatically.
In PHP, associative arrays and ordered arrays are different uses of the same data type.
The union (+) operator takes two array operands and returns a new array with any unique keys from the second array appended to the first array.
When writing function with array parameters, we can pass the array by value or by reference depending on our intent.
 */
