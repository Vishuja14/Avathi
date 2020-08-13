<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Eoroute extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('eoroute', function (Blueprint $table) {

                                                        $table->bigIncrements('primary_key');
                                                          $table->string('area');
                                                          $table->date('crag');
                                                          $table->string('grade_dirty');
                                                          $table->string('grade_french');
                                                          $table->double('grade_yds');
                                                          $table->string('latitude');
                                                          $table->string('longitude');
                                                          $table->string('main_city');
                                                          $table->integer('pitches');
                                                          $table->integer('rating');
                                                          $table->string('route_type');
                                                          $table->string('title');
                                                          $table->string('town');
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
        Schema::dropIfExists('eoroute');
    }
}
