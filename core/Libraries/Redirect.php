<?php

namespace core\Libraries;

class Redirect
{
    public static function to(string $uri): void
    {
        header("Location: $uri");
        die();
    }

    public static function back(): void
    {
        $previous = $_SERVER['HTTP_REFERER'] ?? $_SERVER['REQUEST_URI'];
        header("Location: $previous");
        die();
    }
}