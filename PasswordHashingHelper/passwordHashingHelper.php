<?php

use Project\Helpers\Hash;

require 'hash.php';

echo Hash::create('Mark');
//gives us $2y$10$N.UzM9yJ6nM1iCQn03HTJuefxVZrSFPHzT.Q/yTW4cJhdODfdlWk2

echo "<br>";

var_dump(Hash::check('Mark', '$2y$10$N.UzM9yJ6nM1iCQn03HTJuefxVZrSFPHzT.Q/yTW4cJhdODfdlWk2'));
//Gives true

echo "<br>";

var_dump(Hash::check('Mark', 'I am not a hash'));
//Gives false