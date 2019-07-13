<?php

//Associative arrays are great for storing multiple bits of data
$user = ['name' => 'Mark', 'email' => 'anemail@something.com', 'age' => 98];

//Prepare data to be stored so you can place the array in a cookie
$user = serialize($user);

//Save the cookie for an entire day
setcookie('user', $user, time() + (86400 * 30));

//You must unseralize $user for it to become a readable array
$user = unserialize($_COOKIE['user']);

echo "Our preset should print this stuff below 'Array ( [name] => Mark [email] => anemail@something.com [age] => 98 )'<br><br><br>";
print_r($user);
echo "<br><a href='/oophp/Cookies/page1.php'>Go back to Page 1</a>";