<?php

namespace App\Livewire\Company;

use App\Models\Company;
use Livewire\Attributes\Locked;
use Livewire\Component;

class IndexItem extends Component
{
    #[Locked]
    public Company $company;

    public function render()
    {
        return view('livewire.company.index-item');
    }
}
