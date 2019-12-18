<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndexnexteventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indexnextevents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('indexnextevent_teamone');
            $table->string('indexnextevent_teamtwo');
            $table->string('indexnextevent_time');
            $table->string('indexnextevent_place');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('indexnextevents');
    }
}
