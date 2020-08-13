<?php

namespace App\Models\Event;

use Illuminate\Database\Eloquent\Model;

class EOEvent extends Model
{
   protected $fillable = [
          'created_date','created_time','deadline_date','deadline_time','event_address',
           'event_description','event_host','event_end_date', 'event_end_time','event_location','event_start_date','event_start_time','event_state_pincode',
           'event_title','faq_description','experience_type','experience_budget_type','price_per_day','experience_theme','experience_duration','iframe_url','is_active','map_url','updated_date','updated_time','eoimage_primary_key','eouser_primary_key','event_header','is_online_events','is_additional_detail','updated_at','created_at','additional_detail','experience_covid_response',
           'google_business_id','trip_advisior_id','bookingcom_id','avathi_review','eocard_primary_key','stay_included','stay_type','room_type','stay_amenities','experience_url'
           ];
            protected $primaryKey = 'primary_key';
            protected $table = 'eoevent';

             public function EOImage()
                         {
                             return $this->belongsToMany('App\Models\EOImage');
                         }
             public function EOUser()
                       {
                           return $this->belongsTo('App\Models\EOUser', 'eouser_primary_key');
                       }
               public function EOEventType()
                                     {
                                         return $this->belongsTo('App\Models\Event\EOEventType', 'eoeventtype_primary_key');
                                     }

                public function EOEventCategory()
                                         {
                                         return $this->belongsTo('App\Models\Event\EOEventCategory', 'eoeventcategory_primary_key');
                                         }
                 public function LKEventLevel()
                                              {
                                          return $this->belongsTo('App\Models\lookup\LKEventLevel', 'lkeventlevel_primary_key');
                                          }
              //  public function EOCoupon()
                               // {
                                    //return $this->morphToMany('App\Models\Coupon\EOCoupon', 'eocoupon_primary_key');
                                //}

    public function eoCardImage()
    {
        return $this->belongsTo('App\Models\image\EoImage', 'eocard_primary_key');
    }
}
