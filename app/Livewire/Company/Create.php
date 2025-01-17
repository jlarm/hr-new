<?php

namespace App\Livewire\Company;

use App\Actions\company\CreateCompanyAction;
use App\Livewire\Forms\CreateCompanyForm;
use App\Models\Company;
use Flux\Flux;
use Illuminate\View\View;
use Livewire\Attributes\Title;
use Livewire\Component;

class Create extends Component
{
    public CreateCompanyForm $form;

    public function createNewCompany(): void
    {
        $this->authorize('create', Company::class);

        $this->validate();

        app(CreateCompanyAction::class)($this->form);

        $this->form->reset();

        $this->redirectRoute('company.index', navigate: true);

        Flux::toast(
            text: 'The company has been created successfully.',
            heading: 'Company created',
            variant: 'success',
        );

    }

    #[Title('Create Company')]
    public function render(): View
    {
        return view('livewire.company.create');
    }
}
