<?php

namespace core\Libraries;

class Request
{
    public function method(): string
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    public function isMethod(string $method): bool
    {
        return $_SERVER['REQUEST_METHOD'] === $method;
    }
}