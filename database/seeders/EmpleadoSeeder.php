<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Empleado;

class EmpleadoSeeder extends Seeder
{

	protected $model = Empleado::class;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     	Empleado::factory(20)->create();
    }
}
