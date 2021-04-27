<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('location', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('region_id')->index();
            $table->unsignedBigInteger('rayon_id')->index();
            $table->unsignedBigInteger('city_id')->index();
            $table->unsignedBigInteger('city_rayon_id')->index();
            $table->timestamps();
        });

        Schema::table('location', function ($table) {
            $table->foreign('city_rayon_id')->references('id')->on('location_city_rayon')->onDelete('cascade');
            $table->foreign('region_id')->references('id')->on('location_region')->onDelete('cascade');
            $table->foreign('city_id')->references('id')->on('location_city')->onDelete('cascade');
            $table->foreign('rayon_id')->references('id')->on('location_rayon')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('location');
    }
}
