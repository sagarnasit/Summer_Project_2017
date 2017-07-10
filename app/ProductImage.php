<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
        protected $fillable=['img_id','product_id','color_id','image'];
        protected $primaryKey = 'img_id';

    public function productdetails(){

        return $this->hasMany('App\ProductDetail','product_id');
    }
}
