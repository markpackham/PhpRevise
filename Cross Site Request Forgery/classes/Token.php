<?php

class Token
{
    public static function generate()
    {
        //Never generate tokens this way, way too old, predictable & unsafe md5(uniqid())
        //Generate a random token
        return $_SESSION['token'] = base64_encode(openssl_random_pseudo_bytes(32));
    }

    public static function check($token)
    {
        //If the token set matches the one the user has then return true
        if (isset($_SESSION['token']) && $token == $_SESSION['token']) {
            unset($_SESSION['token']);
            return true;
        }
        return false;
    }
}
