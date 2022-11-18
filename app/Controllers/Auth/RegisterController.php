<?php

namespace App\Controllers\Auth;

use App\Models\User;
use App\Models\Account;
use App\Controllers\Controller;
use App\SessionGuard as Guard;
use Illuminate\Database\Capsule\Manager as DB;


class RegisterController extends Controller
{	
	// tạo người dùng với thông tin lưu trong mảng $data;
	public function createUser(array $data){
		$error = Account::where('UserEmail', $data['UserEmail'])->first();
		// nếu email đã tồn tại -> báo lỗi.
		// ngược lại, thêm người dùng mới vào hệ thống.
		if (!$error){
			User::create([
				'UserID' => $data['UserID'],
				'UserName' => $data['UserName'],
				 'Permission' => $data['Permission']
			]);
	
			Account::create([
				'AccountId' => $data['AccountID'],	
				'UserID' => $data['UserID'],
				'UserEmail' => $data['UserEmail'],
				'UserPass' => $data['UserPass']
			
			]);
		}else {
			echo "<script>alert('Existed email!');</script>";
			$this->sendPage('homepage/home');
		}
	}

	// hàm đăng ký thành viên.
	public function signUp(){
		// tính userid và accountid;
		$user = new User;
		$account = new Account;
		$UserID = $user->getLastUserID()+1;
		$AccountId = $account->getLastAccountID() + 1;
		$Per = 'user';
		// lưu thông tin người dùng nhập ở form -> lưu vào mảng data;
		$data = array();
		$data['UserID'] = $UserID;
		$data['UserName'] = $_POST['name'];
		$data['UserPass'] = password_hash($_POST['pwd'], PASSWORD_DEFAULT); //sử dụng hàm băm để bảo mật mật khẩu.
		$data['UserEmail'] = $_POST['mail'];
		$data['AccountID'] = $AccountId;
		$data['Permission'] = $Per;

			$this->createUser($data);
			if ($user->getLastUserID() == $UserID){ //kiểm tra lưu thành công chưa.
				// $_SESSION['user'] = $UserID;
				echo('Dang Ky Thanh Cong');
				redirect('/');	
			}
	}
}
