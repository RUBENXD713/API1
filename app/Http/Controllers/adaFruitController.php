<?php

namespace App\Http\Controllers;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail; 
use App\User;
use App\Solicitud;
use App\Sensor;


use Illuminate\Http\Request;

class adaFruitController extends Controller
{
    public function Temperatura(Request $request)
    {
        $user=$request->user();
        /*$response= Http::withHeaders([])->get('https://io.adafruit.com/api/v2/NayeliEsquivel/feeds/{feed_key}/data/last',[
             'X-AIO-Key'=>"aio_sVNd18nUqrtP75o4rApczTXMHkVN",
         ]);*/
         /*$solicitud = new Solicitud;
         $solicitud->idAda=$response->id;
         $solicitud->dato=$response->value;
         $solicitud->usuario=$user->id;
         $solicitud->sensor=1;
         $solicitud->save();*/
         $solicitud=new Solicitud;
         $solicitud->idAda=21;
         $solicitud->dato="hola nun";
         $solicitud->usuario=2;
         $solicitud->sensor=1;
         $solicitud->save();

        return response()->json($response->value,$response->id);
    }
}
