<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Solicitud extends Model
{
    use Notifiable, HasApiTokens;
    public function user(){
        return $this->belongTo('App\User');
    }
    public function sensor()
    {
        return $this->belongTo('App\Sensor');
    }
}
