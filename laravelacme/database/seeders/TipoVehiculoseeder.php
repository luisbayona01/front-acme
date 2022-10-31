<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class TipoVehiculoseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          $tipoVehiculo = [['idtipovehiculo'=>1, 'tipovehiculo' => 'particular'],
            ['idtipovehiculo'=>2 ,'tipovehiculo' => 'publico']
        ];

        DB::table('tipovehiculo')->insert($tipoVehiculo);
    }
}
