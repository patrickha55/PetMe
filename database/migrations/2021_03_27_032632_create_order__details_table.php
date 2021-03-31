<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order__details', function (Blueprint $table) {
            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('product_id');

            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');

            $table->double('price');
            $table->integer('quantity');

            $table->timestamps();

            $table->primary([
                'order_id',
                'product_id'
            ]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order__details');
    }
}
