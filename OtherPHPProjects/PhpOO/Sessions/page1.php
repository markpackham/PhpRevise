<?php

//Sessions are stored on the server unlike cookies which are stored on the client's machine
if (isset($_POST['submit'])) {
    session_start(); // Start the session, need to do this on every page

    $_SESSION['name'] = htmlentities($_POST['name']);
    $_SESSION['email'] = htmlentities($_POST['email']);

    //Header redirects to a different page after submitting
    header('Location: page2.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP Sessions</title>
</head>
<body>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="text" name="name" placeholder="Enter Name">
    <br>
    <input type="text" name="email" placeholder="Enter Email">
    <br>
    <input type="submit" name="submit" value="Submit">
</form>
</body>
</html>