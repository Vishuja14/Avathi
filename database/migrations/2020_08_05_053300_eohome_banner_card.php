<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EohomeBannerCard extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eohome_banner_card', function (Blueprint $table) {

                                                            $table->bigIncrements('primary_key');
                                                            $table->string('created_date');
                                                            $table->string('created_time');
                                                            $table->string('updated_date');
                                                            $table->string('updated_time');
                                                            $table->bigInteger('eoevent_primary_key');
                                                            $table->bigInteger('eoimage_primary_key');
                                                            $table->bigInteger('eoblog_primary_key');
                                                            $table->bigInteger('eopagedesign_primary_key');
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
        Schema::dropIfExists('eohome_banner_card');
    }
}
