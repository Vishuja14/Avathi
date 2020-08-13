<?php

namespace App\Models\lookup;

use Illuminate\Database\Eloquent\Model;

class LKRole extends Model
{
     protected $fillable = [
                                      'role_name','is_active'

                                       ];
                                        protected $primaryKey = 'primary_key';
                                        protected $table = 'lkrole';
}
