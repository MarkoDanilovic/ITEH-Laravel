<?php

namespace Database\Seeders;

use App\Models\Pisac;
use Illuminate\Database\Seeder;

class PisacSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pisac::factory()->count(60)->create();
    }
}
