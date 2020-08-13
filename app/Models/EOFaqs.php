<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EOFaqs extends Model
{
   protected $fillable = [
                       'created_date','created_time','entity_name','entity_pk','faq_list','is_active','updated_date','updated_time'

                        ];
                         protected $primaryKey = 'primary_key';
                         protected $table = 'eofaqs';
}
