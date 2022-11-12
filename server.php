<?php
/*
* Cấu hình server, khi có yêu cầu trang web chuyển hướng đến trang index.php
*/

/*
* Mô tả các tham số:
* urldecode dùng để giải mã chuỗi url đã được encode
* Biến $_SERVER là một mảng chứa các thông tin do WEBSERVER sinh ra như header, path, location script
*/
$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));


//Kiểm tra đường dẫn
if ($uri !== '/' && file_exists(__DIR__.'/public'.$uri)) {
    return false;
}

//Yêu cầu dẫn đến trang index.php nằm trong thư mục public
require_once __DIR__.'/public/index.php';