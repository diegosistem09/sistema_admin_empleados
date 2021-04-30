<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ciudad;
use App\Models\Pais;
use App\Models\Empleado;
use App\Models\Cargo;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();


        // $pais = new Pais();

        // $pais->nombre ='Colombia';                     
        // $pais->save();
/*
        $ciudad = new Ciudad();

        $ciudad->nombre ='Bogota';
        $ciudad->id_pais ='1';             
        $ciudad->save();*/

        /*$empleado = new Empleado();
        $empleado->nombres ='Maria';
        $empleado->apellidos ='Gonzales perez';
        $empleado->identidad ='10789733';
        $empleado->direccion ='Calle 9# 5-02';
        $empleado->telefono ='8629913';
        $empleado->ciudad_nacimiento ='1';        
        $empleado->save();*/

        $cargo = new Cargo();
        $cargo->nombre_cargo ='MAntenimiento';
        $cargo->ubicacion ='planta1';
        $cargo->id_empleado =1;

        $cargo->save();


    
}


}