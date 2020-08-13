<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class SubCategory extends Model
{
    public function categories()
	{
	    return $this->belongsTo('App\Category');
	}

	public function products()
	{
	    return $this->hasMany('App\Product');
	}

	

    
}
