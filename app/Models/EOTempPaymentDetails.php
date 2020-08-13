<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EOTempPaymentDetails extends Model
{
    protected $fillable = [
            'payment_details ','created_date','created_time'

                                               ];
                                                protected $primaryKey = 'primary_key';
                                                protected $table = 'eotemp_payment_details';
}
