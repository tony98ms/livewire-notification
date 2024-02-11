<?php

namespace Tonystore\LivewireNotification\Tests;

use Livewire\LivewireServiceProvider;
use Tonystore\LivewireNotification\LivewireNotificationProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function getPackageProviders($app): array
    {
        return [
            LivewireServiceProvider::class,
            LivewireNotificationProvider::class
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('app.key', 'base64:9BLvxrqZjcRwnrHzaI4gOvRaSs2GBQodhp6snnDFEqc=');
    }
}
