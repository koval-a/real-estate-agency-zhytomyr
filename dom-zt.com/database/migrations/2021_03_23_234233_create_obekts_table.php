<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObektsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obekts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->decimal('price', 12, 2);
            $table->unsignedBigInteger('category_id')->index();
            $table->decimal('square', 12, 2);
            $table->unsignedBigInteger('location_id')->index();
            $table->string('main_img');
            $table->boolean('isPublic');
            // $table->boolean('isPublic')->default(0);

            //flat
            $table->integer('count_room');
            $table->integer('count_level');
            $table->integer('level');
            $table->integer('opalenya');
            $table->boolean('isNewBuild');

            //house
            $table->boolean('isPartHouse');
            $table->boolean('isPartYard');

            //land
            $table->unsignedBigInteger('appointment_land_id')->index();

            //house-comercial
            $table->unsignedBigInteger('appointment_house_id')->index();
            $table->string('type_house');

            $table->unsignedBigInteger('rieltor_id')->index();
            $table->string('slug');
            $table->timestamps();
        });

        Schema::table('obekts', function ($table) {
            $table->foreign('category_id')->references('id')->on('category')->onDelete('cascade');
            $table->foreign('rieltor_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('location_id')->references('id')->on('location')->onDelete('cascade');
            $table->foreign('appointment_land_id')->references('id')->on('appointment_land')->onDelete('cascade');
            $table->foreign('appointment_house_id')->references('id')->on('appointment_house')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('obekts');
    }
}
