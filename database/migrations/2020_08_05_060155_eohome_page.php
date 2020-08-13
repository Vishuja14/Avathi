<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EohomePage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('eohome_page', function (Blueprint $table) {

                                                                   $table->bigIncrements('primary_key');
                                                                   $table->string('created_date');
                                                                   $table->string('created_time');
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
         Schema::dropIfExists('eohome_page');
    }
}
