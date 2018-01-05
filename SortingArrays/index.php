<?php

$names = ['alex', 'billy', 'chuck', 'david'];
$numbers = [1, 2, 3, 4];

sort($names);
var_dump($names);
//array(4) { [0]=> string(4) "alex" [1]=> string(5) "billy" [2]=> string(5) "chuck" [3]=> string(5) "david" }

echo "<br><br>";
//Reverse sort
rsort($numbers);
var_dump($numbers);
//array(4) { [0]=> int(4) [1]=> int(3) [2]=> int(2) [3]=> int(1) }
echo "<br><br>";

$names = ['alex' => 1, 'billy' => 2, 'chuck' => 3, 'david' => 4];
sort($names);
var_dump($names);
//Keys like "alex" get lost array(4) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(4) }
echo "<br><br>";

$names = ['alex' => 1, 'billy' => 2, 'chuck' => 3, 'david' => 4];
//Sort an array and maintain index association
asort($names);
var_dump($names);
//Keys are saved array(4) { ["alex"]=> int(1) ["billy"]=> int(2) ["chuck"]=> int(3) ["david"]=> int(4) }
echo "<br><br>";

$numbers = [5, 4, 3, 2, 1];
asort($numbers);
var_dump($numbers);
//Outputs array(5) { [4]=> int(1) [3]=> int(2) [2]=> int(3) [1]=> int(4) [0]=> int(5) }
//We are sorting by values and not keys

echo "<br><br>";
//ksort sorts by keys
$names = ['Zed' => 1, 'Bob' => 2, 'Alpha' => 3, 'Echo' => 4];
ksort($names);
var_dump($names);
//array(4) { ["Alpha"]=> int(3) ["Bob"]=> int(2) ["Echo"]=> int(4) ["Zed"]=> int(1) }

echo "<br><br>";
$files = ['img12.png', 'img10.png', 'img2.png', 'img1.png'];
sort($files);
var_dump($files);
//This is no good since we get array(4) { [0]=> string(8) "img1.png" [1]=> string(9) "img10.png" [2]=> string(9) "img12.png" [3]=> string(8) "img2.png" }
//We need to do a natural sort, natsort
echo "<br><br>";
$files = ['img12.png', 'img10.png', 'img2.png', 'img1.png'];
natsort($files);
var_dump($files);
echo "<br><br>";

/*Creating out own sort function via usort*/
$numbers = [1, 1, 2, 3, 4, 1];

usort($numbers, function ($first, $second) {
//return 1 to move up a list, -1 to move down a list
    if ($first === $second) {
        //leave in place
        return 0;
    }

    /*
    if ($first > $second) {
        //asceding order, move up the list
        return 1;
    } else {
        //shove down the list
        return -1;
    }
    */

    //Short version of the above
    return ($first > $second) ? 1 : -1;

});
var_dump($numbers);
//The numbers are now in order array(6) { [0]=> int(1) [1]=> int(1) [2]=> int(1) [3]=> int(2) [4]=> int(3) [5]=> int(4) }

/* PHP 7 ONLY Trick
$numbers = [1, 1, 2, 3, 4, 1];
echo 1 <=> 1; //We get a zero
echo 1 <=> 2; //We get -1
echo 2 <=> 1; //We get 1

usort($numbers, function ($first, $second) {
 return $first <=> $second;
}
*/

echo "<br><br>";

$users = [
    ['username' => 'adam', 'age' => 20, 'posts' => 300],
    ['username' => 'zulu', 'age' => 70, 'posts' => 700],
    ['username' => 'nick', 'age' => 11, 'posts' => 111],
    ['username' => 'aisleyne', 'age' => 44, 'posts' => 444],
    ['username' => 'morgan', 'age' => 120, 'posts' => 3]
];

usort($users, function ($first, $second) {
    $scoreOne = $first['age'] + $first['posts'];
    $scoreTwo = $second['age'] + $second['posts'];

    return ($scoreOne > $scoreTwo) ? -1 : 1;
});

