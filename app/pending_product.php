<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pending_product extends Model
{
  protected $table='pending_product';
  protected $fillable = [
      'user_id', 'product_image', 'product_description','seller_location','contact','product_price','category',
  ];
}
