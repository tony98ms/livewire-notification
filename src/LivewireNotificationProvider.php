<?php

namespace Tonystore\LivewireNotification;

use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Support\ServiceProvider;
use Tonystore\LivewireNotification\LivewireNotificationFacade;

class LivewireNotificationProvider extends ServiceProvider
{

    public function boot()
    {
        $this->registerViews();
        $this->registerAlertMacro();
        $this->registerPublishables();
    }

    protected function registerViews()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'livewire-notification');
    }


    protected function registerAlertMacro()
    {
        Component::macro('alert', function ($type = 'success',  $message = '',  $options = []) {
            $options = array_merge(config('livewire-notification.toast') ?? [], $options);
            //Triggers the event to execute the notification.
            $this->emit($type, [
                'modal' => $options['modal'] ?? null,
                'message' => $message,
                'options' => collect($options)->except([
                    'modal'
                ])->toArray(),
            ]);
        });
    }
    public function registerPublishables()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/config.php' => config_path('livewire-notification.php'),
            ], 'config');
        }
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'livewire-notification');

        $this->app->singleton('livewire-notification', function () {
            return new LivewireNotificationFacade;
        });
    }
}
