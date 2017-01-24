<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrandPresentationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brand_presentation', function (Blueprint $table) {
            $table->increments('brand_presentation_id');
            $table->integer('presentation_id')->unsigned();
            $table->integer('brand_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();

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
        Schema::drop('brand_presentation');
    }
}
