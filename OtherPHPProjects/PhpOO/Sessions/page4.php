<?php
session_start();

//unset($_SESSION['name']);

session_destroy();

echo "Session destoryed <br>";
echo "<a href=\"page3.php\">Go to page 3 to see an empty Array</a>";