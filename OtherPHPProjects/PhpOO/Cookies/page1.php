<?php
//Sessions are more secure than cookies since they exist on the server rather than the client machine
if (isset($_POST['submit'])) {
    $username = htmlentities($_POST['username']);

    //Cookies must expire after a certain time, you can't just destory them like sessions
    setcookie('username', $username, time() + 3600); // 1 Hour

    //Header redirects to a different page after submitting
    header('Location: page2.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Cookies</title>
</head>
<body>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="text" name="username" placeholder="Enter Username">
    <br>
    <input type="submit" name="submit" value="Submit">
</form>
</body>
</html>