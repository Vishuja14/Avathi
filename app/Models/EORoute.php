<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EORoute extends Model
{
    protected $fillable = [
         'area ','crag','grade_dirty','grade_french ','grade_yds','is_active','latitude','longitude','main_city','pitches','rating','route_type','title','town'

                                            ];
                                             protected $primaryKey = 'primary_key';
                                             protected $table = 'eoroute';
}
