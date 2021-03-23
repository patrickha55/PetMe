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
            $table->unsignedBigInteger('animal_cat_id');
            $table->unsignedBigInteger('pro_cat_id');
            $table->timestamps();

            $table->foreign('animal_cat_id')->references('id')->on('animal_categories')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('pro_cat_id')->references('id')->on('product_categories')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->primary('pro_cat_id');
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
