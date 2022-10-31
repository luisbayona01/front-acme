<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class TipoUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipoUsuario = [['idtipousuario'=>1, 'tipousuario' => 'conductor'],
            ['idtipousuario'=>2, 'tipousuario' => 'propietario']
        ];

        Db::table('tipousuario')->insert($tipoUsuario);
        //
    }
}
