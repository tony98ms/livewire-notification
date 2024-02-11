<?php

namespace Tonystore\LivewireNotification\Tests;

use Livewire\Livewire;

class LivewireNotificationTest extends TestCase
{
    public function test_alert_success(): void
    {
        Livewire::test(TestComponent::class)
            ->call('showToast')
            ->assertDispatched('success');
    }
    public function test_alert_error(): void
    {
        Livewire::test(TestComponent::class)
            ->set('event', 'error')
            ->call('showToast')
            ->assertDispatched('error');
    }
    public function test_alert_info(): void
    {
        Livewire::test(TestComponent::class)
            ->set('event', 'info')
            ->call('showToast')
            ->assertDispatched('info');
    }
    public function test_alert_warning(): void
    {
        Livewire::test(TestComponent::class)
            ->set('event', 'warning')
            ->call('showToast')
            ->assertDispatched('warning');
    }
}
