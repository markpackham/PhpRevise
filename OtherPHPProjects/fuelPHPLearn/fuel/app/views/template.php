<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title><?php echo $title; ?></title>

    <!-- Bootstrap core CSS -->
	<?php echo Asset::css( 'bootstrap.css' ); ?>
	<?php echo Asset::css( 'blog.css' ); ?>


</head>

<body>

<div class="container">

    <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
            <a class="p-2 text-muted"
               href="/fuelPhpLearn/public/posts/">Home</a>
            &nbsp;<span>&nbsp;&nbsp;</span>
            <a class="p-2 text-muted" href="/fuelPhpLearn/public/posts/add">Add
                Post</a>
        </nav>
    </div>
</div>

<div class="container">
	<?php echo $content; ?>
</div>

<div class="container">
    <footer>Built with Fuel PHP framework</footer>
</div>
</body>
</html>
