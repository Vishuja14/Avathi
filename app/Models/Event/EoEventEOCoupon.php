<?php

namespace App\Models\Event;

use Illuminate\Database\Eloquent\Model;

class EoEventEOCoupon extends Model
{
   protected $fillable = [
                                      'eoevent_primary_key','eocoupon_primary_key'

                                       ];
                                        protected $primaryKey = 'primary_key';
                                        protected $table = 'eoevent_eocoupon';
}
