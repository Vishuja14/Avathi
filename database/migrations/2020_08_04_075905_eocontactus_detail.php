<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EocontactusDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    Schema::create('eocontactus_detail', function (Blueprint $table) {
                               $table->increments('primary_key');
                               $table->string('created_date');
                               $table->string('created_time');
                               $table->string('email_id');
                               $table->string('message');
                               $table->string('name');
                               $table->string('phone_number');
                                 });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::dropIfExists('eocontactus_detail');
    }
}
