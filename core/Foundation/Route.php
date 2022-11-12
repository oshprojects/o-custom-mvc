<?php

namespace core\Foundation;

class Route
{
    public function get(string $uri, string $controller, string $method, ?array $params = [])
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
            throw new \Exception('Method does not match');
        }

        return call_user_func_array($controller . '::' . $method, $params);
    }
}