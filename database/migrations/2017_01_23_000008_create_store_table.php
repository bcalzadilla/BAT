<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('store', function (Blueprint $table) {
            $table->increments('store_id');
            $table->string('store_name', 45);
            $table->integer('region_id')->unsigned();
            $table->integer('retailer_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('region_id')->references('region_id')->on('region');
            $table->foreign('retailer_id')->references('retailer_id')->on('retailer');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('store');
    }
}
