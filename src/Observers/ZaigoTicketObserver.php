<?php

namespace Zaigo\TicketingSystem\Observers;

use Zaigo\TicketingSystem\Models\ZaigoTicket;

class ZaigoTicketObserver
{
    /**
     * Handle the ZaigoTicket "created" event.
     *
     * @param  ZaigoTicket  $zaigoTicket
     * @return void
     */
    public function created(ZaigoTicket $zaigoTicket)
    {
        //
    }

    /**
     * Handle the ZaigoTicket "updated" event.
     *
     * @param  ZaigoTicket  $zaigoTicket
     * @return void
     */
    public function updated(ZaigoTicket $zaigoTicket)
    {
        //
    }

    /**
     * Handle the ZaigoTicket "deleted" event.
     *
     * @param  ZaigoTicket  $zaigoTicket
     * @return void
     */
    public function deleted(ZaigoTicket $zaigoTicket)
    {
        //
    }

    /**
     * Handle the ZaigoTicket "restored" event.
     *
     * @param  ZaigoTicket  $zaigoTicket
     * @return void
     */
    public function restored(ZaigoTicket $zaigoTicket)
    {
        //
    }

    /**
     * Handle the ZaigoTicket "force deleted" event.
     *
     * @param  ZaigoTicket  $zaigoTicket
     * @return void
     */
    public function forceDeleted(ZaigoTicket $zaigoTicket)
    {
        //
    }
}
