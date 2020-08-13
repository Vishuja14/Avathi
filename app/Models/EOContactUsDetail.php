<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EOContactUsDetail extends Model
{
   protected $fillable = [
      'created_date','created_time','email_id','message','name','phone_number',
       ];
        protected $primaryKey = 'primary_key';
         protected $table = 'eocontactus_detail';
}
