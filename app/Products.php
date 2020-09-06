<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product_image;


class Products extends Model
{
    public function images(){
      return $this->hasMany('App\ProductImage','product_id');
    }
}
