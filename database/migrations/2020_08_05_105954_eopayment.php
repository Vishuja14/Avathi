<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Eopayment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('eopayment', function (Blueprint $table) {

                                                 $table->bigIncrements('primary_key');
                                                   $table->string('created_date');
                                                   $table->date('created_on');
                                                   $table->string('created_time');
                                                   $table->string('email');
                                                   $table->double('event_amount');
                                                   $table->string('first_name');
                                                   $table->string('last_name');
                                                   $table->string('merchant_transaction_id');
                                                   $table->string('mode');
                                                   $table->string('payment_id');
                                                   $table->string('pg_type');
                                                   $table->string('phone');
                                                   $table->string('product_info');
                                                   $table->string('status');
                                                   $table->string('unmapped_status');
                                                   $table->bigInteger('eoevent_primary_key');
                                                   $table->bigInteger('eouser_primary_key');
                                                   $table->bigInteger('eocoupon_primary_key');
                                                   $table->boolean('is_status_mail_sent')->default('false');
                                                   $table->string('created_on_payu');
                            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('eopayment');
    }
}
