<?php
require_once('classes/DB.php');

$users = DB::getInstance()->query('SELECT * FROM singleton');
var_dump($users);
if ($users->count()) {
    foreach ($users->results() as $user) {
        echo $user->name, '<br>';
    }
}
