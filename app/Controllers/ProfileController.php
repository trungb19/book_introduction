<?php

namespace App\Controllers;

use App\Controllers\Auth\LoginController;
use App\Models\User;
use App\Models\Account;
use App\Models\Bookmark;
use Illuminate\Database\Capsule\Manager as DB;
use Intervention\Image\Image;

Class ProfileController extends Controller {
    // Hiển thị profile người dùng;
    public function showProfile(){
        if (isset($_SESSION['user'])){
            $this->sendPage('layouts/profile');
            render_view('books', [
                'books' => Book::all()
            ]);
        }else {
            redirect('/');
        }
    }

    public function index()
	{
		render_view('books', [
			'books' => Book::all()
		]);
	}
}