<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccidentQuotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accident_quotes', function (Blueprint $table) {
            $table->id();
            $table->string('chkIfOnline');
            $table->string('contactReason')->nullable();
            $table->string('refferName')->nullable();
            $table->string('title');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('vReg');
            $table->string('Dob');
            $table->string('houseNo');
            $table->longText('address');
            $table->string('postCode');
            $table->string('mobile');
            $table->string('currInsure')->nullable();
            $table->string('haveWitness')->nullable();
            $table->string('anyInjuries')->nullable();
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
        Schema::dropIfExists('accident_quotes');
    }
}
