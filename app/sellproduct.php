<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sellproduct extends Model
{
  protected $table='sellproduct';
  protected $fillable = [
      'user_id', 'product_image', 'product_description','seller_location','contact','product_price','category',
  ];
}
