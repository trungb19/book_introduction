<!--
    Thành phần HEADER của trang web
    Chứa thanh điều hướng gồm các thông tin như đăng nhập, đăng xuất,...
    Chứa thanh tìm kiếm sách
-->
<div class="row profile">
    <div class="col-2">
        <a style="" href="/">Book Introduction</a>
    </div>
    <div class="col-1">DARDBOARD</div>
    <div class="col-1">BLOG</div>
    <div class="col-6">
        <div class="row">
        <div class="col-8">
        </div>
        <div class="col-4 topbar">
            <?php if(isset($_SESSION['user'])){ ?>
                <p><a style="" href="/profile">name</a></p>
                <p id="logout">Log out</p>
            <?php }else { ?>
                <p data-toggle="modal" data-target="#myModal">Sign in</p>
                <p data-toggle="modal" data-target="#signUpModal">Sign up</p>
            <?php } ?>
            </div>
        </div>
    </div>
    <div class="col-2"></div>
</div>

<script>
    // Nút đăng xuất
    $('#logout').on('click', function(){
        window.location.href = "/user/logout";
    })
</script>