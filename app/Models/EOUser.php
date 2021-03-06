<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class EOUser extends  Authenticatable
{
    use HasApiTokens,Notifiable;
    protected $fillable = [
         'prefix','firstName','lastName','contactPersonName','gender','email',
          'phone','password', 'organisationName','description','medical','avathiScore','accountHolderName',
          'accountNumber','ifscCode','website', 'instagramUrl','facebookUrl','youtubeUrl','twitterUrl','googlePlusUrl','instagram','facebook','google','whatsapp','friend','others','queries','vehicle','shoeSize','createdDate','updatedDate','defaultrole_primary_key','otp','accessToken'
          ];
           protected $primaryKey = 'primary_key';
            protected $table = 'eouser';
            public $timestamps = false;
}
