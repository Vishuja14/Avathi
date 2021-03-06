<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LkrouteType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('lkroute_type', function (Blueprint $table) {

                                                                                  $table->bigIncrements('primary_key');
                                                                                  $table->string('route_type');
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
       Schema::dropIfExists('lkroute_type');
    }
}
