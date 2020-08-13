<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LkeventLevel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('lkevent_level', function (Blueprint $table) {

                                                            $table->bigIncrements('primary_key');
                                                            $table->string('level');
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
        Schema::dropIfExists('lkevent_level');
    }
}
