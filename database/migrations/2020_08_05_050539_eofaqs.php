<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Eofaqs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

             Schema::create('eofaqs', function (Blueprint $table) {

                                                     $table->bigIncrements('primary_key');
                                                     $table->string('created_date');
                                                     $table->string('created_time');
                                                     $table->string('entity_name');
                                                     $table->string('entity_pk');
                                                     $table->string('faq_list');
                                                     $table->string('updated_date');
                                                     $table->string('updated_time');
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
         Schema::dropIfExists('eofaqs');
    }
}
