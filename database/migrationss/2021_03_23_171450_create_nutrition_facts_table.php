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
<<<<<<< HEAD:database/migrationss/2021_03_23_171450_create_nutrition_facts_table.php
            $table->bigIncrements('id');
=======
            $table->id();
            $table->unsignedBigInteger('product_details_id');
>>>>>>> main:database/migrations/2021_03_23_171450_create_nutrition_facts_table.php
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
