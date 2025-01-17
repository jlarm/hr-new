<?php

namespace App\Livewire\Company;

use Livewire\Attributes\Title;
use Livewire\Component;

class Index extends Component
{
    #[Title('Companies')]
    public function render()
    {
        return view('livewire.company.index');
    }
}
