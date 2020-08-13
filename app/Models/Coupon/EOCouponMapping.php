<?php

namespace App\Models\Coupon;

use Illuminate\Database\Eloquent\Model;

class EOCouponMapping extends Model
{
   protected $fillable = [
            'is_active','eocoupon_primary_key','eoevent_primary_key'
             ];
              protected $primaryKey = 'primary_key';
               protected $table = 'eocoupon_mapping';

   public function EOEvent()
                    {
                        return $this->belongsTo('App\Models\Event\EOEvent', 'eoevent_primary_key');
                    }
            public function EOCoupon()
                {
                    return $this->belongsTo('App\Models\Coupon\EOCoupon', 'eocoupon_primary_key');
                }
}
