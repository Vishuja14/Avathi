<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EoitineraryDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('eoitinerary_detail', function (Blueprint $table) {

                                                                                  $table->bigIncrements('primary_key');
                                                                                  $table->string('description');
                                                                                  $table->string('time');
                                                                                  $table->bigInteger('eoevent_primary_key');
                                                                                  $table->bigInteger('eoimage_primary_key');
                                                                                   $table->boolean('is_active')->default('true');
                                                                              });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eoitinerary_detail');
    }
}
