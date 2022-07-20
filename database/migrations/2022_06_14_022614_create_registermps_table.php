<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistermpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registermps', function (Blueprint $table) {
            $table->id();
            $table->string('datesubmitted');
            $table->string('companyfullname');
            $table->string('companyaddress');
            $table->integer('postcode');
            $table->string('city');
            $table->string('state');
            $table->string('name');
            $table->integer('mobileno');
            $table->string('email');
            $table->string('geography');
            $table->string('inwhichsectorsdoesyourcompanymainlyinvolved');
            $table->string('couldyougiveindetailthesubsectorsofthebusiness');
            $table->string('inwhichGovernmentAgenciesdoesthecompanyhasmainlyattachedto');
            $table->string('othersagencies');
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
        Schema::dropIfExists('registermps');
    }
}
