<?php
//MySQLi means MySQL Improved, you can use both procedural and OO
//With relational MySQL databases you have to pre-define everything in the Database First
//editpost is simular to addpost

require 'config/db.php';

//Check for submission
if (isset($_POST['submit'])) {
    //echo "Submitted";
    $update_id = mysqli_real_escape_string($conn, $_POST['update_id']);
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $body = mysqli_real_escape_string($conn, $_POST['body']);
    $author = mysqli_real_escape_string($conn, $_POST['author']);

    $query = "UPDATE posts SET title='$title', author='$author',	body='$body' WHERE id = {$update_id}";

    //If query is successful
    if (mysqli_query($conn, $query)) {
        header('Location: ' . ROOT_URL . '');
    } else {
        //show error if something has gone wrong
        echo 'ERROR: ' . mysqli_error($conn);
    }

}


//Most stolen from post.php
//Get ID, make sure the input isn't poisoned
$id = mysqli_real_escape_string($conn, $_GET['id']);

//Create query
$query = 'SELECT * FROM posts WHERE id = ' . $id;

//Get result, $conn (connection) comes from config/db.php
$result = mysqli_query($conn, $query);

//Fetch data, turn into associative array, use $post instead of $posts
$post = mysqli_fetch_assoc($result);
//var_dump($posts);

// Free result
mysqli_free_result($result);

//Close connection
mysqli_close($conn);

?>
<?php include('inc/header.php'); ?>
<div class="container">
    <h1>Add Post</h1>
    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>
">
        <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" class="form-control"
                   value="<?php echo $post['title']; ?>"
            >
        </div>
        <div class="form-group">
            <label>Author</label>
            <input type="text" name="author" class="form-control"
                   value="<?php echo $post['author']; ?>"
            >
        </div>
        <div class="form-group">
            <label>Body</label>
            <textarea name="body" class="form-control"

            ><?php echo $post['body']; ?></textarea>
        </div>
        <input type="hidden" name="update_id" value="<?php echo $post['id']; ?>">
        <input type="submit" name="submit" value="Submit" class="btn btn-primary">
    </form>
</div>
<?php include('inc/footer.php'); ?>
