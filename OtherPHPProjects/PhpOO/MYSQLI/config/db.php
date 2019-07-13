<?php

define('ROOT_URL', 'http://localhost/oophp/MYSQLI/');
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'phpblog');

// Create Connection old way is mysql_connect (so without "i")
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check Connection
if (mysqli_connect_errno()) {
    // Connection Failed
    echo 'Failed to connect to MySQL ' . mysqli_connect_errno();
}