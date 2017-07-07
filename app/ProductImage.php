<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
        protected $fillable=['img_id','product_id','color_id','image'];
        protected $primaryKey = 'img_id';
}
