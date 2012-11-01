<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsuariosTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario = new User();
        $usuario->name = "Wilmer Parra";
        $usuario->email = "wilmer21@gmail.com";
        $usuario->password = bcrypt("12345123");
        $usuario->rol = "Administrador";

        $usuario->save();

        $usua = new User();
        $usua->name = "Luis Blanco";
        $usua->email = "luis21@gmail.com";
        $usua->password = bcrypt("12345123");
        $usua->rol = "Usuario";

        $usua->save();
    }
}
