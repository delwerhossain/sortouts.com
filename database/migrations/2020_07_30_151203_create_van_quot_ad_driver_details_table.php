<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVanQuotAdDriverDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('van_quot_ad_driver_details', function (Blueprint $table) {
            $table->id();
            $table->integer('van_quote_id')->nullable();
            $table->string('title');
            $table->string('firstName')->nullable();
            $table->string('surname')->nullable();
            $table->string('relationshipWithPolicyHolder');
            $table->string('DOB')->nullable();
            $table->string('maritalStatus');
            $table->string('employmentStatus');
            $table->string('employmentOccupation')->nullable();
            $table->string('employmentBusiness')->nullable();
            $table->string('licenceType');
            $table->string('licencePeriod');
            $table->string('less3YearDate')->nullable();
            $table->string('licenceNo')->nullable();
            $table->string('DVLA');
            $table->string('bornInUK');
            $table->string('dateOfResidency')->nullable();
            $table->string('otherVehicleUsage');
            $table->string('motorAccident');
            $table->string('motorConviction');
            $table->string('type');
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
        Schema::dropIfExists('van_quot_ad_driver_details');
    }
}
