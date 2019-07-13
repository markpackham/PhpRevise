<h2><?= $title ?></h2>
<!-- Loop through our database's posts table -->
<?php foreach ($posts as $post) : ?>
    <h3><?php echo $post['title']; ?></h3>
    <div class="row">
        <div class="col-md-3">
            <img class="post-thumb"
                 src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image'] ?>" alt="">
        </div>
        <div class="col-md-9">
            <small class="post-date">
                Posted on: <?php echo $post['created_at']; ?>
                in <strong><?php echo $post['name'] ?></strong>
            </small>
            <br>
            <!-- We get word_limiter from autoload.php helper -->
            <?php echo word_limiter($post['body'], 70); ?>
            <br><br>
            <p><a class="btn btn-default" href="<?php echo site_url('/posts/' . $post['slug']); ?>
    ">Read more</a></p>
        </div>
    </div>
<?php endforeach; ?>
<div class="pagination-links">
    <?php echo $this->pagination->create_links(); ?>
</div>