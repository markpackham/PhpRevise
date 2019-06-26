<?php

// find number
$deepArray = [1, [2, [3, [4, [5, [6, [111]]]]]]];
echo $deepArray[1][1][1][1][1][1][0] . "<br>"; // 111

// Goal is to find "99999" burried in the array
$multiDimensional = [1, 2, [3, 30, [-1, -2, 3], 31, 32, [40, 41, 42, [50, 51, 52, 53, 54, 55, [60, 61, [62, 99999]]]]], 4, 5, 6, 7, 8, 9, [10, 11, 12]];
$lv1 = $multiDimensional[2];
//print_r($lv1);

/* Array ( [0] => 3 [1] => 30 [2] => Array ( [0] => -1 [1] => -2 [2] => 3 ) [3] => 31 [4] => 32 [5] =>
Array ( [0] => 40 [1] => 41 [2] => 42 [3] => Array ( [0] => 50 [1] => 51 [2] => 52 [3] => 53 [4] => 54 [5] => 55 [6] => Array
( [0] => 60 [1] => 61 [2] => Array ( [0] => 62 [1] => 99999 ) ) ) ) )
 */

$lv2 = $lv1[5];
//print_r($lv2);
/*
Array ( [0] => 40 [1] => 41 [2] => 42 [3] => Array ( [0] => 50 [1] => 51 [2] => 52 [3] => 53 [4]
=> 54 [5] => 55 [6] => Array ( [0] => 60 [1] => 61 [2] => Array ( [0] => 62 [1] => 99999 ) ) ) )
 */
$lv3 = $lv2[3];
//print_r($lv3);
/*
Array ( [0] => 50 [1] => 51 [2] => 52 [3] => 53 [4] => 54 [5] => 55 [6] => Array ( [0] => 60 [1] => 61 [2] => Array ( [0] => 62 [1] => 99999 ) ) )
 */
$lv4 = $lv3[6];
//print_r($lv4);
/*
Array ( [0] => 60 [1] => 61 [2] => Array ( [0] => 62 [1] => 99999 ) )
 */
$lv5 = $lv4[2];
//print_r($lv5);
// Array ( [0] => 62 [1] => 99999 ) // found it, last number has to be 1
$multiDimensional[2][5][3][6][2][1] . "<br/>";
// 99999

///
/// aim to echo out 998
$multiDimensional2 = [1, [2, [3, [4, [5, [6, [7]]]]]], [21, [31, 998, [41, [51, [61, [71]]]]]]];
//print_r($multiDimensional2);
/*
Array ( [0] => 1 [1] => Array ( [0] => 2 [1] => Array ( [0] => 3 [1] => Array ( [0] => 4 [1] => Array ( [0] => 5 [1] => Array
( [0] => 6 [1] => Array ( [0] => 7 ) ) ) ) ) ) [2] => Array
( [0] => 21 [1] => Array ( [0] => 31 [1] => 998 [2] => Array ( [0] => 41 [1] => Array ( [0] => 51 [1] => Array ( [0] => 61 [1] => Array ( [0] => 71 ) ) ) ) ) ) )
 */
$lv1 = $multiDimensional2[2];
//print_r($lv1);
// Array ( [0] => 21 [1] => Array ( [0] => 31 [1] => 998 [2] => Array ( [0] => 41 [1] => Array ( [0] => 51 [1] => Array ( [0] => 61 [1] => Array ( [0] => 71 ) ) ) ) ) )
$lv2 = $lv1[1];
//print_r($lv2);
// Array ( [0] => 31 [1] => 998 [2] => Array ( [0] => 41 [1] => Array ( [0] => 51 [1] => Array ( [0] => 61 [1] => Array ( [0] => 71 ) ) ) ) )
echo $multiDimensional2[2][1][1] . "<br>";
// 998

//
//
// aim to echo out 997
$multiDimensional3 = [[1], 11, [2], 22, [3], 33, [4], 44, [441, 442, 443, [997]], [5]];
//print_r($multiDimensional3);
/* Array ( [0] => Array ( [0] => 1 ) [1] => 11 [2] => Array ( [0] => 2 ) [3] => 22 [4] => Array ( [0] => 3 ) [5] => 33
[6] => Array ( [0] => 4 ) [7] => 44 [8] => Array ( [0] => 441 [1] => 442 [2] => 443 [3] => Array ( [0] => 997 ) ) [9] => Array ( [0] => 5 ) )
 */
$lv1 = $multiDimensional3[8];
//print_r($lv1);
// Array ( [0] => 441 [1] => 442 [2] => 443 [3] => Array ( [0] => 997 ) )
echo $multiDimensional3[8][3][0] . "<br>";

//
//
// array looping
$arr = array(1, 2, 3, 4);
foreach ($arr as $value) {
    echo $value . "<br>";
}
echo "<br>";

//
//
// arrays in arrays
$arr = [1, [11], 2, [12], 3, [13]];
foreach ($arr as $value) {
    echo $value . "<br>"; // gives 1, Array, 2, Array, 3, Array
}
echo "<br>";
//
//
// multi dimensional array looping (messy solution with warnings but at least stops Array being output)
foreach ($arr as $value) {

    if (is_int($value)) {
        echo $value . "<br>";
    }

    foreach ($value as $valueLv2) {

        if (is_int($valueLv2)) {
            echo $valueLv2 . "<br>";
        }

    }
}
echo "<br>";
echo "<br>";
//
//
// regular for loop, still outputs arrays
for ($i = 0; $i < sizeof($arr); $i++) {
    echo $arr[$i] . "<br>";
}
echo "<br>";
echo "<br>";
//
//
// output values in arrays loops
for ($i = 0; $i < sizeof($arr); $i++) {

    if (is_int($arr[$i])) {
        echo $arr[$i] . "<br>";
    }

    if (is_int($arr[$i][0])) {
        echo $arr[$i][0] . "<br>";
    }

}
