<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EOClimbingeRouteEOImage extends Model
{
    protected $fillable = [
                                   'eoclimbing_route_primary_key','eorouteimagearray_primary_key'

                                    ];
                                     protected $primaryKey = 'primary_key';
                                     protected $table = 'eoclimbing_route_eoimage';
}
