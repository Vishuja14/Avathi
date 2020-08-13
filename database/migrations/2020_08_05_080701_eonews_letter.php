<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EonewsLetter extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('eonews_letter', function (Blueprint $table) {

                                                            $table->bigIncrements('primary_key');
                                                            $table->string('created_date');
                                                            $table->string('created_time');
                                                            $table->string('email');
                                                             $table->string('name');
                                                             $table->string('phone');
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::dropIfExists('eonews_letter');
    }
}
