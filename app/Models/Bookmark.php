<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bookmark extends Model {
    protected $table = 'bookmark';
    protected $guarded = [];

    public static function getLastBmID() {
        $id = Bookmark::max('BookmarkID');

        if ($id != null){
            return $id;
        }else {
            return 0;
        }
    }

    public function user() {
        return $this->belongTo(User::class);
    }
}