<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarQuotVehicleInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_quot_vehicle_infos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('car_quote_id');
            $table->string('vReg');
            $table->string('carValue');
            $table->string('isModified');
            $table->string('modifyInfo')->nullable();
            $table->string('dateOfPurchase')->nullable();
            $table->string('useOfVehicle');
            $table->string('keptLocation');
            $table->string('keptLocationNight');
            $table->string('isCarInSameAddress');
            $table->longText('carOtherAddress')->nullable();
            $table->string('regKeeper');
            $table->string('legalOwner');
            $table->string('insureDecline');
            $table->string('annulMileage');
            $table->string('coverType');
            $table->string('noClaimDiscount');
            $table->string('howClaimDiscount')->nullable();
            $table->string('wasNCDFrmUK')->nullable();
            $table->string('protectNcd')->nullable();
            $table->string('voluntaryEx');
            $table->string('insurancePayPeriod');
            $table->string('currOrPreCarInsure')->nullable();
            $table->string('policyStartDate');
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
        Schema::dropIfExists('car_quot_vehicle_infos');
    }
}
