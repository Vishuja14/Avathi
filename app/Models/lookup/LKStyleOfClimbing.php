<?php

namespace App\Models\lookup;

use Illuminate\Database\Eloquent\Model;

class LKStyleOfClimbing extends Model
{
    protected $fillable = [
                                             'style','is_active'

                                              ];
                                               protected $primaryKey = 'primary_key';
                                               protected $table = 'lkstyle_of_climbing';
}
