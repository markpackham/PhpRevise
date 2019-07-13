<?php
//MySQLi means MySQL Improved, you can use both procedural and OO
//With relational MySQL databases you have to pre-define everything in the Database First

require 'config/db.php';

//Check for submission
if (isset($_POST['submit'])) {
    //echo "Submitted";
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $body = mysqli_real_escape_string($conn, $_POST['body']);
    $author = mysqli_real_escape_string($conn, $_POST['author']);

    $query = "INSERT INTO posts(title,author,body) VALUES('$title','$author','$body')";

    //If query is successful
    if (mysqli_query($conn, $query)) {
        header('Location: ' . ROOT_URL . '');
    } else {
        //show error if something has gone wrong
        echo 'ERROR: ' . mysqli_error($conn);
    }

}

?>

<?php include('inc/header.php'); ?>
<div class="container">
    <h1>Add Post</h1>
    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>
">
        <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" class="form-control">
        </div>
        <div class="form-group">
            <label>Author</label>
            <input type="text" name="author" class="form-control">
        </div>
        <div class="form-group">
            <label>Body</label>
            <textarea name="body" class="form-control"></textarea>
        </div>
        <input type="submit" name="submit" value="Submit" class="btn btn-primary">
    </form>
</div>
<?php include('inc/footer.php'); ?>