<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EoeventType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eoevent_type', function (Blueprint $table) {

                                        $table->bigIncrements('primary_key');
                                        $table->string('event_type');
                                        $table->bigInteger('eoeventcategory');
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
         Schema::dropIfExists('eoevent_type');
    }
}
