<?php

/*
unlink is for destorying files
*/
$file = "test.txt";
if (!unlink($file)) {
    echo("Error deleting $file" . '<br>');
} else {
    echo("Deleted $file" . '<br>');
}

/*
unset is for destroying variables
*/
$test = 'test';
echo 'Before using unset() the value of $xys is : ' . $test . '<br>';
unset($test);
echo 'After using unset() the value of $xys is : ' . $test;