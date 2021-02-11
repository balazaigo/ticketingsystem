<?php

namespace Zaigo\TicketingSystem\Models;

use Illuminate\Database\Eloquent\Model;

class ZaigoTicketComment extends Model
{

    protected $guarded = [];

    public function zaigoTicket(){
        return $this->belongsTo(ZaigoTicket::class,'ticket_id','id');
    }
}
