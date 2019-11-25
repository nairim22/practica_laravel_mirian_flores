<?php

use Illuminate\Database\Seeder;
use App\Models\ModoPago;

class ModoPagoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        ModoPago::create([
            "nombre"=>"EFECTIVO",
            "otros_detalles"=>"Pago en efectivo"
        ]);
        ModoPago::create([
            "nombre"=>"CREDITO",
            "otros_detalles"=>"Pago por cuotas"
        ]);
    }
}
