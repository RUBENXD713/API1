<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Sensor extends Model
{
    use Notifiable, HasApiTokens;
    public function Solicitud(){
        return $this->hasMany('App\Solicitud');
    }
}
