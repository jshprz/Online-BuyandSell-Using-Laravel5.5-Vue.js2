<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email',180)->unique();
            $table->string('password');
            $table->boolean('confirmed');
            $table->string('sex');
            $table->integer('age');
            $table->string('birthmonth');
            $table->integer('birthday');
            $table->integer('birthyear');
            $table->string('city');
            $table->string('image');
            $table->integer('report_trial');
            $table->integer('recieve_report');
            $table->integer('total_sell_product');
            $table->integer('total_bought_product');
            $table->integer('trusting_count');
            $table->integer('untrusting_count');
            $table->boolean('seller');
            $table->rememberToken();
            $table->timestamps('created_at');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
