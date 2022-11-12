<?php

namespace core\Libraries;

class Input
{
    public static function get(string $key)
    {
        return $_GET[$key] ?? null;
    }

    public static function post(string $key)
    {
        return $_POST[$key] ?? null;
    }
}