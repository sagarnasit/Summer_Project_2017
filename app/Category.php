<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $except=[];
    protected $primaryKey= 'category_id';

    public function products()
    {
        return $this->hasMany('App\ProductDetails','category_id');
    }

}
