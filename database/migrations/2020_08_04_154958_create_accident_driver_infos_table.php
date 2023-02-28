<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccidentDriverInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accident_driver_infos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('acc_id');
            $table->foreign('acc_id')->references('id')->on('accident_quotes');
            $table->string('otherDriverFullName');
            $table->string('otherDriverVehReg');
            $table->string('otherDriverAddress')->nullable();
            $table->string('otherDriverContact')->nullable();
            $table->string('wasForcedByPolicy');
            $table->string('incidentDate')->nullable();
            $table->string('incidentTime')->nullable();
            $table->string('location')->nullable();
            $table->string('weather')->nullable();
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
        Schema::dropIfExists('accident_driver_infos');
    }
}
