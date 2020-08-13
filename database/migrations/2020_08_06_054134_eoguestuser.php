<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Eoguestuser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eoguestuser', function (Blueprint $table) {

                                                                 $table->bigIncrements('primary_key');
                                                                  $table->string('account_holder_name')->nullable();
                                                                  $table->string('account_number')->nullable();
                                                                  $table->string('avathi_score')->nullable();
                                                                  $table->string('contact_person_name')->nullable();
                                                                  $table->string('created_date')->nullable();
                                                                  $table->string('created_time')->nullable();
                                                                  $table->string('description')->nullable();
                                                                  $table->string('email')->nullable();
                                                                  $table->boolean('facebook')->default('false');
                                                                  $table->string('facebook_url')->nullable();
                                                                  $table->string('first_name')->nullable();
                                                                  $table->boolean('friend')->default('false');
                                                                  $table->bigInteger('gender')->nullable();
                                                                  $table->boolean('google')->default('false');
                                                                  $table->string('google_plus_url')->nullable();
                                                                  $table->bigInteger('ifsc_code')->nullable();
                                                                  $table->boolean('instagram')->default('false');
                                                                  $table->string('instagram_url')->nullable();
                                                                  $table->boolean('is_account_recovery')->default('false');
                                                                  $table->boolean('is_moved')->default('false');
                                                                  $table->string('last_name')->nullable();
                                                                  $table->string('medical')->nullable();
                                                                  $table->string('organisation_name')->nullable();
                                                                  $table->boolean('others')->default('false');
                                                                  $table->string('otp')->nullable();
                                                                  $table->string('password')->nullable();
                                                                  $table->string('phone')->nullable();
                                                                  $table->string('prefix')->nullable();
                                                                  $table->string('queries')->nullable();
                                                                  $table->string('recovery_date')->nullable();
                                                                  $table->string('recovery_time')->nullable();
                                                                  $table->string('shoe_size')->nullable();
                                                                  $table->string('twitter_url')->nullable();
                                                                  $table->string('updated_date')->nullable();
                                                                  $table->string('updated_time')->nullable();
                                                                  $table->string('vehicle')->nullable();
                                                                  $table->string('website')->nullable();
                                                                  $table->boolean('whatsapp')->default('false');
                                                                  $table->string('youtube_url')->nullable();
                                                                  $table->string('defaultrole_primary_key')->nullable();
                                                                  $table->string('eoimage_primary_key')->nullable();
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
        Schema::dropIfExists('eoguestuser');
    }
}
