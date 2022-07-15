<?php

namespace Database\Seeders;

use App\Models\local;
use Illuminate\Database\Seeder;

class LocalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        local::factory(1000)->create();
        //
    }
}
