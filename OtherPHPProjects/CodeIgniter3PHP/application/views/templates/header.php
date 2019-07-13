<html>
<head>
    <title>My CodeIgniter Blog</title>
    <link rel="stylesheet" href="https://bootswatch.com/3/flatly/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <script src="http://cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo base_url(); ?>">CodeIgniter Blog</a>
        </div>
        <div id="navbar">
            <ul class="nav navbar-nav">
                <li><a href="<?php echo base_url(); ?>">Home</a></li>
                <li><a href="<?php echo base_url(); ?>about">About</a></li>
                <li><a href="<?php echo base_url(); ?>posts">Blog</a></li>
                <li><a href="<?php echo base_url(); ?>categories">Categories</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php if (!$this->session->userdata('logged_in')) : ?>
                    <li><a href="<?php echo base_url(); ?>users/login">Login</a></li>
                    <li><a href="<?php echo base_url(); ?>users/register">Register</a></li>
                <?php endif; ?>
                <?php if ($this->session->userdata('logged_in')) : ?>
                    <li><a href="<?php echo base_url(); ?>posts/create">Create Post</a></li>
                    <li><a href="<?php echo base_url(); ?>categories/create">Create Category</a></li>
                    <li><a href="<?php echo base_url(); ?>users/logout">Logout</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <!-- Flash messages -->
<?php

$session = $this->session;

if ($session->flashdata('user_registered')) {
    flashMessage($session->flashdata('user_registered'));
}

if ($session->flashdata('post_created')) {
    flashMessage($session->flashdata('post_created'));
}

if ($session->flashdata('post_updated')) {
    flashMessage($session->flashdata('post_updated'));
}

if ($session->flashdata('category_created')) {
    flashMessage($session->flashdata('category_created'));
}

if ($session->flashdata('post_deleted')) {
    flashMessage($session->flashdata('post_deleted'));
}

if ($session->flashdata('user_loggedin')) {
    flashMessage($session->flashdata('user_loggedin'));
}

if ($session->flashdata('user_loggedout')) {
    flashMessage($session->flashdata('user_loggedout'));
}

if ($session->flashdata('category_deleted')) {
    flashMessage($session->flashdata('category_deleted'));
}

if ($session->flashdata('login_failed')) {
    echo '<p class="alert alert-danger">' . $session->flashdata('login_failed') . '</p>';
}


function flashMessage($output)
{
    echo '<p class="alert alert-success">' . $output . '</p>';
}

?>