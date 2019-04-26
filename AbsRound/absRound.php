<?php

echo abs(-10.99); // Prints: 10.99

echo abs(127); // Prints: 127

echo round(1.2); // Prints 1

echo round(1.5); //Prints 2

echo round(1298736.821763876); // Prints: 1298737

//The ceil() function rounds a number UP to the nearest integer, if necessary.
echo (ceil(0.60) . "<br>");
echo (ceil(0.40) . "<br>");
echo (ceil(5) . "<br>");
echo (ceil(5.1) . "<br>");
echo (ceil(-5.1) . "<br>");
echo (ceil(-5.9));

/*
1
1
5
6
-5
-5
 */
