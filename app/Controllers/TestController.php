<?php

namespace app\Controllers;

use core\Libraries\Request;

class TestController
{
    public function action(Request $request)
    {
        return $request->method();
    }
}