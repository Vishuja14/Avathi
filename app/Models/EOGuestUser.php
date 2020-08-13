<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EOGuestUser extends Model
{
    protected $fillable = [
               'account_holder_name','account_number','avathi_score','contact_person_name','created_date','created_time','description',
               'email','facebook', 'facebook_url','first_name','friend','gender','google',
               'google_plus_url','ifsc_code','instagram', 'instagram_url','is_account_recovery','is_active','is_moved','last_name','medical','organisation_name','others','otp','password','phone','prefix','queries','recovery_date','recovery_time','shoe_size','twitter_url','updated_date','updated_time','vehicle','website','whatsapp','youtube_url','defaultrole_primary_key','eoimage_primary_key'
           ];


           protected $primaryKey = 'primary_key';
           protected $table = 'eoguestuser';
           public $timestamps = false;


}
