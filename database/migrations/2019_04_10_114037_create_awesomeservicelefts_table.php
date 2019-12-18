<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAwesomeserviceleftsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('awesomeservicelefts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('awesomeserviceleft_name');
            $table->longText('awesomeserviceleft_details');
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
        Schema::dropIfExists('awesomeservicelefts');
    }
}
