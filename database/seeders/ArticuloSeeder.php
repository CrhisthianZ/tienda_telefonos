<?php

namespace Database\Seeders;

use App\Models\articulo;
use Illuminate\Database\Seeder;

class ArticuloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        articulo::factory(1000)->create();
    }
}
