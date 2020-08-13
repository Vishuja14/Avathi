<?php

namespace App\Models\Event;

use Illuminate\Database\Eloquent\Model;

class EOEventType extends Model
{
   protected $fillable = [
                'event_type','is_active','eoeventcategory',

                 ];
                  protected $primaryKey = 'primary_key';
                  protected $table = 'eoevent_type';
}
