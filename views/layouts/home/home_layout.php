<!--
    Thành phần LAYOUT của trang web
    Dùng để kết hợp các bộ phận lại và hiển thị ra giao diện người dùng
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This home_layout</title>

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

    <script src="/js/jquery-2.0.2.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="//www.google.com/jsapi"></script>


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


    <!--Form đăng nhập: Bắt đầu-->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal header -->
                <div class="modal-header text-center d-block">
                    <button type="button" name="button" class="close" data-dismiss="modal"
                        style="position: absolute; right: 10px;">&times;</button>
                    <!-- <h2 class="modal-title"> <i class="fa fa-lock"></i> Log in </h2> -->
                    <h3 style="font-family: monospace;">Book Introduction</h3>
                    <h5>Log in</h5>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form class="" method="POST" action="/user/login">
                        <div class="form-group">
                            <p>

                            </p>
                        </div>
                        <div class="form-group">
                            <label for="">Email:</label>
                            <input id="email" type="text" name="mail" value="" class="form-control"
                                placeholder="Enter email:...">
                        </div>

                        <div class="form-group">
                            <label for="">Password:</label>
                            <input id="pass" type="password" name="pwd" value="" class="form-control"
                                placeholder="Enter password:...">
                        </div>
                        <div class="form-group">
                            <button type="submit" id="login" name="button" class="btn btn-primary btn-block">Log
                                in</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger mr-auto" data-dismiss="modal">
                        <i class="fa fa-times"> Cancel</i>
                    </button>
                    <div class="text-right">
                        <div>Don't have an account? <a href="#">Register</a></div>
                        <div>Forgot <a href="#">password</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!--Form đăng nhập: Kết thúc-->

    <!--Form đăng ký: Bắt đầu-->
    <div class="modal fade" id="signUpModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal header -->
                <div class="modal-header text-center d-block">
                    <button type="button" name="button" class="close" data-dismiss="modal"
                        style="position: absolute; right: 10px;">&times;</button>
                    <!-- <h2 class="modal-title"> <i class="fa fa-lock"></i> Log in </h2> -->
                    <h3 style="font-family: monospace;">Book Introduction</h3>
                    <h5>Sign up</h5>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form class="" method="POST" action="/user/signup">
                        <div class="form-group">
                            <p>

                            </p>
                        </div>
                        <div class="form-group">
                            <label for="">Name:</label>
                            <input id="name" type="text" name="name" value="" class="form-control"
                                placeholder="Enter name:...">
                        </div>
                        <div class="form-group">
                            <label for="">Email:</label>
                            <input id="email" type="text" name="mail" value="" class="form-control"
                                placeholder="Enter email:...">
                        </div>

                        <div class="form-group">
                            <label for="">Password:</label>
                            <input id="pass" type="password" name="pwd" value="" class="form-control"
                                placeholder="Enter password:...">
                        </div>
                        <div class="form-group">
                            <button type="submit" id="login" name="button" class="btn btn-primary btn-block">Sign up
                            </button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger btn-block" data-dismiss="modal">
                        <i class="fa fa-times"> Cancel</i>
                    </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!--Form đăng ký: Kết thúc-->
</body>
</html>