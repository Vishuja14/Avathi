<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EoticketList extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     Schema::create('eoticket_list', function (Blueprint $table) {

                                                                 $table->bigIncrements('primary_key');
                                                                  $table->boolean('is_active')->default('true');
                                                                   $table->string('ticket_amount1');
                                                                   $table->string('ticket_desc');
                                                                   $table->string('ticket_title');
                                                                   $table->string('updated_date');
                                                                   $table->string('eoevent_primary_key');
                                                                   $table->integer('ticket_amount');
                                            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('eoticket_list');
    }
}
