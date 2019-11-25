<?php

use Illuminate\Database\Seeder;
use App\Models\Detalle;
class DetalleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Detalle::create(
            [
                'id_factura' => 1,
                'id_producto' => 1,
                'cantidad' => 1,
                'precio' => 200
            ]
        );
    }
}
