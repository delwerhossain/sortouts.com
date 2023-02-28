<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccidentsClaimDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accidents_claim_details', function (Blueprint $table) {
            $table->id();
            $table->integer('driver_info_id')->nullable();
            $table->string('accidenType');
            $table->string('accidentDate')->nullable();
            $table->string('damageInfo');
            $table->string('claimCost')->nullable();
            $table->string('accidentFault');
            $table->string('isInjured')->nullable();
            $table->string('type');
            $table->boolean('adDriver');
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
        Schema::dropIfExists('accidents_claim_details');
    }
}
