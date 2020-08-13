<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EocouponMapping extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    Schema::create('eocoupon_mapping', function (Blueprint $table) {
                                             $table->increments('primary_key');
                                              $table->boolean('is_active')->default('true');
                                             $table->double('eocoupon_primary_key');
                                             $table->double('eoevent_primary_key');
                                             });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('eocoupon_mapping');
    }
}
