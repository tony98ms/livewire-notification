<?php

namespace Tonystore\LivewireNotification;

use Livewire\Component;
use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Console\AboutCommand;
use Tonystore\LivewireNotification\LivewireNotificationFacade;

class LivewireNotificationProvider extends ServiceProvider
{

    public function boot()
    {
        AboutCommand::add('Livewire Notification', fn () => ['Version' => '2.0.0']);
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
            $this->dispatch($type, alert: [
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
