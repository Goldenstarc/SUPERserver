<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('code');
            $table->integer('user_id')->unsigned()->index();
            $table->integer('Category_id')->unsigned()->index();
            $table->integer('photo_id')->unsigned()->index();
            $table->integer('brand_id')->unsigned()->index();
            $table->string('name');
            $table->float('price');
            $table->float('min_price');
            $table->float('off');
            $table->text('short_description');
            $table->text('long_description');
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
        Schema::drop('products');
    }
}
