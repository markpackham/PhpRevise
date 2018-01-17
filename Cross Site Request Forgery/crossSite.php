<?php
//Store data in a session, tokens generated on refreshes
session_start();
require_once 'classes/Token.php';

if (isset($_POST['product'], $_POST['quantity'], $_POST['token'])) {
    $product = $_POST['product'];
    $quantity = $_POST['quantity'];

    if (!empty($product) && !empty($quantity)) {
        if (Token::check($_POST['token'])) {
            echo 'Process order';
        }
    }
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cross Site Request Forgery</title>
</head>
<body>
<h1>Cross Site Request Forgery</h1>
<p>The forgeries are fake form requests created by a malicious user eg you log into a shop, and they have a hidden
    script that runs when you hover over an image making a purchase without
    you being aware of it.</p>
<p>GET request are very vulnerable since you can fake the urls.</p>
<form action="" method="post">
    <div class="product">
        <strong>A product</strong>
        <div class="field">
            Quantity: <input type="text" name="quantity">
        </div>
        <input type="submit" value="Order">
        <input type="hidden" name="product" value="1">
        <!-- token protects us from request forgeries -->
        <input type="hidden" name="token"
               value="<?php echo Token::generate(); ?>">
    </div>
</form>

</body>
</html>
