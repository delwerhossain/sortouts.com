<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarQuotDrivingInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_quot_driving_infos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('car_quote_id');
            $table->string('licenseType');
            $table->string('licensePeriod');
            $table->string('licenceObtainDate')->nullable();
            $table->string('licenceNo')->nullable();
            $table->string('dvla');
            $table->string('driveQualify');
            $table->string('dateQualifyObtain')->nullable();
            $table->string('isBornInUK');
            $table->string('residentPermitDate')->nullable();
            $table->string('otherVehicle');
            $table->string('criminalConvictions')->nullable();
            $table->string('convictionDesc')->nullable();
            $table->string('isMotorAccidented');
            $table->string('driverDetails');
            $table->string('type')->nullable();
            $table->timestamps();

            $table->foreign('car_quote_id')->references('id')->on('car_quotes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('car_quot_driving_infos');
    }
}
