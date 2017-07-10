<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $except=[];
    protected $primaryKey= 'category_id';

    public function productdetails()
    {
        return $this->hasMany('App\ProductDetail','category_id');
    }

}
