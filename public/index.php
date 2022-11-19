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
//cấu hình đường dẫn đến trang admin
$router->get('/admin', '\App\Controllers\AdminController@index');
//Cấu hình route đăng nhập
$router->post('/user/login', '\App\Controllers\Auth\LoginController@login');

//Cấu hình route đăng ký
$router->post('/user/signup', '\App\Controllers\Auth\RegisterController@signUp');

//Cấu hình route đăng xuất
$router->get('/user/logout', '\App\Controllers\Auth\LoginController@logout');

// hiển thị profile
$router->get('/profile', '\App\Controllers\ProfileController@showProfile');

//Cấu hình route Api book from Google
$router->post('Controllers/api', '\App\Controllers\Api@GetData');

//Thêm sách yêu thích
$router->post('/user/favoriteBook', '\App\Controllers\Search@addFavoriteBook');

$router->run();
