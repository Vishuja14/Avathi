<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EoclimbingRoute extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('eoclimbing_route', function (Blueprint $table) {

                  $table->increments('primary_key');
                  $table->string('route_name');
                  $table->string('area');
                  $table->string('city');
                  $table->string('comment');
                  $table->string('country');
                  $table->string('grade_french');
                  $table->string('grade_yds');
                  $table->string('latitude');
                  $table->string('location_url');
                  $table->string('longitude');
                  $table->string('rating');
                  $table->string('route_type');
                  $table->string('town');
                  $table->boolean('is_active')->default('true');
                  $table->string('v_scale');
                  $table->bigInteger('eouser_primary_key')->unsigned()->index();
                  $table->bigInteger('lkgrade_primary_key')->unsigned()->index();
                  $table->bigInteger('lkroutetype_primary_key')->unsigned()->index();
                  $table->string('google_map_url');
                  $table->string('meta_description');
                  $table->string('meta_title');
                  $table->string('created_date');
                  $table->string('updated_date');
                  $table->string('updated_time');
                  $table->string('created_time');
                   //$table->foreign('eouser_primary_key')->references('id')->on('EOUser')->onUpdate('cascade')->onDelete('cascade');
                   //$table->foreign('lkgrade_primary_key')->references('id')->on('lkgrade')->onUpdate('cascade')->onDelete('cascade');
                   //$table->foreign('lkroutetype_primary_key')->references('id')->on('lkroute_type')->onUpdate('cascade')->onDelete('cascade');
              });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::dropIfExists('eoclimbing_route');
    }
}
