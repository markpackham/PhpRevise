<?php
// =&
$a = 3;
$b = &$a; // =& (equals ampersand) is the same as = & (equals space ampersand)
$a = 4;
print "$b"; // prints 4
