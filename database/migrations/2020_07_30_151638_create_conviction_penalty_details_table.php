<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConvictionPenaltyDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conviction_penalty_details', function (Blueprint $table) {
            $table->id();
            $table->integer('driver_info_id')->nullable();
            $table->string('convictionCode');
            $table->string('convictionDate')->nullable();
            $table->string('points')->nullable();
            $table->string('fine')->nullable();
            $table->string('ban')->nullable();
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
        Schema::dropIfExists('conviction_penalty_details');
    }
}
