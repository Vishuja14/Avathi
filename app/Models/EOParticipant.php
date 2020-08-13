<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EOParticipant extends Model
{
     protected $fillable = [
                                    'created_date','created_time','email','first_name','last_name','phone','shoe_size','updated_date','updated_time','eopayment_primary_key'

                                     ];
                                      protected $primaryKey = 'primary_key';
                                      protected $table = 'eoparticipant';

     public function eoPayment()
                                             {
                                                 return $this->belongsTo('App\Models\EOPayment', 'eopayment_primary_key');
                                             }
}
