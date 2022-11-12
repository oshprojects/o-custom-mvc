<?php

namespace app\Models;

use core\Foundation\Model;

class TestModel extends Model
{
    public static function table(): string
    {
        return 'test_table';
    }
}