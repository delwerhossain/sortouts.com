<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMotorQuotVehicleInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motor_quot_vehicle_infos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('motor_quote_id');
            $table->string('tradeType')->nullable();
            $table->string('isTradeFrmHome')->nullable();
            $table->string('ifNotFrmHome')->nullable();
            $table->string('companyType')->nullable();
            $table->string('tradeName')->nullable();
            $table->string('haveRecoveryTruck')->nullable();
            $table->string('truckModel')->nullable();
            $table->string('isPolicyExist')->nullable();
            $table->string('prevPolicyInsureName')->nullable();
            $table->string('approxCarSell')->nullable();
            $table->string('vReg1')->nullable();
            $table->string('vReg2')->nullable();
            $table->string('vReg3')->nullable();
            $table->string('vReg4')->nullable();
            $table->string('carAtaTimeKeep')->nullable();
            $table->string('garageDetails')->nullable();
            $table->string('garageCapacity')->nullable();
            $table->string('individualCarMaxQty')->nullable();
            $table->string('isCoverReq')->nullable();
            $table->string('doSellVehOver3Ton')->nullable();
            $table->string('prefferedCover')->nullable();
            $table->string('isClaimBonusMotor')->nullable();
            $table->string('isClaimBonusCar')->nullable();
            $table->string('insurancePayPeriod');
            $table->string('policyStartDate');
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
        Schema::dropIfExists('motor_quot_vehicle_infos');
    }
}
