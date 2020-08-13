<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Model;

class EOBlog extends Model
{
   protected $fillable = [
           'banner_caption','blog_description','blog_tag','blog_title','blog_url','created_date','created_time',
           'is_active','posted_by', 'posted_date','sorting_date','updated_date','updated_time','eoimage_primary_key',
           'blog_header','meta_tag_description','eocard_primary_key', 'blog_activity','card_description'
       ];


       protected $primaryKey = 'primary_key';
       protected $table = 'eoblog';

       public function eoImage()
       {
           return $this->belongsTo('App\Models\image\EoImage', 'eoimage_primary_key');
       }

       public function eoCardImage()
       {
           return $this->belongsTo('App\Models\image\EoImage', 'eocard_primary_key');
       }

}
