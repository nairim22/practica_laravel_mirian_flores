<?php

use Illuminate\Database\Seeder;
use App\Models\Factura;

class FacturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Factura::create(
            [
                'id_cliente'=>'1',
                'fecha'=>date('Y-m-d H:i:s'),
                'num_pago'=>'1'
            ]
        );

        Factura::create(
            [
                'id_cliente'=>'2',
                'fecha'=>date('Y-m-d H:i:s'),
                'num_pago'=>'2'
            ]
        );
    }
}
