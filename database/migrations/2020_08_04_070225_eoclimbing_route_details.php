<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EoclimbingRouteDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('eoclimbing_route_details', function (Blueprint $table) {

                        $table->increments('primary_key');
                        $table->string('ascent_date');
                        $table->boolean('claim_ascent')->default('false');
                        $table->string('created_date');
                        $table->string('created_time');
                        $table->string('grade_french');
                        $table->string('grade_yds');
                        $table->string('rating');
                        $table->string('style');
                        $table->string('updated_date');
                        $table->string('updated_time');
                        $table->string('eoclimbingroute_primary_key');
                        $table->string('eouser_primary_key');
                        $table->boolean('is_active')->default('true');
                        $table->bigInteger('lkgrade_primary_key');
                        $table->bigInteger('lkstyleofclimbing_primary_key');
                    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('eoclimbing_route_details');
    }
}
