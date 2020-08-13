<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EopageMapping extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('eopage_mapping', function (Blueprint $table) {

                                                                  $table->bigIncrements('primary_key');
                                                                  $table->boolean('is_active')->default('true');
                                                                  $table->bigInteger('eoeventtype_primary_key');
                                                                  $table->bigInteger('eopagedesign_primary_key');
               });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::dropIfExists('eopage_mapping');
    }
}
