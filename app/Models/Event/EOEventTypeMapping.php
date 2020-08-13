<?php

namespace App\Models\Event;

use Illuminate\Database\Eloquent\Model;

class EOEventTypeMapping extends Model
{
    protected $fillable = [
                    'is_active','eoeventtype_primary_key','eouser_primary_key',

                     ];
                      protected $primaryKey = 'primary_key';
                      protected $table = 'eoevent_type_mapping';
       public function EOEventType()
                                          {
                                              return $this->belongsTo('App\Models\Event\EOEventType', 'eoeventtype_primary_key');
                                          }
       public function EOUser()
                              {
                                  return $this->belongsTo('App\Models\EOUser', 'eouser_primary_key');
                              }
}
