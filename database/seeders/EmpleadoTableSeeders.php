<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Empleados;

class EmpleadoTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $empleado = new Empleados();

        $empleados->nombre = 'Horacio';
        $empleado->apellido = 'Hang';
        $empleado->correo = 'horacioH11@outlook.com';
        $empleado->estado = '0';

        $empleado->save();
    }
}
