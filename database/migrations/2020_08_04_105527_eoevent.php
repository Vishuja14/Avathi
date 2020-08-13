<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Eoevent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('eoevent', function (Blueprint $table) {

                        $table->bigIncrements('primary_key');
                         $table->string('created_date')->nullable();
                         $table->string('created_time')->nullable();
                         $table->string('deadline_date')->nullable();
                         $table->string('additional_detail')->nullable();
                         $table->string('deadline_time')->nullable();
                         $table->string('event_address')->nullable();
                         $table->string('experience_covid_response')->nullable();
                         $table->string('event_description')->nullable();
                         $table->string('experience_theme')->nullable();
                         $table->string('price_per_day')->nullable();
                         $table->string('google_business_id')->nullable();
                         $table->string('trip_advisior_id')->nullable();
                         $table->string('bookingcom_id')->nullable();
                         $table->string('experience_budget_type')->nullable();
                         $table->string('avathi_review')->nullable();
                         $table->string('event_end_date')->nullable();
                         $table->string('event_end_time')->nullable();
                         $table->string('event_location')->nullable();
                         $table->string('event_start_date')->nullable();
                         $table->string('event_start_time')->nullable();
                         $table->string('event_state_pincode')->nullable();
                         $table->boolean('is_active')->default('true');
                         $table->string('event_title')->nullable();
                         $table->string('faq_description')->nullable();
                         $table->string('iframe_url')->nullable();
                         $table->string('map_url')->nullable();
                         $table->string('event_host')->nullable();
                         $table->string('experience_type')->nullable();
                         $table->string('experience_duration')->nullable();
                         $table->string('updated_date')->nullable();
                         $table->string('updated_time')->nullable();
                         $table->bigInteger('eoimage_primary_key')->nullable();
                         $table->bigInteger('eocard_primary_key')->nullable();
                         $table->bigInteger('eouser_primary_key')->nullable();
                         $table->string('event_header')->nullable();
                         $table->string('created_at')->nullable();
                         $table->string('stay_type')->nullable();
                         $table->string('updated_at')->nullable();
                         $table->string('room_type')->nullable();
                         $table->string('experience_url')->nullable();
                         $table->string('stay_amenities')->nullable();
                         $table->boolean('is_online_events')->default('false');
                         $table->boolean('stay_included')->default('false');
                         $table->boolean('is_additional_detail')->default('false');
                     });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
          Schema::dropIfExists('eoevent');
    }
}
