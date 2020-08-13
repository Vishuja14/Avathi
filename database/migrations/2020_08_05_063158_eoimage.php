<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Eoimage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eoimage', function (Blueprint $table) {

                                                                          $table->bigIncrements('primary_key');
                                                                          $table->string('display_name')->nullable();
                                                                          $table->string('entity_name')->nullable();
                                                                          $table->bigInteger('header_pk')->nullable();
                                                                          $table->string('imagestorepath')->nullable();
                                                                          $table->string('image_url')->nullable();
                                                                          $table->string('type')->nullable();
                                                                          $table->string('created_at')->nullable();
                                                                          $table->string('updated_at')->nullable();
                                                                          $table->integer('save_no')->nullable();
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
       Schema::dropIfExists('eoimage');
    }
}
