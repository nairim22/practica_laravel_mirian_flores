<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
		$this->call(ClienteTableSeeder::class);
        $this->call(CategoriaSeeder::class);
        $this->call(ModoPagoSeeder::class);
        $this->call(ProductoSeeder::class);
        $this->call(FacturaSeeder::class);
        $this->call(DetalleSeeder::class);

    }
}
