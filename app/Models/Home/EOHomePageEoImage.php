<?php

namespace App\Models\Home;

use Illuminate\Database\Eloquent\Model;

class EOHomePageEoImage extends Model
{
    protected $fillable = [
                                            'eohome_page_primary_key','eohomebannerarray_primary_key'

                                             ];
                                              protected $primaryKey = 'primary_key';
                                              protected $table = 'eohome_page_eoimage';
}
