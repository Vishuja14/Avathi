<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EoeventCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

               Schema::create('eoevent_category', function (Blueprint $table) {

                                 $table->increments('primary_key');
                                 $table->string('created_date');
                                 $table->string('created_time');
                                 $table->string('event_category');
                                  $table->boolean('is_active')->default('true');
                                 $table->string('updated_date');
                                 $table->string('updated_time');

                             });

}
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eoevent_category');
    }
}
