<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Eoblog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('eoblog', function (Blueprint $table) {

                                                          $table->bigIncrements('primary_key');
                                                           $table->string('banner_caption');
                                                           $table->string('blog_description');
                                                           $table->string('blog_tag');
                                                           $table->string('blog_title');
                                                           $table->string('blog_url');
                                                           $table->string('created_date');
                                                           $table->string('created_time');
                                                           $table->string('posted_by');
                                                           $table->string('posted_date');
                                                           $table->string('sorting_date');
                                                           $table->string('updated_date');
                                                           $table->string('updated_time');
                                                           $table->bigInteger('eoimage_primary_key');
                                                           $table->string('blog_header');
                                                           $table->string('meta_tag_description');
                                                           $table->bigInteger('eocard_primary_key');
                                                           $table->string('blog_activity');
                                                           $table->string('card_description');
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
       Schema::dropIfExists('eoblog');
    }
}
