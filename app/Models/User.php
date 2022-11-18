<?php

//Định nghĩa không gian tên (name space)
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model {
    protected $table = 'user';
    protected $fillable = ['UserID', 'UserName', 'Permission'];
    protected $primaryKey = 'UserID';

    public static function getLastUserID(){
		// Get the last UserID.
		$id = User::max('UserID');

		$UserID = 0;
		if ($id != null){
			$UserID = $id;
		}else {
			$UserID = 0;
		}
		return $UserID;
	}

    public function bookmarks(){
        return $this->hasMany(Bookmark::class);
    }
    public function accounts(){
        return $this->hasOne(Account::class);
    }
}