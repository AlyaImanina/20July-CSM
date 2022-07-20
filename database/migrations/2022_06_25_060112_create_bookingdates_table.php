<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingdatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookingdates', function (Blueprint $table) {
            $table->id();
            $table->string('companyfullnamesme');
            $table->string('companyfullnamemp');
            $table->date('startdate');
            $table->date('enddate');
            $table->string('service');
            // $table->date('actualstartdate');
            // $table->date('actualenddate');
            // $table->string('status');
            // $table->string('remark');
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
        Schema::dropIfExists('bookingdates');
    }
}
