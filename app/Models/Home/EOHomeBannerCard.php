<?php

namespace App\Models\Home;

use Illuminate\Database\Eloquent\Model;

class EOHomeBannerCard extends Model
{
    protected $fillable = [
                          'created_date','created_time','is_active','updated_date','updated_time','eoevent_primary_key','eoimage_primary_key','eoblog_primary_key','eopagedesign_primary_key'

                           ];
                            protected $primaryKey = 'primary_key';
                            protected $table = 'eohome_banner_card';

     public function EOImage()
                             {
                                 return $this->belongsTo('App\Models\image\EoImage', 'eoimage_primary_key');
                             }
       public function EOEvent()
                                    {
                                        return $this->belongsTo('App\Models\Event\EOEvent', 'eoevent_primary_key');
                                    }
      public function EOBlog()
                                          {
                                              return $this->belongsTo('App\Models\Blog\EOBlog', 'eoblog_primary_key');
                                          }
       public function EOBlog()
                                                 {
                                                     return $this->belongsTo('App\Models\Blog\EOBlog', 'eoblog_primary_key');
                                                 }

        public function EOPageDesign()
                                                        {
                                                            return $this->belongsTo('App\Models\Page\EOPageDesign', 'eopagedesign_primary_key');
                                                        }
}
