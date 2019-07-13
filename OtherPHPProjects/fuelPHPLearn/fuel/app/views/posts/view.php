<div class="blog-post">
    <h2 class="blog-post-title"><?php echo $posts->title ?></h2>
    <p class="blog-post-meta"><?php echo $posts->create_date ?></p>
    <!-- limit amount of characters shown in post -->
	<?php echo $posts->body; ?>

    <li>Category: <?php echo $posts->category ?></li>
    <li>Tags: <?php echo $posts->tags ?></li>
    </ul>
</div>
<br>
<hr>
<a class="btn btn-default"
   href="/fuelPhpLearn/public/posts/edit/<?php echo $posts->id; ?>">Edit
    Post</a>
<a class="btn btn-danger"
   href="/fuelPhpLearn/public/posts/delete/<?php echo $posts->id; ?>">Delete
    Post</a>
<br><br>