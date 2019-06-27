<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExhibitorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exhibitors', function (Blueprint $table) {
           $table->bigIncrements('id');
            $table->string('contact_name');
            $table->string('organisation');
            $table->string('phone_number');
            $table->string('email');
            $table->string('street');
            $table->string('city');
            $table->string('country');
            $table->string('website');
            $table->string('space');
            $table->string('fascia_board');
            $table->string('product');
            $table->integer('full_stand')->nullable();
            $table->integer('half_stand')->nullable();
            $table->integer('premium_stand')->nullable();
            $table->integer('table_chairs')->nullable();
            $table->integer('arts_crafts')->nullable();
            $table->integer('adverts')->nullable();
            $table->integer('option')->nullable();
            $table->integer('total');
            $table->string('status');
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
        Schema::dropIfExists('exhibitors');
    }
}
