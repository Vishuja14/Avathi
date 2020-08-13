<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EOUser extends Model
{
    protected $fillable = [
         'prefix','firstName','lastName','contactPersonName','gender','email',
          'phone','password', 'organisationName','description','medical','avathiScore','accountHolderName',
          'accountNumber','ifscCode','website', 'instagramUrl','facebookUrl','youtubeUrl','twitterUrl','googlePlusUrl','instagram','facebook','google','whatsapp','friend','others','queries','vehicle','shoeSize','createdDate','updatedDate'
          ];
           protected $primaryKey = 'primary_key';
            protected $table = 'eouser';
}
