<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EotempPaymentDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    Schema::create('eotemp_payment_details', function (Blueprint $table) {

                                                            $table->bigIncrements('primary_key');
                                                              $table->string('payment_details');
                                                              $table->date('created_date');
                                                              $table->string('created_time');
                                       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eotemp_payment_details');
    }
}
