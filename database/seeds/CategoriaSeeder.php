<?php

use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria::create([
            "nombre"=>"JUGUETES",
            "descripcion"=>"Juguetes para niños y niñas"
        ]);

        Categoria::create([
            "nombre"=>"MODA INFANTILE",
            "descripcion"=>"Prendas de vestir"
        ]);

        Categoria::create([
            "nombre"=>"ELECTRODOMESTICOS",
            "descripcion"=>"Equipos electricos domesticos y accesorios"
        ]);
    }
}
