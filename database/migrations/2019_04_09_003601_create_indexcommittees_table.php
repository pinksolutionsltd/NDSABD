<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndexcommitteesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indexcommittees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('indexcommittee_name');
            $table->string('indexcommittee_title');
            $table->string('indexcommittee_Details');
            $table->string('indexcommittee_image');
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
        Schema::dropIfExists('indexcommittees');
    }
}
