<?php

namespace Database\Seeders;

use App\Models\Izdavac;
use Illuminate\Database\Seeder;

class IzdavacSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Izdavac::factory()->count(25)->create();
    }
}
