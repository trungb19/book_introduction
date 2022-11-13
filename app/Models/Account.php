<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Account extends Model {
    protected $table = 'account';
    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class);
    }
}