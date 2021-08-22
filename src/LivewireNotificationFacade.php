<?php

namespace Tonystore\LivewireNotification;

use Illuminate\Support\Facades\Facade;


class LivewireNotificationFacade extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'livewire-notification';
    }
}
