<!--Đăng nhập thành công chuyển hướng đến đây--->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap css & js -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./CSS/home.css">
    <link rel="stylesheet" href="./css/content.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="/css/animate.css" rel="stylesheet">
    <link href="/css/profile.css" rel="stylesheet">

    <script src="/js/jquery-2.0.2.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="//www.google.com/jsapi"></script>
</head>

<body>
    <h1>Đây là trang Profile</h1>
    <?php 
    require '../vendor/autoload.php';
    ?>
    <!--Header: Bắt đầu-->
    <?php include('home_header.php') ?>
    <!--Header: Kết thúc-->

    <!--Body: Bắt đầu-->
    <div class="row">
        <div class="col-1">

        </div>
        <div class="col-3">
            <a href="">
                <h3>General</h3>
            </a>
            <a href="">
                <h3>Edit Password</h3>
            </a>
        </div>
        <div class="col-7">
            <!--Phần hiển thị thông tin cá nhân-->
            <div class="row">
                <div class="col-5">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT1oyt9166XWnxUIF4AgPIJSA2AfNh1ebiRig&usqp=CAU"
                        alt="">
                </div>
                <div class="col-7">
                    <div class="row">
                        <div class="col-3">Name: </div>
                        <div class="col-5"><?php echo($_SESSION['name'])?></div>
                    </div>
                    <div class="row">
                        <div class="col-3">Email: </div>
                        <div class="col-5"><?php echo($_SESSION['email'])?></div>
                    </div>
                </div>
            </div>

            <!--Phần hiển thị sách yêu thích-->
            <div class="example">
                <div class="container">
                    <div class="row">
                        <h2>Table Striped</h2>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>ID</th>
                                    <th>Tên sách</th>
                                    <th>Xóa</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Văn Cường</td>
                                    <td>Nam</td>
                                    <td>thehalftheart@mail.com</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Hoài Minh</td>
                                    <td>Nam</td>
                                    <td>hoaiminhit1990@mail.com</td>

                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Quốc Minh</td>
                                    <td>Nam</td>
                                    <td>quocminh@mail.com</td>

                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Huy Phong</td>
                                    <td>Nam</td>
                                    <td>phongalibaba@mail.com</td>

                                </tr>
                                <?php
                                    foreach ($books as $book) {
                                        echo "<tr>";
                                        echo "<td> " . $person["firstname"] . " </td>";
                                        echo "<td> " . $person["lastname"] . " </td>";
                                        echo "<td> " . $person["address"] . " </td>";
                                        echo "<td> " . $person["age"] . " </td>";
                                        echo "<td><a href=edit_person.php?id=" . $person['id'] . ">Hiệu chỉnh</a></td>";
                                        echo "</tr>";
                                    }
                                    ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-1">

        </div>
    </div>
    <!--Body: Kết thúc-->
</body>

</html>