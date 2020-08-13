<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EOLogin extends Model
{
    protected $fillable = [
                             'created_date','created_time','otp','phone'

                              ];
                               protected $primaryKey = 'primary_key';
                               protected $table = 'eologin';
}
