<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
//            $table->string('title');
//            $table->string('description')->nullable();
//            $table->string('slug');
            $table->string('color')->nullable();
            $table->string('background')->nullable();
            $table->boolean('in_nav')->default(true);
            $table->string('keywords')->nullable();
            $table->boolean('order')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
