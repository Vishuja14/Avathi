<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EOPayment extends Model
{
      protected $fillable = [
                                        'created_date','created_on','created_time','email ','event_amount','first_name','last_name','merchant_transaction_id','mode','payment_id','pg_type','phone','product_info','status','unmapped_status','eoevent_primary_key','eouser_primary_key','eocoupon_primary_key','is_status_mail_sent','created_on_payu'

                                         ];
                                          protected $primaryKey = 'primary_key';
                                          protected $table = 'eopayment';

    public function eoPayment()
                                                 {
                                                     return $this->belongsTo('App\Models\EOPayment', 'eopayment_primary_key');
                                                 }
     public function eoUser()
              {
                  return $this->belongsTo('App\Models\EOUser', 'eouser_primary_key');
              }
       public function eoEvent()
                                           {
                                               return $this->belongsTo('App\Models\Event\EOEvent', 'eoevent_primary_key');
                                           }

        public function eoCoupon()
                                                   {
                                                       return $this->belongsTo('App\Models\Coupon\EOCoupon', 'eocoupon_primary_key');
                                                   }

}
