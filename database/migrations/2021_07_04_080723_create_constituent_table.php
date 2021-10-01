<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConstituentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('constituent', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('fk_personid');
            $table->string('qrcode', 50)->nullable();
            $table->string('lat', 20)->nullable()->comment('latitude');
            $table->string('lng', 20)->nullable()->comment('longitude');
            $table->string('purok', 5)->nullable();
            $table->string('brgyid', 20)->nullable();
            $table->string('city', 20)->nullable();
            $table->string('province', 20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('constituent');
    }
}
