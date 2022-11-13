<?php

//Định nghĩa không gian tên (name space)
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model {
    protected $table = 'user';
    protected $fillable = ['UserID', 'UserName', 'Permission'];
    protected $primaryKey = 'UserID';

    public function bookmarks(){
        return $this->hasMany(Bookmark::class);
    }
    public function accounts(){
        return $this->hasOne(Account::class);
    }
}