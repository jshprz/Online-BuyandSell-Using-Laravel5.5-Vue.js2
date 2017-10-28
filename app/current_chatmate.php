<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class current_chatmate extends Model
{
  protected $table='current_chatmate';
  protected $fillable=['sender_id','receiver_id'];
}
