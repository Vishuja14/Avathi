<?php

namespace App\Models\Coupon;

use Illuminate\Database\Eloquent\Model;

class EOCoupon extends Model
{
    protected $fillable = [
          'absolute_discount','coupon_name','created_date','created_time','end_date','end_time','is_active','percentage_discount','start_date','start_time','updated_date','updated_time','end_time_format','start_time_format'
           ];
            protected $primaryKey = 'primary_key';
             protected $table = 'eocoupon';
        public function EOCouponMapping()
              {
                  return $this->hasMany('App\Models\Coupon\EOCouponMapping');
              }
}
