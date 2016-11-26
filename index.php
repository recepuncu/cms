<?php

require 'vendor/autoload.php';

$database = new medoo([
    'database_type' => 'mysql',
    'database_name' => 'db440ed60b46e94510b57ea6c7007d131e',
    'server' => '440ed60b-46e9-4510-b57e-a6c7007d131e.mysql.sequelizer.com',
    'username' => 'hfkmaybiymlsdngc',
    'password' => 'hLrn4Pm4ts7dRvUXqXnLkatm8EqdhnSgBwxrdMjJaDiQb8LJQKBrsL4hrenwxhUf',
    'charset' => 'utf8'
        ]);

Flight::route('/', function() {

    /*global $database;
    $datas = $database->select("test", "*");
    print_r($datas);*/
    
    Flight::render('anasayfa', array(), 'body_content');
    
    Flight::render('layout', array('title' => 'MSMMMO | Manisa Serbest Muhasebeci Mali Müşavirler Odası'));
    
});

Flight::start();
