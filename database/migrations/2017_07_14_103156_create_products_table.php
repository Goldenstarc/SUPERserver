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
            $table->integer('user_id')->unsigned()->index();
            $table->integer('productCatagory_id')->unsigned()->index();
            $table->integer('photo_id')->unsigned()->index();
            $table->integer('brand_id')->unsigned()->index();
            $table->string('name');
            $table->string('manifactor');
            $table->text('short_description');
            $table->text('long_description');
            $table->timestamp('prodate');
            $table->timestamp('expdate');
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
