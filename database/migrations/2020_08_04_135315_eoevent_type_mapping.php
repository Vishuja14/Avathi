<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EoeventTypeMapping extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('eoevent_type_mapping', function (Blueprint $table) {

                                              $table->bigIncrements('primary_key');
                                              $table->bigInteger('eoeventtype_primary_key');
                                              $table->bigInteger('eouser_primary_key');
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
        Schema::dropIfExists('eoevent_type_mapping');
    }
}
