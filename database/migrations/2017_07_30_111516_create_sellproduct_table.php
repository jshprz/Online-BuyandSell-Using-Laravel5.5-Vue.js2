<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSellproductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sellproduct', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('product_image');
            $table->string('product_description');
            $table->string('seller_location');
            $table->string('contact');
            $table->integer('product_price');
            $table->string('category');
            $table->timestamp('created_at');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sellproduct');
    }
}
