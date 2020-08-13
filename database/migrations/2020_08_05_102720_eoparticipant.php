<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Eoparticipant extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('eoparticipant', function (Blueprint $table) {

                                           $table->bigIncrements('primary_key');
                                            $table->boolean('is_active')->default('true');
                                             $table->string('created_date');
                                             $table->string('created_time');
                                             $table->string('email');
                                             $table->string('first_name');
                                             $table->string('last_name');
                                             $table->string('phone');
                                             $table->string('shoe_size');
                                             $table->string('updated_date');
                                             $table->string('updated_time');
                                             $table->bigInteger('eopayment_primary_key');
                      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eoparticipant');
    }
}
