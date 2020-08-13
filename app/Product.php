<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Product extends Model
{
    public function categories()
	{
	    return $this->belongsTo('App\Category');
	}

	public function subcategories()
	{
	    return $this->belongsTo('App\SubCategory');
	}
}
