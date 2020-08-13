<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Eopagedesign extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('eopagedesign', function (Blueprint $table) {

                                                                        $table->bigIncrements('primary_key');
                                                                        $table->boolean('is_active')->default('true');
                                                                        $table->string('beg_desc');
                                                                        $table->string('beg_head');
                                                                        $table->string('created_date');
                                                                        $table->string('created_time');
                                                                        $table->string('description');
                                                                        $table->string('heading');
                                                                        $table->string('name');
                                                                        $table->string('tag');
                                                                        $table->string('updated_date');
                                                                        $table->string('updated_time');
                                                                        $table->string('whereto');
                                                                        $table->string('workshop_adv_desc');
                                                                        $table->string('workshop_adv_head');
                                                                        $table->string('workshopdesc');
                                                                        $table->string('workshop_int_desc');
                                                                        $table->string('workshop_int_head');
                                                                        $table->string('workshophead');
                                                                        $table->string('workshop_kid_head');
                                                                        $table->string('workshop_kids_desc');
                                                                        $table->bigInteger('eoimage_primary_key');
                                                                        $table->bigInteger('eoadvimage_primary_key');
                                                                        $table->bigInteger('eobegimage_primary_key');
                                                                        $table->bigInteger('eointimage_primary_key');
                                                                        $table->bigInteger('eokidsimage_primary_key');
                                                                        $table->string('banner_image_alt');
                                                                        $table->string('heading1_image_alt');
                                                                        $table->string('heading2_image_alt');
                                                                        $table->string('heading3_image_alt');
                                                                        $table->string('heading4_image_alt');
                                                                        $table->boolean('is_contact_us')->default('false');
                                                                        $table->string('meta_description');
                                                                        $table->string('meta_title');
                                                                        $table->string('page_url');
                     });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::dropIfExists('eopagedesign');
    }
}
