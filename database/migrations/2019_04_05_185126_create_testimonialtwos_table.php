<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestimonialtwosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testimonialtwos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('testimonialtwo_comments');
            $table->string('testimonialtwo_name');
            $table->string('testimonialtwo_details');
            $table->string('testimonialtwo_image');
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
        Schema::dropIfExists('testimonialtwos');
    }
}
