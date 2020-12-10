<?php

use Illuminate\Database\Seeder;

class sensoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sensores')->insert([
            'name'=> 'temperatura',
            'descripcion'=>'toma datos de temperatura en el ambiente'
        ]);
        DB::table('sensores')->insert([
            'name'=> 'ultrasonico',
            'descripcion'=>'Detecta el revote de los sonidos'
        ]);
        DB::table('sensores')->insert([
            'name'=> 'humedad',
            'descripcion'=>'toma la humedad del ambiente'
        ]);
        DB::table('sensores')->insert([
            'name'=> 'PIR',
            'descripcion'=>'detecta movimientos en un determinado rango'
        ]);
        DB::table('sensores')->insert([
            'name'=> 'fotoresistencia',
            'descripcion'=>'detecta la luz y manda señal'
        ]);
    }
}
