<?php

namespace App\Models\Home;

use Illuminate\Database\Eloquent\Model;

class EOHomepage extends Model
{
     protected $fillable = [
                              'created_date','created_time','is_active','updated_date','updated_time'

                               ];
                                protected $primaryKey = 'primary_key';
                                protected $table = 'eohome_page';

      public function eoHomeBannerArray()
                                   {
                                       return $this->belongsToMany('App\Models\image\EoImage');
                                   }
}
