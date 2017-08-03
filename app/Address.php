<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
	protected $fillable = [
            'user_id', 'pincode', 'address', 'city', 'state'
      ];
}
