<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BrojStranaKnjiga extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('knjigas', function (Blueprint $table) {
            $table->after('povez', function ($table) {
                $table->integer('broj_strana');
            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('knjigas', function (Blueprint $table) {
            $table->dropColumn('broj_strana');
        });
    }
}
