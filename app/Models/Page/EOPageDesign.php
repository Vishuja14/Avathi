<?php

namespace App\Models\Page;

use Illuminate\Database\Eloquent\Model;

class EOPageDesign extends Model
{
   protected $fillable = [
                                       'is_active','beg_desc','beg_head','created_date','created_time','description','heading','name','tag','updated_date','updated_time','whereto','workshop_adv_desc','workshop_adv_head','workshopdesc','workshop_int_desc','workshop_int_head','workshophead','workshop_kid_head','workshop_kids_desc','eoimage_primary_key','eoadvimage_primary_key','eobegimage_primary_key','eointimage_primary_key','eokidsimage_primary_key','banner_image_alt','heading1_image_alt','heading2_image_alt','heading3_image_alt','heading4_image_alt','is_contact_us','meta_description','meta_title','page_url'

                                        ];
                                         protected $primaryKey = 'primary_key';
                                         protected $table = 'eopagedesign';

   public function eoImage()
                            {
                                return $this->belongsTo('App\Models\image\EoImage', 'eoimage_primary_key');
                            }

   public function eobegImage()
       {
           return $this->belongsTo('App\Models\image\EoImage', 'eobegimage_primary_key');
       }

   public function eoadvImage()
          {
              return $this->belongsTo('App\Models\image\EoImage', 'eoadvimage_primary_key');
          }

   public function eointImage()
             {
                 return $this->belongsTo('App\Models\image\EoImage', 'eointimage_primary_key');
             }

    public function eokidsImage()
                 {
                     return $this->belongsTo('App\Models\image\EoImage', 'eokidsimage_primary_key');
                 }
}
