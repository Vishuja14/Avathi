<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EouserEoimage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('eouser_eoimage', function (Blueprint $table) {

                                                  $table->bigIncrements('primary_key');
                                                  $table->bigInteger('eouser_primary_key');
                                                   $table->bigInteger('eomediaarray_primary_key');
                                             });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::dropIfExists('eouser_eoimage');
    }
}
