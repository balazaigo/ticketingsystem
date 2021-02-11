<?php

namespace Zaigo\TicketingSystem\traits;

use Zaigo\TicketingSystem\Models\ZaigoTicket;

trait ZaigoTicketableTrait
{
    public function zaigotickets(){
        return $this->morphMany(ZaigoTicket::class,'zaigoticketable');
    }
}
