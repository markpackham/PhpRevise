<?php

namespace Project\Helpers;

class Hash
{
    public static function create($password)
    {
//Our encryption algorithem is PASSWORD_BCRYPT
//Higher the cost the longer it takes to hash
        return password_hash($password, PASSWORD_BCRYPT, ['cost' => 10]);
    }

    public static function check($password, $hash)
    {
        return password_verify($password, $hash);
    }
}