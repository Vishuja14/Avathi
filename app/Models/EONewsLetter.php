<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EONewsLetter extends Model
{
    protected $fillable = [
                                 'created_date','created_time','email','name','phone'

                                  ];
                                   protected $primaryKey = 'primary_key';
                                   protected $table = 'eonews_letter';
}
