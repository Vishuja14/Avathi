<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EOItineraryDetail extends Model
{
   protected $fillable = [
                          'description','is_active','time','eoevent_primary_key','eoimage_primary_key'

                           ];
                            protected $primaryKey = 'primary_key';
                            protected $table = 'eoitinerary_detail';
     public function EOEvent()
                                        {
                                            return $this->belongsTo('App\Models\Event\EOEvent', 'eoevent_primary_key');
                                        }
      public function EOImage()
                                  {
                                      return $this->belongsTo('App\Models\image\EoImage', 'eoimage_primary_key');
                                  }
}
