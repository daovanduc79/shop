<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnPriceAndStatusOnTableProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->bigInteger('price')->nullable()->after('image');
            $table->string('sale')->nullable()->after('price');
            $table->unsignedBigInteger('category_id')->nullable()->after('status');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->unsignedBigInteger('customer_id')->after('category_id')->nullable();
            $table->foreign('customer_id')->references('id')->on('customers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            //
        });
    }
}
