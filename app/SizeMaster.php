<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SizeMaster extends Model
{
	protected $primaryKey = 'size_id';
	public $timestamps = false;

    public function productdetails(){
    	return $this->hasMany('App\ProductDetail','size_id');
    }
}
