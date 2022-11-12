<?php

namespace core\Libraries;

class Session
{
    public function __construct()
    {
        session_start();
    }

    public static function destroy(): void
    {
        session_destroy();
    }

    public static function flash(string $key, $value)
    {
        if (isset($_SESSION[$key])) {
            if ($_SESSION[$key] != '') {
                unset($_SESSION[$key]);
            }

            $_SESSION[$key] = $value;
        }
    }

    public static function forget(string $key)
    {
        if (isset($_SESSION[$key])) {
            unset($_SESSION[$key]);
        }
    }

    public static function get(string $key)
    {
        return $_SESSION[$key] ?? null;
    }

    public static function has(string $key): bool
    {
        return isset($_SESSION[$key]);
    }

    public static function put(string $key, $value)
    {
        $_SESSION[$key] = $value;
    }
}