<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestimonialthreesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testimonialthrees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('testimonialthree_comments');
            $table->string('testimonialthree_name');
            $table->string('testimonialthree_details');
            $table->string('testimonialthree_image');
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
        Schema::dropIfExists('testimonialthrees');
    }
}
