<?php

namespace App\Models\lookup;

use Illuminate\Database\Eloquent\Model;

class LKGrade extends Model
{
    protected $fillable = [
                                   'grade_french','grade_yds','is_active','type','v_scale'

                                    ];
                                     protected $primaryKey = 'primary_key';
                                     protected $table = 'lkgrade';
}
