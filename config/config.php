<?php

use app\engine\Db;
use app\engine\Request;
use app\repository\CollectionRepository;
use app\repository\ProductRepository;
use app\services\HomeService;

return [
    'root' => dirname(__DIR__),
    'controllers_namespaces' => 'app\\controllers\\',
    'components' => [
        'db' => [
            'class' => Db::class,
            'driver' => 'mysql',
            'host' => 'localhost',
            'login' => 'root',
            'password' => '',
            'database' => 'testproduct',
            'charset' => 'utf8'
        ],
        'request' => [
            'class' => Request::class
        ],
        'collectionRepository' => [
            'class' => CollectionRepository::class
        ],
        'productRepository' => [
            'class' => ProductRepository::class
        ],
        'homeService' => [
            'class' => HomeService::class
        ],
    ]

];