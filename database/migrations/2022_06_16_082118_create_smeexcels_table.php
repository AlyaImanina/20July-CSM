<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class CreateSmeexcelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('smeexcels', function (Blueprint $table) {
            $table->id();
            $table->string('datesubmitted');
            $table->string('companyfullname');
            $table->string('companyaddress');
            $table->integer('postcode');
            $table->string('city');
            $table->string('state');
            $table->string('name');
            $table->string('mobileno');
            $table->string('email');
            $table->string('geography');
            $table->string('inwhichsectorsdoesyourcompanymainlyinvolved');
            $table->string('couldyougiveindetailthesubsectorsofthebusiness');
            $table->string('inwhichGovernmentAgenciesdoesthecompanyhasmainlyattachedto');
            $table->string('othersagencies');
            $table->string('b1');
            $table->string('b2');
            $table->string('b3');
            $table->string('b4');
            $table->string('b5');
            $table->string('b6');
            $table->string('b7');
            $table->string('c8');
            $table->string('c9');
            $table->string('c10');
            $table->string('c11');
            $table->string('c12');
            $table->string('c13');
            $table->string('c14');
            $table->string('c15');
            $table->string('c16');
            $table->string('c17');
            $table->string('c18');
            $table->string('c19');
            $table->string('c20');
            $table->string('c21');
            $table->string('c22');
            $table->string('c23');
            $table->string('d24');
            $table->string('d25');
            $table->string('d26');
            $table->string('d27');
            $table->string('othersagencies26');
            $table->string('d28');
            $table->string('d29');
            $table->string('d30');
            $table->string('d31');
            $table->string('finaltier');
            $table->string('earlymanualsmecategory');
            $table->string('earlystatus');
            $table->string('remarks');
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
        Schema::dropIfExists('smeexcels');
    }
}
