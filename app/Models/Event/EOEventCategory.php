<?php

namespace App\Models\Event;

use Illuminate\Database\Eloquent\Model;

class EOEventCategory extends Model
{
    protected $fillable = [
             'created_date','created_time','event_category','is_active','updated_date','updated_time',

              ];
               protected $primaryKey = 'primary_key';
               protected $table = 'eoevent_category';

               public function EOEventType()
                              {
                                return $this->hasMany('App\Models\Event\EOEventType');
                                }
}
