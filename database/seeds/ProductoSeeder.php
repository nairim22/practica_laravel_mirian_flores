<?php

use Illuminate\Database\Seeder;
use App\Models\Producto;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Producto::create([
            "nombre"=>"MUÑECOS TOY STORE",
            "precio"=>"200",
            "stock" =>"50",
            "id_categoria"=>"7"
        ]);


        Producto::create([
            "nombre"=>"HELADERA LG",
            "precio"=>"2000",
            "stock" =>"100",
            "id_categoria"=>"9"
        ]);

        Producto::create([
            "nombre"=>"PIJAMA FROZEN",
            "precio"=>"500",
            "stock" =>"1000",
            "id_categoria"=>"8"
        ]);


    }
}
