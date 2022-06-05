<?php

use app\engine\{App, Autoload};

$config = include "../config/config.php";
include "../engine/Autoload.php";
require_once '../vendor/autoload.php';

spl_autoload_register([new Autoload(), 'loadClass']);

try {
    App::call()->run($config);
} catch (\PDOException $e) {
    var_dump($e);
} catch (\Exception $e) {
    var_dump($e->getTrace());
}
