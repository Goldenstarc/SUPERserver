<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpecificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specifications', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_specification_id')->unsigned()->index();
            $table->string('value');
            $table->integer('product_id')->unsigned()->index();;
            $table->timestamps();



            //Todo add this
           // $table->foreign('product_specification_id')->references('id')->on('users')->onDelete('cascade');
        });



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('specifications');
    }
}
