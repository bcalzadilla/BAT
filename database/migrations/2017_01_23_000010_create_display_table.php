<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDisplayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('display', function (Blueprint $table) {
            $table->increments('display_id');
            $table->integer('unit_id')->unsigned();
            $table->string('template', 45);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('unit_id')->references('unit_id')->on('unit');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('display');
    }
}
