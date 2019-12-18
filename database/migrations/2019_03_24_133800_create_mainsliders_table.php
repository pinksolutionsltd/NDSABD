<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMainslidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mainsliders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('slider_heading');
            $table->string('slider_sub_heading');
            $table->longText('slider_details');
            $table->string('slider_image');
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
        Schema::dropIfExists('mainsliders');
    }
}
