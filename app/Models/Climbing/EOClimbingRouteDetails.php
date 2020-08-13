<?php

namespace App\Models\Climbing;

use Illuminate\Database\Eloquent\Model;

class EOClimbingRouteDetails extends Model
{
     protected $fillable = [
       'ascent_date','claim_ascent','created_date','created_time','grade_french','grade_yds',
        'is_active','rating', 'style','updated_date','updated_time','eoclimbingroute_primary_key','eouser_primary_key',
        'lkgrade_primary_key','lkstyleofclimbing_primary_key'
        ];
         protected $primaryKey = 'primary_key';
         protected $table = 'eoclimbing_route_details';
          public function EOUser()
                   {
                       return $this->belongsTo('App\Models\EOUser', 'eouser_primary_key');
                   }
                   public function LKGrade()
                                     {
                                         return $this->belongsTo('App\Models\LKGrade', 'lkgrade_primary_key');
                                     }
                    public function EOClimbingRoute()
                                       {
                                           return $this->belongsTo('App\Models\Climbinge\EOClimbingRoute', 'eoclimbingroute_primary_key');
                                   }
                     public function LKStyleOfClimbing()
                                                           {
                                                               return $this->belongsTo('App\Models\Climbinge\LKStyleOfClimbing', 'lkstyleofclimbing_primary_key');
                                                       }
            public function EOImage()
                         {
                             return $this->belongsToMany('App\Models\image\EoImage');
                         }
}
