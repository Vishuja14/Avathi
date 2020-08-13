<?php

namespace App\Models\Event;

use Illuminate\Database\Eloquent\Model;

class EoEventEOImage extends Model
{
   protected $fillable = [
                                         'eoevent_primary_key','eobannerarray_primary_key'

                                          ];
                                           protected $primaryKey = 'primary_key';
                                           protected $table = 'eoevent_eoimage';
}
