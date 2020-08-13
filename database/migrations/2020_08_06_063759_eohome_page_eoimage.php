<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EohomePageEoimage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eohome_page_eoimage', function (Blueprint $table) {

                                           $table->bigIncrements('primary_key');
                                           $table->bigInteger('eohome_page_primary_key');
                                            $table->bigInteger('eohomebannerarray_primary_key');
                                      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('eohome_page_eoimage');
    }
}
