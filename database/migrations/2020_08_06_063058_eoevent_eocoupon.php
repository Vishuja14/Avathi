<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EoeventEocoupon extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eoevent_eocoupon', function (Blueprint $table) {

                                                                            $table->bigIncrements('primary_key');
                                                                            $table->bigInteger('eoevent_primary_key');
                                                                            $table->bigInteger('eocoupon_primary_key');
                         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eoevent_eocoupon');
    }
}
