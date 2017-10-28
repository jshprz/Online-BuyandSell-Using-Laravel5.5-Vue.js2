<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePendingProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pending_product', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('user_id');
          $table->string('product_description');
          $table->string('product_image');
          $table->string('seller_location');
          $table->string('contact');
          $table->integer('product_price');
          $table->integer('category');
          $table->timestamps('created_at');
          $table->DateTime('update_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pending_product');
    }
}
