<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This home_layout</title>
</head>
<body>
    <?php 
    require '../vendor/autoload.php';
    ?>
    <!--Header: Bắt đầu-->
    <?php include('home_header.php') ?>
    <!--Header: Kết thúc-->

    <!--Body: Bắt đầu-->
    <?=$this->section('page') ?>
    <!--Body: Kết thúc-->

    <!--Footer: Bắt đầu-->
    <?php include('home_footer.php') ?>
    <!--Footer: Kết thúc-->
</body>
</html>