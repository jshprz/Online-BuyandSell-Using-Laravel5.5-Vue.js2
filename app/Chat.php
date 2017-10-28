<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
  protected $table='chat';
  protected $fillable=[
    'sender_id','receiver_id','chat','read'
  ];

  public function user(){
    return $this->belongsTo(User::class);
  }
}
