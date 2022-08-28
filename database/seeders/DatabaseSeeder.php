<?php

namespace Database\Seeders;

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
        $IS = new IzdavacSeeder();
        $PS = new PisacSeeder();
        $KS = new KnjigaSeeder();

        $IS->run();
        $PS->run();
        $KS->run();
    }
}
