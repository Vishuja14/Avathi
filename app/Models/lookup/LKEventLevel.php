<?php

namespace App\Models\lookup;

use Illuminate\Database\Eloquent\Model;

class LKEventLevel extends Model
{
     protected $fillable = [
                                'is_active','level'

                                 ];
                                  protected $primaryKey = 'primary_key';
                                  protected $table = 'lkevent_level';
}
