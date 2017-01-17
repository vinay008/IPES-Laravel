<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubmitProposal extends Model
{
	 public $table = "proposals";
     protected $guarded = [
        'is_admin', 'id','created_at','updated_at','_token'   
         ];

   public function user()
    {
    	return $this->belongsTo('App\User');
    }

}
