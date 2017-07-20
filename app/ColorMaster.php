<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ColorMaster extends Model
{
	protected $primaryKey = 'color_id';
public $timestamps = false;
    public function productdetails(){
    	return $this->hasMany('App\ProductDetail','color_id');
    }
}
