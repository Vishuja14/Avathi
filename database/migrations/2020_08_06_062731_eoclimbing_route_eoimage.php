<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EoclimbingRouteEoimage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('eoclimbing_route_eoimage', function (Blueprint $table) {

                                                                     $table->bigIncrements('primary_key');
                                                                     $table->bigInteger('eoclimbing_route_primary_key');
                                                                     $table->bigInteger('eorouteimagearray_primary_key');
                  });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::dropIfExists('eoclimbing_route_eoimage');
    }
}
