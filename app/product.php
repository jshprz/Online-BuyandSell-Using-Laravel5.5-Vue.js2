<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
  protected $table='product';
  protected $fillable = [
      'user_id','approved','product_image', 'product_description','seller_location','contact','product_price','category',
  ];
}
