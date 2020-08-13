<?php

namespace App\Models\Page;

use Illuminate\Database\Eloquent\Model;

class EOPageMapping extends Model
{
    protected $fillable = [
                                    'is_active','eoeventtype_primary_key','eopagedesign_primary_key'

                                     ];
                                      protected $primaryKey = 'primary_key';
                                      protected $table = 'eopage_mapping';

    public function EOEventType()
                                        {
                                            return $this->belongsTo('App\Models\Event\EOEventType', 'eoeventtype_primary_key');
                                        }

      public function EOPageDesign()
                                             {
                                                 return $this->belongsTo('App\Models\Page\EOPageDesign', 'eopagedesign_primary_key');
                                             }
}
