<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EoeventEoimage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eoevent_eoimage', function (Blueprint $table) {

                                                                                   $table->bigIncrements('primary_key');
                                                                                   $table->bigInteger('eoevent_primary_key');
                                                                                   $table->bigInteger('eobannerarray_primary_key');
                                });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eoevent_eoimage');
    }
}
