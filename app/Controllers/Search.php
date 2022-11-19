<?php

namespace App\Controllers;
use App\Models\Bookmark;

Class Search extends Controller {
    function addFavoriteBook() {
        // echo "Chạy tới add favorite nè";
        // $bookmark = new Bookmark;
        // $BookmarkID = $bookmark->getLastBmID() + 1;
        if (!isset($_SESSION['user'])) {
            echo "Chưa đăng nhập";
        } else {
            Bookmark::create([
                'BookmarkID' => $_POST['bookID'],
                'UserID' => $_SESSION['user'] ,
                'BookFavorite' => $_POST['booktitle']
            ]);
            echo "Thêm vào danh sách yêu thích thành công!";
        }
    }
}