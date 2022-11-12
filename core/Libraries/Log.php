<?php

namespace core\Libraries;

class Log
{
    private static string $level;

    public static function level(string $level)
    {
        self::$level = $level;
        return new static();
    }

    public function add(mixed $data): void
    {
        file_put_contents("logs/test.log", $data);
    }
}