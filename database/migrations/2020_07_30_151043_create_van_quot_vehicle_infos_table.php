<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVanQuotVehicleInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('van_quot_vehicle_infos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('van_quote_id');
            $table->string('vReg');
            $table->string('carValue');
            $table->string('manufactur')->nullable();
            $table->string('vModel')->nullable();
            $table->string('regYear')->nullable();
            $table->string('immobiliser')->nullable();
            $table->string('seats')->nullable();
            $table->string('doorNo')->nullable();
            $table->string('engineSize')->nullable();
            $table->string('transmission')->nullable();
            $table->string('fuelType')->nullable();
            $table->string('bodyType');
            $table->string('roofType');
            $table->string('wheel');
            $table->string('isModified');
            $table->string('modifyInfo');
            $table->string('impoundWithPolice')->nullable();
            $table->string('dateOfPurchase');
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
            $table->string('wasNCDFrmUK');
            $table->string('protectNcd');
            $table->string('voluntaryEx');
            $table->string('insurancePayPeriod');
            $table->string('currOrPreCarInsure')->nullable();
            $table->string('policyStartDate');
            $table->timestamps();

            $table->foreign('van_quote_id')->references('id')->on('van_quotes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('van_quot_vehicle_infos');
    }
}
