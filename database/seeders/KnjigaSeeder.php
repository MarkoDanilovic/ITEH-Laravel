<?php

namespace Database\Seeders;

use App\Models\Knjiga;
use Illuminate\Database\Seeder;

class KnjigaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Knjiga::factory()->count(100)->create();
    }
}
