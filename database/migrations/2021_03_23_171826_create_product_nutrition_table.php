<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductNutritionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_nutrition', function (Blueprint $table) {
            $table->unsignedBigInteger('product_details_id');
            $table->unsignedBigInteger('nutrition_facts_id');
            $table->timestamps();

            $table->foreign('product_details_id')->references('id')->on('product_details')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('nutrition_facts_id')->references('id')->on('nutrition_facts')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->primary('product_details_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_nutrition');
    }
}
