<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Lkgrade extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('lkgrade', function (Blueprint $table) {

                                                                   $table->bigIncrements('primary_key');
                                                                   $table->string('grade_french');
                                                                   $table->string('grade_yds');
                                                                   $table->string('type');
                                                                   $table->string('v_scale');
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
       Schema::dropIfExists('lkgrade');
    }
}
