<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $table='users';
    protected $fillable = [
        'firstname', 'lastname', 'email','password','contact','confirmed','active','admin','token','image','report_trial','recieve_report','total_sell_product','total_bought_product','trusting_count','untrusting_count','seller','remember_token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

      public function messages()
      {
        return $this->hasOne(Chat::class);
      }
public function is_confirmed()
{
if($this->confirmed){
  return true;
}
else{
return false;
}

     }
     public function is_exists()
     {
     if($this->email){
       return true;
     }
     else{
     return false;
     }

          }
    public function is_admin()
    {
      if($this->admin){
        return true;
      }
      else {
        return false;
      }
    }
}
