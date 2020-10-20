<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id('code')->autoIncrement();
            $table->integer('ProductLineID');
            $table->string('Name');
            $table->integer('Scale');
            $table->string('Vendor');
            $table->string('pdt_description');
            $table->integer('QtyInStock');
            $table->double('BuyPrice', 19,0);
            $table->string('MSRP');
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
        Schema::dropIfExists('products');
    }
}
