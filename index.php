<?php

spl_autoload_register(function ($file) {
    require_once $file . '.php';
});

use core\Libraries\Session;
use core\Libraries\Redirect;
use core\Libraries\Log;
use core\Libraries\Input;
use core\Libraries\View;
use core\Libraries\Request;
use app\Controllers\TestController;

Log::level('sd')->add('dfsdfs');
echo Input::get('ds');

function asset(string $file) {
    return "assets/$file";
}

View::render('test');

$c = new TestController;
echo $c->action(Request::class);

?>

<html>
    <head></head>
    <body>
        <p>test</p>
        <script src="<?=asset('test.js')?>"></script>
    </body>
</html>