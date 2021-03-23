<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animal_categories', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('pro_cat_id');
            $table->string('name');
            $table->integer('status');
            $table->timestamps();


            $table->foreign('pro_cat_id')->references('id')->on('product_categories')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animal_categories');
    }
}
