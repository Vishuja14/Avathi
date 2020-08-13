<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Eocoupon extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eocoupon', function (Blueprint $table) {
                                      $table->increments('primary_key');
                                      $table->double('absolute_discount');
                                      $table->string('coupon_name');
                                      $table->string('created_date');
                                      $table->string('created_time');
                                      $table->string('end_date');
                                      $table->string('end_time');
                                      $table->double('percentage_discount');
                                      $table->string('start_date');
                                      $table->string('start_time');
                                      $table->string('updated_date');
                                      $table->string('updated_time');
                                      $table->string('end_time_format');
                                      $table->string('start_time_format');
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
       Schema::dropIfExists('eocoupon');
    }
}
