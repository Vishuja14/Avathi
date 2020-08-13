<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EOTicketList extends Model
{
   protected $fillable = [
            'is_active ','ticket_amount1','ticket_desc','ticket_title ','updated_date','eoevent_primary_key','ticket_amount'

                                               ];
                                                protected $primaryKey = 'primary_key';
                                                protected $table = 'eoticket_list';
}
