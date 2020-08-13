<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LkstyleOfClimbing extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('lkstyle_of_climbing', function (Blueprint $table) {

                                                    $table->bigIncrements('primary_key');
                                                     $table->string('style');
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
         Schema::dropIfExists('lkstyle_of_climbing');
    }
}
