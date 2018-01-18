<?php
require_once('classes/DB.php');

$users = DB::getInstance()->query('SELECT * FROM singleton');

if ($users->count()) {
    foreach ($users->results() as $user) {
        echo $user->name, '<br>';
    }
}
