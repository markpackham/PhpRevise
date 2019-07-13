<?php
//MySQLi means MySQL Improved, you can use both procedural and OO
//With relational MySQL databases you have to pre-define everything in the Database First

require 'config/db.php';

//Create query
$query = 'SELECT * FROM posts ORDER BY created_at DESC';

//Get result, $conn (connection) comes from config/db.php
$result = mysqli_query($conn, $query);

//Fetch data
$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
//var_dump($posts);

// Free result
mysqli_free_result($result);

//Close connection
mysqli_close($conn);

?>

<?php include('inc/header.php'); ?>
<div class="container">
    <h1>Posts</h1>
    <?php foreach ($posts
                   as $post) : ?>
        <div class="well">
            <h3>
                <?php echo $post['title']; ?>
            </h3>
            <small>Created on <?php echo $post['created_at']; ?> by
                <?php echo $post['author']; ?>
            </small>
            <p>
                <?php echo $post['body']; ?>
            </p>
            <a class="btn btn-default" href="post.php?id=
<?php echo $post['id']; ?>
">Read More</a>
        </div>
    <?php endforeach; ?>
</div>
<?php include('inc/footer.php'); ?>
