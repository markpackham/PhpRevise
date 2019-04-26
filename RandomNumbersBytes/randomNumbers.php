<?php

//rand() and md5 are far too old to be that useful
//openssl_random_pseudo_bytes can't always be relied on since it isn't enabled in every environment
//Php 7 improved things greatly

//This from Php 7 is far more secure, worth using for gambling
echo random_int(1, 10);
echo "<br>";

//Random Bytes is great for salting
echo random_bytes(10);
//Outputs something like =�4��q��
echo "<br>";

//Do this if you want to see things as strings
echo bin2hex(random_bytes(10));
//Outputs something like e56f3784ad794e4f4bf1
echo "<br>";

//Still use password_hash for hashing passwords
echo password_hash("weak password", PASSWORD_DEFAULT);

echo rand(1, 2); // Prints either 1 or 2

echo rand(5, 10); // Prints a number between 5 and 10 (inclusive!)

echo rand(1, 100); // Prints a number between 1 and 100 (inclusive!)

//To get the maximum random number use
getrandmax();
