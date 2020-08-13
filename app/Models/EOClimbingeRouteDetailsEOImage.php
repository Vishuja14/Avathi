<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EOClimbingeRouteDetailsEOImage extends Model
{
  protected $fillable = [
                               'eoclimbing_route_details_primary_key','eorouteimagearray_primary_key'

                                ];
                                 protected $primaryKey = 'primary_key';
                                 protected $table = 'eoclimbing_route_details_eoimage';
}
