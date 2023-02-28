<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMotorQuotDrivingInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motor_quot_driving_infos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('motor_quote_id');
            $table->string('licenseType');
            $table->string('licensePeriod');
            $table->string('licenceObtainDate')->nullable();
            $table->string('licenceNo')->nullable();
            $table->string('isMotorAccidented');
            $table->string('driverDetails');
            $table->string('type')->nullable();
            $table->timestamps();

            $table->foreign('motor_quote_id')->references('id')->on('motor_quotes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('motor_quot_driving_infos');
    }
}
