<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Eouser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('eouser', function (Blueprint $table) {

                                               $table->bigIncrements('primary_key');
                                               $table->string('prefix')->nullable();;
                                               $table->string('firstName')->nullable();;
                                               $table->string('lastName')->nullable();;
                                               $table->string('contactPersonName')->nullable();;
                                               $table->string('gender')->nullable();;
                                               $table->string('email')->nullable();;
                                               $table->string('phone')->nullable();;
                                               $table->string('password')->nullable();;
                                               $table->string('organisationName')->nullable();;
                                               $table->string('description')->nullable();;
                                               $table->string('medical')->nullable();;
                                               $table->string('avathiScore')->nullable();;
                                               $table->string('accountHolderName')->nullable();;
                                               $table->string('accountNumber')->nullable();;
                                               $table->string('ifscCode')->nullable();;
                                               $table->string('website')->nullable();;
                                               $table->string('instagramUrl')->nullable();;
                                               $table->string('facebookUrl')->nullable();;
                                               $table->string('youtubeUrl')->nullable();;
                                               $table->string('twitterUrl')->nullable();;
                                               $table->string('googlePlusUrl')->nullable();;
                                               $table->string('instagram')->nullable();;
                                               $table->string('facebook')->nullable();;
                                               $table->string('google')->nullable();;
                                               $table->string('whatsapp')->nullable();;
                                               $table->string('friend')->nullable();;
                                               $table->string('others')->nullable();;
                                               $table->string('queries')->nullable();;
                                               $table->string('vehicle')->nullable();;
                                               $table->string('shoeSize')->nullable();;
                                               $table->string('createdDate')->nullable();;
                                               $table->string('updatedDate')->nullable();
                                               $table->integer('otp')->nullable();
                                               $table->bigInteger('defaultrole_primary_key')->nullable();

                                           });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::dropIfExists('eouser');
    }
}