var_dump($users);

//We can modify the sorting algorith to give age greater importance to age when age is added to posts
echo "<br><br>";

$users = [
    ['username' => 'adam', 'age' => 20, 'posts' => 300],
    ['username' => 'zulu', 'age' => 70, 'posts' => 700],
    ['username' => 'nick', 'age' => 11, 'posts' => 111],
    ['username' => 'aisleyne', 'age' => 44, 'posts' => 444],
    ['username' => 'morgan', 'age' => 120, 'posts' => 3]
];

usort($users, function ($first, $second) {
    $scoreOne = $first['age'] + $first['posts'];
    $scoreTwo = $second['age'] + $second['posts'];


    //give greater importance to age
    if ($scoreOne === $scoreTwo) {

        /*
        if ($first['age'] > $second['age']) {
            return 0;
        }else{
            return 1;
        }
        */

        return ($first['age'] > $second['age']) ? 0 : 1;
    }

    return ($scoreOne > $scoreTwo) ? -1 : 1;
});

var_dump($users);


echo "<br><br>";
//We can detach the function

$users = [
    ['username' => 'adam', 'age' => 20, 'posts' => 300],
    ['username' => 'zulu', 'age' => 70, 'posts' => 700],
    ['username' => 'nick', 'age' => 11, 'posts' => 111],
    ['username' => 'aisleyne', 'age' => 44, 'posts' => 444],
    ['username' => 'morgan', 'age' => 120, 'posts' => 3]
];

function sortByScore($first, $second)
{
    $scoreOne = $first['age'] + $first['posts'];
    $scoreTwo = $second['age'] + $second['posts'];


    //give greater importance to age
    if ($scoreOne === $scoreTwo) {
        return ($first['age'] > $second['age']) ? 0 : 1;
    }

    return ($scoreOne > $scoreTwo) ? -1 : 1;
}

usort($users, 'sortByScore');

var_dump($users);
/*
 * array(5) { [0]=> array(3) { ["username"]=> string(4) "zulu" ["age"]=> int(70) ["posts"]=> int(700) } [1]=> array(3) { ["username"]=> string(8) "aisleyne" ["age"]=> int(44) ["posts"]=> int(444) } [2]=> array(3) { ["username"]=> string(4) "adam" ["age"]=> int(20) ["posts"]=> int(300) } [3]=> array(3) { ["username"]=> string(6) "morgan" ["age"]=> int(120) ["posts"]=> int(3) } [4]=> array(3) { ["username"]=> string(4) "nick" ["age"]=> int(11) ["posts"]=> int(111) } }
 */


echo "<br><br>";
//The Array Multisort is very flexiable

$numbers = [50, 20, 13, 11, 1];

array_multisort($numbers, SORT_DESC);

var_dump($numbers);
//array(5) { [0]=> int(50) [1]=> int(20) [2]=> int(13) [3]=> int(11) [4]=> int(1) }

echo "<br><br>";

$numbers = [50, 20, 13, 11, 1, '777mark'];

array_multisort($numbers, SORT_DESC, SORT_NUMERIC);

var_dump($numbers);
//array(6) { [0]=> string(7) "777mark" [1]=> int(50) [2]=> int(20) [3]=> int(13) [4]=> int(11) [5]=> int(1) }

echo "<br><br>";
$files = ['img12.png', 'img10.png', 'img2.png', 'img1.png'];
array_multisort($numbers, SORT_ASC, SORT_NATURAL);
var_dump($files);

//array(4) { [0]=> string(9) "img12.png" [1]=> string(9) "img10.png" [2]=> string(8) "img2.png" [3]=> string(8) "img1.png" }

echo "<br><br>";

//For this example our arrays must have the same amount of items to sort 2 things at the same time
$names = ['adam','joe','juan','honda','balrog'];
$numbers = [1,2,3,4,5];

array_multisort($names, $numbers);
var_dump($names);
var_dump($numbers);
