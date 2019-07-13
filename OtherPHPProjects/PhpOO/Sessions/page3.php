<?php
session_start();

echo "<br>";
print_r($_SESSION);
echo "<br>";

$name = isset($_SESSION['name']) ? $_SESSION['name'] : 'Guest';
$email = isset($_SESSION['email']) ? $_SESSION['email'] : 'Not Subscribed';
?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP Sessions</title>
</head>
<body>
<h1>Hello <?php echo $name; ?></h1>
<a href="page4.php">Destroy your session on page 4</a>
<br>
<a href="page1.php">Create a new session on page 1</a>
</body>
</html>