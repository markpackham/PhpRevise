<?php
$very_bad_unclear_name = "15 chicken wings";

$order = &$very_bad_unclear_name; //We assign by reference using "&" so "=&"

$order .= ", 1 cheeseburger";

$order .= ", 3 side salads";

echo "\nYour order is: $very_bad_unclear_name.";
