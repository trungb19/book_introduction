<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Account extends Model {
    protected $table = 'account';
	protected $fillable = ['AccountId','UserID','UserEmail','UserPass'];
    protected $guarded = [];
	
    public static function getLastAccountID (){
		// Get the last AccountID
		$id = Account::max('AccountId');
		$AccountId = 0;
		if ($id != null){
			$AccountId = $id;
		}else {
			$AccountId = 0;
		}
		return $AccountId;
	}

    public function user(){
        return $this->belongsTo(User::class, 'UserName');
    }

}