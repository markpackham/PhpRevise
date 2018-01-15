<?php
if (isset($_GET['accept-cookies'])) {
    //time is current time in php
setcookie('accept-cookies','true',time()+99999);
//redirect user not to see cookie banner, just refresh page
    header('Location: ./');
}
?>

<!-doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
<?php
//Show cookie banner if accept-cookies hasn't been set
if (!isset($_COOKIE['accept-cookies'])) {
    ?>
    <div class="cookie-banner">
        <div class="container">
            <p>Blah blah blah silly EU Cookie law...<a href="/cookies">This link does nothing</a></p>
            <a class="button" href="?accept-cookies">Ok continue</a>
        </div>
    </div>
    <?php
}
?>

<p>This is some text in a paragraph</p>
<script
        src="https://code.jquery.com/jquery-1.12.4.min.js"
        integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
        crossorigin="anonymous"></script>
<script src="js/global.js"></script>
</body>
</html>
