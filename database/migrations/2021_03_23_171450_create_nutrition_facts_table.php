<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNutritionFactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nutrition_facts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_details_id');
            $table->string('serving_size')->nullable();
            $table->string('calories')->nullable();
            $table->string('protein')->nullable();
            $table->string('fat_content')->nullable();
            $table->string('total_carbohydrate')->nullable();
            $table->string('sugar')->nullable();
            $table->string('crude_ash')->nullable();
            $table->string('crude_fiber')->nullable();
            $table->string('calcium')->nullable();
            $table->string('vitamin_A')->nullable();
            $table->string('moisture')->nullable();
            $table->timestamps();

            $table->foreign('product_details_id')->references('id')->on('product_details')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nutrition_facts');
    }
}
