<?php

namespace Zaigo\TicketingSystem\Models;

use Illuminate\Database\Eloquent\Model;
use Zaigo\TicketingSystem\Observers\ZaigoTicketObserver;

class ZaigoTicket extends Model
{

    protected $guarded = [];

    public function zaigoTicketComments(){
        return $this->hasMany(ZaigoTicketComment::class,'ticket_id','id');
    }

    public function zaigoticketable(){
        return $this->morphTo();
    }

    public function zaigoclosable(){
        return $this->morphTo();
    }
}
