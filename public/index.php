<?php

//ini_set kiểm tra các tùy chọn trong file php.ini và trả về giá trị, từ  php 8.1.0 cho phép trả về giá trị null
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require __DIR__ . '/../bootstrap.php';

define('APPNAME', 'Book Introduction');

session_start();

$router = new \Bramus\Router\Router();

//Cấu hình đường dẫn đến trang chủ
$router->get('/', '\App\Controllers\HomeController@index');
$router->get('/home', '\App\Controllers\HomeController@index');
$router->run();
