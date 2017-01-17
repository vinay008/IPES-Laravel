<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Uploadpaper extends Model
{
    
	public $table = "uploadpapers";
     protected $guarded = [
        'is_admin', 'id','created_at','updated_at','_token'   
         ];	

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
