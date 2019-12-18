<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestimonialonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testimonialones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('testimonialone_comments');
            $table->string('testimonialone_name');
            $table->string('testimonialone_details');
            $table->string('testimonialone_image');
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
        Schema::dropIfExists('testimonialones');
    }
}
