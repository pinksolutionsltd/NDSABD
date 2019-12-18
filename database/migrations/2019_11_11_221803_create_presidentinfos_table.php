<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePresidentinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presidentinfos', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('presidentinfo_name');
          $table->string('presidentinfo_title');
          $table->string('presidentinfo_Details');
          $table->longText('presidentinfo_Speech');
          $table->string('presidentinfo_image');
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
        Schema::dropIfExists('presidentinfos');
    }
}
