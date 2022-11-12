<?php

namespace core\Libraries;

class View
{
    public static function render(string $view)
    {
        require_once "views/$view.html";
    }

    public static function exists(string $view): bool
    {
        return file_exists("views/$view.html");
    }
}