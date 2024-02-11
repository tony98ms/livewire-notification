<?php

namespace Tonystore\LivewireNotification\Tests;

use Livewire\Component;

class TestComponent extends Component
{
    public string $event = 'success';

    public string $message = 'Hello';

    public bool $flash = false;

    public $options = [];
    public function getListeners()
    {
        return [
            'confirmed',
            'denied',
            'dismissed',
            'progressFinished'
        ];
    }
    public function showToast()
    {
        $this->alert(
            $this->event,
            $this->message,
            $this->options
        );
        return;
    }
    public function render()
    {
        return <<<'blade'
            <div>
                Hello Word!
            </div>
        blade;
    }
}
