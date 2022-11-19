<?php

namespace App\Controllers\Auth;
use App\Models\Account;
use App\Models\User;
use App\Controllers\Controller;
use Illuminate\Database\Capsule\Manager as DB;
use App\SessionGuard as Guard; 

class LoginController extends Controller {

    //Hàm xử lý đăng nhập
    public function login() {
        if (isset($_POST['mail']) && isset($_POST['pwd'])) {
            $info = Account::where('UserEmail', $_POST['mail'])->first();
            $info_user = User::where('UserID', $info->UserID)->first();
            $books = Bookmark::where('UserID', $info->UserID)->first();
            $has_pwd = $info->UserPass;
            if ($info) {
                echo "Mật khẩu không đúng";
                if (password_verify($_POST['pwd'], $has_pwd)) {
                    echo "Đúng mật khẩu!";
                    $_SESSION['user'] = $info->UserID;
                    $_SESSION['name'] = $info_user->UserName;
                    $_SESSION['email'] = $_POST['mail'];
                    if($info_user->Permission == 'admin')
                    redirect("/admin");
                    else
                    redirect("/");
                }
            }
        }

    }

    //Hàm xử lý đăng xuất bằng cách kết thúc session
    public function logout() {
		if (isset($_SESSION['user'])){
			session_unset();
			session_destroy();
		}
		redirect('/');
	}
}

