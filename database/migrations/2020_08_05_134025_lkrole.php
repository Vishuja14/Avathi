<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Lkrole extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('lkrole', function (Blueprint $table) {

                                                                           $table->bigIncrements('primary_key');
                                                                           $table->string('role_name');
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
        Schema::dropIfExists('lkrole');
    }
}
