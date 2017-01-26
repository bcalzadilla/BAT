<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegionPriceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('region_price', function (Blueprint $table) {
            $table->increments('region_price_id');
            $table->integer('region_id')->unsigned();
            $table->integer('brand_id')->unsigned();
            $table->decimal('retailer_price', 5, 0);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('region_id')->references('region_id')->on('region');
            $table->foreign('brand_id')->references('brand_id')->on('brand');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('region_price');
    }
}
