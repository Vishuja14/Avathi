<?php

namespace App\Models\Climbing;

use Illuminate\Database\Eloquent\Model;

class EoClimbingRoute extends Model
{
    protected $fillable = [
   'route_name','area','city','comment','country','crag',
    'created_date','created_time', 'grade_french','grade_yds','is_active','latitude','location_url',
    'longitude','rating','route_type', 'town','updated_date','updated_time','v_scale','eouser_primary_key','lkgrade_primary_key','lkroutetype_primary_key','google_map_url','meta_description','meta_title'
    ];
     protected $primaryKey = 'primary_key';
      protected $table = 'eoclimbing_route';
      public function EOUser()
         {
             return $this->belongsTo('App\Models\EOUser', 'eouser_primary_key');
         }

        public function LKGrade()
                  {
                      return $this->belongsTo('App\Models\LKGrade', 'lkgrade_primary_key');
                  }

        public function LKRouteType()
                 {
                     return $this->belongsTo('App\Models\LKRouteType', 'lkroutetype_primary_key');
                 }
         public function EOImage()
             {
                 return $this->belongsToMany('App\Models\image\EoImage');
             }
}
