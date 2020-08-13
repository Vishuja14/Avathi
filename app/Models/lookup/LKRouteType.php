<?php

namespace App\Models\lookup;

use Illuminate\Database\Eloquent\Model;

class LKRouteType extends Model
{
     protected $fillable = [
                                          'route_type','is_active'

                                           ];
                                            protected $primaryKey = 'primary_key';
                                            protected $table = 'lkroute_type';
}
