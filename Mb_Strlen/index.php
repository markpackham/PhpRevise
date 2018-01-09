<?php
$string = "a";
echo strlen($string);
//outputs 1 so all looks good
echo "<br>";
$string = "four";
echo strlen($string);
//outputs 4 so all looks good
echo "<br>";
$string = "ê";
echo strlen($string);
//PROBLEM this outputs 2, strlen counts BYTES and NOT Characters!!!!!!!!!
echo "<br>";

$string = "ê";
echo mb_strlen($string);
//outputs 1 so a good, we are counting characters and not bytes
echo "<br>";

$string = "ê";
echo mb_strlen($string);
//outputs 1 so a good, we are counting characters and not bytes
echo "<br>";
//We can see the encoding used by mb_strlen by echoing it out
echo mb_internal_encoding();
echo "<br>";

//If you really want to use plain old stlen you can do this
$string = utf8_decode("ê");
echo strlen($string);
