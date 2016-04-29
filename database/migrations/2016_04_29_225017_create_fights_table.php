<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fights', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('eventID');
            $table->integer('promotionID');
            $table->integer('fighterOneID');
            $table->integer('fighterTwoID');
            $table->integer('fighterTwoID');
            $table->integer('rating');            
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
        Schema::drop('fights');
    }
}
