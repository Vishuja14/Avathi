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
                                               $table->string('prefix');
                                               $table->string('firstName');
                                               $table->string('lastName');
                                               $table->string('contactPersonName');
                                               $table->string('gender');
                                               $table->string('email');
                                               $table->string('phone');
                                               $table->string('password');
                                               $table->string('organisationName');
                                               $table->string('description');
                                               $table->string('medical');
                                               $table->string('avathiScore');
                                               $table->string('accountHolderName');
                                               $table->string('accountNumber');
                                               $table->string('ifscCode');
                                               $table->string('website');
                                               $table->string('instagramUrl');
                                               $table->string('facebookUrl');
                                               $table->string('youtubeUrl');
                                               $table->string('twitterUrl');
                                               $table->string('googlePlusUrl');
                                               $table->string('instagram');
                                               $table->string('facebook');
                                               $table->string('google');
                                               $table->string('whatsapp');
                                               $table->string('friend');
                                               $table->string('others');
                                               $table->string('queries');
                                               $table->string('vehicle');
                                               $table->string('shoeSize');
                                               $table->string('createdDate');
                                               $table->string('updatedDate');

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
