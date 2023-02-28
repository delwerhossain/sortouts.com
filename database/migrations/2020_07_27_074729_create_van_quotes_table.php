<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVanQuotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('van_quotes', function (Blueprint $table) {
            $table->id();
            $table->string('chkIfOnline');
            $table->string('contactReason');
            $table->string('refferName')->nullable();
            $table->string('insuranceDecline');
            $table->string('declinedInsure')->nullable();
            $table->string('title');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('Dob');
            $table->string('houseNo');
            $table->longText('address');
            $table->string('postCode');
            $table->string('maritStatus');
            $table->string('employeeStatus');
            $table->string('ifSelfEmployedOccu')->nullable();
            $table->string('ifSelfEmployedBusiness')->nullable();
            $table->string('isHomeOwner');
            $table->string('childU16');
            $table->string('email');
            $table->string('mobile');
            $table->string('phone')->nullable();
            $table->string('contactVia');
            $table->string('additionalDriver');
            $table->string('additionalComment')->nullable();
            $table->string('type')->nullable();
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
        Schema::dropIfExists('van_quotes');
    }
}
