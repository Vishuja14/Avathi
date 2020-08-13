<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EOImage extends Model
{
    protected $fillable = [
        'display_name','entity_name','header_pk','imagestorepath','image_url','is_active','save_no','type','updated_at','created_at'

    ];
    protected $primaryKey = 'primary_key';
    protected $table = 'eoimage';
}
