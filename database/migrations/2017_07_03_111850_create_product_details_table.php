<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_details', function (Blueprint $table) {
            $table->increments('pc_id');
            $table->integer('product_id');
            $table->integer('color_id');
            $table->integer('size_id');           
            $table->integer('mrp');
            $table->integer('price');
            $table->integer('quantity');
            $table->integer('minquantity');
            $table->integer('status');
            $table->timestamps();
            $table->unique( array('product_id','color_id','size_id') );
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_details');
    }
}
