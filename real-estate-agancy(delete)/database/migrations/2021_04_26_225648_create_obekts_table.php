<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
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
            $table->integer('isOpalenya');
            $table->string('opalenyaName')->default('no name');
            $table->boolean('isNewBuild');

            //house
            $table->boolean('isPartHouse');
            $table->boolean('isPartYard');

            //land & house
            $table->unsignedBigInteger('appointment_id')->index();

            $table->unsignedBigInteger('rieltor_id')->index();
            $table->string('slug');
            $table->timestamps();
        });

        Schema::table('obekts', function ($table) {
            $table->foreign('category_id')->references('id')->on('category')->onDelete('cascade');
            $table->foreign('rieltor_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('location_id')->references('id')->on('location')->onDelete('cascade');
            $table->foreign('appointment_id')->references('id')->on('appointment')->onDelete('cascade');
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
