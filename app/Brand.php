<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $except=[];
    protected $primaryKey='brand_id';

    public function productdetails()
    {
        return $this->hasMany('App\ProductDetail','brand_id');
    }
}
