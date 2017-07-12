<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    protected $except = [];
    protected $primaryKey = 'pc_id';

    public function color(){
    	return $this->belongsTo('App\ColorMaster','color_id');
    }
    public function images(){
    	return $this->belongsTo('App\ProductImage','product_id','product_id')->where('color_id', $this->color_id);
    }

    public function size(){
    	return $this->belongsTo('App\SizeMaster','size_id');
    }

    public function product(){
    	return $this->belongsTo('App\ProductMaster','product_id');
    }

    public function category()
    {
        return $this->belongsTo('App\Category','category_id');
    }
    public function brand()
    {
        return $this->belongsTo('App\Brand','brand_id');
    }
}
