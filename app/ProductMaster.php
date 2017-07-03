<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductMaster extends Model
{
  	protected $fillable = ['product_name','description'];
  	protected $primaryKey = 'product_id';

  	public function productdetails(){
    	return $this->hasMany('App\ProductDetail','product_id');
    }
}
