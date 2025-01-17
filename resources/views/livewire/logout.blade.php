<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component {
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
}; ?>

<div>
    <flux:menu.item wire:click="logout" icon="arrow-right-start-on-rectangle">Logout</flux:menu.item>
</div>
