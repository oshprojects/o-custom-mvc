<?php

namespace core\Libraries;

class File
{
    public static function exists(string $file): bool
    {
        return file_exists($file);
    }

    public static function doesNotExists(string $file): bool
    {
        return !file_exists($file);
    }

    public static function isFile(string $file): bool
    {
        return is_file($file);
    }

    public static function make(string $file): void
    {
        touch($file);
    }

    public static function makeDirectory(string $folder, ?int $permissions = 0777): void
    {
        mkdir($folder, $permissions);
    }
}