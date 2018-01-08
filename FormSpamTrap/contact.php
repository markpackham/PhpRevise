<?php

if (isset($_POST['name'], $_POST['email'], $_POST['query'])) {

    //Only a bot would be able to fill in the invisible title field
    if (isset($_POST['title']) && !empty($_POST['title'])) {
        die('Go away Mr Bot');
    }
    echo "Hello there human";
}

