<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EOUserEOImage extends Model
{
   protected $fillable = [
                  'eouser_primary_key','eomediaarray_primary_key'

                                                ];
                                                 protected $primaryKey = 'primary_key';
                                                 protected $table = 'eouser_eoimage';
}
