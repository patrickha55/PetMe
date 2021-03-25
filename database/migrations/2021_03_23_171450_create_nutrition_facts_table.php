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
            $table->string('serving_size');
            $table->string('calories');
            $table->string('protein');
            $table->string('fat_content');
            $table->string('total_carbohydrate');
            $table->string('sugar');
            $table->string('crude_ash');
            $table->string('crude_fiber');
            $table->string('calcium');
            $table->string('vitamin_A');
            $table->string('moisture');
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
        Schema::dropIfExists('nutrition_facts');
    }
}
