<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\SubCategory;
use App\Product;

class Category extends Model
{
    protected $fillable=['name'];
    public function products()
    {
        return $this->hasMany('App\Product', 'category_id');

    } 
    public function subcategories()
    {
        return $this->hasMany('App\SubCategory', 'category_id');
    } 
}
