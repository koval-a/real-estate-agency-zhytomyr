<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_article', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('picture');
            $table->string('title');
            $table->text('text');
            $table->unsignedBigInteger('category_id')->index();
            $table->unsignedBigInteger('author_id')->index();
            $table->timestamps();
        });

        Schema::table('blog_article', function ($table) {
            $table->foreign('category_id')->references('id')->on('blog_category')->onDelete('cascade');
            $table->foreign('author_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog_article');
    }
}
