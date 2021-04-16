<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSoftDeleteToAll extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('addresses', function (Blueprint $table) {
            $table->softDeletes();
        });

        Schema::table('suppliers', function (Blueprint $table) {
            $table->softDeletes();
        });

        Schema::table('animal_categories', function (Blueprint $table) {
            $table->softDeletes();
        });

        Schema::table('product_categories', function (Blueprint $table) {
            $table->softDeletes();
        });

        Schema::table('orders', function (Blueprint $table) {
            $table->softDeletes();
        });

        Schema::table('products', function (Blueprint $table) {
            $table->softDeletes();
        });

        Schema::table('product_details', function (Blueprint $table) {
            $table->softDeletes();
        });

        Schema::table('nutrition_facts', function (Blueprint $table) {
            $table->softDeletes();
        });

        Schema::table('product_reviews', function (Blueprint $table) {
            $table->softDeletes();
        });

        Schema::table('carts', function (Blueprint $table) {
            $table->softDeletes();
        });

        Schema::table('cart_details', function (Blueprint $table) {
            $table->softDeletes();
        });

        Schema::table('transactions', function (Blueprint $table) {
            $table->softDeletes();
        });

        Schema::table('favorites', function (Blueprint $table) {
            $table->softDeletes();
        });

        Schema::table('order_details', function (Blueprint $table) {
            $table->softDeletes();
        });

        Schema::table('favorites', function (Blueprint $table) {
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('addresses', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });

        Schema::table('suppliers', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });

        Schema::table('animal_categories', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });

        Schema::table('product_categories', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });

        Schema::table('orders', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });

        Schema::table('products', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });

        Schema::table('product_details', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });

        Schema::table('nutrition_facts', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });

        Schema::table('product_reviews', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });

        Schema::table('carts', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });

        Schema::table('cart_details', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });

        Schema::table('transactions', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });

        Schema::table('favorites', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });

        Schema::table('order_details', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });

        Schema::table('favorites', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
    }
}
